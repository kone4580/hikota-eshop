<?php

/* default_frame.twig */
class __TwigTemplate_c8efc667200c9ba772cfb6f9741adf711a06ceb8088571aa4a9f2280467ded17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"ja\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BaseInfo"] ?? null), "shop_name", array()), "html", null, true);
        if ((array_key_exists("subtitle", $context) &&  !twig_test_empty(($context["subtitle"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        } elseif ((array_key_exists("title", $context) &&  !twig_test_empty(($context["title"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        }
        echo "</title>
";
        // line 7
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "author", array()))) {
            // line 8
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "author", array()), "html", null, true);
            echo "\">
";
        }
        // line 10
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "description", array()))) {
            // line 11
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "description", array()), "html", null, true);
            echo "\">
";
        }
        // line 13
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "keyword", array()))) {
            // line 14
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "keyword", array()), "html", null, true);
            echo "\">
";
        }
        // line 16
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "meta_robots", array()))) {
            // line 17
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "meta_robots", array()), "html", null, true);
            echo "\">
";
        }
        // line 19
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 20
        if ( !twig_test_empty($this->getAttribute(($context["PageLayout"] ?? null), "meta_tags", array()))) {
            // line 21
            echo "    ";
            echo $this->getAttribute(($context["PageLayout"] ?? null), "meta_tags", array());
            echo "
";
        }
        // line 23
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 24
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/icons/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/css/style.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/css/reset.css\" media=\"all\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/css/cmn.css\" media=\"all\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/css/fixed.css\" media=\"all\" />
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/plugins/swiper/dist/css/swiper.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/slick.css?v=3.0.18\">
<!-- for original theme CSS -->
";
        // line 33
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 34
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/js/jquery.cmn.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/js/jquery.pagescroll.js\"></script>

";
        // line 41
        if ($this->getAttribute(($context["PageLayout"] ?? null), "Head", array())) {
            // line 42
            echo "    ";
            // line 43
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "Head", array())));
            echo "
    ";
        }
        // line 47
        echo "
</head>
<body id=\"page_";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter(($context["body_class"] ?? null), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
<div id=\"wrapper\">
  ";
        // line 52
        echo "  ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "Header", array())) {
            // line 53
            echo "      ";
            // line 54
            echo "      ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "Header", array())));
            echo "
      ";
            // line 56
            echo "  ";
        }
        // line 57
        echo "  ";
        // line 58
        echo "

  <div id=\"contents\" class=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["PageLayout"] ?? null), "theme", array()), "html", null, true);
        echo "\">

    <div id=\"contents_top\">
      ";
        // line 64
        echo "        ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "ContentsTop", array())) {
            // line 65
            echo "          ";
            // line 66
            echo "            ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "ContentsTop", array())));
            echo "
          ";
            // line 68
            echo "        ";
        }
        // line 69
        echo "      ";
        // line 70
        echo "    </div>


    ";
        // line 74
        echo "    ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "SideLeft", array())) {
            // line 75
            echo "      <div id=\"side_left\" class=\"side\">
          ";
            // line 77
            echo "          ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "SideLeft", array())));
            echo "
          ";
            // line 79
            echo "      </div>
    ";
        }
        // line 81
        echo "    ";
        // line 82
        echo "
    <div id=\"main\">
        ";
        // line 85
        echo "        ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "MainTop", array())) {
            // line 86
            echo "            <div id=\"main_top\">
                ";
            // line 87
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "MainTop", array())));
            echo "
            </div>
        ";
        }
        // line 90
        echo "        ";
        // line 91
        echo "
        <div id=\"main_middle\">
            ";
        // line 93
        $this->displayBlock('main', $context, $blocks);
        // line 94
        echo "        </div>

        ";
        // line 97
        echo "        ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "MainBottom", array())) {
            // line 98
            echo "            <div id=\"main_bottom\">
                ";
            // line 99
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "MainBottom", array())));
            echo "
            </div>
        ";
        }
        // line 102
        echo "        ";
        // line 103
        echo "    </div>

    ";
        // line 106
        echo "    ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "SideRight", array())) {
            // line 107
            echo "      <div id=\"side_right\" class=\"side\">
          ";
            // line 109
            echo "          ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "SideRight", array())));
            echo "
          ";
            // line 111
            echo "      </div>
    ";
        }
        // line 113
        echo "    ";
        // line 114
        echo "
    ";
        // line 116
        echo "    ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "ContentsBottom", array())) {
            // line 117
            echo "      <div id=\"contents_bottom\">
          ";
            // line 119
            echo "          ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "ContentsBottom", array())));
            echo "
          ";
            // line 121
            echo "      </div>
    ";
        }
        // line 123
        echo "    ";
        // line 124
        echo "

    <footer id=\"footer\">
        ";
        // line 128
        echo "        ";
        if ($this->getAttribute(($context["PageLayout"] ?? null), "Footer", array())) {
            // line 129
            echo "            ";
            // line 130
            echo "            ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute(($context["PageLayout"] ?? null), "Footer", array())));
            echo "
            ";
            // line 132
            echo "        ";
        }
        // line 133
        echo "        ";
        // line 134
        echo "
    </footer>

  </div>

</div>


<div id=\"pagetop\">
  <a class=\"hash\" href=\"#top\" style=\"\">pagetop</a>
</div>

<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/slick.min.js?v=3.0.18\"></script>
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
    \$('#drawer').append(\$('.drawer_block').clone(true).children());
    \$.ajax({
        url: '";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>

<script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/assets/plugins/swiper/dist/js/swiper.min.js\"></script>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
  pagination: '.swiper-pagination',
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  spaceBetween: 30,
  autoplay: 8000,
  loop:true,
  slidesPerView: 1.5,
  centerMode: true,
  centeredSlides: true,
  centerPadding: '5%',
  breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 0
    }
  }
});
</script>

<script type=\"text/javascript\">
\$(function(){
  if (\$(window).width() > 768) {
    \$('.product_list').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: false,
      centerMode: false,
      dots: false,
      centerPadding: '10px',
      responsive: [
        {
          breakpoint: 1180,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }
});
</script>

";
        // line 219
        $this->displayBlock('javascript', $context, $blocks);
        // line 220
        echo "</body>
</html>
";
    }

    // line 23
    public function block_meta_tags($context, array $blocks = array())
    {
    }

    // line 33
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 93
    public function block_main($context, array $blocks = array())
    {
    }

    // line 219
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 219,  455 => 93,  450 => 33,  445 => 23,  439 => 220,  437 => 219,  379 => 164,  366 => 154,  356 => 149,  350 => 148,  346 => 147,  340 => 146,  326 => 134,  324 => 133,  321 => 132,  316 => 130,  314 => 129,  311 => 128,  306 => 124,  304 => 123,  300 => 121,  295 => 119,  292 => 117,  289 => 116,  286 => 114,  284 => 113,  280 => 111,  275 => 109,  272 => 107,  269 => 106,  265 => 103,  263 => 102,  257 => 99,  254 => 98,  251 => 97,  247 => 94,  245 => 93,  241 => 91,  239 => 90,  233 => 87,  230 => 86,  227 => 85,  223 => 82,  221 => 81,  217 => 79,  212 => 77,  209 => 75,  206 => 74,  201 => 70,  199 => 69,  196 => 68,  191 => 66,  189 => 65,  186 => 64,  180 => 60,  176 => 58,  174 => 57,  171 => 56,  166 => 54,  164 => 53,  161 => 52,  154 => 49,  150 => 47,  144 => 43,  142 => 42,  140 => 41,  135 => 38,  131 => 37,  125 => 36,  121 => 34,  119 => 33,  114 => 31,  110 => 30,  105 => 28,  101 => 27,  97 => 26,  91 => 25,  86 => 24,  84 => 23,  78 => 21,  76 => 20,  73 => 19,  67 => 17,  65 => 16,  59 => 14,  57 => 13,  51 => 11,  49 => 10,  43 => 8,  41 => 7,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default_frame.twig", "/Applications/MAMP/htdocs/hikota-eshop/src/Eccube/Resource/template/default/default_frame.twig");
    }
}
