<?php

/* Block/for_beginner.twig */
class __TwigTemplate_23444f65953b534a8642103c0357d18ff4af2781dc3db8a47fdc89aec8b7c9ba extends Twig_Template
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
        echo "<section class=\"howto-section\">
  <div class=\"wrap\">
    <h3>HIKOTA E-SHOPをご利用いただくには<br class=\"sp_only\">会員登録が必要です</h3>
    <a href=\"#\" class=\"btn btn-red\">新規会員登録<i class=\"fas fa-caret-right\"></i></a>
    <p class=\"wat_text mt30\">ご登録・年会費は無料！<br class=\"sp_only\">サロン関係者専用の仕入れサイトです。</p>
    <h4><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/common/icon_beginner.png\" alt=\"初心者マーク\" class=\"icon_beginner\">お買い物スタートまでの流れ</h4>
    <div class=\"steps\">
      <dl class=\"step_block\">
        <dt>STEP 01</dt>
        <dd>会員登録<br>申請</dd>
      </dl>
      <dl class=\"step_block\">
        <dt>STEP 02</dt>
        <dd>HIKOTAで<br>承認作業</dd>
      </dl>
      <dl class=\"step_block\">
        <dt>STEP 03</dt>
        <dd>お買い物<br>スタート</dd>
      </dl>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "Block/for_beginner.twig";
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
        return new Twig_Source("", "Block/for_beginner.twig", "/Applications/MAMP/htdocs/hikota-eshop/app/template/default/Block/for_beginner.twig");
    }
}
