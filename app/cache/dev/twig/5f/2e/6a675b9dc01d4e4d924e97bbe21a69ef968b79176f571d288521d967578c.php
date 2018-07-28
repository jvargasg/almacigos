<?php

/* ParametrosBundle:Iva:index.html.twig */
class __TwigTemplate_5f2e6a675b9dc01d4e4d924e97bbe21a69ef968b79176f571d288521d967578c extends Twig_Template
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
            ";
        // line 12
        if ((!$this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hay_registros", array()))) {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("iva_new");
            echo "\">
                    Establecer IVA
                </a>
            ";
        } else {
            // line 17
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("iva_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                    Editar IVA
                </a>
            ";
        }
        // line 21
        echo "        </li>
    </ul>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "ParametrosBundle:Iva:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  57 => 17,  49 => 13,  47 => 12,  36 => 7,  31 => 4,  28 => 3,);
    }
}
