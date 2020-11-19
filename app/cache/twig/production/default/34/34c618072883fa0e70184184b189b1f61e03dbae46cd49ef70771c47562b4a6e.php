<?php

/* __string_template__425ed55842884b5136a4bf5d600c587ce889b00910b1cb62f291daf47361cef6 */
class __TwigTemplate_41427fb1a6eab19d9f9136efd0067642297bd5bf2c392449e41c38909a9816bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($context["category_sales_ranking"] ?? null)) {
            // line 2
            echo "    <div id=\"category_sales_ranking\">
        ";
            // line 3
            if (($context["Category"] ?? null)) {
                // line 4
                echo "            <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? null), "name", array()), "html", null, true);
                echo "ランキング</h2>
        ";
            }
            // line 6
            echo "        <ul>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_sales_ranking"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["arrProduct"]) {
                // line 8
                echo "                ";
                $context["Product"] = $this->getAttribute($context["arrProduct"], 0, array(), "array");
                // line 9
                echo "                <li id=\"result_list_box--";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
                echo "\" class=\"row\">
                    <div class=\"col-sm-3 col-xs-3\">
                        <span class=\"badge\">";
                // line 11
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "位</span>
                    </div>
                    <div id=\"result_list__item--";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
                echo "\" class=\"product_item col-sm-9 col-xs-9\">
                        <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute(($context["Product"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                            <div id=\"result_list__image--";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
                echo "\" class=\"item_photo\">
                                <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute(($context["Product"] ?? null), "main_list_image", array())), "html", null, true);
                echo "\">
                            </div>
                            <dl id=\"result_list__detail--";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
                echo "\">
                                <dt id=\"result_list__name--";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
                echo "\" class=\"item_name\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
                echo "</dt>
                                ";
                // line 20
                if ($this->getAttribute(($context["Product"] ?? null), "description_list", array())) {
                    // line 21
                    echo "                                    <dd id=\"result_list__description_list--";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
                    echo "\" class=\"item_comment\">";
                    echo nl2br($this->getAttribute(($context["Product"] ?? null), "description_list", array()));
                    echo "</dd>
                                ";
                }
                // line 23
                echo "                                ";
                if ($this->getAttribute(($context["Product"] ?? null), "hasProductClass", array())) {
                    // line 24
                    echo "                                    ";
                    if (($this->getAttribute(($context["Product"] ?? null), "getPrice02Min", array()) == $this->getAttribute(($context["Product"] ?? null), "getPrice02Max", array()))) {
                        // line 25
                        echo "                                        <dd id=\"result_list__price02_inc_tax--";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
                        echo "\" class=\"item_price\">
                                            ";
                        // line 26
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
                        echo "
                                        </dd>
                                    ";
                    } else {
                        // line 29
                        echo "                                        <dd id=\"result_list__price02_inc_tax--";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
                        echo "\" class=\"item_price\">
                                            ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMax", array())), "html", null, true);
                        echo "
                                        </dd>
                                    ";
                    }
                    // line 33
                    echo "                                ";
                } else {
                    // line 34
                    echo "                                    <dd id=\"result_list__price02_inc_tax--";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "id", array()), "html", null, true);
                    echo "\" class=\"item_price\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Product"] ?? null), "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "</dd>
                                ";
                }
                // line 36
                echo "                            </dl>
                        </a>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['arrProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__425ed55842884b5136a4bf5d600c587ce889b00910b1cb62f291daf47361cef6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  133 => 36,  125 => 34,  122 => 33,  114 => 30,  109 => 29,  103 => 26,  98 => 25,  95 => 24,  92 => 23,  84 => 21,  82 => 20,  76 => 19,  72 => 18,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  48 => 11,  42 => 9,  39 => 8,  35 => 7,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__425ed55842884b5136a4bf5d600c587ce889b00910b1cb62f291daf47361cef6", "");
    }
}
