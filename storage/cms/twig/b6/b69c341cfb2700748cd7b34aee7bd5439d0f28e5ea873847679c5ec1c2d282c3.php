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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/widgets/modal-cards.htm */
class __TwigTemplate_961a1dafdd0a5c919551621b37c66771e263f65e175c232591e990efc2fa77de extends \Twig\Template
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
        echo "<div class=\"card-group\">
    <div class=\"card\">
        <a class=\"card-url\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("firstwave/home");
        echo "\">First Wave</a>
        <div class=\"menu-img-holder p-2 fw-tab1\">
            <div class=\"menu-img text-center\">
                <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fw-logo-svg.svg");
        echo "\" alt=\"First Wave Agency\">
            </div>
            <div class=\"menu-title text-center py-2\">
                <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/firstwave-m.svg");
        echo "\"  alt=\"First Wave Agency\">
            </div>
        </div>
    </div>

    <div class=\"card\">
        <a class=\"card-url\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("x/home");
        echo "\">First Wave X</a>
        <div class=\"menu-img-holder p-2 fw-tab2\">
            <div class=\"menu-img text-center\">
                <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fw-x-svg.svg");
        echo "\" alt=\"First Wave X\">
            </div>
            <div class=\"menu-title text-center py-2\">
                <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/firstwave-x.svg");
        echo "\"  alt=\"First Wave X\">
            </div>
        </div>
    </div>

    <!-- <div class=\"card\">
        <a class=\"card-url\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ventures/home");
        echo "\">First Wave Ventures</a>
        <div class=\"menu-img-holder p-2 fw-tab3\">
            <div class=\"menu-img text-center\">
                <img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fw-v-svg.svg");
        echo "\" alt=\"First Wave Ventures\">
            </div>
            <div class=\"menu-title text-center py-2\">
                <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/firstwave-ventures.svg");
        echo "\" alt=\"First Wave Ventures\">
            </div>
        </div>
    </div> -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/widgets/modal-cards.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  91 => 31,  85 => 28,  76 => 22,  70 => 19,  64 => 16,  55 => 10,  49 => 7,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"card-group\">
    <div class=\"card\">
        <a class=\"card-url\" href=\"{{ 'firstwave/home'|page }}\">First Wave</a>
        <div class=\"menu-img-holder p-2 fw-tab1\">
            <div class=\"menu-img text-center\">
                <img src=\"{{ 'assets/images/fw-logo-svg.svg'|theme }}\" alt=\"First Wave Agency\">
            </div>
            <div class=\"menu-title text-center py-2\">
                <img src=\"{{ 'assets/images/firstwave-m.svg'|theme }}\"  alt=\"First Wave Agency\">
            </div>
        </div>
    </div>

    <div class=\"card\">
        <a class=\"card-url\" href=\"{{ 'x/home'|page }}\">First Wave X</a>
        <div class=\"menu-img-holder p-2 fw-tab2\">
            <div class=\"menu-img text-center\">
                <img src=\"{{ 'assets/images/fw-x-svg.svg'|theme }}\" alt=\"First Wave X\">
            </div>
            <div class=\"menu-title text-center py-2\">
                <img src=\"{{ 'assets/images/firstwave-x.svg'|theme }}\"  alt=\"First Wave X\">
            </div>
        </div>
    </div>

    <!-- <div class=\"card\">
        <a class=\"card-url\" href=\"{{ 'ventures/home'|page }}\">First Wave Ventures</a>
        <div class=\"menu-img-holder p-2 fw-tab3\">
            <div class=\"menu-img text-center\">
                <img src=\"{{ 'assets/images/fw-v-svg.svg'|theme }}\" alt=\"First Wave Ventures\">
            </div>
            <div class=\"menu-title text-center py-2\">
                <img src=\"{{ 'assets/images/firstwave-ventures.svg'|theme }}\" alt=\"First Wave Ventures\">
            </div>
        </div>
    </div> -->
</div>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/widgets/modal-cards.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 4, "theme" => 7);
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
