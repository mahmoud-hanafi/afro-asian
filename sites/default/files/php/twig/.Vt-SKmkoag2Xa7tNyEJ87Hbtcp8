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

/* themes/gavias_edmix/templates/page/parts/topbar.html.twig */
class __TwigTemplate_826d1a32535461fc57bc161058b5d8d018144e67bc6ed0cf4acf90532b4a6d4e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10];
        $filters = ["escape" => 20, "t" => 70];
        $functions = ["render_block" => 5];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['render_block']
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
        echo "<div class=\"topbar top-bar-navigation\">
  <div class=\"container\">
   <div class=\"top-bar-content\">
     <div class=\"topbar-left\">
        <div id=\"top_bar_info\"> ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\twig_blocks\Twig\RenderBlock')->render_block("topbarinfo"));
        echo " </div>
        <div id=\"top_bar_lang\"> 
          <div class=\"dropdown\">
            <button class=\"dropbtn\">
              <span class='current-language'>
                ";
        // line 10
        if ((($context["language"] ?? null) == "ar")) {
            // line 11
            echo "                  العربية
                ";
        } else {
            // line 13
            echo "                  English
                ";
        }
        // line 15
        echo "              </span>
              <i class=\"fa fa-caret-down\"></i>
            </button>
            <div class=\"dropdown-content\">
              ";
        // line 19
        if ((($context["language"] ?? null) == "ar")) {
            // line 20
            echo "                <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dep_parameter"] ?? null)), "html", null, true);
            echo "\" class='eng-language'>English</a>
              ";
        } else {
            // line 22
            echo "\t\t            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
            echo "/ar";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dep_parameter"] ?? null)), "html", null, true);
            echo "\" class='ar-language'>العربية</a>
              ";
        }
        // line 24
        echo "            </div>
          </div>
        </div>
      </div>

      <div class=\"topbar-right\">
        <div class=\"social-list social-media-section\">
         <div class=\"social-media\">
          ";
        // line 32
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "facebook", [])) {
            // line 33
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "facebook", [])), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 35
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "twitter", [])) {
            // line 36
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "twitter", [])), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a>
          ";
        }
        // line 38
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "skype", [])) {
            // line 39
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "skype", [])), "html", null, true);
            echo "\"><i class=\"fa fa-skype\"></i></a>
          ";
        }
        // line 41
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "instagram", [])) {
            // line 42
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "instagram", [])), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a>
          ";
        }
        // line 44
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "dribbble", [])) {
            // line 45
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "dribbble", [])), "html", null, true);
            echo "\"><i class=\"fa fa-dribbble\"></i></a>
          ";
        }
        // line 47
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "linkedin", [])) {
            // line 48
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "linkedin", [])), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\"></i></a>
          ";
        }
        // line 50
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "pinterest", [])) {
            // line 51
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "pinterest", [])), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 53
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "google", [])) {
            // line 54
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "google", [])), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus\"></i></a>
          ";
        }
        // line 56
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "youtube", [])) {
            // line 57
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "youtube", [])), "html", null, true);
            echo "\"><i class=\"fa fa-youtube\"></i></a>
          ";
        }
        // line 59
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "vimeo", [])) {
            // line 60
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "vimeo", [])), "html", null, true);
            echo "\"><i class=\"fa fa-vimeo-square\"></i></a>
          ";
        }
        // line 62
        echo "          ";
        if ($this->getAttribute(($context["custom_social_link"] ?? null), "tumblr", [])) {
            // line 63
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["custom_social_link"] ?? null), "tumblr", [])), "html", null, true);
            echo "\"><i class=\"fa fa-tumblr\"></i></a>
          ";
        }
        // line 65
        echo "         </div>
        </div>
        <div id=\"top_bar_user\">
          ";
        // line 68
        if ((($context["custom_account"] ?? null) == "")) {
            // line 69
            echo "            <div class=\"login_link login\">
              <a href=\"";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["login_link"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
            echo "</a>
            </div>
          ";
        } else {
            // line 73
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\twig_blocks\Twig\RenderBlock')->render_block("useraccountmenu"));
            echo "
          ";
        }
        // line 75
        echo "        </div>
      </div>
  </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edmix/templates/page/parts/topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 75,  230 => 73,  222 => 70,  219 => 69,  217 => 68,  212 => 65,  206 => 63,  203 => 62,  197 => 60,  194 => 59,  188 => 57,  185 => 56,  179 => 54,  176 => 53,  170 => 51,  167 => 50,  161 => 48,  158 => 47,  152 => 45,  149 => 44,  143 => 42,  140 => 41,  134 => 39,  131 => 38,  125 => 36,  122 => 35,  116 => 33,  114 => 32,  104 => 24,  95 => 22,  87 => 20,  85 => 19,  79 => 15,  75 => 13,  71 => 11,  69 => 10,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_edmix/templates/page/parts/topbar.html.twig", "D:\\xampp\\htdocs\\afro-asian\\themes\\gavias_edmix\\templates\\page\\parts\\topbar.html.twig");
    }
}
