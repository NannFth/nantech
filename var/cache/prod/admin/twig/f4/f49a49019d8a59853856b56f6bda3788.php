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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig */
class __TwigTemplate_07c0763d55715dfa0168300bb8ce5e14 extends Template
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

        // line 17
        $_trait_0 = $this->load("bootstrap_4_horizontal_layout.html.twig", 17);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_horizontal_layout.html.twig".'" cannot be used as a trait.', 17, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        // line 18
        $_trait_1 = $this->load("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 18);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 18, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 16
        yield "
";
        // line 19
        yield "
";
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 26
        yield "
";
        // line 28
        yield "
";
        // line 29
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 41
        yield "
";
        // line 42
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 45
        yield "
";
        // line 47
        yield "
";
        // line 48
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 115
        yield "
";
        // line 116
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 119
        yield "
";
        // line 120
        yield from $this->unwrap()->yieldBlock('form_row_class', $context, $blocks);
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 23), "")) : ("")) . " form-horizontal"))]);
        // line 24
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "    ";
            if ((($context["label"] ?? null) === null)) {
                // line 32
                yield "      <div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
    ";
            } elseif ((            // line 33
($context["label"] ?? null) === false)) {
                // line 34
                yield "      ";
                // line 35
                yield "    ";
            } else {
                // line 36
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
                // line 37
                yield from $this->yieldParentBlock("form_label", $context, $blocks);
            }
            // line 39
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v0, "html", null, true));
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "form-control-label";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 43), "attr", [], "any", false, true, false, 43), "disabled", [], "any", true, true, false, 43) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 43), "attr", [], "any", false, false, false, 43), "disabled", [], "any", false, false, false, 43)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 43), "disabled", [], "any", true, true, false, 43) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 43), "disabled", [], "any", false, false, false, 43)))) {
            yield " disabled";
        }
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 50
            yield "    ";
            // line 51
            yield "    ";
            if (array_key_exists("label_tag_name", $context)) {
                // line 52
                yield "      ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                yield "
    ";
            }
            // line 54
            yield "
    ";
            // line 55
            $macros["ps"] = $this->load("@PrestaShop/Admin/macros.html.twig", 55)->unwrap();
            // line 56
            yield "    ";
            $context["disabledField"] = false;
            // line 57
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 57), "attr", [], "any", false, true, false, 57), "disabled", [], "any", true, true, false, 57) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 57), "attr", [], "any", false, false, false, 57), "disabled", [], "any", false, false, false, 57))) {
                // line 58
                yield "      ";
                $context["disabledField"] = true;
                // line 59
                yield "    ";
            }
            // line 60
            yield "
    ";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "external_link", [], "any", true, true, false, 61)) {
                // line 62
                yield "        ";
                $context["externalLink"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 62), "external_link", [], "any", false, false, false, 62);
                // line 63
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["externalLink"] ?? null), "position", [], "any", true, true, false, 63)) {
                    // line 64
                    yield "            ";
                    $context["position"] = CoreExtension::getAttribute($this->env, $this->source, ($context["externalLink"] ?? null), "position", [], "any", false, false, false, 64);
                    // line 65
                    yield "        ";
                } else {
                    // line 66
                    yield "            ";
                    $context["position"] = "append";
                    // line 67
                    yield "        ";
                }
                // line 68
                yield "    ";
            } else {
                // line 69
                yield "        ";
                $context["position"] = "append";
                // line 70
                yield "    ";
            }
            // line 71
            yield "
    <div class=\"";
            // line 72
            yield from             $this->unwrap()->yieldBlock("form_row_class", $context, $blocks);
            yield from             $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
            if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                yield " has-error";
            }
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "visible", [], "any", true, true, false, 72) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "visible", [], "any", false, false, false, 72))) {
                yield " d-none";
            }
            yield "\">
      ";
            // line 73
            $context["multistoreCheckboxName"] = (($context["multistore_field_prefix"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73));
            // line 74
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 74), ($context["multistoreCheckboxName"] ?? null), [], "any", true, true, false, 74)) {
                // line 75
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 75), ($context["multistoreCheckboxName"] ?? null), [], "any", false, false, false, 75), 'errors');
                yield "
        ";
                // line 76
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 76), ($context["multistoreCheckboxName"] ?? null), [], "any", false, false, false, 76), 'widget');
                yield "
      ";
            }
            // line 78
            yield "
      ";
            // line 79
            if ((($context["position"] ?? null) == "prepend")) {
                // line 80
                yield "        ";
                if ((($tmp =  !array_key_exists("label_tag_name", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 81
                    yield "        <div class=\"form-control-label flex flex-col items-end\">
            ";
                    // line 82
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 83
                    yield from                     $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
                    // line 84
                    yield "</div>
        ";
                }
                // line 86
                yield "      ";
            } else {
                // line 87
                yield "        ";
                if ((($tmp =  !array_key_exists("label_tag_name", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 88
                    yield "          ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    yield "
        ";
                }
                // line 90
                yield "      ";
            }
            // line 91
            yield "
      <div class=\"";
            // line 92
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            if ((($tmp = ($context["disabledField"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " disabled";
            }
            yield "\">";
            // line 93
            yield from             $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
            // line 94
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            yield "
        ";
            // line 95
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["fieldError" => true]]);
            // line 96
            yield from             $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
            // line 97
            if ((($context["position"] ?? null) == "below")) {
                // line 98
                yield from                 $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
            }
            // line 100
            yield "      </div>
      ";
            // line 101
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 101), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101), [], "any", true, true, false, 101) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 101), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101), [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "multistore_dropdown", [], "any", false, false, false, 101) != false))) {
                // line 102
                yield "        ";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 102), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "multistore_dropdown", [], "any", false, false, false, 102);
                yield "
      ";
            }
            // line 104
            yield "
      ";
            // line 105
            if ((($context["position"] ?? null) == "append")) {
                // line 106
                yield from                 $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
            }
            // line 108
            yield "    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v1, "html", null, true));
        // line 110
        yield "
  ";
        // line 111
        if ((($tmp = ($context["column_breaker"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "    <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_group_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 117
        yield "col-sm input-container";
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        yield "form-group row";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 121)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 121), "html", null, true);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  399 => 121,  392 => 120,  387 => 117,  380 => 116,  373 => 112,  371 => 111,  368 => 110,  366 => 49,  361 => 108,  358 => 106,  356 => 105,  353 => 104,  347 => 102,  345 => 101,  342 => 100,  339 => 98,  337 => 97,  335 => 96,  333 => 95,  329 => 94,  327 => 93,  321 => 92,  318 => 91,  315 => 90,  309 => 88,  306 => 87,  303 => 86,  299 => 84,  297 => 83,  295 => 82,  292 => 81,  289 => 80,  287 => 79,  284 => 78,  279 => 76,  274 => 75,  271 => 74,  269 => 73,  258 => 72,  255 => 71,  252 => 70,  249 => 69,  246 => 68,  243 => 67,  240 => 66,  237 => 65,  234 => 64,  231 => 63,  228 => 62,  226 => 61,  223 => 60,  220 => 59,  217 => 58,  214 => 57,  211 => 56,  209 => 55,  206 => 54,  200 => 52,  197 => 51,  195 => 50,  193 => 49,  186 => 48,  178 => 43,  171 => 42,  166 => 30,  162 => 39,  159 => 37,  156 => 36,  153 => 35,  151 => 34,  149 => 33,  144 => 32,  141 => 31,  139 => 30,  132 => 29,  127 => 24,  125 => 23,  118 => 22,  113 => 120,  110 => 119,  108 => 116,  105 => 115,  103 => 48,  100 => 47,  97 => 45,  95 => 42,  92 => 41,  90 => 29,  87 => 28,  84 => 26,  82 => 22,  79 => 21,  76 => 19,  73 => 16,  70 => 5,  42 => 18,  35 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\prestashop_ui_kit.html.twig");
    }
}
