<?php

/*
* This file is part of the CategorySalesRankingBlock
*
* Copyright (C) 2017 kurozumi
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\CategorySalesRankingBlock\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Eccube\Util\Str;
use Plugin\CategorySalesRankingBlock\Entity\Config;

class ConfigController
{

    /**
    * CategorySalesRankingBlock用設定画面
    *
    * @param Application $app
    * @param Request $request
    * @return \Symfony\Component\HttpFoundation\Response
    */
    public function index(Application $app, Request $request)
    {
        $Config = $app['eccube.plugin.category_sales_ranking_block.repository.config']->getLastInsertData();

        $form = $app['form.factory']
            ->createBuilder('category_sales_ranking_block_config', $Config)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if($form->isValid()) {

                $Config = $form->getData();

                $em = $app['orm.em'];
                $em->persist($Config);
                $em->flush($Config);

                $app->addSuccess('admin.register.complete', 'admin');

                return $app->redirect($app->url('plugin_CategorySalesRankingBlock_config'));
            } else{
                $app->addError('admin.register.failed', 'admin');
            }
        }

        return $app->render('CategorySalesRankingBlock/Resource/template/admin/config.twig', array(
            'form' => $form->createView(),
        ));
    }

}
