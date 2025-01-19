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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/pages/firstwave/home.htm */
class __TwigTemplate_d558cffed836ec6e29e1169cfc1cda850e4da64950c8c5698bd383c760c8d5ca extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['this_page'] = "firstwave"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("inc/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"main\" id=\"main\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "components", [], "any", false, false, true, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 4
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component'] = $context["component"]            ;
            $context['__cms_partial_params']['fade_type'] = ($context["fade_type"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component"], "r_component_type", [], "any", false, false, true, 4), "partial", [], "any", false, false, true, 4)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/pages/firstwave/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 6,  58 => 5,  51 => 4,  47 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"inc/nav\" this_page='firstwave'%}
<div class=\"main\" id=\"main\">
    {% for component in page.components %}
        {% partial component.r_component_type.partial component=component fade_type=fade_type %}
    {% endfor %}
</div>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/pages/firstwave/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "for" => 3);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'for'],
                [],
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
