<?php

/* C:\xampp\htdocs\acme_oct/themes/acme/layouts/default.htm */
class __TwigTemplate_5a891992a318a2a3e673ad595b16e23d5811584475b1676bf68d129f4c21fb4b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Acme - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo " \">
    ";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 9
        echo "    
</head>
<body>
    <header>
        ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    </header>
    
    <div class=\"container\">
        ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "    </div>
    
    <footer>
          <p class=\"text-center\">Copyright &copy; 2018 BenZen</p>
    </footer>
    
    <script src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
     <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
      <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme_oct/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  70 => 25,  66 => 24,  58 => 18,  56 => 17,  51 => 14,  47 => 13,  41 => 9,  38 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Acme - {{this.page.title}}</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css'|theme }} \">
    {% styles %}
    
</head>
<body>
    <header>
        {% partial 'header' %}
    </header>
    
    <div class=\"container\">
        {% page %}
    </div>
    
    <footer>
          <p class=\"text-center\">Copyright &copy; 2018 BenZen</p>
    </footer>
    
    <script src=\"{{'assets/vendor/jquery.js'|theme}}\"></script>
     <script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"></script>
      <script src=\"{{'assets/javascript/app.js'|theme}}\"></script>
        
</body>
</html>", "C:\\xampp\\htdocs\\acme_oct/themes/acme/layouts/default.htm", "");
    }
}
