<?php

/* modules/custom/sachlife_portfolio/templates/portfoliothreegrid.html.twig */
class __TwigTemplate_ae7b3e8fe11419bef03c916a4dc824e1c253184754fd2f7ba697e6eb53e19cc0 extends Twig_Template
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
        $tags = array("if" => 20, "for" => 22);
        $filters = array("length" => 20, "lower" => 23, "replace" => 23, "image_style" => 40);
        $functions = array("url" => 37, "file_url" => 40);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'lower', 'replace', 'image_style'),
                array('url', 'file_url')
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
        echo "<section id=\"content-section\" class=\"portfolio-list-grid\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"content-wrap\">
          <div class=\"isotope gutter-3 col-3\">
            <div class=\"gallery-top-content\">
              <div class=\"row margin-bottom-40\">
                <div class=\"col-md-8\">
                  <div class=\"isotope-filter\">
                    <div class=\"navbar-header visible-xs\">
                      <button type=\"button\" class=\"navbar-toggle collapsed filter-toggle-btn\"
                              data-toggle=\"collapse\" data-target=\"#isotope-filter-collapse\">
                        <span class=\"text-center\">Filter <i class=\"fa fa-chevron-down\"></i></span>
                      </button>
                    </div>
                    <h2 class=\"filter-heading\">Filters</h2>
                    <div class=\"isotope-filter-links collapse navbar-collapse no-padding\"
                         id=\"isotope-filter-collapse\">
                      ";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["categoryList"]) ? $context["categoryList"] : null)) > 0)) {
            // line 21
            echo "                        <a class=\"active\" href=\"#\" data-filter=\"*\">all</a>
                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) ? $context["categoryList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["keyList"]) {
                // line 23
                echo "                          <a href=\"#\" data-filter=\".";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["keyList"], " ", "-")), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["keyList"], "html", null, true));
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                      ";
        }
        // line 26
        echo "                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"isotope-items-wrap ali-style-2 caption-outside\">
              <div class=\"grid-sizer\"></div>
              ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : null)) > 0)) {
            // line 34
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 35
                echo "                  <div class=\"isotope-item ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["value"], "category", array())), "html", null, true));
                echo "\">
                    <div class=\"album-list-item\">
                      <a class=\"ali-link\" href=\"";
                // line 37
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
                echo "portfolio/";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "/";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["value"], "title", array()), array(" " => "-")), "html", null, true));
                echo "\">
                        <div class=\"ali-img-wrap\">
                          <img class=\"ali-img\"
                               src=\"";
                // line 40
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->getAttribute($context["value"], "coverPhoto", array()), "portfolio_grid_thumbnail"))), "html", null, true));
                echo "\"
                               alt=\"image\">
                        </div>
                        <div class=\"ali-caption\">
                          <h2 class=\"ali-title\">";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true));
                echo "</h2>
                          <div class=\"ali-meta\">";
                // line 45
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["value"], "imageCount", array()), "html", null, true));
                echo " photos</div>
                        </div>
                      </a>
                    </div>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "              ";
        }
        // line 52
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_portfolio/templates/portfoliothreegrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  142 => 51,  130 => 45,  126 => 44,  119 => 40,  109 => 37,  103 => 35,  98 => 34,  96 => 33,  87 => 26,  84 => 25,  73 => 23,  69 => 22,  66 => 21,  64 => 20,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/sachlife_portfolio/templates/portfoliothreegrid.html.twig", "D:\\Sachin\\work\\XAMPP\\htdocs\\sachlife\\modules\\custom\\sachlife_portfolio\\templates\\portfoliothreegrid.html.twig");
    }
}
