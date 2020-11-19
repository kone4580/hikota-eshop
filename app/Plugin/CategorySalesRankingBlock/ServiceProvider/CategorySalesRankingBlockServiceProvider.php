<?php

/*
 * This file is part of the CategorySalesRankingBlock
 *
 * Copyright (C) 2017 kurozumi
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CategorySalesRankingBlock\ServiceProvider;

use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossedHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Plugin\CategorySalesRankingBlock\Form\Type\CategorySalesRankingBlockConfigType;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;
use Plugin\CategorySalesRankingBlock\Service\SalesRankingService;

class CategorySalesRankingBlockServiceProvider implements ServiceProviderInterface
{

    public function register(BaseApplication $app)
    {
        // プラグイン用設定画面
        $app->match('/' . $app['config']['admin_route'] . '/plugin/CategorySalesRankingBlock/config', 'Plugin\CategorySalesRankingBlock\Controller\ConfigController::index')->bind('plugin_CategorySalesRankingBlock_config');

        // 独自コントローラ
        $app->match('/block/plugin_category_sales_ranking', 'Plugin\CategorySalesRankingBlock\Controller\Block\CategorySalesRankingBlockController::index')->bind('block_plugin_category_sales_ranking');

        // Form
        $app['form.types'] = $app->share($app->extend('form.types', function ($types) use ($app) {
            $types[] = new CategorySalesRankingBlockConfigType($app);
            return $types;
        }));

        // Service
        $app['category_sales_ranking.service.sales_ranking'] = $app->share(function () use ($app) {
            return new SalesRankingService($app);
        });

        // Repository
        $app['eccube.plugin.category_sales_ranking_block.repository.config'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('Plugin\CategorySalesRankingBlock\Entity\Config');
        });

        // メッセージ登録
        $file = __DIR__ . '/../Resource/locale/message.' . $app['locale'] . '.yml';
        $app['translator']->addResource('yaml', $file, $app['locale']);
    }

    public function boot(BaseApplication $app)
    {
    }

}
