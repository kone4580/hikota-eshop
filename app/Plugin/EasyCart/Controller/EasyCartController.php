<?php
/**
 * This file is part of the EasyCart
 *
 * Copyright (C) 2016 IDS Corporation
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\EasyCart\Controller;

use Eccube\Application;
use Eccube\Common\Constant;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DomCrawler\Crawler;
use Plugin\EasyCart\PluginManager;
use Eccube\Exception\CartException;

class EasyCartController
{

    private $cartInfo = array();

    /**
     * ajax によるカート投入処理
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function ajaxCart(Application $app, Request $request)
    {
        $errors = array();

        if ($request->getMethod() !== 'POST') {
            return $app->redirect($app->url('top'));
        }
        $id = $request->get('product_id');

        $BaseInfo = $app['eccube.repository.base_info']->get();
        if ($BaseInfo->getNostockHidden() === Constant::ENABLED) {
            $app['orm.em']->getFilters()->enable('nostock_hidden');
        }

        /* @var $Product \Eccube\Entity\Product */
        $Product = $app['eccube.repository.product']->get($id);
        if ($Product->getStatus()->getId() !== 1) {
            $errors['product'] = '現在、販売しておりません。';
        }
        if (count($Product->getProductClasses()) < 1) {
            $errors['product'] = '商品がありません。';
        }

        /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
        $builder = $app['form.factory']->createNamedBuilder('', 'add_cart', null, array(
            'product' => $Product,
            'id_add_product_id' => false,
        ));
        $form = $builder->getForm();
        $form->handleRequest($request);

        if ($errors) {
            $success = false;
        }

        if ($form->isValid()) {
            $success = true;
            $addCartData = $form->getData();
            if ($addCartData['mode'] !== 'ajax_cart') {
                $success = false;
                $errors['error'] = "不正なアクセス\n";
            }
        }
        else {
            $success = false;
            foreach ($form->getIterator() as $key) {
                if (!$key->isValid()) {
                    $name = $key->getName();
                    foreach ($key->getErrors() as $err) {
                        $errors[$name] .= $app->trans($err->getMessage()) . "\n";
                    }
                }
            }
        }

        $cart = null;
        $baseInfo = $app['eccube.repository.base_info']->get();
        $payments = null;
        $totalPrice = null;
        if ($success && $baseInfo->getOptionMultipleShipping() == Constant::ENABLED) {
            // ECCUBEバグ対応. 複数配送設定の変更を行った場合に、同時購入可能な商品もエラー扱いとなる
            $cart = $app['eccube.service.cart']->getCart();
            $payments = $cart->getPayments();
            $totalPrice = $cart->getTotalPrice();
        }

        if ($success && $cart && 0 < $totalPrice && !$payments) {
            $ProductClass = $app['orm.em']->getRepository('Eccube\Entity\ProductClass')->find($addCartData['product_class_id']);
            $ProductType = $ProductClass->getProductType();
            $app['orm.em']->getRepository('\Eccube\Entity\Delivery')
                ->findBy(array('ProductType' => $ProductType));

            $deliveries = $app['orm.em']->getRepository('\Eccube\Entity\Delivery')
                ->findBy(array('ProductType' => $ProductType));

            $payments = $app['orm.em']->getRepository('Eccube\Entity\Payment')->findAllowedPayments($deliveries);
            $cart->setPayments($payments);
        }

        if ($success) {
            try {
                $app['eccube.service.cart']->addProduct($addCartData['product_class_id'], $addCartData['quantity'])->save();
            }
            catch (CartException $e) {
                $addMsg = $app['eccube.service.cart']->getCanAddProductType();
                $app->addRequestError($e->getMessage());
            }
        }

        if ($success && $app['session']->getFlashBag()->has('eccube.front.request.error')) {
            $success = false;
            $productStr = $app['session']->getFlashBag()->get('eccube.front.request.product');
            $cartErrors = (array) $app['session']->getFlashBag()->get('eccube.front.request.error');
            foreach ($cartErrors as $key => $error) {
                if (isset($productStr[$key])) {
                    $errors['quantity'] .= $app->trans($error, array('%product%' => $productStr[$key])) . "\n";
                }
                else {
                    $errors['quantity'] .= $app->trans($error) . "\n";
                }
            }
        }

        if ($success && $app['session']->getFlashBag()->has('eccube.front.cart.error')) {
            $success = false;
            $cartErrors = (array) $app['session']->getFlashBag()->get('eccube.front.cart.error');
            foreach ($cartErrors as $key => $error) {
                $errors['add-cart'] .= $app->trans($error) . "\n";
            }
        }

        $blockCart = null;
        if ($success) {
            $Cart = $app['eccube.service.cart']->getCart();
            $html = $app->render(
                    'Block/cart.twig',
                    array('Cart' => $Cart)
            )->getContent();

            $this->cartInfo['totalQty'] = $Cart['total_quantity'];
            $this->cartInfo['totalPrice'] = '&yen; ' . number_format($Cart['total_price']);
            $this->cartInfo['CartItems'] = $Cart['CartItems'];

            $crawler = new Crawler();
            $crawler->addHtmlContent($html);

            // DOM書き換えにより、既存の処理が行えない為、別 function による処理へ変更
            $oldBtnArea = $crawler->filter('.btn_area')->html();
            $newBtnArea = str_replace('type="button"', 'type="button" onclick="closeCart();"', $oldBtnArea);

            $oldCart =$crawler->filter('#cart .inner')->html();
            $blockCart = str_replace($oldBtnArea, $newBtnArea, $oldCart);
        }

        $data = array(
            'success' => $success,
            'error' => $errors,
            'blockCart' => $blockCart,
            'totalQty' => $this->getCartInfo('totalQty', 0),
            'totalPrice' => $this->getCartInfo('totalPrice', 0)
        );
        return $app->json($data);
    }

    /**
     * ajax による商品詳細表示
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function ajaxDetail(Application $app, Request $request)
    {
        $errorMsg = '';
        $plgCode = PluginManager::PLUGIN_CODE;

        if ($request->getMethod() !== 'POST') {
            return $app->redirect($app->url('top'));
        }
        $id = $request->get('product_id');

        $BaseInfo = $app['eccube.repository.base_info']->get();
        if ($BaseInfo->getNostockHidden() === Constant::ENABLED) {
            $app['orm.em']->getFilters()->enable('nostock_hidden');
        }

        /* @var $Product \Eccube\Entity\Product */
        $Product = $app['eccube.repository.product']->get($id);
        if ($Product->getStatus()->getId() !== 1) {
            $errorMsg = '現在、販売しておりません。';
        }
        if (count($Product->getProductClasses()) < 1) {
            $errorMsg = '商品がありません。';
        }

        /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
        $builder = $app['form.factory']->createNamedBuilder('', 'add_cart', null, array(
            'product' => $Product,
            'id_add_product_id' => false,
        ));
        $form = $builder->getForm();

        if (!$errorMsg) {
            $html = $app->render($plgCode . '/Resource/template/detail_view.twig', array(
                'title' => '',
                'subtitle' => $Product->getName(),
                'form' => $form->createView(),
                'Product' => $Product,
            ))->getContent();
        }
        else {
            $html = $app->render($plgCode . '/Resource/template/error.twig', array(
                'title' => '',
                'error_message' => $errorMsg,
            ))->getContent();
        }

        // id="mode" が被る為、idを置換
        if ($html && !$errorMsg) {
            $html = str_replace('id="mode"', 'id="ajax_mode"', $html);
        }

        $data = array(
            'detail' => $html
        );

        return $app->json($data);
    }

    /**
     * cartInfo プロパティの配列をチェックし値（無い場合は$_default）または配列を返す
     * @param  string $_key
     * @param  string $_default
     * @return string|array
     */
    public function getCartInfo($_key = '', $_default = '')
    {
        if ($_key) {
            $default = isset($this->cartInfo[$_key]) ? $this->cartInfo[$_key] : $_default;

            return $default;
        }
        return $this->cartInfo;
    }
}
