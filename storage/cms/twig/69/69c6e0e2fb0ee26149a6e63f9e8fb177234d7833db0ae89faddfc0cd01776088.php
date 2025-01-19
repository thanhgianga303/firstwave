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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/inc/footer.htm */
class __TwigTemplate_62c5970706ef4dc90416157325879a88fe97f53683ea3c5f8ab4d5ad1eaed61f extends \Twig\Template
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
        echo "<footer id=\"footer\" class=\"";
        echo (((($context["this_page"] ?? null) == "ventures")) ? ("bg-v-dark") : ("bg-dark"));
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <ul class=\"social-icons\">
                    <li>
                        <a href=\"https://www.facebook.com/First-Wave-Agency-Singapore-100137285054193/\">
                        <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/fb-icon-white.svg");
        echo "\" alt=\"Facebook\">
                        </a>
                    </li>
                    <li class=\"soc-divider\">
                        <span>&#47;</span>
                    </li>
                    <li>
                        <a href=\"https://www.instagram.com/firstwave.sg/\">
                            <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/ig-logo-white.svg");
        echo "\" alt=\"Instagram\">
                        </a>
                    </li>
                    <li class=\"soc-divider\">
                        <span>&#47;</span>
                    </li>
                    <li>
                        <a href=\"https://www.linkedin.com/company/first-wave-agency/\">
                            <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/linkedin-icon-white.svg");
        echo "\" alt=\"Linkedin\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <p class=\"text-center cc mt-3\">&copy;  ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " First Wave Pte Ltd.</p>
            </div>
        </div>
    </div>
</footer><!--/#footer-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/inc/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  72 => 25,  61 => 17,  50 => 9,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<footer id=\"footer\" class=\"{{this_page == 'ventures' ? 'bg-v-dark' : 'bg-dark'}}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <ul class=\"social-icons\">
                    <li>
                        <a href=\"https://www.facebook.com/First-Wave-Agency-Singapore-100137285054193/\">
                        <img src=\"{{ 'assets/images/icons/fb-icon-white.svg'|theme }}\" alt=\"Facebook\">
                        </a>
                    </li>
                    <li class=\"soc-divider\">
                        <span>&#47;</span>
                    </li>
                    <li>
                        <a href=\"https://www.instagram.com/firstwave.sg/\">
                            <img src=\"{{ 'assets/images/icons/ig-logo-white.svg'|theme }}\" alt=\"Instagram\">
                        </a>
                    </li>
                    <li class=\"soc-divider\">
                        <span>&#47;</span>
                    </li>
                    <li>
                        <a href=\"https://www.linkedin.com/company/first-wave-agency/\">
                            <img src=\"{{ 'assets/images/icons/linkedin-icon-white.svg'|theme }}\" alt=\"Linkedin\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <p class=\"text-center cc mt-3\">&copy;  {{ \"now\"|date(\"Y\") }} First Wave Pte Ltd.</p>
            </div>
        </div>
    </div>
</footer><!--/#footer-->", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/inc/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 9, "escape" => 33, "date" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'escape', 'date'],
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
