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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/main-view-work/similar.htm */
class __TwigTemplate_6220c8f5cac745cb47845a9e10209c6534b5a5e82080783342697c1498b5a4b3 extends \Twig\Template
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
        echo "<section id=\"works-section\" class=\"pt-lg-4 pt-2 pb-50 section-container bg-darker\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"float-start section-title text-left text-white wow fadeInDown\">Similar projects</h2>
            <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("work");
        echo "\" class=\"float-end\">View All Works</a>
        </div>

        <div class=\"row works-slider slick-slider\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "category", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "work", [], "any", false, false, true, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
                if (twig_get_attribute($this->env, $this->source, $context["work"], "status", [], "any", false, false, true, 10)) {
                    // line 11
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, true, 11) != twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "id", [], "any", false, false, true, 11))) {
                        // line 12
                        echo "                    <div class=\"col-4 work-item\">
                        <a href=\"";
                        // line 13
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("work-view", ["slug" => twig_get_attribute($this->env, $this->source, $context["work"], "slug", [], "any", false, false, true, 13)]);
                        echo "\">
                            <div class=\"work-holder\">
                                ";
                        // line 15
                        if (twig_get_attribute($this->env, $this->source, $context["work"], "work_cover", [], "any", false, false, true, 15)) {
                            // line 16
                            echo "                                    <div class=\"proj-prev-img\" style=\"background:url(";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["work"], "work_cover", [], "any", false, false, true, 16), "thumb", [0 => ($context["auto"] ?? null), 1 => 450], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                            echo ");\"></div>
                                ";
                        } else {
                            // line 18
                            echo "                                    <div class=\"proj-prev-img\" style=\"background:url(";
                            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/projects/no-cover.png");
                            echo ");\"></div>
                                ";
                        }
                        // line 20
                        echo "                                <div class=\"work-overlay\"><h6 class=\"overlay-text\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["work"], "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                        echo "</h6></div>
                            </div>
                        </a>
                    </div> 
                    ";
                    }
                    // line 25
                    echo "                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/main-view-work/similar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  103 => 26,  96 => 25,  87 => 20,  81 => 18,  75 => 16,  73 => 15,  68 => 13,  65 => 12,  62 => 11,  56 => 10,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"works-section\" class=\"pt-lg-4 pt-2 pb-50 section-container bg-darker\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"float-start section-title text-left text-white wow fadeInDown\">Similar projects</h2>
            <a href=\"{{ 'work'|page }}\" class=\"float-end\">View All Works</a>
        </div>

        <div class=\"row works-slider slick-slider\">
            {% for category in project.category  %}
                {% for work in category.work if work.status %}
                    {% if work.id  != project.id %}
                    <div class=\"col-4 work-item\">
                        <a href=\"{{ 'work-view'|page({ slug: work.slug }) }}\">
                            <div class=\"work-holder\">
                                {% if work.work_cover %}
                                    <div class=\"proj-prev-img\" style=\"background:url({{ work.work_cover.thumb(auto,450) }});\"></div>
                                {% else %}
                                    <div class=\"proj-prev-img\" style=\"background:url({{ 'assets/images/projects/no-cover.png'|theme }});\"></div>
                                {% endif %}
                                <div class=\"work-overlay\"><h6 class=\"overlay-text\">{{ work.title }}</h6></div>
                            </div>
                        </a>
                    </div> 
                    {% endif %}
                {% endfor %}
            {% endfor %}
        </div>
    </div>
</section>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/main-view-work/similar.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "if" => 11);
        static $filters = array("page" => 5, "escape" => 16, "theme" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['page', 'escape', 'theme'],
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
