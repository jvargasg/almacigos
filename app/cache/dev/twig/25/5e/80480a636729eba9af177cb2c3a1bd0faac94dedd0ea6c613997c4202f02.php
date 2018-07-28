<?php

/* SiembraBundle:Siembra:new.html.twig */
class __TwigTemplate_255e80480a636729eba9af177cb2c3a1bd0faac94dedd0ea6c613997c4202f02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css\">\t
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        echo "    
\t<script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
\t<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
    <script>
\t\t\$('.date').datepicker({
            language: 'es',
            startDate: '-100y',            
            dateFormat: 'd/m/Y'
        });
\t</script>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"row\">
    <h1>Generación de Siembra</h1>

    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t   
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"col-md-4  col-md-offset-1\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siembra", array()), 'row');
        echo "</div>
    <div class=\"col-md-2  col-md-offset-1\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bandeja", array()), 'row');
        echo "</div>
    <div class=\"col-md-4  col-md-offset-3\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dias", array()), 'row');
        echo "</div>
</div>
<div class=\"row\">
\t<button type=\"submit\" class=\"btn col-md-3 col-md-offset-3 btn-success text-center\">
        Crear
    </button>
\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
</div>
<div class=\"row\">
    <ul class=\"record_actions\">
\t    <li>
\t        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("siembra");
        echo "\">
\t            Volver al listado
\t        </a>
\t    </li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "SiembraBundle:Siembra:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  89 => 34,  80 => 28,  76 => 27,  72 => 26,  67 => 24,  62 => 22,  57 => 19,  54 => 18,  38 => 6,  33 => 4,  30 => 3,);
    }
}
