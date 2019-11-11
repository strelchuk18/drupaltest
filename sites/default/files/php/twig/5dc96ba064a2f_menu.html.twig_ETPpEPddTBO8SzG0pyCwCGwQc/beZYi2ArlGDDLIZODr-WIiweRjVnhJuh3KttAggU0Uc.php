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

/* menu.html.twig */
class __TwigTemplate_a4d1b909d230eeb81fc8adf28aee54d04a2b5ac4c0c6f4c2fdd6bedf73f448bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["macro" => 22, "if" => 23, "for" => 25, "set" => 27];
        $filters = ["clean_class" => 60, "escape" => 24, "split" => 27];
        $functions = ["link" => 45];

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if', 'for', 'set'],
                ['clean_class', 'escape', 'split'],
                ['link']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 54
        echo "
";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "menu_links", [0 => ($context["items"] ?? null), 1 => ($context["attributes"] ?? null), 2 => 0, 3 => ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null)))), 2 => "nav"])), 4 => ((($context["dropdown_classes"] ?? null)) ? (($context["dropdown_classes"] ?? null)) : ([0 => "dropdown-menu"]))], "method"))));
        echo "
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 22
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, $__dropdown_classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "dropdown_classes" => $__dropdown_classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 23
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 24
                echo "    <ul";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => (((($context["menu_level"] ?? null) == 0)) ? (($context["classes"] ?? null)) : (($context["dropdown_classes"] ?? null)))], "method")), "html", null, true));
                echo ">
    ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 26
                    echo "      ";
                    // line 27
                    $context["item_classes"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "getOption", [0 => "container_attributes"], "method"), "class", [])), " ");
                    // line 29
                    echo "      ";
                    // line 30
                    $context["item_classes"] = [0 => ((($this->getAttribute(                    // line 31
$context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", []))) ? ("expanded dropdown") : ("")), 1 => (($this->getAttribute(                    // line 32
$context["item"], "in_active_trail", [])) ? ("active active-trail") : ("")), 2 => (($this->getAttribute(                    // line 33
$context["loop"], "first", [])) ? ("first") : ("")), 3 => (($this->getAttribute(                    // line 34
$context["loop"], "last", [])) ? ("last") : (""))];
                    // line 37
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true));
                    echo ">
        ";
                    // line 38
                    $context["link_title"] = $this->getAttribute($context["item"], "title", []);
                    // line 39
                    echo "        ";
                    $context["link_attributes"] = $this->getAttribute($context["item"], "link_attributes", []);
                    // line 40
                    echo "        ";
                    if ((((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", [])) && $this->getAttribute($context["item"], "below", []))) {
                        // line 41
                        echo "          ";
                        ob_start();
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), "html", null, true));
                        echo " <span class=\"caret\"></span>";
                        $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 42
                        echo "          ";
                        $context["link_attributes"] = $this->getAttribute($this->getAttribute(($context["link_attributes"] ?? null), "addClass", [0 => "dropdown-toggle"], "method"), "setAttribute", [0 => "data-toggle", 1 => "dropdown"], "method");
                        // line 43
                        echo "        ";
                    }
                    // line 44
                    echo "        ";
                    // line 45
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["link_attributes"] ?? null), "addClass", [0 => (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("active-trail") : (""))], "method"))), "html", null, true));
                    echo "
        ";
                    // line 46
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 47
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "menu_links", [0 => $this->getAttribute($context["item"], "below", []), 1 => $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method"), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["classes"] ?? null), 4 => ($context["dropdown_classes"] ?? null)], "method"))));
                        echo "
        ";
                    }
                    // line 49
                    echo "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "    </ul>
  ";
            }
            
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 51,  166 => 49,  160 => 47,  158 => 46,  153 => 45,  151 => 44,  148 => 43,  145 => 42,  139 => 41,  136 => 40,  133 => 39,  131 => 38,  126 => 37,  124 => 34,  123 => 33,  122 => 32,  121 => 31,  120 => 30,  118 => 29,  116 => 27,  114 => 26,  97 => 25,  92 => 24,  89 => 23,  70 => 22,  61 => 60,  58 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "menu.html.twig", "themes/bootstrap/templates/menu/menu.html.twig");
    }
}
