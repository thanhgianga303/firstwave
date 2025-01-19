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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/banner/component_item/item1.htm */
class __TwigTemplate_ddc74e928791c266980b436fa4639b2ee333ae86d04b55ccea106404f6d5421f extends \Twig\Template
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
        echo "<h1 class=\"h2 mt-2 wow ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["fade_type"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["component_item"] ?? null), "fade", [], "any", false, false, true, 1)] ?? null) : null), 1, $this->source), "html", null, true);
        echo "\" data-wow-delay=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["component_item"] ?? null), "delay", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('md_safe')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["component_item"] ?? null), "description", [], "any", false, false, true, 1), 1, $this->source)]);
        echo "</h1>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/banner/component_item/item1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1 class=\"h2 mt-2 wow {{fade_type[component_item.fade]}}\" data-wow-delay=\"{{ component_item.delay }}\">{{component_item.description|md_safe}}</h1>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/banner/component_item/item1.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "md_safe" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'md_safe'],
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
