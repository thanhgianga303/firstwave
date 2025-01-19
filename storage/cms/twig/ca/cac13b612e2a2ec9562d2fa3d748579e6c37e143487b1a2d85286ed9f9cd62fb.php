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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/key_stats/component_item/item.htm */
class __TwigTemplate_f4511ddce0495b09c3dbc5eed93798ccecb747cb38b47163a4cf3e5a97df1768 extends \Twig\Template
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
        echo "<div class=\"col-lg-3 col-md-6 col-sm-6 wow ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["fade_type"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["component_item"] ?? null), "fade", [], "any", false, false, true, 1)] ?? null) : null), 1, $this->source), "html", null, true);
        echo "\" data-wow-delay=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["component_item"] ?? null), "delay", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "\">
    <div class=\"media service-box\">
        <div class=\"media-body\">
            <div class=\"hex-icon coat\">
                <div class=\"hex-icon hex-inner\">
                     <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["component_item"] ?? null), "image", [], "any", false, false, true, 6), 6, $this->source));
        echo "\" class=\"hex-symbol\" height=\"55px\" alt=\"14 year of Experience\">
                </div>
            </div>
            <h4 class=\"media-heading text-white\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('md_safe')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["component_item"] ?? null), "description", [], "any", false, false, true, 9), 9, $this->source)]);
        echo "</h4>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/key_stats/component_item/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  50 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-3 col-md-6 col-sm-6 wow {{fade_type[component_item.fade]}}\" data-wow-delay=\"{{ component_item.delay }}\">
    <div class=\"media service-box\">
        <div class=\"media-body\">
            <div class=\"hex-icon coat\">
                <div class=\"hex-icon hex-inner\">
                     <img src=\"{{ component_item.image|theme }}\" class=\"hex-symbol\" height=\"55px\" alt=\"14 year of Experience\">
                </div>
            </div>
            <h4 class=\"media-heading text-white\">{{ component_item.description|md_safe }}</h4>
        </div>
    </div>
</div>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/key_stats/component_item/item.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "theme" => 6, "md_safe" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'theme', 'md_safe'],
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
