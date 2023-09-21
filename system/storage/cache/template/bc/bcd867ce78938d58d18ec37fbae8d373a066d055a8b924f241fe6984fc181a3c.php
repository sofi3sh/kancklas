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
class __TwigTemplate_d207260ca52d627f737e0b88dbf2983c4465fb2125e6ba8fba528ce92e45c708 extends \Twig\Template
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
            <div class=\"swiper-wrapper swiper__wrapper__cust\" >
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
            echo "                                    <div>
                                        <svg width=\"99\" height=\"19\" viewBox=\"0 0 99 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M9.5 0L11.6329 6.56434H18.535L12.9511 10.6213L15.084 17.1857L9.5 13.1287L3.91604 17.1857L6.04892 10.6213L0.464963 6.56434H7.36712L9.5 0Z\" fill=\"#D9D9D9\"/>
                                            <path d=\"M29.5 0L31.6329 6.56434H38.535L32.9511 10.6213L35.084 17.1857L29.5 13.1287L23.916 17.1857L26.0489 10.6213L20.465 6.56434H27.3671L29.5 0Z\" fill=\"#D9D9D9\"/>
                                            <path d=\"M49.5 0L51.6329 6.56434H58.535L52.9511 10.6213L55.084 17.1857L49.5 13.1287L43.916 17.1857L46.0489 10.6213L40.465 6.56434H47.3671L49.5 0Z\" fill=\"#D9D9D9\"/>
                                            <path d=\"M69.5 0L71.6329 6.56434H78.535L72.9511 10.6213L75.084 17.1857L69.5 13.1287L63.916 17.1857L66.0489 10.6213L60.465 6.56434H67.3671L69.5 0Z\" fill=\"#D9D9D9\"/>
                                            <path d=\"M89.5 0L91.6329 6.56434H98.535L92.9511 10.6213L95.084 17.1857L89.5 13.1287L83.916 17.1857L86.0489 10.6213L80.465 6.56434H87.3671L89.5 0Z\" fill=\"#D9D9D9\"/>
                                        </svg>
                                    </div>
                                    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 33)) {
                // line 34
                echo "                                        <div class=\"rating\">
                                            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 36
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 36) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i
                                                            class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        // line 38
                        echo "                                                    <span
                                                            class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                                                class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 41
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                                        </div>
                                    ";
            }
            // line 44
            echo "                                    ";
            // line 45
            echo "                                    <p class=\"product__card__article__cust\">Артикул: KHO3006</p>
                                    ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46)) {
                // line 47
                echo "                                        <p class=\"price\">
                                        ";
                // line 48
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                                            <p class=\"product__card__new__price__cust\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49);
                    echo "<p>
                                        ";
                } else {
                    // line 51
                    echo "                                            <p class=\"product__card__old__price__cust\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                    echo "</span>
                                            </p>
                                            <p class=\"product__card__new__price__cust\">";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 53);
                    echo "</p>
                                        ";
                }
                // line 55
                echo "                                        </p>
                                    ";
            }
            // line 56
            echo " </div>
                                <div class=\"button-group\">
                                    <button type=\"button\" onclick=\"cart.add('";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
            echo "');\"><i
                                                class=\"fa fa-shopping-cart\"></i> <span
                                                class=\"hidden-xs hidden-sm hidden-md\">";
            // line 60
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 61
            echo ($context["button_wishlist"] ?? null);
            echo "\"
                                            onclick=\"wishlist.add('";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 62);
            echo "');\"><i
                                                class=\"fa fa-heart\"></i>
                                    </button>
                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 65
            echo ($context["button_compare"] ?? null);
            echo "\"
                                            onclick=\"compare.add('";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 66);
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
        // line 73
        echo "
            </div>

            <button type=\"button\" class=\"swiper-button-prev\"></button>
            <button type=\"button\" class=\"swiper-button-next\"></button>
        </div>
    </div>
</section>


";
        // line 84
        echo "<style>
    .swiper__wrapper__cust {
        height: 500px;
    }

    .product__card__hover__cust {
        height: 100%;
        display: flex;
        align-items: center;
        transition: all 0.3s ease-in-out;
    }


    .product__card__cust {
        height: 90% !important;
        background-color: #FFFFFF;
        border: 2px solid #BFBFBF;
        padding: 24px 34px;
        transition: all 0.3s ease-in-out;
        height: auto;
    }

    .product__card__hover__cust:hover .product__card__cust {
        margin: 0;
        border-color: #FF0B0B;
        height: 100% !important;
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
        transition: all 0.3s ease-in-out;
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
        return array (  211 => 84,  199 => 73,  186 => 66,  182 => 65,  176 => 62,  172 => 61,  168 => 60,  163 => 58,  159 => 56,  155 => 55,  150 => 53,  144 => 51,  138 => 49,  136 => 48,  133 => 47,  131 => 46,  128 => 45,  126 => 44,  122 => 42,  116 => 41,  111 => 38,  105 => 36,  101 => 35,  98 => 34,  96 => 33,  85 => 24,  79 => 22,  72 => 18,  66 => 17,  61 => 16,  56 => 12,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
