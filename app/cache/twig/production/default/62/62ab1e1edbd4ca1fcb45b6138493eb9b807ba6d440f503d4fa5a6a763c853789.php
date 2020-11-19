<?php

/* __string_template__cbf2bb9fcc4c473cd4d49c4b36c5ea8c78f288d670b7aa7e8ee3be5d8b6cab3f */
class __TwigTemplate_78c0b0b87725c1c4188f2d732a1dfdbfdfe6fbeedd26c59dd400631124a57371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__cbf2bb9fcc4c473cd4d49c4b36c5ea8c78f288d670b7aa7e8ee3be5d8b6cab3f", 1);
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
        $context["body_class"] = "mypage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"main\" class=\"page_section\">
  <div class=\"wrap\">
    <h1 class=\"page-heading\">ログイン</h1>

    <div class=\"loginWrap\">
      <div class=\"user-login\">
        <div class=\"loginbox\">
          <h2 class=\"capt\">HIKOTA E-SHOPにログイン</h2>
          <form name=\"login_mypage\" id=\"login_mypage\" method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("login_check");
        echo "\" onsubmit=\"return eccube.checkLoginFormInputted('login_mypage')\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'enctype');
        echo ">
              ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "has", array(0 => "eccube.login.target.path"), "method")) {
            // line 17
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "eccube.login.target.path"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["targetPath"]) {
                // line 18
                echo "                      <input type=\"hidden\" name=\"_target_path\" value=\"";
                echo twig_escape_filter($this->env, $context["targetPath"], "html", null, true);
                echo "\" />
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "              ";
        }
        // line 21
        echo "              <div id=\"logIn\" class=\"logIn\">
                <div id=\"mypage_login_box__login_email\" class=\"form-group\">
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_email", array()), 'widget', array("attr" => array("style" => "ime-mode: disabled;", "placeholder" => "メールアドレス", "autofocus" => true)));
        echo "
                </div>
                <div id=\"mypage_login_box__login_pass\" class=\"form-group\">
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_pass", array()), 'widget', array("attr" => array("placeholder" => "パスワード")));
        echo "
                    ";
        // line 27
        if ($this->getAttribute(($context["BaseInfo"] ?? null), "option_remember_me", array())) {
            // line 28
            echo "                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 29
                echo "                            <input id=\"mypage_login_box__login_memory\" type=\"hidden\" name=\"login_memory\" value=\"1\">
                        ";
            } else {
                // line 31
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login_memory", array()), 'widget');
                echo "
                        ";
            }
            // line 33
            echo "                    ";
        }
        // line 34
        echo "                </div>
                <div class=\"extra-form form-group\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 37
            echo "                        ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 38
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                            ";
                // line 39
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                            ";
                // line 40
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                        ";
            }
            // line 42
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>
                ";
        // line 44
        if (($context["error"] ?? null)) {
            // line 45
            echo "                <div id=\"mypage_login_box__error_message\" class=\"form-group\">
                    <span class=\"text-danger\">";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? null));
            echo "</span>
                </div>
                ";
        }
        // line 49
        echo "                <div id=\"mypage_login__login_button\" class=\"btn_area\">
                    <p><button type=\"submit\" class=\"gBtn\">ログイン</button></p>
                    <ul id=\"mypage_login__login_menu\" >
                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("forgot");
        echo "\">ログイン情報をお忘れですか？</a></li>
                        <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("entry");
        echo "\">新規会員登録</a></li>
                    </ul>
                </div>
              </div>
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
          </form>
        </div>
      </div>


      <div class=\"member-info-section\">
        <h4><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/images/common/icon_beginner.png\" alt=\"初心者マーク\" class=\"icon_beginner\">初めてのかたはこちら</h4>
        <div class=\"form-content\">
          <p class=\"brand-description\">HIKOTA E-SHOPのご利用には会員登録が必要です。 ご登録・年会費はすべて無料！ ご登録いただくと、ポイントをはじめとした、会員限定のさまざまな特典・サービスをご利用いただだけます。</p>
          <p class=\"brand-information\">※本サイトはプロフェッショナル専用の卸サイトです。<br>会員登録には、美容サロン、クリニックの方または開業（勤務）予定の方のみとさせていただきます。</p>
        </div>
        <a href=\"";
        // line 69
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("entry");
        echo "\" class=\"btn btn-blue btn-block\">新規会員登録（無料）</a>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__cbf2bb9fcc4c473cd4d49c4b36c5ea8c78f288d670b7aa7e8ee3be5d8b6cab3f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 69,  173 => 64,  163 => 57,  156 => 53,  152 => 52,  147 => 49,  141 => 46,  138 => 45,  136 => 44,  133 => 43,  127 => 42,  122 => 40,  118 => 39,  113 => 38,  110 => 37,  106 => 36,  102 => 34,  99 => 33,  93 => 31,  89 => 29,  86 => 28,  84 => 27,  80 => 26,  74 => 23,  70 => 21,  67 => 20,  58 => 18,  53 => 17,  51 => 16,  45 => 15,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__cbf2bb9fcc4c473cd4d49c4b36c5ea8c78f288d670b7aa7e8ee3be5d8b6cab3f", "");
    }
}
