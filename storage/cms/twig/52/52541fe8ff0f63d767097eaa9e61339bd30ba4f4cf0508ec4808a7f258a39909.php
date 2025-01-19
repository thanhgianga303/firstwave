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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/pages/firstwave/view-work.htm */
class __TwigTemplate_6768c5363b40c93f363c8cf4c17fc01ea69952d6e49d8af2a678a85095017023 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['this_page'] = "firstwave"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("inc/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"main\" id=\"main\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("main-view-work/banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("main-view-work/info"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("main-view-work/similar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/pages/firstwave/view-work.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 7,  61 => 6,  56 => 5,  51 => 4,  47 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"inc/nav\" this_page='firstwave'%}
<div class=\"main\" id=\"main\">
    {% partial \"main-view-work/banner\" %}
    {% partial \"main-view-work/info\" %}
    {% partial \"main-view-work/similar\" %}
    {% partial \"widgets/contact\" %}
</div>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/pages/firstwave/view-work.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
