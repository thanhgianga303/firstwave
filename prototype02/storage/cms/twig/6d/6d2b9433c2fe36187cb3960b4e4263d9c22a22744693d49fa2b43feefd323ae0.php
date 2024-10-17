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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/home/partners-carousel.htm */
class __TwigTemplate_9ba3dfddd7cd450d05f61dd462ec4bfe39c10e1a296dc624033f2ebdc5c0c3a9 extends \Twig\Template
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
        echo "<section id=\"partners\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"section-title text-left text-white wow fadeInDown\">Social Proof</h2>
        </div>
        <div class=\"row partners-carousel\"> 
            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/ibm.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/imda.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/sit.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/national-arts-council.png");
        echo "\">
                        </div>
                    </div>
                </div>             
            </div>
            
            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/hpb.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/mom.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/enterprise-sg.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/sport-sg.png");
        echo "\">
                        </div>
                    </div>
                </div>             
            </div>

            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/hdb-logo.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/keppel.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/cpf.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/moc.png");
        echo "\">
                        </div>
                    </div>
                </div>             
            </div>

            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/pa.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/moe.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/breadtalk.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/amoy.png");
        echo "\">
                        </div>
                    </div>
                </div>             
            </div>

            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/mfa.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/pm-office.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/propnex.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/food-bank.png");
        echo "\">
                        </div>
                    </div>
                </div>             
            </div>

            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/nea.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 141
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/foodpanda.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/gong-cha.png");
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/partners/kkday.png");
        echo "\">
                        </div>
                    </div>
                </div>             
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/partners-carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 151,  252 => 146,  244 => 141,  236 => 136,  223 => 126,  215 => 121,  207 => 116,  199 => 111,  186 => 101,  178 => 96,  170 => 91,  162 => 86,  149 => 76,  141 => 71,  133 => 66,  125 => 61,  112 => 51,  104 => 46,  96 => 41,  88 => 36,  75 => 26,  67 => 21,  59 => 16,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"partners\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"section-title text-left text-white wow fadeInDown\">Social Proof</h2>
        </div>
        <div class=\"row partners-carousel\"> 
            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/ibm.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/imda.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/sit.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/national-arts-council.png'|theme }}\">
                        </div>
                    </div>
                </div>             
            </div>
            
            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/hpb.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/mom.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/enterprise-sg.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/sport-sg.png'|theme }}\">
                        </div>
                    </div>
                </div>             
            </div>

            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/hdb-logo.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/keppel.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/cpf.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/moc.png'|theme }}\">
                        </div>
                    </div>
                </div>             
            </div>

            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/pa.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/moe.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/breadtalk.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/amoy.png'|theme }}\">
                        </div>
                    </div>
                </div>             
            </div>

            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/mfa.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/pm-office.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/propnex.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/food-bank.png'|theme }}\">
                        </div>
                    </div>
                </div>             
            </div>

            <div class=\"col-lg-4 carousel-partners-item\">
                <div class=\"row partners-box\">
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/nea.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/foodpanda.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/gong-cha.png'|theme }}\">
                        </div>
                    </div>
                    <div class=\"col-6 col-lg-6 wow fadeInLeft\">
                        <div class=\"partners-holder\">
                            <img src=\"{{ 'assets/images/partners/kkday.png'|theme }}\">
                        </div>
                    </div>
                </div>             
            </div>
        </div>
    </div>
</section>", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/partners-carousel.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
