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

/* themes/devtron/templates/page/page--404.html.twig */
class __TwigTemplate_9179b62c9518dd20e457fbddc25379d3d90d13006c21ad927887d5f4cd774e3d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 67, "set" => 94, "autoescape" => 152];
        $filters = ["escape" => 65, "render" => 67, "t" => 86, "raw" => 153];
        $functions = ["path" => 85, "url" => 94];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'autoescape'],
                ['escape', 'render', 't', 'raw'],
                ['path', 'url']
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
        // line 59
        echo "<div id=\"top\"></div>
  <div id=\"fh5co-page\">
    <div id=\"fh5co-main-nav-wrap\">
      <nav role=\"navigation\" id=\"fh5co-nav-slide\">
        <div class=\"fh5co-nav-overlay\"></div>
          <div class=\"fh5co-nav-inner\">
            ";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
              <ul class=\"fh5co-social\">
                ";
        // line 67
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 68
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a></li>
                ";
        }
        // line 70
        echo "                ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 71
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a></li>
                ";
        }
        // line 73
        echo "                ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 74
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a></li>
                ";
        }
        // line 75
        echo "  
                ";
        // line 76
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["linkedin_url"] ?? null)))) {
            // line 77
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\"></i></a></li>
                ";
        }
        // line 79
        echo "            </ul>
          </div>  
      </nav>
    </div>    
      <header id=\"fh5co-header\" role=\"banner\" style=\"background: #2e2e2e url(/themes/yg_sprint/images/bg.jpg);\" >
        <div class=\"container\">
          <a href=\"";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\" id=\"fh5co-header-logo\">
            <img src=\"";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
        echo "\">
          </a>
          <a href=\"#\" class=\"fh5co-header-bars js-nav-toggle\"><span>Menu&nbsp;&nbsp;&nbsp;</span></a>
          <h1 class=\"fh5co-header-intro\">";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "#title", [], "array")), "html", null, true);
        echo "</h1>
        </div>
      </header> 
<!-- Navigation End-->

";
        // line 94
        $context["base_url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>");
        // line 95
        echo "<section id=\"not-found-section\" class=\"text-center\">
  <div class=\"container\">               
    <div class=\"row\"> 
      <div class=\"not-found-body\" >
        <div class=\"not-title\" >
          <h1>404</h1>
          <h2>Page Not Found</h2> 
        </div>  
          <h2>Sorry. We can't find a page.</h2>
          <p>The Page you are looking for might have a removed, had its name changed, or its temporarily unavailable.</p>      
          <a href=\"";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
        echo "\" class=\"btn btn-custom\"> Go Home </a>      
      </div>
    </div>          
  </div>    
</section>
 
<footer id=\"fh5co-footer\" role=\"contentinfo\">
        <div class=\"container\">
          <div id=\"fh5co-subscribe\">
            <div class=\"row\">
              <div class=\"col-md-4 col-md-offset-4\">
                ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "email_subscribe", [])), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>        
        <div class=\"container text-center fh5co-social-container\">
          <ul class=\"fh5co-social\">
            ";
        // line 123
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 124
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-facebook\"></i> Facebook</a></li>
            ";
        }
        // line 126
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 127
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-twitter-alt\"></i> Twitter</a></li>
            ";
        }
        // line 129
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["dribbble_url"] ?? null)))) {
            // line 130
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dribbble_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-dribbble\"></i> Dribbble</a></li>
            ";
        }
        // line 132
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["google_plus_url"] ?? null)))) {
            // line 133
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-google\"></i> GooglePlus</a></li>
            ";
        }
        // line 135
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 136
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-instagram\"></i> Instagram</a></li>
            ";
        }
        // line 137
        echo "  
            ";
        // line 138
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["email"] ?? null)))) {
            // line 139
            echo "              <li><a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-email\"></i> Email us</a></li>
            ";
        }
        // line 141
        echo "          </ul>
        </div>
        <div id=\"fh5co-footer-links\">
          <div class=\"container\">
            <div class=\"row\">

              <div class=\"col-md-3 col-sm-3 col-xs-6 col-xxs-12 col-md-offset-1\">
                <h3 class=\"footer-title\">
                  ";
        // line 149
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["about_title"] ?? null)))) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["about_title"] ?? null)), "html", null, true);
        }
        // line 150
        echo "                </h3>
                  ";
        // line 151
        if (($context["about_description"] ?? null)) {
            // line 152
            echo "                    ";
            // line 153
            echo "                      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["about_description"] ?? null)));
            echo "
                    ";
            // line 155
            echo "                  ";
        }
        // line 156
        echo "              </div>
              <div class=\"col-md-2 col-sm-3 col-xs-6 col-xxs-12\">
                <div class=\"footer-links\">
                  ";
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "
                </div>
              </div>
              <div class=\"col-md-2 col-sm-3 col-xs-6 col-xxs-12\">
                ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_latest_blog", [])), "html", null, true);
        echo "
              </div>
            <div class=\"col-md-3 col-sm-3 col-xs-6 col-xxs-12 col-md-offset-1\">
              <h3 class=\"footer-title\">
                ";
        // line 167
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["contact_title"] ?? null)))) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_title"] ?? null)), "html", null, true);
        }
        // line 168
        echo "              </h3>
                <div class=\"footer-links\">
                  <address>
                    ";
        // line 171
        if (($context["address"] ?? null)) {
            // line 172
            echo "                      ";
            // line 173
            echo "                        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["address"] ?? null)));
            echo "
                      ";
            // line 175
            echo "                    ";
        }
        // line 176
        echo "                  </address>
                  <p>";
        // line 177
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["phone"] ?? null)))) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null)), "html", null, true);
        }
        echo "</p>
                  ";
        // line 178
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["email"] ?? null)))) {
            echo "<a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
            echo "</a>";
        }
        // line 179
        echo "                </div>
              </div>
            </div>
          </div>
        </div>
        <div id=\"fh5co-copyright\">
          <div class=\"container\">
            <p class=\"text-center\"><small>&copy; 2018. <a href=\"#\">YG Sprint</a>. All Rights Reserved. Designed by <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a><br>
              Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"http://www.youngglobes.com\" target=\"_blank\">Young Globes</a></small></p>
            <p class=\"text-center\">
              <a href=\"#top\" class=\"smoothscroll back-to-top\"><i class=\"ti-angle-double-up\"></i><span>Top</span></a>
            </p>
          </div>

        </div>
      </footer>

    </div>


";
    }

    public function getTemplateName()
    {
        return "themes/devtron/templates/page/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 179,  306 => 178,  300 => 177,  297 => 176,  294 => 175,  289 => 173,  287 => 172,  285 => 171,  280 => 168,  276 => 167,  269 => 163,  262 => 159,  257 => 156,  254 => 155,  249 => 153,  247 => 152,  245 => 151,  242 => 150,  238 => 149,  228 => 141,  222 => 139,  220 => 138,  217 => 137,  211 => 136,  208 => 135,  202 => 133,  199 => 132,  193 => 130,  190 => 129,  184 => 127,  181 => 126,  175 => 124,  173 => 123,  163 => 116,  149 => 105,  137 => 95,  135 => 94,  127 => 89,  117 => 86,  113 => 85,  105 => 79,  99 => 77,  97 => 76,  94 => 75,  88 => 74,  85 => 73,  79 => 71,  76 => 70,  70 => 68,  68 => 67,  63 => 65,  55 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/devtron/templates/page/page--404.html.twig", "/var/www/devtrongenesis.com/themes/devtron/templates/page/page--404.html.twig");
    }
}
