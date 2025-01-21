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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/inc/nav.htm */
class __TwigTemplate_aae7a556c2065d754c5e59517fa939b5cd89bdcb7b504d161af68af4a102b701 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg fixed-top\" id=\"navbar\">
    <div class=\"container\">
        ";
        // line 4
        if ((($context["this_page"] ?? null) == "x")) {
            // line 5
            echo "        <a class=\"navbar-brand py-2\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("x/home");
            echo "\">
            <picture>
                <source media=\"(max-width:575.98px)\" srcset=\"";
            // line 7
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/firstwave-x-landscape.svg");
            echo "\" height=\"60px\">
                <img src=\"";
            // line 8
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/firstwave-x-landscape.svg");
            echo "\" height=\"70px\" alt=\"First Wave\">
            </picture>
        </a>
        ";
        } elseif ((        // line 11
($context["this_page"] ?? null) == "ventures")) {
            // line 12
            echo "        <a class=\"navbar-brand py-2\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("ventures/home");
            echo "\">
            <picture>
                <source media=\"(max-width:575.98px)\" srcset=\"";
            // line 14
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/firstwave-ventures-landscape.svg");
            echo "\" height=\"60px\">
                <img src=\"";
            // line 15
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/firstwave-ventures-landscape.svg");
            echo "\" height=\"70px\" alt=\"First Wave Ventures\">
            </picture>
        </a>
        ";
        } else {
            // line 19
            echo "        <a class=\"navbar-brand py-2\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("firstwave/home");
            echo "\">
            <picture>
                <source media=\"(max-width:575.98px)\" srcset=\"";
            // line 21
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/firstwave-landscape.svg");
            echo "\" height=\"60px\">
                <img src=\"";
            // line 22
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/firstwave-landscape.svg");
            echo "\" height=\"70px\" alt=\"First Wave\">
            </picture>
        </a>
        ";
        }
        // line 26
        echo "        
        <button class=\"navbar-toggler\" id=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
            <div class=\"icon-bar\"></div>
            <div class=\"icon-bar\"></div>
            <div class=\"icon-bar\"></div>
        </button>

        <div class=\"navbar-collapse collapse\" id=\"navbar-menu\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"menu-grid\"></span>Products
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("firstwave/home");
        echo "\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <span class=\"item-fw-logo fw-icon-m\"></span>
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                         First Wave
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("x/home");
        echo "\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <span class=\"item-fw-logo fw-icon-x\"></span>
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        First Wave X
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ventures/home");
        echo "\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <span class=\"item-fw-logo fw-icon-v\"></span>
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        First Wave<br/> Ventures
                                    </div>
                                </div>
                            </a>
                        </li> -->
                    </ul>
                </li>
                ";
        // line 78
        if ((($context["this_page"] ?? null) == "x")) {
            // line 79
            echo "                <li class=\"nav-item scroll\">
                    <a href=\"";
            // line 80
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("x/home");
            echo "#about\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"";
            // line 83
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("x/home");
            echo "#process\" class=\"nav-link\">Process</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"";
            // line 86
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("x/work");
            echo "\" class=\"nav-link\">Work</a>
                </li>
                ";
        } elseif ((        // line 88
($context["this_page"] ?? null) == "ventures")) {
            // line 89
            echo "                <li class=\"nav-item scroll\">
                    <a href=\"";
            // line 90
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("ventures/ventures-about");
            echo "\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"";
            // line 93
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("ventures/home");
            echo "#our-work\" class=\"nav-link\">Work</a>
                </li>
                ";
        } else {
            // line 96
            echo "                <li class=\"nav-item\">
                    <a href=\"";
            // line 97
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("firstwave/home");
            echo "\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
            // line 100
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("firstwave/work");
            echo "\" class=\"nav-link\">Work</a>
                </li>
                ";
        }
        // line 103
        echo "                <li class=\"nav-item scroll\">
                    <a href=\"#get-in-touch\"  class=\"nav-link\">Connect</a>
                </li>   
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/inc/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 103,  208 => 100,  202 => 97,  199 => 96,  193 => 93,  187 => 90,  184 => 89,  182 => 88,  177 => 86,  171 => 83,  165 => 80,  162 => 79,  160 => 78,  144 => 65,  129 => 53,  114 => 41,  97 => 26,  90 => 22,  86 => 21,  80 => 19,  73 => 15,  69 => 14,  63 => 12,  61 => 11,  55 => 8,  51 => 7,  45 => 5,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<nav class=\"navbar navbar-expand-lg fixed-top\" id=\"navbar\">
    <div class=\"container\">
        {% if this_page == 'x'%}
        <a class=\"navbar-brand py-2\" href=\"{{ 'x/home'|page }}\">
            <picture>
                <source media=\"(max-width:575.98px)\" srcset=\"{{ 'assets/images/logo/firstwave-x-landscape.svg'|theme }}\" height=\"60px\">
                <img src=\"{{ 'assets/images/logo/firstwave-x-landscape.svg'|theme }}\" height=\"70px\" alt=\"First Wave\">
            </picture>
        </a>
        {% elseif this_page == 'ventures' %}
        <a class=\"navbar-brand py-2\" href=\"{{ 'ventures/home'|page }}\">
            <picture>
                <source media=\"(max-width:575.98px)\" srcset=\"{{ 'assets/images/logo/firstwave-ventures-landscape.svg'|theme }}\" height=\"60px\">
                <img src=\"{{ 'assets/images/logo/firstwave-ventures-landscape.svg'|theme }}\" height=\"70px\" alt=\"First Wave Ventures\">
            </picture>
        </a>
        {% else %}
        <a class=\"navbar-brand py-2\" href=\"{{ 'firstwave/home'|page }}\">
            <picture>
                <source media=\"(max-width:575.98px)\" srcset=\"{{ 'assets/images/logo/firstwave-landscape.svg'|theme }}\" height=\"60px\">
                <img src=\"{{ 'assets/images/logo/firstwave-landscape.svg'|theme }}\" height=\"70px\" alt=\"First Wave\">
            </picture>
        </a>
        {% endif %}
        
        <button class=\"navbar-toggler\" id=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\">
            <div class=\"icon-bar\"></div>
            <div class=\"icon-bar\"></div>
            <div class=\"icon-bar\"></div>
        </button>

        <div class=\"navbar-collapse collapse\" id=\"navbar-menu\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"menu-grid\"></span>Products
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ 'firstwave/home'|page }}\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <span class=\"item-fw-logo fw-icon-m\"></span>
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                         First Wave
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ 'x/home'|page }}\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <span class=\"item-fw-logo fw-icon-x\"></span>
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        First Wave X
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- <li>
                            <a class=\"dropdown-item\" href=\"{{ 'ventures/home'|page }}\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <span class=\"item-fw-logo fw-icon-v\"></span>
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        First Wave<br/> Ventures
                                    </div>
                                </div>
                            </a>
                        </li> -->
                    </ul>
                </li>
                {% if this_page == 'x'%}
                <li class=\"nav-item scroll\">
                    <a href=\"{{ 'x/home'|page }}#about\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"{{ 'x/home'|page }}#process\" class=\"nav-link\">Process</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"{{ 'x/work'|page }}\" class=\"nav-link\">Work</a>
                </li>
                {% elseif this_page == 'ventures' %}
                <li class=\"nav-item scroll\">
                    <a href=\"{{ 'ventures/ventures-about'|page }}\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item scroll\">
                    <a href=\"{{ 'ventures/home'|page }}#our-work\" class=\"nav-link\">Work</a>
                </li>
                {% else %}
                <li class=\"nav-item\">
                    <a href=\"{{ 'firstwave/home'|page }}\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ 'firstwave/work'|page }}\" class=\"nav-link\">Work</a>
                </li>
                {% endif %}
                <li class=\"nav-item scroll\">
                    <a href=\"#get-in-touch\"  class=\"nav-link\">Connect</a>
                </li>   
            </ul>
        </div>
    </div>
</nav>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/inc/nav.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("page" => 5, "theme" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'theme'],
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
