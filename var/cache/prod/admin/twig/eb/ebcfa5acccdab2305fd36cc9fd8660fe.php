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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig */
class __TwigTemplate_f9609e67c9b34834570b72a728930d99 extends Template
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
        $context["class"] = "btn tooltip-link js-link-row-action";
        // line 7
        yield "
";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 8)) {
            // line 9
            yield "  ";
            $context["class"] = ((($context["class"] ?? null) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, false, 9));
        }
        // line 11
        yield "
  ";
        // line 12
        $context["route_params"] = [ (string)CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 12), "route_param_name", [], "any", false, false, false, 12) => (($_v0 = ($context["record"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 12), "route_param_field", [], "any", false, false, false, 12)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null)];
        // line 13
        yield "  ";
        $context["extra_route_params"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 13), "extra_route_params", [], "any", false, false, false, 13);
        // line 14
        yield "
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extra_route_params"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 16
            yield "    ";
            $context["route_params"] = Twig\Extension\CoreExtension::merge(($context["route_params"] ?? null), [ (string)$context["name"] => (((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 16) &&  !(null === (($_v2 = ($context["record"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = $context["field"]) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : null)))) ? ((($_v4 = ($context["record"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = $context["field"]) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : null)) : ($context["field"]))]);
            // line 17
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
<a class=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
        yield " grid-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 19)), [" " => "-"]), "html", null, true);
        yield "-row-link\"
   href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 20), "route", [], "any", false, false, false, 20), ($context["route_params"] ?? null)), "html", null, true);
        yield "\"
   data-confirm-message=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 21), "confirm_message", [], "any", false, false, false, 21), "html", null, true);
        yield "\"
  ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true);
            yield "\"
  ";
        }
        // line 27
        yield "  data-clickable-row=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 27), "clickable_row", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 27), "clickable_row", [], "any", false, false, false, 27), false)) : (false)), "html", null, true);
        yield "\"
  ";
        // line 28
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 28), "target", [], "any", false, false, false, 28))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "target=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 28), "target", [], "any", false, false, false, 28), "html", null, true);
            yield "\"";
        }
        // line 29
        yield "  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 30), "attr", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 31
            if (($context["attrname"] != "class")) {
                // line 32
                yield " ";
                // line 33
                if ($this->env->getTest('formview')->getCallable()($context["attrvalue"])) {
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["attrvalue"], 'row'), "html_attr");
                    yield "\"
      ";
                } elseif ($this->env->getTest('form')->getCallable()(                // line 35
$context["attrvalue"])) {
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["attrvalue"], "createView", [], "method", false, false, false, 36), 'row'), "html_attr");
                    yield "\"
      ";
                } else {
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"
      ";
                }
                // line 40
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield ">
  ";
        // line 43
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 43))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "    <i class=\"material-icons\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 44), "html", null, true);
            yield "</i>
  ";
        }
        // line 46
        yield "  ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
            yield "
  ";
        }
        // line 49
        yield "</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig";
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
        return array (  180 => 49,  174 => 47,  171 => 46,  165 => 44,  163 => 43,  160 => 42,  153 => 40,  146 => 38,  139 => 36,  137 => 35,  131 => 34,  129 => 33,  127 => 32,  125 => 31,  121 => 30,  119 => 29,  113 => 28,  108 => 27,  103 => 25,  99 => 23,  97 => 22,  93 => 21,  89 => 20,  83 => 19,  80 => 18,  74 => 17,  71 => 16,  67 => 15,  64 => 14,  61 => 13,  59 => 12,  56 => 11,  52 => 9,  50 => 8,  47 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Actions\\Row\\link.html.twig");
    }
}
