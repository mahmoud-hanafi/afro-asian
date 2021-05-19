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

/* __string_template__771c5812f446f182a362fe3fb10432458f608d13526a8bfb180e32717935e2b0 */
class __TwigTemplate_6d0e59502934cd48c539579d80c868cb3fc35d7d0f785bc9f3bd0d5cf1b539bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"event-item\">
             <div class=\"event-img\">
               <img src=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_image"] ?? null)), "html", null, true);
        echo "\">
             </div>
             <div class=\"event-content\">
               <div class=\"event-header\">
                 <h4>";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h4>
               </div>
               <div class=\"event-caption\">
                <p>";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
              </div>
              <div class=\"event-date\">
                <div class=\"date\">
                  <p>";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_start"] ?? null)), "html", null, true);
        echo "</p>
                </div>
                <div class=\"location\">
                  <p><i class=\"fas fa-map-marker-alt\"></i> <span>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_address"] ?? null)), "html", null, true);
        echo "</span> </p>
                </div>
              </div>
             </div>
           </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__771c5812f446f182a362fe3fb10432458f608d13526a8bfb180e32717935e2b0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  79 => 14,  72 => 10,  66 => 7,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__771c5812f446f182a362fe3fb10432458f608d13526a8bfb180e32717935e2b0", "");
    }
}
