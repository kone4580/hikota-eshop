<?php

/* __string_template__0fafea266f2cd2a1a2d51d37b3fd08f82cd5a97e0a41e09d49b7f275ee0f352d */
class __TwigTemplate_188a8b19aeda6b6af3c3298a51c8930b70122be3ab967ffd1eca35bc55af90c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__0fafea266f2cd2a1a2d51d37b3fd08f82cd5a97e0a41e09d49b7f275ee0f352d", 1);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["body_class"] = "product_page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        // line 6
        echo "<script>
    eccube.classCategories = ";
        // line 7
        echo twig_jsonencode_filter($this->getAttribute(($context["Product"] ?? null), "class_categories", array()));
        echo ";

    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var \$form = \$(form);
        var product_id = \$form.find('input[name=product_id]').val();
        var \$sele1 = \$form.find('select[name=classcategory_id1]');
        var \$sele2 = \$form.find('select[name=classcategory_id2]');
        eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
    }

    ";
        // line 18
        if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
            // line 19
            echo "    fnSetClassCategories(
            document.form1, ";
            // line 20
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
    );
    ";
        } elseif ($this->getAttribute(        // line 22
($context["form"] ?? null), "classcategory_id1", array(), "any", true, true)) {
            // line 23
            echo "          eccube.checkStock(document.form1, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
            echo ", ";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), "vars", array()), "value", array()));
            echo ", null);
    ";
        }
        // line 25
        echo "</script>

<script>
\$(function(){
  \$('.carousel').slick({
    infinite: false,
    speed: 300,
    prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
    nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }
    ]
  });

  \$('.slides').slick({
    dots: true,
    arrows: false,
    speed: 300,
    customPaging: function(slider, i) {
      return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
    }
  });

  \$('#favorite').click(function() {
    \$('#mode').val('add_favorite');
  });

  \$('#add-cart').click(function() {
    \$('#mode').val('add_cart');
  });

  // bfcache無効化
  \$(window).bind('pageshow', function(event) {
    if (event.originalEvent.persisted) {
      location.reload(true);
    }
  });
});
</script>

";
    }

    // line 75
    public function block_main($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        // line 89
        echo "
    <main id=\"main_wrap\" role=\"main\">

  \t\t<div class=\"product_wrap\">
  \t\t\t<div class=\"wrap\">
          <div id=\"item_photo_area\" class=\"product_image\">
            <div id=\"detail_image_box__slides\" class=\"slides\">
              ";
        // line 96
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "ProductImage", array())) > 0)) {
            // line 97
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductImage", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 98
                echo "                <div id=\"detail_image_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/></div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "              ";
        } else {
            // line 101
            echo "                <div id=\"detail_image_box__item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
            echo "\"/></div>
              ";
        }
        // line 103
        echo "            </div>
          </div>


          <div class=\"product_info\">

              <h2 class=\"product_info-title\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
        echo "</h2>

              ";
        // line 111
        if ( !twig_test_empty($this->getAttribute(($context["Product"] ?? null), "ProductTag", array()))) {
            // line 112
            echo "                <!--▼商品タグ-->
                <div id=\"product_tag_box\" class=\"product_tag\">
                  ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductTag"]) {
                // line 115
                echo "                    <span id=\"product_tag_box__product_tag--";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductTag"], "Tag", array()), "id", array()), "html", null, true);
                echo "\" class=\"product_tag_list\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductTag"], "Tag", array()), "html", null, true);
                echo "</span>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                </div>
                <hr>
                <!--▲商品タグ-->
              ";
        }
        // line 121
        echo "

              <!--★商品説明★-->
              <div class=\"product_info-desc\">
                ";
        // line 125
        echo nl2br($this->getAttribute(($context["Product"] ?? null), "description_detail", array()));
        echo "
              </div>


              <!-- ▼関連カテゴリ▼ -->
              <div id=\"relative_category_box\" class=\"relative_cat\">
                <p class=\"sq1\">関連カテゴリ</p>
                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Product"] ?? null), "ProductCategories", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 133
            echo "                  <ol class=\"list_link\" id=\"relative_category_box__relative_category--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                    ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["ProductCategory"], "Category", array()), "path", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 135
                echo "                      <li><a id=\"relative_category_box__relative_category--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductCategory"], "product_id", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Category"], "name", array()), "html", null, true);
                echo "</a></li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                  </ol>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "              </div>
              <!-- ▲関連カテゴリ▲ -->


              <!--▼商品コード-->
              <div class=\"product_info-table\">
    \t\t\t\t\t\t<dl>
    \t\t\t\t\t\t\t<dt>商品コード</dt>
    \t\t\t\t\t\t\t<dd>";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "code_min", array()), "html", null, true);
        echo "
                  ";
        // line 148
        if (($this->getAttribute(($context["Product"] ?? null), "code_min", array()) != $this->getAttribute(($context["Product"] ?? null), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "code_max", array()), "html", null, true);
        }
        echo "</dd>
    \t\t\t\t\t\t</dl>
                <!--# maker-plugin-tag #-->";
        // line 160
        if (($context["maker_url"] ?? null)) {
            // line 161
            echo "  <dl>
    <dt>ブランド</dt>
    <dd><a href=\"";
            // line 163
            echo twig_escape_filter($this->env, ($context["maker_url"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, ($context["maker_name"] ?? null), "html", null, true);
            echo "</a></dd>
  </dl>
";
        } else {
            // line 166
            echo "  <dl>
    <dt>ブランド</dt>
    <dd>";
            // line 168
            echo twig_escape_filter($this->env, ($context["maker_name"] ?? null), "html", null, true);
            echo "</dd>
  </dl>
";
        }
        // line 171
        echo "
    \t\t\t\t\t</div>
              <!--▲商品コード-->



              <div class=\"product_info-pricezone\">
                <!--★通常価格★-->
                ";
        // line 179
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 180
            if (( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())) && ($this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array())))) {
                // line 181
                echo "                    <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())), "html", null, true);
                echo "</span> <span class=\"small\">（税抜）</span></p>
                  ";
            } elseif (( !(null === $this->getAttribute(            // line 182
($context["Product"] ?? null), "getPrice01Min", array())) &&  !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array())))) {
                // line 183
                echo "                    <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array())), "html", null, true);
                echo "</span> <span class=\"small\">（税抜）</span></p>
                  ";
            }
            // line 185
            echo "                ";
        } else {
            // line 186
            if ( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array()))) {
                // line 187
                echo "                    <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())), "html", null, true);
                echo "</span> <span class=\"small\">（税抜）</span></p>
                  ";
            }
            // line 189
            echo "                ";
        }
        // line 191
        echo "<!--★販売価格★-->
                ";
        // line 192
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 193
            if (($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMax", array()))) {
                // line 194
                echo "                    <p class=\"product_info-price\">サロン様価格:
                      ";
                // line 195
                if ($this->getAttribute(($context["app"] ?? null), "isGranted", array(0 => "ROLE_USER"), "method")) {
                    // line 196
                    echo "                        <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02Min", array())), "html", null, true);
                    echo "</span>（税抜）
                      ";
                } else {
                    // line 198
                    echo "<span class=\"font-blue\">ログイン後に表示されます</span>
                      ";
                }
                // line 200
                echo "                    </p>
                    ";
            } else {
                // line 202
                echo "                    <p class=\"product_info-price\">サロン様価格:
                      ";
                // line 203
                if ($this->getAttribute(($context["app"] ?? null), "isGranted", array(0 => "ROLE_USER"), "method")) {
                    // line 204
                    echo "                        <span class=\"\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02Min", array())), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02Max", array())), "html", null, true);
                    echo "</span>（税抜）
                      ";
                } else {
                    // line 206
                    echo "<span class=\"font-blue\">ログイン後に表示されます</span>
                      ";
                }
                // line 208
                echo "                    </p>
                  ";
            }
            // line 210
            echo "                ";
        } else {
            // line 211
            echo "<p class=\"product_info-price\">サロン様価格: <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02Min", array())), "html", null, true);
            echo "</span>（税抜）</p>
                ";
        }
        // line 213
        echo "</div>



              <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                <!--▼買い物かご-->
                <div id=\"detail_cart_box\" class=\"cart_area\">
                  ";
        // line 220
        if ($this->getAttribute(($context["Product"] ?? null), "stock_find", array())) {
            // line 221
            echo "                    ";
            // line 222
            echo "                    ";
            if ($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array(), "any", true, true)) {
                // line 223
                echo "                      <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                        ";
                // line 225
                echo "                        <li>
                          ";
                // line 226
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'widget');
                echo "
                          ";
                // line 227
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'errors');
                echo "
                        </li>
                        ";
                // line 230
                echo "                        ";
                if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
                    // line 231
                    echo "                          <li>
                            ";
                    // line 232
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'widget');
                    echo "
                            ";
                    // line 233
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'errors');
                    echo "
                          </li>
                        ";
                }
                // line 236
                echo "                      </ul>
                    ";
            }
            // line 238
            echo "
                    ";
            // line 240
            echo "                    <dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                      <dt>数量</dt>
                      <dd>
                        ";
            // line 243
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
            echo "
                        ";
            // line 244
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
            echo "
                      </dd>
                    </dl>

                    <div class=\"extra-form\">
                      ";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 250
                echo "                        ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 251
                    echo "                          ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                        ";
                }
                // line 253
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "                    </div>

                    ";
            // line 256
            if ($this->getAttribute(($context["app"] ?? null), "isGranted", array(0 => "ROLE_USER"), "method")) {
                // line 257
                echo "                      ";
                // line 258
                echo "                      <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                        <button type=\"submit\" id=\"add-cart\" class=\"btn-add_cart\">カートに入れる</button>

                        ";
                // line 262
                echo "                        ";
                if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                    // line 263
                    echo "                          ";
                    if ((($context["is_favorite"] ?? null) == false)) {
                        // line 264
                        echo "                            <button type=\"submit\" id=\"favorite\" class=\"btn-favo\"><i class=\"far fa-heart\"></i>お気に入りに追加</button>
                          ";
                    } else {
                        // line 266
                        echo "                            <button type=\"submit\" id=\"favorite\" class=\"btn-favo\" disabled=\"disabled\">お気に入りに追加済みです</button>
                          ";
                    }
                    // line 268
                    echo "                        ";
                }
                // line 269
                echo "                      </div> ";
                // line 270
                echo "                    ";
            }
            // line 271
            echo "                  ";
        } else {
            // line 272
            echo "                    ";
            // line 273
            echo "                    <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                      <ul class=\"row\">
                        <li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
                      </ul>
                      ";
            // line 278
            echo "                      ";
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                // line 279
                echo "                        ";
                if ((($context["is_favorite"] ?? null) == false)) {
                    // line 280
                    echo "                          <button type=\"submit\" id=\"favorite\" class=\"btn-favo\"><i class=\"far fa-heart\"></i>お気に入りに追加</button>
                        ";
                } else {
                    // line 282
                    echo "                          <button type=\"submit\" id=\"favorite\" class=\"btn-favo\" disabled=\"disabled\">お気に入りに追加済みです</button>
                        ";
                }
                // line 284
                echo "                      ";
            }
            // line 285
            echo "                    </div> ";
            // line 286
            echo "                  ";
        }
        echo " ";
        // line 287
        echo "                </div>
                <!--▲買い物かご-->
                ";
        // line 289
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
              </form>

        </div>
      </div>


      <div class=\"product_under mt80\">
  \t\t\t<div class=\"wrap\">
          ";
        // line 299
        echo "          ";
        if ($this->getAttribute(($context["Product"] ?? null), "freearea", array())) {
            // line 300
            echo "          <div id=\"sub_area\" class=\"row\">
              <div class=\"col-sm-10 col-sm-offset-1\">
                  <div id=\"detail_free_box__freearea\" class=\"freearea\">";
            // line 302
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute(($context["Product"] ?? null), "freearea", array())));
            echo "</div>
              </div>
          </div>
          ";
        }
        // line 315
        echo "
";
        // line 322
        echo "
<style type=\"text/css\">
    #product_review_area {
        border-top: 1px solid #E8E8E8;
        padding-bottom: 0;
    }
    #product_review_area dl dt {
        padding: 16px 0;
        cursor: pointer;
    }
    #product_review_area dl dt:hover {
        color: #9797A0;
    }
    #product_review_area dl dt.active .cb {
        transform: rotate(180deg);
    }
    #product_review_area dl dt .cb {
        position: absolute;
        right: 16px;
        top: 17px;
    }
    #product_review_area dl dd {
        display: none;
        padding-bottom: 0;
    }
    #product_review_area .review_btn a {
        margin: 0 auto;
        padding: 16px;
        width: 100%;
    }
    #product_review_area .review_list {
        padding: 8px 0;
    }
    #product_review_area .review_list li {
        padding: 8px 0;
    }
    #product_review_area .review_list p {
        margin: 0px 0;
    }
    #product_review_area .review_list .review_date {
        font-weight: bold;
    }
    #product_review_area .recommend_average {
        margin-left: 16px;
        color: #DE5D50;
    }
    #product_review_area .review_list .recommend_level {
        margin-left: 16px;
        color: #DE5D50;
    }
    #product_review_area .review_list .recommend_name {
        margin-left: 16px;
    }
    
    @media only screen and (min-width: 768px) {
        #product_review_area {
            border-top: none;
            padding-bottom: 16px;
        }
        #product_review_area dl dt {
            padding: 16px;
        }
        #product_review_area dl dt .cb {
            position: absolute;
            right: 32px;
            top: 24px;
            font-size: 16px;
            font-size: 1.6rem;
        }
        #product_review_area dl dd {
            display: block;
            padding: 0 16px 0;
        }
        #product_review_area .review_btn {
            padding: 16px 0 0;
            text-align: center;
        }
        #product_review_area .review_btn a {
            width: auto;
            min-width: 350px;
        }
        #product_review_area .review_list li {
            padding: 8px 0;
        }
        #product_review_area .review_list p {
            margin: 0px 0;
        }
    }
</style>

<!--▼レビューエリア-->
<div id=\"product_review_area\" class=\"row\">
    <div class=\"col-sm-10 col-sm-offset-1\">
        <div class=\"accordion\">
            <dl>
                ";
        // line 417
        $context["positive_avg_star"] = ($context["avg"] ?? null);
        // line 418
        echo "                ";
        $context["nagative_avg_star"] = (5 - ($context["positive_avg_star"] ?? null));
        // line 419
        echo "                <dt class=\"heading02 sp\">
                    この商品のレビュー
                    
                    <!--平均の星の数-->
                    <span class=\"recommend_average\">
                        ";
        // line 424
        echo $this->getAttribute($this, "stars", array(0 => ($context["positive_avg_star"] ?? null), 1 => ($context["nagative_avg_star"] ?? null)), "method");
        echo "
                    </span>
                    
                    <!--レビュー数-->
                    <span>
                        (";
        // line 429
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo ")
                    </span>
                    <svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg>
                </dt>
                <dt class=\"heading02 pc active\">
                    この商品のレビュー
                    
                    <!--平均の星の数-->
                    <span class=\"recommend_average\">
                        ";
        // line 438
        echo $this->getAttribute($this, "stars", array(0 => ($context["positive_avg_star"] ?? null), 1 => ($context["nagative_avg_star"] ?? null)), "method");
        echo "
                    </span>
                    
                    <svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg>
                </dt>
                <dd>
                    ";
        // line 444
        if (($context["ProductReviews"] ?? null)) {
            // line 445
            echo "                        <ul class=\"review_list\">
                            ";
            // line 446
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ProductReviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductReview"]) {
                // line 447
                echo "                                <li>
                                    <p class=\"review_date\">
                                        <!--投稿日-->
                                        ";
                // line 450
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute($context["ProductReview"], "create_date", array())), "html", null, true);
                echo "
                                        
                                        <!--投稿者-->
                                        <span class=\"recommend_name\">
                                            ";
                // line 454
                if ($this->getAttribute($context["ProductReview"], "reviewer_url", array())) {
                    // line 455
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "reviewer_url", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "reviewer_name", array()), "html", null, true);
                    echo "さん</a>
                                            ";
                } else {
                    // line 457
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "reviewer_name", array()), "html", null, true);
                    echo "さん
                                            ";
                }
                // line 459
                echo "                                        </span>
                                        
                                        <!--星の数-->
                                        ";
                // line 462
                $context["positive_star"] = $this->getAttribute($context["ProductReview"], "recommend_level", array());
                // line 463
                echo "                                        ";
                $context["nagative_star"] = (5 - ($context["positive_star"] ?? null));
                // line 464
                echo "                                        <span class=\"recommend_level\">
                                            ";
                // line 465
                echo $this->getAttribute($this, "stars", array(0 => ($context["positive_star"] ?? null), 1 => ($context["nagative_star"] ?? null)), "method");
                echo "
                                        </span>
                                    </p>
                                    
                                    <!--タイトル-->
                                    <strong>";
                // line 470
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "title", array()), "html", null, true);
                echo "</strong>
                                    
                                    <!--レビューコメント-->
                                    <p>";
                // line 473
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "comment", array()), "html", null, true));
                echo "</p>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductReview'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 476
            echo "                        </ul>
                    ";
        }
        // line 478
        echo "                </dd>
            </dl>
        </div>
        <div class=\"review_btn\">
            <a href=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("plugin_products_detail_review", array("id" => ($context["id"] ?? null))), "html", null, true);
        echo "\" class=\"btn btn-info\">レビューを書く</a>
        </div>
    </div>
</div>
<!-- ▲レビューエリア -->


        </div>
      </div>
    </main>
    <!-- ▲item_detail▲ -->
";
    }

    // line 317
    public function getstars($__positive__ = null, $__negative__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "positive" => $__positive__,
            "negative" => $__negative__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 318
            echo "    ";
            $context["positive_stars"] = array(0 => "", 1 => "★", 2 => "★★", 3 => "★★★", 4 => "★★★★", 5 => "★★★★★");
            // line 319
            echo "    ";
            $context["negative_stars"] = array(0 => "", 1 => "☆", 2 => "☆☆", 3 => "☆☆☆", 4 => "☆☆☆☆", 5 => "☆☆☆☆☆");
            // line 320
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["positive_stars"] ?? null), ($context["positive"] ?? null), array(), "array"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["negative_stars"] ?? null), ($context["negative"] ?? null), array(), "array"), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "__string_template__0fafea266f2cd2a1a2d51d37b3fd08f82cd5a97e0a41e09d49b7f275ee0f352d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  922 => 320,  919 => 319,  916 => 318,  903 => 317,  887 => 482,  881 => 478,  877 => 476,  868 => 473,  862 => 470,  854 => 465,  851 => 464,  848 => 463,  846 => 462,  841 => 459,  835 => 457,  827 => 455,  825 => 454,  818 => 450,  813 => 447,  809 => 446,  806 => 445,  804 => 444,  795 => 438,  783 => 429,  775 => 424,  768 => 419,  765 => 418,  763 => 417,  666 => 322,  663 => 315,  656 => 302,  652 => 300,  649 => 299,  637 => 289,  633 => 287,  629 => 286,  627 => 285,  624 => 284,  620 => 282,  616 => 280,  613 => 279,  610 => 278,  604 => 273,  602 => 272,  599 => 271,  596 => 270,  594 => 269,  591 => 268,  587 => 266,  583 => 264,  580 => 263,  577 => 262,  572 => 258,  570 => 257,  568 => 256,  564 => 254,  558 => 253,  552 => 251,  549 => 250,  545 => 249,  537 => 244,  533 => 243,  528 => 240,  525 => 238,  521 => 236,  515 => 233,  511 => 232,  508 => 231,  505 => 230,  500 => 227,  496 => 226,  493 => 225,  490 => 223,  487 => 222,  485 => 221,  483 => 220,  474 => 213,  468 => 211,  465 => 210,  461 => 208,  457 => 206,  449 => 204,  447 => 203,  444 => 202,  440 => 200,  436 => 198,  430 => 196,  428 => 195,  425 => 194,  423 => 193,  421 => 192,  418 => 191,  415 => 189,  409 => 187,  407 => 186,  404 => 185,  396 => 183,  394 => 182,  389 => 181,  387 => 180,  385 => 179,  375 => 171,  369 => 168,  365 => 166,  357 => 163,  353 => 161,  351 => 160,  343 => 148,  339 => 147,  329 => 139,  314 => 137,  287 => 135,  270 => 134,  263 => 133,  246 => 132,  236 => 125,  230 => 121,  224 => 117,  213 => 115,  209 => 114,  205 => 112,  203 => 111,  198 => 109,  190 => 103,  182 => 101,  179 => 100,  158 => 98,  140 => 97,  138 => 96,  129 => 89,  127 => 76,  124 => 75,  72 => 25,  64 => 23,  62 => 22,  57 => 20,  54 => 19,  52 => 18,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__0fafea266f2cd2a1a2d51d37b3fd08f82cd5a97e0a41e09d49b7f275ee0f352d", "");
    }
}
