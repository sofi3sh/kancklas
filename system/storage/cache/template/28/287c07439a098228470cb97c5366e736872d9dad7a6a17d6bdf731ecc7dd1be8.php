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
class __TwigTemplate_7773cdf0ca4fd253b5abd2ef9801d9b168f32de913f5c2183a3a67d4ff130fe4 extends \Twig\Template
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
        <div class=\"swiper\">
            <div class=\"swiper-wrapper\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "                    <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12 swiper-slide\">
                        <div class=\"product-thumb transition\">
                            <div class=\"image\"><a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
            echo "\">
                                <img src=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "\" class=\"img-responsive\"/></a>
                            </div>
                            <div class=\"caption\">
                                <h4><a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
            echo "</a></h4>
                                <p>";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 19);
            echo "</p>
                                ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 20)) {
                // line 21
                echo "                                    <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 22
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 22) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i
                                                        class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        // line 23
                        echo " <span
                                                    class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                        class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 26
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
                                ";
            }
            // line 28
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28)) {
                // line 29
                echo "                                    <p class=\"price\"> ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                                            ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    echo "
                                        ";
                } else {
                    // line 31
                    echo " <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 31);
                    echo "</span> <span
                                                class=\"price-old\">";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32);
                    echo "</span> ";
                }
                // line 33
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 33)) {
                    echo " <span
                                                class=\"price-tax\">";
                    // line 34
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 34);
                    echo "</span> ";
                }
                // line 35
                echo "                                    </p>
                                ";
            }
            // line 36
            echo " </div>
                            <div class=\"button-group\">
                                <button type=\"button\" onclick=\"cart.add('";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 38);
            echo "');\"><i
                                            class=\"fa fa-shopping-cart\"></i> <span
                                            class=\"hidden-xs hidden-sm hidden-md\">";
            // line 40
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 41
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                        onclick=\"wishlist.add('";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 42);
            echo "');\"><i class=\"fa fa-heart\"></i>
                                </button>
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 44
            echo ($context["button_compare"] ?? null);
            echo "\"
                                        onclick=\"compare.add('";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 45);
            echo "');\"><i
                                            class=\"fa fa-exchange\"></i></button>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                <div class=\"swiper-pagination\"></div>
                <div class=\"swiper-scrollbar\"></div>
            </div>
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
        return array (  185 => 51,  173 => 45,  169 => 44,  164 => 42,  160 => 41,  156 => 40,  151 => 38,  147 => 36,  143 => 35,  137 => 34,  132 => 33,  128 => 32,  123 => 31,  117 => 30,  114 => 29,  111 => 28,  102 => 26,  97 => 23,  91 => 22,  86 => 21,  84 => 20,  80 => 19,  74 => 18,  64 => 15,  60 => 14,  56 => 12,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
