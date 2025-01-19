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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/clients/component.htm */
class __TwigTemplate_33dcf6fd4cc30ba6a4fce12709819729e968768223b8cbb008c7613497d3ebbd extends \Twig\Template
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
        echo "<section id=\"partners\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"section-title text-left text-white wow fadeInDown\">Social Proof</h2>
        </div>
        <div class=\"partners-carousel\"> 
            <div class=\"carousel-partners-item\">
                <div class=\"row partners-box\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 10
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 10), "partial", [], "any", false, false, true, 10)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 15
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 15), "partial", [], "any", false, false, true, 15)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 16
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 20
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 20), "partial", [], "any", false, false, true, 20)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 21
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 25
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 25), "partial", [], "any", false, false, true, 25)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </div>            
            </div>
            <div class=\"carousel-partners-item\">
                <div class=\"row partners-box\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 32
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 32), "partial", [], "any", false, false, true, 32)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 33
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 37
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 37), "partial", [], "any", false, false, true, 37)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 38
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 42
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 42), "partial", [], "any", false, false, true, 42)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 43
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 47
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 47), "partial", [], "any", false, false, true, 47)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 48
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </div>            
            </div>
            <div class=\"carousel-partners-item\">
                <div class=\"row partners-box\">
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 54
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 54), "partial", [], "any", false, false, true, 54)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 55
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 59
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 59), "partial", [], "any", false, false, true, 59)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 60
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 64
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 64), "partial", [], "any", false, false, true, 64)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 65
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 69
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 69), "partial", [], "any", false, false, true, 69)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 70
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </div>            
            </div>
            <div class=\"carousel-partners-item\">
                <div class=\"row partners-box\">
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 76
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 76), "partial", [], "any", false, false, true, 76)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 77
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 81
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 81), "partial", [], "any", false, false, true, 81)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 82
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 86
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 86), "partial", [], "any", false, false, true, 86)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 87
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </div>             
                <div class=\"row partners-box\">
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["component"] ?? null), "component_items", [], "any", false, false, true, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["component_item"]) {
            // line 91
            echo "                        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['component_item'] = $context["component_item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["component_item"], "r_component_item_type", [], "any", false, false, true, 91), "partial", [], "any", false, false, true, 91)            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 92
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </div>            
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/clients/component.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 93,  365 => 92,  359 => 91,  355 => 90,  351 => 88,  345 => 87,  339 => 86,  335 => 85,  331 => 83,  325 => 82,  319 => 81,  315 => 80,  311 => 78,  305 => 77,  299 => 76,  295 => 75,  289 => 71,  283 => 70,  277 => 69,  273 => 68,  269 => 66,  263 => 65,  257 => 64,  253 => 63,  249 => 61,  243 => 60,  237 => 59,  233 => 58,  229 => 56,  223 => 55,  217 => 54,  213 => 53,  207 => 49,  201 => 48,  195 => 47,  191 => 46,  187 => 44,  181 => 43,  175 => 42,  171 => 41,  167 => 39,  161 => 38,  155 => 37,  151 => 36,  147 => 34,  141 => 33,  135 => 32,  131 => 31,  125 => 27,  119 => 26,  113 => 25,  109 => 24,  105 => 22,  99 => 21,  93 => 20,  89 => 19,  85 => 17,  79 => 16,  73 => 15,  69 => 14,  65 => 12,  59 => 11,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"partners\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"section-title text-left text-white wow fadeInDown\">Social Proof</h2>
        </div>
        <div class=\"partners-carousel\"> 
            <div class=\"carousel-partners-item\">
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>            
            </div>
            <div class=\"carousel-partners-item\">
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>            
            </div>
            <div class=\"carousel-partners-item\">
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>            
            </div>
            <div class=\"carousel-partners-item\">
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>             
                <div class=\"row partners-box\">
                    {% for component_item in component.component_items %}
                        {% partial component_item.r_component_item_type.partial component_item=component_item%}
                    {% endfor %}
                </div>            
            </div>
        </div>
    </div>
</section>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/clients/component.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "partial" => 10);
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
