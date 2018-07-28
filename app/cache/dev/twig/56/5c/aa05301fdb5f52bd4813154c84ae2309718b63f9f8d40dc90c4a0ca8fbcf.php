<?php

/* VentaBundle:NotaVenta:new.html.twig */
class __TwigTemplate_565caa05301fdb5f52bd4813154c84ae2309718b63f9f8d40dc90c4a0ca8fbcf extends Twig_Template
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "\t<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css\">\t
";
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        echo "    
\t<script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
\t<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
    <script>
\t\t\$('.date').datepicker({
            language: 'es',
            startDate: '-100y',            
            dateFormat: 'd/m/yy'
        });
\t</script>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "<div>
\t\t<div class=\"row\">
\t\t    <h1 class=\"col-md-7\">Nueva Nota de Venta</h1>
\t\t\t\t
\t\t\t\t";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t   
\t\t\t    <div class=\"col-md-7\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</div>

\t\t\t    <div class=\"col-md-7\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'row');
        echo "</div>
\t\t\t    <div class=\"col-md-5\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("cliente_new");
        echo "\">Agregar Nuevo Cliente</a></div>
\t\t\t    

\t\t\t    <div class=\"col-md-7\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numero", array()), 'row');
        echo "</div>

\t\t\t    <div class=\"col-md-4\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "condicionVenta", array()), 'row');
        echo "</div>
\t\t\t    

\t\t\t    <div class=\"col-md-4\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abono", array()), 'row');
        echo "</div>
\t\t\t    <div class=\"col-md-4 \">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaAbono", array()), 'row');
        echo "</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-7\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notas", array()), 'row');
        echo "</div>
\t\t\t\t<div class=\"col-md-7\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datosDespacho", array()), 'row');
        echo "</div>

\t\t\t\t<button type=\"submit\" class=\"btn col-md-4 col-md-offset-4 btn-success text-center\">
\t\t            Crear
\t\t        </button>
\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
\t\t\t\t\t\t\t
\t\t</div>
    \t
\t    <ul class=\"record_actions\">
\t\t    <li>
\t\t        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("notaventa");
        echo "\">
\t\t            Volver al listado
\t\t        </a>
\t\t    </li>
\t\t</ul>
        
\t</div>
";
    }

    public function getTemplateName()
    {
        return "VentaBundle:NotaVenta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 51,  115 => 45,  107 => 40,  103 => 39,  98 => 37,  94 => 36,  88 => 33,  83 => 31,  77 => 28,  73 => 27,  68 => 25,  63 => 23,  57 => 19,  54 => 17,  38 => 5,  33 => 3,  30 => 2,);
    }
}
