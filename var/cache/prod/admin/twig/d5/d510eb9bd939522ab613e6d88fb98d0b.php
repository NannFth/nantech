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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_4ae1e00831e75b8d89c6045f28a7295a extends Template
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
        $context["actions"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 6), "actions", [], "any", false, false, false, 6);
        // line 7
        yield "
";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["actions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    ";
            $context["inlineActions"] = [];
            // line 10
            yield "    ";
            $context["regularActions"] = [];
            // line 11
            yield "
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 13
                yield "      ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["action"], "isApplicable", [($context["record"] ?? null)], "method", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 14
                    yield "        ";
                    if (((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["action"], "options", [], "any", false, false, false, 14)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["use_inline_display"] ?? null) : null) == true)) {
                        // line 15
                        yield "            ";
                        $context["inlineActions"] = Twig\Extension\CoreExtension::merge(($context["inlineActions"] ?? null), [$context["action"]]);
                        // line 16
                        yield "          ";
                    } else {
                        // line 17
                        yield "            ";
                        $context["regularActions"] = Twig\Extension\CoreExtension::merge(($context["regularActions"] ?? null), [$context["action"]]);
                        // line 18
                        yield "        ";
                    }
                    // line 19
                    yield "      ";
                }
                // line 20
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "
    <div class=\"btn-group-action text-right\">
      ";
            // line 23
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["inlineActions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "        <div class=\"btn-group btn-group-inline d-flex justify-content-start\">
          ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["inlineActions"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["inlineAction"]) {
                    // line 26
                    $context["class"] = ("dropdown-item inline-dropdown-item " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inlineAction"], "options", [], "any", false, true, false, 26), "attr", [], "any", false, true, false, 26), "class", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inlineAction"], "options", [], "any", false, false, false, 26), "attr", [], "any", false, false, false, 26), "class", [], "any", false, false, false, 26), "")) : ("")));
                    // line 27
                    yield "
              ";
                    // line 28
                    yield Twig\Extension\CoreExtension::include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . CoreExtension::getAttribute($this->env, $this->source, $context["inlineAction"], "type", [], "any", false, false, false, 28)) . ".html.twig"), ["grid" =>                     // line 29
($context["grid"] ?? null), "column" =>                     // line 30
($context["column"] ?? null), "attributes" => ["class" => Twig\Extension\CoreExtension::trim(                    // line 31
($context["class"] ?? null)), "tooltip_name" => true], "record" =>                     // line 32
($context["record"] ?? null), "action" =>                     // line 33
$context["inlineAction"]]);
                    // line 34
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
                unset($context['_seq'], $context['_key'], $context['inlineAction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "        </div>
      ";
            }
            // line 38
            yield "
      ";
            // line 39
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["regularActions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "        <div class=\"btn-group\">
          ";
                // line 41
                [$context["skippedActions"], $context["isFirstRendered"]] =                 [0, false];
                // line 42
                yield "
          ";
                // line 44
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["regularActions"] ?? null));
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
                    // line 45
                    yield "            ";
                    if ((($tmp =  !($context["isFirstRendered"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 46
                        yield "              ";
                        $context["skippedActions"] = (($context["skippedActions"] ?? null) + 1);
                        // line 47
                        yield "            ";
                    }
                    // line 48
                    yield "
            ";
                    // line 49
                    if ((($tmp =  !($context["isFirstRendered"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 50
                        yield "              ";
                        $context["class"] = ("dropdown-item " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "options", [], "any", false, true, false, 50), "attr", [], "any", false, true, false, 50), "class", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "options", [], "any", false, false, false, 50), "attr", [], "any", false, false, false, 50), "class", [], "any", false, false, false, 50), "")) : ("")));
                        // line 51
                        yield "
              ";
                        // line 52
                        yield Twig\Extension\CoreExtension::include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 52)) . ".html.twig"), ["grid" =>                         // line 53
($context["grid"] ?? null), "column" =>                         // line 54
($context["column"] ?? null), "attributes" => ["class" => Twig\Extension\CoreExtension::trim(                        // line 55
($context["class"] ?? null)), "tooltip_name" => true], "record" =>                         // line 56
($context["record"] ?? null), "action" =>                         // line 57
$context["action"]]);
                        // line 58
                        yield "

              ";
                        // line 60
                        $context["isFirstRendered"] = true;
                        // line 61
                        yield "            ";
                    }
                    // line 62
                    yield "          ";
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
                // line 63
                yield "
          ";
                // line 65
                yield "          ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["regularActions"] ?? null)) > ($context["skippedActions"] ?? null))) {
                    // line 66
                    yield "            <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\"
            >
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["regularActions"] ?? null), ($context["skippedActions"] ?? null)));
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
                        // line 75
                        yield "                ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 75)) . ".html.twig"), ["grid" =>                         // line 76
($context["grid"] ?? null), "column" =>                         // line 77
($context["column"] ?? null), "attributes" => ["class" => "dropdown-item", "tooltip_name" => false], "record" =>                         // line 79
($context["record"] ?? null), "action" =>                         // line 80
$context["action"]]);
                        // line 81
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
                    // line 83
                    yield "            </div>
          ";
                }
                // line 85
                yield "        </div>
      ";
            }
            // line 87
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig";
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
        return array (  293 => 87,  289 => 85,  285 => 83,  270 => 81,  268 => 80,  267 => 79,  266 => 77,  265 => 76,  263 => 75,  246 => 74,  236 => 66,  233 => 65,  230 => 63,  216 => 62,  213 => 61,  211 => 60,  207 => 58,  205 => 57,  204 => 56,  203 => 55,  202 => 54,  201 => 53,  200 => 52,  197 => 51,  194 => 50,  192 => 49,  189 => 48,  186 => 47,  183 => 46,  180 => 45,  162 => 44,  159 => 42,  157 => 41,  154 => 40,  152 => 39,  149 => 38,  145 => 36,  130 => 34,  128 => 33,  127 => 32,  126 => 31,  125 => 30,  124 => 29,  123 => 28,  120 => 27,  118 => 26,  101 => 25,  98 => 24,  96 => 23,  92 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  61 => 12,  58 => 11,  55 => 10,  52 => 9,  50 => 8,  47 => 7,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\action.html.twig");
    }
}
