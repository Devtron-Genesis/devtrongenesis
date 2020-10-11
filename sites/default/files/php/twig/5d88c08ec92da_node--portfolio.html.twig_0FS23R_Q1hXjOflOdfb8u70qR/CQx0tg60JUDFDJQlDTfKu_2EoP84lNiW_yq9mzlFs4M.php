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

/* themes/devtron/templates/node/node--portfolio.html.twig */
class __TwigTemplate_f2e956d8c27a0063295475dfc6833b2409cb02b085d5575c85d3843ad9478328 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 92];
        $filters = ["escape" => 81, "render" => 92];
        $functions = ["file_url" => 86];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
                ['file_url']
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
        // line 75
        echo "        
  <main id=\"fh5co-main\" role=\"main\">
    <div class=\"container pb-lg\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
          <div class=\"fh5co-heading text-center\">
            <h2 class=\"fh5co-heading-uppercase\">";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h2>
            <h3 class=\"fh5co-heading-intro mb-md\">";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "body", []), 0, [], "array")), "html", null, true);
        echo "</h3>
            <div class=\"row\">
              <div class=\"col-md-12 mb-lg\">
                <figure>
                  <img src=\"";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, []), "#item", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\" class=\"img-responsive\">
                </figure>
              </div>
            </div>
            <h2 class=\"fh5co-heading-uppercase\">Share this project</h2>
            <ul class=\"fh5co-social\">
              ";
        // line 92
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook", []), 0, [])))) {
            // line 93
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook", []), 0, [], "array"), "#url", [], "array"))), "html", null, true);
            echo "\"><i class=\"ti-facebook\"></i> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
            echo "</a></li>
              ";
        }
        // line 94
        echo " 
              ";
        // line 95
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_googleplus", []), 0, [])))) {
            // line 96
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_googleplus", []), 0, [], "array"), "#url", [], "array"))), "html", null, true);
            echo "\"><i class=\"ti-facebook\"></i> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_googleplus", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
            echo "</a></li>
              ";
        }
        // line 97
        echo " 
              ";
        // line 98
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_pinterest", []), 0, [])))) {
            // line 99
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_pinterest", []), 0, [], "array"), "#url", [], "array"))), "html", null, true);
            echo "\"><i class=\"ti-google\"></i> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_pinterest", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
            echo "</a></li>
              ";
        }
        // line 100
        echo " 
              ";
        // line 101
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter", []), 0, [])))) {
            // line 102
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter", []), 0, [], "array"), "#url", [], "array"))), "html", null, true);
            echo "\"><i class=\"ti-pinterest\"></i> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
            echo "</a></li>
              ";
        }
        // line 103
        echo " 
            </ul>
          </div>
        </div>  
      </div>
      <!-- END .row -->
    </div>  
    ";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["call_to_action"] ?? null)), "html", null, true);
        echo "
  </main>";
    }

    public function getTemplateName()
    {
        return "themes/devtron/templates/node/node--portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 110,  132 => 103,  124 => 102,  122 => 101,  119 => 100,  111 => 99,  109 => 98,  106 => 97,  98 => 96,  96 => 95,  93 => 94,  85 => 93,  83 => 92,  74 => 86,  67 => 82,  63 => 81,  55 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/devtron/templates/node/node--portfolio.html.twig", "/var/www/devtrongenesis.com/themes/devtron/templates/node/node--portfolio.html.twig");
    }
}
