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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/inc/scripts.htm */
class __TwigTemplate_144bc1bfab4806474f798452da94dfa069a02fb9af68a4c599b8bf6ff48768b5 extends \Twig\Template
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
        // line 1
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/dist/jquery.js", 1 => "assets/vendor/jquery-migrate/jquery-migrate-1.2.1.min.js", 2 => "assets/vendor/bootstrap-5.0.1/js/bootstrap.bundle.min.js", 3 => "assets/vendor/slick-1.8.1/slick/slick.min.js", 4 => "assets/vendor/slick-lightbox/dist/slick-lightbox.min.js", 5 => "assets/vendor/counterup/jquery.waypoints.min.js", 6 => "assets/vendor/counterup/jquery.counterup.min.js", 7 => "assets/vendor/wow/dist/wow.min.js", 8 => "assets/js/main.js", 9 => "@framework", 10 => "@framework.extras"]);
        // line 13
        echo "\"></script> 

";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/inc/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  42 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ [
    'assets/vendor/jquery/dist/jquery.js',
    'assets/vendor/jquery-migrate/jquery-migrate-1.2.1.min.js',
    'assets/vendor/bootstrap-5.0.1/js/bootstrap.bundle.min.js',
    'assets/vendor/slick-1.8.1/slick/slick.min.js',
    'assets/vendor/slick-lightbox/dist/slick-lightbox.min.js',
    'assets/vendor/counterup/jquery.waypoints.min.js',
    'assets/vendor/counterup/jquery.counterup.min.js',
    'assets/vendor/wow/dist/wow.min.js',
    'assets/js/main.js',
    '@framework',
    '@framework.extras'
]|theme }}\"></script> 

{% scripts %}", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/inc/scripts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("scripts" => 15);
        static $filters = array("theme" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['scripts'],
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
