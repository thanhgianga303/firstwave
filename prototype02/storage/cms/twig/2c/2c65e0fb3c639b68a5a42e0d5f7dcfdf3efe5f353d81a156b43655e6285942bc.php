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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/home/contact.htm */
class __TwigTemplate_42908e2f252abb1044f71aaa8f3dc9b1673d9d6c6ec8df96fba971faa37885f8 extends \Twig\Template
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
        echo "<section id=\"get-in-touch\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-5 wow fadeInLeft\">
                <h1 class=\"h2 lets-connect mb-5 mb-lg-0\">Let’s <br/>Connect</h1>
            </div>
            <div class=\"col-lg-7 wow fadeInLeft\">
                ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"get-in-touch\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-5 wow fadeInLeft\">
                <h1 class=\"h2 lets-connect mb-5 mb-lg-0\">Let’s <br/>Connect</h1>
            </div>
            <div class=\"col-lg-7 wow fadeInLeft\">
                {% component 'contactform' %}
            </div>
        </div>
    </div>
</section>", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 8);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
