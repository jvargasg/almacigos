<?php

/* ParametrosBundle:FechaSiembra:index.html.twig */
class __TwigTemplate_db6f36cdc7fb0216774520a371966d79a83ceae49a050aee8ff7c715358f44cf extends Twig_Template
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
        echo "<h1>Fechas de inicio de temporadas</h1>
    
    <TABLE class=\"records_list table table-bordered\">
        
    <TR>
        <TH rowspan=\"2\">
            <TH colspan=\"4\">Fechas de inicio temporadas</th>
            <TR>
                <TH>Verano</th>
                <TH>Otoño</th>
                <th>Invierno</th>
                <th>Primavera</th>
            </tr>

            <TR>
                <TH>Siembra
                    <TD>";
        // line 20
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraVerano", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraVerano", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                    <TD>";
        // line 21
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraOtonio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraOtonio", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                    <td>";
        // line 22
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraInvierno", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraInvierno", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                    <td>";
        // line 23
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraPrimavera", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraPrimavera", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                </th>
            </tr>
            <TR>
                <TH>Despacho
                    <td>";
        // line 28
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoVerano", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoVerano", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                    <td>";
        // line 29
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoOtonio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoOtonio", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                    <td>";
        // line 30
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoInvierno", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoInvierno", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                    <td>";
        // line 31
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoPrimavera", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoPrimavera", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                </th>
            </tr>

        </th>
    </TABLE>

    ";
        // line 79
        echo "
        <ul>
            <li>
                ";
        // line 82
        if ((!$this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hay_registros", array()))) {
            // line 83
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fechasiembra_new");
            echo "\">
                        Establecer fechas
                    </a>
                ";
        } else {
            // line 87
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fechasiembra_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                        Editar fechas
                    </a>
                ";
        }
        // line 91
        echo "            </li>
        </ul>
    ";
    }

    public function getTemplateName()
    {
        return "ParametrosBundle:FechaSiembra:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 91,  122 => 87,  114 => 83,  112 => 82,  107 => 79,  95 => 31,  89 => 30,  83 => 29,  77 => 28,  67 => 23,  61 => 22,  55 => 21,  49 => 20,  31 => 4,  28 => 3,);
    }
}
