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
class __TwigTemplate_1f28e30eca274a386e34eed0a75e72913f57ec7fa4d39411261fdd59c5283887 extends \Twig\Template
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
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "top", [], "any", false, false, false, 4) == 1)) {
                // line 5
                echo "    ";
                // line 17
                echo "    ";
                // line 18
                echo "    ";
                // line 19
                echo "   
    <!-- Card -->
    
  <div class=\"category-card\">
    <a href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 23);
                echo "\">
      <div class=\"card rounded-0 row\">
        <img src=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 25);
                echo "\" alt=\"\" class=\"card-img rounded-0\">
        <h4 class=\"card-title mb-0 col-sm-12\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                echo "</h4>
      </div>
    </a>
  </div>
    ";
            }
            // line 31
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
    transform: scale(0.999999999999999);
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
        return array (  85 => 32,  79 => 31,  71 => 26,  67 => 25,  62 => 23,  56 => 19,  54 => 18,  52 => 17,  50 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
