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

/* @PrestaShop/Admin/Improve/Shipping/Carriers/FormTheme/costs-range.html.twig */
class __TwigTemplate_40504756f7a0d03d0ceaaf02b93f38b0 extends Template
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
            'carrier_ranges_costs_zone_row' => [$this, 'block_carrier_ranges_costs_zone_row'],
            'carrier_ranges_costs_zone_ranges_collection_widget' => [$this, 'block_carrier_ranges_costs_zone_ranges_collection_widget'],
            'carrier_ranges_costs_zone_range_row' => [$this, 'block_carrier_ranges_costs_zone_range_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('carrier_ranges_costs_zone_row', $context, $blocks);
        // line 23
        yield "
";
        // line 24
        yield from $this->unwrap()->yieldBlock('carrier_ranges_costs_zone_ranges_collection_widget', $context, $blocks);
        // line 44
        yield "
";
        // line 45
        yield from $this->unwrap()->yieldBlock('carrier_ranges_costs_zone_range_row', $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_carrier_ranges_costs_zone_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"card shadow-none mb-2 js-carrier-zone-row\">
  ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "zoneId", [], "any", false, false, false, 8), 'widget');
        yield "
  <div class=\"card-body p-4\">
    <div class=\"d-flex mb-2 justify-content-between\">
      <h2 class=\"card-title\">";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "zoneName", [], "any", false, false, false, 11), 'widget');
        yield "</h2>
      ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "deleteZone", [], "any", false, false, false, 12), 'widget');
        yield "
    </div>
    <div class=\"container-fluid\">
      <div class=\"row\">
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "ranges", [], "any", false, false, false, 16), 'widget');
        yield "
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_carrier_ranges_costs_zone_ranges_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "  ";
        if ((array_key_exists("prototype", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 25))) {
            // line 26
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "class" => Twig\Extension\CoreExtension::trim(("js-carrier-range-container " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 26), "attr", [], "any", false, true, false, 26), "class", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 26), "attr", [], "any", false, false, false, 26), "class", [], "any", false, false, false, 26), "")) : (""))))]);
        }
        // line 28
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 31
        yield "<table ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <thead>
    <tr>
      <th>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 34), "prototype", [], "any", false, false, false, 34), "range", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "label", [], "any", false, false, false, 34), "html", null, true);
        yield "</th>
      <th>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 35), "prototype", [], "any", false, false, false, 35), "price", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "label", [], "any", false, false, false, 35), "html", null, true);
        yield "</th>
    </tr>
    </thead>
    <tbody class=\"js-carrier-range-container-body\">";
        // line 39
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 40
        yield "</tbody>";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 42
        yield "</table>
";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_carrier_ranges_costs_zone_range_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "  <tr class=\"js-carrier-range-row\">
    <td class=\"js-carrier-range-name\">
      ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "range", [], "any", false, false, false, 48), 'widget');
        yield "
    </td>
    <td>
      ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 51), 'widget');
        yield "
    </td>
    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
  </tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Shipping/Carriers/FormTheme/costs-range.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  174 => 53,  169 => 51,  163 => 48,  159 => 46,  152 => 45,  146 => 42,  144 => 41,  142 => 40,  140 => 39,  134 => 35,  130 => 34,  123 => 31,  120 => 29,  118 => 28,  115 => 26,  112 => 25,  105 => 24,  94 => 17,  90 => 16,  83 => 12,  79 => 11,  73 => 8,  70 => 7,  63 => 6,  58 => 45,  55 => 44,  53 => 24,  50 => 23,  48 => 6,  45 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Carriers/FormTheme/costs-range.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Shipping\\Carriers\\FormTheme\\costs-range.html.twig");
    }
}
