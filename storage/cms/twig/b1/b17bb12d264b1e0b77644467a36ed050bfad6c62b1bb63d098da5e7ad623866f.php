<?php

/* C:\xampp\htdocs\ascwebsite/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_bce53a749995648b6aa6668fa35ed8559fab8174bef8394fdad6b506251b8f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage");
        echo "\">ASC</a>

\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 7
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "homepage")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage");
        echo "\">Home</a>
\t\t\t\t</li>


\t\t\t\t<li class=\"nav-item";
        // line 12
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "movies")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("movies");
        echo "\">Movies</a>
\t\t\t\t</li>


\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ascwebsite/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  41 => 12,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"m-b-3\">
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'homepage'|page }}\">ASC</a>

\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'homepage' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'homepage'|page }}\">Home</a>
\t\t\t\t</li>


\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'movies' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'movies'|page }}\">Movies</a>
\t\t\t\t</li>


\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "C:\\xampp\\htdocs\\ascwebsite/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
