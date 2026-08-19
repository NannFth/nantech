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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig */
class __TwigTemplate_96ad7d1e7149f033a770619e7d9bc5fd extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 19
        return $this->load((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "isxmlhttprequest", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@Modules/ps_mbo/views/templates/admin/layout-ajax.html.twig") : ("@PrestaShop/Admin/layout.html.twig")), 19);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "  <script>
    if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
      if (typeof renderCdcError === \x27function\x27) {
        window.\$(document).ready(function() {
          renderCdcError(\$(\x27#cdc-container\x27));
        });
      }
    } else {
      if (typeof window.mboRenderRecommendations === \x27undefined\x27) {
        window.mboRenderRecommendations = window.mboCdc.renderRecommendations
      }

      window.mboRenderRecommendations(";
        // line 34
        yield json_encode(($context["shop_context"] ?? null));
        yield ", \x27#cdc-container\x27)
    }
  </script>
  <div id=\"cdc-container\" class=\"cdc-container\" data-error-path=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        yield "\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig";
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
        return array (  77 => 37,  71 => 34,  57 => 22,  50 => 21,  40 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig", "C:\\xampp\\htdocs\\nantech-store\\modules\\ps_mbo\\views\\templates\\admin\\controllers\\module_catalog\\recommended-modules.html.twig");
    }
}
