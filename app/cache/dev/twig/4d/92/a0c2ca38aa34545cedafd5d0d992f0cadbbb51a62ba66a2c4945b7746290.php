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
        echo "<div class=\"row\">    
    <div class=\"col-md-6 alpha\">
        <h1>NotaVenta</h1>
        <table class=\" table table-bordered \">
            <tbody>

                <tr>
                    <th>Numero</th>
                    <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numero", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Notas</th>
                    <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notas", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Datos despacho</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datosDespacho", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Fecha de abono</th>
                    ";
        // line 24
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaAbono", array())))) {
            // line 25
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaAbono", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    ";
        } else {
            // line 27
            echo "                        <td>No hay Abono</td>
                    ";
        }
        // line 29
        echo "                </tr>
                <tr>
                    <th>Abono</th>
                    <td>\$";
        // line 32
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abono", array()), 0, ".", "."), "html", null, true);
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
                    <td>\$";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "neto", array()), 0, ".", "."), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Iva</th>
                    <td>\$";
        // line 44
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iva", array()), 0, ".", "."), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>\$";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "total", array()), 0, ".", "."), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Opciones</th>
                    <td>
                        <ul>
                            <li><a class=\"btn btn-default\" role=\"button\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notaventa_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Editar</a>    
                            <li>";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class=\"col-md-6 omega\">
        <h3>Datos Cliente</h3>
        <dl class=\"dl-horizontal\">
   
            <dt>Nombre</dt>
            <dd>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "nombre", array()), "html", null, true);
        echo "</td>

           
            <dt>Rut</dt>
            <dd>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "rut", array()), "html", null, true);
        echo "</dd>
        
            <dt>Direccion</dt>
            <dd>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "direccion", array()), "html", null, true);
        echo "</dd>
         
            <dt>Teléfono</dt>
            <dd>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "telefono", array()), "html", null, true);
        echo "</dd>
        
            <dt>Celular</dt>
            <dd>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "celular", array()), "html", null, true);
        echo "</dd>
       
            <dt>E-mail</dt>
            <dd>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cliente", array()), "email", array()), "html", null, true);
        echo "</dd>

        </dl>
    </div>

    <div class=\" col-md-12\">
        <h2>
            Listado de Pedidos
            <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nv_new_pedido", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg\" role=\"button\">
            Ingresar nuevo Pedido
        </a>
        </h2>        
        
        <table class=\" table table-bordered\">
            <thead>
                <tr>
                    <th>Especie</th>
                    <th>Variedad</th>
                    <th>Cantidad Solicitada</th>
                    <th>Neto</th>
                    <th>Total</th>
                    <th>Fecha despacho</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : $this->getContext($context, "pedidos")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 111
            echo "                <tr>
                    <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "producto", array()), "especie", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "producto", array()), "variedad", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "cantidadSolicitada", array()), "html", null, true);
            echo "</td>
                    <td>\$";
            // line 115
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "neto", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                    <td>\$";
            // line 116
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "total", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                    <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "fechaDespacho", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_show", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("siembra_new", array("idPedido" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">Enviar a siembra</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_edit", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                            </li>
                        </ul>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            </tbody>
        </table>
    </div>
        
    <a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("notaventa");
        echo "\" class=\"btn btn-primary btn-sm col-md-2\" role=\"button\">
        Volver al listado
    </a>

    

</div>
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
        return array (  263 => 137,  257 => 133,  245 => 127,  239 => 124,  233 => 121,  226 => 117,  222 => 116,  218 => 115,  214 => 114,  210 => 113,  206 => 112,  203 => 111,  199 => 110,  178 => 92,  167 => 84,  161 => 81,  155 => 78,  149 => 75,  143 => 72,  136 => 68,  120 => 55,  116 => 54,  107 => 48,  100 => 44,  93 => 40,  86 => 36,  79 => 32,  74 => 29,  70 => 27,  64 => 25,  62 => 24,  55 => 20,  48 => 16,  41 => 12,  31 => 4,  28 => 3,);
    }
}
