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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_seo.html.twig */
class __TwigTemplate_f9b4d4951a7044dcaf9f8b7fee242aaa extends Template
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
                '_product_seo_link_rewrite_widget' => [$this, 'block__product_seo_link_rewrite_widget'],
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
        yield from $this->unwrap()->yieldBlock('_product_seo_link_rewrite_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__product_seo_link_rewrite_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "
  ";
        // line 11
        $context["firstChildAttr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 11)), "vars", [], "any", false, false, false, 11), "attr", [], "any", false, false, false, 11);
        // line 12
        yield "  <button
    type=\"button\"
    class=\"reset-link-rewrite btn btn-outline-secondary mt-1\"
    data-automatic-change=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["firstChildAttr"] ?? null), "data-automatic-update", [], "array", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["firstChildAttr"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["data-automatic-update"] ?? null) : null), 0)) : (0)), "html", null, true);
        yield "\"
  >
    ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate URL from name", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "
  </button>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_seo.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  89 => 17,  84 => 15,  79 => 12,  77 => 11,  72 => 10,  61 => 9,  58 => 8,  55 => 5,  35 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_seo.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\product_seo.html.twig");
    }
}
