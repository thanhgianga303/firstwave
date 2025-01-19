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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/about/component.htm */
class __TwigTemplate_ac91275d086a2ac2f557344007318f5c77f9a8768a8f21dab247c5fc8278985e extends \Twig\Template
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
        echo "<section id=\"about\" class=\"main bg-image-crowd\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 5
            echo "                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['description'] = twig_get_attribute($this->env, $this->source, $context["component_item"], "description", [], "any", false, false, true, 5)            ;
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
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/about/component.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  54 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about\" class=\"main bg-image-crowd\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            {% for component_item in component.component_items %}
                {% partial component_item.r_component_item_type.partial description=component_item.description %}
            {% endfor %}
        </div>
    </div>
</section>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/about/component.htm", "");
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
