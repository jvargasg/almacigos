<?php

/* ::base.html.twig */
class __TwigTemplate_c4a59c251c4333a1325ccc8a869eb95aac4f3b9ae68cb7c4a69a90c007d32208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"container\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <ul class=\"nav navbar-nav\">
                <li role=\"presentation\" class=\"";
        // line 17
        if (array_key_exists("notaventa_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["notaventa_active"]) ? $context["notaventa_active"] : $this->getContext($context, "notaventa_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("notaventa");
        echo "\">Notas de Ventas</a></li>
                <li role=\"presentation\" class=\"";
        // line 19
        if (array_key_exists("pedido_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["pedido_active"]) ? $context["pedido_active"] : $this->getContext($context, "pedido_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("pedido");
        echo "\">Pedidos</a>
                </li>
                <li role=\"presentation\" class=\"";
        // line 22
        if (array_key_exists("siembra_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["siembra_active"]) ? $context["siembra_active"] : $this->getContext($context, "siembra_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("siembra");
        echo "\">Siembras</a>
                </li>
                <li role=\"presentation\" class=\"";
        // line 25
        if (array_key_exists("bandeja_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["bandeja_active"]) ? $context["bandeja_active"] : $this->getContext($context, "bandeja_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("bandeja");
        echo "\">Bandejas</a>
                </li>
            </ul>
        </nav>
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <!-- Bootstrap core CSS -->
            ";
        // line 10
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">  
        ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "            
        ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 35,  138 => 34,  135 => 33,  130 => 31,  127 => 30,  120 => 10,  117 => 8,  114 => 7,  109 => 6,  103 => 37,  100 => 33,  98 => 30,  91 => 26,  83 => 25,  78 => 23,  70 => 22,  65 => 20,  57 => 19,  53 => 18,  45 => 17,  36 => 12,  34 => 7,  30 => 6,  23 => 1,);
    }
}
