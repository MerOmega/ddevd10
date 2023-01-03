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
        echo "
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("moviemodule/movielibrary"), "html", null, true);
        echo "

<h1 id=\"api-title\">List of Actors/Director</h1>
</br>


  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["test_var"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 9
            echo "<div class=\"actor-grid\">
    <h2> ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</h2>
  <div class=\"profile-image\">
    <img style=\"max-width: 150px;\" src=\"https://image.tmdb.org/t/p/w500";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "profile_path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\">
  </div>
    <div class=\"relevant-movies\">
      <p> Known role: ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "known_for_department", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</p>
        ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "known_for", [], "any", false, true, true, 16), 1, [], "array", false, true, true, 16), "original_title", [], "any", true, true, true, 16) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "known_for", [], "any", false, true, true, 16), 1, [], "array", false, true, true, 16), "original_title", [], "any", true, true, true, 16))) {
                // line 17
                echo "          <ul class=\"movies-related\">
              ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["value"], "known_for", [], "any", false, false, true, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["value2"]) {
                    // line 19
                    echo "                <li> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value2"], "original_title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo " </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "          </ul>
        ";
            }
            // line 23
            echo "      <a class=\"button\" href=\"/mycustompath/actor/create/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">Create and edit</a>
    </div>
    <p></p>
    </br>
</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  95 => 23,  91 => 21,  82 => 19,  78 => 18,  75 => 17,  73 => 16,  69 => 15,  63 => 12,  58 => 10,  55 => 9,  51 => 8,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/moviemodule/templates/my-template.html.twig", "/var/www/html/web/modules/custom/moviemodule/templates/my-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8, "if" => 16);
        static $filters = array("escape" => 2);
        static $functions = array("attach_library" => 2);

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
