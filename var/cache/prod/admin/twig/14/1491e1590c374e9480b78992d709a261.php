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

/* @PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig */
class __TwigTemplate_de85fff82af24ef1e5877777eaa28138 extends Template
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
<tr class=\"column-filters";
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "attributes", [], "any", false, false, false, 6), "is_empty_state", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " d-none";
        }
        yield "\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "columns", [], "any", false, false, false, 7));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 8
            yield "    <td
      data-type=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 9), "html", null, true);
            yield "\"
      data-column-id=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 10), "html", null, true);
            yield "\"
    >
      ";
            // line 12
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "actions", [], "any", false, false, false, 12), "bulk", [], "any", false, false, false, 12)) > 0))) {
                // line 13
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions_select_all.html.twig", ["grid" => ($context["grid"] ?? null)]);
                yield "
      ";
            }
            // line 15
            yield "
      ";
            // line 16
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "filter_form", [], "any", false, false, false, 16)) > 1)) {
                // line 17
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "column_filters", [], "any", false, true, false, 17), CoreExtension::getAttribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 17), [], "array", true, true, false, 17)) {
                    // line 18
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "column_filters", [], "any", false, false, false, 18)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 18)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["filter_name"]) {
                        // line 19
                        yield "            ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "filter_form", [], "any", false, false, false, 19)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = $context["filter_name"]) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : null), 'widget');
                        yield "
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['filter_name'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    yield "        ";
                }
                // line 22
                yield "      ";
            }
            // line 23
            yield "    </td>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig";
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
        return array (  131 => 25,  116 => 23,  113 => 22,  110 => 21,  101 => 19,  96 => 18,  93 => 17,  91 => 16,  88 => 15,  82 => 13,  80 => 12,  75 => 10,  71 => 9,  68 => 8,  51 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\Table\\filters_row.html.twig");
    }
}
