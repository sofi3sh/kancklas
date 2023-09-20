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
class __TwigTemplate_a2394dfb6ef3afe2fd5151df16ce32fe9eaa4f960520c80cf362a8493d9c5f70 extends \Twig\Template
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

<section class=\"section__gray__cust slider-section__cust\">
    <div class=\"container__cust\">
        <div class=\"special__swiper__cust\">
            <div class=\"swiper-wrapper\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "                    <div class=\"swiper-slide\">
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
                                <h4 class=\"product_card_name_cust\"><a href=\"";
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
                echo "                                    <div class=\"rating\">
                                        ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 23
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 23) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i
                                                        class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        // line 24
                        echo " <span
                                                    class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                        class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 27
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                                    </div>
                                ";
            }
            // line 30
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30)) {
                // line 31
                echo "                                    <p class=\"price\"> ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "                                            ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32);
                    echo "
                                        ";
                } else {
                    // line 33
                    echo " <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 33);
                    echo "</span> <span
                                                class=\"price-old\">";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34);
                    echo "</span> ";
                }
                // line 35
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 35)) {
                    echo " <span
                                                class=\"price-tax\">";
                    // line 36
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 36);
                    echo "</span> ";
                }
                // line 37
                echo "                                    </p>
                                ";
            }
            // line 38
            echo " </div>
                            <div class=\"button-group\">
                                <button type=\"button\" onclick=\"cart.add('";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
            echo "');\"><i
                                            class=\"fa fa-shopping-cart\"></i> <span
                                            class=\"hidden-xs hidden-sm hidden-md\">";
            // line 42
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 43
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                        onclick=\"wishlist.add('";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 44);
            echo "');\"><i class=\"fa fa-heart\"></i>
                                </button>
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 46
            echo ($context["button_compare"] ?? null);
            echo "\"
                                        onclick=\"compare.add('";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 47);
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
        // line 53
        echo "
            </div>

            <button type=\"button\" class=\"swiper-button-prev\"></button>
            <button type=\"button\" class=\"swiper-button-next\"></button>
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
        return array (  188 => 53,  176 => 47,  172 => 46,  167 => 44,  163 => 43,  159 => 42,  154 => 40,  150 => 38,  146 => 37,  140 => 36,  135 => 35,  131 => 34,  126 => 33,  120 => 32,  117 => 31,  114 => 30,  110 => 28,  104 => 27,  99 => 24,  93 => 23,  89 => 22,  86 => 21,  84 => 20,  80 => 19,  74 => 18,  64 => 15,  60 => 14,  56 => 12,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
