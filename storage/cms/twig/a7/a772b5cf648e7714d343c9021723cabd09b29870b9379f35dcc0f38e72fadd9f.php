<?php

/* C:\Users\ruanl\Desktop\restaurant-planner/themes/rainlab-vanilla/layouts/default.htm */
class __TwigTemplate_c45c46653548f51aa1b788f14eae3425d4c6d4d5896b97299e517847e4e03e87 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>Restaurant Planner - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\" />
    ";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 12
        echo "    <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/css/theme.css", 1 => "assets/slick/slick.css", 2 => "assets/slick/slick-theme.css"));
        // line 16
        echo "\"
        rel=\"stylesheet\">
</head>

<body>

    <!-- Header -->
    <header id=\"layout-header\">

        <!-- Nav -->
        <nav id=\"layout-nav\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Restaurant Planner</a>
                </div>
                <div class=\"collapse navbar-collapse navbar-main-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/restaurant-planner/backend\">Configurações</a></li>
                        <!--
                        <li class=\"";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "account")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
        echo "\">Account</a></li>
                        <li class=\"";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
                        <li class=\"";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "forum")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forum");
        echo "\">Forum</a></li>
                        -->
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 47
        if (($context["user"] ?? null)) {
            // line 48
            echo "                        <li><a href=\"#\" data-request=\"onLogout\">Logout</a></li>
                        ";
        }
        // line 50
        echo "                    </ul>
                </div>
            </div>
        </nav>

    </header>

    ";
        // line 57
        $context["jumbotronTexture"] = twig_random($this->env, array(0 => "carbon", 1 => "dustnscratches", 2 => "elegant", 3 => "grunge", 4 => "leather", 5 => "lines", 6 => "plaid", 7 => "wood"));
        // line 59
        echo "
    <!-- Content -->
    <section id=\"layout-content\">
        <div class=\"jumbotron\" style=\"background-image:url(";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/textures/" . ($context["jumbotronTexture"] ?? null)) . ".png"));
        echo ")\">
            <div class=\"container\">
                <h1>Restaurant Planner</h1>
                <p>Self-Service Planning</p>
            </div>
        </div>
        <div class=\"container\">
            ";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 70
        echo "        </div>
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 75
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "    </footer>

    <!-- Scripts -->
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/app.js", 14 => "assets/slick/slick.js"));
        // line 95
        echo "\"></script>

    ";
        // line 97
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 98
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 99
        echo "    <script>\$('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: \"unslick\"
                // instead of a settings object
            ]
        });
    </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\ruanl\\Desktop\\restaurant-planner/themes/rainlab-vanilla/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 99,  181 => 98,  166 => 97,  162 => 95,  160 => 79,  155 => 76,  151 => 75,  144 => 70,  142 => 69,  132 => 62,  127 => 59,  125 => 57,  116 => 50,  112 => 48,  110 => 47,  99 => 43,  91 => 42,  83 => 41,  74 => 35,  53 => 16,  50 => 12,  47 => 11,  43 => 10,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>Restaurant Planner - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
    {% styles %}
    <link href=\"{{ [
            'assets/css/theme.css',
            'assets/slick/slick.css',
            'assets/slick/slick-theme.css'
        ]|theme }}\"
        rel=\"stylesheet\">
</head>

<body>

    <!-- Header -->
    <header id=\"layout-header\">

        <!-- Nav -->
        <nav id=\"layout-nav\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Restaurant Planner</a>
                </div>
                <div class=\"collapse navbar-collapse navbar-main-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/restaurant-planner/backend\">Configurações</a></li>
                        <!--
                        <li class=\"{% if this.page.id == 'account' %}active{% endif %}\"><a href=\"{{ 'account'|page }}\">Account</a></li>
                        <li class=\"{% if this.page.id == 'blog' %}active{% endif %}\"><a href=\"{{ 'blog'|page }}\">Blog</a></li>
                        <li class=\"{% if this.page.id == 'forum' %}active{% endif %}\"><a href=\"{{ 'forum'|page }}\">Forum</a></li>
                        -->
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if user %}
                        <li><a href=\"#\" data-request=\"onLogout\">Logout</a></li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    {% set jumbotronTexture = random(['carbon', 'dustnscratches', 'elegant', 'grunge', 'leather', 'lines', 'plaid',
    'wood']) %}

    <!-- Content -->
    <section id=\"layout-content\">
        <div class=\"jumbotron\" style=\"background-image:url({{ ('assets/images/textures/'~jumbotronTexture~'.png')|theme }})\">
            <div class=\"container\">
                <h1>Restaurant Planner</h1>
                <p>Self-Service Planning</p>
            </div>
        </div>
        <div class=\"container\">
            {% page %}
        </div>
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        {% partial \"footer\" %}
    </footer>

    <!-- Scripts -->
    <script src=\"{{ [
            'assets/javascript/jquery.js',
            'assets/vendor/bootstrap/js/transition.js',
            'assets/vendor/bootstrap/js/alert.js',
            'assets/vendor/bootstrap/js/button.js',
            'assets/vendor/bootstrap/js/carousel.js',
            'assets/vendor/bootstrap/js/collapse.js',
            'assets/vendor/bootstrap/js/dropdown.js',
            'assets/vendor/bootstrap/js/modal.js',
            'assets/vendor/bootstrap/js/tooltip.js',
            'assets/vendor/bootstrap/js/popover.js',
            'assets/vendor/bootstrap/js/scrollspy.js',
            'assets/vendor/bootstrap/js/tab.js',
            'assets/vendor/bootstrap/js/affix.js',
            'assets/javascript/app.js',
            'assets/slick/slick.js'
        ]|theme }}\"></script>

    {% framework extras %}
    {% scripts %}
    <script>\$('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: \"unslick\"
                // instead of a settings object
            ]
        });
    </script>
</body>

</html>", "C:\\Users\\ruanl\\Desktop\\restaurant-planner/themes/rainlab-vanilla/layouts/default.htm", "");
    }
}
