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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/work/conference.htm */
class __TwigTemplate_fea18167c6c50e15e3766422b12684d8803ccee62f91b6d9ce1fea2106d2b55a extends \Twig\Template
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
        echo "<section id=\"works-section\" class=\"pt-lg-4 pt-2 pb-2 section-container bg-darker\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"section-title text-left text-white wow fadeInDown\">Conferences & Corporate Events</h2>
        </div>
        <div class=\"row works-slider slick-slider\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, true, 7) == "4")) {
                // line 8
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "work", [], "any", false, false, true, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["work"], "status", [], "any", false, false, true, 8)) {
                        // line 9
                        echo "                    <div class=\"col-4 work-item\">
                        <a href=\"";
                        // line 10
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("work-view", ["slug" => twig_get_attribute($this->env, $this->source, $context["work"], "slug", [], "any", false, false, true, 10)]);
                        echo "\">
                            <div class=\"work-holder\">
                                ";
                        // line 12
                        if (twig_get_attribute($this->env, $this->source, $context["work"], "work_cover", [], "any", false, false, true, 12)) {
                            // line 13
                            echo "                                    <div class=\"proj-prev-img\" style=\"background:url(";
                            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/projects/monopoly-fw.png");
                            echo ");\"></div>
                                ";
                        } else {
                            // line 15
                            echo "                                    <div class=\"proj-prev-img\" style=\"background:url(";
                            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/projects/no-cover.png");
                            echo ");\"></div>
                                ";
                        }
                        // line 17
                        echo "                                <div class=\"work-overlay\"><h6 class=\"overlay-text\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["work"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                        echo "</h6></div>
                            </div>
                        </a>
                    </div>                    
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/work/conference.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  93 => 22,  80 => 17,  74 => 15,  68 => 13,  66 => 12,  61 => 10,  58 => 9,  52 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"works-section\" class=\"pt-lg-4 pt-2 pb-2 section-container bg-darker\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"section-title text-left text-white wow fadeInDown\">Conferences & Corporate Events</h2>
        </div>
        <div class=\"row works-slider slick-slider\">
            {% for category in categories if category.id == '4'%}
                {% for work in category.work if work.status %}
                    <div class=\"col-4 work-item\">
                        <a href=\"{{ 'work-view'|page({ slug: work.slug }) }}\">
                            <div class=\"work-holder\">
                                {% if work.work_cover %}
                                    <div class=\"proj-prev-img\" style=\"background:url({{ 'assets/images/projects/monopoly-fw.png'|theme }});\"></div>
                                {% else %}
                                    <div class=\"proj-prev-img\" style=\"background:url({{ 'assets/images/projects/no-cover.png'|theme }});\"></div>
                                {% endif %}
                                <div class=\"work-overlay\"><h6 class=\"overlay-text\">{{ work.title }}</h6></div>
                            </div>
                        </a>
                    </div>                    
                {% endfor %}
            {% endfor %}
        </div>
    </div>
</section>", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/work/conference.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7, "if" => 12);
        static $filters = array("page" => 10, "theme" => 13, "escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['page', 'theme', 'escape'],
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
