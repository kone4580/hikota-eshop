<?php

/* Block/footer_up.twig */
class __TwigTemplate_e26595715394b06aac62d58b08b5cdab81bddcc6c02daa722ff47ba6c63d0822 extends Twig_Template
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
        echo "<div class=\"bottomInfo\">
  <div class=\"shortwrap\">
    <div class=\"inner\">
      <div class=\"credit\">
        <p>各種クレジットカードでのお支払いOK</p>
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/common/credit.png\" alt=\"\">
      </div>

      <a href=\"tel:076-264-3221\" class=\"foot_num\">
        <p>お電話でのご注文・お問い合わせはこちら</p>
        <p class=\"num\">076-264-3221</p>
      </a>

      <a href=\"#\" class=\"foot-contact\">ヘルプ・お問い合わせ</a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Block/footer_up.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/footer_up.twig", "/Volumes/LaCie/MAMP/eccube-3/app/template/default/Block/footer_up.twig");
    }
}
