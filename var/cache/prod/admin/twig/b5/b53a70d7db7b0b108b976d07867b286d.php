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

/* @PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig */
class __TwigTemplate_509b6c778bb4c95ffb8bea13369e7227 extends Template
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
        $macros["ps"] = $this->macros["ps"] = $this->load("@PrestaShop/Admin/macros.html.twig", 6)->unwrap();
        // line 7
        yield "
";
        // line 8
        [$context["orderBy"], $context["orderWay"]] =         [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "sorting", [], "any", false, false, false, 8), "order_by", [], "any", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "sorting", [], "any", false, false, false, 8), "order_way", [], "any", false, false, false, 8)];
        // line 9
        yield "
";
        // line 10
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 10), "sortable", [], "any", true, true, false, 10) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 10), "sortable", [], "any", false, false, false, 10)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 10), "records_total", [], "any", false, false, false, 10) > 0))) {
            // line 11
            yield "  ";
            yield $macros["ps"]->getTemplateForMacro("macro_sortable_column_header", $context, 11, $this->getSourceContext())->macro_sortable_column_header(...[CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "id", [], "any", false, false, false, 11), ($context["orderBy"] ?? null), ($context["orderWay"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "form_prefix", [], "any", false, false, false, 11)]);
            yield "
";
        } else {
            // line 13
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig";
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
        return array (  63 => 13,  57 => 11,  55 => 10,  52 => 9,  50 => 8,  47 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Header\\Content\\default.html.twig");
    }
}
