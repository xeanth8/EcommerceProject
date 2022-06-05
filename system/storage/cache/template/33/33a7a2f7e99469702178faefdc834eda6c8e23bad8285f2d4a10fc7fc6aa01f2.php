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

/* default/template/extension/module/category.twig */
class __TwigTemplate_a7930a4ae88b6191375ccc9a67cf864267445793109dfe1a7b1e64bbc1e44c66 extends \Twig\Template
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
        echo "<div class=\"list-group\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "top", [], "any", false, false, false, 3) == 1)) {
                // line 4
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 4) == ($context["category_id"] ?? null))) {
                    echo " 
      <a href=\"";
                    // line 5
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 5);
                    echo "\" class=\"list-group-item active\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
                    echo "</a> 
        ";
                    // line 6
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6)) {
                        // line 7
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 8
                            echo "            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 8) == ($context["child_id"] ?? null))) {
                                // line 9
                                echo "            <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 9);
                                echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 9);
                                echo "</a> 
            ";
                            } else {
                                // line 10
                                echo " 
            <a href=\"";
                                // line 11
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 11);
                                echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 11);
                                echo "</a>
            ";
                            }
                            // line 13
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 14
                        echo "        ";
                    }
                    // line 15
                    echo "      ";
                } else {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\" class=\"list-group-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</a>
      ";
                }
                // line 17
                echo "    ";
            }
            // line 18
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 19,  108 => 18,  105 => 17,  95 => 15,  92 => 14,  86 => 13,  79 => 11,  76 => 10,  68 => 9,  65 => 8,  60 => 7,  58 => 6,  52 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category.twig", "");
    }
}
