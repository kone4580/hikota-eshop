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

use Eccube\Common\Constant;
use Eccube\Event\TemplateEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Plugin\EasyCart\PluginManager;

class EasyCartEvent
{

    /**
     * @var \Eccube\Application
     */
    private $app;

    /**
     * ImgExpansion constructor.
     *
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * 商品詳細 > twig テンプレート を変更
     *
     * @param TemplateEvent $event
     */
    public function onRenderProductDetail(TemplateEvent $event)
    {
        // ソースを取得
        $source = $event->getSource();
        $parameters = $event->getParameters();
        $plgCode = PluginManager::PLUGIN_CODE;

        $twigFilePath = __DIR__ . '/Resource/template/detail_js.twig';
        if (!file_exists($twigFilePath) || !$source) {
            return;
        }

        $plgFrontDir = $this->app['config']['plugin_urlpath'] . "/{$plgCode}/";
        $twigFile = file_get_contents($twigFilePath);
        $addSource = "{% block javascript %}\n"
                . "<link rel=\"stylesheet\" href=\"{$plgFrontDir}css/style.css\">\n"
                . $twigFile
        ;
        $chgSource = str_replace('{% block javascript %}', $addSource, $source);
        $event->setSource($chgSource);

        // - 3.0.10 までのバグ（ID重複） ⇒ バージョン判定を行いIDを渡す
        $cartBtnId = '#detail_cart_box #cart';
        if (version_compare(Constant::VERSION, '3.0.10', '>')) {
            $cartBtnId = '#add-cart';
        }
        $event->setParameters(array_merge($parameters, array('cartBtnId' => $cartBtnId)));
    }

    /**
     * 商品一覧 > twig テンプレート を変更
     *
     * @param TemplateEvent $event
     */
    public function onRenderProductList(TemplateEvent $event)
    {
        // ソースを取得
        $source = $event->getSource();
        $plgCode = PluginManager::PLUGIN_CODE;
        $twigFilePath = __DIR__ . '/Resource/template/list_js.twig';
        if (!file_exists($twigFilePath) || !$source) {
            return;
        }

        $match = array();
        preg_match_all('/result_list__name(.+?)<\/div>/is', $source, $match, PREG_SET_ORDER);
        if ($match) {
            $item = current($match);
            $addSource = '<button type="button" onclick="ajaxView(\'{{ Product.id }}\');" class="btn btn-success btn-block">詳細</button>';
            $source = str_replace($item[1], "{$item[1]}\n{$addSource}", $source);
        }

        $plgFrontDir = $this->app['config']['plugin_urlpath'] . "/{$plgCode}/";
        $twigFile = file_get_contents($twigFilePath);
        $addSource = "{% block javascript %}\n"
                . "<script src=\"{$plgFrontDir}js/jquery.colorbox-min.js\"></script>\n"
                . "<link rel=\"stylesheet\" href=\"{$plgFrontDir}css/style.css\">\n"
                . $twigFile
        ;

        $chgSource = str_replace('{% block javascript %}', $addSource, $source);
        $event->setSource($chgSource);
    }
}
