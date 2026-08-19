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

/* @PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig */
class __TwigTemplate_a825e01bc8b6ea85d5e9e8e82a56481b extends Template
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
            'carrier_showcase_card' => [$this, 'block_carrier_showcase_card'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@PrestaShop/Admin/layout.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "  ";
        yield from $this->unwrap()->yieldBlock('carrier_showcase_card', $context, $blocks);
        // line 12
        yield "
  ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig");
        yield "
  ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", ["grid" => ($context["carrierGrid"] ?? null)]);
        yield "

  ";
        // line 17
        yield "  <div class=\"row\">
    <div class=\"col\"></div>
  </div>
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_carrier_showcase_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/showcase_card.html.twig");
        yield "
  ";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

  <script src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/carrier.bundle.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig";
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
        return array (  115 => 26,  111 => 25,  105 => 23,  98 => 22,  90 => 10,  83 => 9,  75 => 17,  70 => 14,  66 => 13,  63 => 12,  60 => 9,  53 => 8,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Shipping\\Carriers\\index.html.twig");
    }
}
