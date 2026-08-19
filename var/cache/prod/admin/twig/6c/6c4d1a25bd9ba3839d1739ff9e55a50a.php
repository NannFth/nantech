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

/* @PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig */
class __TwigTemplate_e08281cf6da5a72c826ae1888186f687 extends Template
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
            'grid_pagination' => [$this, 'block_grid_pagination'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('grid_pagination', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_pagination(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "  ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 7), "records_total", [], "any", false, false, false, 7) > 10) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "pagination", [], "any", false, false, false, 7), "offset", [], "any", false, false, false, 7))) {
            // line 8
            yield "    ";
            $context["route_params"] = [];
            // line 9
            yield "
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", ["_route_params"], "method", false, false, false, 10));
            foreach ($context['_seq'] as $context["param_name"] => $context["param_value"]) {
                // line 11
                yield "      ";
                $context["route_params"] = Twig\Extension\CoreExtension::merge(($context["route_params"] ?? null), [ (string)$context["param_name"] => $context["param_value"]]);
                // line 12
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['param_name'], $context['param_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "
    ";
            // line 14
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\CommonController::paginationAction", ["limit" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 15
($context["grid"] ?? null), "pagination", [], "any", false, false, false, 15), "limit", [], "any", false, false, false, 15), "offset" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 16
($context["grid"] ?? null), "pagination", [], "any", false, false, false, 16), "offset", [], "any", false, false, false, 16), "total" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 17
($context["grid"] ?? null), "data", [], "any", false, false, false, 17), "records_total", [], "any", false, false, false, 17), "prefix" => CoreExtension::getAttribute($this->env, $this->source,             // line 18
($context["grid"] ?? null), "form_prefix", [], "any", false, false, false, 18), "caller_route" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 19
($context["app"] ?? null), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", ["_route"], "method", false, false, false, 19), "caller_parameters" =>             // line 20
($context["route_params"] ?? null), "view" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 21
($context["grid"] ?? null), "view_options", [], "any", false, true, false, 21), "pagination_view", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "view_options", [], "any", false, false, false, 21), "pagination_view", [], "any", false, false, false, 21), "full")) : ("full"))]));
            // line 22
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
        return "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  91 => 22,  89 => 21,  88 => 20,  87 => 19,  86 => 18,  85 => 17,  84 => 16,  83 => 15,  82 => 14,  79 => 13,  73 => 12,  70 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  46 => 6,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\pagination.html.twig");
    }
}
