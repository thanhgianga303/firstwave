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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/main-view-work/info.htm */
class __TwigTemplate_e54ea7b9a4dfb01b804ef362c94af7c729050d989ae6d5c6f4af1d952ca3bb63 extends \Twig\Template
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
        echo "<section id=\"work-info\" class=\"bg-darker\">
    <div class=\"container\">
        <div class=\"row\">
        ";
        // line 4
        if ( !twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "client", [], "any", false, false, true, 4)) {
            // line 5
            echo "        <div class=\"col-lg-12 wow fadeInRight pt-50 pb-50\">
           <div class=\"info-desc\">";
            // line 6
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "description", [], "any", false, false, true, 6), 6, $this->source);
            echo "</div>
        </div>
        ";
        } else {
            // line 9
            echo "        <div class=\"col-lg-5 wow fadeInLeft py-3 py-lg-5\">
            <div class=\"divider\">
                <h3 class=\"text-white\">Client</h3>
                <p class=\"info-sub\">";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "client", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</p>
            </div>
            <div class=\"divider\">
                <h3 class=\"text-white\">Event</h3>
                <div class=\"info-sub\"> ";
            // line 16
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "event", [], "any", false, false, true, 16), 16, $this->source);
            echo " </div>
            </div>
        </div>

        <div class=\"col-lg-7 wow fadeInRight py-3 py-lg-5\">
             <h3 class=\"text-white\">Deliverables</h3>
            <div class=\"info-desc\">";
            // line 22
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "description", [], "any", false, false, true, 22), 22, $this->source);
            echo "</div>
        </div>

        ";
        }
        // line 26
        echo "        </div>
    </div>
</section>

";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "work_gallery", [], "any", false, false, true, 30), "count", [], "any", false, false, true, 30) > 0)) {
            // line 31
            echo "
<section id=\"work-gallery-box\" class=\"bg-darker\">
    <div class=\"container\">
        <div class=\"row work-gallery\" id=\"work-gallery\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "work_gallery", [], "any", false, false, true, 35));
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 36
                echo "            <div class=\"col-lg-4 gallery-item wow fadeInLeft\">
                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => ($context["auto"] ?? null), 1 => 550], "method", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\"  data-caption=\"";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "work_gallery", [], "any", false, false, true, 37), "count", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\" target=\"_blank\" class=\"thumbnail\">
                    <div class=\"gallery-thumb-image\"  style=\"background:url(";
                // line 38
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => ($context["auto"] ?? null), 1 => 450], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                echo ");\"></div>
                </a>
                <div class=\"image-counter\"> ";
                // line 40
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "work_gallery", [], "any", false, false, true, 40), "count", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo " </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/main-view-work/info.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  117 => 40,  112 => 38,  104 => 37,  101 => 36,  97 => 35,  91 => 31,  89 => 30,  83 => 26,  76 => 22,  67 => 16,  60 => 12,  55 => 9,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"work-info\" class=\"bg-darker\">
    <div class=\"container\">
        <div class=\"row\">
        {% if not project.client %}
        <div class=\"col-lg-12 wow fadeInRight pt-50 pb-50\">
           <div class=\"info-desc\">{{ project.description|raw }}</div>
        </div>
        {% else %}
        <div class=\"col-lg-5 wow fadeInLeft py-3 py-lg-5\">
            <div class=\"divider\">
                <h3 class=\"text-white\">Client</h3>
                <p class=\"info-sub\">{{ project.client }}</p>
            </div>
            <div class=\"divider\">
                <h3 class=\"text-white\">Event</h3>
                <div class=\"info-sub\"> {{ project.event|raw }} </div>
            </div>
        </div>

        <div class=\"col-lg-7 wow fadeInRight py-3 py-lg-5\">
             <h3 class=\"text-white\">Deliverables</h3>
            <div class=\"info-desc\">{{ project.description|raw }}</div>
        </div>

        {% endif %}
        </div>
    </div>
</section>

{% if project.work_gallery.count > 0 %}

<section id=\"work-gallery-box\" class=\"bg-darker\">
    <div class=\"container\">
        <div class=\"row work-gallery\" id=\"work-gallery\">
            {% for key, image in project.work_gallery %}
            <div class=\"col-lg-4 gallery-item wow fadeInLeft\">
                <a href=\"{{ image.thumb(auto,550) }}\"  data-caption=\"{{ key+1 }} / {{ project.work_gallery.count }}\" target=\"_blank\" class=\"thumbnail\">
                    <div class=\"gallery-thumb-image\"  style=\"background:url({{ image.thumb(auto,450) }});\"></div>
                </a>
                <div class=\"image-counter\"> {{ key+1 }} / {{ project.work_gallery.count }} </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endif %}", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/main-view-work/info.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "for" => 35);
        static $filters = array("raw" => 6, "escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['raw', 'escape'],
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
