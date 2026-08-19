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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig */
class __TwigTemplate_d4960c9aa21cfa6bc58cf6d24d47bf15 extends Template
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
            'catalog_price_rules_widget' => [$this, 'block_catalog_price_rules_widget'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_catalog_price_rules_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div id=\"catalog-price-rule-list-container\" class=\"d-none\">
      <div id=\"catalog-price-rules-loading\">
        <div class=\"loading-label\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading catalog price rules", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</div>
        <div class=\"spinner spinner-primary\"></div>
      </div>
      <table class=\"table\" id=\"catalog-price-rules-list-table\">
        <thead class=\"thead-default\">
        <tr>
          <th>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        yield "</th>
          <th>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        yield "</th>
          <th>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        yield "</th>
          <th>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global"), "html", null, true);
        yield "</th>
          <th>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global"), "html", null, true);
        yield "</th>
          <th>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global"), "html", null, true);
        yield "</th>
          <th>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discount", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
          <th>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Units", [], "Admin.Global"), "html", null, true);
        yield "</th>
          <th>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global"), "html", null, true);
        yield "</th>
          <th>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global"), "html", null, true);
        yield "</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 32
        yield "        </tbody>
      </table>
      <div class=\"row justify-content-center\" id=\"catalog-price-rules-pagination\">
        ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" => 10, "limitChoices" => [10, 20, 50, 100, 300, 1000]]);
        // line 38
        yield "
      </div>
      <script type=\"text/html\" id=\"catalog-price-rule-tr-template\">
        <tr>
          <td class=\"catalog-price-rule-id\"></td>
          <td class=\"name\"></td>
          <td class=\"currency\"></td>
          <td class=\"country\"></td>
          <td class=\"group\"></td>
          <td class=\"shop\"></td>
          <td class=\"impact\"></td>
          <td class=\"from-qty\"></td>
          <td class=\"from\"></td>
          <td class=\"to\"></td>
          <td>
            <a
              href=\"\"
              type=\"button\"
              title=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        yield "\"
              class=\"js-edit-catalog-price-rule-btn btn tooltip-link\"><i class=\"material-icons\">edit</i>
            </a>
          </td>
        </tr>
      </script>
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
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig";
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
        return array (  145 => 56,  125 => 38,  123 => 35,  118 => 32,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  65 => 11,  58 => 8,  51 => 7,  40 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\catalog_price_rules.html.twig");
    }
}
