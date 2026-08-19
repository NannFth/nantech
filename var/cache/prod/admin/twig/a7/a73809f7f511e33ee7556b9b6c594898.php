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

/* @PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig */
class __TwigTemplate_bc4d976e614733a28a6574c810b2909c extends Template
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
        if ((($tmp = ($context["showHeaderAlert"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "  <div class=\"alert alert-info\">
    <p>";
            // line 10
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You need to register all the carriers with which you have chosen to work. PrestaShop comes with a selection of carrier modules you can install right below the page or buy on [1]Addons marketplace[/1].", ["[1]" => "<a href=\"https://addons.prestashop.com/en/520-shipping-carriers\">", "[/1]" => "</a>"], "Admin.Shipping.Help"));
            yield "</p><br>
    <p>";
            // line 11
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If there is no existing module for your carrier, you can register it manually by clicking on \"[1]\" but before, please make sure you did not register a new carrier if a module already exists for it!", ["[1]" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new carrier", [], "Admin.Shipping.Feature")], "Admin.Shipping.Help"));
            yield "</p>
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
        return "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig";
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
        return array (  57 => 11,  53 => 10,  50 => 9,  48 => 8,  45 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Shipping\\Carriers\\Blocks\\information_block.html.twig");
    }
}
