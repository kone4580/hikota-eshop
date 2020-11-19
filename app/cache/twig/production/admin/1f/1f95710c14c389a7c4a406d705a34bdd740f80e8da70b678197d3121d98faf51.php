<?php

/* __string_template__58e34ebeb2ab5cc598bb42aa4b5ea5b92dcba04af7c5c28dde6ab153940227c0 */
class __TwigTemplate_f3b798dd1fe71cf1c1c73ed1ea8d8842f815b46c6e6716b411b87c10edd52a80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__58e34ebeb2ab5cc598bb42aa4b5ea5b92dcba04af7c5c28dde6ab153940227c0", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        // line 24
        $context["menus"] = array(0 => "product", 1 => "class_name");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "商品管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "規格編集";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.core.min.js\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.widget.min.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js\"></script>
    <script>
        \$(function() {
            var oldRanks = [];
            // 画面の中のrank一覧を保持
            \$(\"div.tableish > .item_box\").each(function() {
                oldRanks.push(this.dataset.rank);
            });
            // rsort
            oldRanks.sort(function(a, b) {
                return a - b;
            }).reverse();

            \$(\"div.tableish\").sortable({
                items: '> .item_box',
                cursor: 'move',
                update: function(e, ui) {
                    \$(\"body\").append(\$('<div class=\"modal-backdrop in\"></div>'));
                    updateRank();
                }
            });

            var updateRank = function() {
                // 並び替え後にrankを更新
                var newRanks = {};
                var i = 0;
                \$(\"div.tableish > .item_box\").each(function() {
                    newRanks[this.dataset.categoryId] = oldRanks[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 67
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_class_category_rank_move");
        echo "',
                    type: 'POST',
                    data: newRanks,
                }).done(function(data) {
                    console.log(data);
                    \$(\".modal-backdrop\").remove();
                }).fail(function() {
                    console.log('fail');
                    \$(\".modal-backdrop\").remove();
                });
            };
        });
    </script>
";
    }

    // line 82
    public function block_main($context, array $blocks = array())
    {
        // line 83
        echo "    <div id=\"edit_wrap\" class=\"row\">
        <div id=\"edit_list_box\" class=\"col-md-12\">
            <div id=\"edit_list_box__body\" class=\"box\">
                <div id=\"edit_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">規格名： ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ClassName"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
                </div>
                <div id=\"edit_box__body\" class=\"box-body\">
                    <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 90
        if ($this->getAttribute(($context["TargetClassCategory"] ?? null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_class_category_edit", array("class_name_id" => $this->getAttribute(($context["ClassName"] ?? null), "id", array()), "id" => $this->getAttribute(($context["TargetClassCategory"] ?? null), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_class_category", array("class_name_id" => $this->getAttribute(($context["ClassName"] ?? null), "id", array()))), "html", null, true);
        }
        echo "\">
                        <div class=\"form-group\">
                            <div class=\"col-md-12 form-inline\">
                                ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
                                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'widget', array("attr" => array("placeholder" => "分類名を入力")));
        echo "
                                <button class=\"btn btn-default btn-sm\" type=\"submit\">分類作成</button>
                            </div>
                        </div>
                        <div class=\"extra-form\">
                            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 100
            echo "                                ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 101
                echo "                                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                    ";
                // line 102
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                    ";
                // line 103
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                ";
            }
            // line 105
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                        </div>
                    </form>
                </div><!-- /.box-header -->
                ";
        // line 109
        if ((twig_length_filter($this->env, ($context["ClassCategories"] ?? null)) > 0)) {
            // line 110
            echo "                    <div id=\"sortable_list_box\" class=\"box-body no-padding no-border\">
                        <div id=\"list_box\" class=\"sortable_list\">
                            <div id=\"sortable_list_box__body\" class=\"tableish\">

                                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ClassCategories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ClassCategory"]) {
                // line 115
                echo "
                                    <div id=\"sortable_list_box__item--";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassCategory"], "id", array()), "html", null, true);
                echo "\" class=\"item_box tr\" data-category-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassCategory"], "id", array()), "html", null, true);
                echo "\" data-rank=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassCategory"], "rank", array()), "html", null, true);
                echo "\">
                                        <div class=\"icon_sortable td\">
                                            <svg class=\"cb cb-ellipsis-v\">
                                                <use xlink:href=\"#cb-ellipsis-v\"/>
                                            </svg>
                                        </div>
                                        <div id=\"sortable_list_box__name--";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassCategory"], "id", array()), "html", null, true);
                echo "\" class=\"item_pattern td\">
                                            <a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_class_category_edit", array("class_name_id" => $this->getAttribute(($context["ClassName"] ?? null), "id", array()), "id" => $this->getAttribute($context["ClassCategory"], "id", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassCategory"], "name", array()), "html", null, true);
                echo "
                                            </a>
                                        </div>
                                        <div id=\"sortable_list_box__menu_box--";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassCategory"], "id", array()), "html", null, true);
                echo "\" class=\"icon_edit td\">
                                            <div id=\"sortable_list_box__menu_box_toggle--";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassCategory"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"><use xlink:href=\"#cb-ellipsis-h\"/></svg></a>
                                                <ul id=\"sortable_list_box__menu--";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["ClassCategory"], "id", array()), "html", null, true);
                echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                    ";
                // line 131
                if (($this->getAttribute($context["ClassCategory"], "id", array()) != $this->getAttribute(($context["TargetClassCategory"] ?? null), "id", array()))) {
                    // line 132
                    echo "                                                        <li>
                                                            <a href=\"";
                    // line 133
                    echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_class_category_edit", array("class_name_id" => $this->getAttribute(($context["ClassName"] ?? null), "id", array()), "id" => $this->getAttribute($context["ClassCategory"], "id", array()))), "html", null, true);
                    echo "\">編集</a>
                                                        </li>
                                                    ";
                } else {
                    // line 136
                    echo "                                                        <li><a>編集中</a></li>
                                                    ";
                }
                // line 138
                echo "                                                    <li>
                                                        <a href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_class_category_delete", array("class_name_id" => $this->getAttribute(($context["ClassName"] ?? null), "id", array()), "id" => $this->getAttribute($context["ClassCategory"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo "
                                                           data-method=\"delete\"
                                                           data-message=\"分類名を削除すると、その分類を利用している商品規格が無効になります。整合性の問題を把握し、バックアップを行ってから削除することを推奨致します。\">削除</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.item_box -->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ClassCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                ";
        } else {
            // line 153
            echo "                    <div  id=\"sortable_list_box\" class=\"box-body no-padding\">
                        <div id=\"sortable_list_box__not_find_message\" class=\"data-empty\">
                            <svg class=\"cb cb-inbox\"><use xlink:href=\"#cb-inbox\"/></svg>
                            <p>データはありません</p>
                        </div>
                    </div><!-- /.box-body -->
                ";
        }
        // line 160
        echo "                <!-- ▲ データがある時 ▲ -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>
    <div id=\"edit_list__footer\" class=\"row\">
        <div id=\"edit_list__back_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
            <p><a href=\"";
        // line 166
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_product_class_name");
        echo "\">規格一覧に戻る</a></p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__58e34ebeb2ab5cc598bb42aa4b5ea5b92dcba04af7c5c28dde6ab153940227c0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 166,  292 => 160,  283 => 153,  276 => 148,  259 => 139,  256 => 138,  252 => 136,  246 => 133,  243 => 132,  241 => 131,  237 => 130,  232 => 128,  228 => 127,  222 => 124,  218 => 123,  214 => 122,  201 => 116,  198 => 115,  194 => 114,  188 => 110,  186 => 109,  181 => 106,  175 => 105,  170 => 103,  166 => 102,  161 => 101,  158 => 100,  154 => 99,  146 => 94,  142 => 93,  132 => 90,  126 => 87,  120 => 83,  117 => 82,  99 => 67,  64 => 35,  60 => 34,  56 => 33,  51 => 32,  48 => 31,  42 => 27,  36 => 26,  32 => 22,  30 => 29,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__58e34ebeb2ab5cc598bb42aa4b5ea5b92dcba04af7c5c28dde6ab153940227c0", "");
    }
}
