<?php

/*
 * This file is part of the CategorySalesRankingBlock
 *
 * Copyright (C) 2017 kurozumi
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CategorySalesRankingBlock\Controller\Block;

use Eccube\Application;
use Eccube\Common\Constant;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\NoResultException;

class CategorySalesRankingBlockController
{

    /**
     * CategorySalesRankingBlock画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {
        $Ranking = $Category = null;

        $SalesRankingService = $app['category_sales_ranking.service.sales_ranking'];
        $Config = $app['eccube.plugin.category_sales_ranking_block.repository.config']->getLastInsertData();

        $categoryId = $app['request']->get('category_id') ?
            $app['request']->get('category_id') : $Config->getCategory();

        if($categoryId) {
            $Category = $app['eccube.repository.category']->find($categoryId);
            $SalesRankingService->setCategory($Category);
        }

        $Ranking = $SalesRankingService
                    ->setIntervalNumber($Config->getIntervalNumber())
                    ->setIntervalUnit($Config->getIntervalUnit())
                    ->setLimit($Config->getNumItems())
                    ->setAggregationType($Config->getAggregationType())
                    ->getData();

        return $app->render('Block\plugin_category_sales_ranking.twig', array(
            'Category' => $Category,
            'category_sales_ranking' => $Ranking
        ));
    }
}
