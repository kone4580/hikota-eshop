<?php

/*
 * This file is part of the BatchCartInput
 *
 * Copyright (C) 2017 BatchCartInput
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\BatchCartInput\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class BatchCartInputController
{

    /**
     * BatchCartInput画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        // add code...

        return $app->render('BatchCartInput/Resource/template/index.twig', array(
            // add parameter...
        ));
    }

}
