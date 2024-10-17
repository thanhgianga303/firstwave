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

/* /home/firstwav/public_html/prototype02/themes/firstwave/partials/home/services.htm */
class __TwigTemplate_083543dee56c841f8252cca2cf3c03b8a200441ab9172a630eeae7a12228e8ab extends \Twig\Template
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
        echo "<section id=\"services\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"section-header wow fadeInDown\" data-wow-delay=\"0.6s\">
            <h2 class=\"section-title text-left text-white\">Why Us</h2>
        </div>
        <div class=\"row features\">

            <div class=\"col-lg-3 col-md-6 col-sm-6 wow fadeInLeft\" data-wow-delay=\"0.3s\">
                <div class=\"media service-box\">
                    <div class=\"media-body\">
                        <div class=\"hex-icon coat\">
                            <div class=\"hex-icon hex-inner\">
                                 <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/icon-experience.svg");
        echo "\" class=\"hex-symbol\" height=\"55px\" alt=\"14 year of Experience\">
                            </div>
                        </div>
                        <h4 class=\"media-heading text-white\">14 years of<br/> experience</h4>
                    </div>
                </div>
            </div><!--/.col-md-4-->

            <div class=\"col-lg-3 col-md-6 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"media service-box\">
                    <div class=\"media-body\">
                        <div class=\"hex-icon coat\">
                            <div class=\"hex-icon hex-inner\">
                               <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/icon-award-winning.svg");
        echo "\" class=\"hex-symbol\" height=\"55px\" alt=\"Award Winning Agency\">
                            </div>
                        </div>
                        <h4 class=\"media-heading text-white\">Award Winning<br/> Agency</h4>
                    </div>
                </div>
            </div><!--/.col-md-4-->

            <div class=\"col-lg-3 col-md-6 col-sm-6  wow fadeInUp\" data-wow-delay=\"0.6s\">
                <div class=\"media service-box\">
                    <div class=\"media-body\">
                        <div class=\"hex-icon coat\">
                            <div class=\"hex-icon hex-inner\">
                                <img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/icon-media-tech.svg");
        echo "\" class=\"hex-symbol\" height=\"55px\" alt=\"Activation, Engagement, Media Tech\">
                            </div>
                        </div>
                        <h4 class=\"media-heading text-white\">Activation<br/> Engagement<br/>  Media Tech</h4>
                    </div>
                </div>
            </div><!--/.col-md-4-->

            <div class=\"col-lg-3 col-md-6 col-sm-6 wow fadeInRight\" data-wow-delay=\"0.9s\">
                <div class=\"media service-box\">
                    <div class=\"media-body\">
                        <div class=\"hex-icon coat\">
                            <div class=\"hex-icon hex-inner\">
                                <img src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/icon-offline-activation.svg");
        echo "\" class=\"hex-symbol\" height=\"55px\" alt=\"Offline, Virtual & Hybrid Activations\">
                            </div>
                        </div>
                        <h4 class=\"media-heading text-white\">Offline, Virtual &<br/>Hybrid Activations</h4>
                    </div>
                </div>
            </div><!--/.col-md-4-->
    
        </div><!--/.row-->    
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 52,  85 => 39,  69 => 26,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"services\" class=\"section-container\">
    <div class=\"container\">
        <div class=\"section-header wow fadeInDown\" data-wow-delay=\"0.6s\">
            <h2 class=\"section-title text-left text-white\">Why Us</h2>
        </div>
        <div class=\"row features\">

            <div class=\"col-lg-3 col-md-6 col-sm-6 wow fadeInLeft\" data-wow-delay=\"0.3s\">
                <div class=\"media service-box\">
                    <div class=\"media-body\">
                        <div class=\"hex-icon coat\">
                            <div class=\"hex-icon hex-inner\">
                                 <img src=\"{{ 'assets/images/icons/icon-experience.svg'|theme }}\" class=\"hex-symbol\" height=\"55px\" alt=\"14 year of Experience\">
                            </div>
                        </div>
                        <h4 class=\"media-heading text-white\">14 years of<br/> experience</h4>
                    </div>
                </div>
            </div><!--/.col-md-4-->

            <div class=\"col-lg-3 col-md-6 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"media service-box\">
                    <div class=\"media-body\">
                        <div class=\"hex-icon coat\">
                            <div class=\"hex-icon hex-inner\">
                               <img src=\"{{ 'assets/images/icons/icon-award-winning.svg'|theme }}\" class=\"hex-symbol\" height=\"55px\" alt=\"Award Winning Agency\">
                            </div>
                        </div>
                        <h4 class=\"media-heading text-white\">Award Winning<br/> Agency</h4>
                    </div>
                </div>
            </div><!--/.col-md-4-->

            <div class=\"col-lg-3 col-md-6 col-sm-6  wow fadeInUp\" data-wow-delay=\"0.6s\">
                <div class=\"media service-box\">
                    <div class=\"media-body\">
                        <div class=\"hex-icon coat\">
                            <div class=\"hex-icon hex-inner\">
                                <img src=\"{{ 'assets/images/icons/icon-media-tech.svg'|theme }}\" class=\"hex-symbol\" height=\"55px\" alt=\"Activation, Engagement, Media Tech\">
                            </div>
                        </div>
                        <h4 class=\"media-heading text-white\">Activation<br/> Engagement<br/>  Media Tech</h4>
                    </div>
                </div>
            </div><!--/.col-md-4-->

            <div class=\"col-lg-3 col-md-6 col-sm-6 wow fadeInRight\" data-wow-delay=\"0.9s\">
                <div class=\"media service-box\">
                    <div class=\"media-body\">
                        <div class=\"hex-icon coat\">
                            <div class=\"hex-icon hex-inner\">
                                <img src=\"{{ 'assets/images/icons/icon-offline-activation.svg'|theme }}\" class=\"hex-symbol\" height=\"55px\" alt=\"Offline, Virtual & Hybrid Activations\">
                            </div>
                        </div>
                        <h4 class=\"media-heading text-white\">Offline, Virtual &<br/>Hybrid Activations</h4>
                    </div>
                </div>
            </div><!--/.col-md-4-->
    
        </div><!--/.row-->    
    </div>
</section>", "/home/firstwav/public_html/prototype02/themes/firstwave/partials/home/services.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 13);
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
