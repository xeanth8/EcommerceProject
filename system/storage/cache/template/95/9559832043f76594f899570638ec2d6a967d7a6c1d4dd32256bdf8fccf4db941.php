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
class __TwigTemplate_b494626cdd7371f65e526e8e598aca6b1676cf142d75431cb2e7f54f67ecdad0 extends \Twig\Template
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
        echo "<div class=\"justify-content-center row text-center d-flex\">
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
            echo "   
   
   
    <!-- Card -->
    
    <div class=\"category-card col-sm-6 col-md-3\">
        <a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
            echo "\">
            <div class=\"card rounded-0\">
                <img src=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 24);
            echo "\" alt=\"\" class=\"card-img rounded-0\">
                <h4 class=\"card-title mb-0\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
            echo "</h4>
            </div>
        </a>
    </div>


    ";
            // line 43
            echo "

    ";
            // line 46
            echo "    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>

<style>
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
    width: 16em;
    height: 16em;
    object-fit: cover;
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
    margin: 1em 4em;
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


  @media (max-width: 576px) {
    .category-card .card-img {
      width: 6em;
      height: 6em;
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
        return array (  85 => 48,  78 => 46,  74 => 43,  65 => 25,  61 => 24,  56 => 22,  48 => 16,  46 => 15,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
