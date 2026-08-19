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

/* @Common/HelpBox/helpbox.html.twig */
class __TwigTemplate_3a6d0c036d723f7781d2c120e708146a extends Template
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
 <span
   class=\"help-box";
        // line 7
        if (array_key_exists("classes", $context)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
        }
        yield "\"
   data-toggle=\"popover\"
   data-trigger=\"hover\"
   data-html=\"true\"
   ";
        // line 11
        if (array_key_exists("content", $context)) {
            // line 12
            yield "     data-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["content"] ?? null), "html", null, true);
            yield "\"
   ";
        }
        // line 14
        yield "
   ";
        // line 15
        if (array_key_exists("placement", $context)) {
            // line 16
            yield "     data-placement=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placement"] ?? null), "html", null, true);
            yield "\"
   ";
        }
        // line 18
        yield "
   ";
        // line 19
        if (array_key_exists("title", $context)) {
            // line 20
            yield "     data-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"
   ";
        }
        // line 22
        yield " >
 </span>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Common/HelpBox/helpbox.html.twig";
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
        return array (  86 => 22,  80 => 20,  78 => 19,  75 => 18,  69 => 16,  67 => 15,  64 => 14,  58 => 12,  56 => 11,  46 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Common/HelpBox/helpbox.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\HelpBox\\helpbox.html.twig");
    }
}
