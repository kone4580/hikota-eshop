<?php
/**
 * This file is part of the EasyCart
 *
 * Copyright (C) 2016 IDS Corporation
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\EasyCart\ServiceProvider;

use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossedHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;
use Plugin\EasyCart\PluginManager;

class EasyCartServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {
        $plgCode = PluginManager::PLUGIN_CODE;

        // 独自コントローラ
        $app->match('/plugin/' . $plgCode . '/ajaxCart',
                'Plugin\\' . $plgCode . '\\Controller\\EasyCartController::ajaxCart')
                ->bind('plugin_EasyCart_ajaxCart');

        $app->match('/plugin/' . $plgCode . '/ajaxDetail',
                'Plugin\EasyCart\Controller\EasyCartController::ajaxDetail')
                ->bind('plugin_EasyCart_ajaxDetail');
    }

    public function boot(BaseApplication $app)
    {
    }
}
