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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/home/banner.htm */
class __TwigTemplate_56d3ffc2fa36664db56f48867e7319e6a60c3f0cc523ae8faf8bc68f6d2df28f extends \Twig\Template
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
        echo "<section id=\"banner\" class=\"bg-image-gradient banner\">
    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1 class=\"h2 mt-2 wow fadeInUp\" data-wow-delay=\"0.5s\">Designing <br/> Experiences</h1>
            <p class=\"lead wow fadeInUp\" data-wow-delay=\"0.6s\">A new world of virtual and hybrid events.</p>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/banner.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"banner\" class=\"bg-image-gradient banner\">
    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1 class=\"h2 mt-2 wow fadeInUp\" data-wow-delay=\"0.5s\">Designing <br/> Experiences</h1>
            <p class=\"lead wow fadeInUp\" data-wow-delay=\"0.6s\">A new world of virtual and hybrid events.</p>
        </div>
    </div>
</section>", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/banner.htm", "");
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
