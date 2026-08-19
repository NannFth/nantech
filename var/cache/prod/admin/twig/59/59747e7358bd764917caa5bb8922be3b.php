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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig */
class __TwigTemplate_d5fb636616f5ed7273d6f1fda2996544 extends Template
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
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 6), "max_displayed_characters", [], "any", false, false, false, 6) > 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = ($context["record"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 6), "field", [], "any", false, false, false, 6)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null)) > CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 6), "max_displayed_characters", [], "any", false, false, false, 6)))) {
            // line 7
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (($_v2 = ($context["record"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 7), "field", [], "any", false, false, false, 7)) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : null), 0, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 7), "max_displayed_characters", [], "any", false, false, false, 7)), "html", null, true);
            yield "&mldr;
";
        } else {
            // line 9
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["record"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 9), "field", [], "any", false, false, false, 9)) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : null), "html", null, true);
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
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig";
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
        return array (  53 => 9,  47 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/data.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\data.html.twig");
    }
}
