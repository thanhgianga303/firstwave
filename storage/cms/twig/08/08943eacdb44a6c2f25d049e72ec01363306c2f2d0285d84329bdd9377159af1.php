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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/inc/fw-menu.htm */
class __TwigTemplate_462877fb09337fb9808908b59a6ef4863dc2a6b2c941b392aeffe0d08efdaad1 extends \Twig\Template
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
        // line 2
        echo "<div class=\"modal\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgets/modal-cards"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "      </div>
    </div>
    <div class=\"menu-footer\">
        <p class=\"text-center\">© 2021 First Wave Pte Ltd.</p>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/inc/fw-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  45 => 6,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"modal\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        {% partial \"widgets/modal-cards\" %}
      </div>
    </div>
    <div class=\"menu-footer\">
        <p class=\"text-center\">© 2021 First Wave Pte Ltd.</p>
    </div>
  </div>
</div>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/inc/fw-menu.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 6);
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
