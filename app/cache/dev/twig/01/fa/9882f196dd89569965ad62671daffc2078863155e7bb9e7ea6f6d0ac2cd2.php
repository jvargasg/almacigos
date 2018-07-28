<?php

/* ParametrosBundle:FechaSiembra:edit.html.twig */
class __TwigTemplate_01fa9882f196dd89569965ad62671daffc2078863155e7bb9e7ea6f6d0ac2cd2 extends Twig_Template
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
            dateFormat: 'd/m/yy'
        });
\t</script>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"row\">
    <h1>FechaSiembra edit</h1>

    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

\t<TABLE class=\"records_list table table-bordered\">
        
    <TR>
        <TH rowspan=\"2\">
            
            <TR>
                <TH>Verano</th>
                <TH>Otoño</th>
                <th>Invierno</th>
                <th>Primavera</th>
            </tr>

            <TR>
                <TH>Siembra
                    <TD>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "siembraVerano", array()), 'row');
        echo "</td>
                    <TD>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "siembraOtonio", array()), 'row');
        echo "</td>
                    <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "siembraInvierno", array()), 'row');
        echo "</td>
                    <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "siembraPrimavera", array()), 'row');
        echo "</td>
                </th>
            </tr>
            <TR>
                <TH>Despacho
                    <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "despachoVerano", array()), 'row');
        echo "</td>
                    <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "despachoOtonio", array()), 'row');
        echo "</td>
                    <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "despachoInvierno", array()), 'row');
        echo "</td>
                    <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "despachoPrimavera", array()), 'row');
        echo "</td>
                </th>
            </tr>

        </th>
    </TABLE>
    <button type=\"submit\" class=\"btn col-md-4 col-md-offset-4 btn-success text-center\">
        Guardar fechas
    </button>
\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'row');
        echo "
</div>
<div class=\"row\">
    <ul class=\"record_actions\">
\t    <li>
\t        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("fechasiembra");
        echo "\">
\t            Volver
\t        </a>
\t    </li>
\t    <li>";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "ParametrosBundle:FechaSiembra:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 68,  137 => 64,  129 => 59,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  66 => 23,  62 => 22,  57 => 19,  54 => 18,  38 => 6,  33 => 4,  30 => 3,);
    }
}
