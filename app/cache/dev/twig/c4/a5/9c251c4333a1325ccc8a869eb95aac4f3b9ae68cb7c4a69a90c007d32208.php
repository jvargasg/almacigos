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
                        <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Administración <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li>
                                    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fechasiembra");
        echo "\">Fechas de inicio de temporadas</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("iva");
        echo "\">IVA</a>
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
        if (array_key_exists("tipoUbicacion_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["tipoUbicacion_active"]) ? $context["tipoUbicacion_active"] : $this->getContext($context, "tipoUbicacion_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                                    <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("tipoubicacion");
        echo "\">Ubicaciones de bandejas</a>
                                </li>
                                <li role=\"presentation\" class=\"";
        // line 50
        if (array_key_exists("producto_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["producto_active"]) ? $context["producto_active"] : $this->getContext($context, "producto_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                                    <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("producto");
        echo "\">Productos</a>
                                </li>
                                <li role=\"presentation\" class=\"";
        // line 53
        if (array_key_exists("semilla_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["semilla_active"]) ? $context["semilla_active"] : $this->getContext($context, "semilla_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                                    <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("semilla");
        echo "\">Semillas</a>
                                </li>
                                <li role=\"presentation\" class=\"";
        // line 56
        if (array_key_exists("cliente_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["cliente_active"]) ? $context["cliente_active"] : $this->getContext($context, "cliente_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                                    <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\">Clientes</a>
                                </li>
                            </ul>
                        </li>
                        <li role=\"presentation\" class=\"";
        // line 61
        if (array_key_exists("notaventa_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["notaventa_active"]) ? $context["notaventa_active"] : $this->getContext($context, "notaventa_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("notaventa");
        echo "\">Notas de Ventas</a></li>
                        <li role=\"presentation\" class=\"";
        // line 63
        if (array_key_exists("pedido_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["pedido_active"]) ? $context["pedido_active"] : $this->getContext($context, "pedido_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                            <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("pedido");
        echo "\">Pedidos</a>
                        </li>
                        <li role=\"presentation\" class=\"";
        // line 66
        if (array_key_exists("siembra_active", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["siembra_active"]) ? $context["siembra_active"] : $this->getContext($context, "siembra_active")), "html", null, true);
            echo " ";
        }
        echo "\" >
                            <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("siembra");
        echo "\">Siembras</a>
                        </li>                                                
                        <li><a href=\"\">Reportes</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "        
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estilo/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
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

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "            
        ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        echo "            
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
        return array (  248 => 82,  243 => 77,  240 => 76,  235 => 12,  232 => 11,  227 => 6,  219 => 84,  217 => 82,  213 => 81,  209 => 80,  206 => 79,  204 => 76,  192 => 67,  184 => 66,  179 => 64,  171 => 63,  167 => 62,  159 => 61,  152 => 57,  144 => 56,  139 => 54,  131 => 53,  126 => 51,  118 => 50,  113 => 48,  105 => 47,  100 => 45,  92 => 44,  87 => 42,  81 => 39,  69 => 30,  65 => 29,  46 => 14,  44 => 11,  40 => 10,  35 => 9,  30 => 6,  23 => 1,);
    }
}
