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

/* @PrestaShop/Admin/Layout/light_layout.html.twig */
class __TwigTemplate_4e4bfa3a6ed21c3c8539bc1bc26da6f7 extends Template
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
            'header' => [$this, 'block_header'],
            'core_javascript' => [$this, 'block_core_javascript'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "setupSmarty", [(((array_key_exists("layoutTitle", $context) &&  !(null === $context["layoutTitle"]))) ? ($context["layoutTitle"]) : ("")), ($context["metaTitle"] ?? null), ($context["lightDisplay"] ?? null)], "method", false, false, false, 6), "html", null, true);
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 8), "html", null, true);
        yield "\">
<head>
  ";
        // line 10
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 20
        yield "</head>

<body
  class=\"lang-";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isoUser", [], "any", false, false, false, 23), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isRtlLanguage", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " lang-rtl";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "controllerName", [], "any", false, false, false, 23))), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "menuCollapsed", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " page-sidebar-closed";
        }
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", false, false, false, 23), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " developer-mode";
        }
        yield " ps-bo-rebrand\"
  ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 24) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 24), "base_url", [], "any", true, true, false, 24))) {
            yield "data-base-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 24), "base_url", [], "any", false, false, false, 24), "html", null, true);
            yield "\"";
        }
        // line 25
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 25) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 25), "token", [], "any", false, false, false, 25))) {
            yield "data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, false, false, 25), "token", [], "any", false, false, false, 25), "html", null, true);
            yield "\"";
        }
        // line 26
        yield ">

<div id=\"main-div\" class=\"light_display_layout\">
  ";
        // line 29
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "installDirExists", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "    <div class=\"alert alert-warning\">
      ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For security reasons, you must also delete the /install folder.", [], "Admin.Login.Notification"), "html", null, true);
            yield "
    </div>
  ";
        } else {
            // line 34
            yield "    <div class=\"-notoolbar\">
      ";
            // line 35
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminAfterHeader", []);
            yield "

      ";
            // line 38
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
            // line 39
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 40
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_footer', $context, $blocks);
            // line 41
            yield "      ";
            yield from $this->unwrap()->yieldBlock('sidebar_right', $context, $blocks);
            // line 42
            yield "
      ";
            // line 43
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminEndContent", []);
            yield "
    </div>
  ";
        }
        // line 46
        yield "</div>

";
        // line 49
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 50
        yield from $this->unwrap()->yieldBlock('extra_javascripts', $context, $blocks);
        // line 51
        yield from $this->unwrap()->yieldBlock('translate_javascripts', $context, $blocks);
        // line 52
        yield "</body>
</html>
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        yield from $this->unwrap()->yieldBlock('core_javascript', $context, $blocks);
        // line 14
        yield "    ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("HeadTag", ["metaTitle" => ($context["metaTitle"] ?? null)]);
        yield "
    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "    ";
        yield from $this->unwrap()->yieldBlock('extra_stylesheets', $context, $blocks);
        // line 19
        yield "  ";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_core_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "      ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/core_javascript.html.twig");
        yield "
    ";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "      ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/stylesheets.html.twig");
        yield "
    ";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/light_layout.html.twig";
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
        return array (  285 => 51,  275 => 50,  265 => 49,  255 => 41,  245 => 40,  235 => 39,  225 => 38,  215 => 18,  207 => 16,  200 => 15,  192 => 12,  185 => 11,  180 => 19,  177 => 18,  175 => 15,  170 => 14,  167 => 11,  160 => 10,  153 => 52,  151 => 51,  149 => 50,  147 => 49,  143 => 46,  137 => 43,  134 => 42,  131 => 41,  128 => 40,  125 => 39,  122 => 38,  117 => 35,  114 => 34,  108 => 31,  105 => 30,  103 => 29,  98 => 26,  91 => 25,  85 => 24,  70 => 23,  65 => 20,  63 => 10,  58 => 8,  53 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Layout/light_layout.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Layout\\light_layout.html.twig");
    }
}
