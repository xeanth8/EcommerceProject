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
class __TwigTemplate_f3d9349a7499f54134df950f58b5741707407d7232ffdc0eeb6ae2940c8c2a9f extends \Twig\Template
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
        <div class=\"location-card\">
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
                <h4 class=\"card-title accent-font mb-0\">
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
            // line 31
            echo "    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div> 


<style>
  .location-card .card-img {
    height: 24em;
    object-fit: cover;
    filter: brightness(70%);
  }

  .location-card .card-img-overlay {
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .location-card .card-title {
    color: white;
  }

  .location-card {
    margin: 1em 1.5em;
    width: 16em;
  }

  .location-card:hover {
    transform: scale(0.98);
    transition: 0.2s;
  }

  @media (max-width: 768px) {
    .location-card .card-img {
      height: 12em;
    }
  }


  @media (max-width: 576px) {
    .location-card .card-img {
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
        return array (  80 => 33,  73 => 31,  64 => 24,  58 => 21,  53 => 19,  49 => 17,  47 => 16,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
