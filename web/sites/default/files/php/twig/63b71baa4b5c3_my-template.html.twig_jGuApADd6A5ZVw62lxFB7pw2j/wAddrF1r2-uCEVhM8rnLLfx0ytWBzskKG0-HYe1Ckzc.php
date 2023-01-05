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
class __TwigTemplate_8a6557471b9cad7206a2bac6beb3bb34 extends Template
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
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["test_var"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 9
            echo "    <div class=\"card\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">
      ";
            // line 10
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["value"], "profile_path", [], "any", false, false, true, 10))) {
                // line 11
                echo "      <div class=\"profile-image card-img-top\">
        <img style=\"max-width: 150px;\" src=\"https://image.tmdb.org/t/p/w500";
                // line 12
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "profile_path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\">
      </div>
      ";
            }
            // line 15
            echo "      <div class=\"card-title\">
        <h2> ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</h2>
      </div>
      <div class=\"role\">
        <p> ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "known_for_department", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</p>
      </div>
      <div class=\"card-body\">
          <div class=\"relevant-movies\">
                <ul class=\"movies-related\">
                </ul>
          </div>
        <a class=\"button btn btn-primary\" href=\"/movieapi/actor/create/";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\">Create and edit</a>
        </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
        return array (  101 => 30,  91 => 26,  81 => 19,  75 => 16,  72 => 15,  66 => 12,  63 => 11,  61 => 10,  56 => 9,  52 => 8,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/moviemodule/templates/my-template.html.twig", "/var/www/html/web/modules/custom/moviemodule/templates/my-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8, "if" => 10);
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
