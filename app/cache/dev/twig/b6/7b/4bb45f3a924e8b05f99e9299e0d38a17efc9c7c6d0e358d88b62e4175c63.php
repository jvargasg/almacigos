<?php

/* ParametrosBundle:FechaSiembra:new.html.twig */
class __TwigTemplate_b67b4bb45f3a924e8b05f99e9299e0d38a17efc9c7c6d0e358d88b62e4175c63 extends Twig_Template
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
    <h1>Fechas de inicio temporadas</h1>

   \t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siembraVerano", array()), 'row');
        echo "</td>
                    <TD>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siembraOtonio", array()), 'row');
        echo "</td>
                    <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siembraInvierno", array()), 'row');
        echo "</td>
                    <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siembraPrimavera", array()), 'row');
        echo "</td>
                </th>
            </tr>
            <TR>
                <TH>Despacho
                    <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "despachoVerano", array()), 'row');
        echo "</td>
                    <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "despachoOtonio", array()), 'row');
        echo "</td>
                    <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "despachoInvierno", array()), 'row');
        echo "</td>
                    <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "despachoPrimavera", array()), 'row');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    
</div>
";
    }

    public function getTemplateName()
    {
        return "ParametrosBundle:FechaSiembra:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  66 => 23,  62 => 22,  57 => 19,  54 => 18,  38 => 6,  33 => 4,  30 => 3,);
    }
}
