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

/* modules/custom/moviemodule/templates/my-template.html.twig */
class __TwigTemplate_ce79dd855564da365d9739fcc76be3c8 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("moviemodule/movielibrary"), "html", null, true);
        echo "
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("moviemodule/bootstrap"), "html", null, true);
        echo "

<h1 id=\"api-title\">List of Actors/Director</h1>
</br>

<div class=\"grid\">
<div id=\"overlay\"></div>
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["test_var"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 10
            echo "    <div class=\"card\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">
      ";
            // line 11
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["value"], "profile_path", [], "any", false, false, true, 11))) {
                // line 12
                echo "      <div class=\"profile-image card-img-top\">
        <img style=\"max-width: 150px;\" src=\"https://image.tmdb.org/t/p/w500";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "profile_path", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "\">
      </div>
        ";
            } else {
                // line 16
                echo "      <div class=\"profile-image card-img-top\">
        <img style=\"max-width: 150px;\"  src=\"https://www.miscw.com/wp-content/uploads/2017/05/Unknown-Author.jpg\">
      </div>
        ";
            }
            // line 20
            echo "      <div class=\"card-title\">
        <h2> ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</h2>
      </div>
      <div class=\"role\">
        <p> ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "known_for_department", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</p>
      </div>
      <div class=\"card-body\">
        <a class=\"btn btn-primaty show-more\">Show more</a><br>
        <a class=\"button btn btn-primary\" href=\"/movieapi/actor/create/";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\">Create and edit</a>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/moviemodule/templates/my-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  95 => 28,  88 => 24,  82 => 21,  79 => 20,  73 => 16,  67 => 13,  64 => 12,  62 => 11,  57 => 10,  53 => 9,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('moviemodule/movielibrary') }}
{{ attach_library('moviemodule/bootstrap') }}

<h1 id=\"api-title\">List of Actors/Director</h1>
</br>

<div class=\"grid\">
<div id=\"overlay\"></div>
  {% for value in test_var %}
    <div class=\"card\" id=\"{{ value.id }}\">
      {%  if value.profile_path is not empty %}
      <div class=\"profile-image card-img-top\">
        <img style=\"max-width: 150px;\" src=\"https://image.tmdb.org/t/p/w500{{ value.profile_path }}\">
      </div>
        {% else %}
      <div class=\"profile-image card-img-top\">
        <img style=\"max-width: 150px;\"  src=\"https://www.miscw.com/wp-content/uploads/2017/05/Unknown-Author.jpg\">
      </div>
        {% endif %}
      <div class=\"card-title\">
        <h2> {{ value.name }}</h2>
      </div>
      <div class=\"role\">
        <p> {{ value.known_for_department }}</p>
      </div>
      <div class=\"card-body\">
        <a class=\"btn btn-primaty show-more\">Show more</a><br>
        <a class=\"button btn btn-primary\" href=\"/movieapi/actor/create/{{ value.id }}\">Create and edit</a>
      </div>
    </div>
  {% endfor %}
</div>
", "modules/custom/moviemodule/templates/my-template.html.twig", "/var/www/html/web/modules/custom/moviemodule/templates/my-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "if" => 11);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                ['attach_library']
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
