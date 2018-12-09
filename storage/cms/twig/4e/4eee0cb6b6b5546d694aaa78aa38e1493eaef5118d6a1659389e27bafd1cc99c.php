<?php

/* C:\xampp\htdocs\acme_oct/themes/acme/pages/about.htm */
class __TwigTemplate_83e963346a834f9332d557d38f36417f558af0b5f1c9c30db30e5da871603c32 extends Twig_Template
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
        echo "<h1>About Us</h1>
<p>This is the about Page</p>
<hr>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme_oct/themes/acme/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>This is the about Page</p>
<hr>", "C:\\xampp\\htdocs\\acme_oct/themes/acme/pages/about.htm", "");
    }
}
