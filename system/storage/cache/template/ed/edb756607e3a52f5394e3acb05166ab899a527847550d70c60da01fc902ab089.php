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
class __TwigTemplate_832eb3c61086213541512ae6514d0f1801b585f871298af887c0f2c32246b113 extends \Twig\Template
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
                                <p class=\"product__card__name__cust\"><a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
            echo "</a></p>
                                ";
            // line 20
            echo "                                ";
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
            // line 31
            echo "                                <p class=\"product__card__article__cust\">Артикул: KHO3006</p>
                                ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32)) {
                // line 33
                echo "                                    <p class=\"price\">
                                        ";
                // line 34
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "                                            <p class=\"product__card__new__price__cust\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35);
                    echo "<p>
                                        ";
                } else {
                    // line 37
                    echo "                                            <p class=\"product__card__old__price__cust\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37);
                    echo "</p>
                                            <p class=\"product__card__new__price__cust\">";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 38);
                    echo "</p>
                                        ";
                }
                // line 40
                echo "                                    </p>
                                ";
            }
            // line 41
            echo " </div>
                            <div class=\"button-group\">
                                <button type=\"button\" onclick=\"cart.add('";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 43);
            echo "');\"><i
                                            class=\"fa fa-shopping-cart\"></i> <span
                                            class=\"hidden-xs hidden-sm hidden-md\">";
            // line 45
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 46
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                        onclick=\"wishlist.add('";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 47);
            echo "');\"><i class=\"fa fa-heart\"></i>
                                </button>
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 49
            echo ($context["button_compare"] ?? null);
            echo "\"
                                        onclick=\"compare.add('";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 50);
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
        // line 56
        echo "
            </div>

            <button type=\"button\" class=\"swiper-button-prev\"></button>
            <button type=\"button\" class=\"swiper-button-next\"></button>
        </div>
    </div>
</section>


";
        // line 67
        echo "<style>
    .product__card__name__cust a {
        font-family: Raleway;
        font-size: 18px;
        font-weight: 700;
        line-height: 26px;
        letter-spacing: 0em;
        color: #000000 !important;
    }

    .product__card__article__cust {
        font-family: Raleway;
        font-size: 15px;
        font-weight: 400;
        line-height: 26px;
        letter-spacing: 0em;
        color: #7A7A7A;
    }

    .product__card__old__price__cust {
        font-family: Raleway;
        font-size: 16px;
        font-weight: 500;
        line-height: 26px;
        letter-spacing: 0em;
        color: #E33F3F;
    }

    .product__card__new__price__cust {
        font-family: Helvetica;
        font-size: 28px;
        font-weight: 700;
        line-height: 26px;
        letter-spacing: 0em;
        color: #7A7A7A;
    }
</style>



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
        return array (  193 => 67,  181 => 56,  169 => 50,  165 => 49,  160 => 47,  156 => 46,  152 => 45,  147 => 43,  143 => 41,  139 => 40,  134 => 38,  129 => 37,  123 => 35,  121 => 34,  118 => 33,  116 => 32,  113 => 31,  111 => 30,  107 => 28,  101 => 27,  96 => 24,  90 => 23,  86 => 22,  83 => 21,  80 => 20,  74 => 18,  64 => 15,  60 => 14,  56 => 12,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
