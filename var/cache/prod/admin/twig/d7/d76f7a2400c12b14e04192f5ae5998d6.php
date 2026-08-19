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

/* @PrestaShop/Admin/Common/javascript_pagination.html.twig */
class __TwigTemplate_53987099839bf8c7c9f15b4b843c51b8 extends Template
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
        // line 10
        yield "<ul class=\"pagination mb-0\">
  <li class=\"page-item first disabled\">
    <button type=\"button\" class=\"page-link first\" data-page=\"1\">1</button>
  </li>
  <li class=\"page-item previous disabled\">
    <button type=\"button\" class=\"page-link previous\" aria-label=\"Previous\"><span class=\"sr-only\">Previous</span></button>
  </li>
  <li class=\"page-item current active\">
    <label>
      <input
        name=\"paginator-jump-page\"
        class=\"jump-to-page\"
        type=\"text\"
        value=\"1\"
      />
    </label>
  </li>
  <li class=\"page-item next\">
    <button
      type=\"button\"
      class=\"page-link next\"
      aria-label=\"Next\"
      data-page=\"2\">
      <span class=\"sr-only\">Next</span>
    </button>
  </li>
  <li class=\"page-item last\">
    <button type=\"button\" class=\"page-link last\"></button>
  </li>
</ul>
<div class=\"mx-3\">
  <label class=\"col-form-label\" id=\"pagination-info\"
         data-pagination-info=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => "%from%", "%to%" => "%to%", "%total%" => "%total%", "%current_page%" => "%current_page%", "%page_count%" => "%page_count%"], "Admin.Catalog.Feature"), "html", null, true);
        // line 48
        yield "\"
  >
  </label>
</div>
<div class=\"mx-3\">
  <div class=\"form-group row mb-0\">
    <label for=\"paginator-limit\" class=\"col-form-label mr-2\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</label>
    <div>
      <select name=\"paginator-limit\" id=\"paginator-limit\" class=\"pagination-link custom-select\">
        ";
        // line 57
        if (!CoreExtension::inFilter(($context["limit"] ?? null), ($context["limitChoices"] ?? null))) {
            // line 58
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
            yield "\" selected=\"selected\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
            yield "</option>
        ";
        }
        // line 60
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["limitChoices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["limitChoice"]) {
            // line 61
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitChoice"], "html", null, true);
            yield "\" ";
            if ((($context["limit"] ?? null) == $context["limitChoice"])) {
                yield "selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitChoice"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limitChoice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "      </select>
    </div>
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
        return "@PrestaShop/Admin/Common/javascript_pagination.html.twig";
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
        return array (  125 => 63,  110 => 61,  105 => 60,  97 => 58,  95 => 57,  89 => 54,  81 => 48,  79 => 42,  45 => 10,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/javascript_pagination.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\javascript_pagination.html.twig");
    }
}
