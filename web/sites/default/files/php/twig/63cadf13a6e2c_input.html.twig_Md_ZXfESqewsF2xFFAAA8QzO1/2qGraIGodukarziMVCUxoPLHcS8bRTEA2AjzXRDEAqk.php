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

/* themes/custom/movietheme/templates/form/input.html.twig */
class __TwigTemplate_c6fdc6c00cceadc612ac08a63440c608 extends Template
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
        // line 14
        $context["buttonClasses"] = [0 => "btn", 1 => "btn-primary"];
        // line 19
        echo "
";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "value", [], "any", false, false, true, 20) == "Add to cart")) {
            // line 21
            echo "<div class=\"add-to-cart\">
  ";
            // line 23
            $context["classes"] = [0 => "btn", 1 => "btn-dark", 2 => "btn-lg"];
            // line 29
            echo "<input  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 29, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 29, $this->source), "html", null, true);
            echo "
";
        } else {
            // line 31
            echo "<div>
<input 
  ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "button"], "method", false, false, true, 33)) {
                // line 34
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["buttonClasses"] ?? null)], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "
  ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 35
($context["attributes"] ?? null), "hasClass", [0 => "form-search"], "method", false, false, true, 35)) {
                // line 36
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "form-control"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 38
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 38, $this->source), "html", null, true);
            echo "


    />";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 41, $this->source), "html", null, true);
            echo "
";
        }
        // line 43
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/movietheme/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 43,  87 => 41,  80 => 38,  74 => 36,  72 => 35,  67 => 34,  65 => 33,  61 => 31,  51 => 29,  49 => 23,  46 => 21,  44 => 20,  41 => 19,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 *
 * @see template_preprocess_input()
 */
#}
{%
    set buttonClasses = [
    'btn',
    'btn-primary',
  ]
  %}

{% if attributes.value == \"Add to cart\"%}
<div class=\"add-to-cart\">
  {%
    set classes = [
    'btn',
    'btn-dark',
    'btn-lg',
  ]
  %}
<input  {{ attributes.addClass(classes) }} {{ attributes }}>{{ children }}
{% else %}
<div>
<input 
  {% if attributes.hasClass(\"button\") %}
    {{ attributes.addClass(buttonClasses) }}
  {% elseif attributes.hasClass(\"form-search\") %}
    {{ attributes.addClass(\"form-control\") }}
  {% endif %}
 {{ attributes }}


    />{{ children }}
{% endif %}

</div>
", "themes/custom/movietheme/templates/form/input.html.twig", "/var/www/html/web/themes/custom/movietheme/templates/form/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 20);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
