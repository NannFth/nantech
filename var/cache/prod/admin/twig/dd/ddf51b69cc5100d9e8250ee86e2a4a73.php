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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig */
class __TwigTemplate_ff2450a9e3ea65eec288e99f3689e485 extends Template
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

        // line 7
        $_trait_0 = $this->load("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 7);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 7, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'image_dropzone_widget' => [$this, 'block_image_dropzone_widget'],
                'related_product_row' => [$this, 'block_related_product_row'],
                'packed_product_row' => [$this, 'block_packed_product_row'],
                'product_type_row' => [$this, 'block_product_type_row'],
                'price_summary_widget' => [$this, 'block_price_summary_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('image_dropzone_widget', $context, $blocks);
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('related_product_row', $context, $blocks);
        // line 39
        yield "
";
        // line 40
        yield from $this->unwrap()->yieldBlock('packed_product_row', $context, $blocks);
        // line 60
        yield "
";
        // line 61
        yield from $this->unwrap()->yieldBlock('product_type_row', $context, $blocks);
        // line 78
        yield "
";
        // line 79
        yield from $this->unwrap()->yieldBlock('price_summary_widget', $context, $blocks);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_dropzone_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["attr"] ?? null), "class", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 11), "")) : ("")) . " image-dropzone")), "data-translations" => json_encode(        // line 12
($context["translations"] ?? null)), "data-locales" => json_encode(        // line 13
($context["locales"] ?? null)), "data-product-id" =>         // line 14
($context["product_id"] ?? null), "data-shop-id" =>         // line 15
($context["shop_id"] ?? null), "data-is-multi-store-active" =>         // line 16
($context["is_multi_store_active"] ?? null), "data-form-name" =>         // line 17
($context["update_form_name"] ?? null), "data-token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(        // line 18
($context["update_form_name"] ?? null))]);
        // line 20
        yield "
  ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shop_images", [], "any", true, true, false, 21)) {
            // line 22
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shop_images", [], "any", false, false, false, 22), 'row');
            yield "
  ";
        }
        // line 24
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield "></div>
";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_related_product_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 28), "")) : ("")) . " related-product entity-item"))]);
        // line 29
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"related-product-image\">
      ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 31), 'widget');
        yield "
    </div>
    <div class=\"related-product-legend\">
      ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 34), 'widget', ["prefix" => "<i class=\"material-icons entity-item-delete\">delete</i>"]);
        yield "
    </div>
    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 36), 'widget');
        yield "
  </li>
";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_packed_product_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "  <li class=\"packed-product entity-item\">
    <div class=\"packed-product-image\">
      ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 43), 'widget');
        yield "
    </div>
    <div class=\"packed-product-legend\">
      ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 46), 'widget', ["prefix" => "<i class=\"material-icons entity-item-delete\">delete</i>"]);
        yield "
      ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reference", [], "any", false, false, false, 47), 'widget');
        yield "
    </div>
    <div class=\"form-group\">
      <div class=\"packed-product-quantity\">
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 51), 'widget');
        yield "
        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 52), 'errors');
        yield "
      </div>
    </div>
    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "product_id", [], "any", false, false, false, 55), 'widget');
        yield "
    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unique_identifier", [], "any", false, false, false, 56), 'widget');
        yield "
    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "combination_id", [], "any", false, false, false, 57), 'widget');
        yield "
  </li>
";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_type_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "  <div class=\"product-type-selector form-group\">
    <div class=\"product-type-choices\">
      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 64), "choices", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 65
            yield "        <button type=\"button\" class=\"product-type-choice btn btn-outline-secondary\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 65), "html", null, true);
            yield "\" data-description=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 65), "data-description", [], "array", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 65)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["data-description"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 65))) : (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 65))), "html", null, true);
            yield "\">
          ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 66), "html", null, true);
            yield "
          ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 67), "icon", [], "array", true, true, false, 67)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 67)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["icon"] ?? null) : null), "html", null, true);
                yield "</i>";
            }
            // line 68
            yield "        </button>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "    </div>
    <div class=\"product-type-description\">
      <i class=\"material-icons\">arrow_forward</i>
      <span class=\"product-type-description-content\"></span>
    </div>
    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "
  </div>
";
        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_price_summary_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 80
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value price-tax-excluded-value\"></div>
      <div class=\"price-summary-value price-tax-included-value\"></div>
      <div class=\"price-summary-value unit-price-value\"></div>
    </div>
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value margin-value\"></div>
      <div class=\"price-summary-value margin-rate-value\"></div>
      <div class=\"price-summary-value wholesale-price-value\"></div>
    </div>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  277 => 80,  270 => 79,  262 => 75,  255 => 70,  248 => 68,  242 => 67,  238 => 66,  231 => 65,  227 => 64,  223 => 62,  216 => 61,  208 => 57,  204 => 56,  200 => 55,  194 => 52,  190 => 51,  183 => 47,  179 => 46,  173 => 43,  169 => 41,  162 => 40,  154 => 36,  149 => 34,  143 => 31,  137 => 29,  134 => 28,  127 => 27,  119 => 24,  113 => 22,  111 => 21,  108 => 20,  106 => 18,  105 => 17,  104 => 16,  103 => 15,  102 => 14,  101 => 13,  100 => 12,  99 => 11,  97 => 10,  90 => 9,  85 => 79,  82 => 78,  80 => 61,  77 => 60,  75 => 40,  72 => 39,  70 => 27,  67 => 26,  65 => 9,  62 => 8,  59 => 5,  35 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\product.html.twig");
    }
}
