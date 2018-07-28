<?php

/* VentaBundle:NotaVenta:show.html.twig */
class __TwigTemplate_4d92a0c2ca38aa34545cedafd5d0d992f0cadbbb51a62ba66a2c4945b7746290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>NotaVenta</h1>

    <table class=\"record_properties table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Notas</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datos despacho</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datosDespacho", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechaabono</th>
                ";
        // line 26
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaAbono", array())))) {
            // line 27
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaAbono", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                ";
        }
        // line 29
        echo "            </tr>
            <tr>
                <th>Abono</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha emision</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaEmision", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Neto</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "neto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iva</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iva", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "total", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nv_new_pedido", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Ingresar Pedido
            </a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("notaventa");
        echo "\">
                Volver al listado
            </a>
        </li>
        <li>
            <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notaventa_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Editar
            </a>
        </li>
        <li>";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "VentaBundle:NotaVenta:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  134 => 65,  126 => 60,  118 => 55,  108 => 48,  101 => 44,  94 => 40,  87 => 36,  80 => 32,  75 => 29,  69 => 27,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
