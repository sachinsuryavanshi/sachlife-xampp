<?php

/* themes/custom/sachlife/templates/portfolio/page--portfolio.html.twig */
class __TwigTemplate_38121f13b479acb6ff5d97e844216f0cdc4131b2dd98bd82c97e447d3b3efd6c extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preloader", array()), "html", null, true));
        echo "
<header id=\"header\" class=\"fixed-top\">
  <div class=\"header-inner\">
    ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_1", array()), "html", null, true));
        echo "
    <nav class=\"navbar navbar-default\">
      ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_2", array()), "html", null, true));
        echo "
    </nav>
  </div>
</header>
<nav id=\"cd-lateral-nav\">
  ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "side_bar", array()), "html", null, true));
        echo "
</nav>
<div id=\"body-content\">
  <section id=\"page-header-secion\" class=\"alter-heading\">
    ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "headerImage", array()), "html", null, true));
        echo "
    <div class=\"cover page-header-cover\"></div>
    <div class=\"container-fluid page-header-content no-padding text-center\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h1 class=\"album-title\">";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "heading", array()), "html", null, true));
        echo "</h1>
        </div>
      </div>
    </div>
  </section>
  ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
  <footer id=\"footer\">
    <div class=\"footer-inner\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array()), "html", null, true));
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array()), "html", null, true));
        echo "
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<a href=\"#body\" class=\"scrolltoztop sm-scroll\"><i class=\"fa fa-chevron-up\"></i></a>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sachlife/templates/portfolio/page--portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  94 => 31,  85 => 25,  77 => 20,  69 => 15,  62 => 11,  54 => 6,  49 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sachlife/templates/portfolio/page--portfolio.html.twig", "D:\\Sachin\\work\\XAMPP\\htdocs\\sachlife\\themes\\custom\\sachlife\\templates\\portfolio\\page--portfolio.html.twig");
    }
}
