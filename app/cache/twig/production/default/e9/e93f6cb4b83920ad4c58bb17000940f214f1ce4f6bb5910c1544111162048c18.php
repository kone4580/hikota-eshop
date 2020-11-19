<?php

/* __string_template__12cd87cbd91d6870685aad4e151c941ccce05e5e43742c45398b8ef84d672ae4 */
class __TwigTemplate_89f1489a3ae31f752b930667ef845660ceb4fdd53fe38c8c341a6215360f6ed3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__12cd87cbd91d6870685aad4e151c941ccce05e5e43742c45398b8ef84d672ae4", 1);
        $this->blocks = array(
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
        $context["body_class"] = "cart_page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"main\" class=\"page_section\">
  <div class=\"wrap\">
    <h1 class=\"page-heading\">ショッピングカート</h1>
    <div id=\"cart\" class=\"container-fluid\">
        <div id=\"cart_box\" class=\"row\">
            <div id=\"cart_box__body\" class=\"col-md-10 col-md-offset-1\">
                ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 13
            echo "                <div id=\"cart_box__flow_state\" class=\"flowline step3\">
                ";
        } else {
            // line 15
            echo "                <div id=\"cart_box__flow_state\" class=\"flowline step4\">
                ";
        }
        // line 17
        echo "                    <ul id=\"cart_box__flow_state_list\" class=\"clearfix\">
                        <li class=\"active\"><span class=\"flow_number\">1</span><br>カートの商品</li>
                    ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 20
            echo "                        <li><span class=\"flow_number\">2</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">3</span><br>完了</li>
                    ";
        } else {
            // line 23
            echo "                        <li><span class=\"flow_number\">2</span><br>お客様情報</li>
                        <li><span class=\"flow_number\">3</span><br>ご注文内容確認</li>
                        <li><span class=\"flow_number\">4</span><br>完了</li>
                    ";
        }
        // line 27
        echo "                    </ul>
                </div>

                ";
        // line 30
        $context["productStr"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.product"), "method");
        // line 31
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.request.error"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 32
            echo "                    ";
            $context["idx"] = $this->getAttribute($context["loop"], "index0", array());
            // line 33
            echo "                    ";
            if ($this->getAttribute(($context["productStr"] ?? null), ($context["idx"] ?? null), array(), "array", true, true)) {
                // line 34
                echo "                    <div id=\"cart_box__message--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>
                            ";
                // line 37
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"], array("%product%" => $this->getAttribute(($context["productStr"] ?? null), ($context["idx"] ?? null), array(), "array"))), "html", null, true));
                echo "
                        </p>
                    </div>
                    ";
            } else {
                // line 41
                echo "                    <div id=\"cart_box__message--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
                // line 43
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"]), "html", null, true));
                echo "
                        </p>
                    </div>
                    ";
            }
            // line 47
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.cart.error"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 49
            echo "                    <div id=\"cart_box__message_error--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"message\">
                        <p class=\"errormsg bg-danger\">
                            <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 51
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"]), "html", null, true));
            echo "
                        </p>
                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
                ";
        // line 56
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Cart"] ?? null), "CartItems", array())) > 0)) {
            // line 57
            echo "                <form name=\"form\" id=\"form_cart\" method=\"post\" action=\"";
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("cart");
            echo "\">
                    <p id=\"cart_item__info\" class=\"message\">
                        商品の合計金額は「<strong>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Cart"] ?? null), "total_price", array())), "html", null, true);
            echo "</strong>」です。
                        ";
            // line 60
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "delivery_free_amount", array()) && $this->getAttribute(($context["BaseInfo"] ?? null), "delivery_free_quantity", array()))) {
                // line 61
                echo "                            <br />
                            ";
                // line 62
                if (($context["is_delivery_free"] ?? null)) {
                    // line 63
                    echo "                                現在送料無料です。
                            ";
                } else {
                    // line 65
                    echo "                                あと「<strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter(($context["least"] ?? null)), "html", null, true);
                    echo "</strong>」または「<strong>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["quantity"] ?? null)), "html", null, true);
                    echo "個</strong>」のお買い上げで<strong class=\"text-primary\">送料無料</strong>になります。
                            ";
                }
                // line 67
                echo "                        ";
            } elseif ($this->getAttribute(($context["BaseInfo"] ?? null), "delivery_free_amount", array())) {
                // line 68
                echo "                            <br />
                            ";
                // line 69
                if (($context["is_delivery_free"] ?? null)) {
                    // line 70
                    echo "                                現在送料無料です。
                            ";
                } else {
                    // line 72
                    echo "                                あと「<strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter(($context["least"] ?? null)), "html", null, true);
                    echo "</strong>」のお買い上げで<strong class=\"text-primary\">送料無料</strong>になります。
                            ";
                }
                // line 74
                echo "                        ";
            } elseif ($this->getAttribute(($context["BaseInfo"] ?? null), "delivery_free_quantity", array())) {
                // line 75
                echo "                            <br />
                            ";
                // line 76
                if (($context["is_delivery_free"] ?? null)) {
                    // line 77
                    echo "                                現在送料無料です。
                            ";
                } else {
                    // line 79
                    echo "                                あと「<strong>";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["quantity"] ?? null)), "html", null, true);
                    echo "個</strong>」のお買い上げで<strong class=\"text-primary\">送料無料</strong>になります。
                            ";
                }
                // line 81
                echo "                        ";
            }
            // line 82
            echo "                    </p>
                    <div id=\"cart_item_list\" class=\"cart_item table\">
                        <div class=\"thead\">
                            <ol id=\"cart_item_list__header\">
                                <li id=\"cart_item_list__header_cart_remove\">削除</li>
                                <li id=\"cart_item_list__header_product_detail\">商品内容</li>
                                <li id=\"cart_item_list__header_total\">数量</li>
                                <li id=\"cart_item_list__header_sub_total\">小計</li>
                            </ol>
                        </div>
                        <div id=\"cart_item_list__body\" class=\"tbody\">

                            ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Cart"] ?? null), "CartItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                // line 95
                echo "                                ";
                $context["ProductClass"] = $this->getAttribute($context["CartItem"], "Object", array());
                // line 96
                echo "                                ";
                $context["Product"] = $this->getAttribute(($context["ProductClass"] ?? null), "Product", array());
                // line 97
                echo "
                                <div id=\"cart_item_list__item\" class=\"item_box tr\">
                                    <div id=\"cart_item_list__cart_remove\" class=\"icon_edit td\">
                                        <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("cart_remove", array("productClassId" => $this->getAttribute(($context["ProductClass"] ?? null), "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <svg class=\"cb cb-close\"><use xlink:href=\"#cb-close\" /></svg>
                                        </a>
                                    </div>
                                    <div class=\"td table\">
                                        <div id=\"cart_item_list__product_image\" class=\"item_photo\">
                                            <a  target=\"_blank\" href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute(($context["Product"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                                                <img src=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute(($context["Product"] ?? null), "MainListImage", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
                echo "\" />
                                            </a>
                                        </div>
                                        <dl class=\"item_detail\">
                                            <dt id=\"cart_item_list__product_detail\" class=\"item_name text-default\">
                                                <a target=\"_blank\" href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute(($context["Product"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
                echo "</a>
                                            </dt>
                                            <dd id=\"cart_item_list__class_category\" class=\"item_pattern small\">
                                                ";
                // line 115
                if (($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()) && $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()), "id", array()))) {
                    // line 116
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 118
                echo "                                                ";
                if (($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()) && $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()), "id", array()))) {
                    // line 119
                    echo "                                                    <br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 121
                echo "                                            </dd>
                                            <dd id=\"cart_item_list__item_price\" class=\"item_price\">￥";
                // line 122
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "price", array())), "html", null, true);
                echo "</dd>
                                            <dd id=\"cart_item_list__item_subtotal\" class=\"item_subtotal\">小計：￥";
                // line 123
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "total_price", array())), "html", null, true);
                echo "</dd>
                                        </dl>
                                    </div>
                                    <div id=\"cart_item_list__quantity\" class=\"item_quantity td\">
                                        ";
                // line 127
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "quantity", array())), "html", null, true);
                echo "
                                        <ul id=\"cart_item_list__quantity_edit\">
                                            <li>
                                                ";
                // line 130
                if (($this->getAttribute($context["CartItem"], "quantity", array()) > 1)) {
                    // line 131
                    echo "                                                    <a id=\"cart_item_list__down\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("cart_down", array("productClassId" => $this->getAttribute(($context["ProductClass"] ?? null), "id", array()))), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                    echo " data-method=\"put\" data-confirm=\"false\"><svg class=\"cb cb-minus\"><use xlink:href=\"#cb-minus\" /></svg></a>
                                                ";
                } else {
                    // line 133
                    echo "                                                    <span><svg class=\"cb cb-minus\"><use xlink:href=\"#cb-minus\" /></svg></span>
                                                ";
                }
                // line 135
                echo "                                            </li>
                                            <li>
                                                <a id=\"cart_item_list__up\" href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("cart_up", array("productClassId" => $this->getAttribute(($context["ProductClass"] ?? null), "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\"><svg class=\"cb cb-plus\"><use xlink:href=\"#cb-plus\" /></svg></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id=\"cart_item_list__subtotal\" class=\"item_subtotal td\">￥";
                // line 141
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["CartItem"], "total_price", array())), "html", null, true);
                echo "</div>
                                </div><!--/item_box-->
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
                        </div>
                    </div><!--/cart_item-->
                    <div class=\"total_box\">
                        <dl id=\"total_box__total_price\" class=\"total_price\">
                            <dt>合計：</dt>
                            <dd class=\"text-primary\">￥";
            // line 150
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["Cart"] ?? null), "total_price", array())), "html", null, true);
            echo "</dd>
                        </dl>
                        <div id=\"total_box__user_action_menu\" class=\"btn_group\">

                            <p id=\"total_box__next_button\" >
                                <a href=\"";
            // line 155
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPath("cart_buystep");
            echo "\" class=\"btn btn-primary btn-block\">レジに進む</a>
                            </p>
                            <p id=\"total_box__top_button\">
                                <a  href=\"";
            // line 158
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("top");
            echo "\" class=\"btn btn-info btn-block\">お買い物を続ける</a>
                            </p>
                        </div>
                    </div>

                </form>
                ";
        } else {
            // line 165
            echo "                <div id=\"cart_box__message\" class=\"message\">
                    <p class=\"errormsg bg-danger\">
                        <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>現在カート内に商品はございません。
                    </p>
                </div>
                ";
        }
        // line 171
        echo "
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__12cd87cbd91d6870685aad4e151c941ccce05e5e43742c45398b8ef84d672ae4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 171,  429 => 165,  419 => 158,  413 => 155,  405 => 150,  397 => 144,  388 => 141,  379 => 137,  375 => 135,  371 => 133,  363 => 131,  361 => 130,  355 => 127,  348 => 123,  344 => 122,  341 => 121,  333 => 119,  330 => 118,  322 => 116,  320 => 115,  312 => 112,  300 => 107,  296 => 106,  285 => 100,  280 => 97,  277 => 96,  274 => 95,  270 => 94,  256 => 82,  253 => 81,  247 => 79,  243 => 77,  241 => 76,  238 => 75,  235 => 74,  229 => 72,  225 => 70,  223 => 69,  220 => 68,  217 => 67,  209 => 65,  205 => 63,  203 => 62,  200 => 61,  198 => 60,  194 => 59,  188 => 57,  186 => 56,  183 => 55,  165 => 51,  159 => 49,  141 => 48,  127 => 47,  120 => 43,  114 => 41,  107 => 37,  100 => 34,  97 => 33,  94 => 32,  76 => 31,  74 => 30,  69 => 27,  63 => 23,  58 => 20,  56 => 19,  52 => 17,  48 => 15,  44 => 13,  42 => 12,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__12cd87cbd91d6870685aad4e151c941ccce05e5e43742c45398b8ef84d672ae4", "");
    }
}
