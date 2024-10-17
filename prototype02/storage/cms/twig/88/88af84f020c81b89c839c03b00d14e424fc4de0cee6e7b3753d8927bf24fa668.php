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

/* /home/firstwav/public_html/prototype02/plugins/firstwave/contactusform/components/contactform/default.htm */
class __TwigTemplate_5d1c4abab4cf8b04fd0431dd9d18bb66f0ec364b36156c426fd24c36f0b93464 extends \Twig\Template
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
        echo "<form   
    class=\"contact-form-firstwave\"
    id=\"firstwaveContactForm\"  
    role=\"form\"
    data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 5, $this->source), "html", null, true);
        echo "::onSubmitContactForm\" 
    data-request-validate 
    data-request-flash>

    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    ";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "

    <div class=\"row mb-3\">
        <div class=\"col form-group-holder\">
            <input type=\"text\" name=\"firstname\" placeholder=\"First name\" class=\"rounded-0 form-control bg-light\">
            <span data-validate-for=\"firstname\" class=\"form-alert-text\"></span>
        </div>
        <div class=\"col form-group-holder\">
            <input type=\"text\" name=\"lastname\" placeholder=\"Last name\" class=\"rounded-0 form-control bg-light\">
             <span data-validate-for=\"lastname\" class=\"form-alert-text\"></span>
        </div>
    </div>
    <div class=\"form-group form-group-holder mb-3\">
        <input type=\"email\" name=\"email\" placeholder=\"Email\" class=\"rounded-0 form-control bg-light\">
        <span data-validate-for=\"email\" class=\"form-alert-text\"></span>
    </div>
    <div class=\"form-group form-group-holder mb-3\">
        <textarea class=\"form-control rounded-0\" name=\"content\" placeholder=\"Your Message\" id=\"exampleFormControlTextarea1\" rows=\"7\"></textarea>
        <span data-validate-for=\"content\" class=\"form-alert-text\"></span>
    </div>
    <div class=\"form-check py-2 px-0\">
        <button type=\"submit\" class=\"rounded-0 btn btn-main py-3 px-5\" data-attach-loading>Send Message</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/firstwav/public_html/prototype02/plugins/firstwave/contactusform/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form   
    class=\"contact-form-firstwave\"
    id=\"firstwaveContactForm\"  
    role=\"form\"
    data-request=\"{{ __SELF__ }}::onSubmitContactForm\" 
    data-request-validate 
    data-request-flash>

    {{ form_token() }}

    {{ form_sessionKey() }}

    <div class=\"row mb-3\">
        <div class=\"col form-group-holder\">
            <input type=\"text\" name=\"firstname\" placeholder=\"First name\" class=\"rounded-0 form-control bg-light\">
            <span data-validate-for=\"firstname\" class=\"form-alert-text\"></span>
        </div>
        <div class=\"col form-group-holder\">
            <input type=\"text\" name=\"lastname\" placeholder=\"Last name\" class=\"rounded-0 form-control bg-light\">
             <span data-validate-for=\"lastname\" class=\"form-alert-text\"></span>
        </div>
    </div>
    <div class=\"form-group form-group-holder mb-3\">
        <input type=\"email\" name=\"email\" placeholder=\"Email\" class=\"rounded-0 form-control bg-light\">
        <span data-validate-for=\"email\" class=\"form-alert-text\"></span>
    </div>
    <div class=\"form-group form-group-holder mb-3\">
        <textarea class=\"form-control rounded-0\" name=\"content\" placeholder=\"Your Message\" id=\"exampleFormControlTextarea1\" rows=\"7\"></textarea>
        <span data-validate-for=\"content\" class=\"form-alert-text\"></span>
    </div>
    <div class=\"form-check py-2 px-0\">
        <button type=\"submit\" class=\"rounded-0 btn btn-main py-3 px-5\" data-attach-loading>Send Message</button>
    </div>
</form>", "/home/firstwav/public_html/prototype02/plugins/firstwave/contactusform/components/contactform/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array("form_token" => 9, "form_sessionKey" => 11);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['form_token', 'form_sessionKey']
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
