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

/* themes/devtron/templates/paragraph/paragraph--views_and_get_in_touch.html.twig */
class __TwigTemplate_99879bee9de98637b8640ba22895e54238f17f9c623ab454ffe947c103db8996 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 1, "render" => 3, "striptags" => 9];
        $functions = ["file_url" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render', 'striptags'],
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
        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_portfolio_view", []), 0, [])), "html", null, true);
        echo "

";
        // line 3
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_url", []), 0, [])))) {
            // line 4
            echo "\t<section class=\"fh5co-section\" id=\"fh5co-workwithus\" style=\"background: #2e2e2e url(";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
            echo ");\">
\t  <div class=\"container\">
\t    <div class=\"fh5co-workwithus-intro\">
\t      <h2>";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
            echo "</h2>
\t      <h3 class=\"has-btn-after\">
           \t  ";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_body", []), 0, [])))), "html", null, true);
            echo "
\t      </h3>
\t      ";
            // line 11
            if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_url", []), 0, [])))) {
                // line 12
                echo "\t        <p><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_url", []), 0, [], "array"), "#url", [], "array"))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-lg btn-uppercase btn-effect\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_url", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                echo " <i class=\"ti-angle-right\"></i></a></p>
\t      ";
            }
            // line 14
            echo "\t    </div>
\t  </div>
\t</section>
 ";
        }
        // line 18
        echo "
";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_blog_view", []), 0, [])), "html", null, true);
        echo "
";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_testimonial_view", []), 0, [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/devtron/templates/paragraph/paragraph--views_and_get_in_touch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  98 => 19,  95 => 18,  89 => 14,  81 => 12,  79 => 11,  74 => 9,  69 => 7,  62 => 4,  60 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/devtron/templates/paragraph/paragraph--views_and_get_in_touch.html.twig", "/var/www/devtrongenesis.com/themes/devtron/templates/paragraph/paragraph--views_and_get_in_touch.html.twig");
    }
}
