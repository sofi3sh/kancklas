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
class __TwigTemplate_92ef55e442e5665707dae81f0fd99fede3edb1cd313dab6b08bdf5d3d262f7b5 extends \Twig\Template
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
                        <div class=\"product__card__hover__cust\">
                            <div class=\"product__card__cust\">
                                ";
            // line 16
            echo "                                <div class=\"image\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
            echo "\">
                                        <img src=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "\"
                                             title=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
            echo "\" class=\"img-responsive product__card__img__cust\"/></a>
                                </div>
                                <div class=\"caption\">
                                    <p class=\"product__card__name__cust\"><a
                                                href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
            echo "</a></p>
                                    ";
            // line 24
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 24)) {
                // line 25
                echo "                                        <div class=\"rating\">
                                            ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 27
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 27) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i
                                                            class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        // line 29
                        echo "                                                    <span
                                                            class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                                class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 32
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                                        </div>
                                    ";
            }
            // line 35
            echo "                                    ";
            // line 36
            echo "                                    <p class=\"product__card__article__cust\">Артикул: KHO3006</p>
                                    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37)) {
                // line 38
                echo "                                        <p class=\"price\">
                                        ";
                // line 39
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "                                            <p class=\"product__card__new__price__cust\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40);
                    echo "<p>
                                        ";
                } else {
                    // line 42
                    echo "                                            <p class=\"product__card__old__price__cust\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 42);
                    echo "</span>
                                            </p>
                                            <p class=\"product__card__new__price__cust\">";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 44);
                    echo "</p>
                                        ";
                }
                // line 46
                echo "                                        </p>
                                    ";
            }
            // line 47
            echo " </div>
                                <div class=\"button-group\">
                                    <button type=\"button\" onclick=\"cart.add('";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 49);
            echo "');\"><i
                                                class=\"fa fa-shopping-cart\"></i> <span
                                                class=\"hidden-xs hidden-sm hidden-md\">";
            // line 51
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 52
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 53);
            echo "');\"><i
                                                class=\"fa fa-heart\"></i>
                                    </button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 56
            echo ($context["button_compare"] ?? null);
            echo "\"
                                            onclick=\"compare.add('";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
            echo "');\"><i
                                                class=\"fa fa-exchange\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
            </div>

            <button type=\"button\" class=\"swiper-button-prev\"></button>
            <button type=\"button\" class=\"swiper-button-next\"></button>
        </div>
    </div>
</section>


";
        // line 75
        echo "<style>
    .product__card__hover__cust {
        height: 100%;
        padding: 55px 0;
        transition: all 0.3s ease-in-out;
    }

    .product__card__hover__cust:hover {
        padding: 0;
    }


    .product__card__cust {
        background-color: #FFFFFF;
        border: 2px solid #BFBFBF;
        padding: 24px 34px;
    }

    .product__card__hover__cust:hover .product__card__cust {
        border-color: #FF0B0B;
        height: 100%;
    }

    .product__card__img__cust {
        width: 60%;
        margin: 0 auto;
    }

    .product__card__name__cust {
        margin-top: 40px;
    }

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

    .product__card__old__price__cust span {
        position: relative;
    }

    .product__card__old__price__cust span:before {
        content: \"\";
        width: 100%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        height: 1px;
        background-color: #E33F3F;
    }

    .product__card__new__price__cust {
        font-family: Helvetica;
        font-size: 28px;
        font-weight: 700;
        line-height: 26px;
        letter-spacing: 0em;
        color: #7A7A7A;
    }

    .product__card__hover__cust:hover .product__card__new__price__cust {
        color: #000000;
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
        return array (  201 => 75,  189 => 64,  176 => 57,  172 => 56,  166 => 53,  162 => 52,  158 => 51,  153 => 49,  149 => 47,  145 => 46,  140 => 44,  134 => 42,  128 => 40,  126 => 39,  123 => 38,  121 => 37,  118 => 36,  116 => 35,  112 => 33,  106 => 32,  101 => 29,  95 => 27,  91 => 26,  88 => 25,  85 => 24,  79 => 22,  72 => 18,  66 => 17,  61 => 16,  56 => 12,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
