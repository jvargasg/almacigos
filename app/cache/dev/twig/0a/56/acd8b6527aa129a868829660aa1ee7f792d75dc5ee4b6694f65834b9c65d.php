<?php

/* VentaBundle:Semilla:index.html.twig */
class __TwigTemplate_0a56acd8b6527aa129a868829660aa1ee7f792d75dc5ee4b6694f65834b9c65d extends Twig_Template
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
        echo "<h1>Stock de Semillas</h1>

    <table class=\"records_list table\">
        <thead>
            <tr>
                <th>Codigo</th>                
                <th>Cantidad</th>
                <th>Germinacion estimada</th>
                <th>Valor semilla</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "cantidad", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "germinacionEstimada", array()), "html", null, true);
            echo "%</td>
                <td>\$";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "valorSemilla", array()), 0, ".", "."), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semilla_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("semilla_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("semilla_new");
        echo "\">
                Ingresar nueva semilla
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "VentaBundle:Semilla:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 40,  90 => 35,  78 => 29,  72 => 26,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
