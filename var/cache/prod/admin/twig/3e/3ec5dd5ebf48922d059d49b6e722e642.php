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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig */
class __TwigTemplate_f0967166ad460c862e6d38a696086258 extends Template
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
";
        // line 6
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 7
        yield "
";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 8)) {
            // line 9
            yield "  ";
            $context["class"] = ((($context["class"] ?? null) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, false, 9));
        }
        // line 11
        yield "
";
        // line 12
        $context["confirmation_message"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 12), "confirm_message", [], "any", false, false, false, 12);
        // line 13
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 13), "confirm_message_type", [], "any", false, false, false, 13) == "dynamic") && CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 13), "dynamic_message_field", [], "any", false, false, false, 13), [], "array", true, true, false, 13))) {
            // line 14
            yield "  ";
            $context["dynamic_field"] = (($_v0 = ($context["record"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 14), "dynamic_message_field", [], "any", false, false, false, 14)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null);
            // line 15
            yield "  ";
            $context["confirmation_message"] = ((array_key_exists("dynamic_field", $context)) ? (Twig\Extension\CoreExtension::default(($context["dynamic_field"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 15), "confirm_message", [], "any", false, false, false, 15))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 15), "confirm_message", [], "any", false, false, false, 15)));
        }
        // line 17
        yield "
";
        // line 18
        $context["route_params"] = [ (string)CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 18), "route_param_name", [], "any", false, false, false, 18) => (($_v2 = ($context["record"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 18), "route_param_field", [], "any", false, false, false, 18)) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : null)];
        // line 19
        $context["extra_route_params"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 19), "extra_route_params", [], "any", false, false, false, 19);
        // line 20
        yield "
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extra_route_params"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 22
            yield "  ";
            $context["route_params"] = Twig\Extension\CoreExtension::merge(($context["route_params"] ?? null), [ (string)$context["name"] => (((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 22) &&  !(null === (($_v4 = ($context["record"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = $context["field"]) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : null)))) ? ((($_v6 = ($context["record"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = $context["field"]) instanceof \Stringable ? (string) $_v7 : $_v7)] ?? null) : null)) : ($context["field"]))]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
<a class=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
        yield " grid-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 25)), "html", null, true);
        yield "-row-link\"
   href=\"#\"
   data-confirm-message=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["confirmation_message"] ?? null), "html", null, true);
        yield "\"
   data-url=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 28), "route", [], "any", false, false, false, 28), ($context["route_params"] ?? null)), "html", null, true);
        yield "\"
   data-method=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 29), "method", [], "any", false, false, false, 29), "html", null, true);
        yield "\"
  ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 30), "modal_options", [], "any", false, true, false, 30), "options", [], "any", true, true, false, 30)) {
            // line 31
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 31), "modal_options", [], "any", false, false, false, 31), "options", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 32
                yield "      data-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["attribute"], ["_" => "-"]), "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attribute'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "  ";
        }
        // line 35
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
            yield "\"
  ";
        }
        // line 40
        yield ">
  ";
        // line 41
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 41))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "    <i class=\"material-icons\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 42), "html", null, true);
            yield "</i>
  ";
        }
        // line 44
        yield "  ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 45), "html", null, true);
            yield "
  ";
        }
        // line 47
        yield "</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig";
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
        return array (  166 => 47,  160 => 45,  157 => 44,  151 => 42,  149 => 41,  146 => 40,  141 => 38,  137 => 36,  134 => 35,  131 => 34,  120 => 32,  115 => 31,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  94 => 25,  91 => 24,  84 => 22,  80 => 21,  77 => 20,  75 => 19,  73 => 18,  70 => 17,  66 => 15,  63 => 14,  61 => 13,  59 => 12,  56 => 11,  52 => 9,  50 => 8,  47 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Actions\\Row\\submit.html.twig");
    }
}
