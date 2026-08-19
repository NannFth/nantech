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

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig */
class __TwigTemplate_f9dde93c829bcc55763a6ceb437076f3 extends Template
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
<button id=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%s_grid_bulk_action_%s", CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "id", [], "any", false, false, false, 6)), "html", null, true);
        yield "\"
        class=\"dropdown-item js-bulk-action-ajax-btn ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 7), "class", [], "any", false, false, false, 7), "html", null, true);
        yield "\"
        type=\"button\"
        data-bulk-action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "\"
        data-ajax-url=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 10), "ajax_route", [], "any", false, false, false, 10), "html", null, true);
        yield "\"
        data-route-params=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 11), "route_params", [], "any", false, false, false, 11)), "html", null, true);
        yield "\"
        data-request-param-name=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 12), "request_param_name", [], "any", false, false, false, 12), "html", null, true);
        yield "\"
        data-request-bulk-chunk-size=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 13), "bulk_chunk_size", [], "any", false, false, false, 13), "html", null, true);
        yield "\"
        data-request-reload-after-bulk=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 14), "reload_after_bulk", [], "any", false, false, false, 14), "html", null, true);
        yield "\"
        data-confirm-bulk-action=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 15), "confirm_bulk_action", [], "any", false, false, false, 15), "html", null, true);
        yield "\"
        data-confirm-title=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 16), "modal_confirm_title", [], "any", false, false, false, 16), "html", null, true);
        yield "\"
        data-cancel-label=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 17), "modal_cancel", [], "any", false, false, false, 17), "html", null, true);
        yield "\"
        data-progress-title=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 18), "modal_progress_title", [], "any", false, false, false, 18), "html", null, true);
        yield "\"
        data-progress-message=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 19), "modal_progress_message", [], "any", false, false, false, 19), "html", null, true);
        yield "\"
        data-close-label=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 20), "modal_close", [], "any", false, false, false, 20), "html", null, true);
        yield "\"
        data-stop-processing=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 21), "modal_stop_processing", [], "any", false, false, false, 21), "html", null, true);
        yield "\"
        data-errors-message=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 22), "modal_errors_message", [], "any", false, false, false, 22), "html", null, true);
        yield "\"
        data-back-to-processing=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 23), "modal_back_to_processing", [], "any", false, false, false, 23), "html", null, true);
        yield "\"
        data-download-error-log=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 24), "modal_download_error_log", [], "any", false, false, false, 24), "html", null, true);
        yield "\"
        data-view-error-log=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 25), "modal_view_error_log", [], "any", false, false, false, 25), "html", null, true);
        yield "\"
        data-view-error-title=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 26), "modal_error_title", [], "any", false, false, false, 26), "html", null, true);
        yield "\"
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 28
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attribute'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield ">
  ";
        // line 31
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 31))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "    <i class=\"material-icons\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 32), "html", null, true);
            yield "</i>
  ";
        }
        // line 34
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        yield "
</button>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig";
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
        return array (  152 => 34,  146 => 32,  144 => 31,  141 => 30,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  49 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Actions\\Bulk\\ajax.html.twig");
    }
}
