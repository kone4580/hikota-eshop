<?php return array (
  'BatchCartInput' => 
  array (
    'config' => 
    array (
      'name' => '商品一括購入プラグイン for EC-CUBE3',
      'code' => 'BatchCartInput',
      'version' => '0.0.2',
      'event' => 'Event',
      'service' => 
      array (
        0 => 'BatchCartInputServiceProvider',
      ),
    ),
    'event' => 
    array (
      'Product/list.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderProductList',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.route.product_list.response' => 
      array (
        0 => 
        array (
          0 => 'beforeProductList',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'CategorySalesRankingBlock' => 
  array (
    'config' => 
    array (
      'name' => 'カテゴリ別ランキングブロック for EC-CUBE3',
      'code' => 'CategorySalesRankingBlock',
      'version' => '1.0.3',
      'service' => 
      array (
        0 => 'CategorySalesRankingBlockServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => NULL,
  ),
  'Maker' => 
  array (
    'config' => 
    array (
      'name' => 'Maker',
      'event' => 'MakerEvent',
      'code' => 'Maker',
      'version' => '1.0.0',
      'service' => 
      array (
        0 => 'MakerServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'admin.product.edit.initialize' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductEditInitialize',
          1 => 'NORMAL',
        ),
      ),
      'admin.product.edit.complete' => 
      array (
        0 => 
        array (
          0 => 'onAdminProductEditComplete',
          1 => 'NORMAL',
        ),
      ),
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onRenderProductDetail',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_product_product_new.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProduct',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.admin_product_product_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProduct',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.product_detail.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderProductDetailBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'ProductReview' => 
  array (
    'config' => 
    array (
      'name' => '商品レビュープラグイン',
      'code' => 'ProductReview',
      'version' => '1.0.1',
      'service' => 
      array (
        0 => 'ProductReviewServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'event' => 'Event',
      'const' => 
      array (
        'review_regist_min' => 1,
        'review_regist_max' => 30,
      ),
    ),
    'event' => 
    array (
      'Product/detail.twig' => 
      array (
        0 => 
        array (
          0 => 'onProductDetailRender',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.render.product_detail.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderProductsDetailBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
);