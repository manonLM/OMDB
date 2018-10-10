<?php

/* films/index.html.twig */
class __TwigTemplate_f495b0beb66c98fc0e7bb18da409b813b6b00ab67eddae86b1a545bf742bc409 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "films/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "films/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "films/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


<div class=\"container-fluid\">

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">SYMFONY!</h1>
        <p class=\"lead\">Bonjour et bienvenue dans ce merveilleux monde de Symfony.</p>
        <hr class=\"my-4\">
        <p>Tu vas bien t'amuser!!!!</p>
    </div>



    <div class=\"row\">

        <div class=\"col-md-12\">
            
                <p>Affichage des films</p>
                <ul class=\"card-columns\">
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new Twig_Error_Runtime('Variable "movies" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "                        <a  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("FilmsParametres", array("query" => twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["item"], "Title", array())))), "html", null, true);
            echo "\">
                        <li class=\"list-group-item\" class=\"col-md-2\">
                            <div class=\"card\" style=\"width: 14rem;\">
                                <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Poster", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", array()), "html_attr");
            echo "\"/>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", array()), "html", null, true);
            echo "</h5>
                                </div>
                            </div>
                        </li>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </ul>
            
        </div>  

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "films/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 41,  96 => 35,  89 => 33,  82 => 30,  78 => 29,  53 => 6,  44 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}



{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


<div class=\"container-fluid\">

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">SYMFONY!</h1>
        <p class=\"lead\">Bonjour et bienvenue dans ce merveilleux monde de Symfony.</p>
        <hr class=\"my-4\">
        <p>Tu vas bien t'amuser!!!!</p>
    </div>



    <div class=\"row\">

        <div class=\"col-md-12\">
            
                <p>Affichage des films</p>
                <ul class=\"card-columns\">
                    {% for item in movies %}
                        <a  href=\"{{ url('FilmsParametres' , {'query': item.Title|url_encode}) }}\">
                        <li class=\"list-group-item\" class=\"col-md-2\">
                            <div class=\"card\" style=\"width: 14rem;\">
                                <img src=\"{{item.Poster}}\" title=\"{{ item.Title|escape( 'html_attr')}}\"/>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ item.Title }}</h5>
                                </div>
                            </div>
                        </li>
                        </a>
                    {% endfor %}
                </ul>
            
        </div>  

    </div>
</div>
{% endblock %}
", "films/index.html.twig", "C:\\laragon\\www\\omdb\\OMDB\\my_omdb\\templates\\films\\index.html.twig");
    }
}
