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

/* themes/devtron/templates/paragraph/paragraph--left_right_sidebar.html.twig */
class __TwigTemplate_e19f1aae4f12be9e48a93a095ed3d02b4dda2bb21c6e9398140b2f3596a02261 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "set" => 24];
        $filters = ["escape" => 6, "striptags" => 24, "render" => 24, "length" => 25, "slice" => 25];
        $functions = ["file_url" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'striptags', 'render', 'length', 'slice'],
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sidebar_style", []), 0, [], "array"), "#markup", [], "array") == 0)) {
            // line 2
            echo "<!-- Right-Sidebar -->
<div class=\"container pb-lg\">
\t<div class=\"row\">
\t\t<div class=\"col-md-8\" id=\"fh5co-content\">
\t\t\t<h2>";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
            echo "</h2>
\t\t\t";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_body", []), 0, [])), "html", null, true);
            echo "
\t\t\t<div class=\"row fh5co-tile-image\">
\t\t\t\t";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_gallery", [])), "html", null, true);
            echo "
\t\t\t\t<div class=\"col-md-12 rsb\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
            echo "\">
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\" id=\"fh5co-sidebar\">
\t\t\t<div class=\"fh5co-side-box fh5co-sidebox-links\">
\t\t\t\t";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_blog_view", []), 0, [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<!-- END .fh5co-side-box -->
\t\t\t<div class=\"fh5co-side-box\">
\t\t\t\t<h3 class=\"fh5co-side-title fh5co-heading-uppercase text-left\">Text Widget</h3>\t\t
\t\t\t\t";
            // line 24
            $context["text"] = strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_body", []))));
            // line 25
            echo "\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null))) > 200)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), 0, 170) . "...")) : (($context["text"] ?? null))), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"fh5co-side-box\">
\t\t\t\t<h3 class=\"fh5co-side-title fh5co-heading-uppercase text-left\">Paragraph with Image</h3>\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<img src=\"";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
            echo "\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t";
            // line 36
            $context["text"] = strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_body", []))));
            // line 37
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null))) > 200)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), 0, 170) . "...")) : (($context["text"] ?? null))), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- END .row -->
</div>
<!-- Right-Sidebar End -->
";
        } else {
            // line 47
            echo "<!-- Left-Sidebar -->
<div class=\"container pb-lg\">
\t<div class=\"row\">
\t\t<div class=\"col-md-8 col-md-push-4\" id=\"fh5co-content\">
\t\t\t<h2>";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
            echo "</h2>
\t\t\t";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_body", []), 0, [])), "html", null, true);
            echo "
\t\t\t<div class=\"row fh5co-tile-image\">
\t\t\t\t";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_gallery", [])), "html", null, true);
            echo "
\t\t\t\t<div class=\"col-md-12 rsb\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<img src=\"";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
            echo "\">
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4 col-md-pull-8\" id=\"fh5co-sidebar\">
\t\t\t<div class=\"fh5co-side-box fh5co-sidebox-links\">
\t\t\t\t";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_blog_view", []), 0, [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<!-- END .fh5co-side-box -->
\t\t\t<div class=\"fh5co-side-box\">
\t\t\t\t<h3 class=\"fh5co-side-title fh5co-heading-uppercase text-left\">Text Widget</h3>\t\t
\t\t\t\t";
            // line 69
            $context["text"] = strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_body", []))));
            // line 70
            echo "\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null))) > 200)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), 0, 170) . "...")) : (($context["text"] ?? null))), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"fh5co-side-box\">
\t\t\t\t<h3 class=\"fh5co-side-title fh5co-heading-uppercase text-left\">Paragraph with Image</h3>\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t<figure><img src=\"";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), "#items", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", []), 0, [])), "html", null, true);
            echo "\"></figure>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t";
            // line 81
            $context["text"] = strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_body", []))));
            // line 82
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null))) > 200)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), 0, 170) . "...")) : (($context["text"] ?? null))), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- END .row -->
</div>
<!-- Left-Sidebar End -->

";
        }
    }

    public function getTemplateName()
    {
        return "themes/devtron/templates/paragraph/paragraph--left_right_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 82,  199 => 81,  190 => 77,  179 => 70,  177 => 69,  169 => 64,  157 => 57,  151 => 54,  146 => 52,  142 => 51,  136 => 47,  122 => 37,  120 => 36,  111 => 32,  100 => 25,  98 => 24,  90 => 19,  78 => 12,  72 => 9,  67 => 7,  63 => 6,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/devtron/templates/paragraph/paragraph--left_right_sidebar.html.twig", "/var/www/devtrongenesis.com/themes/devtron/templates/paragraph/paragraph--left_right_sidebar.html.twig");
    }
}
