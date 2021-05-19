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

/* themes/gavias_edmix/customize/form.php */
class __TwigTemplate_d9a7f969d5168d17b982dba21c419a9d3df7bd4f9d05b00ad3b36f93779a9d29 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["raw" => 30];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw'],
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
        echo "<div id=\"gavias_customize_form\" class=\"gavias_customize_form\">
  
   <div class=\"form-group action\">
      <input type=\"button\" id=\"gavias_customize_save\" class=\"btn form-submit\" value=\"Save\" />
      <input type=\"button\" id=\"gavias_customize_preview\" class=\"btn form-submit\" value=\"Preview\" />
      <input type=\"button\" id=\"gavias_customize_reset\" class=\"btn form-submit\" value=\"Reset\" />
      <input type=\"hidden\" id=\"gva_theme_name\" name=\"theme_name\" value=\"gavias_edmix\" />
   </div>   

   <div class=\"clearfix\"></div>
   <div id=\"customize-gavias-preivew\">
      <div class=\"panel-group\" id=\"customize-accordion\" role=\"tablist\" aria-multiselectable=\"true\">   
        
         <!-- Typo -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-typo\" aria-expanded=\"true\">
                   Typography
                 </a>
               </h4>
            </div>
            <div id=\"customize-typo\" class=\"panel-collapse collapse in\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Font Primary</label>
                        <div class=\"input-group\">
                            <select name=\"font_family_primary\" class=\"form-control customize-option\">
                              ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["fonts"] ?? null)));
        echo "
                            </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Font Second</label>
                        <div class=\"input-group\">
                            <select name=\"font_family_second\" class=\"form-control customize-option\">
                              ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["fonts"] ?? null)));
        echo "
                            </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Font Weight Body</label>
                        <div class=\"input-group\">
                            <select name=\"font_body_weight\" class=\"form-control customize-option\">
                              <option value=\"\">-- Default --</option>
                              <option value=\"100\">100</option>
                              <option value=\"300\">300</option>
                              <option value=\"400\">400</option>
                              <option value=\"500\">500</option>
                              <option value=\"600\">600</option>
                              <option value=\"700\">700</option>
                              <option value=\"800\">800</option>
                              <option value=\"900\">900</option>
                            </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Font size Body</label>
                        <div class=\"input-group\">
                            <select name=\"font_body_weight\" class=\"form-control customize-option\">
                              <option value=\"\">-- Default --</option>
                              <option value=\"12\">12</option>
                              <option value=\"13\">13</option>
                              <option value=\"14\">14</option>
                              <option value=\"15\">15</option>
                              <option value=\"16\">16</option>
                              <option value=\"17\">17</option>
                              <option value=\"18\">18</option>
                              <option value=\"19\">19</option>
                              <option value=\"20\">20</option>
                              <option value=\"21\">21</option>
                              <option value=\"22\">22</option>
                              <option value=\"23\">23</option>
                              <option value=\"24\">24</option>
                              <option value=\"25\">25</option>
                              <option value=\"26\">26</option>
                              <option value=\"27\">27</option>
                              <option value=\"28\">28</option>
                              <option value=\"29\">29</option>
                              <option value=\"30\">30</option>
                            </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div> 

         <!-- Body -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-body\" aria-expanded=\"true\">
                   Body
                 </a>
               </h4>
            </div>
            <div id=\"customize-body\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"desc\">Background body show when use boxed layout</div>
                  <div class=\"form-wrapper\">
                  <div class=\"desc\" style=\"line-height: 16px;\"><b>You can upload image for /themes/gavias_edmix/images/patterns</b></div>
                     <div class=\"form-group\">
                        <label>Background Image</label>
                        <div class=\"input-group\">
                            <input name=\"body_bg_image\" type=\"hidden\" />
                            <div class=\"box-choose-image\">

                            </div>
                            <select name=\"body_bg_image\" class=\"form-control customize-option text-black\">
                              <option value=\"\">--Default--</option>
                              ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["patterns"] ?? null)));
        echo "
                            </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background Color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"body_bg_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background Position</label>
                        <div class=\"input-group\">
                          <select name=\"body_bg_position\" class=\"form-control customize-option\">
                            <option value=\"\">--Default--</option>
                            <option value=\"center top\">center top</option>
                            <option value=\"center right\">center right</option>
                            <option value=\"center bottom\">center bottom</option>
                            <option value=\"center center\">center center</option>
                            <option value=\"left top\">left top</option>
                            <option value=\"left center\">left center</option>
                            <option value=\"left bottom\">left bottom</option>
                            <option value=\"right top\">right top</option>
                            <option value=\"right center\">right center</option>
                            <option value=\"right bottom\">right bottom</option>
                          </select>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background Repeat</label>
                        <div class=\"input-group colorselector\">
                            <select name=\"body_bg_repeat\" class=\"form-control customize-option\">
                              <option value=\"\">--Default--</option>
                              <option value=\"no-repeat\">no-repeat</option>
                              <option value=\"repeat\">repeat</option>
                              <option value=\"repeat-x\">repeat-x</option>
                              <option value=\"repeat-y\">repeat-y</option>
                            </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>

         <!-- General -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-general\" aria-expanded=\"true\">
                   General
                 </a>
               </h4>
            </div>
            <div id=\"customize-general\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Text color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"text_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Link color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"link_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Link hover color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"link_hover_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div> 

         <!-- Header -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-header\" aria-expanded=\"true\">
                   Header
                 </a>
               </h4>
            </div>
            <div id=\"customize-header\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Header Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Header Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>

         <!-- Main menu -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-mainmenu\" aria-expanded=\"true\">
                   Main Menu
                 </a>
               </h4>
            </div>
            <div id=\"customize-mainmenu\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"menu_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Menu | Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"menu_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Menu | Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"menu_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_background\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>

         <!-- Footer -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-footer\" aria-expanded=\"true\">
                   Footer
                 </a>
               </h4>
            </div>
            <div id=\"customize-footer\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Text color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>

               </div>
            </div> 
         </div>

         <!-- Copyright -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-copyright\" aria-expanded=\"true\">
                   Copyright
                 </a>
               </h4>
            </div>
            <div id=\"customize-copyright\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Text color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>

               </div>
            </div> 
         </div>

      </div>    
   </div>   
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_edmix/customize/form.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 119,  99 => 40,  86 => 30,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_edmix/customize/form.php", "D:\\xampp\\htdocs\\afro-asian\\themes\\gavias_edmix\\customize\\form.php");
    }
}
