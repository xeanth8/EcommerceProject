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
class __TwigTemplate_459f5b4582e5f5aa2f99eda22e6611a1690717c9a365d1ccb5b6107775841537 extends \Twig\Template
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
<div class=\"col-sm-12\"> 

  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "    ";
            // line 17
            echo "    ";
            // line 18
            echo "    ";
            // line 19
            echo "   
    <!-- Card -->
    
  <div class=\"row category-card col-xs-6 col-md-3\">
    <a href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 23);
            echo "\">
      <div class=\"card rounded-0\">
        <img src=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 25);
            echo "\" alt=\"\" class=\"card-img rounded-0\">
        <h4 class=\"card-title mb-0\">";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
            echo "</h4>
      </div>
    </a>
  </div>
    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </div>
</div>

<style>
  .category_grid {
    margin: auto;
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
        return array (  79 => 32,  67 => 26,  63 => 25,  58 => 23,  52 => 19,  50 => 18,  48 => 17,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
