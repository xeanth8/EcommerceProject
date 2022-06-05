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
class __TwigTemplate_26f52d64eefe3040cd8b04ab68f54e774d92b9a212b34309cab8458fde6b8a1d extends \Twig\Template
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
        echo "<h3>";
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"category-grid row\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "    ";
            // line 16
            echo "    ";
            // line 17
            echo "    ";
            // line 18
            echo "   
    <!-- Card -->
    
  <div class=\"category-card\">
    <a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
            echo "\">
      <div class=\"card rounded-0 row\">
        <img src=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 24);
            echo "\" alt=\"\" class=\"card-img rounded-0\">
        <h4 class=\"card-title mb-0 col-sm-12\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "top", [], "any", false, false, false, 25);
            echo "</h4>
      </div>
    </a>
  </div>
    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>

<style>
  .category-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .card {
    position: relative;
    text-align: center;
    color: white;
  }

  .card-title {
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .category-card .card-img {
    width: 16em;
    height: 16em;
    object-fit: cover;
    border: 1px solid #f2157f;
  }

  .category-card .card-img-overlay {
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .category-card .card-title {
    color: #412c2a;
    font-weight: bold;
    font-size: 16px;
    text-shadow : -3px -1px 4px white, 3px 6px 7px white, 4px 2px 5px white, 4px -3px 5px white;
  }

  .category-card {
    margin: 1.5em 3em;
    width: 16em;
  }

  .category-card:hover {
    transform: scale(0.98);
    transition: 0.2s;
  }

  @media (max-width: 768px) {
    .card-title {
      top: 75%;
    }
    .category-card .card-img {
      height: 12em;
      width: 12em;
    }
  }
</style>";
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
        return array (  82 => 31,  68 => 25,  64 => 24,  59 => 22,  53 => 18,  51 => 17,  49 => 16,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
