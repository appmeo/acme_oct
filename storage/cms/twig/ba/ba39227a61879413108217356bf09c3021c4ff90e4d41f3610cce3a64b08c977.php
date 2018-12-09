<?php

/* C:\xampp\htdocs\acme_oct/themes/acme/pages/home.htm */
class __TwigTemplate_756630ea731928fad696816a7bc2a9010c4c339fff812009e224c91ed4225f80 extends Twig_Template
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
        echo "<h1 class=\"text-center\">Welcome to October Fest</h1>
<div class=\"jumbotron text-center\">
    <h1>Acme October Theme</h1>
    <p>This is the theme of the October Fest Site</p>
    <p> <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\" class=\"btn btn-primary\">Read More</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme_oct/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 class=\"text-center\">Welcome to October Fest</h1>
<div class=\"jumbotron text-center\">
    <h1>Acme October Theme</h1>
    <p>This is the theme of the October Fest Site</p>
    <p> <a href=\"{{ 'about'|page }}\" class=\"btn btn-primary\">Read More</a></p>
</div>", "C:\\xampp\\htdocs\\acme_oct/themes/acme/pages/home.htm", "");
    }
}
