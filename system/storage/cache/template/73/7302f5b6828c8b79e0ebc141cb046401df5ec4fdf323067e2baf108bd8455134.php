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
class __TwigTemplate_f35fb3b7c0da10a79a0909974b5efd19c39aa3736b84733070925307d23dda7f extends \Twig\Template
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
   
";
            // line 34
            echo "
 <div class=\"offer-card\">
 <a href=\"";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
            echo "\">
              <div class=\"card border-0 bg-transparent text-white\">
                <img src=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 38);
            echo "\" class=\"card-img-top\" alt=\"...\">
                <div class=\"card-body my-2 p-0\">
                  <div class=\"card-title\">
                    <h5>Flexible Staycation Offer</h5>
                  </div>
                  <p class=\"card-text\">
                    ";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44);
            echo "
                  </p>
                </div>
              </div>
              </a>
            </div>


    ";
            // line 53
            echo "    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>

<style>
  .category-card .card-img {
    width: 16em;
    height: 16em;
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

  /* Penawaran */
  .offer-card {
    margin: 1em 1.5em;
    width: 15em;
  }

  .offer-card .card-img-top {
    width: 15em;
    height: 15em;
    object-fit: cover;
    border: 1px solid #5b5858;
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
        return array (  88 => 55,  81 => 53,  70 => 44,  61 => 38,  56 => 36,  52 => 34,  48 => 16,  46 => 15,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_grid.twig", "");
    }
}
