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

/* @AdvancedParameters/memcache_servers.html.twig */
class __TwigTemplate_da9b63ae1e54117d2965f1c2bda4ebf4 extends Template
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
            'perfs_memcache_servers' => [$this, 'block_perfs_memcache_servers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
";
        // line 7
        yield from $this->unwrap()->yieldBlock('perfs_memcache_servers', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_memcache_servers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div class=\"form-group row memcache\" id=\"new-server-btn\">
    <a
        class=\"btn btn-default\"
        data-toggle=\"collapse\"
        href=\"#server-form\"
        aria-expanded=\"false\"
        aria-controls=\"server-form\"
    ><i class=\"material-icons\">add_circle</i> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add server", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</a>
</div>

<div id=\"server-form\" class=\"collapse\">
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "

    <div class=\"form-group\">
        <div class=\"float-right\">
            <button id=\"add-server-btn\" class=\"btn btn-primary\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</button>
            <button id=\"test-server-btn\" class=\"btn btn-primary\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Test Server", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</button>
        </div>
    </div>
</div>

<div id=\"servers-list\" class=\"memcache\">
    <div class=\"form-group\">
        <table class=\"table\" id=\"servers-table\">
            <thead>
            <tr>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        yield "</span></th>
                <th><span class=\"title_box\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IP Address", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Port", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</span></th>
                <th class=\"fixed-width-xs\"><span class=\"title_box\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Weight", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "</span></th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["servers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 43
            yield "                <tr id=\"row_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
                    <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                    <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                    <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                    <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "weight", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 49
            $context["removeMsg"] = json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Do you really want to remove the server %serverIp%:%serverPort% ?", ["%serverIp%" => CoreExtension::getAttribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 49), "%serverPort%" => CoreExtension::getAttribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 49)], "Admin.Advparameters.Notification"));
            // line 50
            yield "                        <a class=\"btn btn-default\" href=\"\"
                           onclick=\"app.removeServer(";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id_memcached_server", [], "any", false, false, false, 51), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["removeMsg"] ?? null), "html", null, true);
            yield ");\">
                          <i class=\"material-icons\">remove_circle</i> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove", [], "Admin.Actions"), "html", null, true);
            yield "
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "            </tbody>
        </table>
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
        return "@AdvancedParameters/memcache_servers.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  165 => 57,  154 => 52,  148 => 51,  145 => 50,  143 => 49,  138 => 47,  134 => 46,  130 => 45,  126 => 44,  121 => 43,  117 => 42,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  84 => 24,  80 => 23,  73 => 19,  66 => 15,  57 => 8,  46 => 7,  43 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@AdvancedParameters/memcache_servers.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\memcache_servers.html.twig");
    }
}
