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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig */
class __TwigTemplate_b96fbb2331804ba28f76aa0803690846 extends Template
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
            'product_supplier_row' => [$this, 'block_product_supplier_row'],
            'product_supplier_collection_row' => [$this, 'block_product_supplier_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->unwrap()->yieldBlock('product_supplier_row', $context, $blocks);
        // line 31
        yield from $this->unwrap()->yieldBlock('product_supplier_collection_row', $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_supplier_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<tr class=\"product_supplier_row\" id=\"product_supplier_row_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "\" data-supplier-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 9
            yield "    ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 9), "block_prefixes", [], "any", false, false, false, 9), 1, [], "any", false, false, false, 9);
            // line 10
            yield "    ";
            if ((($context["childType"] ?? null) != "hidden")) {
                // line 11
                yield "      ";
                // line 12
                yield "      <td>
        ";
                // line 13
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
        ";
                // line 14
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
      </td>
    ";
            } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 16
$context["child"], "vars", [], "any", false, false, false, 16), "label", [], "any", false, false, false, 16))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "      ";
                // line 18
                yield "      <td class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
                yield "\">
        ";
                // line 19
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supplier_name", [], "any", false, false, false, 19), 'widget');
                yield "
        <span class=\"preview\">";
                // line 20
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20), "html", null, true);
                }
                yield "</span>
      </td>
    ";
            } else {
                // line 23
                yield "      ";
                // line 24
                yield "      ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    ";
            }
            // line 26
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "  </tr>";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_supplier_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "<div class=\"form-group product-suppliers-collection-row\">
    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 34
        yield from         $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        // line 37
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37)]);
        // line 38
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
      <div class=\"row\">
        <div class=\"col-sm\">
          <table class=\"table\">
            <thead class=\"thead-default\">
            <tr>
              ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "children", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 45
            yield "                ";
            // line 46
            yield "                ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 46), "block_prefixes", [], "any", false, false, false, 46), 1, [], "any", false, false, false, 46);
            // line 47
            yield "                ";
            if (((($context["childType"] ?? null) != "hidden") || (!Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 47), "label", [], "any", false, false, false, 47))))) {
                // line 48
                yield "                  <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 48), "label", [], "any", false, false, false, 48), "html", null, true);
                yield "</th>
                ";
            }
            // line 50
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "            </tr>
            </thead>
            <tbody>";
        // line 54
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 55
        yield "</tbody>
          </table>
        </div>
      </div>
    </div>
  </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  185 => 55,  183 => 54,  179 => 51,  173 => 50,  167 => 48,  164 => 47,  161 => 46,  159 => 45,  155 => 44,  145 => 38,  143 => 37,  141 => 34,  139 => 33,  136 => 32,  129 => 31,  124 => 27,  118 => 26,  112 => 24,  110 => 23,  102 => 20,  98 => 19,  93 => 18,  91 => 17,  89 => 16,  84 => 14,  80 => 13,  77 => 12,  75 => 11,  72 => 10,  69 => 9,  65 => 8,  58 => 7,  51 => 6,  46 => 31,  44 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\product_suppliers.html.twig");
    }
}
