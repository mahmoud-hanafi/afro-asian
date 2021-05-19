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

/* __string_template__51d4e8f0ea4a0130e68e4f776b08e4993262aeb7947672995ccdf9f6b18fdb66 */
class __TwigTemplate_300d3bfee74c17af378ab7b747b41c1d1c94746b510e060ca7a96c40d8f0a389 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
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
        echo "<div class=\"news-sec\">
            <div class=\"news-item\">
              <div class=\"news-image\">
                <img src=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_news_image"] ?? null)), "html", null, true);
        echo "\" alt=\"\">
              </div>
              <div class=\"news-content\">
                <h4>";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h4>
                <p class=\"news-date\">";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_news_date"] ?? null)), "html", null, true);
        echo "</p>
                <p class=\"caption\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
              </div>
            </div>
          </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__51d4e8f0ea4a0130e68e4f776b08e4993262aeb7947672995ccdf9f6b18fdb66";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  70 => 8,  66 => 7,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__51d4e8f0ea4a0130e68e4f776b08e4993262aeb7947672995ccdf9f6b18fdb66", "");
    }
}
