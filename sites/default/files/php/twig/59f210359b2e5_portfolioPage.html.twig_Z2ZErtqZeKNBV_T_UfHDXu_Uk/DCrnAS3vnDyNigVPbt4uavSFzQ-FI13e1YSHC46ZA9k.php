<?php

/* modules/custom/sachlife_portfolio/templates/portfolioPage.html.twig */
class __TwigTemplate_b76ca357a38b0032336f028b780e36b4faaa55af1a3155c10c2138d770044623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 2, "for" => 41);
        $filters = array("length" => 2, "raw" => 17, "slice" => 17, "replace" => 86, "image_style" => 114);
        $functions = array("file_url" => 12);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'raw', 'slice', 'replace', 'image_style'),
                array('file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<section id=\"content-section\" class=\"portfolio-single portfolio-single-5\">
  ";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : null)) > 0)) {
            // line 3
            echo "    <div class=\"content-wrap\">
      <div class=\"container full-width\">
        <div class=\"row f-height\">
          <div class=\"col-left col-md-4 col-lg-3\">
            <div class=\"portfolio-info\">
              <div class=\"portfolio-info-inner\">
                <h1 class=\"portfolio-title\">About Project:</h1>
                <div class=\"author\">
                  <a href=\"#\" class=\"author-avatar bg-image\"
                     style=\"background-image: url(";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "authorAvatar", array()))), "html", null, true));
            echo "); background-position: 50% 50%;\"></a>
                  <a href=\"\" class=\"author-info\">- Author: ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "author", array()), "html", null, true));
            echo "</a>
                </div>
                <div class=\"album-description margin-top-20\">
                  <div class=\"al-desc-inner\">
                    <p>";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_slice($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "description", array()), 0, 150)));
            echo "</p>

                    <!-- Begin description toggle (hidden by default) -->
                    <div class=\"al-desc-toggle\">
                      <p>";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_slice($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "description", array()), 151)));
            echo "</p>
                    </div>
                    <!-- End description toggle -->
                  </div>

                  <!-- Begin doggle trigger -->
                  <div class=\"al-desc-toggle-trigger\">
                    <span class=\"al-desc-more\"><i class=\"fa fa-chevron-down\"></i> More</span>
                    <span class=\"al-desc-less\"><i class=\"fa fa-chevron-up\"></i> Less</span>
                  </div>
                  <!-- End doggle trigger -->
                </div>
                <!-- End portfolio description -->

                <!-- Begin portfolio atr -->
                <div class=\"portfolio-atr margin-top-50\">
                  <ul class=\"list-unstyled\">
                    ";
            // line 38
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "category", array())) > 0)) {
                // line 39
                echo "                      <li>
                        <h4 class=\"head\">Category:</h4>
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "category", array()));
                foreach ($context['_seq'] as $context["keyCat"] => $context["valCat"]) {
                    // line 42
                    echo "                          <span class=\"info\"><a href=\"#\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["valCat"], "html", null, true));
                    echo "</a></span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keyCat'], $context['valCat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                      </li>
                    ";
            }
            // line 46
            echo "
                    ";
            // line 47
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "photographsTags", array())) > 0)) {
                // line 48
                echo "                      <li>
                        <h4 class=\"head\">Tags:</h4>
                        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "photographsTags", array()));
                foreach ($context['_seq'] as $context["keyTag"] => $context["valTag"]) {
                    // line 51
                    echo "                          <span class=\"info\"><a href=\"#\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["valTag"], "html", null, true));
                    echo "</a></span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keyTag'], $context['valTag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                      </li>
                    ";
            }
            // line 55
            echo "                    <!--li class=\"portfolio-share\">
                      <h4 class=\"head\">Share:</h4>
                      <span class=\"info\"><a href=\"#0\" title=\"Share to Facebook\"><i
                            class=\"fa fa-facebook\"></i></a></span>
                      <span class=\"info\"><a href=\"#0\" title=\"Share to Twitter\"><i
                            class=\"fa fa-twitter\"></i></a></span>
                      <span class=\"info\"><a href=\"#0\" title=\"Share to Google Plus\"><i
                            class=\"fa fa-google-plus\"></i></a></span>
                      <span class=\"info\"><a href=\"#0\" title=\"Share to Pinterest\"><i
                            class=\"fa fa-pinterest\"></i></a></span>
                      <span class=\"info\"><a href=\"#0\" title=\"Share to Instagram\"><i
                            class=\"fa fa-instagram\"></i></a></span>
                    </li-->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-right col-md-8 col-lg-9\">
            <div class=\"isotope gutter-2 col-4\">
              <div class=\"gallery-top-content margin-bottom-25\">
                <ul class=\"album-attributes\">
                  <li class=\"pull-left\">
                    <a class=\"back-to-list\" href=\"/portfolio\">
                      <span class=\"bta-icon\"><i class=\"fa fa-th-list\"></i></span>
                      <span class=\"bta-text\">Back to list</span>
                    </a>
                  </li>
                  ";
            // line 83
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodeNextNavigation", array())) > 0)) {
                // line 84
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodeNextNavigation", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["keyNext"]) {
                    // line 85
                    echo "                      <li class=\"portfolio-nav pull-right\">
                        <a href=\"/portfolio/";
                    // line 86
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["keyNext"], "nid", array()), "html", null, true));
                    echo "/";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["keyNext"], "title", array()), array(" " => "-")), "html", null, true));
                    echo "\"
                           class=\"pn-link portf-next\" title=\"Next work\">
                          <span class=\"pn-link-text hide-from-sm\">Next</span>
                          <span class=\"pn-link-icon\"><i class=\"fa fa-chevron-right\"></i></span>
                        </a>
                      </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyNext'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                  ";
            }
            // line 94
            echo "                  ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodePrevNavigation", array())) > 0)) {
                // line 95
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodePrevNavigation", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["keyPrev"]) {
                    // line 96
                    echo "                      <li class=\"portfolio-nav pull-right\">
                        <a href=\"/portfolio/";
                    // line 97
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["keyPrev"], "nid", array()), "html", null, true));
                    echo "/";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["keyPrev"], "title", array()), array(" " => "-")), "html", null, true));
                    echo "\"
                           class=\"pn-link portf-prev margin-right-15\"
                           title=\"Previous work\">
                          <span class=\"pn-link-icon\"><i class=\"fa fa-chevron-left\"></i></span>
                          <span class=\"pn-link-text hide-from-sm\">Prev</span>
                        </a>
                      </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyPrev'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                  ";
            }
            // line 106
            echo "                </ul>
              </div>
              <div id=\"gallery\" class=\"isotope-items-wrap lightgallery\">
                <div class=\"grid-sizer\"></div>
                ";
            // line 110
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "photographs", array())) > 0)) {
                // line 111
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "photographs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["keyPhoto"]) {
                    // line 112
                    echo "                    <div class=\"isotope-item sachlife\">
                      <div class=\"album-single-item\">
                        <img class=\"asi-img\" src=\"";
                    // line 114
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->getAttribute($context["keyPhoto"], "target_id", array()), "portfolio_grid_thumbnail"))), "html", null, true));
                    echo "\" alt=\"image\">
                        <div class=\"asi-cover\">
                          <a class=\"asi-link lg-trigger\" href=\"";
                    // line 116
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["keyPhoto"], "target_id", array()))), "html", null, true));
                    echo "\"
                             data-exthumbnail=\"";
                    // line 117
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->getAttribute($context["keyPhoto"], "target_id", array()), "photographs_thumbnail"))), "html", null, true));
                    echo "\"
                             data-sub-html=\"<h4>";
                    // line 118
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["keyPhoto"], "title", array()), "html", null, true));
                    echo "</h4>
                             <p>";
                    // line 119
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["keyPhoto"], "title", array()), "html", null, true));
                    echo "</p>\">
                            <div class=\"asi-info\">
                              <h2 class=\"asi-title\">";
                    // line 121
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["keyPhoto"], "title", array()), "html", null, true));
                    echo "</h2>
                              <h5 class=\"asi-sub-title\">#";
                    // line 122
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["keyPhoto"], "alt", array()), "html", null, true));
                    echo "</h5>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyPhoto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                ";
            }
            // line 130
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 138
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_portfolio/templates/portfolioPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 138,  293 => 130,  290 => 129,  277 => 122,  273 => 121,  268 => 119,  264 => 118,  260 => 117,  256 => 116,  251 => 114,  247 => 112,  242 => 111,  240 => 110,  234 => 106,  231 => 105,  215 => 97,  212 => 96,  207 => 95,  204 => 94,  201 => 93,  186 => 86,  183 => 85,  178 => 84,  176 => 83,  146 => 55,  142 => 53,  133 => 51,  129 => 50,  125 => 48,  123 => 47,  120 => 46,  116 => 44,  107 => 42,  103 => 41,  99 => 39,  97 => 38,  77 => 21,  70 => 17,  63 => 13,  59 => 12,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/sachlife_portfolio/templates/portfolioPage.html.twig", "D:\\Sachin\\work\\XAMPP\\htdocs\\sachlife\\modules\\custom\\sachlife_portfolio\\templates\\portfolioPage.html.twig");
    }
}
