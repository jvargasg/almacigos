<?php

/* SiembraBundle:Bandeja:show.html.twig */
class __TwigTemplate_047c1d2c23ff41cc89f0ff2a302059bd23aaf6aa440278f6bff45a1ec482bb35 extends Twig_Template
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
        echo "<h1>Detalles de las Bandejas</h1>

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
                <th>Tipo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
                     
        </tbody>
    </table>

    <h2>Ubicaciones de las bandejas</h2>

    <table class=\"records_list table\">
        <thead>
            <tr>                            
                <th>Ubicación</th>                
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ubicaciones"]) ? $context["ubicaciones"] : $this->getContext($context, "ubicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 35
            echo "            <tr>                
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "tipoUbicacion", array()), "html", null, true);
            echo "</td>                
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "cantidad", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("bandeja");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bandeja_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Editar
        </a>
    </li>
    <li>";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SiembraBundle:Bandeja:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 54,  107 => 50,  99 => 45,  92 => 40,  83 => 37,  79 => 36,  76 => 35,  72 => 34,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
