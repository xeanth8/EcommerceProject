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
class __TwigTemplate_63f84b7373ddba429e8fcde4da48e05f9faef27f197d69d893a4c78c86725457 extends \Twig\Template
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
        // line 18
        echo "
<table class=\"list\">
      <?php for (\$i = 0; \$i < sizeof(\$categories); \$i = \$i + 4) { ?>
      <tr>
        <?php for (\$j = \$i; \$j < (\$i + 4); \$j++) { ?>
        
        <td width=\"25%\" >
      <?php if (\$category[\$j]['category_id'] == \$category_id) { ?>
         <a href=\"<?php echo \$category[\$j]['href']; ?>\" class=\"active\"><?php echo \$category[\$j]['name']; ?></a>
       <?php } else { ?>
          <a href=\"<?php echo \$category[\$j]['href']; ?>\"><?php echo \$category[\$j]['name']; ?></a>
          <?php } ?>
        <?php if (\$category[\$j]['children']) { ?>
          <ul>
            <?php foreach (\$category[\$j]['children'] as \$child) { ?>
            <li>
              <?php if (\$child['category_id'] == \$child_id) { ?>
              <a href=\"<?php echo \$child['href']; ?>\" class=\"active\"> - <?php echo \$child['name']; ?></a>
              <?php } else { ?>
              <a href=\"<?php echo \$child['href']; ?>\"> - <?php echo \$child['name']; ?></a>
              <?php } ?>
            </li>
            <?php } ?>
          </ul>
          <?php } ?>
          </td>
        <?php } ?>
      </tr>
      <?php } ?>
    </table>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category.twig", "");
    }
}
