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
class __TwigTemplate_cd70053eb0422ad1327fbac47bbecbecbc89222e80ef59f33cc7644b64e11089 extends \Twig\Template
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
        echo "
            </div>
";
        // line 55
        echo "            <button type=\"button\" class=\"swiper-button-prev\"></button>
            <button type=\"button\" class=\"swiper-button-next\"></button>
        </div>
    </div>
</section>

<section>
    <main class=\"page\">
        <div class=\"bestseller\">
            <div class=\"bestsellers__container\">

                <!-- Оболонка слайдера -->
                <div class=\"bestsellers__slider bestsellers\">

                    <!-- Частина слайдера, що рухається -->
                    <div class=\"bestsellers__wrapper swiper-wrapper\">
                        <!-- Слайд -->
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 73
            echo "                            <div class=\"bestsellers__slide swiper-slide slide\">
                                <div class=\"slide__info\">
                                    <div class=\"slide__image\"><a href=\"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
            echo "\" class=\"img-responsive\" /></a></div>
                                    <div class=\"slide__price\">
                                        ";
            // line 77
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["price"] ?? null) : null)) {
                // line 78
                echo "                                            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "                                                <div class=\"slide__new-price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79);
                    echo "</div>
                                            ";
                } else {
                    // line 81
                    echo "                                                <div class=\"slide__old-price\"> ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81);
                    echo "</div>
                                                <div class=\"slide__new-price\">";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 82);
                    echo "</div>
                                            ";
                }
                // line 84
                echo "                                        ";
            }
            // line 85
            echo "                                    </div>

                                </div>
                                <div class=\"slide__attribute attribute\">
                                    <div class=\"attribute__wifi\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"43\" height=\"28\"
                                                                      viewBox=\"0 0 43 28\" fill=\"none\">
                                            <path
                                                    d=\"M21.5003 21.9438C19.7617 21.9438 18.3464 23.0938 18.3464 24.5066C18.3464 25.9193 19.7617 27.0693 21.5003 27.0693C23.2389 27.0693 24.6541 25.9193 24.6541 24.5066C24.6541 23.0938 23.2389 21.9438 21.5003 21.9438ZM21.5018 25.7879C21.5003 25.7879 21.5003 25.7867 21.5003 25.7854L23.0772 25.7879H21.5018Z\"
                                                    fill=\"#010101\" stroke=\"black\" />
                                            <path
                                                    d=\"M14.0777 18.4756C13.4633 18.9749 13.4633 19.7807 14.0762 20.2825C14.6845 20.7818 15.6839 20.7867 16.303 20.2912C16.8373 19.8633 21.6836 16.2207 26.693 20.2875C27.001 20.5378 27.4045 20.6629 27.808 20.6629C28.2115 20.6629 28.6149 20.5377 28.9229 20.2875C29.5389 19.787 29.5389 18.9761 28.9229 18.4756C23.0526 13.7043 16.6433 16.3896 14.0777 18.4756Z\"
                                                    fill=\"#010101\" stroke=\"black\" />
                                            <path
                                                    d=\"M7.77035 13.3499C7.15591 13.8492 7.15591 14.6588 7.76882 15.1593C8.38479 15.6623 9.3827 15.6611 9.99867 15.1631C10.4699 14.7839 21.6746 5.96209 33.001 15.1618C33.309 15.4121 33.7125 15.5372 34.1159 15.5372C34.5194 15.5372 34.9229 15.4121 35.2309 15.1618C35.8469 14.6613 35.8469 13.8504 35.2309 13.3499C21.6638 2.32323 7.90586 13.2385 7.77035 13.3499Z\"
                                                    fill=\"#010101\" stroke=\"black\" />
                                            <path
                                                    d=\"M41.538 8.22526C21.7311 -7.87176 1.66081 8.06008 1.46217 8.22526C0.846198 8.72454 0.846198 9.5354 1.46064 10.0359C2.07661 10.5365 3.07452 10.5365 3.69049 10.0384C4.42044 9.44905 21.748 -4.23167 39.3082 10.0372C39.6162 10.2874 40.0196 10.4126 40.4231 10.4126C40.8266 10.4126 41.23 10.2874 41.538 10.0372C42.154 9.53665 42.154 8.72579 41.538 8.22526Z\"
                                                    fill=\"#010101\" stroke=\"black\" />
                                        </svg></div>
                                    <div class=\"attribute__water water\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"34\" viewBox=\"0 0 26 34\"
                                             fill=\"none\">
                                            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                                                  d=\"M13 0.787109C9.6987 5.68705 6.42097 10.4686 3.05074 15.2921C1.43769 17.5998 0 20.1309 0 22.8151C0 25.8504 1.45524 28.5986 3.80781 30.5884C6.16038 32.5777 9.41029 33.8084 13 33.8084C16.5897 33.8084 19.8395 32.5777 22.1922 30.5884C24.5449 28.5987 26 25.8504 26 22.8151C26 20.1309 24.5622 17.5998 22.9493 15.292C19.579 10.4686 16.3012 5.68705 13 0.787109Z\"
                                                  fill=\"#231F20\" />
                                        </svg>
                                        <div class=\"water__text\">20 л</div>
                                    </div>
                                    <div class=\"attribute__home home\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"27\" viewBox=\"0 0 32 27\"
                                             fill=\"none\">
                                            <path
                                                    d=\"M31.7297 12.8213L16.6525 0.572541C16.2924 0.279856 15.708 0.279856 15.3477 0.572541L0.270158 12.8213C0.00650343 13.0357 -0.0725097 13.3583 0.0701298 13.6384C0.213116 13.9184 0.549615 14.1011 0.922917 14.1011H2.7128V24.9379C2.7128 25.9499 3.72275 26.77 4.96843 26.77H12.1014V20.6681C12.1014 20.6681 12.5146 19.9185 13.0244 19.9185H18.9759C19.4853 19.9185 19.8985 20.2542 19.8985 20.6681V26.77H27.0319C28.2772 26.77 29.2871 25.9496 29.2871 24.9379V14.1011H31.0773C31.4505 14.1011 31.7868 13.9184 31.9298 13.6384C32.0725 13.3583 31.9937 13.0357 31.7297 12.8213Z\"
                                                    fill=\"black\" />
                                        </svg>
                                        <div class=\"home__text\">25 м2</div>
                                    </div>
                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
                    </div>

                </div>
                <!-- Якщо потрібна пагінація -->
                <div class=\"swiper-pagination\"></div>

                <!-- Якщо потрібна навігація (ліворуч/праворуч) -->
                <button type=\"button\" class=\"swiper-button-prev\"></button>
                <button type=\"button\" class=\"swiper-button-next\"></button>

            </div>
        </div>
    </main>
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
        return array (  297 => 126,  251 => 85,  248 => 84,  243 => 82,  238 => 81,  232 => 79,  229 => 78,  227 => 77,  216 => 75,  212 => 73,  208 => 72,  189 => 55,  185 => 51,  173 => 45,  169 => 44,  164 => 42,  160 => 41,  156 => 40,  151 => 38,  147 => 36,  143 => 35,  137 => 34,  132 => 33,  128 => 32,  123 => 31,  117 => 30,  114 => 29,  111 => 28,  102 => 26,  97 => 23,  91 => 22,  86 => 21,  84 => 20,  80 => 19,  74 => 18,  64 => 15,  60 => 14,  56 => 12,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/special.twig", "");
    }
}
