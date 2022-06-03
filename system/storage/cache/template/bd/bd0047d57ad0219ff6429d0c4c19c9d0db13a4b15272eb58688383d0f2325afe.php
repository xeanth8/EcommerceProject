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
class __TwigTemplate_8d04181f4e52597f3ead16c5eb1fde613fb8d3c576385c2a0bde944518934d49 extends \Twig\Template
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
        echo "<div class=\"justify-content-center row text-center\">
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
            echo "    <!-- Card -->
    
        <div class=\"category-card\">
          <a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 19);
            echo "\">
            <div class=\"card rounded-0\">
              <img src=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 21);
            echo "\" alt=\"\" class=\"card-img rounded-0\">
              <div class=\"card-img-overlay\">
                <h4 class=\"card-title mb-0\">
                  ";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
            echo "
                </h4>
              </div>
            </div>
          </a>
        </div>
        
    ";
            // line 32
            echo "    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>

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
        return array (  81 => 34,  74 => 32,  64 => 24,  58 => 21,  53 => 19,  48 => 16,  46 => 15,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
