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

/* @PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig */
class __TwigTemplate_3c57e2ba8b421a2421862d1db1facea4 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
<div id=\"specific-price-list-container\" class=\"d-none\">
  <div id=\"specific-prices-loading\">
    <div class=\"loading-label\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading specific prices", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</div>
    <div class=\"spinner spinner-primary\"></div>
  </div>
  <table class=\"table\" id=\"specific-prices-list-table\">
    <thead class=\"thead-default\">
    <tr>
      <th>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discount (tax incl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duration", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Units", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 31
        yield "    </tbody>
  </table>
  <div class=\"row justify-content-center\" id=\"specific-prices-pagination\">
    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" => 10, "limitChoices" => [10, 20, 50, 100, 300, 1000]]);
        // line 37
        yield "
  </div>
  <script type=\"text/html\" id=\"specific-price-tr-template\">
    <tr>
      <td class=\"specific-price-id\"></td>
      <td class=\"combination\"></td>
      <td class=\"currency\"></td>
      <td class=\"country\"></td>
      <td class=\"group\"></td>
      <td class=\"shop\"></td>
      <td class=\"customer\"></td>
      <td class=\"price\"></td>
      <td class=\"impact\"></td>
      <td class=\"period\" data-unlimited-text=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlimited", [], "Admin.Global"), "html", null, true);
        yield "\">
        <label>
          ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global"), "html", null, true);
        yield "
          <span class=\"from\"></span>
        </label>
        <br>
        <label>
          ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global"), "html", null, true);
        yield "
          <span class=\"to\"></span>
        </label>
      </td>
      <td class=\"from-qty\"></td>
      <td>
        <button
          type=\"button\"
          title=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        yield "\"
          class=\"js-delete-specific-price-btn btn tooltip-link\"
          data-confirm-title=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific price deletion", [], "Admin.Global"), "html", null, true);
        yield "\"
          data-confirm-message=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this specific price?", [], "Admin.Global"), "html", null, true);
        yield "\"
          data-confirm-btn-label=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        yield "\"
          data-cancel-btn-label=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\"
          data-confirm-btn-class=\"btn-danger\"
        ><i class=\"material-icons\">delete</i>
        </button>
      </td>
      <td>
        <button
          type=\"button\"
          title=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        yield "\"
          class=\"js-edit-specific-price-btn btn tooltip-link\"
          data-modal-title=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit specific price", [], "Admin.Global"), "html", null, true);
        yield "\"
          data-confirm-button-label=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and publish", [], "Admin.Actions"), "html", null, true);
        yield "\"
          data-cancel-button-label=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\"
        >
          <i class=\"material-icons\">edit</i>
        </button>
      </td>
    </tr>
  </script>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig";
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
        return array (  192 => 82,  188 => 81,  184 => 80,  179 => 78,  168 => 70,  164 => 69,  160 => 68,  156 => 67,  151 => 65,  140 => 57,  132 => 52,  127 => 50,  112 => 37,  110 => 34,  105 => 31,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  47 => 8,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\SpecificPrice\\Blocks\\list.html.twig");
    }
}
