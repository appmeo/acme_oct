<?php

/* C:\xampp\htdocs\acme_oct/themes/acme/partials/header.htm */
class __TwigTemplate_39674a6c718e161d8742e98915313162ef9a304b2f8bd271fe1edf72461daf86 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4\">
  <div class=\"container\">
  <a class=\"navbar-brand\" href=\"#\">Acme_Oct</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-iteme\">
        <a class=\"nav-link ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About Us</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
      </li>
    </ul>
  </div>
</div >
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme_oct/themes/acme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  54 => 16,  44 => 13,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-4\">
  <div class=\"container\">
  <a class=\"navbar-brand\" href=\"#\">Acme_Oct</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-iteme\">
        <a class=\"nav-link {% if this.page.id == 'home' %}active{% endif %}\" href=\"{{ 'home'|page }}\">Home</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link {% if this.page.id == 'about' %}active{% endif %}\" href=\"{{ 'about'|page }}\">About Us</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link {% if this.page.id == 'contact' %}active{% endif %}\" href=\"{{ 'contact'|page }}\">Contact</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link {% if this.page.id == 'blog' %}active{% endif %}\" href=\"{{ 'blog'|page }}\">Blog</a>
      </li>
    </ul>
  </div>
</div >
</nav>", "C:\\xampp\\htdocs\\acme_oct/themes/acme/partials/header.htm", "");
    }
}
