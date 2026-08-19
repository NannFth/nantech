<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig */
class __TwigTemplate_df629a999d26a3af1791083be5effae3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header_summary' => [$this, 'block_header_summary'],
            'header_references' => [$this, 'block_header_references'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
<div class=\"product-header-details\">
";
        // line 7
        yield from $this->unwrap()->yieldBlock('header_summary', $context, $blocks);
        // line 97
        yield "
";
        // line 98
        yield from $this->unwrap()->yieldBlock('header_references', $context, $blocks);
        // line 111
        yield "</div>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_summary(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  ";
        // line 11
        yield "  ";
        $context["productData"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11);
        // line 12
        yield "  <div class=\"product-header-summary\">
    <div class=\"product-field-preview\" data-role=\"price-tax-excluded\">
      <div class=\"product-field-value\">
        ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, true, false, 15), "retail_price", [], "any", false, true, false, 15), "ecotax_tax_excluded", [], "any", true, true, false, 15)) {
            // line 16
            yield "          ";
            $context["final_price_tax_excluded"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 16), "retail_price", [], "any", false, false, false, 16), "price_tax_excluded", [], "any", false, false, false, 16) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 16), "retail_price", [], "any", false, false, false, 16), "ecotax_tax_excluded", [], "any", false, false, false, 16));
            // line 17
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(($context["final_price_tax_excluded"] ?? null)), "html", null, true);
            yield "
        ";
        } else {
            // line 19
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 19), "retail_price", [], "any", false, false, false, 19), "price_tax_excluded", [], "any", false, false, false, 19)), "html", null, true);
            yield "
        ";
        }
        // line 21
        yield "      </div>
      <div class=\"product-field-label\">
        ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax excl.", [], "Admin.Global"), "html", null, true);
        yield "
      </div>
    </div>

    <div class=\"product-field-preview\" data-role=\"price-tax-included\">
      <div class=\"product-field-value\">
        ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 29), "retail_price", [], "any", false, false, false, 29), "price_tax_included", [], "any", false, false, false, 29)), "html", null, true);
        yield "
      </div>
      <div class=\"product-field-label\">
        ";
        // line 33
        yield "        ";
        if ((($tmp = ($context["taxEnabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "          ";
            // line 35
            yield "          ";
            $context["taxRate"] = 0;
            // line 36
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productForm"] ?? null), "pricing", [], "any", false, false, false, 36), "retail_price", [], "any", false, false, false, 36), "tax_rules_group_id", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "choices", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
                // line 37
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 37) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, false, false, 37), "retail_price", [], "any", false, false, false, 37), "tax_rules_group_id", [], "any", false, false, false, 37))) {
                    // line 38
                    yield "              ";
                    $context["taxRate"] = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 38)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["data-tax-rate"] ?? null) : null);
                    // line 39
                    yield "            ";
                }
                // line 40
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['group_label'], $context['choice'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "
          ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl. (tax rule: %taxRate%%)", ["%taxRate%" => Twig\Extension\CoreExtension::round(($context["taxRate"] ?? null), 2)], "Admin.Catalog.Feature"), "html", null, true);
            yield "
        ";
        } else {
            // line 44
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl.", [], "Admin.Catalog.Feature"), "html", null, true);
            yield "
        ";
        }
        // line 46
        yield "      </div>
    </div>

    ";
        // line 50
        yield "    ";
        if ((($tmp = ($context["stockEnabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "      ";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "header", [], "any", false, false, false, 51), "type", [], "any", false, false, false, 51) == "pack") &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "stock", [], "any", false, false, false, 51), "quantities", [], "any", false, false, false, 51), "pack_quantity", [], "any", false, false, false, 51)))) {
                // line 52
                yield "        ";
                $context["quantityData"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "stock", [], "any", false, false, false, 52), "quantities", [], "any", false, false, false, 52), "pack_quantity", [], "any", false, false, false, 52);
                // line 53
                yield "      ";
            } else {
                // line 54
                yield "        ";
                $context["quantityData"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "stock", [], "any", false, false, false, 54), "quantities", [], "any", false, false, false, 54), "delta_quantity", [], "any", false, false, false, 54), "quantity", [], "any", false, false, false, 54);
                // line 55
                yield "      ";
            }
            // line 56
            yield "
      ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "header", [], "any", false, false, false, 57), "type", [], "any", false, false, false, 57) != "combinations")) {
                // line 58
                yield "        ";
                $context["lowStock"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "stock", [], "any", false, false, false, 58), "options", [], "any", false, false, false, 58), "low_stock_threshold", [], "any", false, false, false, 58);
                // line 59
                yield "      ";
            } else {
                // line 60
                yield "        ";
                $context["lowStock"] = 0;
                // line 61
                yield "      ";
            }
            // line 62
            yield "
      ";
            // line 63
            $context["outOfStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("out of stock", [], "Admin.Catalog.Feature");
            // line 64
            yield "      ";
            $context["lowStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("low stock", [], "Admin.Catalog.Feature");
            // line 65
            yield "      ";
            $context["inStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("in stock", [], "Admin.Catalog.Feature");
            // line 66
            yield "
      ";
            // line 67
            if ((($context["quantityData"] ?? null) <= 0)) {
                // line 68
                yield "        ";
                $context["stockClass"] = "danger";
                // line 69
                yield "        ";
                $context["stockLabel"] = ($context["outOfStockLabel"] ?? null);
                // line 70
                yield "      ";
            } elseif (((($context["lowStock"] ?? null) > 0) && (($context["quantityData"] ?? null) <= ($context["lowStock"] ?? null)))) {
                // line 71
                yield "        ";
                $context["stockClass"] = "warning";
                // line 72
                yield "        ";
                $context["stockLabel"] = ($context["lowStockLabel"] ?? null);
                // line 73
                yield "      ";
            } else {
                // line 74
                yield "        ";
                $context["stockClass"] = "success";
                // line 75
                yield "        ";
                $context["stockLabel"] = ($context["inStockLabel"] ?? null);
                // line 76
                yield "      ";
            }
            // line 77
            yield "
      <div
        class=\"product-field-preview\"
        data-role=\"quantity\"
        ";
            // line 82
            yield "        data-low-stock-threshold=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lowStock"] ?? null), "html", null, true);
            yield "\"
        data-out-of-stock-label=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["outOfStockLabel"] ?? null), "html", null, true);
            yield "\"
        data-low-stock-label=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lowStockLabel"] ?? null), "html", null, true);
            yield "\"
        data-in-stock-label=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inStockLabel"] ?? null), "html", null, true);
            yield "\"
      >
        <div class=\"product-total-quantity product-field-value ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["stockClass"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quantityData"] ?? null), "html", null, true);
            yield "
        </div>
        <div class=\"product-field-label product-total-quantity-label\">
          ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["stockLabel"] ?? null), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 95
        yield "  </div>
";
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_references(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "  ";
        $context["referencesForm"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productForm"] ?? null), "details", [], "any", false, false, false, 99), "references", [], "any", false, false, false, 99);
        // line 100
        yield "  <div class=\"product-header-references\">
    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["referencesForm"] ?? null), "children", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["keyChild"] => $context["child"]) {
            // line 102
            yield "      ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "        <div class=\"product-reference\" data-reference-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyChild"], "html", null, true);
                yield "\">
          <label>";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 104), "label", [], "any", false, false, false, 104), "html", null, true);
                yield "</label>
          <span>";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105), "html", null, true);
                yield "</span>
        </div>
      ";
            }
            // line 108
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['keyChild'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  327 => 109,  321 => 108,  315 => 105,  311 => 104,  306 => 103,  303 => 102,  299 => 101,  296 => 100,  293 => 99,  286 => 98,  280 => 95,  273 => 91,  267 => 88,  263 => 87,  258 => 85,  254 => 84,  250 => 83,  245 => 82,  239 => 77,  236 => 76,  233 => 75,  230 => 74,  227 => 73,  224 => 72,  221 => 71,  218 => 70,  215 => 69,  212 => 68,  210 => 67,  207 => 66,  204 => 65,  201 => 64,  199 => 63,  196 => 62,  193 => 61,  190 => 60,  187 => 59,  184 => 58,  182 => 57,  179 => 56,  176 => 55,  173 => 54,  170 => 53,  167 => 52,  164 => 51,  161 => 50,  156 => 46,  150 => 44,  145 => 42,  142 => 41,  136 => 40,  133 => 39,  130 => 38,  127 => 37,  122 => 36,  119 => 35,  117 => 34,  114 => 33,  108 => 29,  99 => 23,  95 => 21,  89 => 19,  83 => 17,  80 => 16,  78 => 15,  73 => 12,  70 => 11,  68 => 8,  61 => 7,  55 => 111,  53 => 98,  50 => 97,  48 => 7,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Blocks\\header-details.html.twig");
    }
}
