<?php

/* Block/footer.twig */
class __TwigTemplate_67059ba150891c36e9db0734c63426b65c9cee4644b4e2954c78d6ccedbe77c4 extends Twig_Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/common/logo.png\" alt=\"HIKOTA E-SHOP\" class=\"foot-logo\">
<p class=\"foot-info\">HIKOTA E-SHOPはサロンで働くプロ専用の美容機器、用品、化粧品総合販売サイトです。</p>

<div class=\"wrap mt40\">
  <ul class=\"fnav\">
    <li class=\"foot_cat\">提供会社</li>
    <li>株式会社彦田</li>
    <li>オンライン事業部</li>
    <li>営業時間：9:00～18:00</li>
    <li>定休日：土、日、祝日</li>
    <li>企業サイト：<a href=\"https://hikota.com\" target=\"_blank\">https://hikota.com/</a></li>
  </ul>

  <ul class=\"fnav\">
    <li class=\"foot_cat\">商品カテゴリ</li>
    <li><a href=\"#\">カラー</a></li>
    <li><a href=\"#\">パーマ</a></li>
    <li><a href=\"#\">ヘアケア</a></li>
    <li><a href=\"#\">スタイリング</a></li>
    <li><a href=\"#\">その他</a></li>
  </ul>

  <ul class=\"fnav\">
    <li class=\"foot_cat\">ご利用ガイド</li>
    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_about");
        echo "\">お支払について</a></li>
    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_about");
        echo "\">送料について</a></li>
    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_about");
        echo "\">配送について</a></li>
    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_about");
        echo "\">初めての方へ</a></li>
    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_about");
        echo "\">カタログ販売</a></li>
  </ul>

  <ul class=\"fnav\">
    <li class=\"foot_cat\">当サイトについて</li>
    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_agreement");
        echo "\">利用規約</a></li>
    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_tradelaw");
        echo "\">特定商取引法に基づく表示</a></li>
    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("help_privacy");
        echo "\">プライバシーポリシー</a></li>
  </ul>
</div>


<p class=\"copyright\">&copy; HIKOTA CO.,LTD.</p>
";
    }

    public function getTemplateName()
    {
        return "Block/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 36,  75 => 35,  71 => 34,  63 => 29,  59 => 28,  55 => 27,  51 => 26,  47 => 25,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/footer.twig", "/Applications/MAMP/htdocs/hikota-eshop/app/template/default/Block/footer.twig");
    }
}
