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
class __TwigTemplate_d49c6980c059d39421f5968c59753dc56aa3e6064caf76b5620421ab1d1495e5 extends \Twig\Template
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
            echo "    ";
            // line 17
            echo "    <!-- Card -->
    <div class=\"justify-content-center row text-center\">
        <div class=\"category-card\">
          <a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
            echo "\">
            <div class=\"card rounded-0\">
              <img src=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 22);
            echo "\" alt=\"\" class=\"card-img rounded-0\">
              <div class=\"card-img-overlay\">
                <h4 class=\"card-title mb-0\">
                  ";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
            echo "
                </h4>
              </div>
            </div>
          </a>
        </div>
        </div>
    ";
            // line 33
            echo "    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </div>
</div> 


<style>
  .category-card .card-img {
    height: 24em;
    object-fit: cover;
    filter: brightness(70%);
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
    margin: 1em 1.5em;
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
      height: 8em;
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
        return array (  82 => 35,  75 => 33,  65 => 25,  59 => 22,  54 => 20,  49 => 17,  47 => 16,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
