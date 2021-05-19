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

/* themes/gavias_edmix/templates/page/main.html.twig */
class __TwigTemplate_6e21a01a7b4f2409cf8cb976622a8df6bbcb05020391efaf23179d12feb7d27b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 3, "if" => 4];
        $filters = ["escape" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
        // line 1
        echo "<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t";
        // line 3
        $context["cl_main"] = "col-md-12 col-xs-12";
        // line 4
        echo "\t\t";
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_right", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_left", []))) {
            echo "\t
\t\t\t";
            // line 5
            $context["cl_main"] = "col-xs-12 col-md-6 col-md-push-3 sb-r sb-l ";
            // line 6
            echo "\t\t";
        } elseif (($this->getAttribute(($context["page"] ?? null), "sidebar_right", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_left", []))) {
            echo "\t
\t\t\t";
            // line 7
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])) {
                // line 8
                echo "\t\t\t \t";
                $context["cl_main"] = "col-xs-12 col-md-9 sb-r ";
                // line 9
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t";
            // line 10
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) {
                // line 11
                echo "\t\t\t\t";
                $context["cl_main"] = "col-xs-12 col-md-9 col-md-push-3 sb-l ";
                // line 12
                echo "\t\t\t";
            }
            echo "\t\t\t\t
      ";
        }
        // line 13
        echo " 

\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_main"] ?? null)), "html", null, true);
        echo "\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 20
            echo "\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 24
        echo "
\t\t\t\t";
        // line 25
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 26
            echo "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 30
        echo "
\t\t\t\t";
        // line 31
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 32
            echo "\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t";
        // line 41
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) {
            // line 42
            echo "\t\t\t";
            $context["cl_left"] = "col-md-3 col-md-pull-9 col-sm-12 col-xs-12";
            // line 43
            echo "\t\t\t";
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])) {
                // line 44
                echo "\t\t\t \t";
                $context["cl_left"] = "col-md-3 col-md-pull-6 col-sm-12 col-xs-12";
                // line 45
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t
\t\t\t<div class=\"";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_left"] ?? null)), "html", null, true);
            echo " sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 53
        echo "\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])) {
            // line 57
            echo "\t\t\t";
            $context["cl_right"] = "col-lg-3 col-md-3 col-sm-12 col-xs-12";
            // line 58
            echo "\t\t\t";
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) {
                // line 59
                echo "\t\t\t\t";
                $context["cl_right"] = "col-lg-3 col-md-3 col-sm-12 col-xs-12";
                // line 60
                echo "\t\t\t";
            }
            echo "\t 

\t\t\t<div class=\"";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_right"] ?? null)), "html", null, true);
            echo " sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 68
        echo "\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edmix/templates/page/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 68,  207 => 64,  202 => 62,  196 => 60,  193 => 59,  190 => 58,  187 => 57,  185 => 56,  180 => 53,  173 => 49,  168 => 47,  162 => 45,  159 => 44,  156 => 43,  153 => 42,  151 => 41,  144 => 36,  138 => 33,  135 => 32,  133 => 31,  130 => 30,  124 => 27,  121 => 26,  119 => 25,  116 => 24,  110 => 21,  107 => 20,  105 => 19,  98 => 15,  94 => 13,  88 => 12,  85 => 11,  83 => 10,  78 => 9,  75 => 8,  73 => 7,  68 => 6,  66 => 5,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_edmix/templates/page/main.html.twig", "D:\\xampp\\htdocs\\afro-asian\\themes\\gavias_edmix\\templates\\page\\main.html.twig");
    }
}
