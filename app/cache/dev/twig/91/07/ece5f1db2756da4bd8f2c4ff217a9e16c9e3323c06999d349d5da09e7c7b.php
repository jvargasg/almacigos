<?php

/* base.html.twig */
class __TwigTemplate_9107ece5f1db2756da4bd8f2c4ff217a9e16c9e3323c06999d349d5da09e7c7b extends Twig_Template
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
        <title>Almacigos SA - ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Bootstrap core CSS -->
        ";
        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/estilo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">  
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body class=\"container\">

        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container-fluid\">

                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("usuario_login");
        echo "\">
                        <img alt=\"Allmacigos SA\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/img/logo.gif"), "html", null, true);
        echo "\">
                    </a>         
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li role=\"presentation\" class=\"";
        // line 36
        if (array_key_exists("notaventa_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["notaventa_active"]) ? $context["notaventa_active"] : $this->getContext($context, "notaventa_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("notaventa");
        echo "\">Notas de Ventas</a></li>
                        <li role=\"presentation\" class=\"";
        // line 38
        if (array_key_exists("pedido_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["pedido_active"]) ? $context["pedido_active"] : $this->getContext($context, "pedido_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("pedido");
        echo "\">Pedidos</a>
                        </li>
                        <li role=\"presentation\" class=\"";
        // line 41
        if (array_key_exists("siembra_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["siembra_active"]) ? $context["siembra_active"] : $this->getContext($context, "siembra_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("siembra");
        echo "\">Siembras</a>
                        </li>
                        <li role=\"presentation\" class=\"";
        // line 44
        if (array_key_exists("bandeja_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["bandeja_active"]) ? $context["bandeja_active"] : $this->getContext($context, "bandeja_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("bandeja");
        echo "\">Bandejas</a>
                        </li>
                        <li role=\"presentation\" class=\"";
        // line 47
        if (array_key_exists("producto_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["producto_active"]) ? $context["producto_active"] : $this->getContext($context, "producto_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\">Productos</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
    </body>

</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            
        ";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "            
        ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 62,  187 => 57,  184 => 56,  179 => 12,  176 => 11,  171 => 6,  163 => 64,  161 => 62,  157 => 61,  153 => 60,  150 => 59,  148 => 56,  137 => 48,  129 => 47,  124 => 45,  116 => 44,  111 => 42,  103 => 41,  98 => 39,  90 => 38,  86 => 37,  78 => 36,  69 => 30,  65 => 29,  46 => 14,  44 => 11,  40 => 10,  35 => 9,  30 => 6,  23 => 1,);
    }
}
