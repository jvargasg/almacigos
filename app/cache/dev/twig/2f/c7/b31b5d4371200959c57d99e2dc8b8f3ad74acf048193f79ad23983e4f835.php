<?php

/* VentaBundle:Pedido:agregar.html.twig */
class __TwigTemplate_2fc7b31b5d4371200959c57d99e2dc8b8f3ad74acf048193f79ad23983e4f835 extends Twig_Template
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
        echo "<h1>Ingreso de Pedido a Nota de Venta Nº ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notaVenta", array()), "numero", array()), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pedido");
        echo "\">
            Volver al listado
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "VentaBundle:Pedido:agregar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  37 => 6,  31 => 4,  28 => 3,);
    }
}
