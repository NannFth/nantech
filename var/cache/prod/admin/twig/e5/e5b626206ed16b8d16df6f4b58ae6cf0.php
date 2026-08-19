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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig */
class __TwigTemplate_006727cd39358c9ea5890b7a2db8c020 extends Template
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

        // line 6
        $_trait_0 = $this->load("@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig", 6);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig".'" cannot be used as a trait.', 6, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        if (!isset($_trait_0_blocks["product_type_row"])) {
            throw new RuntimeError(sprintf('Block "%s" is not defined in trait "%s".', "product_type_row", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig"), 6, $this->source);
        }

        $_trait_0_blocks["base_product_type_row"] = $_trait_0_blocks["product_type_row"]; unset($_trait_0_blocks["product_type_row"]); $this->traitAliases["base_product_type_row"] = "product_type_row";

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'product_type_row' => [$this, 'block_product_type_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 7
        yield "
";
        // line 8
        yield from $this->unwrap()->yieldBlock('product_type_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_type_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "  <div class=\"product-type-preview\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 11
            yield "      ";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                // line 12
                yield "        <i class=\"material-icons product-type-preview-icon\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 12)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["icon"] ?? null) : null), "html", null, true);
                yield "</i>
        <span class=\"product-type-preview-label\">";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 13), "html", null, true);
                yield "</span>
      ";
            }
            // line 15
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['group_label'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "    <div id=\"product-type-selector-modal-content\" class=\"d-none\">
      ";
        // line 17
        yield from         $this->unwrap()->yieldBlock("base_product_type_row", $context, $blocks);
        yield "
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
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  107 => 17,  104 => 16,  98 => 15,  93 => 13,  88 => 12,  85 => 11,  81 => 10,  78 => 9,  67 => 8,  64 => 7,  61 => 5,  35 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\header.html.twig");
    }
}
