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

/* @PrestaShop/Admin/Common/Grid/grid.html.twig */
class __TwigTemplate_f32026b3b9854233255fd987aea9dc7d extends Template
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
            'grid_header_row' => [$this, 'block_grid_header_row'],
            'grid_bulk_actions_block' => [$this, 'block_grid_bulk_actions_block'],
            'grid_table_row' => [$this, 'block_grid_table_row'],
            'grid_footer_row' => [$this, 'block_grid_footer_row'],
            'grid_extra_content' => [$this, 'block_grid_extra_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
<div class=\"grid js-grid\" id=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "_grid\" data-grid-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        yield "\">
  ";
        // line 7
        yield from $this->unwrap()->yieldBlock('grid_header_row', $context, $blocks);
        // line 12
        yield "
  ";
        // line 13
        yield from $this->unwrap()->yieldBlock('grid_table_row', $context, $blocks);
        // line 16
        yield "
  ";
        // line 17
        yield from $this->unwrap()->yieldBlock('grid_footer_row', $context, $blocks);
        // line 20
        yield "</div>

";
        // line 22
        yield from $this->unwrap()->yieldBlock('grid_extra_content', $context, $blocks);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_header_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        yield from $this->unwrap()->yieldBlock('grid_bulk_actions_block', $context, $blocks);
        // line 11
        yield "  ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_bulk_actions_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "      ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions.html.twig", ["grid" => ($context["grid"] ?? null)]);
        yield "
    ";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_table_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", ["grid" => ($context["grid"] ?? null)]);
        yield "
  ";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_footer_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig", ["grid" => ($context["grid"] ?? null)]);
        yield "
  ";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_extra_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/grid.html.twig";
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
        return array (  137 => 22,  129 => 18,  122 => 17,  114 => 14,  107 => 13,  99 => 9,  92 => 8,  87 => 11,  84 => 8,  77 => 7,  72 => 22,  68 => 20,  66 => 17,  63 => 16,  61 => 13,  58 => 12,  56 => 7,  50 => 6,  47 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/grid.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\grid.html.twig");
    }
}
