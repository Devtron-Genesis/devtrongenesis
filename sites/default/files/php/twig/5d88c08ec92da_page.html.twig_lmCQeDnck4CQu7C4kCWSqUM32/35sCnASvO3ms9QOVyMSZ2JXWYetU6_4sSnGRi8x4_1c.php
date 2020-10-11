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

/* themes/devtron/templates/page.html.twig */
class __TwigTemplate_9314bd08cbd3a64aa7837e101c4a0c850a9b46f6cae416438bc78be1df7ab207 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10];
        $filters = ["escape" => 8, "render" => 10, "t" => 33];
        $functions = ["path" => 32];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render', 't'],
                ['path']
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
        echo "\t<div id=\"top\"></div>
\t\t<div id=\"fh5co-page\">

\t\t\t<div id=\"fh5co-main-nav-wrap\">
\t\t\t\t<nav role=\"navigation\" id=\"fh5co-nav-slide\">
\t\t\t\t\t<div class=\"fh5co-nav-overlay\"></div>
\t\t\t\t\t\t<div class=\"fh5co-nav-inner\">
\t\t\t\t\t\t\t";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t\t\t";
        // line 10
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 11
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t\t\t\t\t\t";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 14
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t\t\t\t\t";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 17
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 18
        echo "  
\t\t\t\t\t\t\t\t\t";
        // line 19
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["linkedin_url"] ?? null)))) {
            // line 20
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>  
\t\t\t\t</nav>
\t\t\t</div>    
\t\t
\t\t\t<header id=\"fh5co-header\" role=\"banner\" style=\"background: #2e2e2e url(../themes/yg_sprint/images/bg.jpg);\" >
\t\t\t\t<div>
\t\t\t\t\t  <!-- new navigation menu -->
\t\t\t        <div class=\"new_extanded_navigation_menu\">
\t\t\t            <div class=\"col-md-2 col-sm-12\">
\t\t\t              \t<a href=\"";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\" id=\"fh5co-header-logo\">
\t\t\t                    <img src=\"";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
        echo "\">
\t\t\t                </a>
\t\t\t            </div>
\t\t\t            <div class=\"col-md-10 col-sm-12\">
\t\t\t              ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "first_nevbar", [])), "html", null, true);
        echo "
\t\t\t            </div>
\t\t\t        </div>

\t\t\t\t\t
\t\t\t\t\t<a href=\"#\" class=\"fh5co-header-bars js-nav-toggle\"><span>Menu&nbsp;&nbsp;&nbsp;</span></a>
\t\t\t\t\t<h1 class=\"fh5co-header-intro\">";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "#title", [], "array")), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</header> 
\t\t\t<!-- /fh5co-header -->
\t\t\t<main id=\"fh5co-main\" role=\"main\">
\t\t\t\t";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t\t\t</main>
\t\t\t<footer id=\"fh5co-footer\" role=\"contentinfo\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div id=\"fh5co-subscribe\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "email_subscribe", [])), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>        
\t\t\t\t
\t\t\t\t<div id=\"fh5co-copyright\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<p class=\"text-center scroll-totop-main scroll-none-front\">
\t\t\t\t\t\t\t<a href=\"#top\" class=\"smoothscroll back-to-top\"><i class=\"ti-angle-double-up\"></i><span>Top</span></a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t              <div class=\"col-md-4 col-lg-4 footer-lang-switcher\"> ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "language_switcher_footer", [])), "html", null, true);
        echo "</div>
\t\t\t              <div class=\"col-md-4 col-lg-4 copy-right-main\">
\t\t\t                <p class=\"text-center chech\"><small>&copy; 2019. </small><a href=\"#\">Devtron Genesis</a>. All Rights Reserved.</p> 
\t\t\t              </div>
\t\t\t              <div class=\"col-md-4 col-lg-4\"> 
\t\t\t                <div class=\"text-center fh5co-social-container socail-none-front\">
\t\t\t                  <ul class=\"fh5co-social\">
\t\t\t                    ";
        // line 74
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 75
            echo "\t\t\t                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-facebook\"></i> Facebook</a></li>
\t\t\t                    ";
        }
        // line 77
        echo "\t\t\t                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 78
            echo "\t\t\t                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-twitter-alt\"></i> Twitter</a></li>
\t\t\t                    ";
        }
        // line 80
        echo "\t\t\t                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["dribbble_url"] ?? null)))) {
            // line 81
            echo "\t\t\t                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dribbble_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-dribbble\"></i> Dribbble</a></li>
\t\t\t                    ";
        }
        // line 83
        echo "\t\t\t                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["google_plus_url"] ?? null)))) {
            // line 84
            echo "\t\t\t                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-google\"></i> GooglePlus</a></li>
\t\t\t                    ";
        }
        // line 86
        echo "\t\t\t                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 87
            echo "\t\t\t                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-instagram\"></i> Instagram</a></li>
\t\t\t                    ";
        }
        // line 89
        echo "\t\t\t                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["linkedin_url"] ?? null)))) {
            // line 90
            echo "                      \t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\"></i> Linkedin</a></li>
                    \t\t\t";
        }
        // line 91
        echo "  
\t\t\t                    ";
        // line 92
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["email"] ?? null)))) {
            // line 93
            echo "\t\t\t                      <li><a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-email\"></i> Email us</a></li>
\t\t\t                    ";
        }
        // line 95
        echo "\t\t\t                  </ul>
\t\t\t                </div>
\t\t\t              </div>
\t\t\t            </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>

\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "themes/devtron/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 95,  243 => 93,  241 => 92,  238 => 91,  232 => 90,  229 => 89,  223 => 87,  220 => 86,  214 => 84,  211 => 83,  205 => 81,  202 => 80,  196 => 78,  193 => 77,  187 => 75,  185 => 74,  175 => 67,  160 => 55,  150 => 48,  142 => 43,  133 => 37,  122 => 33,  118 => 32,  106 => 22,  100 => 20,  98 => 19,  95 => 18,  89 => 17,  86 => 16,  80 => 14,  77 => 13,  71 => 11,  69 => 10,  64 => 8,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/devtron/templates/page.html.twig", "/var/www/devtrongenesis.com/themes/devtron/templates/page.html.twig");
    }
}
