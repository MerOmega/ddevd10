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

/* block.html.twig */
class __TwigTemplate_e3a6f67a823880a612cf189bdf0f2abb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 31) == "block-movietheme-languageswitcher")) {
            // line 32
            echo "  ";
            $context["lenguage"] = true;
            // line 33
            echo "  ";
        } else {
            // line 34
            echo "  ";
            $context["lenguage"] = false;
        }
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 36) == "block-movietheme-content")) {
            // line 37
            echo "<div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo " block-container align-items-center rounded-3 border shadow-lg\">
  ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 38
($context["attributes"] ?? null), "id", [], "any", false, false, true, 38) == "block-movietheme-languageswitcher")) {
            // line 39
            echo "      <div class=\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo " lenguage-block block-container\">
  ";
        } else {
            // line 41
            echo "      <div class=\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo " block-container\">
  ";
        }
        // line 43
        echo "
  ";
        // line 45
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 45, $this->source), "html", null, true);
        echo ">
  ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 46, $this->source), "html", null, true);
        echo "
      ";
        // line 47
        if (($context["label"] ?? null)) {
            // line 48
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 48) == "block-movietheme-languageswitcher")) {
                // line 49
                echo "          <div id=\"lenguage-short\" class=\"lenguage-window showing\">
            <img class=\"lenguage-image-icon\" src=\"https://cdn-icons-png.flaticon.com/512/3269/3269817.png\" alt=\"\"/>
          </div>
        ";
            }
            // line 53
            echo "        <div ";
            if (($context["lenguage"] ?? null)) {
                echo " 
              class=\"lenguage-block-inner hidden\"
                ";
            }
            // line 55
            echo ">
          <h2";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 56, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 56, $this->source), "html", null, true);
            echo "</h2>
        </div>
      ";
        }
        // line 59
        echo "  <div ";
        if (($context["lenguage"] ?? null)) {
            echo " 
    class=\"lenguage-block-inner hidden\"
      ";
        }
        // line 62
        echo "  >
    ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 63, $this->source), "html", null, true);
        echo "
    ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "
    ";
        // line 68
        if (($context["lenguage"] ?? null)) {
            echo " 
      <div class=\"hide-block\">
        <button id=\"hide-lenguage-button\" class=\"btn btn-dark btn-lg\">Hide me</button>
      </div>
    ";
        }
        // line 73
        echo "  </div>
</div>
</div>
";
    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 65, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  155 => 64,  148 => 73,  140 => 68,  137 => 67,  135 => 64,  131 => 63,  128 => 62,  121 => 59,  113 => 56,  110 => 55,  103 => 53,  97 => 49,  94 => 48,  92 => 47,  88 => 46,  83 => 45,  80 => 43,  72 => 41,  64 => 39,  62 => 38,  57 => 37,  55 => 36,  51 => 34,  48 => 33,  45 => 32,  43 => 31,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - in_preview: Whether the plugin is being rendered in preview mode.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}

{# Initial if for differenct blocks #}
{% if  attributes.id ==\"block-movietheme-languageswitcher\" %}
  {% set lenguage=true %}
  {% else %}
  {% set lenguage=false %}
{% endif %}
{% if attributes.id==\"block-movietheme-content\" %}
<div class=\"{{ attributes.id }} block-container align-items-center rounded-3 border shadow-lg\">
  {% elseif  attributes.id ==\"block-movietheme-languageswitcher\"%}
      <div class=\" {{configuration.label}} {{configuration.label_display}} lenguage-block block-container\">
  {% else %}
      <div class=\" {{configuration.label}} {{configuration.label_display}} block-container\">
  {% endif %}

  {#  #}
  <div{{ attributes }}>
  {{ title_prefix }}
      {% if label %}
        {% if  attributes.id ==\"block-movietheme-languageswitcher\"%}
          <div id=\"lenguage-short\" class=\"lenguage-window showing\">
            <img class=\"lenguage-image-icon\" src=\"https://cdn-icons-png.flaticon.com/512/3269/3269817.png\" alt=\"\"/>
          </div>
        {% endif %}
        <div {% if lenguage %} 
              class=\"lenguage-block-inner hidden\"
                {% endif %}>
          <h2{{ title_attributes }}>{{ label }}</h2>
        </div>
      {% endif %}
  <div {% if lenguage %} 
    class=\"lenguage-block-inner hidden\"
      {% endif %}
  >
    {{ title_suffix }}
    {% block content %}
      {{ content }}
    {% endblock %}

    {% if lenguage %} 
      <div class=\"hide-block\">
        <button id=\"hide-lenguage-button\" class=\"btn btn-dark btn-lg\">Hide me</button>
      </div>
    {% endif %}
  </div>
</div>
</div>
", "block.html.twig", "themes/custom/movietheme/templates/block/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31, "set" => 32, "block" => 64);
        static $filters = array("escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
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
