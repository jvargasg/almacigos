<?php

/* VentaBundle:Pedido:index.html.twig */
class __TwigTemplate_058f1363a42b6776973ddf1595fd1dea441e7913d9136213775b5b99707a6398 extends Twig_Template
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
        echo "<h1>Lista de Pedidos</h1>

    <table class=\"records_list table\">
        <thead>
            <tr>
                <th>Nota de Venta</th>
                <th>Cantidad solicitada</th>
                <th>Neto</th>
                <th>Total</th>
                <th>Fecha de despacho</th>
                <th>Producto</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                ";
            // line 23
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "notaVenta", array()), "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidadSolicitada", array()), "html", null, true);
            echo "</td>
                <td>\$";
            // line 25
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "neto", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                <td>\$";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "total", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["entity"], "fechaDespacho", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaDespacho", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "producto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("siembra_new", array("idPedido" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Enviar a siembra</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pedido_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

        ";
        // line 55
        echo "    ";
    }

    public function getTemplateName()
    {
        return "VentaBundle:Pedido:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 55,  114 => 45,  102 => 39,  96 => 36,  90 => 33,  83 => 29,  79 => 28,  73 => 27,  69 => 26,  65 => 25,  61 => 24,  56 => 23,  53 => 21,  49 => 20,  31 => 4,  28 => 3,);
    }
}
