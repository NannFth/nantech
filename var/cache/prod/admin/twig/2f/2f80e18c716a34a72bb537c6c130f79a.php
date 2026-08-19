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

/* @PrestaShop/Admin/Common/pagination.html.twig */
class __TwigTemplate_25f3570514497b9f883b82b5056d8277 extends Template
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
        yield "<div class=\"row justify-content-center pagination-block\">
  <ul class=\"pagination mb-0\">
    <li class=\"page-item ";
        // line 7
        if ((($tmp = ($context["first_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
        } else {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" ";
        // line 8
        if ((($tmp = ($context["first_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["first_url"] ?? null), "html", null, true);
            yield "\"";
        } else {
            yield "nohref";
        }
        yield ">1</a>
    </li>
    <li class=\"page-item previous ";
        // line 10
        if ((($tmp = ($context["previous_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
        } else {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" data-role=\"previous-page-link\" aria-label=\"Previous\" ";
        // line 11
        if ((($tmp = ($context["previous_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["previous_url"] ?? null), "html", null, true);
            yield "\"";
        } else {
            yield "nohref";
        }
        yield "><span class=\"sr-only\">Previous</span></a>
    </li>
    <li class=\"page-item active\">
      <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["current_page"] ?? null), "html", null, true);
        yield "\" psurl=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["jump_page_url"] ?? null), "html", null, true);
        yield "\" psmax=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_count"] ?? null), "html", null, true);
        yield "\" pslimit=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter page number and press enter", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "\"/>
    </li>
    <li class=\"page-item next ";
        // line 16
        if ((array_key_exists("next_url", $context) && (($context["next_url"] ?? null) != false))) {
        } else {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" data-role=\"next-page-link\" aria-label=\"Next\" id=\"pagination_next_url\" ";
        // line 17
        if ((array_key_exists("next_url", $context) && (($context["next_url"] ?? null) != false))) {
            yield "href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["next_url"] ?? null), "html", null, true);
            yield "\"";
        } else {
            yield "nohref";
        }
        yield "><span class=\"sr-only\">Next</span></a>
    </li>
    <li class=\"page-item ";
        // line 19
        if ((array_key_exists("last_url", $context) && (($context["last_url"] ?? null) != false))) {
        } else {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" ";
        // line 20
        if ((array_key_exists("last_url", $context) && (($context["last_url"] ?? null) != false))) {
            yield "href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_url"] ?? null), "html", null, true);
            yield "\"";
        } else {
            yield "nohref";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_count"] ?? null), "html", null, true);
        yield "</a>
    </li>
  </ul>
  <div class=\"mx-3\">
    <label class=\"col-form-label\">
      ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => (        // line 26
($context["from"] ?? null) + 1), "%to%" => min((        // line 27
($context["to"] ?? null) + 1), ($context["total"] ?? null)), "%total%" =>         // line 28
($context["total"] ?? null), "%current_page%" =>         // line 29
($context["current_page"] ?? null), "%page_count%" =>         // line 30
($context["page_count"] ?? null)], "Admin.Catalog.Feature"), "html", null, true);
        // line 31
        yield "
    </label>
  </div>
  <div class=\"mx-3\">
    <div class=\"form-group row mb-0\">
      <label for=\"paginator_select_page_limit\" class=\"col-form-label mr-2\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</label>
      <div>
        <select name=\"paginator_select_page_limit\" id=\"paginator_select_page_limit\" psurl=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["changeLimitUrl"] ?? null), "html", null, true);
        yield "\" class=\"pagination-link custom-select\">
          ";
        // line 39
        if (!CoreExtension::inFilter(($context["limit"] ?? null), ($context["limit_choices"] ?? null))) {
            // line 40
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
            yield "\" selected=\"selected\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
            yield "</option>
          ";
        }
        // line 42
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["limit_choices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["limit_choice"]) {
            // line 43
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit_choice"], "html", null, true);
            yield "\" ";
            if ((($context["limit"] ?? null) == $context["limit_choice"])) {
                yield "selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit_choice"], "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limit_choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "        </select>
      </div>
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
        return "@PrestaShop/Admin/Common/pagination.html.twig";
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
        return array (  190 => 45,  175 => 43,  170 => 42,  162 => 40,  160 => 39,  156 => 38,  151 => 36,  144 => 31,  142 => 30,  141 => 29,  140 => 28,  139 => 27,  138 => 26,  137 => 25,  121 => 20,  114 => 19,  103 => 17,  96 => 16,  83 => 14,  71 => 11,  64 => 10,  53 => 8,  46 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/pagination.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\pagination.html.twig");
    }
}
