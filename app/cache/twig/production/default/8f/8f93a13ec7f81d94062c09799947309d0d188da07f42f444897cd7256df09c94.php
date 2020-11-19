<?php

/* __string_template__60ea2e29c801f722f6894fa8b3c4860cd559a7b9406f9dd049589b8e0aaadd76 */
class __TwigTemplate_8fd725bd655799833772bc1ca54a6d039e0acafe0431fc2428cee598494a2cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__60ea2e29c801f722f6894fa8b3c4860cd559a7b9406f9dd049589b8e0aaadd76", 1);
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
        $context["body_class"] = "front_page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"mainVisual\">
  <div class=\"swiper-container\">
    <div class=\"swiper-wrapper\">

      <div class=\"swiper-slide\">
        <picture>
          <source media=\"(max-width: 767px)\" srcset=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/top/main_img.jpg\">
          <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/top/main_img.jpg\" alt=\"top画像\">
        </picture>
      </div>

      <div class=\"swiper-slide\">
        <picture>
          <source media=\"(max-width: 767px)\" srcset=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/top/main02.jpg\">
          <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/top/main02.jpg\" alt=\"top画像\">
        </picture>
      </div>


      <div class=\"swiper-slide\">
        <picture>
          <source media=\"(max-width: 767px)\" srcset=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/top/main_img.jpg\">
          <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/top/main_img.jpg\" alt=\"top画像\">
        </picture>
      </div>

    </div>

    <!-- Add Pagination -->
    <div class=\"swiper-pagination swiper-pagination-black\"></div>
    <!-- Add Arrows -->
    <div class=\"swiper-button-next swiper-button-black\"></div>
    <div class=\"swiper-button-prev swiper-button-black\"></div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__60ea2e29c801f722f6894fa8b3c4860cd559a7b9406f9dd049589b8e0aaadd76";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  69 => 27,  59 => 20,  55 => 19,  46 => 13,  42 => 12,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__60ea2e29c801f722f6894fa8b3c4860cd559a7b9406f9dd049589b8e0aaadd76", "");
    }
}
