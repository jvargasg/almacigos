<?php

/* SiembraBundle:Siembra:index.html.twig */
class __TwigTemplate_0e61d18f468d9b7a92207a1ec4e514a0e80234825269f574c30dbca1f7e11ca7 extends Twig_Template
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
        echo "<h1>Listado de Siembras</h1>

    <table class=\"records_list table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nv</th>
                <th>Pedido</th>                
                <th>Siembra</th>
                <th>F siembra NV</th>
                <th>Agricultor</th>
                <th>Cliente</th>
                <th>Especie</th>
                <th>F desp. NV</th>
                <th>Cant. Dias</th>
                <th>Plantas NV</th>
                <th>Tipo bandeja</th>
                <th>Cantidad bandejas</th>
                <th>Cantidad a sembrar</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("siembra_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pedido", array()), "notaVenta", array()), "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "pedido", array()), "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "siembra", array()), "html", null, true);
            echo "</td>
                <td>CALCULAR FECHA SIEMBRA</td>
                <td>Agricultor</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pedido", array()), "notaVenta", array()), "Cliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pedido", array()), "producto", array()), "especie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "pedido", array()), "fechaDespacho", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dias", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "pedido", array()), "cantidadSolicitada", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bandeja", array()), "tipo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidadBandejas", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidadSembrar", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("siembra_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("siembra_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 55
        echo "        </tbody>
    </table>

    ";
        // line 65
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SiembraBundle:Siembra:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 65,  136 => 55,  124 => 49,  118 => 46,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  77 => 32,  73 => 31,  69 => 30,  63 => 29,  60 => 28,  56 => 27,  31 => 4,  28 => 3,);
    }
}
