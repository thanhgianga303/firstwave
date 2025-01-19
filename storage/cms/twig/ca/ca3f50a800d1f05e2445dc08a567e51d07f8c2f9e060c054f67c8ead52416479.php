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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/banner/component.htm */
class __TwigTemplate_78a378d85f32b75c8ebba1861f5fc4ee9e63ffb5e836cc503b27436a807eb08c extends \Twig\Template
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
        echo "<section id=\"banner\" class=\"bg-image-gradient\">
    <div class=\"container\">
        <div class=\"jumbotron main-banner\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 5
            echo "                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            $context['__cms_partial_params']['fade_type'] = ($context["fade_type"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 5), "partial", [], "any", false, false, true, 5)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/banner/component.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"banner\" class=\"bg-image-gradient\">
    <div class=\"container\">
        <div class=\"jumbotron main-banner\">
            {% for component_item in component.component_items %}
                {% partial component_item.r_component_item_type.partial component_item=component_item fade_type=fade_type %}
            {% endfor %}
        </div>
    </div>
</section>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/banner/component.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "partial" => 5);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
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
