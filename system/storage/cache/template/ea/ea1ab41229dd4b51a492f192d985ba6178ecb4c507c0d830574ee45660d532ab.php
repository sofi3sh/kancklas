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

/* extension/module/exchange1c.twig */
class __TwigTemplate_b7a3987a724d6e594b8eef37b4a40095fe3e5bc87a2ba125b9b4b06d619a5e18 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "


<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-exchange1c\" class=\"btn btn-primary\" id=\"form-save\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_save", [], "any", false, false, false, 8);
        echo "\"><i class=\"fa fa-save\"></i></button>
                <button type=\"submit\" form=\"form-exchange1c\" class=\"btn btn-primary\" id=\"form-save-refresh\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_apply", [], "any", false, false, false, 9);
        echo "\" onclick=\"\$('#form-exchange1c').attr('action', '";
        echo ($context["refresh"] ?? null);
        echo "&refresh=1').submit()\"><i class=\"fa fa-save\"></i> + <i class=\"fa fa-refresh\"></i></button>
                <a href=\"";
        // line 10
        echo ($context["cancel"] ?? null);
        echo "\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_cancel", [], "any", false, false, false, 10);
        echo "\" ><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "heading_title", [], "any", false, false, false, 12);
        echo "</h1>
            <ol class=\"breadcrumb\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "                    <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ol>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 26
        echo "        <div id=\"danger\" style=\"display:none\">
            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;ВНИМАНИЕ! модуль отключен. Обмен через http/https работать не будет!</div>
        </div>
        <div id=\"modification\" style=\"display:none\">
            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;ВНИМАНИЕ! Настройки не сохранены!</div>
        </div>
        ";
        // line 32
        if (($context["text_info"] ?? null)) {
            // line 33
            echo "            <div class=\"alert alert-info\">
                <i class=\"fa fa-info-circle\"></i>
                ";
            // line 35
            echo ($context["text_info"] ?? null);
            echo "
            </div>
        ";
        }
        // line 38
        echo "        <div class=\"card\">
            <div class=\"card-header\">
                <i class=\"fa fa-pencil\"></i> ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_edit", [], "any", false, false, false, 40);
        echo "
            </div>
            <div class=\"card-body\">
                <form action=\"index.php?route=extension/module/exchange1c/downloadOrders&user_token=";
        // line 43
        echo ($context["user_token"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-download-orders\" class=\"form-horizontal\"></form>
                <form action=\"";
        // line 44
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-exchange1c\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab-general\" data-toggle=\"tab\">";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_general", [], "any", false, false, false, 46);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-product\" data-toggle=\"tab\">";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_product", [], "any", false, false, false, 47);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-category\" data-toggle=\"tab\">";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_category", [], "any", false, false, false, 48);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-prices\" data-toggle=\"tab\">";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_prices", [], "any", false, false, false, 49);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-stock\" data-toggle=\"tab\">";
        // line 50
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_stock", [], "any", false, false, false, 50);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 51
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_seo", [], "any", false, false, false, 51);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-order\" data-toggle=\"tab\">";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_order", [], "any", false, false, false, 52);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-manual\" data-toggle=\"tab\">";
        // line 53
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_manual", [], "any", false, false, false, 53);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-info\" data-toggle=\"tab\">";
        // line 54
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_info", [], "any", false, false, false, 54);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-service\" data-toggle=\"tab\">";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_service", [], "any", false, false, false, 55);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-help\" data-toggle=\"tab\">";
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_error", [], "any", false, false, false, 56);
        echo "</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-updates\" data-toggle=\"tab\">";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_updates", [], "any", false, false, false, 57);
        echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">

                        <!-- ОСНОВНЫЕ -->
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <div class=\"form-group\">
                                ";
        // line 64
        echo ($context["html_module_status"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 67
        echo ($context["html_export_system"] ?? null);
        echo "
                            </div>
                            <fieldset id=\"auth\">
                                <legend>";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_auth", [], "any", false, false, false, 70);
        echo "</legend>
                                <div class=\"alert alert-info\">
                                    <i class=\"fa fa-info-circle\"></i>
                                    ";
        // line 73
        echo (((twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "info_connect", [], "any", false, false, false, 73) . "<strong>") . ($context["url_connect"] ?? null)) . "</strong>");
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 76
        echo ($context["html_username"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 79
        echo ($context["html_password"] ?? null);
        echo "
                                </div>
                                <legend>";
        // line 81
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_security", [], "any", false, false, false, 81);
        echo "</legend>
                                <div class=\"form-group\">
                                    ";
        // line 83
        echo ($context["html_allow_ip"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 86
        echo ($context["html_export_module_to_all"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_file_format", [], "any", false, false, false, 90);
        echo "</legend>
                                ";
        // line 91
        if (($context["zip_support"] ?? null)) {
            // line 92
            echo "                                    <div class=\"form-group\">
                                        ";
            // line 93
            echo ($context["html_file_zip"] ?? null);
            echo "
                                    </div>
                                ";
        }
        // line 96
        echo "                                <label class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> upload_file_size : ";
        echo ($context["upload_max_filesize"] ?? null);
        echo "</label>
                                <label class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> post_max_size : ";
        // line 97
        echo ($context["post_max_size"] ?? null);
        echo "</label>
                                <div class=\"form-group\">
                                    ";
        // line 99
        echo ($context["html_file_max_size"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 102
        echo ($context["html_not_delete_files_after_import"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 106
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_cron", [], "any", false, false, false, 106);
        echo "</legend>
                                <div class=\"form-group\">
                                    ";
        // line 108
        echo ($context["html_cron_import_filename"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 112
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_log", [], "any", false, false, false, 112);
        echo "</legend>
                                <div class=\"form-group\">
                                    ";
        // line 114
        echo ($context["html_log_level"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <fieldset id=\"log-enable\">
                                <div class=\"form-group\">
                                    ";
        // line 119
        echo ($context["html_log_filename"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 122
        echo ($context["html_log_debug_line_view"] ?? null);
        echo "
                                </div>
                            </fieldset>
                        </div><!-- tab general -->

                        <!-- ТОВАРЫ -->
                        <div class=\"tab-pane\" id=\"tab-product\">

                            <div class=\"card-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 131
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "title_tab_product_edit", [], "any", false, false, false, 131);
        echo "</h3>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab-product-general\" data-toggle=\"tab\">";
        // line 135
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_product_general", [], "any", false, false, false, 135);
        echo "</a></li>
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-product-images\" data-toggle=\"tab\">";
        // line 136
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_product_images", [], "any", false, false, false, 136);
        echo "</a></li>
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-product-properties\" data-toggle=\"tab\">";
        // line 137
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_product_properties", [], "any", false, false, false, 137);
        echo "</a></li>
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-product-requisites\" data-toggle=\"tab\">";
        // line 138
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_product_requisites", [], "any", false, false, false, 138);
        echo "</a></li>
                                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab-product-features\" data-toggle=\"tab\">";
        // line 139
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_tab_product_features", [], "any", false, false, false, 139);
        echo "</a></li>
                                </ul>
                                <div class=\"tab-content\">

                                    <!-- ОСНОВНЫЕ -->
                                    <div class=\"tab-pane active\" id=\"tab-product-general\">
                                        <fieldset id=\"product_sync\">
                                            <legend>";
        // line 146
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_product_sync", [], "any", false, false, false, 146);
        echo "</legend>
                                            <div class=\"form-group\">
                                                ";
        // line 148
        echo ($context["html_product_rules_pre_parse"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\" id=\"product_sync_mode\">
                                                ";
        // line 151
        echo ($context["html_product_sync_mode"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\" id=\"product_no_create\">
                                                ";
        // line 154
        echo ($context["html_product_no_create"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 157
        echo ($context["html_product_new_status_disable"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 160
        echo ($context["html_product_not_found_stop_error"] ?? null);
        echo "
                                            </div>
                                        </fieldset>
                                        <fieldset id=\"product_field_update\">
                                            <legend>";
        // line 164
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_product_field_update", [], "any", false, false, false, 164);
        echo "</legend>
                                            <div class=\"form-group\">
                                                ";
        // line 166
        echo ($context["html_product_disable_before_full_import"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\" id=\"product_name\">
                                                ";
        // line 169
        echo ($context["html_product_name"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\" id=\"product_name_field\">
                                                ";
        // line 172
        echo ($context["html_product_name_field"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 175
        echo ($context["html_product_description_no_import"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 178
        echo ($context["html_product_category_no_import"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 181
        echo ($context["html_product_taxes_no_import"] ?? null);
        echo "
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>";
        // line 185
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_product_manufacturer", [], "any", false, false, false, 185);
        echo "</legend>
                                            <div class=\"form-group\" id=\"product_manufacturer_no_import\">
                                                ";
        // line 187
        echo ($context["html_product_manufacturer_no_import"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\" id=\"product_manufacturer_tag\">
                                                ";
        // line 190
        echo ($context["html_product_manufacturer_tag"] ?? null);
        echo "
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>";
        // line 194
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_product_std_from_ts", [], "any", false, false, false, 194);
        echo "</legend>
                                            <div class=\"table-responsive\">
                                                <table id=\"exchange1c_product_std\" class=\"table table-bordered table-hover\">
                                                    <thead>
                                                        <tr>
                                                            <td class=\"col-sm-2 text-left\">";
        // line 199
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_product_tag_name_ts", [], "any", false, false, false, 199);
        echo "</td>
                                                            <td class=\"col-sm-7 text-left\">";
        // line 200
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_desc", [], "any", false, false, false, 200);
        echo "</td>
                                                            <td class=\"col-sm-1 text-left\">";
        // line 201
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_database_field", [], "any", false, false, false, 201);
        echo "</td>
                                                            <td class=\"col-sm-2 text-left\">";
        // line 202
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_database_table", [], "any", false, false, false, 202);
        echo "</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Ид</td>
                                                            <td>";
        // line 208
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_guid", [], "any", false, false, false, 208);
        echo "</td>
                                                            <td>1c_id</td>
                                                            <td>product_to_1c</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Артикул</td>
                                                            <td>";
        // line 214
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_sku", [], "any", false, false, false, 214);
        echo "</td>
                                                            <td>sku, model</td>
                                                            <td>product</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Штрихкод</td>
                                                            <td>";
        // line 220
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_ean", [], "any", false, false, false, 220);
        echo "</td>
                                                            <td>ean</td>
                                                            <td>product</td>
                                                        </tr>
                                                        <tr>
                                                            <td>БазоваяЕдиница</td>
                                                            <td>";
        // line 226
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_unit", [], "any", false, false, false, 226);
        echo "</td>
                                                            <td>unit_id</td>
                                                            <td>product_unit, product_quantity, product_price</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ПолноеНаименование</td>
                                                            <td>";
        // line 232
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_fullname", [], "any", false, false, false, 232);
        echo "</td>
                                                            <td>name</td>
                                                            <td>product</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Описание</td>
                                                            <td>";
        // line 238
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_description", [], "any", false, false, false, 238);
        echo "</td>
                                                            <td>description</td>
                                                            <td>product_description</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Изготовитель</td>
                                                            <td>";
        // line 244
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_manufacturer", [], "any", false, false, false, 244);
        echo "</td>
                                                            <td>manufacturer_id</td>
                                                            <td>product</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- table -->
                                        </fieldset>
                                    </div><!-- tab-product-general -->

                                    <!-- ИЗОБРАЖЕНИЯ -->
                                    <div class=\"tab-pane\" id=\"tab-product-images\">
                                        <fieldset id=\"product_images\">
                                            <legend>";
        // line 257
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_product_images", [], "any", false, false, false, 257);
        echo "</legend>
                                            <div class=\"form-group\">
                                                ";
        // line 259
        echo ($context["html_product_images_no_import"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 262
        echo ($context["html_product_images_cache_clean"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 265
        echo ($context["html_product_images_check"] ?? null);
        echo "
                                            </div>
                                        </fieldset>
                                    </div><!-- tab-product-images -->

                                    <!-- СВОЙСТВА (АТРИБУТЫ) -->
                                    <div class=\"tab-pane\" id=\"tab-product-properties\">
                                        <fieldset id=\"product_properties\">
                                            <div class=\"form-group\">
                                                ";
        // line 274
        echo ($context["html_product_attribute_not_import"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 277
        echo ($context["html_product_property_type_no_import"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 280
        echo ($context["html_synchronize_attribute_by"] ?? null);
        echo "
                                            </div>
                                            <legend>";
        // line 282
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_product_attributes_groups", [], "any", false, false, false, 282);
        echo "</legend>
                                            <div class=\"form-group\">
                                                ";
        // line 284
        echo ($context["html_attribute_group_mode"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 287
        echo ($context["html_attribute_group_name_mode"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\" id=\"attribute_group_name\">
                                                ";
        // line 290
        echo ($context["html_attribute_group_name"] ?? null);
        echo "
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>";
        // line 294
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_product_properties_from_ts", [], "any", false, false, false, 294);
        echo "</legend>
                                            <div class=\"alert alert-info\">
                                                <i class=\"fa fa-info-circle\"></i>
                                                ";
        // line 297
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_properties_from_ts", [], "any", false, false, false, 297);
        echo "
                                            </div>
                                        </fieldset>
                                    </div><!-- tab-product-properties -->

                                    <!-- РЕКВИЗИТЫ -->
                                    <div class=\"tab-pane\" id=\"tab-product-requisites\">
                                        <legend>";
        // line 304
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_product_requisite_std_from_ts", [], "any", false, false, false, 304);
        echo "</legend>
                                        <div class=\"table-responsive\">
                                            <table id=\"exchange1c_requisite_standart\" class=\"table table-bordered table-hover\">
                                                <thead>
                                                    <tr>
                                                        <td class=\"col-sm-2 text-left\">";
        // line 309
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_requisite_name_ts", [], "any", false, false, false, 309);
        echo "</td>
                                                        <td class=\"col-sm-7 text-left\">";
        // line 310
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_requisite_desc", [], "any", false, false, false, 310);
        echo "</td>
                                                        <td class=\"col-sm-1 text-left\">";
        // line 311
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_database_field", [], "any", false, false, false, 311);
        echo "</td>
                                                        <td class=\"col-sm-2 text-left\">";
        // line 312
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_product_field_cms", [], "any", false, false, false, 312);
        echo "</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Вес</td>
                                                        <td>";
        // line 318
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_req_weight", [], "any", false, false, false, 318);
        echo "</td>
                                                        <td>weight</td>
                                                        <td>Вес</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ТипНоменклатуры</td>
                                                        <td>";
        // line 324
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_req_type", [], "any", false, false, false, 324);
        echo "</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ВидНоменклатуры</td>
                                                        <td>";
        // line 330
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_req_view", [], "any", false, false, false, 330);
        echo "</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ОписаниеВФорматеHTML</td>
                                                        <td>";
        // line 336
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_req_desc_html", [], "any", false, false, false, 336);
        echo "</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Полное наименование</td>
                                                        <td>";
        // line 342
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_req_fullname", [], "any", false, false, false, 342);
        echo "</td>
                                                        <td>name</td>
                                                        <td>Наименование</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Код</td>
                                                        <td>";
        // line 348
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_req_code", [], "any", false, false, false, 348);
        echo "</td>
                                                        <td>id</td>
                                                        <td>";
        // line 350
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_hide", [], "any", false, false, false, 350);
        echo "</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ISBN</td>
                                                        <td>";
        // line 354
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_product_isbn", [], "any", false, false, false, 354);
        echo "</td>
                                                        <td>isbn</td>
                                                        <td>ISBN</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- table -->
                                    </div><!-- tab-product-requisites -->

                                    <!-- ХАРАКТЕРИСТИКИ (ОПЦИИ) -->
                                    <div class=\"tab-pane\" id=\"tab-product-features\">
                                        <fieldset>
                                            <div class=\"form-group\">
                                                ";
        // line 367
        echo ($context["html_product_feature_import"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 370
        echo ($context["html_product_options_mode"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 373
        echo ($context["html_product_price_min_option"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 376
        echo ($context["html_product_options_empty_ignore"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 379
        echo ($context["html_product_options_type"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 382
        echo ($context["html_product_options_subtract"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 385
        echo ($context["html_product_link_option"] ?? null);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 388
        echo ($context["html_delete_text_in_brackets_option"] ?? null);
        echo "
                                            </div>
                                        </fieldset>

                                    </div><!-- tab-product-features -->

                                </div><!-- tab-content -->

                            </div><!-- panel-body -->

                        </div>
                        <!-- ТОВАРЫ -->

                        <!-- КАТЕГОРИИ -->
                        <div class=\"tab-pane\" id=\"tab-category\">
                            <div class=\"form-group\">
                                ";
        // line 404
        echo ($context["html_categories_no_import"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 407
        echo ($context["html_category_new_no_create"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 410
        echo ($context["html_category_new_status_disable"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 413
        echo ($context["html_category_empty_disable"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 416
        echo ($context["html_category_disable_before_full_import"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 419
        echo ($context["html_category_exist_status_enable"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 422
        echo ($context["html_fill_parent_cats"] ?? null);
        echo "
                            </div>

                            <legend>";
        // line 425
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_category_properties_from_ts", [], "any", false, false, false, 425);
        echo "</legend>
                            <div class=\"table-responsive\">
                                <div class=\"alert alert-info\">
                                    <i class=\"fa fa-info-circle\"></i>
                                    ";
        // line 429
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_category_properties", [], "any", false, false, false, 429);
        echo "
                                </div>
                                <table id=\"exchange1c_category_property\" class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"col-sm-2 text-left\">";
        // line 434
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_property_name_ts", [], "any", false, false, false, 434);
        echo "</td>
                                            <td class=\"col-sm-7 text-left\">";
        // line 435
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_property_desc", [], "any", false, false, false, 435);
        echo "</td>
                                            <td class=\"col-sm-1 text-left\">";
        // line 436
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_database_field", [], "any", false, false, false, 436);
        echo "</td>
                                            <td class=\"col-sm-2 text-left\">";
        // line 437
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_product_field_cms", [], "any", false, false, false, 437);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Картинка</td>
                                            <td>";
        // line 443
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_category_prop_image", [], "any", false, false, false, 443);
        echo "</td>
                                            <td>image</td>
                                            <td>Картинка</td>
                                        </tr>
                                        <tr>
                                            <td>Сортировка</td>
                                            <td>";
        // line 449
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_category_prop_sort_order", [], "any", false, false, false, 449);
        echo "</td>
                                            <td>sort_order</td>
                                            <td>Сортировка</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- table -->

                            <legend>";
        // line 457
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_category_name_split", [], "any", false, false, false, 457);
        echo "</legend>
                            <div class=\"table-responsive\">
                                <div class=\"alert alert-info\">
                                    <i class=\"fa fa-info-circle\"></i>
                                    ";
        // line 461
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_category_name_split", [], "any", false, false, false, 461);
        echo "
                                </div>
                            </div> <!-- table -->

                        </div>
                        <!-- КАТЕГОРИИ -->

                        <!-- ЦЕНЫ -->
                        <div class=\"tab-pane\" id=\"tab-prices\">
                            <div class=\"form-group\">
                                ";
        // line 471
        echo ($context["html_product_price_no_import"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 474
        echo ($context["html_price_types_auto_load"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 477
        echo ($context["html_product_disable_if_price_zero"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 480
        echo ($context["html_clean_prices_full_import"] ?? null);
        echo "
                            </div>
                            <div class=\"alert alert-info\">
                                <i class=\"fa fa-info-circle\"></i>
                                ";
        // line 484
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_prices", [], "any", false, false, false, 484);
        echo "
                            </div>
                            <legend>";
        // line 486
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_prices", [], "any", false, false, false, 486);
        echo "</legend>
                            <div class=\"table-responsive\">
                                <table id=\"exchange1c_price_type_id\" class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"col-sm-3 text-left\">";
        // line 491
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_config_price_type", [], "any", false, false, false, 491);
        echo "</td>
                                            <td class=\"col-sm-3 text-left\">";
        // line 492
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_config_price_id_cml", [], "any", false, false, false, 492);
        echo "</td>
                                            <td class=\"col-sm-2 text-left\">";
        // line 493
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_customer_group", [], "any", false, false, false, 493);
        echo "</td>
                                            <td class=\"text-left\" style=\"width: 10%;\">";
        // line 494
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_table", [], "any", false, false, false, 494);
        echo "</td>
                                            <td class=\"col-sm-1 text-right\">";
        // line 495
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_quantity", [], "any", false, false, false, 495);
        echo "</td>
                                            <td class=\"col-sm-1 text-right\">";
        // line 496
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_priority", [], "any", false, false, false, 496);
        echo "</td>
                                            <td>";
        // line 497
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_action", [], "any", false, false, false, 497);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 501
        $context["price_row"] = 0;
        // line 502
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exchange1c_price_type"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 503
            echo "                                            <tr id=\"exchange1c_price_type_row";
            echo ($context["price_row"] ?? null);
            echo "\">
                                                <td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_price_type[";
            // line 504
            echo ($context["price_row"] ?? null);
            echo "][keyword]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["obj"], "keyword", [], "any", false, false, false, 504);
            echo "\" /></td>
                                                <td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_price_type[";
            // line 505
            echo ($context["price_row"] ?? null);
            echo "][guid]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["obj"], "guid", [], "any", false, false, false, 505)) ? (twig_get_attribute($this->env, $this->source, $context["obj"], "guid", [], "any", false, false, false, 505)) : (null));
            echo " ''\" /></td>
                                                <td class=\"text-left\"><select class=\"form-control\" name=\"exchange1c_price_type[";
            // line 506
            echo ($context["price_row"] ?? null);
            echo "][customer_group_id]\">
                                                        ";
            // line 507
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 508
                echo "                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 508) == twig_get_attribute($this->env, $this->source, $context["obj"], "customer_group_id", [], "any", false, false, false, 508))) {
                    // line 509
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 509);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 509);
                    echo "</option>
                                                            ";
                } else {
                    // line 511
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 511);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 511);
                    echo "</option>
                                                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 513
            echo "
                                                    </select></td>
                                                <td class=\"text-left\"><select class=\"form-control\" name=\"exchange1c_price_type[";
            // line 515
            echo ($context["price_row"] ?? null);
            echo "][table_price]\">
                                                        ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["table_prices"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["table_price"]) {
                // line 517
                echo "                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["table_price"], "name", [], "any", false, false, false, 517) == twig_get_attribute($this->env, $this->source, $context["obj"], "table_price", [], "any", false, false, false, 517))) {
                    // line 518
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["table_price"], "name", [], "any", false, false, false, 518);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["table_price"], "desc", [], "any", false, false, false, 518);
                    echo "</option>
                                                            ";
                } else {
                    // line 520
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["table_price"], "name", [], "any", false, false, false, 520);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["table_price"], "desc", [], "any", false, false, false, 520);
                    echo "</option>
                                                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table_price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            echo "
                                                </td>
                                                <td class=\"text-center\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_price_type[";
            // line 524
            echo ($context["price_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["obj"], "quantity", [], "any", false, false, false, 524);
            echo "\" size=\"2\" /></td>
                                                <td class=\"text-center\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_price_type[";
            // line 525
            echo ($context["price_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["obj"], "priority", [], "any", false, false, false, 525);
            echo "\" size=\"2\" /></td>
                                                <td class=\"text-center\">
                                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 527
            echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_remove", [], "any", false, false, false, 527);
            echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
            echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 527);
            echo "') ? \$('#exchange1c_price_type_row";
            echo ($context["price_row"] ?? null);
            echo "').remove() : false;\"><i class=\"fa fa-minus-circle\"></i></button>
                                                </td>
                                            </tr>
                                            ";
            // line 530
            $context["price_row"] = (($context["price_row"] ?? null) + 1);
            // line 531
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        echo "                                    </tbody>
                                    <tfoot>
                                        ";
        // line 534
        if (twig_length_filter($this->env, ($context["customer_groups"] ?? null))) {
            // line 535
            echo "                                            <tr>
                                                <td colspan=\"6\"></td>
                                                <td class=\"text-center\">
                                                    <button type=\"button\" id=\"btn_add_price_type\" onclick=\"addConfigPriceType();\" data-toggle=\"tooltip\" title=\"";
            // line 538
            echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_add", [], "any", false, false, false, 538);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                                </td>
                                            </tr>
                                        ";
        }
        // line 542
        echo "                                    </tfoot>
                                </table>
                            </div> <!-- table -->
                            <legend>";
        // line 545
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_currency", [], "any", false, false, false, 545);
        echo "</legend>
                            <div class=\"table-responsive\">
                                <table id=\"exchange1c_currency\" class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"col-sm-6 text-left\">";
        // line 550
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_currency_name_1c", [], "any", false, false, false, 550);
        echo "</td>
                                            <td class=\"col-sm-6 text-left\">";
        // line 551
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_currency", [], "any", false, false, false, 551);
        echo "</td>
                                            <td class=\"text-center\" style=\"width: 50px;\">";
        // line 552
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_action", [], "any", false, false, false, 552);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 556
        $context["currency_row"] = 0;
        // line 557
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exchange1c_currency"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["config_currency"]) {
            // line 558
            echo "                                            <tr id=\"exchange1c_currency_row";
            echo ($context["currency_row"] ?? null);
            echo "\">
                                                <td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_currency[";
            // line 559
            echo ($context["currency_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["config_currency"], "name", [], "any", false, false, false, 559);
            echo "\" /></td>
                                                <td class=\"text-left\"><select class=\"form-control\" id=\"currency_id\" name=\"exchange1c_currency[";
            // line 560
            echo ($context["currency_row"] ?? null);
            echo "][currency_id]\">
                                                        ";
            // line 561
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 562
                echo "                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", [], "any", false, false, false, 562) == twig_get_attribute($this->env, $this->source, $context["config_currency"], "currency_id", [], "any", false, false, false, 562))) {
                    // line 563
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", [], "any", false, false, false, 563);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 563);
                    echo "</option>
                                                            ";
                } else {
                    // line 565
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", [], "any", false, false, false, 565);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 565);
                    echo "</option>
                                                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "
                                                </td>
                                                <td class=\"text-center\">
                                                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 570
            echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_remove", [], "any", false, false, false, 570);
            echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
            echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 570);
            echo "') ? \$('#exchange1c_currency_row";
            echo ($context["currency_row"] ?? null);
            echo "').remove() : false;\"><i class=\"fa fa-minus-circle\"></i></button>
                                                </td>
                                            </tr>
                                            ";
            // line 573
            $context["currency_row"] = (($context["currency_row"] ?? null) + 1);
            // line 574
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config_currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 575
        echo "                                    </tbody>
                                    <tfoot>
                                        ";
        // line 577
        if (twig_length_filter($this->env, ($context["currencies"] ?? null))) {
            // line 578
            echo "                                            <tr>
                                                <td colspan=\"2\"></td>
                                                <td class=\"text-center\">
                                                    <button type=\"button\" id=\"btn_add_currency\" onclick=\"addConfigCurrency();\" data-toggle=\"tooltip\" title=\"";
            // line 581
            echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_add", [], "any", false, false, false, 581);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
                                                </td>
                                            </tr>
                                        ";
        }
        // line 585
        echo "                                    </tfoot>
                                </table>
                            </div> <!-- table -->
                            <div class=\"form-group\">
                                ";
        // line 589
        echo ($context["html_ignore_price_zero"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 592
        echo ($context["html_currency_convert"] ?? null);
        echo "
                            </div>
                        </div>
                        <!-- ЦЕНЫ -->

                        <!-- ОСТАТКИ -->
                        <div class=\"tab-pane\" id=\"tab-stock\">
                            <legend>";
        // line 599
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_stock", [], "any", false, false, false, 599);
        echo "</legend>
                            <div class=\"form-group\">
                                ";
        // line 601
        echo ($context["html_warehouse_quantity_import"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 604
        echo ($context["html_product_default_stock_status"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 607
        echo ($context["html_product_disable_if_quantity_zero"] ?? null);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 610
        echo ($context["html_flush_quantity"] ?? null);
        echo "
                            </div>
                        </div>
                        <!-- ОСТАТКИ -->

                        <!-- SEO -->
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <!-- SEO товар -->
                            <fieldset>
                                <legend>";
        // line 619
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_generate_seo", [], "any", false, false, false, 619);
        echo "</legend>
                                <div class=\"form-group\">
                                    ";
        // line 621
        echo ($context["html_generate_seo"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 625
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_seo_product", [], "any", false, false, false, 625);
        echo "</legend>
                                <div class=\"form-group\">
                                    ";
        // line 627
        echo ($context["html_seo_product_mode"] ?? null);
        echo "
                                    <label class=\"col-sm-12 text-left\">
                                        ";
        // line 629
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "label_available_patterns", [], "any", false, false, false, 629);
        echo " ";
        echo ($context["exchange1c_seo_product_tags"] ?? null);
        echo "
                                        <input type=\"hidden\" name=\"exchange1c_seo_product_tags\" value=\"";
        // line 630
        echo ($context["exchange1c_seo_product_tags"] ?? null);
        echo "\" />
                                    </label>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 634
        echo ($context["html_seo_product_seo_url"] ?? null);
        echo "
                                    ";
        // line 635
        echo ($context["html_seo_product_seo_url_template"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 638
        echo ($context["html_seo_product_meta_title"] ?? null);
        echo "
                                    ";
        // line 639
        echo ($context["html_seo_product_meta_title_template"] ?? null);
        echo "
                                </div>
                                ";
        // line 641
        if (($context["html_seo_product_meta_h1"] ?? null)) {
            // line 642
            echo "                                    <div class=\"form-group\">
                                        ";
            // line 643
            echo ($context["html_seo_product_meta_h1"] ?? null);
            echo "
                                        ";
            // line 644
            echo ($context["html_seo_product_meta_h1_template"] ?? null);
            echo "
                                    </div>
                                ";
        }
        // line 647
        echo "                                <div class=\"form-group\">
                                    ";
        // line 648
        echo ($context["html_seo_product_meta_description"] ?? null);
        echo "
                                    ";
        // line 649
        echo ($context["html_seo_product_meta_description_template"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 652
        echo ($context["html_seo_product_meta_keyword"] ?? null);
        echo "
                                    ";
        // line 653
        echo ($context["html_seo_product_meta_keyword_template"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 656
        echo ($context["html_seo_product_tag"] ?? null);
        echo "
                                    ";
        // line 657
        echo ($context["html_seo_product_tag_template"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <!-- SEO категория -->
                            <fieldset>
                                <legend>";
        // line 662
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_seo_category", [], "any", false, false, false, 662);
        echo "</legend>
                                <div class=\"form-group\">
                                    ";
        // line 664
        echo ($context["html_seo_category_mode"] ?? null);
        echo "
                                    <label class=\"col-sm-12 text-left\">
                                        ";
        // line 666
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "label_available_patterns", [], "any", false, false, false, 666);
        echo " ";
        echo ($context["exchange1c_seo_category_tags"] ?? null);
        echo "
                                    </label>
                                    <input type=\"hidden\" name=\"exchange1c_seo_category_tags\" value=\"";
        // line 668
        echo ($context["exchange1c_seo_category_tags"] ?? null);
        echo "\" />
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 671
        echo ($context["html_seo_category_seo_url"] ?? null);
        echo "
                                    ";
        // line 672
        echo ($context["html_seo_category_seo_url_template"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 675
        echo ($context["html_seo_category_meta_title"] ?? null);
        echo "
                                    ";
        // line 676
        echo ($context["html_seo_category_meta_title_template"] ?? null);
        echo "
                                </div>
                                ";
        // line 678
        if (($context["html_seo_category_meta_h1"] ?? null)) {
            // line 679
            echo "                                    <div class=\"form-group\">
                                        ";
            // line 680
            echo ($context["html_seo_category_meta_h1"] ?? null);
            echo "
                                        ";
            // line 681
            echo ($context["html_seo_category_meta_h1_template"] ?? null);
            echo "
                                    </div>
                                ";
        }
        // line 684
        echo "                                <div class=\"form-group\">
                                    ";
        // line 685
        echo ($context["html_seo_category_meta_description"] ?? null);
        echo "
                                    ";
        // line 686
        echo ($context["html_seo_category_meta_description_template"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 689
        echo ($context["html_seo_category_meta_keyword"] ?? null);
        echo "
                                    ";
        // line 690
        echo ($context["html_seo_category_meta_keyword_template"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <!-- SEO Производителя -->
                            <fieldset>
                                <legend>";
        // line 695
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_seo_manufacturer", [], "any", false, false, false, 695);
        echo "</legend>
                                <div class=\"form-group\">
                                    ";
        // line 697
        echo ($context["html_seo_manufacturer_mode"] ?? null);
        echo "
                                    <label class=\"col-sm-12 text-left\">
                                        ";
        // line 699
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "label_available_patterns", [], "any", false, false, false, 699);
        echo " ";
        echo ($context["exchange1c_seo_manufacturer_tags"] ?? null);
        echo "
                                    </label>
                                    <input type=\"hidden\" name=\"exchange1c_seo_manufacturer_tags\" value=\"";
        // line 701
        echo ($context["exchange1c_seo_manufacturer_tags"] ?? null);
        echo "\" />
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 704
        echo ($context["html_seo_manufacturer_seo_url"] ?? null);
        echo "
                                    ";
        // line 705
        echo ($context["html_seo_manufacturer_seo_url_template"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 708
        echo ($context["html_seo_manufacturer_meta_title"] ?? null);
        echo "
                                    ";
        // line 709
        echo ($context["html_seo_manufacturer_meta_title_template"] ?? null);
        echo "
                                </div>
                                ";
        // line 711
        if (($context["html_seo_manufacturer_meta_h1"] ?? null)) {
            // line 712
            echo "                                    <div class=\"form-group\">
                                        ";
            // line 713
            echo ($context["html_seo_manufacturer_meta_h1"] ?? null);
            echo "
                                        ";
            // line 714
            echo ($context["html_seo_manufacturer_meta_h1_template"] ?? null);
            echo "
                                    </div>
                                ";
        }
        // line 717
        echo "                                <div class=\"form-group\">
                                    ";
        // line 718
        echo ($context["html_seo_manufacturer_meta_description"] ?? null);
        echo "
                                    ";
        // line 719
        echo ($context["html_seo_manufacturer_meta_description_template"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 722
        echo ($context["html_seo_manufacturer_meta_keyword"] ?? null);
        echo "
                                    ";
        // line 723
        echo ($context["html_seo_manufacturer_meta_keyword_template"] ?? null);
        echo "
                                </div>
                            </fieldset>
                        </div><!-- tab-seo -->

                        <!-- ЗАКАЗЫ -->
                        <div class=\"tab-pane\" id=\"tab-order\">
                            <fieldset>
                                <legend>";
        // line 731
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_order_export", [], "any", false, false, false, 731);
        echo "</legend>
                                <div class=\"form-group\">
                                    ";
        // line 733
        echo ($context["html_orders_export_modify"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\" id=\"order_date_export\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 736
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "entry_order_date_export", [], "any", false, false, false, 736);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <input type=\"datetime-local\" name=\"exchange1c_order_date\" class=\"form-control\" value=\"";
        // line 738
        echo ($context["order_date_export"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-8\">
                                        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
                                            ";
        // line 742
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_order_date_export", [], "any", false, false, false, 742);
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 747
        echo ($context["html_order_status_export"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\" id=\"order_status_export\">
                                    ";
        // line 750
        echo ($context["html_order_status_exported"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 753
        echo ($context["html_order_reserve_product"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 756
        echo ($context["html_convert_orders_cp1251"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 760
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_set_order_status", [], "any", false, false, false, 760);
        echo "</legend>
                                <div class=\"form-group\" id=\"orders_import\">
                                    ";
        // line 762
        echo ($context["html_orders_import"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\" id=\"order_status_shipped\">
                                    ";
        // line 765
        echo ($context["html_order_status_shipped"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\" id=\"order_status_shipped\">
                                    ";
        // line 768
        echo ($context["html_order_status_canceled"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\" id=\"order_status_paid\">
                                    ";
        // line 771
        echo ($context["html_order_status_paid"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\" id=\"order_status_completed\">
                                    ";
        // line 774
        echo ($context["html_order_status_completed"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 778
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_order_other", [], "any", false, false, false, 778);
        echo "</legend>
                                <div class=\"form-group\">
                                    ";
        // line 780
        echo ($context["html_order_currency"] ?? null);
        echo "
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 784
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "legend_setting_order_shipping", [], "any", false, false, false, 784);
        echo "</legend>
                                <div class=\"alert alert-info\">
                                    <i class=\"fa fa-info-circle\"></i>
                                    ";
        // line 787
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "i_setting_order_shipping", [], "any", false, false, false, 787);
        echo "
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 791
        echo ($context["html_services_in_table_product"] ?? null);
        echo "
                                </div>
                                <!-- ТАБЛИЦА Настройка видов доставки для экспорта в заказы в ТС -->
                                <div class=\"table-responsive\">
                                    <table id=\"orders_delivery\" class=\"table table-bordered table-hover\">
                                        <thead>
                                            <tr>
                                                <td class=\"col-sm-5 text-left\">";
        // line 798
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_types_of_delivery", [], "any", false, false, false, 798);
        echo "</td>
                                                <td class=\"col-sm-6 text-left\">";
        // line 799
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_mapped_services", [], "any", false, false, false, 799);
        echo "</td>
                                                <td class=\"col-sm-1 text-center\">";
        // line 800
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_action", [], "any", false, false, false, 800);
        echo "</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 804
        $context["order_delivery_row"] = 0;
        // line 805
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exchange1c_order_delivery"] ?? null));
        foreach ($context['_seq'] as $context["row_id"] => $context["data_row"]) {
            // line 806
            echo "                                                <tr id=\"exchange1c_order_delivery_row";
            echo ($context["order_delivery_row"] ?? null);
            echo "\">
                                                    <td class=\"text-left\"><select class=\"form-control\" name=\"exchange1c_order_delivery[";
            // line 807
            echo $context["row_id"];
            echo "][delivery_id]\">
                                                            ";
            // line 808
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_types_of_delivery"] ?? null));
            foreach ($context['_seq'] as $context["delivery_id"] => $context["name"]) {
                // line 809
                echo "                                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["data_row"], "delivery_id", [], "any", false, false, false, 809) == $context["delivery_id"])) {
                    // line 810
                    echo "                                                                    <option value=\"";
                    echo $context["delivery_id"];
                    echo "\" selected=\"selected\">";
                    echo $context["name"];
                    echo "</option>
                                                                ";
                } else {
                    // line 812
                    echo "                                                                    <option value=\"";
                    echo $context["delivery_id"];
                    echo "\">";
                    echo $context["name"];
                    echo "</option>
                                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['delivery_id'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 814
            echo "
                                                        </select></td>
                                                    <td class=\"text-left\">
                                                        <div><input class=\"form-control\" type=\"text\" name=\"exchange1c_order_delivery[";
            // line 817
            echo $context["row_id"];
            echo "][delivery_service_name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["data_row"], "delivery_service_name", [], "any", false, false, false, 817);
            echo "\" /></div>
                                                    </td>
                                                    <td class=\"text-center\">
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 820
            echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_remove", [], "any", false, false, false, 820);
            echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
            echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 820);
            echo "') ? \$('#exchange1c_order_delivery_row";
            echo ($context["order_delivery_row"] ?? null);
            echo "').remove() : false;\"><i class=\"fa fa-minus-circle\"></i></button>
                                                    </td>
                                                </tr>
                                                ";
            // line 823
            $context["order_delivery_row"] = (($context["order_delivery_row"] ?? null) + 1);
            // line 824
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row_id'], $context['data_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 825
        echo "                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan=\"2\"></td>
                                                <td class=\"text-center\">
                                                    <a onclick=\"addOrderDelivery();\" data-toggle=\"tooltip\" title=\"";
        // line 830
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_add", [], "any", false, false, false, 830);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></a>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- table -->
                                <!-- ТАБЛИЦА Настройка видов доставки для экспорта в заказы в ТС -->
                            </fieldset>

                        </div><!-- tab-order -->

                        <!-- РУЧНАЯ ОБРАБОТКА -->
                        <div class=\"tab-pane\" id=\"tab-manual\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"button-upload\">
                                    <span title=\"\" data-original-title=\"";
        // line 845
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "help_upload", [], "any", false, false, false, 845);
        echo "\" data-toggle=\"tooltip\">";
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "entry_upload", [], "any", false, false, false, 845);
        echo "</span>
                                </label>
                                <button id=\"exchange1c-button-upload\" class=\"col-sm-2 btn btn-primary\" type=\"button\" data-loading-text=\"";
        // line 847
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_upload", [], "any", false, false, false, 847);
        echo "\">
                                    <i class=\"fa fa-upload\"></i>
                                    ";
        // line 849
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_upload", [], "any", false, false, false, 849);
        echo "
                                </button>
                                <div class=\"col-sm-8\">
                                    <label class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> Upload max file size : ";
        // line 852
        echo ($context["upload_max_filesize"] ?? null);
        echo "</label>
                                    <label class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> Maximum size of POST data : ";
        // line 853
        echo ($context["post_max_size"] ?? null);
        echo "</label>
                                    <label class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 854
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_upload_file", [], "any", false, false, false, 854);
        echo "</label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"button-download-orders\">
                                    <span title=\"\" data-original-title=\"";
        // line 859
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "help_download_orders", [], "any", false, false, false, 859);
        echo "\" data-toggle=\"tooltip\">";
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "entry_download_orders", [], "any", false, false, false, 859);
        echo "</span>
                                </label>
                                <button class=\"col-sm-2 btn btn-primary\" form=\"form-download-orders\" type=\"submit\" data-loading-text=\"";
        // line 861
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_download_orders", [], "any", false, false, false, 861);
        echo "\">
                                    <i class=\"fa fa-download\"></i>
                                    ";
        // line 863
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_download", [], "any", false, false, false, 863);
        echo "
                                </button>
                                <div class=\"col-sm-8\">
                                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 866
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_download_orders", [], "any", false, false, false, 866);
        echo "</div>
                                </div>
                            </div>
                        </div><!-- tab-manual -->

                        <!-- ИНФОРМАЦИЯ -->
                        <div class=\"tab-pane\" id=\"tab-info\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 874
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "entry_num_links_product_info", [], "any", false, false, false, 874);
        echo "</label>
                                <div class=\"col-sm-2\">
                                    <div class=\"form-control\">";
        // line 876
        echo ($context["links_product_info"] ?? null);
        echo "</div>
                                </div>
                                <div class=\"col-sm-8\">
                                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
                                        ";
        // line 880
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_num_links_product_info", [], "any", false, false, false, 880);
        echo "
                                    </div>
                                </div>
                                <label class=\"col-sm-2 control-label\">";
        // line 883
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "entry_num_links_category_info", [], "any", false, false, false, 883);
        echo "</label>
                                <div class=\"col-sm-2\">
                                    <div class=\"form-control\">";
        // line 885
        echo ($context["links_category_info"] ?? null);
        echo "</div>
                                </div>
                                <div class=\"col-sm-8\">
                                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
                                        ";
        // line 889
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_num_links_category_info", [], "any", false, false, false, 889);
        echo "
                                    </div>
                                </div>
                                <label class=\"col-sm-2 control-label\">";
        // line 892
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "entry_num_links_manufacturer_info", [], "any", false, false, false, 892);
        echo "</label>
                                <div class=\"col-sm-2\">
                                    <div class=\"form-control\">";
        // line 894
        echo ($context["links_manufacturer_info"] ?? null);
        echo "</div>
                                </div>
                                <div class=\"col-sm-8\">
                                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
                                        ";
        // line 898
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_num_links_manufacturer_info", [], "any", false, false, false, 898);
        echo "
                                    </div>
                                </div>
                                <label class=\"col-sm-2 control-label\">";
        // line 901
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "entry_num_links_attribute_info", [], "any", false, false, false, 901);
        echo "</label>
                                <div class=\"col-sm-2\">
                                    <div class=\"form-control\">";
        // line 903
        echo ($context["links_attribute_info"] ?? null);
        echo "</div>
                                </div>
                                <div class=\"col-sm-8\">
                                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
                                        ";
        // line 907
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_num_links_attribute_info", [], "any", false, false, false, 907);
        echo "
                                    </div>
                                </div>
                                <label class=\"col-sm-2 control-label\">";
        // line 910
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "entry_max_execution_time", [], "any", false, false, false, 910);
        echo "</label>
                                <div class=\"col-sm-2\">
                                    <div class=\"form-control\">";
        // line 912
        echo ($context["max_execution_time"] ?? null);
        echo "</div>
                                </div>
                                <div class=\"col-sm-8\">
                                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
                                        ";
        // line 916
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_max_execution_time", [], "any", false, false, false, 916);
        echo "
                                    </div>
                                </div>
                                <label class=\"col-sm-2 control-label\">";
        // line 919
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "entry_memory_limit", [], "any", false, false, false, 919);
        echo "</label>
                                <div class=\"col-sm-2\">
                                    <div class=\"form-control\">";
        // line 921
        echo ($context["memory_limit"] ?? null);
        echo "</div>
                                </div>
                                <div class=\"col-sm-8\">
                                    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
                                        ";
        // line 925
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "desc_memory_limit", [], "any", false, false, false, 925);
        echo "
                                    </div>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Statistics:</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">Last exchange:</label>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-control\">";
        // line 934
        echo ($context["exchange_date"] ?? null);
        echo "</div>
                                    </div>
                                    <div class=\"col-sm-8\">
                                        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>
                                            Last exchange date and time
                                        </div>
                                    </div>
                                </div>
                                <!-- ТАБЛИЦА Настройка видов доставки для экспорта в заказы в ТС -->
                                <div class=\"table-responsive\">
                                    <table id=\"orders_delivery\" class=\"table table-bordered table-hover\">
                                        <thead>
                                            <tr>
                                                <td class=\"col-sm-2 text-center\">file name</td>
                                                <td class=\"col-sm-8 text-center\">info</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 952
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statistics"] ?? null));
        foreach ($context['_seq'] as $context["filename"] => $context["data_info"]) {
            // line 953
            echo "                                                <tr>
                                                    <td class=\"text-left\">";
            // line 954
            echo $context["filename"];
            echo "</td>
                                                    <td class=\"text-left\"><ul>";
            // line 955
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data_info"]);
            foreach ($context['_seq'] as $context["str"] => $context["info"]) {
                echo "<li>";
                echo (($context["str"] . " = ") . $context["info"]);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['str'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</ul></td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filename'], $context['data_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 958
        echo "                                        </tbody>
                                    </table>
                                </div> <!-- table -->
                                <!-- ТАБЛИЦА Настройка видов доставки для экспорта в заказы в ТС -->
                            </fieldset>
                        </div><!-- tab-info -->

                        <!-- СЕРВИСЫЕ ФУНКЦИИ -->
                        <div class=\"tab-pane\" id=\"tab-service\">
                            <fieldset>
                                <div class=\"form-group\">
                                    ";
        // line 969
        echo ($context["html_cleaning_db"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 972
        echo ($context["html_delete_import_data"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 975
        echo ($context["html_cleaning_links"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 978
        echo ($context["html_cleaning_old_images"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 981
        echo ($context["html_cleaning_cache"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 984
        echo ($context["html_remove_doubles_links"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 987
        echo ($context["html_delete_double_url_alias"] ?? null);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 990
        echo ($context["html_remove_unised_manufacturers"] ?? null);
        echo "
                                </div>
                            </fieldset>
                        </div><!-- tab-service -->

                        <!-- СПРАВКА -->
                        <div class=\"tab-pane\" id=\"tab-help\">
                            <fieldset>
                                <legend>ERROR CODE DESCRIPTION</legend>
                                <div class=\"table-responsive\">
                                    <table id=\"errors_description\" class=\"table table-bordered table-hover\">
                                        <thead>
                                            <tr>
                                                <td class=\"col-sm-1 text-center\">CODE</td>
                                                <td class=\"col-sm-8 text-center\">DESCRIPTION</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 1008
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["error_description"] ?? null));
        foreach ($context['_seq'] as $context["error_code"] => $context["data_info"]) {
            // line 1009
            echo "                                                <tr>
                                                    <td class=\"text-center\">";
            // line 1010
            echo $context["error_code"];
            echo "</td>
                                                    <td class=\"text-left\">";
            // line 1011
            echo $context["data_info"];
            echo "</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['error_code'], $context['data_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1014
        echo "                                        </tbody>
                                    </table>
                                </div> <!-- table -->
                            </fieldset>
                        </div><!-- tab-help -->

                        <!-- ОБНОВЛЕНИЯ -->
                        <div class=\"tab-pane\" id=\"tab-updates\">
                            <fieldset>
                                <legend>1.6.4.1 от 10.03.2018</legend>
                                <div class=\"form-group\">
                                    <ul>
                                        <li>Удалена опция \"Уведомлять покупателя\" при смене статуса заказа</li>
                                        <li>Переработана функция изменения статусов заказов после отправки в УС, статус будет изменен только у новых заказов, у остальных заказов статус меняется при загрузке заказов от УС</li>
                                        <li>Добавлена опция в настройказ заказа \"Статус отмененных\", этот статус будет установлен у заказов отмененных в 1С:Предприятие УНФ 1.6, для других не тестировалось, присылайте Ваши файлы orders.xml внесу поправки</li>
                                        <li>Исправлена ошибка при изменении даты выгрузки заказов, ошибка была в том изменения не сохранялись, но автоматически менялась с момента последней выгрузки</li>
                                    </ul>
                                </div>
                                <legend>1.6.4.3 от 23.04.2018</legend>
                                <div class=\"form-group\">
                                    <ul>
                                        <li>Удалена настройка \"Удалять загруженные файлы\" на вкладке <strong>Основные</strong>, вместо нее добавлена другая</li>
                                        <li>Добавлена настройка \"Очищать кэш\" на вкладке <strong>Основные</strong>, эта опция более корректно работает</li>
                                        <li>Сделал полноценную загрузку заказов из УС с характеристиками, теперь на сайте заказы обновляются с учетом опций</li>
                                        <li>Заказы теперь меняют статусы с начального только один раз. Ошибка была связана с тем что когда статус с \"Ожидание\" после выгрузки менялся \"В обработке\" и после обновления его в УС он был обновлен и на сайте, а при включенной опции \"Выгружать измененные\" он снова выгружался и тут статус установленный документом менялся снова на \"В обработке\".</li>
                                        <li>Восстановил работу настройки \"Конвертация валюты\" на вкладке <strong>Цены</strong>, теперь она работает, но курс пока берет из opencart</li>
                                    </ul>
                                </div>
                                <legend>1.6.4.4 от 24.04.2018</legend>
                                <div class=\"form-group\">
                                    <ul>
                                        <li>Добавлена функция для обновления с версии 1.6.3</li>
                                        <li>Добавлена к версии буква беты при изменении версии, например версия 1.6.4.4 может корректироваться (1.6.4.4b1 ... 1.6.4.4b12) и исправлять ошибки ежедневно, и для этих мелких ошибок будет увеличиваться счетчик бета версий, при смене версии счетчик бета сбросится. Если ошибок больше найдено не будет, то бета версия не будет добавляться. Бета версия означает сколько раз было внесено изменений для исправления ошибок.</li>
                                        <li>Исправлены ошибки с производителями</li>
                                        <li>Исправлена ошибка при формировании SEO производителей.</li>
                                    </ul>
                                </div>
                                <legend>1.6.4.4b34 от 03.07.2018</legend>
                                <div class=\"form-group\">
                                    <ul>
                                        <li>Удалены водяные знаки</li>
                                        <li>Включена удаление категорий которых нет в файле при полной выгрузке</li>
                                        <li>Исправлены ошибки с производителями</li>
                                        <li>Изменена настройка очистки кэша на удаления файлов после загрузки</li>
                                        <li>Добавлены отдельные настройки по статусу товара</li>
                                        <li>Удалены некоторые ненужные настройки</li>
                                        <li>Убраны склады</li>
                                        <li>Добавлена кнопка удаления не используемых единиц измерений</li>
                                        <li>Удалена настройка \"Выгружать покупателя\" - если не выгружать то будет ошибка в УС</li>
                                        <li>Включена проверка наличия поддержки PHP класса ZipArchive, если не поддерживается, тогда настройка \"Выгружать в ZIP\" не отображается и для УС сообщается zip=no</li>
                                        <li>Исправлена ошибка при включении и отключения модуля</li>
                                        <li>Поправлена ошибка при выполнении ручной генерациии SEO (не проверялось)</li>
                                        <li>Добавлено отключение генерации SEO при добавлении и обновлении товаров, категорий и производителей.</li>
                                        <li>Включена опция в которой можно перечислить названия опций, которые будут игнорированы</li>
                                        <li>Добавлена настройка вычисления базовой цены как минимальная цена опции (ПОКА ЕЩЕ НЕ ДОДЕЛАНО)</li>
                                        <li>Включена поддержка CommerceML версий 2.03 и 2.04</li>
                                        <li>Включено удаление архива в кэше</li>
                                        <li>Отключение пустых категорий после загрузки каталога</li>
                                        <li>Включение не пустых категорий после загрузки каталога</li>
                                        <li>Исправлена ошибка иногда вылазит при проверке XML файла при распаковке архива</li>
                                        <li>Добавлено отключение товаров и категорий по отдельности при полной загрузке</li>
                                        <li>Добавлено отключение товаров при наличии тега Статус со значением Удален</li>
                                    </ul>
                                </div>
                                <legend>1.6.4.4b36 от 07.08.2018</legend>
                                <div class=\"form-group\">
                                    <ul>
                                        <li>В процессе доработка если контрагент зарегистрирован как Оргранизация и в 1С он переименован...</li>
                                    </ul>
                                </div>
                                <legend>1.6.4.4b37 от 08.08.2018</legend>
                                <div class=\"form-group\">
                                    <ul>
                                        <li>Подправлена опция \"Не показывать товар с нулевым остатком\"</li>
                                    </ul>
                                </div>
                                <legend>1.6.4.5 от 01.09.2018</legend>
                                <div class=\"form-group\">
                                    <ul>
                                        <li>Корректно теперь выгружает заказы в кодировке windows-1251</li>
                                    </ul>
                                </div>
                            </fieldset>
                        </div><!-- tab-updates -->

                    </div><!-- tab-content -->
                </form>
            </div><!-- panel-body-->
        </div><!-- panel panel-default -->
    </div><!-- container-fluid  -->
</div><!-- content -->


<script type=\"text/javascript\"><!--

        \$('#exchange1c-button-upload').on('click', function () {
            \$('#form-upload').remove();

            \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" value=\"\" /></form>');

            \$('#form-upload input[name=\\'file\\']').trigger('click');

            if (typeof timer != 'undefined') {
                clearInterval(timer);
            }

            timer = setInterval(function () {
                if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                    clearInterval(timer);

                    \$.ajax({
                        url: 'index.php?route=extension/module/exchange1c/manualImport&user_token=";
        // line 1125
        echo ($context["user_token"] ?? null);
        echo "',
                        type: 'post',
                        dataType: 'json',
                        data: new FormData(\$('#form-upload')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function () {
                            \$('#exchange1c-button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                            \$('#exchange1c-button-upload').prop('disabled', true);
                        },
                        complete: function () {
                            \$('#exchange1c-button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
                            \$('#exchange1c-button-upload').prop('disabled', false);
                        },
                        success: function (json) {
                            if (json['error']) {
                                alert(json['error']);
                            }

                            if (json['success']) {
                                alert(json['success']);
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            }, 500);
        });


        \$('#exchange1c-button-cleaning_db').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1160
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1160);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualCleaning&user_token=";
        // line 1162
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });


        \$('#exchange1c-button-cleaning_links').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1196
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1196);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualCleaningLinks&user_token=";
        // line 1198
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });


        \$('#exchange1c-button-cleaning_old_images').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1232
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1232);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualCleaningOldImages&user_token=";
        // line 1234
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });


        \$('#exchange1c-button-cleaning_cache').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1268
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1268);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualCleaningCache&user_token=";
        // line 1270
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });


        \$('#exchange1c-button-generate_seo').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1304
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1304);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualGenerateSeo&user_token=";
        // line 1306
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });


        \$('#exchange1c-button-remove_doubles_links').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1340
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1340);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualRemoveDoublesLinks&user_token=";
        // line 1342
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });


        \$('#exchange1c-button-delete_import_data').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1376
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1376);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualDeleteImportData&user_token=";
        // line 1378
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });

        \$('#exchange1c-button-delete_double_url_alias').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1411
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1411);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualDeleteDoubleUrlAlias&user_token=";
        // line 1413
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });

        \$('#exchange1c-button-remove_unised_manufacturers').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1446
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1446);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualRemoveUnisedManufacturers&user_token=";
        // line 1448
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });

        \$('#exchange1c-button-remove_unised_units').on('click', function () {
            \$('#form-clean').remove();
            if (confirm('";
        // line 1481
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1481);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualRemoveUnisedUnits&user_token=";
        // line 1483
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-clean')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                        \$('#button-clean').prop('disabled', true);
                    },
                    complete: function () {
                        \$('#button-clean i').replaceWith('<i class=\"fa fa-trash-o\"></i>');
                        \$('#button-clean').prop('disabled', false);
                    },
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });

        function update(ver) {
            if (confirm('";
        // line 1515
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1515);
        echo "')) {
                \$.ajax({
                    url: 'index.php?route=extension/module/exchange1c/manualUpdate&version=' + ver + '&user_token=";
        // line 1517
        echo ($context["user_token"] ?? null);
        echo "',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-exchange1c')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (json) {
                        if (json['error']) {
                            alert(json['error']);
                        }

                        if (json['success']) {
                            alert(json['success']);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }


        var price_row = ";
        // line 1541
        echo ($context["price_row"] ?? null);
        echo ";
        function addConfigPriceType() {
            html = '<tr id=\"exchange1c_price_type_row' + price_row + '\">';
            html += '<td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_price_type[' + price_row + '][keyword]\" value=\"\" /></td>';
            html += '<td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_price_type[' + price_row + '][id_cml]\" value=\"\" /></td>';
            html += '<td class=\"text-left\"><select class=\"form-control\" name=\"exchange1c_price_type[' + price_row + '][customer_group_id]\">';
        ";
        // line 1547
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1548
            echo "                        html += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1548);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1548);
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1550
        echo "                    html += '</select></td>';
                    html += '<td class=\"text-left\"><select class=\"form-control\" name=\"exchange1c_price_type[";
        // line 1551
        echo ($context["price_row"] ?? null);
        echo "][table_price]\">';
        ";
        // line 1552
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["table_prices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table_price"]) {
            // line 1553
            echo "            ";
            $context["selected"] = "";
            // line 1554
            echo "            ";
            if (twig_length_filter($this->env, ($context["exchange1c_price_type"] ?? null))) {
                // line 1555
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["table_price"], "name", [], "any", false, false, false, 1555) == twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "table_price", [], "any", false, false, false, 1555))) {
                    // line 1556
                    echo "                            selected  ' selected=\"selected\"'
                ";
                }
                // line 1558
                echo "            ";
            }
            // line 1559
            echo "                                            html += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["table_price"], "name", [], "any", false, false, false, 1559);
            echo "\"";
            echo ($context["selected"] ?? null);
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["table_price"], "desc", [], "any", false, false, false, 1559);
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table_price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1561
        echo "
                                html += '</td>';
                                html += '<td class=\"text-center\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_price_type[' + price_row + '][quantity]\" value=\"1\" size=\"2\" /></td>';
                                html += '<td class=\"text-center\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_price_type[' + price_row + '][priority]\" value=\"";
        // line 1564
        echo (($context["price_row"] ?? null) + 1);
        echo "\" size=\"2\" /></td>';
                                html += '<td class=\"text-center\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 1565
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_remove", [], "any", false, false, false, 1565);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm(\\'";
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1565);
        echo "\\') ? \$(\\'#exchange1c_price_type_row' + price_row + '\\').remove() : false;\"><i class=\"fa fa-minus-circle\"></i></button></td>';
                                html += '</tr>';

                                \$('#exchange1c_price_type_id tbody').append(html);
                                price_row++;
                                \$('select#customer_group').change();
            }


            var             currency_row = ";
        // line 1574
        echo ($context["currency_row"] ?? null);
        echo ";
                            function addConfigCurrency() {
                                html = '<tr id=\"exchange1c_price_type_row' + currency_row + '\">';
                                html += '<td class=\"text-left\"><input class=\"form-control\" type=\"text\" name=\"exchange1c_currency[' + currency_row + '][name]\" value=\"\" /></td>';
                                html += '<td class=\"text-left\"><select class=\"form-control\" id=\"customer_group\" name=\"exchange1c_currency[' + currency_row + '][currency_id]\">';
        ";
        // line 1579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 1580
            echo "                                                html += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "currency_id", [], "any", false, false, false, 1580);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 1580);
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1582
        echo "                                            html += '</select></td>';
                                            html += '<td class=\"text-center\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 1583
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_remove", [], "any", false, false, false, 1583);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm(\\'";
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1583);
        echo "\\') ? \$(\\'#exchange1c_currency_row' + currency_row + '\\').remove() : false;\"><i class=\"fa fa-minus-circle\"></i></button></td>';
                                            html += '</tr>';

                                            \$('#exchange1c_currency tbody').append(html);
                                            currency_row++;
                                        }


                                        var order_delivery_row = ";
        // line 1591
        echo ($context["order_delivery_row"] ?? null);
        echo ";
                                        function addOrderDelivery() {
                                            html = '<tr id=\"exchange1c_order_delivery_row' + order_import_row + '\">';
                                            html += '<td class=\"text-left\"><select class=\"form-control\" name=\"exchange1c_order_delivery[' + order_delivery_row + '][delivery_id]\">';
        ";
        // line 1595
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_types_of_delivery"] ?? null));
        foreach ($context['_seq'] as $context["delivery_id"] => $context["name"]) {
            // line 1596
            echo "                                                html += '<option value=\"";
            echo $context["delivery_id"];
            echo "\">";
            echo $context["name"];
            echo "</option>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delivery_id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1598
        echo "                                            html += '<td class=\"text-left\">';
                                            html += '<div><input class=\"form-control\" type=\"text\" name=\"exchange1c_order_delivery[' + order_delivery_row + '][delivery_service_name]\" /></div>';
                                            html += '</td>';
                                            html += '<td class=\"text-center\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 1601
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "button_remove", [], "any", false, false, false, 1601);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm(\\'";
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_confirm", [], "any", false, false, false, 1601);
        echo "\\') ? \$(\\'#exchange1c_order_delivery_row' + order_delivery_row + '\\').remove() : false; order_delivery_row--;\"><i class=\"fa fa-minus-circle\"></i></button></td>';
                                            html += '</tr>';

                                            \$('#orders_delivery tbody').append(html);
                                            order_delivery_row++;
                                        }


                                        function image_upload(field, thumb) {
                                            \$('#dialog').remove();

                                            \$('#content').prepend('<div id=\"dialog\" style=\"padding: 3px 0px 0px 0px;\"><iframe src=\"index.php?route=common/filemanager&user_token=";
        // line 1612
        echo ($context["user_token"] ?? null);
        echo "&field=' + encodeURIComponent(field) + '\" style=\"padding:0; margin: 0; display: block; width: 100%; height: 100%;\" frameborder=\"no\" scrolling=\"auto\"></iframe></div>');

                                            \$('#dialog').dialog({
                                                title: '";
        // line 1615
        echo twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "text_image_manager", [], "any", false, false, false, 1615);
        echo "',
                                                close: function (event, ui) {
                                                    if (\$('#' + field).attr('value')) {
                                                        \$.ajax({
                                                            url: 'index.php?route=common/filemanager/image&user_token=";
        // line 1619
        echo ($context["user_token"] ?? null);
        echo "&image=' + encodeURIComponent(\$('#' + field).val()),
                                                            dataType: 'text',
                                                            success: function (data) {
                                                                \$('#' + thumb).replaceWith('<img src=\"' + data + '\" alt=\"\" id=\"' + thumb + '\" />');
                                                            }
                                                        });
                                                    }
                                                },
                                                bgiframe: false,
                                                width: 800,
                                                height: 400,
                                                resizable: false,
                                                modal: false
                                            });
                                        }
                                        ;


                                        function checkOptionSynchronize_by_code() {

                                            var val = \$('input[name=\"exchange1c_synchronize_by_code\"]:checked').val();
                                            if (val == 1) {
                                                \$('select[name=\"exchange1c_synchronize_new_product_by\"]').attr('disabled', 'disabled');
                                            } else {
                                                \$('select[name=\"exchange1c_synchronize_new_product_by\"]').attr('disabled', null);
                                            }

                                        } // checkOptionSynchronize_by_code()


                                        function checkOptionImport_product_name() {
                                            var val = \$('select[name=\"exchange1c_import_product_name\"]').val();
                                            if (val == \"manually\") {
                                                \$('div#import_product_name_field_select').slideDown;
                                            } else {
                                                \$('div#import_product_name_field').slideUp();
                                            }

                                        } // checkOptionImport_product_name()


                                        \$('input[name=\"exchange1c_synchronize_by_code\"]').change(function () {
                                            checkOptionSynchronize_by_code();
                                        })


                                        \$('select[name=\"exchange1c_import_product_name\"]').change(function () {
                                            checkOptionImport_product_name();
                                        });

// Статус модуля
                                        \$('input[name=\"exchange1c_module_status\"]').change(function () {
                                            checkStatus(this.value);
                                        })

                                        function checkStatus(status) {
                                            if (status != 1) {
                                                \$('#danger').slideDown();
                                                \$('#auth').slideUp();
                                                \$('#security').slideUp();
                                            } else {
                                                \$('#danger').slideUp();
                                                \$('#auth').slideDown();
                                                \$('#security').slideDown();
                                            }
                                        }

// Вывод уведомления об изменении формы
                                        \$('input').change(function () {
                                            \$('#modification').slideDown();
                                            modificationForm(this);
                                        })
                                        \$('select').change(function () {
                                            \$('#modification').slideDown();
                                            modificationForm(this);
                                        })
                                        \$('checkbox').change(function () {
                                            \$('#modification').slideDown();
                                            modificationForm(this);
                                        })

                                        function productImportMode(value) {
                                            // Режим обмена товарами
                                            if (value == 'all') {
                                                \$('#product_sync').slideDown();
                                                \$('#product_status').slideDown();
                                                \$('#product_field_update').slideDown();
                                                \$('#product_new_status_disable').slideDown();
                                            } else if (value == 'only_new') {
                                                \$('#product_sync').slideDown();
                                                \$('#product_status').slideDown();
                                                \$('#product_field_update').slideDown();
                                                \$('#product_new_status_disable').slideDown();
                                            } else if (value == 'only_update') {
                                                \$('#product_sync').slideDown();
                                                \$('#product_status').slideDown();
                                                \$('#product_field_update').slideDown();
                                                \$('#product_new_status_disable').slideUp();
                                            } else if (value == 'not_change') {
                                                \$('#product_sync').slideUp();
                                                \$('#product_status').slideUp();
                                                \$('#product_field_update').slideUp();
                                                \$('#product_new_status_disable').slideUp();
                                            }
                                        }

                                        function productNameManually(value) {
                                            // Название товара из поля указанного вручную
                                            if (value == 'manually') {
                                                \$('#product_name_field').slideDown();
                                            } else {
                                                \$('#product_name_field').slideUp();
                                            }
                                        }

                                        function logMode(value) {
                                            // Отображение настроек журнала
                                            if (value != '0') {
                                                \$('#log-enable').slideDown();
                                            } else {
                                                \$('#log-enable').slideUp();
                                            }
                                        }

                                        function groupName(\$object) {
                                            if (\$object.val() == \"brackets\") {
                                                \$('#attribute_group_name').slideUp();
                                            } else {
                                                \$('#attribute_group_name').slideDown();
                                            }
                                        }


                                        function modificationForm(\$object) {

                                            if (\$object) {
                                                if (\$object.name == 'exchange1c_product_import_mode') {
                                                    productImportMode(\$object.value);
                                                } else if (\$object.name == 'exchange1c_product_name') {
                                                    productNameManually(\$object.value);
                                                } else if (\$object.name == 'exchange1c_log_level') {
                                                    logMode(\$object.value);
                                                } else if (\$object.name == 'exchange1c_attribute_group_name_mode') {
                                                    //groupName(\$('select[name=\"exchange1c_groupname_in_brackets_attribute\"]'));
                                                }
                                            } else {
                                                productImportMode(\$('select[name=\"exchange1c_product_import_mode\"]').val());
                                                productNameManually(\$('select[name=\"exchange1c_product_name\"]').val());
                                                logMode(\$('select[name=\"exchange1c_log_level\"]').val());
                                                //groupName(\$('select[name=\"exchange1c_groupname_in_brackets_attribute\"]'))

                                            }

                                        }

                                        \$(document).ready(function () {

                                            checkStatus(\$('input[name=\"exchange1c_module_status\"]:checked').val());
                                            modificationForm();
                                            checkOptionSynchronize_by_code();
                                            checkOptionImport_product_name();

                                        });

//--></script>

        ";
        // line 1785
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/exchange1c.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3094 => 1785,  2925 => 1619,  2918 => 1615,  2912 => 1612,  2896 => 1601,  2891 => 1598,  2880 => 1596,  2876 => 1595,  2869 => 1591,  2856 => 1583,  2853 => 1582,  2842 => 1580,  2838 => 1579,  2830 => 1574,  2816 => 1565,  2812 => 1564,  2807 => 1561,  2794 => 1559,  2791 => 1558,  2787 => 1556,  2784 => 1555,  2781 => 1554,  2778 => 1553,  2774 => 1552,  2770 => 1551,  2767 => 1550,  2756 => 1548,  2752 => 1547,  2743 => 1541,  2716 => 1517,  2711 => 1515,  2676 => 1483,  2671 => 1481,  2635 => 1448,  2630 => 1446,  2594 => 1413,  2589 => 1411,  2553 => 1378,  2548 => 1376,  2511 => 1342,  2506 => 1340,  2469 => 1306,  2464 => 1304,  2427 => 1270,  2422 => 1268,  2385 => 1234,  2380 => 1232,  2343 => 1198,  2338 => 1196,  2301 => 1162,  2296 => 1160,  2258 => 1125,  2145 => 1014,  2136 => 1011,  2132 => 1010,  2129 => 1009,  2125 => 1008,  2104 => 990,  2098 => 987,  2092 => 984,  2086 => 981,  2080 => 978,  2074 => 975,  2068 => 972,  2062 => 969,  2049 => 958,  2031 => 955,  2027 => 954,  2024 => 953,  2020 => 952,  1999 => 934,  1987 => 925,  1980 => 921,  1975 => 919,  1969 => 916,  1962 => 912,  1957 => 910,  1951 => 907,  1944 => 903,  1939 => 901,  1933 => 898,  1926 => 894,  1921 => 892,  1915 => 889,  1908 => 885,  1903 => 883,  1897 => 880,  1890 => 876,  1885 => 874,  1874 => 866,  1868 => 863,  1863 => 861,  1856 => 859,  1848 => 854,  1844 => 853,  1840 => 852,  1834 => 849,  1829 => 847,  1822 => 845,  1804 => 830,  1797 => 825,  1791 => 824,  1789 => 823,  1779 => 820,  1771 => 817,  1766 => 814,  1754 => 812,  1746 => 810,  1743 => 809,  1739 => 808,  1735 => 807,  1730 => 806,  1725 => 805,  1723 => 804,  1716 => 800,  1712 => 799,  1708 => 798,  1698 => 791,  1691 => 787,  1685 => 784,  1678 => 780,  1673 => 778,  1666 => 774,  1660 => 771,  1654 => 768,  1648 => 765,  1642 => 762,  1637 => 760,  1630 => 756,  1624 => 753,  1618 => 750,  1612 => 747,  1604 => 742,  1597 => 738,  1592 => 736,  1586 => 733,  1581 => 731,  1570 => 723,  1566 => 722,  1560 => 719,  1556 => 718,  1553 => 717,  1547 => 714,  1543 => 713,  1540 => 712,  1538 => 711,  1533 => 709,  1529 => 708,  1523 => 705,  1519 => 704,  1513 => 701,  1506 => 699,  1501 => 697,  1496 => 695,  1488 => 690,  1484 => 689,  1478 => 686,  1474 => 685,  1471 => 684,  1465 => 681,  1461 => 680,  1458 => 679,  1456 => 678,  1451 => 676,  1447 => 675,  1441 => 672,  1437 => 671,  1431 => 668,  1424 => 666,  1419 => 664,  1414 => 662,  1406 => 657,  1402 => 656,  1396 => 653,  1392 => 652,  1386 => 649,  1382 => 648,  1379 => 647,  1373 => 644,  1369 => 643,  1366 => 642,  1364 => 641,  1359 => 639,  1355 => 638,  1349 => 635,  1345 => 634,  1338 => 630,  1332 => 629,  1327 => 627,  1322 => 625,  1315 => 621,  1310 => 619,  1298 => 610,  1292 => 607,  1286 => 604,  1280 => 601,  1275 => 599,  1265 => 592,  1259 => 589,  1253 => 585,  1246 => 581,  1241 => 578,  1239 => 577,  1235 => 575,  1229 => 574,  1227 => 573,  1217 => 570,  1212 => 567,  1200 => 565,  1192 => 563,  1189 => 562,  1185 => 561,  1181 => 560,  1175 => 559,  1170 => 558,  1165 => 557,  1163 => 556,  1156 => 552,  1152 => 551,  1148 => 550,  1140 => 545,  1135 => 542,  1128 => 538,  1123 => 535,  1121 => 534,  1117 => 532,  1111 => 531,  1109 => 530,  1099 => 527,  1092 => 525,  1086 => 524,  1082 => 522,  1070 => 520,  1062 => 518,  1059 => 517,  1055 => 516,  1051 => 515,  1047 => 513,  1035 => 511,  1027 => 509,  1024 => 508,  1020 => 507,  1016 => 506,  1010 => 505,  1004 => 504,  999 => 503,  994 => 502,  992 => 501,  985 => 497,  981 => 496,  977 => 495,  973 => 494,  969 => 493,  965 => 492,  961 => 491,  953 => 486,  948 => 484,  941 => 480,  935 => 477,  929 => 474,  923 => 471,  910 => 461,  903 => 457,  892 => 449,  883 => 443,  874 => 437,  870 => 436,  866 => 435,  862 => 434,  854 => 429,  847 => 425,  841 => 422,  835 => 419,  829 => 416,  823 => 413,  817 => 410,  811 => 407,  805 => 404,  786 => 388,  780 => 385,  774 => 382,  768 => 379,  762 => 376,  756 => 373,  750 => 370,  744 => 367,  728 => 354,  721 => 350,  716 => 348,  707 => 342,  698 => 336,  689 => 330,  680 => 324,  671 => 318,  662 => 312,  658 => 311,  654 => 310,  650 => 309,  642 => 304,  632 => 297,  626 => 294,  619 => 290,  613 => 287,  607 => 284,  602 => 282,  597 => 280,  591 => 277,  585 => 274,  573 => 265,  567 => 262,  561 => 259,  556 => 257,  540 => 244,  531 => 238,  522 => 232,  513 => 226,  504 => 220,  495 => 214,  486 => 208,  477 => 202,  473 => 201,  469 => 200,  465 => 199,  457 => 194,  450 => 190,  444 => 187,  439 => 185,  432 => 181,  426 => 178,  420 => 175,  414 => 172,  408 => 169,  402 => 166,  397 => 164,  390 => 160,  384 => 157,  378 => 154,  372 => 151,  366 => 148,  361 => 146,  351 => 139,  347 => 138,  343 => 137,  339 => 136,  335 => 135,  328 => 131,  316 => 122,  310 => 119,  302 => 114,  297 => 112,  290 => 108,  285 => 106,  278 => 102,  272 => 99,  267 => 97,  262 => 96,  256 => 93,  253 => 92,  251 => 91,  247 => 90,  240 => 86,  234 => 83,  229 => 81,  224 => 79,  218 => 76,  212 => 73,  206 => 70,  200 => 67,  194 => 64,  184 => 57,  180 => 56,  176 => 55,  172 => 54,  168 => 53,  164 => 52,  160 => 51,  156 => 50,  152 => 49,  148 => 48,  144 => 47,  140 => 46,  135 => 44,  131 => 43,  125 => 40,  121 => 38,  115 => 35,  111 => 33,  109 => 32,  101 => 26,  93 => 22,  91 => 21,  85 => 17,  74 => 15,  70 => 14,  65 => 12,  58 => 10,  52 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/exchange1c.twig", "");
    }
}
