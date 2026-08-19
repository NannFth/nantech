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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig */
class __TwigTemplate_5aeb9cb985634ef11c64c8e4be06da17 extends Template
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
            'features_row' => [$this, 'block_features_row'],
            'feature_collection_row' => [$this, 'block_feature_collection_row'],
            'feature_collection_item_row' => [$this, 'block_feature_collection_item_row'],
            'feature_value_row' => [$this, 'block_feature_value_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->unwrap()->yieldBlock('features_row', $context, $blocks);
        // line 31
        yield from $this->unwrap()->yieldBlock('feature_collection_row', $context, $blocks);
        // line 55
        yield from $this->unwrap()->yieldBlock('feature_collection_item_row', $context, $blocks);
        // line 71
        yield from $this->unwrap()->yieldBlock('feature_value_row', $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_features_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"form-group\">
    <h3>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Features", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</h3>

    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
    <div class=\"product-features-controls\">
      ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 12), 'widget');
        yield "
      <div class=\"feature-value-spinner d-none\">
        <div class=\"spinner\"></div>
        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading feature values...", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "
      </div>
      ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_id", [], "any", false, false, false, 17), 'widget');
        yield "
      ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 18), 'widget');
        yield "
      ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "add_feature", [], "any", false, false, false, 19), 'widget');
        yield "
    </div>
    ";
        // line 22
        yield "    ";
        $_v0 = $context;
        $_v1 = ["external_link" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "external_link", [], "any", false, false, false, 22)];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 22, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        // line 23
        yield from         $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        $context = $_v0;
        // line 26
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 27
        yield "</div>";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_feature_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33)]);
        // line 34
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "")) : ("")) . " table feature-values-table-collection"))]);
        // line 37
        yield "  ";
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37))) {
            // line 38
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 38), "")) : ("")) . " d-none"))]);
        }
        // line 40
        yield "
  <table ";
        // line 41
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " data-row-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 41)), "html", null, true);
        yield "\">
    <thead class=\"thead-default\">
    <tr>
      <th>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature value", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th></th>
    </tr>
    </thead>
    <tbody>";
        // line 50
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 51
        yield "</tbody>
  </table>";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_feature_collection_item_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "  ";
        $context["featureId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57);
        // line 58
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 58), "")) : ("")) . " product-feature-collection")), "feature-id" => ($context["featureId"] ?? null)]);
        // line 60
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_values", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "prototype", [], "any", false, false, false, 60), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_values", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "prototype", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60)]);
        // line 61
        yield "<tr ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " data-row-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_values", [], "any", false, false, false, 61)), "html", null, true);
        yield "\">
    <td colspan=\"3\">
      ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_id", [], "any", false, false, false, 63), 'widget');
        yield "
      ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_name", [], "any", false, false, false, 64), 'widget');
        yield "
    </td>
  </tr>
  ";
        // line 68
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_feature_value_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield "  ";
        $context["featureCollectionParent"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 73), "parent", [], "any", false, false, false, 73);
        // line 74
        yield "  ";
        $context["featureId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["featureCollectionParent"] ?? null), "feature_id", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "value", [], "any", false, false, false, 74);
        // line 75
        yield "  ";
        $context["featureName"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["featureCollectionParent"] ?? null), "feature_name", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75);
        // line 76
        yield "  <tr class=\"product-feature-value\" feature-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["featureId"] ?? null), "html", null, true);
        yield "\">
    <td class=\"feature-column\">
      ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["featureName"] ?? null), "html", null, true);
        yield "
    </td>
    <td>
      ";
        // line 81
        if ((null === ($context["is_custom"] ?? null))) {
            // line 82
            yield "        ";
            // line 83
            yield "        ";
            $context["featureValueAttributes"] = [];
            // line 84
            yield "        ";
            $context["customValueAttributes"] = [];
            // line 85
            yield "      ";
        } elseif ((($tmp = ($context["is_custom"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "        ";
            // line 87
            yield "        ";
            $context["featureValueAttributes"] = ["row_attr" => ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_name", [], "any", false, true, false, 87), "vars", [], "any", false, true, false, 87), "row_attr", [], "any", false, true, false, 87), "class", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_name", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "row_attr", [], "any", false, false, false, 87), "class", [], "any", false, false, false, 87), "")) : ("")) . " d-none"))]];
            // line 88
            yield "        ";
            $context["customValueAttributes"] = [];
            // line 89
            yield "      ";
        } else {
            // line 90
            yield "        ";
            // line 91
            yield "        ";
            $context["featureValueAttributes"] = [];
            // line 92
            yield "        ";
            $context["customValueAttributes"] = ["row_attr" => ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, true, false, 92), "vars", [], "any", false, true, false, 92), "row_attr", [], "any", false, true, false, 92), "class", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "row_attr", [], "any", false, false, false, 92), "class", [], "any", false, false, false, 92), "")) : ("")) . " d-none"))]];
            // line 93
            yield "      ";
        }
        // line 94
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_name", [], "any", false, false, false, 94), 'row', Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_name", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "attr", [], "any", false, false, false, 94), ($context["featureValueAttributes"] ?? null)));
        yield "
      ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 95), 'row', Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "attr", [], "any", false, false, false, 95), ($context["customValueAttributes"] ?? null)));
        yield "
      ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_id", [], "any", false, false, false, 96), 'row');
        yield "
      ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_custom", [], "any", false, false, false, 97), 'row');
        yield "
    </td>
    <td class=\"feature-actions\">
      ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 100), 'widget');
        yield "

      ";
        // line 103
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        yield "
    </td>
  </tr>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  291 => 103,  286 => 100,  280 => 97,  276 => 96,  272 => 95,  267 => 94,  264 => 93,  261 => 92,  258 => 91,  256 => 90,  253 => 89,  250 => 88,  247 => 87,  245 => 86,  242 => 85,  239 => 84,  236 => 83,  234 => 82,  232 => 81,  226 => 78,  220 => 76,  217 => 75,  214 => 74,  211 => 73,  204 => 71,  199 => 68,  193 => 64,  189 => 63,  181 => 61,  179 => 60,  177 => 58,  174 => 57,  167 => 55,  161 => 51,  159 => 50,  152 => 45,  148 => 44,  140 => 41,  137 => 40,  134 => 38,  131 => 37,  129 => 34,  127 => 33,  120 => 31,  115 => 27,  113 => 26,  110 => 23,  101 => 22,  96 => 19,  92 => 18,  88 => 17,  83 => 15,  77 => 12,  72 => 10,  67 => 8,  64 => 7,  57 => 6,  52 => 71,  50 => 55,  48 => 31,  46 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\features.html.twig");
    }
}
