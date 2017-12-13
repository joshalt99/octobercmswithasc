<?php

/* C:\xampp\htdocs\ascwebsite/themes/hambern-hambern-blank-bootstrap-4/pages/movie-single.htm */
class __TwigTemplate_b8d96c5d8ceb370342a9db47ee49263f12c237d6b335755e57ee6b9a2e1c92c3 extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "name", array()), "html", null, true);
            echo "</h2>
        <br>

    <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "poster", array()), "thumb", array(0 => 200, 1 => ($context["auto"] ?? null)), "method"), "html", null, true);
            echo "\" alt=\"\">


    <br>

    <h4>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "year", array()), "html", null, true);
            echo "</h4>

    <br>

    <h3>Description</h3>

    <br>
    ";
            // line 21
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "description", array());
            echo "


    <h3>Gallery</h3>

        <ul class=\"list-group\">
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "movie_gallery", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 28
                echo "
            <li class=\"list-group-item\">

                <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
                echo "\">

                    <div class=\"card\" style=\"width: 20rem;\">
                <img class=\"card-img-top\" src=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array(0 => 80, 1 => 80, 2 => array("mode" => "crop")), "method"), "html", null, true);
                echo "\" alt=\"Card image cap\">

                    </div>
                </a>
            </li>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
        </ul>

        <h3>Genres</h3>

        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "genres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 47
                echo "
            ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["genre"], "genre_title", array()), "html", null, true);
                echo "<br>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "

";
        } else {
            // line 54
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ascwebsite/themes/hambern-hambern-blank-bootstrap-4/pages/movie-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 54,  115 => 51,  106 => 48,  103 => 47,  99 => 46,  92 => 41,  79 => 34,  73 => 31,  68 => 28,  64 => 27,  55 => 21,  45 => 14,  37 => 9,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    <h2>{{ record.name }}</h2>
        <br>

    <img src=\"{{ record.poster.thumb(200,auto) }}\" alt=\"\">


    <br>

    <h4>{{ record.year }}</h4>

    <br>

    <h3>Description</h3>

    <br>
    {{ record.description|raw }}


    <h3>Gallery</h3>

        <ul class=\"list-group\">
            {% for image in record.movie_gallery %}

            <li class=\"list-group-item\">

                <a href=\"{{ image.path }}\">

                    <div class=\"card\" style=\"width: 20rem;\">
                <img class=\"card-img-top\" src=\"{{ image.thumb(80,80, {'mode':'crop'} ) }}\" alt=\"Card image cap\">

                    </div>
                </a>
            </li>

            {% endfor %}

        </ul>

        <h3>Genres</h3>

        {% for genre in record.genres%}

            {{ genre.genre_title }}<br>

        {% endfor %}


{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\ascwebsite/themes/hambern-hambern-blank-bootstrap-4/pages/movie-single.htm", "");
    }
}
