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

/* /home/firstwav/public_html/prototype02/themes/firstwave/pages/test.htm */
class __TwigTemplate_c18648c67186ac0b590c68438c12c461df15ffce241bfb0ec2f32884c5cbd8d5 extends \Twig\Template
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
<html>
<head>
  <title>slick lightbox</title>
  <meta name=\"viewport\" content=\"width=device-width\">

  <!-- core CSS -->
<link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/slick-1.8.1/slick/slick-theme.css", 1 => "assets/vendor/slick-lightbox/gh-pages/stylesheets/github-highlight.css", 2 => "assets/vendor/slick-lightbox/gh-pages/bower_components/slick-carousel/slick/slick.css", 3 => "assets/vendor/slick-lightbox/gh-pages/bower_components/slick-carousel/slick/slick-theme.css", 4 => "assets/vendor/slick-lightbox/dist/slick-lightbox.css"]);
        // line 14
        echo "\" rel=\"stylesheet\">

</head>
<body style=\"background:#fff !important\">
  <div>
    <ul>
      <li><a href=\"http://placekitten.com/1600/1300\" data-caption=\"Lorem ipsum 1600x1300\">http://placekitten.com/1600/1300</a></li>
      <li><a href=\"http://placekitten.com/1630/1280\" data-caption=\"Lorem ipsum 1630x1280\">http://placekitten.com/1630/1280</a></li>
      <li><a href=\"http://placekitten.com/1500/1250\" data-caption=\"Lorem ipsum 1500x1250\">http://placekitten.com/1500/1250</a></li>
    </ul>
  </div>
  
  <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/dist/jquery.js", 1 => "assets/vendor/bootstrap-5.0.1/js/bootstrap.bundle.min.js", 2 => "assets/vendor/slick-1.8.1/slick/slick.min.js", 3 => "assets/vendor/slick-lightbox/dist/slick-lightbox.min.js", 4 => "assets/vendor/counterup/jquery.counterup.min.js", 5 => "assets/vendor/wow/dist/wow.min.js", 6 => "assets/js/main.js", 7 => "@framework", 8 => "@framework.extras"]);
        // line 36
        echo "\"></script> 
  
  <script type=\"text/javascript\">
    \$(document).ready(function(){
      \$('ul').slickLightbox({
        itemSelector: '> li > a'
      });
    });
  </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/themes/firstwave/pages/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 36,  64 => 26,  50 => 14,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <title>slick lightbox</title>
  <meta name=\"viewport\" content=\"width=device-width\">

  <!-- core CSS -->
<link href=\"{{ [
        'assets/vendor/slick-1.8.1/slick/slick-theme.css',
        'assets/vendor/slick-lightbox/gh-pages/stylesheets/github-highlight.css',
        'assets/vendor/slick-lightbox/gh-pages/bower_components/slick-carousel/slick/slick.css',
        'assets/vendor/slick-lightbox/gh-pages/bower_components/slick-carousel/slick/slick-theme.css',
        'assets/vendor/slick-lightbox/dist/slick-lightbox.css',
    ]|theme }}\" rel=\"stylesheet\">

</head>
<body style=\"background:#fff !important\">
  <div>
    <ul>
      <li><a href=\"http://placekitten.com/1600/1300\" data-caption=\"Lorem ipsum 1600x1300\">http://placekitten.com/1600/1300</a></li>
      <li><a href=\"http://placekitten.com/1630/1280\" data-caption=\"Lorem ipsum 1630x1280\">http://placekitten.com/1630/1280</a></li>
      <li><a href=\"http://placekitten.com/1500/1250\" data-caption=\"Lorem ipsum 1500x1250\">http://placekitten.com/1500/1250</a></li>
    </ul>
  </div>
  
  <script src=\"{{ [
    'assets/vendor/jquery/dist/jquery.js',
    'assets/vendor/bootstrap-5.0.1/js/bootstrap.bundle.min.js',
    'assets/vendor/slick-1.8.1/slick/slick.min.js',
    'assets/vendor/slick-lightbox/dist/slick-lightbox.min.js',
    'assets/vendor/counterup/jquery.counterup.min.js',
    'assets/vendor/wow/dist/wow.min.js',
    'assets/js/main.js',
    '@framework',
    '@framework.extras'
]|theme }}\"></script> 
  
  <script type=\"text/javascript\">
    \$(document).ready(function(){
      \$('ul').slickLightbox({
        itemSelector: '> li > a'
      });
    });
  </script>
</body>
</html>", "/home/firstwav/public_html/prototype02/themes/firstwave/pages/test.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 14);
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
