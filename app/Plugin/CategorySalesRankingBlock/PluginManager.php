<?php

/*
 * This file is part of the CategorySalesRankingBlock
 *
 * Copyright (C) 2017 kurozumi
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CategorySalesRankingBlock;

use Eccube\Common\Constant;
use Eccube\Entity\Block;
use Eccube\Entity\BlockPosition;
use Eccube\Entity\Master\DeviceType;
use Eccube\Entity\PageLayout;
use Eccube\Application;
use Eccube\Plugin\AbstractPluginManager;
use Eccube\Util\Cache;
use Symfony\Component\Filesystem\Filesystem;
use Plugin\CategorySalesRankingBlock\Entity\Config;

class PluginManager extends AbstractPluginManager
{
    const PAGE_ID = 2;

    private $originBlock;

    private $blockName = "カテゴリ別売り上げランキング";

    private $blockFileName = "plugin_category_sales_ranking";

    public function __construct()
    {
        // コピー元ブロックファイル
        $this->originBlock = __DIR__.'/Resource/template/Block/'.$this->blockFileName.'.twig';
    }

    /**
     * プラグインインストール時の処理
     *
     * @param $config
     * @param Application $app
     * @throws \Exception
     */
    public function install($config, Application $app)
    {
    }

    /**
     * プラグイン削除時の処理
     *
     * @param $config
     * @param Application $app
     */
    public function uninstall($config, Application $app)
    {
        $this->migrationSchema($app, __DIR__.'/Resource/doctrine/migration', $config['code'], 0);

        // ブロックの削除
        $this->removeDataBlock($app);

        $this->removeBlock($app);
    }

    /**
     * プラグイン有効時の処理
     *
     * @param $config
     * @param Application $app
     * @throws \Exception
     */
    public function enable($config, Application $app)
    {
        $this->migrationSchema($app, __DIR__.'/Resource/doctrine/migration', $config['code']);

        $Config = $app['orm.em']
            ->getRepository('Plugin\CategorySalesRankingBlock\Entity\Config')
            ->getLastInsertData();

        if(is_null($Config)) {
            $Config = new Config();
            $Config
                ->setIntervalNumber(1)
                ->setIntervalUnit('year')
                ->setNumItems(10)
                ->setAggregationType('count');

            $app['orm.em']->persist($Config);
            $app['orm.em']->flush($Config);
        }

        $this->copyBlock($app);
        // ブロックへ登録
        $this->createDataBlock($app);
    }

    /**
     * プラグイン無効時の処理
     *
     * @param $config
     * @param Application $app
     * @throws \Exception
     */
    public function disable($config, Application $app)
    {
        $this->removeBlock($app);
        // ブロックの削除
        $this->removeDataBlock($app);
    }

    /**
     * プラグイン更新時の処理
     *
     * @param $config
     * @param Application $app
     * @throws \Exception
     */
    public function update($config, Application $app)
    {
        $this->migrationSchema($app, __DIR__.'/Resource/doctrine/migration', $config['code']);

        $Config = $app['orm.em']
            ->getRepository('Plugin\CategorySalesRankingBlock\Entity\Config')
            ->getLastInsertData();

        if(is_null($Config)) {
            $Config = new Config();
            $Config
                ->setIntervalNumber(1)
                ->setIntervalUnit('year')
                ->setNumItems(10)
                ->setAggregationType('count');

            $app['orm.em']->persist($Config);
            $app['orm.em']->flush($Config);
        }
    }

    private function createDataBlock($app)
    {
        $em = $app['orm.em'];

        try {
            $DeviceType = $app['eccube.repository.master.device_type']->find(DeviceType::DEVICE_TYPE_PC);

            $Block = $app['eccube.repository.block']->findOneBy(array('DeviceType' => $DeviceType, 'file_name' => $this->blockFileName));

            if(!$Block) {
                $Block = $app['eccube.repository.block']->findOrCreate(null, $DeviceType);

                // Block登録
                $Block->setName($this->blockName)
                        ->setFileName($this->blockFileName)
                        ->setDeletableFlg(Constant::DISABLED)
                        ->setLogicFlg(1);
                $em->persist($Block);
                $em->flush($Block);
            }

            $blockPos = $em->getRepository('Eccube\Entity\BlockPosition')->findOneBy(array('block_id' => $Block->getId()));
            if($blockPos) {
                return;
            }

            // BlockPositionの登録
            $blockPos = $em->getRepository('Eccube\Entity\BlockPosition')->findOneBy(
                array('page_id' => self::PAGE_ID, 'target_id' => PageLayout::TARGET_ID_SIDE_RIGHT),
                array('block_row' => 'DESC')
            );

            $BlockPosition = new BlockPosition();
            // ブロックの順序を変更

            $BlockPosition->setBlockRow(1);
            if ($blockPos) {
                $blockRow = $blockPos->getBlockRow() + 1;
                $BlockPosition->setBlockRow($blockRow);
            }

            $PageLayout = $app['eccube.repository.page_layout']->find(self::PAGE_ID);
            $BlockPosition->setPageLayout($PageLayout)
                ->setPageId($PageLayout->getId())
                ->setTargetId(PageLayout::TARGET_ID_SIDE_RIGHT)
                ->setBlock($Block)
                ->setBlockId($Block->getId())
                ->setAnywhere(Constant::DISABLED);
            $em->persist($BlockPosition);
            $em->flush($BlockPosition);
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * ブロックを削除.
     *
     * @param \Eccube\Application $app
     *
     * @throws \Exception
     */
    private function removeDataBlock($app)
    {
        // Blockの取得(file_nameはアプリケーションの仕組み上必ずユニーク)
        /** @var \Eccube\Entity\Block $Block */
        $Block = $app['eccube.repository.block']->findOneBy(array('file_name' => $this->blockFileName));
        if (!$Block) {
            Cache::clear($app, false);
            return;
        }
        $em = $app['orm.em'];
        try {
            // BlockPositionの削除
            $blockPositions = $Block->getBlockPositions();
            /** @var \Eccube\Entity\BlockPosition $BlockPosition */
            foreach ($blockPositions as $BlockPosition) {
                $Block->removeBlockPosition($BlockPosition);
                $em->remove($BlockPosition);
            }
            // Blockの削除
            $em->remove($Block);
            $em->flush();
        } catch (\Exception $e) {
            throw $e;
        }
        Cache::clear($app, false);
    }

    /**
     * Copy block template.
     *
     * @param $app
     */
    private function copyBlock($app)
    {
        // ファイルコピー
        $file = new Filesystem();
        // ブロックファイルをコピー
        $file->copy($this->originBlock, $app['config']['block_realdir'].'/'.$this->blockFileName.'.twig');
    }

    /**
     * Remove block template.
     *
     * @param $app
     */
    private function removeBlock($app)
    {
        $file = new Filesystem();
        $file->remove($app['config']['block_realdir'].'/'.$this->blockFileName.'.twig');
    }

}
