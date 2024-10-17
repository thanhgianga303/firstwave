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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/home/our-reach.htm */
class __TwigTemplate_fe069e86e336891080c7b9a1a38c698d9b31a6b5a4767b7284f3b09cf6aab5fc extends \Twig\Template
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
        echo "<section id=\"our-reach\" class=\"section-container bg-image-backout-2\">
    <div class=\"container\">
        <div class=\"section-header wow fadeInDown\" data-wow-delay=\"0.6s\">
            <h2 class=\"section-title text-left text-white wow fadeInDown\">Our Reach</h2>
        </div>
        <div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mt-2 mb-0\"><span class=\"counter-stat font-weight-bold\">80</span>+</h3>
\t\t\t\t\t<p class=\"text-lead\">Campanies & Brands</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mt-2 mb-0\"><span class=\"counter-stat font-weight-bold\">90</span>% </h3>
\t\t\t\t\t<p class=\"text-lead\">Client Retention</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mt-2 mb-0\"><span class=\"counter-stat font-weight-bold\">400</span>+</h3>
\t\t\t\t\t<p class=\"text-lead\">Event & Production </p>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/our-reach.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"our-reach\" class=\"section-container bg-image-backout-2\">
    <div class=\"container\">
        <div class=\"section-header wow fadeInDown\" data-wow-delay=\"0.6s\">
            <h2 class=\"section-title text-left text-white wow fadeInDown\">Our Reach</h2>
        </div>
        <div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mt-2 mb-0\"><span class=\"counter-stat font-weight-bold\">80</span>+</h3>
\t\t\t\t\t<p class=\"text-lead\">Campanies & Brands</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mt-2 mb-0\"><span class=\"counter-stat font-weight-bold\">90</span>% </h3>
\t\t\t\t\t<p class=\"text-lead\">Client Retention</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mt-2 mb-0\"><span class=\"counter-stat font-weight-bold\">400</span>+</h3>
\t\t\t\t\t<p class=\"text-lead\">Event & Production </p>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </div>
</section>", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/our-reach.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
