<?php

namespace Plugin\BatchCartInput;

use Eccube\Event\EventArgs;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\DomCrawler\Crawler;

class Event
{

    /** @var  \Eccube\Application $app */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }


    /**
     * 商品一覧画面
     *
     * @param TemplateEvent $event
     */
    public function onRenderProductList($event)
    {
        require_once (__DIR__ . '/simple_html_dom.php');

        $parameters = $event->getParameters();

        //foreach($parameters['pagination'] as $Product) {
        //    foreach($Product->getProductClasses() as $ProductClass) {
        //        //dump($ProductClass);
        //    }
        //}

        $html = $event->getSource();
        $data = str_get_html($html);

        $snipet = $this->app['twig']->getLoader()->getSource('BatchCartInput/Resource/template/index.twig');
        $data->find('#item_list',0)->innertext = $snipet;

        $event->setSource($data);
    }

    public function beforeProductList($event)
    {
        $request = $event->getRequest();
        if ($request->getMethod() === 'GET' && isset($_GET['mode']) && $_GET['mode'] == 'allincart') {
            foreach($_GET['product_id'] as $key => $id) {
                $Product = $this->app['eccube.repository.product']->get($id);
                if (count($Product->getProductClasses()) < 1) {
                    continue;
                }
                if ($_GET['quantity'][$key] > 0 && ctype_digit($_GET['quantity'][$key])) {
                    try {
                        $this->app['eccube.service.cart']->addProduct($_GET['product_class_id'][$key], $_GET['quantity'][$key])->save();
                    } catch (CartException $e) {
                        $this->app->addRequestError($e->getMessage());
                    }
                }

            }
            $response = $this->app->redirect($this->app->url('cart'));
            $event->setResponse($response);
        }
    }
}
