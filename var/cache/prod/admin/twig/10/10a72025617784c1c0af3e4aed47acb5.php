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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig */
class __TwigTemplate_1e95430e1299892ce5d7d25ecc4bf22f extends Template
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
        // line 7
        $context["route_params"] = [ (string)CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 7), "route_param_name", [], "any", false, false, false, 7) => (($_v0 = ($context["record"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 7), "primary_field", [], "any", false, false, false, 7)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null)];
        // line 8
        $context["extra_route_params"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 8), "extra_route_params", [], "any", false, false, false, 8);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extra_route_params"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 10
            yield "  ";
            $context["route_params"] = Twig\Extension\CoreExtension::merge(($context["route_params"] ?? null), [ (string)$context["name"] => (((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 10) &&  !(null === (($_v2 = ($context["record"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = $context["field"]) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : null)))) ? ((($_v4 = ($context["record"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = $context["field"]) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : null)) : ($context["field"]))]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
";
        // line 14
        $context["id_primary_key"] = Twig\Extension\CoreExtension::join(($context["route_params"] ?? null), "-");
        // line 15
        yield "
";
        // line 16
        $context["isValid"] = ((($_v6 = ($context["record"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "id", [], "any", false, false, false, 16)) instanceof \Stringable ? (string) $_v7 : $_v7)] ?? null) : null) == 1);
        // line 17
        yield "
<div class=\"text-center\">
  <div
    class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center ps-togglable-row\"
    data-toggle-url=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 21), "route", [], "any", false, false, false, 21), ($context["route_params"] ?? null)), "html", null, true);
        yield "\"
  >
  <input type=\"radio\" name=\"input-";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 23), "route", [], "any", false, false, false, 23), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_primary_key"] ?? null), "html", null, true);
        yield "\"
         id=\"input-false-";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 24), "route", [], "any", false, false, false, 24), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_primary_key"] ?? null), "html", null, true);
        yield "\"
         value=\"0\" ";
        // line 25
        if ((($tmp =  !($context["isValid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "checked";
        }
        yield ">
      <label for=\"input-false-";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 26), "route", [], "any", false, false, false, 26), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_primary_key"] ?? null), "html", null, true);
        yield "\">Off</label>
      <input type=\"radio\" name=\"input-";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "route", [], "any", false, false, false, 27), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_primary_key"] ?? null), "html", null, true);
        yield "\"
             id=\"input-true-";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 28), "route", [], "any", false, false, false, 28), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_primary_key"] ?? null), "html", null, true);
        yield "\"
             value=\"1\" ";
        // line 29
        if ((($tmp = ($context["isValid"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "checked";
        }
        yield ">
      <label for=\"input-true-";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 30), "route", [], "any", false, false, false, 30), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id_primary_key"] ?? null), "html", null, true);
        yield "\">On</label>
      <span class=\"slide-button\"></span>
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
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig";
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
        return array (  123 => 30,  117 => 29,  111 => 28,  105 => 27,  99 => 26,  93 => 25,  87 => 24,  81 => 23,  76 => 21,  70 => 17,  68 => 16,  65 => 15,  63 => 14,  60 => 12,  53 => 10,  49 => 9,  47 => 8,  45 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\toggle.html.twig");
    }
}
