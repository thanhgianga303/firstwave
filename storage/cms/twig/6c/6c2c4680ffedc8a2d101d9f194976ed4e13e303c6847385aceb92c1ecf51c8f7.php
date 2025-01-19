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

/* C:\xampppp\htdocs\firstwave/themes/firstwave/partials/main-work/works.htm */
class __TwigTemplate_09a4d42694f5c9090e61f22fa46dd08c95078d6c191a6af4e7a46fb9c3f8a947 extends \Twig\Template
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
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Event Gallery</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\">
    <style>
        body {
            background-color: #5B21B6;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            margin: auto;
        }

        h1 {
            font-size: 40px;
            font-weight: bold;
            color: #FBBF24;
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }

        .filter-btn {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            text-decoration: underline;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .filter-icon {
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        .filter-tags {
            display: none;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .tag {
            background-color: #4B5563;
            padding: 8px 12px;
            border-radius: 6px;
            text-wrap: nowrap;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 10px;
            margin-top: 20px;
        }

        .gallery img {
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .gallery img:hover {
            transform: scale(1.1);
        }

        /* Modal */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            position: relative;
        }

        .modal img {
            max-width: 80%;
            max-height: 80vh;
            border-radius: 6px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            color: white;
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<section id=\"works-section\" class=\"pt-100 pb-2 section-container bg-darker ";
        // line 120
        echo (((($context["CAT_ID"] ?? null) == 5)) ? ("pb-100") : (""));
        echo "\">
        <!-- Header -->
        <h1>WORK</h1>
    
        <!-- Filters -->
        <div class=\"filters\">
            <button class=\"filter-icon\" onclick=\"toggleFilters()\">
                <i class=\"fas fa-bars\"></i>
            </button>
            <button class=\"filter-btn\" onclick=\"toggleFilter('eventTypes')\">
                Event Types
            </button>
            <button class=\"filter-btn\" onclick=\"toggleFilter('projectDeliverables')\">
                Project Deliverables
            </button>
            <button class=\"filter-btn\" onclick=\"resetFilters()\">
                Reset Filters
            </button>
        </div>
    
        <!-- Filter Tags -->
        <div id=\"eventTypes\" class=\"filter-tags\">
            ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 143
            echo "                <span class=\"tag\" id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo "\" onclick=\"toggleFiltersType(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo ", 'data-categories')\">
                    ";
            // line 144
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "
                </span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "        </div>
        <div id=\"projectDeliverables\" class=\"filter-tags\">
            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["project_deliverables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["project_deliverable"]) {
            // line 150
            echo "                <span class=\"tag\" id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project_deliverable"], "id", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "\" onclick=\"toggleFiltersType(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project_deliverable"], "id", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo ", 'data-project-deliverable')\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["project_deliverable"], "name", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project_deliverable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "        </div>
    
        <!-- Image Gallery -->
        <div class=\"gallery\">
            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["works"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 157
            echo "                ";
            $context["specificCategories"] = [];
            // line 158
            echo "                ";
            $context["specificProjectDeliverable"] = [];
            // line 159
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["work"], "category", [], "any", false, false, true, 159));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 160
                echo "                    ";
                $context["specificCategories"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["specificCategories"] ?? null), 160, $this->source), [0 => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, true, 160)]);
                // line 161
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["work"], "project_deliverables", [], "any", false, false, true, 162));
            foreach ($context['_seq'] as $context["_key"] => $context["project_deliverable"]) {
                // line 163
                echo "                    ";
                $context["specificProjectDeliverable"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["specificCategories"] ?? null), 163, $this->source), [0 => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, true, 163)]);
                // line 164
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project_deliverable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["work"], "brand", [], "any", false, false, true, 165));
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["brand"], "id", [], "any", false, false, true, 165) == "1")) {
                    // line 166
                    echo "                    <a class=\"work\" data-project-deliverable=\"";
                    echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["specificCategories"] ?? null), 166, $this->source), ", "), "html", null, true);
                    echo "\" data-categories=\"";
                    echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["specificCategories"] ?? null), 166, $this->source), ", "), "html", null, true);
                    echo "\" href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("firstwave/view-work", ["slug" => twig_get_attribute($this->env, $this->source, $context["work"], "slug", [], "any", false, false, true, 166)]);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["work"], "work_cover", [], "any", false, false, true, 166), "path", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                    echo "\" alt=\"Event Image 1\"></a>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "        </div>
    
    <!-- Image Modal -->
    <div id=\"imageModal\" class=\"modal\" onclick=\"closeModal(event)\">
        <div class=\"modal-content\">
            <button class=\"close-btn\" onclick=\"closeModal(event)\">
                <i class=\"fas fa-times\"></i>
            </button>
            <img id=\"modalImg\">
        </div>
    </div>
    
    <script>
        toggleFilter('eventTypes');
        function toggleFilters() {
            var allFilterTags = document.querySelectorAll('.filter-tags');
            allFilterTags.forEach(function (tag) {
                var display = tag.style.display;
                if (tag.classList.contains('active') && display === \"none\") {
                    tag.style.display = \"flex\";
                } else {
                    tag.style.display = \"none\";
                }
            });
        }
    
        function toggleFilter(id) {
            var allFilterTags = document.querySelectorAll('.filter-tags');
            allFilterTags.forEach(function (tag) {
                tag.style.display = \"none\";
                tag.classList.remove('active');
            });
            var element = document.getElementById(id);
            if (element.style.display === \"flex\") {
                element.style.display = \"none\";
            } else {
                element.style.display = \"flex\";
            }
            element.classList.add('active');
            clearFilter();
        }
    
    
        function resetFilters() {
            var allFilterTags = document.querySelectorAll('.filter-tags');
            clearFilter();
        }
    
        // Open image in modal
        function openModal(imgElement) {
            var modal = document.getElementById('imageModal');
            var modalImg = document.getElementById('modalImg');
            modalImg.src = imgElement.src;
            modal.style.display = \"flex\";
        }
    
        // Close modal when clicking outside or on close button
        function closeModal(event) {
            var modal = document.getElementById('imageModal');
            if (event.target === modal || event.target.classList.contains(\"close-btn\")) {
                modal.style.display = \"none\";
            }
        }

        function toggleFiltersType(id, type) {
            var allFilterTags = document.querySelectorAll('.work');
            allFilterTags.forEach(function (tag) {
                var display     = tag.style.display;
                var types  = tag.getAttribute(type);
                var typesArray = types.split(',').map(Number);
                if (typesArray.includes(id)) {
                    tag.style.display = \"block\";
                } else {
                    tag.style.display = \"none\";
                }
            });
        }
        
        function clearFilter() {
            var allFilterTags = document.querySelectorAll('.work');
            allFilterTags.forEach(function (tag) {
                tag.style.display = \"block\";
            });
        }
    </script>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/main-work/works.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 169,  292 => 168,  276 => 166,  270 => 165,  264 => 164,  261 => 163,  256 => 162,  250 => 161,  247 => 160,  242 => 159,  239 => 158,  236 => 157,  232 => 156,  226 => 152,  213 => 150,  209 => 149,  205 => 147,  196 => 144,  189 => 143,  185 => 142,  160 => 120,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Event Gallery</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css\">
    <style>
        body {
            background-color: #5B21B6;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            margin: auto;
        }

        h1 {
            font-size: 40px;
            font-weight: bold;
            color: #FBBF24;
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }

        .filter-btn {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            text-decoration: underline;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .filter-icon {
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        .filter-tags {
            display: none;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .tag {
            background-color: #4B5563;
            padding: 8px 12px;
            border-radius: 6px;
            text-wrap: nowrap;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 10px;
            margin-top: 20px;
        }

        .gallery img {
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .gallery img:hover {
            transform: scale(1.1);
        }

        /* Modal */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            position: relative;
        }

        .modal img {
            max-width: 80%;
            max-height: 80vh;
            border-radius: 6px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            color: white;
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<section id=\"works-section\" class=\"pt-100 pb-2 section-container bg-darker {{ CAT_ID == 5 ? 'pb-100' : '' }}\">
        <!-- Header -->
        <h1>WORK</h1>
    
        <!-- Filters -->
        <div class=\"filters\">
            <button class=\"filter-icon\" onclick=\"toggleFilters()\">
                <i class=\"fas fa-bars\"></i>
            </button>
            <button class=\"filter-btn\" onclick=\"toggleFilter('eventTypes')\">
                Event Types
            </button>
            <button class=\"filter-btn\" onclick=\"toggleFilter('projectDeliverables')\">
                Project Deliverables
            </button>
            <button class=\"filter-btn\" onclick=\"resetFilters()\">
                Reset Filters
            </button>
        </div>
    
        <!-- Filter Tags -->
        <div id=\"eventTypes\" class=\"filter-tags\">
            {% for category in categories %}
                <span class=\"tag\" id=\"{{ category.id }}\" onclick=\"toggleFiltersType({{ category.id }}, 'data-categories')\">
                    {{ category.title }}
                </span>
            {% endfor %}
        </div>
        <div id=\"projectDeliverables\" class=\"filter-tags\">
            {% for project_deliverable in project_deliverables %}
                <span class=\"tag\" id=\"{{ project_deliverable.id }}\" onclick=\"toggleFiltersType({{ project_deliverable.id }}, 'data-project-deliverable')\">{{ project_deliverable.name }}</span>
            {% endfor %}
        </div>
    
        <!-- Image Gallery -->
        <div class=\"gallery\">
            {% for work in works %}
                {% set specificCategories = [] %}
                {% set specificProjectDeliverable = [] %}
                {% for category in work.category%}
                    {% set specificCategories = specificCategories|merge([category.id]) %}
                {% endfor %}
                {% for project_deliverable in work.project_deliverables %}
                    {% set specificProjectDeliverable = specificCategories|merge([category.id]) %}
                {% endfor %}
                {% for brand in work.brand if brand.id == '1'%}
                    <a class=\"work\" data-project-deliverable=\"{{ specificCategories|join(', ')}}\" data-categories=\"{{ specificCategories|join(', ')}}\" href=\"{{ 'firstwave/view-work'|page({ slug: work.slug }) }}\"><img src=\"{{ work.work_cover.path }}\" alt=\"Event Image 1\"></a>
                {% endfor %}
            {% endfor %}
        </div>
    
    <!-- Image Modal -->
    <div id=\"imageModal\" class=\"modal\" onclick=\"closeModal(event)\">
        <div class=\"modal-content\">
            <button class=\"close-btn\" onclick=\"closeModal(event)\">
                <i class=\"fas fa-times\"></i>
            </button>
            <img id=\"modalImg\">
        </div>
    </div>
    
    <script>
        toggleFilter('eventTypes');
        function toggleFilters() {
            var allFilterTags = document.querySelectorAll('.filter-tags');
            allFilterTags.forEach(function (tag) {
                var display = tag.style.display;
                if (tag.classList.contains('active') && display === \"none\") {
                    tag.style.display = \"flex\";
                } else {
                    tag.style.display = \"none\";
                }
            });
        }
    
        function toggleFilter(id) {
            var allFilterTags = document.querySelectorAll('.filter-tags');
            allFilterTags.forEach(function (tag) {
                tag.style.display = \"none\";
                tag.classList.remove('active');
            });
            var element = document.getElementById(id);
            if (element.style.display === \"flex\") {
                element.style.display = \"none\";
            } else {
                element.style.display = \"flex\";
            }
            element.classList.add('active');
            clearFilter();
        }
    
    
        function resetFilters() {
            var allFilterTags = document.querySelectorAll('.filter-tags');
            clearFilter();
        }
    
        // Open image in modal
        function openModal(imgElement) {
            var modal = document.getElementById('imageModal');
            var modalImg = document.getElementById('modalImg');
            modalImg.src = imgElement.src;
            modal.style.display = \"flex\";
        }
    
        // Close modal when clicking outside or on close button
        function closeModal(event) {
            var modal = document.getElementById('imageModal');
            if (event.target === modal || event.target.classList.contains(\"close-btn\")) {
                modal.style.display = \"none\";
            }
        }

        function toggleFiltersType(id, type) {
            var allFilterTags = document.querySelectorAll('.work');
            allFilterTags.forEach(function (tag) {
                var display     = tag.style.display;
                var types  = tag.getAttribute(type);
                var typesArray = types.split(',').map(Number);
                if (typesArray.includes(id)) {
                    tag.style.display = \"block\";
                } else {
                    tag.style.display = \"none\";
                }
            });
        }
        
        function clearFilter() {
            var allFilterTags = document.querySelectorAll('.work');
            allFilterTags.forEach(function (tag) {
                tag.style.display = \"block\";
            });
        }
    </script>
</section>", "C:\\xampppp\\htdocs\\firstwave/themes/firstwave/partials/main-work/works.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 142, "set" => 157);
        static $filters = array("escape" => 143, "merge" => 160, "join" => 166, "page" => 166);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 'merge', 'join', 'page'],
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
