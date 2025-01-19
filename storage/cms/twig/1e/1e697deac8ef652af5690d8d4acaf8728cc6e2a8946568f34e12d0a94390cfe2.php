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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/about/component_item/caption.htm */
class __TwigTemplate_71c7ba6c61af6ac59905d4fa60214af04a1b374dc544b434683698c45a82e1ec extends \Twig\Template
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
        echo "<div class=\"col-lg-6 wow fadeInLeft py-3 py-lg-5\">
    <h1 class=\"h2 caption text-white\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFilter('md_safe')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 3, $this->source)]);
        echo "
    </h1>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/about/component_item/caption.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-6 wow fadeInLeft py-3 py-lg-5\">
    <h1 class=\"h2 caption text-white\">
        {{ description|md_safe }}
    </h1>
</div>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/about/component_item/caption.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("md_safe" => 3);
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
