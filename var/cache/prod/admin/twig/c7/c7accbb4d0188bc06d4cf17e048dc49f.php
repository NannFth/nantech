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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig */
class __TwigTemplate_9462fa0146accce6f14c0ed132ad7ab5 extends Template
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
        $context["updateRouteParams"] = $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->arrayPluck(($context["record"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 6), "record_route_params", [], "any", false, false, false, 6));
        // line 7
        yield "
<div class=\"position-drag-handle js-";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "-position\"
     data-id=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["record"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 9), "id_field", [], "any", false, false, false, 9)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null), "html", null, true);
        yield "\"
     data-position=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["record"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 10), "position_field", [], "any", false, false, false, 10)) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : null), "html", null, true);
        yield "\"
     data-update-url=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 11), "update_route", [], "any", false, false, false, 11), ($context["updateRouteParams"] ?? null)), "html", null, true);
        yield "\"
     data-update-method=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 12), "update_method", [], "any", false, false, false, 12), "html", null, true);
        yield "\"
     data-pagination-offset=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "pagination", [], "any", false, false, false, 13), "offset", [], "any", false, false, false, 13), "html", null, true);
        yield "\"
>
    <i class=\"material-icons\">drag_indicator</i>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig";
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
        return array (  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  47 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/position_handle.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\position_handle.html.twig");
    }
}
