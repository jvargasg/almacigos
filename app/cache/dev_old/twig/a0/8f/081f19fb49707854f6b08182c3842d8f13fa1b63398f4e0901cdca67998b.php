<?php

/* VentaBundle:_NotaVenta:index.html.twig */
class __TwigTemplate_a08f081f19fb49707854f6b08182c3842d8f13fa1b63398f4e0901cdca67998b extends Twig_Template
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
        echo "<h1>Listado de Notas de Venta</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>Notas</th>
                <th>Datosdespacho</th>
                <th>Fechaabono</th>
                <th>Abono</th>
                <th>Fechaemision</th>
                <th>Neto</th>
                <th>Iva</th>
                <th>Total</th>
                <th>Actions</th>
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
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notaventa_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
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
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAbono", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "abono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["entity"], "fechaEmision", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaEmision", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "neto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iva", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "total", array()), "html", null, true);
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
                Ingresar nueva nota de venta
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "VentaBundle:_NotaVenta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  126 => 47,  114 => 41,  108 => 38,  101 => 34,  97 => 33,  93 => 32,  87 => 31,  83 => 30,  77 => 29,  73 => 28,  69 => 27,  65 => 26,  59 => 25,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
