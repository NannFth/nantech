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

/* @PrestaShop/Admin/Common/Grid/Blocks/table.html.twig */
class __TwigTemplate_22633ba1718e025d2cf8a60c312affc1 extends Template
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
            'grid_table_head' => [$this, 'block_grid_table_head'],
            'grid_table_body' => [$this, 'block_grid_table_body'],
            'grid_table_footer' => [$this, 'block_grid_table_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminGridTableBefore", ["grid" =>         // line 7
($context["grid"] ?? null), "legacy_controller" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["app"] ?? null), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", ["_legacy_controller"], "method", false, false, false, 8), "controller" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["app"] ?? null), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", ["_controller"], "method", false, false, false, 9)]);
        // line 11
        yield "

";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "filter_form", [], "any", false, false, false, 13), 'form_start', ["attr" => ["id" => (CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 13) . "_filter_form"), "class" => "table-responsive"]]);
        yield "

<table class=\"grid-table js-grid-table table ";
        // line 15
        if ((($tmp = $this->extensions['PrestaShopBundle\Twig\Extension\GridExtension']->isOrderingColumn(($context["grid"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "grid-ordering-column";
        }
        yield " ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "attributes", [], "any", false, false, false, 15), "is_empty_state", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "border-0";
        }
        yield "\"
       id=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "_grid_table\"
       data-query=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "html", null, true);
        yield "\"
       data-limit=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "pagination", [], "any", false, false, false, 18), "limit", [], "any", false, false, false, 18), "html", null, true);
        yield "\"
       data-offset=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "pagination", [], "any", false, false, false, 19), "offset", [], "any", false, false, false, 19), "html", null, true);
        yield "\"
       data-total=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 20), "records_total", [], "any", false, false, false, 20), "html", null, true);
        yield "\"
>
  <thead class=\"thead-default\">
  ";
        // line 23
        yield from $this->unwrap()->yieldBlock('grid_table_head', $context, $blocks);
        // line 29
        yield "  </thead>
  <tbody>
  ";
        // line 31
        yield from $this->unwrap()->yieldBlock('grid_table_body', $context, $blocks);
        // line 49
        yield "  </tbody>
  ";
        // line 50
        yield from $this->unwrap()->yieldBlock('grid_table_footer', $context, $blocks);
        // line 51
        yield "</table>

";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "filter_form", [], "any", false, false, false, 53), 'form_end');
        yield "

";
        // line 55
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminGridTableAfter", ["grid" =>         // line 56
($context["grid"] ?? null), "legacy_controller" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["app"] ?? null), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", ["_legacy_controller"], "method", false, false, false, 57), "controller" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["app"] ?? null), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", ["_controller"], "method", false, false, false, 58)]);
        // line 60
        yield "
";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_table_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
        yield "
    ";
        // line 25
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "actions", [], "any", false, false, false, 25), "bulk", [], "any", false, false, false, 25)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "filter_form", [], "any", false, false, false, 25)) > 1))) {
            // line 26
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
            yield "
    ";
        }
        // line 28
        yield "  ";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_table_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 32), "records", [], "any", false, false, false, 32))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 33), "records", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 34
                yield "        <tr>
          ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "columns", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 36
                    yield "            <td
              ";
                    // line 37
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 37) == "identifier")) {
                        yield "data-identifier=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["record"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 37)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null), "html", null, true);
                        yield "\"";
                    }
                    // line 38
                    yield "              class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 38), "html", null, true);
                    yield "-type column-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 38), "html", null, true);
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, true, false, 38), "clickable", [], "any", true, true, false, 38) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 38), "clickable", [], "any", false, false, false, 38))) {
                        yield " clickable";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, true, false, 38), "alignment", [], "any", true, true, false, 38) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 38), "alignment", [], "any", false, false, false, 38))) {
                        yield " text-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 38), "alignment", [], "any", false, false, false, 38), "html", null, true);
                    }
                    yield "\"
            >
              ";
                    // line 40
                    yield $this->extensions['PrestaShopBundle\Twig\Extension\GridExtension']->renderColumnContent($context["record"], $context["column"], ($context["grid"] ?? null));
                    yield "
            </td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['record'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "    ";
        } else {
            // line 46
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
            yield "
    ";
        }
        // line 48
        yield "  ";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_table_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig";
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
        return array (  228 => 50,  223 => 48,  217 => 46,  214 => 45,  207 => 43,  198 => 40,  183 => 38,  177 => 37,  174 => 36,  170 => 35,  167 => 34,  162 => 33,  159 => 32,  152 => 31,  147 => 28,  141 => 26,  139 => 25,  134 => 24,  127 => 23,  121 => 60,  119 => 58,  118 => 57,  117 => 56,  116 => 55,  111 => 53,  107 => 51,  105 => 50,  102 => 49,  100 => 31,  96 => 29,  94 => 23,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  62 => 15,  57 => 13,  53 => 11,  51 => 9,  50 => 8,  49 => 7,  48 => 6,  45 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\table.html.twig");
    }
}
