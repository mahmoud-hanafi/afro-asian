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

/* themes/gavias_edmix/templates/page/page-layout/page--layout--fw.html.twig */
class __TwigTemplate_0c5214366fc43706477e8351b46f83c5e9febe49a32666241e94a195b424265f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "include" => 9, "if" => 12];
        $filters = ["escape" => 8];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
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
        // line 7
        $context["has_breadcrumb"] = "";
        // line 8
        echo "<div class=\"body-page gva-body-page ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["admin_role"] ?? null)), "html", null, true);
        echo "\">
\t";
        // line 9
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_edmix/templates/page/page-layout/page--layout--fw.html.twig", 9)->display($context);
        // line 10
        echo "   ";
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_edmix/templates/page/page-layout/page--layout--fw.html.twig", 10)->display($context);
        // line 11
        echo "\t
\t";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 13
            echo "\t\t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 14
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 18
        echo "
\t<div role=\"main\" class=\"main main-page";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null)), "html", null, true);
        echo "\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 22
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])) {
            // line 23
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 26
        echo "\t

\t\t";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 29
            echo "\t\t\t<div class=\"help show hidden\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 37
        echo "
\t\t";
        // line 38
        if ($this->getAttribute(($context["page"] ?? null), "fw_before_content", [])) {
            // line 39
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fw_before_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 43
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 46
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 56
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container-full container-bg\">
\t\t\t\t";
        // line 61
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/gavias_edmix/templates/page/page-layout/page--layout--fw.html.twig", 61)->display($context);
        // line 62
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 66
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 72
        echo "
\t\t";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
            // line 74
            echo "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 82
        echo "\t\t
\t\t";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "fw_after_content", [])) {
            // line 84
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fw_after_content", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 88
        echo "
\t</div>

</div>

";
        // line 93
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_edmix/templates/page/page-layout/page--layout--fw.html.twig", 93)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_edmix/templates/page/page-layout/page--layout--fw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 93,  217 => 88,  211 => 85,  208 => 84,  206 => 83,  203 => 82,  195 => 77,  190 => 74,  188 => 73,  185 => 72,  178 => 68,  174 => 66,  172 => 65,  167 => 62,  165 => 61,  158 => 56,  149 => 50,  143 => 46,  141 => 45,  137 => 43,  131 => 40,  128 => 39,  126 => 38,  123 => 37,  115 => 32,  110 => 29,  108 => 28,  104 => 26,  98 => 24,  95 => 23,  93 => 22,  87 => 19,  84 => 18,  78 => 15,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  64 => 10,  62 => 9,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_edmix/templates/page/page-layout/page--layout--fw.html.twig", "D:\\xampp\\htdocs\\afro-asian\\themes\\gavias_edmix\\templates\\page\\page-layout\\page--layout--fw.html.twig");
    }
}
