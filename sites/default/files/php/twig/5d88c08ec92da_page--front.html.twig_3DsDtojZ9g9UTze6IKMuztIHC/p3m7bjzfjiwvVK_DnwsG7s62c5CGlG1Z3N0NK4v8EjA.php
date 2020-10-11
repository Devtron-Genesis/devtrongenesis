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

/* themes/devtron/templates/page--front.html.twig */
class __TwigTemplate_02db8195f96ebd0d9cf96087c6df433d90ba11cb19190a5f0bf6d28e3598b6ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 11];
        $filters = ["escape" => 9, "render" => 11, "t" => 34];
        $functions = ["path" => 33];

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
        echo "  <div id=\"top\"></div>
    <div id=\"fh5co-page\">
     

      <div id=\"fh5co-main-nav-wrap\">
        <nav role=\"navigation\" id=\"fh5co-nav-slide\">
          <div class=\"fh5co-nav-overlay\"></div>
            <div class=\"fh5co-nav-inner\">
              ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
                <ul class=\"fh5co-social\">
                  ";
        // line 11
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 12
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a></li>
                  ";
        }
        // line 14
        echo "                  ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 15
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a></li>
                  ";
        }
        // line 17
        echo "                  ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 18
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a></li>
                  ";
        }
        // line 19
        echo "  
                  ";
        // line 20
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["linkedin_url"] ?? null)))) {
            // line 21
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\"></i></a></li>
                  ";
        }
        // line 23
        echo "              </ul>
            </div>  
        </nav>
      </div>    
    
      <header id=\"fh5co-header\" role=\"banner\" style=\"background: #2e2e2e url(../themes/yg_sprint/images/bg.jpg);\">
        <div> 
           <!-- new navigation menu -->
          <div class=\"new_extanded_navigation_menu\">
            <div class=\"col-md-2 col-sm-12\">
              <a href=\"";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\" id=\"fh5co-header-logo\">
                <img src=\"";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
        echo "\">
              </a>
            </div>
            <div class=\"col-md-10 col-sm-12\">
              ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "first_nevbar", [])), "html", null, true);
        echo "
            </div>
          </div>

          <a href=\"#\" class=\"fh5co-header-bars js-nav-toggle\"><span>Menu&nbsp;&nbsp;&nbsp;</span></a>
          <h1 class=\"fh5co-header-intro\">Devtron Genesis is a house of quality web development.</h1>
        </div>
      </header> 
      <!-- /fh5co-header -->
      <main id=\"fh5co-main\" role=\"main\">
         ";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </main>
      <footer id=\"fh5co-footer\" role=\"contentinfo\">
        <div class=\"container\">
          <div id=\"fh5co-subscribe\">
            <div class=\"row\">
              <div class=\"col-md-4 col-md-offset-4\">
                ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "email_subscribe", [])), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>        
        <div id=\"fh5co-copyright\">
          <div class=\"container\">
            <p class=\"text-center scroll-totop-main\">
              <a href=\"#top\" class=\"smoothscroll back-to-top\"><i class=\"ti-angle-double-up\"></i><span>Top</span></a>
            </p>
              <div class=\"row\">
              <div class=\"col-md-4 col-lg-4 footer-lang-switcher\"> ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "language_switcher_footer", [])), "html", null, true);
        echo "</div>
              <div class=\"col-md-4 col-lg-4 copy-right-main\">
                <p class=\"text-center chech\"><small>&copy; 2019. </small><a href=\"#\">Devtron Genesis</a>. All Rights Reserved.</p> 
              </div>
              <div class=\"col-md-4 col-lg-4\"> 
                <div class=\"text-center fh5co-social-container\">
                  <ul class=\"fh5co-social\">
                    ";
        // line 73
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 74
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-facebook\"></i> Facebook</a></li>
                    ";
        }
        // line 76
        echo "                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 77
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-twitter-alt\"></i> Twitter</a></li>
                    ";
        }
        // line 79
        echo "                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["dribbble_url"] ?? null)))) {
            // line 80
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dribbble_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-dribbble\"></i> Dribbble</a></li>
                    ";
        }
        // line 82
        echo "                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["google_plus_url"] ?? null)))) {
            // line 83
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-google\"></i> GooglePlus</a></li>
                    ";
        }
        // line 85
        echo "                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 86
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-instagram\"></i> Instagram</a></li>
                    ";
        }
        // line 88
        echo "                    ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["linkedin_url"] ?? null)))) {
            // line 89
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\"></i> Linkedin</a></li>
                    ";
        }
        // line 90
        echo "  
                    ";
        // line 91
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["email"] ?? null)))) {
            // line 92
            echo "                      <li><a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
            echo "\"><i class=\"ti-email\"></i> Email us</a></li>
                    ";
        }
        // line 94
        echo "                  </ul>
                </div>
              </div>
            </div>
            
          </div>

        </div>
      </footer>

    </div>

";
    }

    public function getTemplateName()
    {
        return "themes/devtron/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 94,  239 => 92,  237 => 91,  234 => 90,  228 => 89,  225 => 88,  219 => 86,  216 => 85,  210 => 83,  207 => 82,  201 => 80,  198 => 79,  192 => 77,  189 => 76,  183 => 74,  181 => 73,  171 => 66,  157 => 55,  147 => 48,  134 => 38,  123 => 34,  119 => 33,  107 => 23,  101 => 21,  99 => 20,  96 => 19,  90 => 18,  87 => 17,  81 => 15,  78 => 14,  72 => 12,  70 => 11,  65 => 9,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/devtron/templates/page--front.html.twig", "/var/www/devtrongenesis.com/themes/devtron/templates/page--front.html.twig");
    }
}
