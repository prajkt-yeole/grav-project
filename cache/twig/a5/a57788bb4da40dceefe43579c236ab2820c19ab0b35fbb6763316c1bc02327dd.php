<?php

/* partials/base.html.twig */
class __TwigTemplate_4f064fd7edf5dfbce3e813b0d8ea2b7f07a9d1d877a4aa8a8fb851a278432580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footerTop' => array($this, 'block_footerTop'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "</head>
<body id=\"top\" class=\"";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('footerTop', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('footer', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('bottom', $context, $blocks);
        // line 117
        echo "
</body>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 105), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Roboto:300,400", 1 => 104), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://plugins/linearicons/style.css", 1 => 103), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://plugins/owl-carousel/owl.transitions.css", 1 => 102), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://plugins/owl-carousel/owl.theme.css", 1 => 101), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://plugins/owl-carousel/owl.carousel.css", 1 => 100), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://plugins/font-awesome-4.6.1/css/font-awesome.min.css", 1 => 99), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css", 1 => 98), "method");
        // line 25
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 30
        echo "    ";
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"";
        // line 40
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                <i class=\"fa fa-rebel\"></i>
                ";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "
            </a>
            ";
        // line 44
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 49
        echo "        </div>
    </div>
";
    }

    // line 44
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 45
        echo "            <nav class=\"main-nav\">
                ";
        // line 46
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "            </nav>
            ";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "        </div>
    </section>
";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 61
    public function block_footerTop($context, array $blocks = array())
    {
        // line 62
        echo "        <section id=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h3>ABOUT THE COMPANY</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod veniam eius, qui id et mollitia illum vero, quasi asperiores, unde dolores eligendi recusandae illo sunt totam harum iusto saepe laudantium.</p>
                    <div class=\"social\">
                        <a href=\"\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"\"><i class=\"fa fa-linkedin\"></i></a>
                        <a href=\"\"><i class=\"fa fa-youtube\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <h3>get in touch</h3>
                    <div class=\"contact-list\">
                        <ul>
                            <li class=\"address\">ICC Trade Tower, 'A' Wing, 5th Floor,
                                <br> Senapati Bapat Road, Shivajinagar,
                                <br> Pune 411 016, Maharashtra, India.</li>
                            <li class=\"mail\">+91 20 4011 4500 / 4501</li>
                            <li class=\"phone\">support@mkcl.org</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <h3>USEFUL LINKS</h3>
                    <div class=\"useful-links\">
                        <ul>
                            <li>Sitemap</li>
                            <li>User Login</li>
                            <li>Help & Support</li>
                            <li>COntact US</li>
                            <li>Terms n Condition</li>
                            <li>Disclaimer</li>
                            <li>Return Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 106
    public function block_footer($context, array $blocks = array())
    {
        // line 107
        echo "    <section id=\"footer\">
        <div class=\"container\">
            <p>Created with <i class=\"fa fa-heart text-white\"></i> by Prajkt Yeole</p>
        </div>
    </section>
";
    }

    // line 114
    public function block_bottom($context, array $blocks = array())
    {
        // line 115
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 115,  286 => 114,  277 => 107,  274 => 106,  228 => 62,  225 => 61,  220 => 56,  214 => 57,  212 => 56,  208 => 54,  205 => 53,  200 => 47,  198 => 46,  195 => 45,  192 => 44,  186 => 49,  184 => 44,  179 => 42,  174 => 40,  170 => 38,  167 => 37,  163 => 30,  160 => 29,  157 => 28,  153 => 25,  150 => 24,  147 => 23,  144 => 22,  141 => 21,  138 => 20,  135 => 19,  132 => 18,  129 => 17,  126 => 16,  118 => 31,  116 => 28,  110 => 26,  108 => 16,  103 => 14,  99 => 13,  96 => 12,  94 => 11,  83 => 7,  80 => 6,  77 => 5,  71 => 117,  69 => 114,  66 => 113,  64 => 106,  61 => 105,  59 => 61,  56 => 60,  54 => 53,  51 => 52,  49 => 37,  44 => 35,  41 => 34,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/custom.css', 105) %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Roboto:300,400', 104) %}
        {% do assets.addCss('theme://plugins/linearicons/style.css', 103) %}
        {% do assets.addCss('theme://plugins/owl-carousel/owl.transitions.css', 102) %}
        {% do assets.addCss('theme://plugins/owl-carousel/owl.theme.css', 101) %}
        {% do assets.addCss('theme://plugins/owl-carousel/owl.carousel.css', 100) %}
        {% do assets.addCss('theme://plugins/font-awesome-4.6.1/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css', 98) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <i class=\"fa fa-rebel\"></i>
                {{ config.site.title }}
            </a>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footerTop %}
        <section id=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h3>ABOUT THE COMPANY</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod veniam eius, qui id et mollitia illum vero, quasi asperiores, unde dolores eligendi recusandae illo sunt totam harum iusto saepe laudantium.</p>
                    <div class=\"social\">
                        <a href=\"\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"\"><i class=\"fa fa-linkedin\"></i></a>
                        <a href=\"\"><i class=\"fa fa-youtube\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <h3>get in touch</h3>
                    <div class=\"contact-list\">
                        <ul>
                            <li class=\"address\">ICC Trade Tower, 'A' Wing, 5th Floor,
                                <br> Senapati Bapat Road, Shivajinagar,
                                <br> Pune 411 016, Maharashtra, India.</li>
                            <li class=\"mail\">+91 20 4011 4500 / 4501</li>
                            <li class=\"phone\">support@mkcl.org</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <h3>USEFUL LINKS</h3>
                    <div class=\"useful-links\">
                        <ul>
                            <li>Sitemap</li>
                            <li>User Login</li>
                            <li>Help & Support</li>
                            <li>COntact US</li>
                            <li>Terms n Condition</li>
                            <li>Disclaimer</li>
                            <li>Return Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

{% block footer %}
    <section id=\"footer\">
        <div class=\"container\">
            <p>Created with <i class=\"fa fa-heart text-white\"></i> by Prajkt Yeole</p>
        </div>
    </section>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
", "partials/base.html.twig", "C:\\xampp-7\\htdocs\\grav-project\\user\\themes\\cerium\\templates\\partials\\base.html.twig");
    }
}
