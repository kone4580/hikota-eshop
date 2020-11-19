<?php

/* __string_template__af8e54742251ec18b1f300ed5967de1a76797c7f36970d9758e97c5f506c007f */
class __TwigTemplate_3f5e72e7e6b76040b6724863969009773841e57b695759a98754b1d7ed22e196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__af8e54742251ec18b1f300ed5967de1a76797c7f36970d9758e97c5f506c007f", 1);
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
                <!--# maker-plugin-tag #-->
    \t\t\t\t\t</div>
              <!--▲商品コード-->



              <div class=\"product_info-pricezone\">
                <!--★通常価格★-->
                ";
        // line 158
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 159
            if (( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())) && ($this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array())))) {
                // line 160
                echo "                    <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())), "html", null, true);
                echo "</span> <span class=\"small\">（税抜）</span></p>
                  ";
            } elseif (( !(null === $this->getAttribute(            // line 161
($context["Product"] ?? null), "getPrice01Min", array())) &&  !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array())))) {
                // line 162
                echo "                    <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array())), "html", null, true);
                echo "</span> <span class=\"small\">（税抜）</span></p>
                  ";
            }
            // line 164
            echo "                ";
        } else {
            // line 165
            if ( !(null === $this->getAttribute(($context["Product"] ?? null), "getPrice01Max", array()))) {
                // line 166
                echo "                    <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice01Min", array())), "html", null, true);
                echo "</span> <span class=\"small\">（税抜）</span></p>
                  ";
            }
            // line 168
            echo "                ";
        }
        // line 170
        echo "<!--★販売価格★-->
                ";
        // line 171
        if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
            // line 172
            if (($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMax", array()))) {
                // line 173
                echo "                    <p class=\"product_info-price\">サロン様価格:
                      ";
                // line 174
                if ($this->getAttribute(($context["app"] ?? null), "isGranted", array(0 => "ROLE_USER"), "method")) {
                    // line 175
                    echo "                        <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02Min", array())), "html", null, true);
                    echo "</span>（税抜）
                      ";
                } else {
                    // line 177
                    echo "<span class=\"font-blue\">ログイン後に表示されます</span>
                      ";
                }
                // line 179
                echo "                    </p>
                    ";
            } else {
                // line 181
                echo "                    <p class=\"product_info-price\">サロン様価格:
                      ";
                // line 182
                if ($this->getAttribute(($context["app"] ?? null), "isGranted", array(0 => "ROLE_USER"), "method")) {
                    // line 183
                    echo "                        <span class=\"\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02Min", array())), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02Max", array())), "html", null, true);
                    echo "</span>（税抜）
                      ";
                } else {
                    // line 185
                    echo "<span class=\"font-blue\">ログイン後に表示されます</span>
                      ";
                }
                // line 187
                echo "                    </p>
                  ";
            }
            // line 189
            echo "                ";
        } else {
            // line 190
            echo "<p class=\"product_info-price\">サロン様価格: <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02Min", array())), "html", null, true);
            echo "</span>（税抜）</p>
                ";
        }
        // line 192
        echo "</div>



              <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                <!--▼買い物かご-->
                <div id=\"detail_cart_box\" class=\"cart_area\">
                  ";
        // line 199
        if ($this->getAttribute(($context["Product"] ?? null), "stock_find", array())) {
            // line 200
            echo "                    ";
            // line 201
            echo "                    ";
            if ($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array(), "any", true, true)) {
                // line 202
                echo "                      <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                        ";
                // line 204
                echo "                        <li>
                          ";
                // line 205
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'widget');
                echo "
                          ";
                // line 206
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id1", array()), 'errors');
                echo "
                        </li>
                        ";
                // line 209
                echo "                        ";
                if ($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array(), "any", true, true)) {
                    // line 210
                    echo "                          <li>
                            ";
                    // line 211
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'widget');
                    echo "
                            ";
                    // line 212
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classcategory_id2", array()), 'errors');
                    echo "
                          </li>
                        ";
                }
                // line 215
                echo "                      </ul>
                    ";
            }
            // line 217
            echo "
                    ";
            // line 219
            echo "                    <dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                      <dt>数量</dt>
                      <dd>
                        ";
            // line 222
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
            echo "
                        ";
            // line 223
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
            echo "
                      </dd>
                    </dl>

                    <div class=\"extra-form\">
                      ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 229
                echo "                        ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 230
                    echo "                          ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                        ";
                }
                // line 232
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "                    </div>

                    ";
            // line 235
            if ($this->getAttribute(($context["app"] ?? null), "isGranted", array(0 => "ROLE_USER"), "method")) {
                // line 236
                echo "                      ";
                // line 237
                echo "                      <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                        <button type=\"submit\" id=\"add-cart\" class=\"btn-add_cart\">カートに入れる</button>

                        ";
                // line 241
                echo "                        ";
                if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                    // line 242
                    echo "                          ";
                    if ((($context["is_favorite"] ?? null) == false)) {
                        // line 243
                        echo "                            <button type=\"submit\" id=\"favorite\" class=\"btn-favo\"><i class=\"far fa-heart\"></i>お気に入りに追加</button>
                          ";
                    } else {
                        // line 245
                        echo "                            <button type=\"submit\" id=\"favorite\" class=\"btn-favo\" disabled=\"disabled\">お気に入りに追加済みです</button>
                          ";
                    }
                    // line 247
                    echo "                        ";
                }
                // line 248
                echo "                      </div> ";
                // line 249
                echo "                    ";
            }
            // line 250
            echo "                  ";
        } else {
            // line 251
            echo "                    ";
            // line 252
            echo "                    <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                      <ul class=\"row\">
                        <li class=\"col-xs-12 col-sm-8\"><button type=\"button\" class=\"btn btn-default btn-block\" disabled=\"disabled\">ただいま品切れ中です</button></li>
                      </ul>
                      ";
            // line 257
            echo "                      ";
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                // line 258
                echo "                        ";
                if ((($context["is_favorite"] ?? null) == false)) {
                    // line 259
                    echo "                          <button type=\"submit\" id=\"favorite\" class=\"btn-favo\"><i class=\"far fa-heart\"></i>お気に入りに追加</button>
                        ";
                } else {
                    // line 261
                    echo "                          <button type=\"submit\" id=\"favorite\" class=\"btn-favo\" disabled=\"disabled\">お気に入りに追加済みです</button>
                        ";
                }
                // line 263
                echo "                      ";
            }
            // line 264
            echo "                    </div> ";
            // line 265
            echo "                  ";
        }
        echo " ";
        // line 266
        echo "                </div>
                <!--▲買い物かご-->
                ";
        // line 268
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
              </form>

        </div>
      </div>


      <div class=\"product_under mt80\">
  \t\t\t<div class=\"wrap\">
          ";
        // line 278
        echo "          ";
        if ($this->getAttribute(($context["Product"] ?? null), "freearea", array())) {
            // line 279
            echo "          <div id=\"sub_area\" class=\"row\">
              <div class=\"col-sm-10 col-sm-offset-1\">
                  <div id=\"detail_free_box__freearea\" class=\"freearea\">";
            // line 281
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute(($context["Product"] ?? null), "freearea", array())));
            echo "</div>
              </div>
          </div>
          ";
        }
        // line 294
        echo "
";
        // line 301
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
        // line 396
        $context["positive_avg_star"] = ($context["avg"] ?? null);
        // line 397
        echo "                ";
        $context["nagative_avg_star"] = (5 - ($context["positive_avg_star"] ?? null));
        // line 398
        echo "                <dt class=\"heading02 sp\">
                    この商品のレビュー
                    
                    <!--平均の星の数-->
                    <span class=\"recommend_average\">
                        ";
        // line 403
        echo $this->getAttribute($this, "stars", array(0 => ($context["positive_avg_star"] ?? null), 1 => ($context["nagative_avg_star"] ?? null)), "method");
        echo "
                    </span>
                    
                    <!--レビュー数-->
                    <span>
                        (";
        // line 408
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
        // line 417
        echo $this->getAttribute($this, "stars", array(0 => ($context["positive_avg_star"] ?? null), 1 => ($context["nagative_avg_star"] ?? null)), "method");
        echo "
                    </span>
                    
                    <svg class=\"cb cb-angle-down\"><use xlink:href=\"#cb-angle-down\" /></svg>
                </dt>
                <dd>
                    ";
        // line 423
        if (($context["ProductReviews"] ?? null)) {
            // line 424
            echo "                        <ul class=\"review_list\">
                            ";
            // line 425
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ProductReviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductReview"]) {
                // line 426
                echo "                                <li>
                                    <p class=\"review_date\">
                                        <!--投稿日-->
                                        ";
                // line 429
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getDateFormatFilter($this->getAttribute($context["ProductReview"], "create_date", array())), "html", null, true);
                echo "
                                        
                                        <!--投稿者-->
                                        <span class=\"recommend_name\">
                                            ";
                // line 433
                if ($this->getAttribute($context["ProductReview"], "reviewer_url", array())) {
                    // line 434
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "reviewer_url", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "reviewer_name", array()), "html", null, true);
                    echo "さん</a>
                                            ";
                } else {
                    // line 436
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "reviewer_name", array()), "html", null, true);
                    echo "さん
                                            ";
                }
                // line 438
                echo "                                        </span>
                                        
                                        <!--星の数-->
                                        ";
                // line 441
                $context["positive_star"] = $this->getAttribute($context["ProductReview"], "recommend_level", array());
                // line 442
                echo "                                        ";
                $context["nagative_star"] = (5 - ($context["positive_star"] ?? null));
                // line 443
                echo "                                        <span class=\"recommend_level\">
                                            ";
                // line 444
                echo $this->getAttribute($this, "stars", array(0 => ($context["positive_star"] ?? null), 1 => ($context["nagative_star"] ?? null)), "method");
                echo "
                                        </span>
                                    </p>
                                    
                                    <!--タイトル-->
                                    <strong>";
                // line 449
                echo twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "title", array()), "html", null, true);
                echo "</strong>
                                    
                                    <!--レビューコメント-->
                                    <p>";
                // line 452
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["ProductReview"], "comment", array()), "html", null, true));
                echo "</p>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductReview'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 455
            echo "                        </ul>
                    ";
        }
        // line 457
        echo "                </dd>
            </dl>
        </div>
        <div class=\"review_btn\">
            <a href=\"";
        // line 461
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

    // line 296
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
            // line 297
            echo "    ";
            $context["positive_stars"] = array(0 => "", 1 => "★", 2 => "★★", 3 => "★★★", 4 => "★★★★", 5 => "★★★★★");
            // line 298
            echo "    ";
            $context["negative_stars"] = array(0 => "", 1 => "☆", 2 => "☆☆", 3 => "☆☆☆", 4 => "☆☆☆☆", 5 => "☆☆☆☆☆");
            // line 299
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
        return "__string_template__af8e54742251ec18b1f300ed5967de1a76797c7f36970d9758e97c5f506c007f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  896 => 299,  893 => 298,  890 => 297,  877 => 296,  861 => 461,  855 => 457,  851 => 455,  842 => 452,  836 => 449,  828 => 444,  825 => 443,  822 => 442,  820 => 441,  815 => 438,  809 => 436,  801 => 434,  799 => 433,  792 => 429,  787 => 426,  783 => 425,  780 => 424,  778 => 423,  769 => 417,  757 => 408,  749 => 403,  742 => 398,  739 => 397,  737 => 396,  640 => 301,  637 => 294,  630 => 281,  626 => 279,  623 => 278,  611 => 268,  607 => 266,  603 => 265,  601 => 264,  598 => 263,  594 => 261,  590 => 259,  587 => 258,  584 => 257,  578 => 252,  576 => 251,  573 => 250,  570 => 249,  568 => 248,  565 => 247,  561 => 245,  557 => 243,  554 => 242,  551 => 241,  546 => 237,  544 => 236,  542 => 235,  538 => 233,  532 => 232,  526 => 230,  523 => 229,  519 => 228,  511 => 223,  507 => 222,  502 => 219,  499 => 217,  495 => 215,  489 => 212,  485 => 211,  482 => 210,  479 => 209,  474 => 206,  470 => 205,  467 => 204,  464 => 202,  461 => 201,  459 => 200,  457 => 199,  448 => 192,  442 => 190,  439 => 189,  435 => 187,  431 => 185,  423 => 183,  421 => 182,  418 => 181,  414 => 179,  410 => 177,  404 => 175,  402 => 174,  399 => 173,  397 => 172,  395 => 171,  392 => 170,  389 => 168,  383 => 166,  381 => 165,  378 => 164,  370 => 162,  368 => 161,  363 => 160,  361 => 159,  359 => 158,  343 => 148,  339 => 147,  329 => 139,  314 => 137,  287 => 135,  270 => 134,  263 => 133,  246 => 132,  236 => 125,  230 => 121,  224 => 117,  213 => 115,  209 => 114,  205 => 112,  203 => 111,  198 => 109,  190 => 103,  182 => 101,  179 => 100,  158 => 98,  140 => 97,  138 => 96,  129 => 89,  127 => 76,  124 => 75,  72 => 25,  64 => 23,  62 => 22,  57 => 20,  54 => 19,  52 => 18,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__af8e54742251ec18b1f300ed5967de1a76797c7f36970d9758e97c5f506c007f", "");
    }
}
