<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/inc/styles.htm */
class __TwigTemplate_47246ce52d41378fe4beac6f8f2ca26a9c91c673d72dec74fa6527e71ee8d627 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!-- core CSS -->
<link href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/bootstrap-5.0.2/dist/css/bootstrap.min.css", 1 => "assets/vendor/animate.css/animate.min.css", 2 => "assets/vendor/slick-1.8.1/slick/slick.css", 3 => "assets/vendor/slick-1.8.1/slick/slick-theme.css"]);
        // line 8
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-lightbox/dist/slick-lightbox.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/fontawesome/css/all.css", 1 => "assets/dist/css/app.css", 2 => "@framework.extras"]);
        // line 14
        echo "\" rel=\"stylesheet\">
";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "
<!--[if lt IE 9]>
<script src=\"assets/js/html5shiv.js\"></script>
<script src=\"assets/js/respond.min.js\"></script>
<![endif]--> 
      
<link rel=\"shortcut icon\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/favicon.ico");
        echo "\">";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/inc/styles.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  59 => 16,  56 => 15,  53 => 14,  51 => 10,  47 => 9,  44 => 8,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!-- core CSS -->
<link href=\"{{ [
    'assets/vendor/bootstrap-5.0.2/dist/css/bootstrap.min.css',
    'assets/vendor/animate.css/animate.min.css',
    'assets/vendor/slick-1.8.1/slick/slick.css',
    'assets/vendor/slick-1.8.1/slick/slick-theme.css',
]|theme }}\" rel=\"stylesheet\">
<link href=\"{{'assets/vendor/slick-lightbox/dist/slick-lightbox.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ [
  'assets/vendor/fontawesome/css/all.css',
  'assets/dist/css/app.css',
  '@framework.extras'
]|theme }}\" rel=\"stylesheet\">
{% styles %}

<!--[if lt IE 9]>
<script src=\"assets/js/html5shiv.js\"></script>
<script src=\"assets/js/respond.min.js\"></script>
<![endif]--> 
      
<link rel=\"shortcut icon\" href=\"{{ 'assets/images/ico/favicon.ico'|theme }}\">", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/inc/styles.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 15);
        static $filters = array("theme" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
