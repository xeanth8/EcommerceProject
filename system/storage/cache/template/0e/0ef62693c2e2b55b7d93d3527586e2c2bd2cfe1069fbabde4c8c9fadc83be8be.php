<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/extension/module/category_grid.twig */
class __TwigTemplate_bd66c233c188553ce480ede3ad9778505cb38dd49bce44c158b4673d20eebbad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
<div class=\"col-sm-6 col-md-3\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "    ";
            // line 16
            echo "    <a class=\"product-thumb\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
            echo "</a>
    ";
            // line 18
            echo "    <img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 18);
            echo "\" alt=\"\">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div> 
<div class=\"col-sm-6 col-md-3\">
fdsfsd</div>
<div class=\"col-sm-6 col-md-3\">
fdsfsd</div>
<div class=\"col-sm-6 col-md-3\">
fdsfsd</div>
<div class=\"col-sm-6 col-md-3\">
fdsfsd</div>
<div class=\"col-sm-6 col-md-3\">
fdsfsd</div>
<div class=\"col-sm-6 col-md-3\">
fdsfsd</div>
<div class=\"col-sm-6 col-md-3\">
fdsfsd</div>
<div class=\"col-sm-6 col-md-3\">
fdsfsd</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  54 => 18,  47 => 16,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
