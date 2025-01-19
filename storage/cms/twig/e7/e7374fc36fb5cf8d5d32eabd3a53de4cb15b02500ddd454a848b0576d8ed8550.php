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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/key_stats/component.htm */
class __TwigTemplate_04034cdbd6ae593fb32fd27b5c11f2fe0fbed2eeac56ce039df62be26d7b017f extends \Twig\Template
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
        echo "<section id=\"services\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"section-header wow\" data-wow-delay=\"0.6s\">
            <h2 class=\"section-title text-left text-white\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "name", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"row features\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 8
            echo "                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            $context['__cms_partial_params']['fade_type'] = ($context["fade_type"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 8), "partial", [], "any", false, false, true, 8)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 9
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/key_stats/component.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  61 => 9,  54 => 8,  50 => 7,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"services\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"section-header wow\" data-wow-delay=\"0.6s\">
            <h2 class=\"section-title text-left text-white\">{{ component.name }}</h2>
        </div>
        <div class=\"row features\">
            {% for component_item in component.component_items %}
                {% partial component_item.r_component_item_type.partial component_item=component_item fade_type=fade_type %}
            {% endfor %}
        </div>
    </div>
</section>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/key_stats/component.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7, "partial" => 8);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['escape'],
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
