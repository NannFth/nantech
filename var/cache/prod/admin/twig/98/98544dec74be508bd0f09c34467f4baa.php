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

/* @PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/showcase_card.html.twig */
class __TwigTemplate_556b646fd96382efd4b1ed54c210357c extends Template
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
        // line 7
        yield "
";
        // line 8
        if ((($tmp =  !($context["isShowcaseCardClosed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "  <div id=\"carriersShowcaseCard\" class=\"helper-card card\">
    <div class=\"helper-card__left helper-card__carrier shape-one\">
      <img src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/helper-card/carrier@3x.svg"), "html", null, true);
            yield "\" class=\"img-fluid\">
    </div>
    <div class=\"helper-card__right\">
      <h2>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your carriers", [], "Admin.Shipping.Feature"), "html", null, true);
            yield "</h2>
      <p>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create carriers to let your customers choose their best shipping option in terms of delivery dates or fees. Start with editing/deleting the default \"My carrier\", and add as many options as you need.", [], "Admin.Shipping.Feature"), "html", null, true);
            yield "</p>
      <a class=\"btn btn-outline-secondary\"
         href=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('documentation_link')->getCallable()("carrier"), "html", null, true);
            yield "\"
         target=\"_blank\"
      >
        ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            yield "
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["showcaseCardName"] ?? null), "html", null, true);
            yield "\"
       data-close-url=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_close_showcase_card");
            yield "\"
    >
      close
    </i>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/showcase_card.html.twig";
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
        return array (  86 => 25,  82 => 24,  75 => 20,  69 => 17,  64 => 15,  60 => 14,  54 => 11,  50 => 9,  48 => 8,  45 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/showcase_card.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Shipping\\Carriers\\Blocks\\showcase_card.html.twig");
    }
}
