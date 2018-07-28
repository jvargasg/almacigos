<?php

/* VentaBundle:Inicio:login.html.twig */
class __TwigTemplate_3ebc9b062597cfe43c11eb156c4b7ba8bd8caf417a604e8761073d68297f9a08 extends Twig_Template
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
\t    <h1 class=\"col-md-7\">Login</h1>
\t\t\t
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t   
\t\t    <div class=\"col-md-7\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</div>

\t\t    <div class=\"col-md-7\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "</div>\t    

\t\t    <div class=\"col-md-7\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pass", array()), 'row');
        echo "</div>

\t\t\t<button type=\"submit\" class=\"btn col-md-4 col-md-offset-4 btn-success text-center\">
\t            Ingresar
\t        </button>
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
\t\t\t\t\t\t
\t</div>

";
    }

    public function getTemplateName()
    {
        return "VentaBundle:Inicio:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  51 => 13,  46 => 11,  41 => 9,  36 => 7,  31 => 4,  28 => 3,);
    }
}
