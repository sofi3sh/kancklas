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

/* default/template/extension/module/special.twig */
class __TwigTemplate_e1540fea912b8cccc7bdc37e3221456074f681f4ac928cad6f37d64cdde4b4d5 extends \Twig\Template
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
        echo "<h3 class=\"product__title__cust\">";
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"row\"> ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 5);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 5);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5);
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
        <h4><a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "</a></h4>
        <p>";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 8);
            echo "</p>
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 9)) {
                // line 10
                echo "        <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 11
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 11) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 12
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
        ";
            }
            // line 14
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 14)) {
                // line 15
                echo "        <p class=\"price\"> ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 16);
                    echo "
          ";
                } else {
                    // line 17
                    echo " <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 17);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 17);
                    echo "</span> ";
                }
                // line 18
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 18)) {
                    echo " <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 18);
                    echo "</span> ";
                }
                echo " </p>
        ";
            }
            // line 19
            echo " </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 21);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 22
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 22);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 23
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 23);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " </div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 27,  141 => 23,  135 => 22,  129 => 21,  125 => 19,  113 => 18,  106 => 17,  100 => 16,  97 => 15,  94 => 14,  85 => 12,  78 => 11,  73 => 10,  71 => 9,  67 => 8,  61 => 7,  50 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
