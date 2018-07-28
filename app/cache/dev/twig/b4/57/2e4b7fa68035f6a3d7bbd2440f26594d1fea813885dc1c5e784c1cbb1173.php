<?php

/* ParametrosBundle:FechaSiembra:show.html.twig */
class __TwigTemplate_b4572e4b7fa68035f6a3d7bbd2440f26594d1fea813885dc1c5e784c1cbb1173 extends Twig_Template
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
        echo "<h1>Fechas de Siembra</h1>

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
                <th>Siembraverano</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraVerano", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Despachoverano</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoVerano", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siembraotoño</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraOtonio", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Despachootoño</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoOtonio", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siembrainvierno</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraInvierno", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Despachoinvierno</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoInvierno", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siembraprimavera</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siembraPrimavera", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Despachoprimavera</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "despachoPrimavera", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
            <li>
                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fechasiembra");
        echo "\">
                    Volver
                </a>
            </li>
            <li>
                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fechasiembra_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                    Editar
                </a>
            </li>
            <li>";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
        </ul>
";
    }

    public function getTemplateName()
    {
        return "ParametrosBundle:FechaSiembra:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 58,  113 => 54,  105 => 49,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
