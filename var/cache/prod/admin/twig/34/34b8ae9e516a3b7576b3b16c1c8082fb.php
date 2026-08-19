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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig */
class __TwigTemplate_7dfdd2757d8e63e65cf2355d414a1f45 extends Template
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
            'link' => [$this, 'block_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 6), "color_template_field", [], "any", false, false, false, 6)) && CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 6), "color_template_field", [], "any", false, false, false, 6), [], "array", true, true, false, 6))) {
            // line 7
            yield "  ";
            $context["color"] = (($_v0 = ($context["record"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 7), "color_template_field", [], "any", false, false, false, 7)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null);
        } else {
            // line 9
            yield "  ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 9), "color_template", [], "any", false, false, false, 9);
        }
        // line 11
        $context["class"] = ("text-" . ($context["color"] ?? null));
        // line 12
        yield "
";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 13), "button_template", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "  ";
            $context["style"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 14), "button_template", [], "any", false, false, false, 14);
            // line 15
            yield "  ";
            if ((($context["style"] ?? null) == "normal")) {
                // line 16
                yield "    ";
                $context["class"] = ("btn btn-" . ($context["color"] ?? null));
                // line 17
                yield "  ";
            } elseif ((($context["style"] ?? null) == "outline")) {
                // line 18
                yield "    ";
                $context["class"] = ("btn btn-outline-" . ($context["color"] ?? null));
                // line 19
                yield "  ";
            }
        }
        // line 21
        yield "
";
        // line 22
        $context["class"] = Twig\Extension\CoreExtension::trim(((($context["class"] ?? null) . " ") . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 22), "attr", [], "any", false, true, false, 22), "class", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 22), "attr", [], "any", false, false, false, 22), "class", [], "any", false, false, false, 22), "")) : (""))));
        // line 23
        yield "
";
        // line 24
        yield from $this->unwrap()->yieldBlock('link', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "<a
  class=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
        yield " text-nowrap\"
  href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "route", [], "any", false, false, false, 27), [ (string)CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "route_param_name", [], "any", false, false, false, 27) => (($_v2 = ($context["record"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "route_param_field", [], "any", false, false, false, 27)) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : null), "_fragment" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "route_fragment", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\"
  ";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 28), "target", [], "any", true, true, false, 28)) {
            // line 29
            yield "    target=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 29), "target", [], "any", false, false, false, 29), "html", null, true);
            yield "\"
  ";
        }
        // line 31
        yield "  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 32), "attr", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 33
            if (($context["attrname"] != "class")) {
                // line 34
                yield " ";
                // line 35
                if ($this->env->getTest('formview')->getCallable()($context["attrvalue"])) {
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["attrvalue"], 'row'), "html_attr");
                    yield "\"
      ";
                } elseif ($this->env->getTest('form')->getCallable()(                // line 37
$context["attrvalue"])) {
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["attrvalue"], "createView", [], "method", false, false, false, 38), 'row'), "html_attr");
                    yield "\"
      ";
                } else {
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"
      ";
                }
                // line 42
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield ">
  ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 45), "icon", [], "any", true, true, false, 45) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 45), "icon", [], "any", false, false, false, 45)))) {
            // line 46
            yield "    <i class=\"material-icons\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 46), "icon", [], "any", false, false, false, 46), "html", null, true);
            yield "</i>
  ";
        }
        // line 48
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["record"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 48), "field", [], "any", false, false, false, 48)) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : null), "html", null, true);
        yield "
</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig";
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
        return array (  172 => 48,  166 => 46,  164 => 45,  161 => 44,  154 => 42,  147 => 40,  140 => 38,  138 => 37,  132 => 36,  130 => 35,  128 => 34,  126 => 33,  122 => 32,  120 => 31,  114 => 29,  112 => 28,  108 => 27,  104 => 26,  101 => 25,  90 => 24,  87 => 23,  85 => 22,  82 => 21,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  61 => 13,  58 => 12,  56 => 11,  52 => 9,  48 => 7,  46 => 6,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\link.html.twig");
    }
}
