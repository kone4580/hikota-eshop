<?php
/**
 * This file is part of the ImgExpansionServiceTest
 *
 * Copyright (C) 2016 IDS Corporation
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Plugin\ImgExpansion\Tests\Service;

use Eccube\Tests\EccubeTestCase;
use Plugin\ImgExpansion\ServiceProvider\ImgExpansionServiceProvider;

/**
 * テスト項目がない・・・
 */
class ImgExpansionServiceTest extends EccubeTestCase
{
    /**
     * テスト開始時の処理
     */
    public function setUp()
    {
        parent::setUp();
        $provider = new ServiceProvider();
        $provider->register($this->app);
    }
}
