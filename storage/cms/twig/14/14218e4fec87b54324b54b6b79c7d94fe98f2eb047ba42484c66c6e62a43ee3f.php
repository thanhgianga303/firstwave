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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/about/component_item/capabilities.htm */
class __TwigTemplate_48668536f2bd6fb9dcb0dfa0e4ee576395791651c6346b09f2a561ae65c1a79f extends \Twig\Template
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
        echo "<div class=\"col-lg-6 wow fadeInRight py-3 py-lg-5\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFilter('md_safe')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 2, $this->source)]);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/about/component_item/capabilities.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-6 wow fadeInRight py-3 py-lg-5\">
    {{ description|md_safe }}
</div>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/about/component_item/capabilities.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("md_safe" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['md_safe'],
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
