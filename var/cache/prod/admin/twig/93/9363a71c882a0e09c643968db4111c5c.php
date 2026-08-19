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

/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_7768df10b7b2d09404219240b7b592fa extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "actions", [], "any", false, false, false, 5), "grid", [], "any", false, false, false, 5)) > 0)) {
            // line 6
            yield "  ";
            $context["gridActionsButtonId"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 6) . "-grid-actions-button");
            // line 7
            yield "  ";
            $context["gridActionsDropdownMenuId"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 7) . "-grid-actions-dropdown-menu");
            // line 8
            yield "
  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gridActionsButtonId"] ?? null), "html", null, true);
            yield "\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings", [], "Admin.Global"), "html", null, true);
            yield "\"
    >
      <span class=\"sr-only\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings", [], "Admin.Global"), "html", null, true);
            yield "</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gridActionsButtonId"] ?? null), "html", null, true);
            yield "\"
         id=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gridActionsDropdownMenuId"] ?? null), "html", null, true);
            yield "\"
    >
      ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "actions", [], "any", false, false, false, 24), "grid", [], "any", false, false, false, 24));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 25
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Grid/" . CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 25)) . ".html.twig"), ["action" => $context["action"], "grid" => ($context["grid"] ?? null)]);
                yield "
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    </div>

    ";
            // line 29
            yield from $this->load("@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 29, 1)->unwrap()->yield(CoreExtension::merge($context, ["id" => (CoreExtension::getAttribute($this->env, $this->source,             // line 30
($context["grid"] ?? null), "id", [], "any", false, false, false, 30) . "_grid_common_show_query_modal"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg btn-sql-submit"]]]));
            // line 54
            yield "  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
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
        return array (  124 => 54,  122 => 30,  121 => 29,  117 => 27,  100 => 25,  83 => 24,  78 => 22,  74 => 21,  67 => 17,  62 => 15,  55 => 11,  50 => 8,  47 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\grid_actions.html.twig");
    }
}


/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_7768df10b7b2d09404219240b7b592fa___1 extends Template
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
        // line 29
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", 29);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_sql_requests_create");
        yield "\"
                  id=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["grid"] ?? null), "id", [], "any", false, false, false, 44) . "_common_show_query_modal_form"), "html", null, true);
        yield "\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
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
        return array (  210 => 44,  206 => 43,  202 => 41,  195 => 40,  184 => 29,  124 => 54,  122 => 30,  121 => 29,  117 => 27,  100 => 25,  83 => 24,  78 => 22,  74 => 21,  67 => 17,  62 => 15,  55 => 11,  50 => 8,  47 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\grid_actions.html.twig");
    }
}
