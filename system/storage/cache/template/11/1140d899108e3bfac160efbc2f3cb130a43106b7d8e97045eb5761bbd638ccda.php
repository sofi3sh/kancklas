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
class __TwigTemplate_b0ce831e4be271d740a710d4bcd916d826e2b30f9876ad5eaa832e0c41301b3f extends \Twig\Template
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
  <div class=\"container__cust\">
    <div class=\"swiper-wrapper\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "        <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 swiper-slide\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
            echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "</a></h4>
              <p>";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 16);
            echo "</p>
              ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 17)) {
                // line 18
                echo "                <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 19
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 19) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 20
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
              ";
            }
            // line 22
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22)) {
                // line 23
                echo "                <p class=\"price\"> ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24);
                    echo "
                  ";
                } else {
                    // line 25
                    echo " <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25);
                    echo "</span> ";
                }
                // line 26
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 26)) {
                    echo " <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 26);
                    echo "</span> ";
                }
                echo " </p>
              ";
            }
            // line 27
            echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 29);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 30
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 30);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 31
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 31);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      <div class=\"swiper-pagination\"></div>
    </div>
  </div>
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
        return array (  163 => 36,  150 => 31,  144 => 30,  138 => 29,  134 => 27,  122 => 26,  115 => 25,  109 => 24,  106 => 23,  103 => 22,  94 => 20,  87 => 19,  82 => 18,  80 => 17,  76 => 16,  70 => 15,  59 => 13,  55 => 11,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
