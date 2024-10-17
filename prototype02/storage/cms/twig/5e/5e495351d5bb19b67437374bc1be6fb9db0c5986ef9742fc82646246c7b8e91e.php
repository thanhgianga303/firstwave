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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/home/about.htm */
class __TwigTemplate_56ebf4370e5d4be1129d703819148ebf759927db34a981e456b6ded25f263df1 extends \Twig\Template
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
        echo "<section id=\"about\" class=\"section-container bg-image-crowd\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6 wow fadeInLeft py-3 py-lg-5\">
                ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/caption"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "            </div>
            <div class=\"col-lg-6 wow fadeInRight py-3 py-lg-5\">
                ";
        // line 8
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/capabilities"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 9
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  53 => 8,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about\" class=\"section-container bg-image-crowd\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-6 wow fadeInLeft py-3 py-lg-5\">
                {% content \"about/caption\" %}
            </div>
            <div class=\"col-lg-6 wow fadeInRight py-3 py-lg-5\">
                {% content \"about/capabilities\" %}
            </div>
        </div>
    </div>
</section>", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/about.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 5);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
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
