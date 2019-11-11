<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap/templates/bootstrap/bootstrap-panel.html.twig */
class __TwigTemplate_38c60589365718111565a357993049848d00430cba01b853e118faf23abe192b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'heading' => [$this, 'block_heading'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 45, "if" => 53, "block" => 54];
        $filters = ["clean_class" => 47, "escape" => 50];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/bootstrap/bootstrap-panel.html.twig"));

        // line 45
        $context["classes"] = [0 => "panel", 1 => ((        // line 47
($context["errors"] ?? null)) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["panel_type"] ?? null))))))];
        // line 50
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true));
        echo ">

  ";
        // line 53
        echo "  ";
        if (($context["heading"] ?? null)) {
            // line 54
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 69
            echo "  ";
        }
        // line 70
        echo "
  ";
        // line 72
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "
  ";
        // line 107
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 108
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 116
            echo "  ";
        }
        // line 117
        echo "
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 54
    public function block_heading($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heading"));

        // line 55
        echo "      <div class=\"panel-heading\">
        ";
        // line 57
        $context["heading_classes"] = [0 => "panel-title", 1 => ((        // line 59
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 62
        echo "        ";
        if (($context["collapsible"] ?? null)) {
            // line 63
            echo "          <a";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method")), "html", null, true));
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null)), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true));
            echo "</a>
        ";
        } else {
            // line 65
            echo "          <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method")), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true));
            echo "</div>
        ";
        }
        // line 67
        echo "      </div>
    ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "    ";
        // line 74
        $context["body_classes"] = [0 => "panel-body", 1 => ((        // line 76
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 77
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 78
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 79
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : (""))];
        // line 82
        echo "    ";
        // line 83
        $context["description_classes"] = [0 => "help-block", 1 => (((        // line 85
($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "invisible"))) ? ("sr-only") : (""))];
        // line 88
        echo "
    ";
        // line 89
        if (($context["errors"] ?? null)) {
            // line 90
            echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 94
        echo "
    <div";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["body_attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true));
        echo ">
      ";
        // line 96
        if ((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "before"))) {
            // line 97
            echo "        <p";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true));
            echo "</p>
      ";
        }
        // line 99
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true));
        echo "
      ";
        // line 100
        if (((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "after")) || ($this->getAttribute(($context["description"] ?? null), "position", []) == "invisible"))) {
            // line 101
            echo "        <p";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true));
            echo "</p>
      ";
        }
        // line 103
        echo "    </div>
  ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 108
    public function block_footer($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 109
        echo "      ";
        // line 110
        $context["footer_classes"] = [0 => "panel-footer"];
        // line 114
        echo "      <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["footer_attributes"] ?? null), "addClass", [0 => ($context["footer_classes"] ?? null)], "method")), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true));
        echo "</div>
    ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/bootstrap/bootstrap-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 114,  228 => 110,  226 => 109,  220 => 108,  212 => 103,  204 => 101,  202 => 100,  197 => 99,  189 => 97,  187 => 96,  183 => 95,  180 => 94,  174 => 91,  171 => 90,  169 => 89,  166 => 88,  164 => 85,  163 => 83,  161 => 82,  159 => 79,  158 => 78,  157 => 77,  156 => 76,  155 => 74,  153 => 73,  147 => 72,  139 => 67,  131 => 65,  121 => 63,  118 => 62,  116 => 59,  115 => 57,  112 => 55,  106 => 54,  97 => 117,  94 => 116,  91 => 108,  88 => 107,  85 => 105,  82 => 72,  79 => 70,  76 => 69,  73 => 54,  70 => 53,  64 => 50,  62 => 47,  61 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap/templates/bootstrap/bootstrap-panel.html.twig", "/var/www/drupaltest/themes/bootstrap/templates/bootstrap/bootstrap-panel.html.twig");
    }
}
