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

/* @PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig */
class __TwigTemplate_12db7e7bb07e7ff2f91a53b91a1dee9f extends Template
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

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_footer' => [$this, 'block_product_footer'],
            'product_rest' => [$this, 'block_product_rest'],
            'category_tree_form' => [$this, 'block_category_tree_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@PrestaShop/Admin/layout.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        yield "\" type=\"text/css\" media=\"all\">
";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "<div class=\"product-page-v2\">
  ";
        // line 18
        $context["productType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 18), "product_type", [], "any", false, false, false, 18);
        // line 19
        yield "  ";
        $context["productId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 19), "product_id", [], "any", false, false, false, 19);
        // line 20
        yield "  ";
        $context["shopId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 20), "shop_id", [], "any", false, false, false, 20);
        // line 21
        yield "  ";
        // line 22
        yield "  ";
        $context["forceDefaultActive"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productForm"] ?? null), "vars", [], "any", false, false, false, 22), "force_default_active", [], "any", false, false, false, 22);
        // line 23
        yield "
  <div class=\"header-toolbar d-print-none\">
    ";
        // line 25
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MultistoreProductHeader", ["productId" => ($context["productId"] ?? null)]);
        yield "
  </div>

  ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal product-page justify-content-md-center product-form", "novalidate" => "novalidate", "data-product-id" =>         // line 31
($context["productId"] ?? null), "data-shop-id" =>         // line 32
($context["shopId"] ?? null), "data-product-type" =>         // line 33
($context["productType"] ?? null), "data-force-default-active" =>         // line 34
($context["forceDefaultActive"] ?? null)]]);
        // line 35
        yield "

  ";
        // line 38
        yield "  ";
        yield from $this->unwrap()->yieldBlock('product_header', $context, $blocks);
        // line 41
        yield "
  ";
        // line 43
        yield "  ";
        yield from $this->unwrap()->yieldBlock('product_footer', $context, $blocks);
        // line 50
        yield "
  ";
        // line 51
        yield from         $this->unwrap()->yieldBlock("session_alert", $context, $blocks);
        yield "

  <div id=\"contextual-notification-box\"></div>

  ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["productForm"] ?? null), 'widget');
        yield "

  ";
        // line 57
        yield from $this->unwrap()->yieldBlock('product_rest', $context, $blocks);
        // line 60
        yield "
  ";
        // line 61
        yield from $this->unwrap()->yieldBlock('category_tree_form', $context, $blocks);
        // line 64
        yield "</div>
";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig", ["productForm" => ($context["productForm"] ?? null)]);
        yield "
  ";
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig", ["productForm" =>         // line 45
($context["productForm"] ?? null), "editable" =>         // line 46
($context["editable"] ?? null), "productId" =>         // line 47
($context["productId"] ?? null)]);
        // line 48
        yield "
  ";
        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 58
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["productForm"] ?? null), 'form_end');
        yield "
  ";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tree_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["categoryTreeSelectorForm"] ?? null), 'row');
        yield "
  ";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

  <script src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product_edit.bundle.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  244 => 70,  238 => 68,  231 => 67,  223 => 62,  216 => 61,  208 => 58,  201 => 57,  195 => 48,  193 => 47,  192 => 46,  191 => 45,  189 => 44,  182 => 43,  174 => 39,  167 => 38,  161 => 64,  159 => 61,  156 => 60,  154 => 57,  149 => 55,  142 => 51,  139 => 50,  136 => 43,  133 => 41,  130 => 38,  126 => 35,  124 => 34,  123 => 33,  122 => 32,  121 => 31,  120 => 28,  114 => 25,  110 => 23,  107 => 22,  105 => 21,  102 => 20,  99 => 19,  97 => 18,  94 => 17,  87 => 16,  77 => 13,  70 => 9,  65 => 8,  58 => 7,  47 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\edit.html.twig");
    }
}
