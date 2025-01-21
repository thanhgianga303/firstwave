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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/client_testimonials/component.htm */
class __TwigTemplate_f835cf173cba665593d66a9e766b954c6f73d02afb0ff33986f46c503b6def87 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Testimonial Section with Swiper</title>

    <!-- Swiper CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css\" />

    <style>
        /*----------------------------------------
    ============ Heading Styles ============
    ----------------------------------------*/
        .heading {
            text-align: center;
            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .white-heading {
            color: #ffffff;
        }

        .heading:after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            background: url(https://i.ibb.co/d7tSD1R/heading-line.png) no-repeat center;
        }

        .white-heading:after {
            background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png) no-repeat center;
        }

        .heading span {
            font-size: 18px;
            display: block;
            font-weight: 500;
        }

        .white-heading span {
            color: #ffffff;
        }

        /*----------------------------------------
    ============ Testimonial Styles ============
    ----------------------------------------*/
        .testimonial {
            min-height: 375px;
            position: relative;
            background: url(/themes/firstwave/assets/images/bg/crowd-bg.png) center/cover;
            padding-top: 50px;
            padding-bottom: 50px;
            text-align: center;
        }

        /* The top \"wave\" or design background could be an image overlay, 
       but if it's not found, you can remove it. 
       Just adjust or remove the :after if you don't need it. */
        .testimonial:after {
            position: absolute;
            top: 0;
            left: 0;
            content: \"\";
            background: url(img/testimonial.bg-top.png) no-repeat;
            background-size: 100% 100px;
            width: 100%;
            height: 100px;
            z-index: 99;
        }

        /* Swiper container customization */
        .swiper {
            width: 100%;
            position: relative;
            padding-bottom: 50px;
        }

        /* Each slide */
        .swiper-slide {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        /* Slide content (testimonial4_slide equivalent) */
        .testimonial4_slide img {
            width: 136px;
            height: 136px;
            display: block;
            margin: 0 auto 30px auto;
            border-radius: 50%;
            box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        }

        .testimonial4_slide p {
            color: #ffffff;
            font-size: 20px;
            line-height: 1.4;
            margin: 40px 0 20px 0;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .testimonial4_slide h4 {
            color: #ffffff;
            font-size: 22px;
        }

        /* Swiper navigations (arrows) */
        .swiper-button-next,
        .swiper-button-prev {
            color: #ffffff;
            width: 35px;
            height: 35px;
        }

        /* Position them similarly to Bootstrap’s carousel control */
        .swiper-button-next {
            right: 7%;
            top: 50%;
            transform: translateY(-50%);
        }

        .swiper-button-prev {
            left: 7%;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Pagination (dots) */
        .swiper-pagination-bullet {
            background: #ffffff !important;
            opacity: 1 !important;
        }

        .swiper-pagination-bullet-active {
            background: #9dd3af !important;
        }
    </style>
</head>
<body>

    <!-- Testimonial Section -->
    <section class=\"testimonial\">
        <div class=\"container\">
            <div class=\"heading white-heading\">Testimonial</div>

            <!-- Swiper container -->
            <div class=\"swiper mySwiper\">
                <!-- Additional wrapper for slides -->
                <div class=\"swiper-wrapper\">

                    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 177
            echo "                    <div class=\"swiper-slide\">
                        <div class=\"testimonial4_slide\">
                            <img src=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "client_cover", [], "any", false, false, true, 179), "path", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "\" />
                            <p>";
            // line 180
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "testimony", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "</p>
                            <h4>";
            // line 181
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "name", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            echo "</h4>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                </div>

                <!-- Swiper Pagination -->
                <div class=\"swiper-pagination\"></div>

                <!-- Swiper Buttons -->
                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>

    <!-- Swiper Initialization -->
    <script>
        var swiper = new Swiper(\".mySwiper\", {
            loop: true,             // Loop through slides
            autoplay: {
                delay: 5000,          // 5-second delay
                disableOnInteraction: false,
            },
            speed: 2000,            // Transition speed (ms)
            pagination: {
                el: \".swiper-pagination\",
                clickable: true,
            },
            navigation: {
                nextEl: \".swiper-button-next\",
                prevEl: \".swiper-button-prev\",
            },
        });
    </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/client_testimonials/component.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 185,  234 => 181,  230 => 180,  224 => 179,  220 => 177,  216 => 176,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Testimonial Section with Swiper</title>

    <!-- Swiper CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css\" />

    <style>
        /*----------------------------------------
    ============ Heading Styles ============
    ----------------------------------------*/
        .heading {
            text-align: center;
            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .white-heading {
            color: #ffffff;
        }

        .heading:after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            background: url(https://i.ibb.co/d7tSD1R/heading-line.png) no-repeat center;
        }

        .white-heading:after {
            background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png) no-repeat center;
        }

        .heading span {
            font-size: 18px;
            display: block;
            font-weight: 500;
        }

        .white-heading span {
            color: #ffffff;
        }

        /*----------------------------------------
    ============ Testimonial Styles ============
    ----------------------------------------*/
        .testimonial {
            min-height: 375px;
            position: relative;
            background: url(/themes/firstwave/assets/images/bg/crowd-bg.png) center/cover;
            padding-top: 50px;
            padding-bottom: 50px;
            text-align: center;
        }

        /* The top \"wave\" or design background could be an image overlay, 
       but if it's not found, you can remove it. 
       Just adjust or remove the :after if you don't need it. */
        .testimonial:after {
            position: absolute;
            top: 0;
            left: 0;
            content: \"\";
            background: url(img/testimonial.bg-top.png) no-repeat;
            background-size: 100% 100px;
            width: 100%;
            height: 100px;
            z-index: 99;
        }

        /* Swiper container customization */
        .swiper {
            width: 100%;
            position: relative;
            padding-bottom: 50px;
        }

        /* Each slide */
        .swiper-slide {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        /* Slide content (testimonial4_slide equivalent) */
        .testimonial4_slide img {
            width: 136px;
            height: 136px;
            display: block;
            margin: 0 auto 30px auto;
            border-radius: 50%;
            box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        }

        .testimonial4_slide p {
            color: #ffffff;
            font-size: 20px;
            line-height: 1.4;
            margin: 40px 0 20px 0;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .testimonial4_slide h4 {
            color: #ffffff;
            font-size: 22px;
        }

        /* Swiper navigations (arrows) */
        .swiper-button-next,
        .swiper-button-prev {
            color: #ffffff;
            width: 35px;
            height: 35px;
        }

        /* Position them similarly to Bootstrap’s carousel control */
        .swiper-button-next {
            right: 7%;
            top: 50%;
            transform: translateY(-50%);
        }

        .swiper-button-prev {
            left: 7%;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Pagination (dots) */
        .swiper-pagination-bullet {
            background: #ffffff !important;
            opacity: 1 !important;
        }

        .swiper-pagination-bullet-active {
            background: #9dd3af !important;
        }
    </style>
</head>
<body>

    <!-- Testimonial Section -->
    <section class=\"testimonial\">
        <div class=\"container\">
            <div class=\"heading white-heading\">Testimonial</div>

            <!-- Swiper container -->
            <div class=\"swiper mySwiper\">
                <!-- Additional wrapper for slides -->
                <div class=\"swiper-wrapper\">

                    {% for client in clients %}
                    <div class=\"swiper-slide\">
                        <div class=\"testimonial4_slide\">
                            <img src=\"{{ client.client_cover.path }}\" alt=\"{{ client.name}}\" />
                            <p>{{client.testimony}}</p>
                            <h4>{{client.name}}</h4>
                        </div>
                    </div>
                    {% endfor %}
                </div>

                <!-- Swiper Pagination -->
                <div class=\"swiper-pagination\"></div>

                <!-- Swiper Buttons -->
                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>

    <!-- Swiper Initialization -->
    <script>
        var swiper = new Swiper(\".mySwiper\", {
            loop: true,             // Loop through slides
            autoplay: {
                delay: 5000,          // 5-second delay
                disableOnInteraction: false,
            },
            speed: 2000,            // Transition speed (ms)
            pagination: {
                el: \".swiper-pagination\",
                clickable: true,
            },
            navigation: {
                nextEl: \".swiper-button-next\",
                prevEl: \".swiper-button-prev\",
            },
        });
    </script>
</body>

</html>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/client_testimonials/component.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 176);
        static $filters = array("escape" => 179);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
