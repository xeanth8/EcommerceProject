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
class __TwigTemplate_d404470d95fdf0b31d6038cec439b5cb49affd80d462356986a07a6748bcc287 extends \Twig\Template
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
        echo "<div class=\"row\">
<button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle col-sm-6\"><i class=\"fa fa-shopping-cart\"></i> 
  <span id=\"cart-total\">";
        // line 5
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
  <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle col-sm-6\"><i class=\"fa fa-shopping-cart\"></i> 
  <span id=\"cart-total\">";
        // line 8
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
</div>
  
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 13
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 14
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "        <tr>
          <td class=\"text-center\">";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 21
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 21);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 21);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 23)) {
                    echo " <br />
            - <small>";
                    // line 24
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 24);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 25);
                echo "</td>
          <td class=\"text-right\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 26);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 27);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 31
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 33);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 35);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 36);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 45
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 46);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 47);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </table>
        <p class=\"text-right\"><a href=\"";
            // line 51
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
            // line 55
            echo "    <li>
      <p class=\"text-center\">";
            // line 56
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 59
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
        return array (  223 => 59,  217 => 56,  214 => 55,  201 => 51,  198 => 50,  189 => 47,  185 => 46,  182 => 45,  178 => 44,  171 => 39,  160 => 36,  156 => 35,  151 => 33,  147 => 31,  142 => 30,  131 => 27,  127 => 26,  123 => 25,  115 => 24,  110 => 23,  107 => 22,  98 => 21,  91 => 20,  85 => 19,  71 => 18,  68 => 17,  64 => 16,  60 => 14,  58 => 13,  50 => 8,  44 => 5,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simplica/template/common/cart.twig", "");
    }
}
