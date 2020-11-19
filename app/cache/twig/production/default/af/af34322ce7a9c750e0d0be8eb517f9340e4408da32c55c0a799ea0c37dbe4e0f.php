<?php

/* __string_template__9e1be00a9682b60908836ea6882c50441fcaa0a80a0fbcf4d07f6d56611347e8 */
class __TwigTemplate_6db00be227e1ba624256c2b718dc8fab3c19906a1f8db0ffafaf6433b6b72bfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__9e1be00a9682b60908836ea6882c50441fcaa0a80a0fbcf4d07f6d56611347e8", 1);
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
        $context["body_class"] = "product_page";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_javascript($context, array $blocks = array())
    {
        echo "     <script>         // 並び順を変更         function fnChangeOrderBy(orderby) {             eccube.setValue('orderby', orderby);             eccube.setValue('pageno', 1);             eccube.submitForm();         }          // 表示件数を変更         function fnChangeDispNumber(dispNumber) {             eccube.setValue('disp_number', dispNumber);             eccube.setValue('pageno', 1);             eccube.submitForm();         }         // 商品表示BOXの高さを揃える         \$(window).load(function() {             \$('.product_item').matchHeight();         });     </script> ";
    }

    public function block_main($context, array $blocks = array())
    {
        echo "  <div class=\"main\">   <div class=\"wrap\">     ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? null), "category_id", array()), "vars", array()), "errors", array())) == 0)) {
            echo "     <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">         ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["search_form"] ?? null), 'widget');
            echo "     </form>     <!-- ▼topicpath▼ -->     <div id=\"topicpath\" class=\"row\">         <ol id=\"list_header_menu\">             <li><a href=\"";
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
            echo "\">全商品</a></li>             ";
            if ( !(null === ($context["Category"] ?? null))) {
                echo "                 ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Category"] ?? null), "path", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["Path"]) {
                    echo "                     <li><a href=\"";
                    echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "name", array()), "html", null, true);
                    echo "</a></li>                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Path'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "             ";
            }
            echo "             ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? null), "vars", array()), "value", array()), "name", array())) {
                echo "             <li>「";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? null), "vars", array()), "value", array()), "name", array()), "html", null, true);
                echo "」の検索結果</li>             ";
            }
            echo "         </ol>     </div>     <!-- ▲topicpath▲ -->     <div id=\"result_info_box\" class=\"row\">         <form name=\"page_navi_top\" id=\"page_navi_top\" action=\"?\">             ";
            if (($this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()) > 0)) {
                echo "                 <p id=\"result_info_box__item_count\" class=\"intro col-sm-6\"><strong><span id=\"productscount\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()), "html", null, true);
                echo "</span>件</strong>の商品がみつかりました。                 </p>                  <div id=\"result_info_box__menu_box\" class=\"col-sm-6 no-padding\">                     <ul id=\"result_info_box__menu\" class=\"pagenumberarea clearfix\">                         <li id=\"result_info_box__disp_menu\">                             ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["disp_number_form"] ?? null), 'widget', array("id" => "", "attr" => array("onchange" => "javascript:fnChangeDispNumber(this.value);")));
                echo "                         </li>                         <li id=\"result_info_box__order_menu\">                             ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["order_by_form"] ?? null), 'widget', array("id" => "", "attr" => array("onchange" => "javascript:fnChangeOrderBy(this.value);")));
                echo "                         </li>                     </ul>                 </div>                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["disp_number_form"] ?? null), "getIterator", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    echo "                     ";
                    if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                        echo "                         ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                        echo "                         ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                        echo "                         ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                        echo "                     ";
                    }
                    echo "                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order_by_form"] ?? null), "getIterator", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    echo "                     ";
                    if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                        echo "                         ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                        echo "                         ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                        echo "                         ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                        echo "                     ";
                    }
                    echo "                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "             ";
            } else {
                echo "                 <p id=\"result_info_box__item_count\" class=\"intro col-sm-6\"><strong style=\"display: none;\"><span id=\"productscount\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()), "html", null, true);
                echo "</span>件</strong>お探しの商品は見つかりませんでした。</p>             ";
            }
            echo "         </form>     </div>      <!-- ▼item_list▼ -->     <div id=\"item_list\">";
            if (($this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()) > 0)) {
                // line 2
                echo "<script type=\"text/javascript\">//<![CDATA[
  function AllInCart() {
    var searchForm = \$(\"#form1\");

    \$(\"input[name='product_id']\").each(function() {
      searchForm.append(\$('<input type=\"hidden\" />').attr(\"name\", \"product_id[]\").val(\$(this).val()));
    });

    \$(\"input[name='product_class_id']\").each(function() {
      searchForm.append(\$('<input type=\"hidden\" />').attr(\"name\", \"product_class_id[]\").val(\$(this).val()));
    });

    \$(\"input[name='quantity']\").each(function() {
      searchForm.append(\$('<input type=\"hidden\" />').attr(\"name\", \"quantity[]\").val(\$(this).val()));
    });

    \$(\"#form1 input[name='mode']\").val(\"allincart\")

    searchForm.submit();
  }

  function calc() {

    var total = 0;
    \$(\"form[name=product_form]\").each(function() {
      var product_class_id = \$(this).find('input[name=product_class_id]').val() ;
      var price = \$(this).find('input[name=price]').val() ;
      var quantity = \$(this).find('input[name=quantity]').val() ;
      var sub_total = price * quantity;

      total += sub_total;
      //alert (sub_total);
      \$('span.sub_total_'+product_class_id).html(separate(sub_total));
    });

    \$('span.total').html(separate(total));
  }

  function separate(num){
    return String(num).replace( /(\\d)(?=(\\d\\d\\d)+(?!\\d))/g, '\$1,');
  }
  //]]></script>

<div class=\"row no-padding\">
    <table class=\"table table-hover table-condensed\">
        <tr>
            <th width=\"10%\">商品画像</th>
            <th>商品名</th>
            <th>説明</th>
            <th>規格1</th>
            <th>規格2</th>
            <th>単価</th>
            <th width=\"10%\">数量</th>
            <th>小計</th>
        </tr>
        ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                    // line 58
                    echo "        <tr>
            <td rowspan=\"";
                    // line 59
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["Product"], "ProductClasses", array())), "html", null, true);
                    echo "\">
                <a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                    echo "\">
                    <img src=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["Product"], "main_list_image", array())), "html", null, true);
                    echo "\">
                </a>
            </td>
            <td rowspan=\"";
                    // line 64
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["Product"], "ProductClasses", array())), "html", null, true);
                    echo "\">
                ";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
                    echo "
            </td>
            <td rowspan=\"";
                    // line 67
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["Product"], "ProductClasses", array())), "html", null, true);
                    echo "\">
                ";
                    // line 68
                    if ($this->getAttribute($context["Product"], "description_list", array())) {
                        // line 69
                        echo "                ";
                        echo nl2br($this->getAttribute($context["Product"], "description_list", array()));
                        echo "
                ";
                    }
                    // line 71
                    echo "            </td>
            ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Product"], "ProductClasses", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["ProductClass"]) {
                        // line 73
                        echo "            ";
                        if (($this->getAttribute($context["loop"], "first", array()) == false)) {
                            // line 74
                            echo "        </tr>
        <tr>
            ";
                        }
                        // line 77
                        echo "            <td>
                ";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ProductClass"], "getClassCategory1", array()), "html", null, true);
                        echo "
            </td>
            <td>
                ";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ProductClass"], "getClassCategory2", array()), "html", null, true);
                        echo "
            </td>
            <td>
                ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["ProductClass"], "getPrice02IncTax", array())), "html", null, true);
                        echo "
            </td>
            <td class=\"form-group form-inline\">
                <form name=\"product_form\" class=\"\">
                    <input type=\"hidden\" name=\"product_id\" value=\"";
                        // line 88
                        echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                        echo "\">
                    <input type=\"hidden\" name=\"product_class_id\" value=\"";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ProductClass"], "id", array()), "html", null, true);
                        echo "\">
                    <input type=\"hidden\" name=\"price\" value=\"";
                        // line 90
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ProductClass"], "getPrice02IncTax", array()), "html", null, true);
                        echo "\">
                    <input type=\"number\" onchange=\"calc()\" name=\"quantity\" class=\"form-control\" style=\"width:100%;\" value=\"0\" maxlength=\"7\">
                </form>
            </td>
            <td>
                <span class=\"sub_total_";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ProductClass"], "id", array()), "html", null, true);
                        echo "\">0</span>
            </td>
        </tr>
            ";
                        // line 98
                        if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                            // line 99
                            echo "        </tr>
            ";
                        }
                        // line 101
                        echo "            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductClass'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "        <tr>
            <td colspan=\"6\"></td>
            <th>合計</th>
            <td>
                <span class=\"total\">0</span>
            </td>
        </tr>
    </table>
    <button onclick=\"AllInCart(); return false;\" type=\"submit\" class=\"btn btn-primary btn-block prevention-btn prevention-mask\">カートに入れる</button>
</div>
";
            }
            // line 114
            echo "</div>     <!-- ▲item_list▲ -->     ";
            if (($this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()) > 0)) {
                echo "         ";
                $this->loadTemplate("pagination.twig", "__string_template__9e1be00a9682b60908836ea6882c50441fcaa0a80a0fbcf4d07f6d56611347e8", 114)->display(array_merge($context, array("pages" => $this->getAttribute(($context["pagination"] ?? null), "paginationData", array()))));
                echo "     ";
            }
            echo "     ";
        } else {
            echo "         <p class=\"errormsg text-danger\">ご指定のカテゴリは存在しません。</p>     ";
        }
        echo "    </div> </div> ";
    }

    public function getTemplateName()
    {
        return "__string_template__9e1be00a9682b60908836ea6882c50441fcaa0a80a0fbcf4d07f6d56611347e8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 114,  321 => 103,  315 => 102,  301 => 101,  297 => 99,  295 => 98,  289 => 95,  281 => 90,  277 => 89,  273 => 88,  266 => 84,  260 => 81,  254 => 78,  251 => 77,  246 => 74,  243 => 73,  226 => 72,  223 => 71,  217 => 69,  215 => 68,  211 => 67,  206 => 65,  202 => 64,  194 => 61,  190 => 60,  186 => 59,  183 => 58,  179 => 57,  122 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__9e1be00a9682b60908836ea6882c50441fcaa0a80a0fbcf4d07f6d56611347e8", "");
    }
}
