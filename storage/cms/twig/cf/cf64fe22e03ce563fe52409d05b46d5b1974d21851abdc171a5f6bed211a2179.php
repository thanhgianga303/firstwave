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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/clients/component_item/component_item.htm */
class __TwigTemplate_f13ef1a0716302ff733661ff90b9681848dfdef3eb54f5f507abcf3c0564ad3f extends \Twig\Template
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
        echo "<div class=\"col-4 col-lg-4 wow fadeInLeft\">
    <div class=\"partners-holder\">
        ";
        // line 3
        $context["url"] = ("assets/images/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["component_item"] ?? null), "image", [], "any", false, false, true, 3), 3, $this->source));
        // line 4
        echo "        <img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter($this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 4, $this->source));
        echo "\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/clients/component_item/component_item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-4 col-lg-4 wow fadeInLeft\">
    <div class=\"partners-holder\">
        {% set url = 'assets/images/' ~ component_item.image %}
        <img src=\"{{ url|theme }}\">
    </div>
</div>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/clients/component_item/component_item.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3);
        static $filters = array("theme" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
