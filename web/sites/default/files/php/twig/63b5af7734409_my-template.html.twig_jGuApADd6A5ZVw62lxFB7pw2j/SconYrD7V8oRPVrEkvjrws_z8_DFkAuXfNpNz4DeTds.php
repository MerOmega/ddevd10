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
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["test_var"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 8
            echo "    <div class=\"card\">
      <div class=\"profile-image card-img-top\">
        <img style=\"max-width: 150px;\" src=\"https://image.tmdb.org/t/p/w500";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "profile_path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\">
      </div>
      <div class=\"card-title\">
        <h2> ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</h2>
      </div>
      <div class=\"card-body\">
          <div class=\"relevant-movies hiden\">
            <p> Known role: ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "known_for_department", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</p>
              ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "known_for", [], "any", false, true, true, 18), 1, [], "array", false, true, true, 18), "original_title", [], "any", true, true, true, 18) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "known_for", [], "any", false, true, true, 18), 1, [], "array", false, true, true, 18), "original_title", [], "any", true, true, true, 18))) {
                // line 19
                echo "                <ul class=\"movies-related\">
                    ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["value"], "known_for", [], "any", false, false, true, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["value2"]) {
                    // line 21
                    echo "                      <li> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value2"], "original_title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo " </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                </ul>
              ";
            }
            // line 25
            echo "
          </div>
        <a class=\"button btn btn-primary\" href=\"/movieapi/actor/create/";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">Create and edit</a>
        </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
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
        return array (  112 => 31,  102 => 27,  98 => 25,  94 => 23,  85 => 21,  81 => 20,  78 => 19,  76 => 18,  72 => 17,  65 => 13,  59 => 10,  55 => 8,  51 => 7,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/moviemodule/templates/my-template.html.twig", "/var/www/html/web/modules/custom/moviemodule/templates/my-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7, "if" => 18);
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
