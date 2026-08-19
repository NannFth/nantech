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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig */
class __TwigTemplate_dbdef3224b635ab5e7ac6df106cfb375 extends Template
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
            'product_header_form' => [$this, 'block_product_header_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"product-header-v2\">
  <div class=\"product-header-cover\">
    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productForm"] ?? null), "header", [], "any", false, false, false, 7), "cover_thumbnail", [], "any", false, false, false, 7), 'row');
        yield "
  </div>
  <div class=\"product-header-form\">
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('product_header_form', $context, $blocks);
        // line 13
        yield "  </div>

  ";
        // line 15
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig");
        yield "
</div>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_header_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["productForm"] ?? null), "header", [], "any", false, false, false, 11), 'row');
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig";
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
        return array (  74 => 11,  67 => 10,  59 => 15,  55 => 13,  53 => 10,  47 => 7,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Blocks\\header.html.twig");
    }
}
