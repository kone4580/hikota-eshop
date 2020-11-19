<?php

/* __string_template__d400e5065b879d1d27a7d00a3b0602c9f1302ffcbcdb8346ace760ad43c799ec */
class __TwigTemplate_de01b536c536d671c3edacea3c5a108fe88aa4f1f0ba6b21b8b2c19a430c862c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__d400e5065b879d1d27a7d00a3b0602c9f1302ffcbcdb8346ace760ad43c799ec", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        $context["menus"] = array(0 => "setting", 1 => "system", 2 => "member");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "システム設定";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "メンバー管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"row\" id=\"aside_wrap\">
        <div id=\"detail_wrap\" class=\"col-md-9\">
            <div id=\"detail_box__body\" class=\"box\">
                <div id=\"detail_box__body_header\" class=\"box-header\">
                    <h3 class=\"box-title\">メンバー登録・編集</h3>
                </div><!-- /.box-header -->
                <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" enctype=\"multipart/form-data\">
                    <div id=\"detail_box__body_inner\" class=\"box-body\">

                        ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
        echo "
                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "department", array()), 'row');
        echo "
                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_id", array()), 'row');
        echo "
                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "password", array()), "first", array()), 'row', array("type" => "password"));
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "password", array()), "second", array()), 'row', array("type" => "password"));
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Authority", array()), 'row');
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Work", array()), 'row');
        echo "
                        <div class=\"extra-form\">
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 51
            echo "                                ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 52
                echo "                                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'row');
                echo "
                                ";
            }
            // line 54
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        </div>

                    </div><!-- /.box-body -->
                </form>
            </div><!-- /.box -->

            <div id=\"detail_box__footer\" class=\"row\">
                <div id=\"detail_box__back_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <p><a href=\"";
        // line 63
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_setting_system_member");
        echo "\">戻る</a></p>
                </div>
            </div>

        </div><!-- /.col -->
        
        <div class=\"col-md-3\" id=\"aside_column\">
            <div id=\"common_box\" class=\"col_inner\">
                <div id=\"common_button_box\" class=\"box no-header\">
                    <div id=\"common_button_box__body\" class=\"box-body\">
                        <div id=\"common_button_box__button_area\" class=\"row text-center\">
                            <div id=\"common_button_box__insert_button\" class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" onclick=\"document.form1.submit(); return false;\">登録</button>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col --> 

        
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__d400e5065b879d1d27a7d00a3b0602c9f1302ffcbcdb8346ace760ad43c799ec";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 63,  113 => 55,  107 => 54,  101 => 52,  98 => 51,  94 => 50,  89 => 48,  85 => 47,  81 => 46,  77 => 45,  73 => 44,  69 => 43,  65 => 42,  61 => 41,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__d400e5065b879d1d27a7d00a3b0602c9f1302ffcbcdb8346ace760ad43c799ec", "");
    }
}
