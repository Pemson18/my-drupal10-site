<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/test/templates/page/page.html.twig */
class __TwigTemplate_3997228fccbabeeb7a668bc1fa792d0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer1' => [$this, 'block_footer1'],
            'footer2' => [$this, 'block_footer2'],
            'footer3' => [$this, 'block_footer3'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $context["page_classes"] = twig_array_merge([0 => "py-5"], ((        // line 9
($context["page_utility_classes"] ?? null)) ? (($context["page_utility_classes"] ?? null)) : ([])));
        // line 10
        echo "
<div class=\"page\">
  ";
        // line 12
        $this->loadTemplate("themes/custom/test/templates/page/page.html.twig", "themes/custom/test/templates/page/page.html.twig", 12, "476491566")->display(twig_array_merge($context, ["container" => "fixed", "color" => "light", "utility_classes" => [0 => "bg-light"]]));
        // line 40
        echo "
  <main";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["page_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 43
        echo "
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 44)) {
            // line 45
            echo "      <header class=\"page__header mb-3\">
        <div class=\"container\">
          ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
        </div>
      </header>
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 52)) {
            // line 53
            echo "      <div class=\"page__content\">
        <div class=\"container\">
          ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 59
        echo "  </main>

    <footer class=\"page__footer\">
      <div class=\"container-fluid p-3 row\">
        
    ";
        // line 64
        $this->displayBlock('footer1', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('footer2', $context, $blocks);
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('footer3', $context, $blocks);
        // line 87
        echo "      </div>
    </footer>
</div>
";
    }

    // line 64
    public function block_footer1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 65)) {
            // line 66
            echo "      <div class=\"d-flex justify-content-end border-right border-dark col-6\">
        ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 70
        echo "    ";
    }

    // line 72
    public function block_footer2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 73)) {
            // line 74
            echo "        <div class=\"col-3 border-right border-dark\">
          ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 78
        echo "    ";
    }

    // line 80
    public function block_footer3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 81)) {
            // line 82
            echo "\t<div class=\"col-3 \">
\t  ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
\t</div>
      ";
        }
        // line 86
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/test/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 86,  166 => 83,  163 => 82,  160 => 81,  156 => 80,  152 => 78,  146 => 75,  143 => 74,  140 => 73,  136 => 72,  132 => 70,  126 => 67,  123 => 66,  120 => 65,  116 => 64,  109 => 87,  107 => 80,  104 => 79,  102 => 72,  99 => 71,  97 => 64,  90 => 59,  83 => 55,  79 => 53,  77 => 52,  74 => 51,  67 => 47,  63 => 45,  61 => 44,  58 => 43,  54 => 41,  51 => 40,  49 => 12,  45 => 10,  43 => 9,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/test/templates/page/page.html.twig", "/var/www/html/web/themes/custom/test/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "embed" => 12, "if" => 44, "block" => 64);
        static $filters = array("merge" => 9, "escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed', 'if', 'block'],
                ['merge', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}


/* themes/custom/test/templates/page/page.html.twig */
class __TwigTemplate_3997228fccbabeeb7a668bc1fa792d0f___476491566 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@radix/navbar/navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@radix/navbar/navbar.twig", "themes/custom/test/templates/page/page.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 19)) {
            // line 20
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 22
        echo "    ";
    }

    // line 24
    public function block_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 25)) {
            // line 26
            echo "        <div class=\"me-auto\">
          ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 30
        echo "    ";
    }

    // line 32
    public function block_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 33)) {
            // line 34
            echo "\t<div class=\"ms-auto\">
\t  ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
\t</div>
      ";
        }
        // line 38
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/test/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 38,  307 => 35,  304 => 34,  301 => 33,  297 => 32,  293 => 30,  287 => 27,  284 => 26,  281 => 25,  277 => 24,  273 => 22,  267 => 20,  264 => 19,  260 => 18,  249 => 12,  172 => 86,  166 => 83,  163 => 82,  160 => 81,  156 => 80,  152 => 78,  146 => 75,  143 => 74,  140 => 73,  136 => 72,  132 => 70,  126 => 67,  123 => 66,  120 => 65,  116 => 64,  109 => 87,  107 => 80,  104 => 79,  102 => 72,  99 => 71,  97 => 64,  90 => 59,  83 => 55,  79 => 53,  77 => 52,  74 => 51,  67 => 47,  63 => 45,  61 => 44,  58 => 43,  54 => 41,  51 => 40,  49 => 12,  45 => 10,  43 => 9,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/test/templates/page/page.html.twig", "/var/www/html/web/themes/custom/test/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
