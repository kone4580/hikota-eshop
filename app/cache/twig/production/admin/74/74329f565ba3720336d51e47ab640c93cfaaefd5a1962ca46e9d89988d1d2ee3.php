<?php

/* __string_template__9bc471fb9ed7edf7cf4e17132c26e68f0150272e6c27b824695c7a2cda7d71a7 */
class __TwigTemplate_958504c581311221df867181225347bdb40a3d229baf6b54d8f4433ee7b3a231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__9bc471fb9ed7edf7cf4e17132c26e68f0150272e6c27b824695c7a2cda7d71a7", 22);
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
        $context["menus"] = array(0 => "content", 1 => "cache");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "コンテンツ管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "キャッシュ管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "<form name=\"form1\" method=\"post\" action=\"";
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_cache");
        echo "\">
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "
    <div id=\"cache_wrap\" class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"cache_box\" class=\"box\">
                <div id=\"cache_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">キャッシュ管理</h3>
                    <div id=\"cache_box__message\" style=\"margin-left: 10px;\">
                        <p class=\"text-danger\">本番環境にFTPなどでTwigファイルをアップロードして入れ替えた場合、画面を反映させるにはTwigキャッシュを削除する必要があります。</p>
                        <p>キャッシュ削除するディレクトリを選択してください。</p>
                    </div>
                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cache", array()), 'widget');
        echo "
                    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cache", array()), 'errors');
        echo "
                </div>
                <div id=\"cache_box__clear_button\" class=\"box-body\">
                    <button type=\"submit\" class=\"btn btn-primary\">キャッシュ削除</button>
                </div>
            </div>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__9bc471fb9ed7edf7cf4e17132c26e68f0150272e6c27b824695c7a2cda7d71a7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 44,  68 => 43,  55 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__9bc471fb9ed7edf7cf4e17132c26e68f0150272e6c27b824695c7a2cda7d71a7", "");
    }
}
