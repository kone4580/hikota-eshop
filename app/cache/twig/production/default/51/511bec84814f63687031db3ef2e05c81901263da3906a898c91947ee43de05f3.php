<?php

/* Block/new_product.twig */
class __TwigTemplate_df032b07c07544137d21b43102ccfa6fdb8d9e9ce0daaab1e4a0a7746a47ab8c extends Twig_Template
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
        echo "<section class=\"top-section-group mt70\">
  <div class=\"top-center-title\">
    <h2>新着アイテム</h2>
    <p class=\"eng\">NEW ARRIVAL</p>
  </div>

  <div class=\"sp-scroll\">
    <div class=\"new_items mt50\">

      <div class=\"product_list-item\">
        <a href=\"/products/detail/2\">
          <div class=\"product_list-photo\">
            <div class=\"prod_img\">
              <div class=\"imgContent\">
                <img src=\"/html/upload/save_image/cafe-1.jpg\" alt=\"パーコレーター\">
              </div>
            </div>
          </div>
          <h4 class=\"product_list-title\">パーコレーター</h4>
          <div class=\"recom_point\">
            アウトドアでも淹れたてのコーヒーをお楽しみいただけます。いまだけ、おいしい淹れ方の冊子つきです。
          </div>
          <dl class=\"product_list-info\">
            <dt>価格</dt>
            <dd><p class=\"text1\">ログイン後に表示</p></dd>
          </dl>
        </a>
      </div>

      <div class=\"product_list-item\">
        <a href=\"#\">
          <div class=\"product_list-photo\">
            <div class=\"prod_img\">
              <div class=\"imgContent\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/common/default.png\" alt=\"\">
              </div>
            </div>
          </div>
          <h4 class=\"product_list-title\">商品名がはいります。</h4>
          <div class=\"recom_point\">
            おすすめポイントがはいります。おすすめポイントがはいります。おすすめポイントがはいります。おすすめポイントが...
          </div>
          <dl class=\"product_list-info\">
            <dt>価格</dt>
            <dd><p class=\"text1\">ログイン後に表示</p></dd>
          </dl>
        </a>
      </div>

      <div class=\"product_list-item\">
        <a href=\"#\">
          <div class=\"product_list-photo\">
            <div class=\"prod_img\">
              <div class=\"imgContent\">
                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/common/default.png\" alt=\"\">
              </div>
            </div>
          </div>
          <h4 class=\"product_list-title\">商品名がはいります。</h4>
          <div class=\"recom_point\">
            おすすめポイントがはいります。おすすめポイントがはいります。おすすめポイントがはいります。
          </div>
          <dl class=\"product_list-info\">
            <dt>価格</dt>
            <dd><p class=\"text1\">ログイン後に表示</p></dd>
          </dl>
        </a>
      </div>

      <div class=\"product_list-item\">
        <a href=\"#\">
          <div class=\"product_list-photo\">
            <div class=\"prod_img\">
              <div class=\"imgContent\">
                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/common/default.png\" alt=\"\">
              </div>
            </div>
          </div>
          <h4 class=\"product_list-title\">商品名がはいります。</h4>
          <div class=\"recom_point\">
            おすすめポイントがはいります。おすすめポイントがはいります。おすすめポイントがはいります。
          </div>
          <dl class=\"product_list-info\">
            <dt>価格</dt>
            <dd><p class=\"text1\">ログイン後に表示</p></dd>
          </dl>
        </a>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "Block/new_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 75,  78 => 55,  55 => 35,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/new_product.twig", "/Volumes/LaCie/MAMP/eccube-3/app/template/default/Block/new_product.twig");
    }
}
