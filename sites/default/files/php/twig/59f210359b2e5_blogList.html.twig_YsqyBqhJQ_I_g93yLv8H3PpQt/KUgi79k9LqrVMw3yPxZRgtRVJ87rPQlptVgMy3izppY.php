<?php

/* modules/custom/sachlife_content/templates/blogList.html.twig */
class __TwigTemplate_2498cf15a45742eefe25c360f12be9f65b2df4e5d36a13a060d9ac255a716d2c extends Twig_Template
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
        $filters = array("length" => 2, "date" => 16, "raw" => 20, "slice" => 20, "replace" => 22);
        $functions = array("file_url" => 7, "url" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'date', 'raw', 'slice', 'replace'),
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 4
                echo "      <div class=\"blog-list-items-wrap\">
        <div class=\"blog-list-item\">
          <a href=\"blog-single-sidebar-right.html\" class=\"bli-image bg-image\"
             style=\"background-image: url(";
                // line 7
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["value"], "headerImage", array()))), "html", null, true));
                echo "); background-position: 50% 27%;\">
          </a>
          <div class=\"bli-info\">
            <h2 class=\"bli-title\">
              <a href=\"blog-single-sidebar-right.html\" title=\"";
                // line 11
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true));
                echo "\">
                ";
                // line 12
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true));
                echo "
              </a>
            </h2>
            <div class=\"bli-meta\">
              <a href=\"\" class=\"article-time\">";
                // line 16
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "created", array()), "d M Y"), "html", null, true));
                echo "</a> - by:
              <a href=\"\" class=\"article-author\">";
                // line 17
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["value"], "author", array()), "html", null, true));
                echo "</a> - in
              <a href=\"\" class=\"article-category\">#black &amp; white</a>
            </div>
            <p class=\"bli-desc\">";
                // line 20
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (twig_slice($this->env, $this->getAttribute($context["value"], "description", array()), 0, 300) . "......"), "html", null, true));
                echo "</p>
            <div class=\"bli-button\">
              <a href=\"";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
                echo "article/";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "/";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["value"], "title", array()), array(" " => "-")), "html", null, true));
                echo "\"
                 class=\"btn btn-dark btn-rounded-5x btn-sm\">Read More</a>
            </div>
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  ";
        }
        // line 30
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_content/templates/blogList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  108 => 29,  91 => 22,  86 => 20,  80 => 17,  76 => 16,  69 => 12,  65 => 11,  58 => 7,  53 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/sachlife_content/templates/blogList.html.twig", "D:\\Sachin\\work\\XAMPP\\htdocs\\sachlife\\modules\\custom\\sachlife_content\\templates\\blogList.html.twig");
    }
}
