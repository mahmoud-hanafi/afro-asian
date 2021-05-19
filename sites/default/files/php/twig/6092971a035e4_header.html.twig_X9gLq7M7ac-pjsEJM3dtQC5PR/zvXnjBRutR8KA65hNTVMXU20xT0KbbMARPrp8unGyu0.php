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

/* themes/gavias_edmix/templates/page/header.html.twig */
class __TwigTemplate_e23a6ac5fe01aa2f8220246e101b6c28e5a94c8a545ddcffeeafa4eb53cb95ce extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 1, "set" => 4, "if" => 5];
        $filters = ["escape" => 10];
        $functions = ["path" => 14, "render_block" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'set', 'if'],
                ['escape'],
                ['path', 'render_block']
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
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/topbar.html.twig"), "themes/gavias_edmix/templates/page/header.html.twig", 1)->display($context);
        // line 2
        echo "<header id=\"header\" class=\"header-v1\">

  ";
        // line 4
        $context["class_sticky"] = "";
        // line 5
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 6
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 7
            echo "  ";
        }
        // line 8
        echo "
  <div class=\"gbb-row-wrapper\">
    <div class=\"bb-container container\" style=\"background-image: url(";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "themes/gavias_edmix/background-header.png); background-position: center;\">
      <div class=\"row\">
        <div class=\"branding-logo\">
        <div class=\"logo-img\">
          <a href=\" ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\" class=\"site_home_link\">
            <img src=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
        echo "\">
          </a>
          </div>
          <div class='site_info'>
            <h1>";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "</h1>
            ";
        // line 20
        if ((($context["language"] ?? null) == "ar")) {
            // line 21
            echo "              <a href=\"/main/ar\"> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo " </a>
            ";
        } else {
            // line 23
            echo "              <a href=\"/main\"> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo " </a>
            ";
        }
        // line 25
        echo "          </div>
        </div>
        <div class=\"aun-home\">
    \t\t  <div id=\"top_header_content_div\">
      \t\t\t<div id=\"search_div\">
      \t\t\t\t";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\twig_blocks\Twig\RenderBlock')->render_block("searchform"));
        echo "
      \t\t\t</div>
              <div id=\"top_header_menu_div\">
                ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\twig_blocks\Twig\RenderBlock')->render_block("topheadermenu"));
        echo "
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>


   <div class=\"header-main ";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"header-inner clearfix\">
                <div class=\"main-menu\">
                  <div class=\"area-main-menu\">
                    <div class=\"area-inner\">
                      <div class=\"gva-offcanvas-mobile\">
                        <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                        ";
        // line 52
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 53
            echo "                          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
                        ";
        }
        // line 55
        echo "                      </div>
                      <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                        <span class=\"one\"></span>
                        <span class=\"two\"></span>
                        <span class=\"three\"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edmix/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 55,  152 => 53,  150 => 52,  137 => 42,  125 => 33,  119 => 30,  112 => 25,  106 => 23,  100 => 21,  98 => 20,  94 => 19,  87 => 15,  83 => 14,  76 => 10,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  61 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_edmix/templates/page/header.html.twig", "D:\\xampp\\htdocs\\afro-asian\\themes\\gavias_edmix\\templates\\page\\header.html.twig");
    }
}
