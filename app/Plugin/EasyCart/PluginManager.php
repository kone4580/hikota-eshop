<?php
/**
 * This file is part of the EasyCart
 *
 * Copyright (C) 2016 IDS Corporation
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\EasyCart;

use Eccube\Plugin\AbstractPluginManager;
use Symfony\Component\Filesystem\Filesystem;

class PluginManager extends AbstractPluginManager
{
    const PLUGIN_CODE = 'EasyCart';

    /**
     * プラグインインストール時の処理
     *
     * @param $config
     * @param $app
     * @throws \Exception
     */
    public function install($config, $app)
    {
    }

    /**
     * プラグイン削除時の処理
     *
     * @param $config
     * @param $app
     * @throws \Exception
     */
    public function uninstall($config, $app)
    {
        $appConfig = $app['config'];
        $cd = $config['code'];
        $plgFront = $appConfig['plugin_html_realdir'] . "/{$cd}/";
        $fs = new Filesystem();
        if ($fs->exists($plgFront)) {
            $fs->remove($plgFront);
        }
    }

    /**
     * プラグイン有効時の処理
     *
     * @param $config
     * @param $app
     * @throws \Exception
     */
    public function enable($config, $app)
    {
        $appConfig = $app['config'];
        $cd = $config['code'];
        $plg = $appConfig['plugin_realdir'] . "/{$cd}/html/";
        $plgFront = $appConfig['plugin_html_realdir'] . "/{$cd}/";

        $fs = new Filesystem();
        $fs->mirror($plg, $plgFront, null, array('override' => true));
    }

    /**
     * プラグイン無効時の処理
     *
     * @param $config
     * @param $app
     * @throws \Exception
     */
    public function disable($config, $app)
    {
    }

    /**
     * プラグイン更新時の処理
     *
     * @param $config
     * @param Application $app
     * @throws \Exception
     */
    public function update($config, $app)
    {
        $this->disable($config, $app);
        $this->install($config, $app);
        $Plugin = $app['eccube.repository.plugin']->findOneBy(array('code' => $config['code']));
        if ($Plugin->getEnable()) {
            $this->enable($config, $app);
        }
    }
}
