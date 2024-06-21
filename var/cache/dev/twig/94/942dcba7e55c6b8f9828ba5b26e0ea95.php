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

/* pages/page-01.html.twig */
class __TwigTemplate_c476df1722aed13d31343aa7ba1879a6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/page-01.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/page-01.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Etape index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["histoire"]) || array_key_exists("histoire", $context) ? $context["histoire"] : (function () { throw new RuntimeError('Variable "histoire" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["histoire"]) || array_key_exists("histoire", $context) ? $context["histoire"] : (function () { throw new RuntimeError('Variable "histoire" does not exist.', 7, $this->source); })()), "illustration", [], "any", false, false, false, 7))), "html", null, true);
        echo "\"/>
<h2>Informations sur le livre gratuit</h2>
    <ul>
        <li>Edition:";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["histoire"]) || array_key_exists("histoire", $context) ? $context["histoire"] : (function () { throw new RuntimeError('Variable "histoire" does not exist.', 10, $this->source); })()), "editeur", [], "any", false, false, false, 10), "html", null, true);
        echo "</li>
        <li>Ecriture:";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["histoire"]) || array_key_exists("histoire", $context) ? $context["histoire"] : (function () { throw new RuntimeError('Variable "histoire" does not exist.', 11, $this->source); })()), "auteur", [], "any", false, false, false, 11), "html", null, true);
        echo "</li>
        <li>Illustration:";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["histoire"]) || array_key_exists("histoire", $context) ? $context["histoire"] : (function () { throw new RuntimeError('Variable "histoire" does not exist.', 12, $this->source); })()), "illustrateur", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
        <li>Traduction:";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["histoire"]) || array_key_exists("histoire", $context) ? $context["histoire"] : (function () { throw new RuntimeError('Variable "histoire" does not exist.', 13, $this->source); })()), "traducteur", [], "any", false, false, false, 13), "html", null, true);
        echo "</li>
    </ul>
       <h3>information sur les pages</h3>
   <ul>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["histoire"]) || array_key_exists("histoire", $context) ? $context["histoire"] : (function () { throw new RuntimeError('Variable "histoire" does not exist.', 17, $this->source); })()), "pages", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo " 
 
        <li><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_histoire_page", ["idHistoire" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "histoire", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "numPage" => twig_get_attribute($this->env, $this->source, $context["page"], "numPage", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "texte", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></li>
          
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_histoire_page", ["idHistoire" => twig_get_attribute($this->env, $this->source, (isset($context["histoire"]) || array_key_exists("histoire", $context) ? $context["histoire"] : (function () { throw new RuntimeError('Variable "histoire" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "numPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["histoire"]) || array_key_exists("histoire", $context) ? $context["histoire"] : (function () { throw new RuntimeError('Variable "histoire" does not exist.', 24, $this->source); })()), "getFirstPage", [], "any", false, false, false, 24), "numPage", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">Lire la suite</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/page-01.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 24,  122 => 23,  111 => 20,  107 => 18,  103 => 17,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  78 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Etape index{% endblock %}

{% block body %}
    <h1>{{ histoire.titre }}</h1>
        <img src=\"{{ asset('images/'~histoire.illustration) }}\"/>
<h2>Informations sur le livre gratuit</h2>
    <ul>
        <li>Edition:{{histoire.editeur}}</li>
        <li>Ecriture:{{histoire.auteur}}</li>
        <li>Illustration:{{histoire.illustrateur}}</li>
        <li>Traduction:{{histoire.traducteur}}</li>
    </ul>
       <h3>information sur les pages</h3>
   <ul>
{% for page in histoire.pages %}
 
 
        <li><a href=\"{{path('app_histoire_page',{'idHistoire':page.histoire.id,'numPage':page.numPage}) }}\">{{page.texte}}</a></li>
          
{% endfor %}
</ul>
    <a href=\"{{path('app_histoire_page',{idHistoire:histoire.id,'numPage':histoire.getFirstPage.numPage}) }}\">Lire la suite</a>
{% endblock %}", "pages/page-01.html.twig", "/home/steven/tp2-histoire/templates/pages/page-01.html.twig");
    }
}
