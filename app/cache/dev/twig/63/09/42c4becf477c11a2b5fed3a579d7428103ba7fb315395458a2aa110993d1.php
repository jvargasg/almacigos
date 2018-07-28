<?php

/* ParametrosBundle:Iva:show.html.twig */
class __TwigTemplate_630942c4becf477c11a2b5fed3a579d7428103ba7fb315395458a2aa110993d1 extends Twig_Template
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
    <h1>Valor de IVA</h1>

   <div class=\"col-md-5\">IVA: ";
        // line 7
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "iva", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iva", array()), "html", null, true);
            echo "%";
        }
        echo "</div>
</div>
<div class=\"row\">
    <ul>
        <li>
           
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("iva");
        echo "\">
                    Volver
                </a>
       </li>
       <li>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("iva_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                    Editar IVA
                </a>
       
        </li>
        <li>";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "ParametrosBundle:Iva:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  56 => 18,  48 => 13,  36 => 7,  31 => 4,  28 => 3,);
    }
}
