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

/* simplica/template/common/cart.twig */
class __TwigTemplate_0983734170ab2f8fb3d716550c5a5e2a536501956e1551db61c9644ce23b066e extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
";
        // line 3
        echo "  <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle col-sm-3\"><i class=\"fa fa-shopping-cart\"></i> 
  <span id=\"cart-total\">";
        // line 4
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
  <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle col-sm-3\"><i class=\"fa fa-shopping-cart\"></i> 
  <span id=\"cart-total\">";
        // line 7
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 10
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 11
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                echo "        <tr>
          <td class=\"text-center\">";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 18
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 18);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 18);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 20)) {
                    echo " <br />
            - <small>";
                    // line 21
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 21);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 22);
                echo "</td>
          <td class=\"text-right\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 23);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 24);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 28
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 30);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 32);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 33);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 42
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 43);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 44);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 48
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 52
            echo "    <li>
      <p class=\"text-center\">";
            // line 53
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 56
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "simplica/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 56,  214 => 53,  211 => 52,  198 => 48,  195 => 47,  186 => 44,  182 => 43,  179 => 42,  175 => 41,  168 => 36,  157 => 33,  153 => 32,  148 => 30,  144 => 28,  139 => 27,  128 => 24,  124 => 23,  120 => 22,  112 => 21,  107 => 20,  104 => 19,  95 => 18,  88 => 17,  82 => 16,  68 => 15,  65 => 14,  61 => 13,  57 => 11,  55 => 10,  49 => 7,  43 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simplica/template/common/cart.twig", "");
    }
}
