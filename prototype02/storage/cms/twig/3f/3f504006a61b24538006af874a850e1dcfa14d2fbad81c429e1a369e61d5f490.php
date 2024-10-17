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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/inc/nav.htm */
class __TwigTemplate_46bd84bbdf11d6a4029778e3a11c05604ab9dcfbd3fe4891462b8af5f4f4f6c4 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg fixed-top\" id=\"navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand py-3\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/firstwave-logo-white.svg");
        echo "\" height=\"50px\" alt=\"logo\">
        </a>

        <button class=\"navbar-toggler\" id=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
            <div class=\"icon-bar\"></div>
            <div class=\"icon-bar\"></div>
            <div class=\"icon-bar\"></div>
        </button>

        <div class=\"navbar-collapse collapse\" id=\"navbar-menu\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item scroll\">
                    <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("work");
        echo "\" class=\"nav-link\">Work</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"#get-in-touch\" class=\"nav-link\">Connect</a>
                </li>   
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/inc/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  62 => 16,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg fixed-top\" id=\"navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand py-3\" href=\"{{ 'home'|page }}\">
            <img src=\"{{ 'assets/images/firstwave-logo-white.svg'|theme }}\" height=\"50px\" alt=\"logo\">
        </a>

        <button class=\"navbar-toggler\" id=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
            <div class=\"icon-bar\"></div>
            <div class=\"icon-bar\"></div>
            <div class=\"icon-bar\"></div>
        </button>

        <div class=\"navbar-collapse collapse\" id=\"navbar-menu\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item scroll\">
                    <a href=\"{{ 'home'|page }}\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"{{ 'work'|page }}\" class=\"nav-link\">Work</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"#get-in-touch\" class=\"nav-link\">Connect</a>
                </li>   
            </ul>
        </div>
    </div>
</nav>", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/inc/nav.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 3, "theme" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
