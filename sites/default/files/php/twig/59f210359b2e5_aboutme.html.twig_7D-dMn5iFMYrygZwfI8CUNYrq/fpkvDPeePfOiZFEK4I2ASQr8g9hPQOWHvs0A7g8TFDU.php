<?php

/* modules/custom/sachlife_content/templates/aboutme.html.twig */
class __TwigTemplate_ed08e0d8801e29d25b00b8b5884e230da2667dde7db02e6e1d949217fdd0bed2 extends Twig_Template
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
        $tags = array("for" => 1);
        $filters = array("raw" => 22);
        $functions = array("file_url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array('raw'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 2
            echo "<section id=\"page-header-secion\" class=\"alter-heading\">
  <div class=\"page-header-image parallax bg-image\" style=\"background-image: url(";
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["value"], "header_img", array()))), "html", null, true));
            echo "); background-position: 50% 70%;\"></div>
  <div class=\"cover page-header-cover\"></div>
  <div class=\"container page-header-content no-padding max-width-800 text-center\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"album-title\">About Me</h1>
      </div>
    </div> <!-- /.row -->
  </div>
</section>
<section id=\"content-section\" class=\"page page-about-me\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"content-wrap\">
          <div class=\"row\">
            <div class=\"col-md-8\">
              <h3>";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true));
            echo "</h3>
              <h6>";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["value"], "interest", array()), "html", null, true));
            echo "</h6>
              ";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["value"], "description", array())));
            echo "
              <div class=\"social-icons margin-top-40 margin-bottom-30\">
                <h6 class=\"head\">Find me on:</h6>
                <ul>
                  ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["value"], "social", array()));
            foreach ($context['_seq'] as $context["keySocial"] => $context["valueSocial"]) {
                // line 27
                echo "                  <li>
                    <a target=\"_blank\" href=\"";
                // line 28
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["valueSocial"], "link", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["valueSocial"], "title", array()), "html", null, true));
                echo "\">
                      <i class=\"fa ";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["valueSocial"], "linkClass", array()), "html", null, true));
                echo "\"></i></a>
                  </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keySocial'], $context['valueSocial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </ul>
              </div>
            </div>
            <div class=\"col-md-4\">
              <img src=\"";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["value"], "profile_img", array()))), "html", null, true));
            echo "\" alt=\"image\">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_content/templates/aboutme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  107 => 32,  98 => 29,  92 => 28,  89 => 27,  85 => 26,  78 => 22,  74 => 21,  70 => 20,  50 => 3,  47 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/sachlife_content/templates/aboutme.html.twig", "D:\\Sachin\\work\\XAMPP\\htdocs\\sachlife\\modules\\custom\\sachlife_content\\templates\\aboutme.html.twig");
    }
}
