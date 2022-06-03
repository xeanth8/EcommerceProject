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
class __TwigTemplate_ce6a8e0865ea61b2b733ff230f44712431ff568b197fc39359b152510f62c45f extends \Twig\Template
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
        echo "<div class=\"row category-grid\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "    ";
            // line 15
            echo "    ";
            // line 16
            echo "    ";
            // line 17
            echo "   
    <!-- Card -->
    
  <div class=\"category-card\">
    <a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
            echo "\">
      <div class=\"card rounded-0\">
        <img src=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 23);
            echo "\" alt=\"\" class=\"card-img rounded-0\">
        <h4 class=\"card-title mb-0\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
            echo "</h4>
      </div>
    </a>
  </div>
    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>

<style>
  .category_grid {
    
  }

  .card {
    position: relative;
    text-align: center;
    color: white;
  }

  .card-title {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .category-card .card-img {
    width: 12em;
    height: 12em;
    object-fit: cover;
    border: 1px solid #5b5858;
  }

  .category-card .card-img-overlay {
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .category-card .card-title {
    color: black;
  }

  .category-card {
    margin: 1em;
    width: 16em;
  }

  .category-card:hover {
    transform: scale(0.98);
    transition: 0.2s;
  }

  @media (max-width: 768px) {
    .category-card .card-img {
      height: 12em;
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
        return array (  77 => 30,  65 => 24,  61 => 23,  56 => 21,  50 => 17,  48 => 16,  46 => 15,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
