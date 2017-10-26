<?php

/* modules/custom/sachlife_content/templates/blogPost.html.twig */
class __TwigTemplate_cebd3c3f5cca2f727d5831c58833c9539048d79aad6e8b318752eab43734f4aa extends Twig_Template
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
        $tags = array("if" => 2, "for" => 3);
        $filters = array("length" => 2, "date" => 14, "raw" => 22, "replace" => 56);
        $functions = array("file_url" => 10, "url" => 56);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'date', 'raw', 'replace'),
                array('file_url', 'url')
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
        echo "<div class=\"col-md-8\">
  ";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : null)) > 0)) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["key1"]) {
                // line 4
                echo "      <div class=\"blog-single-post\">
        <div class=\"blog-single-attributes margin-bottom-40\">
          <div class=\"row\">
            <div class=\"col-sm-8\">
              <div class=\"blog-single-meta-wrap\">
                <a href=\"\" class=\"author-avatar pull-left bg-image\"
                   style=\"background-image: url(";
                // line 10
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["key1"], "avatar", array()))), "html", null, true));
                echo ");\"></a>
                <div class=\"blog-single-meta\">
                  <h4 class=\"article-author\">Author: <a href=\"#\">";
                // line 12
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["key1"], "author", array()), "html", null, true));
                echo "</a></h4>
                  <div class=\"article-time-cat\">
                    <span class=\"article-time\">";
                // line 14
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["key1"], "created", array()), "d M Y"), "html", null, true));
                echo "</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"post-content lightgallery\">
          ";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["key1"], "description", array())));
                echo "
          ";
                // line 23
                if ((twig_length_filter($this->env, $this->getAttribute($context["key1"], "paragraph", array())) > 0)) {
                    // line 24
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["key1"], "paragraph", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["key2"]) {
                        // line 25
                        echo "              ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["key2"], "blogDescription", array())));
                        echo "
              <a href=\"\" class=\"lg-trigger\" data-exthumbnail=\"\">
                <img src=\"";
                        // line 27
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["key2"], "blogImage", array()))), "html", null, true));
                        echo "\" alt=\"image\">
              </a>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "          ";
                }
                // line 31
                echo "        </div>
        <div class=\"blog-single-attributes margin-top-60\">
          <div class=\"row\">
            <div class=\"col-sm-8\">
              <div class=\"blog-single-tags\">
                <ul class=\"list-unstyled list-inline\">
                  <li><span><i class=\"fa fa-tags\"></i> tags:</span></li>
                  ";
                // line 38
                if ((twig_length_filter($this->env, $this->getAttribute($context["key1"], "term", array())) > 0)) {
                    // line 39
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["key1"], "term", array()));
                    foreach ($context['_seq'] as $context["key3"] => $context["value3"]) {
                        // line 40
                        echo "                      <li><a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key3"], "html", null, true));
                        echo "\">#";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["value3"], "html", null, true));
                        echo "</a></li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key3'], $context['value3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                  ";
                }
                // line 43
                echo "                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"blog-single-nav\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
                // line 52
                if ((twig_length_filter($this->env, $this->getAttribute($context["key1"], "nodePrevNavigation", array())) > 0)) {
                    // line 53
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["key1"], "nodePrevNavigation", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["key3"]) {
                        // line 54
                        echo "            <div class=\"prev-post\">
              <div class=\"prev-post-info\">
                <a href=\"";
                        // line 56
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
                        echo "article/";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["key3"], "nid", array()), "html", null, true));
                        echo "/";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["key3"], "title", array()), array(" " => "-")), "html", null, true));
                        echo "\"><i class=\"fa fa-chevron-left\"></i> Prev<span class=\"hide-from-xs\">ious</span> Post</a>
                <h4 class=\"prev-post-title\">";
                        // line 57
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["key3"], "title", array()), "html", null, true));
                        echo "</h4>
              </div>
            </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "          ";
                }
                // line 62
                echo "          </div>
          <div class=\"col-sm-6 text-right\">
            ";
                // line 64
                if ((twig_length_filter($this->env, $this->getAttribute($context["key1"], "nodeNextNavigation", array())) > 0)) {
                    // line 65
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["key1"], "nodeNextNavigation", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["key4"]) {
                        // line 66
                        echo "            <div class=\"next-post\">
              <div class=\"prev-post-info\">
                <a href=\"";
                        // line 68
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
                        echo "article/";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["key4"], "nid", array()), "html", null, true));
                        echo "/";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["key4"], "title", array()), array(" " => "-")), "html", null, true));
                        echo "\">Next<span class=\"hidden-md\"> Post</span> <i class=\"fa fa-chevron-right\"></i></a>
                <h4 class=\"next-post-title\">";
                        // line 69
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["key4"], "title", array()), "html", null, true));
                        echo "</h4>
              </div>
            </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key4'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "            ";
                }
                // line 74
                echo "          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "  ";
        }
        // line 79
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_content/templates/blogPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 79,  229 => 78,  220 => 74,  217 => 73,  207 => 69,  199 => 68,  195 => 66,  190 => 65,  188 => 64,  184 => 62,  181 => 61,  171 => 57,  163 => 56,  159 => 54,  154 => 53,  152 => 52,  141 => 43,  138 => 42,  127 => 40,  122 => 39,  120 => 38,  111 => 31,  108 => 30,  99 => 27,  93 => 25,  88 => 24,  86 => 23,  82 => 22,  71 => 14,  66 => 12,  61 => 10,  53 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/sachlife_content/templates/blogPost.html.twig", "D:\\Sachin\\work\\XAMPP\\htdocs\\sachlife\\modules\\custom\\sachlife_content\\templates\\blogPost.html.twig");
    }
}
