<?php

/* modules/custom/sachlife_content/templates/recentposts.html.twig */
class __TwigTemplate_63420c0d6b4c7c8f2f4489ee0f009a03c4d227619081fd4a142073dd5e4ff9b5 extends Twig_Template
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
        $tags = array("if" => 6, "for" => 7);
        $filters = array("length" => 6, "replace" => 11, "date" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'replace', 'date'),
                array()
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
        echo "<div class=\"col-md-12 col-sm-6\">
  <div class=\"sidebar-widget sidebar-post-list\">
    <h3 class=\"sidebar-heading\">Recent Posts</h3>
    <hr class=\"hr-short\">
    <ul class=\"list-unstyled\">
      ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : null)) > 0)) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 8
                echo "          <li>
            <div class=\"post-data\">
              <h5 class=\"post-title\">
                <a href=\"/article/";
                // line 11
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["key"], "nid", array()), "html", null, true));
                echo "/";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["key"], "title", array()), array(" " => "-")), "html", null, true));
                echo "\">
                  ";
                // line 12
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["key"], "title", array()), "html", null, true));
                echo "
                </a>
              </h5>
              <span class=\"author\">By: <a href=\"\">
              ";
                // line 16
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["key"], "firstName", array()), "html", null, true));
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["key"], "lastName", array()), "html", null, true));
                echo "</a>
          </span>
              <span class=\"date\">";
                // line 18
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["key"], "created", array()), "d M Y"), "html", null, true));
                echo "</span>
            </div>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      ";
        }
        // line 23
        echo "    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_content/templates/recentposts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  92 => 22,  82 => 18,  75 => 16,  68 => 12,  62 => 11,  57 => 8,  52 => 7,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/sachlife_content/templates/recentposts.html.twig", "D:\\Sachin\\work\\XAMPP\\htdocs\\sachlife\\modules\\custom\\sachlife_content\\templates\\recentposts.html.twig");
    }
}
