<?php

/* Block/common_header.twig */
class __TwigTemplate_7efa15d388fa32577e5934cae6e44ec5e50ecea1e5ca7c263fbfed22ad0be2af extends Twig_Template
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
        echo "<div id=\"top\"></div>

<header id=\"header\">
  <div class=\"header_top\">
    <div class=\"header_guide\">
      <a class=\"header_guide-item\" href=\"./guide/shipping\">10,000円以上購入で送料無料</a>
      <a class=\"header_guide-item\" href=\"./guide/delivery\">17時迄注文で当日出荷</a>
    </div>
    <a class=\"header_tel\" href=\"tel:076-264-3221\"><i class=\"fa fa-phone\"></i><span>ご注文：076-264-3221</span></a>
    <div class=\"header_links\">
      <a href=\"#\">ご利用ガイド</a>
      <a href=\"/mypage/login\">新規登録・ログイン</a>
    </div>
  </div>

  <div class=\"header_inner\">
    <div id=\"logo\">
      <a href=\"";
        // line 18
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/common/logo.png\" alt=\"HIKOTA E-SHOP\"></a>
    </div>

    <div class=\"search_form\">
      <form name=\"search_form_SearchBox\" method=\"get\" action=\"/search/\">
        <div class=\"search_form_input\">
          <input type=\"text\" class=\"site-search-input ui-autocomplete-input\" name=\"text\" value=\"\" placeholder=\"キーワードや商品名で検索\">
          <span class=\"input-group-btn\">
            <button class=\"btn btn-search\" type=\"submit\">
              <span class=\"fa fa-search\"></span>
            </button>
          </span>
        </div>
      </form>
    </div>

    <div class=\"icon_links\">
      <a href=\"#\">
        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/icons/icon_history.png\" class=\"icon_history\" alt=\"購入履歴\">
      </a>
      <a href=\"#\">
        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/icons/icon_favo.png\" class=\"icon_favo\" alt=\"お気に入り\">
      </a>

      <a href=\"#cart\" class=\"cart-trigger\">
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/icons/icon_cart.png\" class=\"icon_cart\" alt=\"カート\">
        <span class=\"badge\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Cart"] ?? null), "total_quantity", array()), "html", null, true);
        echo "</span>
      </a>
      <div id=\"cart\" class=\"cart\">
        <div class=\"inner\">
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.cart.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 49
            echo "          <div class=\"message\">
            <p class=\"errormsg bg-danger\">
              <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 51
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"]), "html", null, true));
            echo "
            </p>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Cart"] ?? null), "CartItems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
            // line 56
            echo "        ";
            $context["ProductClass"] = $this->getAttribute($context["CartItem"], "Object", array());
            // line 57
            echo "        ";
            $context["Product"] = $this->getAttribute(($context["ProductClass"] ?? null), "Product", array());
            // line 58
            echo "        <div class=\"item_box clearfix\">
          <div class=\"item_photo\"><img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute(($context["Product"] ?? null), "MainListImage", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
            echo "\"></div>
          <dl class=\"item_detail\">
            <dt class=\"item_name\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
            echo "</dt>
            <dd class=\"item_pattern small\">";
            // line 63
            if ($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array())) {
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()), "ClassName", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()), "html", null, true);
                // line 65
                if ($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array())) {
                    // line 66
                    echo "<br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()), "html", null, true);
                }
            }
            // line 69
            echo "</dd>
            <dd class=\"item_price\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["CartItem"], "price", array())), "html", null, true);
            echo "<span class=\"small\">税込</span></dd>
            <dd class=\"item_quantity form-group form-inline\">数量：";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["CartItem"], "quantity", array()), "html", null, true);
            echo "</dd>
          </dl>
        </div><!--/item_box-->
        <p class=\"cart_price sp\">合計 <span class=\"price\">";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Cart"] ?? null), "total_price", array())), "html", null, true);
            echo "</span></p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Cart"] ?? null), "CartItems", array())) > 0)) {
            // line 77
            echo "
          <div class=\"btn_area\">
            <ul>
              <li>
                <a href=\"";
            // line 81
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("cart");
            echo "\" class=\"btn btn-primary\">カートへ進む</a>
              </li>
              <li>
                <button type=\"button\" class=\"btn btn-default btn-sm cart-trigger\">キャンセル</button>
              </li>
            </ul>
          </div>
        ";
        } else {
            // line 89
            echo "          <div class=\"btn_area\">
            <div class=\"message\">
              <p class=\"errormsg bg-danger\" class=\"mb20\">
                現在カート内に<br>商品はございません。
              </p>
            </div>
          </div>
        ";
        }
        // line 97
        echo "      </div>
      </div>
    </div>
  </div>

  <div class=\"header_under\">
    <nav id=\"global_navi\">
      <div class=\"menuBtn\">
        <label id=\"nav-open\" for=\"nav-input\">
          <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/common/icon_menu.png\" alt=\"\">
        </label>
      </div>
      <div class=\"naviBox\">
        <div class=\"sp_navi\">
          <a href=\"#\">ご利用ガイド</a>
          <a href=\"#\">新規登録・ログイン</a>
        </div>
        <p class=\"sp_navi3\">閲覧履歴・お気に入り<i class=\"fas fa-caret-down\"></i></p>
        <ul class=\"sp_navi2\">
          <li><a href=\"#\" class=\"header-nav-item\">購入履歴</a></li>
          <li><a href=\"#\" class=\"header-nav-item\">お気に入り</a></li>
          <li><a href=\"#\" class=\"header-nav-item\">マイページ</a></li>
        </ul>
        <p class=\"sp_navi3\">商品カテゴリ<i class=\"fas fa-caret-down\"></i></p>
        <ul id=\"navi_ul\" class=\"clearfix\">

          <li class=\"toggle\">
            <a href=\"#\" class=\"header-nav-item\">カラー</a>
            <div class=\"megamenu\">
              <ul class=\"menu_inner\">
                <li><a href=\"#\">color cat1</a></li>
                <li><a href=\"#\">color cat2</a></li>
                <li><a href=\"#\">color cat3</a></li>
                <li><a href=\"#\">color cat4</a></li>
                <li><a href=\"#\">color cat5</a></li>
                <li><a href=\"#\">color cat6</a></li>
              </ul>
            </div>
          </li>

          <li class=\"toggle\">
            <a href=\"#\" class=\"header-nav-item\">パーマ</a>
            <div class=\"megamenu\">
              <ul class=\"menu_inner\">
                <li><a href=\"#\">perm cat1</a></li>
                <li><a href=\"#\">perm cat2</a></li>
                <li><a href=\"#\">perm cat3</a></li>
                <li><a href=\"#\">perm cat4</a></li>
                <li><a href=\"#\">perm cat5</a></li>
                <li><a href=\"#\">perm cat6</a></li>
              </ul>
            </div>
          </li>

          <li class=\"toggle\">
            <a href=\"#\" class=\"header-nav-item\">ヘアケア</a>
            <div class=\"megamenu\">
              <ul class=\"menu_inner\">
                <li><a href=\"#\">hair care1</a></li>
                <li><a href=\"#\">hair care2</a></li>
                <li><a href=\"#\">hair care3</a></li>
                <li><a href=\"#\">hair care4</a></li>
                <li><a href=\"#\">hair care5</a></li>
                <li><a href=\"#\">hair care6</a></li>
              </ul>
            </div>
          </li>

          <li class=\"toggle\">
            <a href=\"#\" class=\"header-nav-item\">スタイリング</a>
            <div class=\"megamenu\">
              <ul class=\"menu_inner\">
                <li><a href=\"#\">styling1</a></li>
                <li><a href=\"#\">styling2</a></li>
                <li><a href=\"#\">styling3</a></li>
                <li><a href=\"#\">styling4</a></li>
                <li><a href=\"#\">styling5</a></li>
                <li><a href=\"#\">styling6</a></li>
              </ul>
            </div>
          </li>

          <li class=\"toggle\">
            <a href=\"#\" class=\"header-nav-item\">その他</a>
            <div class=\"megamenu\">
              <ul class=\"menu_inner\">
                <li><a href=\"#\">other1</a></li>
                <li><a href=\"#\">other2</a></li>
                <li><a href=\"#\">other3</a></li>
                <li><a href=\"#\">other4</a></li>
                <li><a href=\"#\">other5</a></li>
                <li><a href=\"#\">other6</a></li>
              </ul>
            </div>
          </li>

          <li class=\"sp_none\">
            <a href=\"#\" class=\"header-nav-item\">メーカー・ブランドから探す</a>
          </li>
        </ul>

        <p class=\"sp_navi3\">メーカー・ブランドから探す<i class=\"fas fa-caret-down\"></i></p>
        <ul class=\"sp_navi2\">
          <li><a href=\"#\" class=\"header-nav-item\">メーカー一覧</a></li>
          <li><a href=\"#\" class=\"header-nav-item\">ブランド一覧</a></li>
        </ul>

        <p class=\"sp_navi3\">ヘルプ・お問い合わせ<i class=\"fas fa-caret-down\"></i></p>
        <ul class=\"sp_navi2\">
          <li><a href=\"#\" class=\"header-nav-item\">ヘルプ・お問い合わせ</a></li>
        </ul>
      </div>
      <div class=\"navi_overlay\">
        <i id=\"nav-close\" class=\"fas fa-times\"></i>
      </div>
    </nav>
  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "Block/common_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 106,  196 => 97,  186 => 89,  175 => 81,  169 => 77,  166 => 76,  158 => 74,  152 => 71,  148 => 70,  145 => 69,  138 => 66,  136 => 65,  132 => 64,  130 => 63,  126 => 61,  117 => 59,  114 => 58,  111 => 57,  108 => 56,  103 => 55,  93 => 51,  89 => 49,  85 => 48,  78 => 44,  74 => 43,  67 => 39,  61 => 36,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/common_header.twig", "/Volumes/LaCie/MAMP/eccube-3/app/template/default/Block/common_header.twig");
    }
}
