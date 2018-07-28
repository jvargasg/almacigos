<?php

/* VentaBundle:NotaVenta:index.html.twig */
class __TwigTemplate_55fd4f6b39ab8bf7f8bdb3c6a963ea3a3058ec751a33306a49e1756d714d95c3 extends Twig_Template
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
        echo "<h1>Listado de Notas de Ventas</h1>

    <table class=\"records_list table\">
        <thead>
            <tr>
                
                <th>Numero</th>
                <th>Notas</th>
                <th>Datos de spacho</th>
                <th>Fecha abono</th>
                <th>Abono</th>
                <th>Fecha emision</th>
                <th>Neto</th>
                <th>Iva</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "notas", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "datosDespacho", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["entity"], "fechaAbono", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAbono", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>\$";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "abono", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["entity"], "fechaEmision", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaEmision", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>\$";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "neto", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                <td>\$";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "iva", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                <td>\$";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "total", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notaventa_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notaventa_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 47
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("notaventa_new");
        echo "\">
                Nueva Nota de Venta
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "VentaBundle:NotaVenta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 52,  121 => 47,  109 => 41,  103 => 38,  96 => 34,  92 => 33,  88 => 32,  82 => 31,  78 => 30,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
