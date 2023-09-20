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
class __TwigTemplate_d7dc6329920759afc548b91f21183bdf99e89e0dff9d159f0087e647eb12fb5e extends \Twig\Template
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
        echo "<section class=\"section__white__cust\">
  <div class=\"container__cust\">
    <h3 class=\"product__title__cust\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
  </div>
</section>

<section class=\"section__gray__cust\">
  <div class=\"container__cust\"> ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "      <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
        <div class=\"product-thumb transition\">
          <div class=\"image\"><a href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
            echo "\" class=\"img-responsive\" /></a></div>
          <div class=\"caption\">
            <h4><a href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
            echo "</a></h4>
            <p>";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 14);
            echo "</p>
            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 15)) {
                // line 16
                echo "              <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 17) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 18
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
            ";
            }
            // line 20
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 20)) {
                // line 21
                echo "              <p class=\"price\"> ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22);
                    echo "
                ";
                } else {
                    // line 23
                    echo " <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23);
                    echo "</span> ";
                }
                // line 24
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 24)) {
                    echo " <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 24);
                    echo "</span> ";
                }
                echo " </p>
            ";
            }
            // line 25
            echo " </div>
          <div class=\"button-group\">
            <button type=\"button\" onclick=\"cart.add('";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 27);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 28
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 28);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 29
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 29);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " </div>
</section>



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
        return array (  161 => 33,  148 => 29,  142 => 28,  136 => 27,  132 => 25,  120 => 24,  113 => 23,  107 => 22,  104 => 21,  101 => 20,  92 => 18,  85 => 17,  80 => 16,  78 => 15,  74 => 14,  68 => 13,  57 => 11,  53 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
