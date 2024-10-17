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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/inc/footer.htm */
class __TwigTemplate_c55c03cbf0b10249c52e44308ae583d2faa6306a89a93f00046f9af9cea5f3bb extends \Twig\Template
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
        echo "<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center py-4\">
                <ul class=\"social-icons\">
                    <li>
                        <a href=\"https://www.facebook.com/First-Wave-Agency-Singapore-100137285054193/\">
                        <img src=\"";
        // line 8
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
        // line 16
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
        // line 24
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
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " First Wave Pte Ltd.</p>
            </div>
        </div>
    </div>
</footer><!--/#footer-->";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/inc/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  70 => 24,  59 => 16,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 text-center py-4\">
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
</footer><!--/#footer-->", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/inc/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 8, "escape" => 32, "date" => 32);
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
