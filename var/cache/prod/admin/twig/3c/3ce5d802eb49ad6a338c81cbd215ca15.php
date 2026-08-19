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

/* @PrestaShop/Admin/Helpers/password_feedback.html.twig */
class __TwigTemplate_1d3f8f6f55d59bc45722548b6771b2f1 extends Template
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
            'password_feedback_block' => [$this, 'block_password_feedback_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('password_feedback_block', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_feedback_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "  <template id=\"password-feedback\">
    ";
        // line 9
        yield "    <div
      class=\"password-strength-feedback d-none\"
      data-translations=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["Straight rows of keys are easy to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Straight rows of keys are easy to guess", [], "Admin.Advparameters.Feature"), "Short keyboard patterns are easy to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Short keyboard patterns are easy to guess", [], "Admin.Advparameters.Feature"), "Use a longer keyboard pattern with more turns" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use a longer keyboard pattern with more turns", [], "Admin.Advparameters.Feature"), "Repeats like \"aaa\" are easy to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Repeats like \"aaa\" are easy to guess", [], "Admin.Advparameters.Feature"), "Repeats like \"abcabcabc\" are only slightly harder to guess than \"abc\"" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Repeats like \"abcabcabc\" are only slightly harder to guess than \"abc\"", [], "Admin.Advparameters.Feature"), "Sequences like abc or 6543 are easy to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sequences like \"abc\" or \"6543\" are easy to guess", [], "Admin.Advparameters.Feature"), "Recent years are easy to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recent years are easy to guess", [], "Admin.Advparameters.Feature"), "Dates are often easy to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dates are often easy to guess", [], "Admin.Advparameters.Feature"), "This is a top-10 common password" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is a top-10 common password", [], "Admin.Advparameters.Feature"), "This is a top-100 common password" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is a top-100 common password", [], "Admin.Advparameters.Feature"), "This is a very common password" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is a very common password", [], "Admin.Advparameters.Feature"), "This is similar to a commonly used password" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is similar to a commonly used password", [], "Admin.Advparameters.Feature"), "A word by itself is easy to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A word by itself is easy to guess", [], "Admin.Advparameters.Feature"), "Names and surnames by themselves are easy to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Names and surnames by themselves are easy to guess", [], "Admin.Advparameters.Feature"), "Common names and surnames are easy to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Common names and surnames are easy to guess", [], "Admin.Advparameters.Feature"), 0 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very weak", [], "Admin.Advparameters.Feature"), 1 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Weak", [], "Admin.Advparameters.Feature"), 2 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Average", [], "Admin.Advparameters.Feature"), 3 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Strong", [], "Admin.Advparameters.Feature"), 4 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Very strong", [], "Admin.Advparameters.Feature"), "Use a few words, avoid common phrases" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use a few words, avoid common phrases", [], "Admin.Advparameters.Feature"), "No need for symbols, digits, or uppercase letters" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No need for symbols, digits, or uppercase letters", [], "Admin.Advparameters.Feature"), "Avoid repeated words and characters" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoid repeated words and characters", [], "Admin.Advparameters.Feature"), "Avoid sequences" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoid sequences", [], "Admin.Advparameters.Feature"), "Avoid recent years" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoid recent years", [], "Admin.Advparameters.Feature"), "Avoid years that are associated with you" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoid years that are associated with you", [], "Admin.Advparameters.Feature"), "Avoid dates and years that are associated with you" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Avoid dates and years that are associated with you", [], "Admin.Advparameters.Feature"), "Capitalization doesn\x27t help very much" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Capitalization doesn\x27t help very much", [], "Admin.Advparameters.Feature"), "All-uppercase is almost as easy to guess as all-lowercase" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All-uppercase is almost as easy to guess as all-lowercase", [], "Admin.Advparameters.Feature"), "Reversed words aren\x27t much harder to guess" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reversed words aren\x27t much harder to guess", [], "Admin.Advparameters.Feature"), "Predictable substitutions like \x27@\x27 instead of \x27a\x27 don\x27t help very much" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Predictable substitutions like \"@\" instead of \"a\" don\x27t help very much", [], "Admin.Advparameters.Feature"), "Add another word or two. Uncommon words are better." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add another word or two. Uncommon words are better.", [], "Admin.Advparameters.Feature")]), "html_attr");
        // line 44
        yield "\"
    >
      <div class=\"progress-container\">
        <div class=\"progress-bar\">
          <div></div>
        </div>
      </div>
      <div class=\"password-strength-text\"></div>
      <div class=\"password-requirements\">
        <p class=\"password-requirements-length\" data-translation=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter a password between %d and %d characters", [], "Admin.Advparameters.Feature"), "html_attr");
        yield "\">
          <i class=\"material-icons\">check_circle</i>
          <span></span>
        </p>
        <p class=\"password-requirements-score\" data-translation=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The minimum score must be: %s", [], "Admin.Advparameters.Feature"), "html_attr");
        yield "\">
          <i class=\"material-icons\">check_circle</i>
          <span></span>
        </p>
      </div>
    </div>
  </template>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Helpers/password_feedback.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  84 => 57,  77 => 53,  66 => 44,  64 => 11,  60 => 9,  57 => 7,  46 => 6,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Helpers/password_feedback.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Helpers\\password_feedback.html.twig");
    }
}
