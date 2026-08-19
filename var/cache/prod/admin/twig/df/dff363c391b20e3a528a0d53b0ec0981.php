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

/* @PrestaShop/Admin/Component/Layout/multistore_product_header.html.twig */
class __TwigTemplate_f46a2d5f00ff52ea01ae87866394a171 extends Template
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
            'multishop_header_right' => [$this, 'block_multishop_header_right'],
            'search_shops' => [$this, 'block_search_shops'],
            'all_shops_item' => [$this, 'block_all_shops_item'],
            'shop_group_item' => [$this, 'block_shop_group_item'],
            'shop_item' => [$this, 'block_shop_item'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@PrestaShop/Admin/Component/Layout/multistore_header.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multishop_header_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  <a class=\"header-multishop-view-action product-shops-action\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_products_select_shops", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "productId", [], "any", false, false, false, 8)]), "html", null, true);
        yield "\" target=\"_blank\" rel=\"nofollow\">
    ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select stores", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
    ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Component/MultiShop/shop_icon.html.twig", ["isTitleDark" => CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "isTitleDark", [], "any", false, false, false, 10)], false);
        yield "
  </a>
  ";
        // line 12
        yield from $this->yieldParentBlock("multishop_header_right", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_shops_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_group_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "  <span class=\"multishop-modal-color-container\">
    <span class=\"multishop-modal-color\"";
        // line 26
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 26))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "color", [], "any", false, false, false, 26), "html", null, true);
            yield ";\"";
        }
        yield ">
    </span>
  </span>
  ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 29)), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "  <div class=\"multishop-modal-item-left\">
    <span class=\"multishop-modal-color-container\">
      <span class=\"multishop-modal-color\"";
        // line 36
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 36))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "color", [], "any", false, false, false, 36), "html", null, true);
            yield ";\"";
        }
        yield ">
      </span>
    </span>
    <a class=\"multishop-modal-shop-name";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 39) == false)) {
            yield " multishop-modal-no-url\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</a>";
        } else {
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl(($context["shop"] ?? null)), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</a>";
        }
        // line 40
        yield "  </div>
  ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "hasMainUrl", [], "method", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "    <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "link", [], "any", false, false, false, 42), "getBaseLink", [CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 42)], "method", false, false, false, 42), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
  ";
        } else {
            // line 44
            yield "    <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopUrl", true, ["shop_id" => CoreExtension::getAttribute($this->env, $this->source, ($context["shop"] ?? null), "id", [], "any", false, false, false, 44), "addshop_url" => 1]), "html", null, true);
            yield "\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/multistore_product_header.html.twig";
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
        return array (  176 => 44,  168 => 42,  166 => 41,  163 => 40,  151 => 39,  141 => 36,  137 => 34,  130 => 33,  123 => 29,  113 => 26,  110 => 25,  103 => 24,  93 => 20,  83 => 16,  76 => 12,  71 => 10,  67 => 9,  62 => 8,  55 => 7,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Component/Layout/multistore_product_header.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\multistore_product_header.html.twig");
    }
}
