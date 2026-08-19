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

/* @PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig */
class __TwigTemplate_d2f801698dcf0f899535decfe543749b extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'perfs_form_smarty_cache' => [$this, 'block_perfs_form_smarty_cache'],
            'perfs_form_smarty_cache_form' => [$this, 'block_perfs_form_smarty_cache_form'],
            'perfs_form_debug_mode' => [$this, 'block_perfs_form_debug_mode'],
            'perfs_form_debug_mode_form' => [$this, 'block_perfs_form_debug_mode_form'],
            'perfs_form_modules' => [$this, 'block_perfs_form_modules'],
            'perfs_form_modules_form' => [$this, 'block_perfs_form_modules_form'],
            'perfs_form_optional_features' => [$this, 'block_perfs_form_optional_features'],
            'perfs_form_optional_features_form' => [$this, 'block_perfs_form_optional_features_form'],
            'perfs_form_ccc' => [$this, 'block_perfs_form_ccc'],
            'perfs_form_ccc_form' => [$this, 'block_perfs_form_ccc_form'],
            'perfs_form_media_servers' => [$this, 'block_perfs_form_media_servers'],
            'perfs_form_media_servers_form' => [$this, 'block_perfs_form_media_servers_form'],
            'perfs_form_caching' => [$this, 'block_perfs_form_caching'],
            'perfs_form_caching_form' => [$this, 'block_perfs_form_caching_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["smartyForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["debugModeForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["optionalFeaturesForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 10
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["combineCompressCacheForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["mediaServersForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 12
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["cachingForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 5
        $this->parent = $this->load("@PrestaShop/Admin/layout.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["smartyForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_smarty_save")]);
        yield "
  ";
        // line 16
        yield from $this->unwrap()->yieldBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 36
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["smartyForm"] ?? null), 'form_end');
        yield "

  ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["debugModeForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_debug_mode_save")]);
        yield "
  ";
        // line 39
        yield from $this->unwrap()->yieldBlock('perfs_form_debug_mode', $context, $blocks);
        // line 59
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["debugModeForm"] ?? null), 'form_end');
        yield "

  ";
        // line 61
        yield from $this->unwrap()->yieldBlock('perfs_form_modules', $context, $blocks);
        // line 104
        yield "
  ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionalFeaturesForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_optional_features_save")]);
        yield "
  ";
        // line 106
        yield from $this->unwrap()->yieldBlock('perfs_form_optional_features', $context, $blocks);
        // line 135
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionalFeaturesForm"] ?? null), 'form_end');
        yield "

  ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combineCompressCacheForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_combine_compress_cache_save")]);
        yield "
  ";
        // line 138
        yield from $this->unwrap()->yieldBlock('perfs_form_ccc', $context, $blocks);
        // line 167
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combineCompressCacheForm"] ?? null), 'form_end');
        yield "

  ";
        // line 169
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mediaServersForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_media_servers_save")]);
        yield "
  ";
        // line 170
        yield from $this->unwrap()->yieldBlock('perfs_form_media_servers', $context, $blocks);
        // line 199
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mediaServersForm"] ?? null), 'form_end');
        yield "

  ";
        // line 201
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cachingForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_caching_save")]);
        yield "
  ";
        // line 202
        yield from $this->unwrap()->yieldBlock('perfs_form_caching', $context, $blocks);
        // line 224
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cachingForm"] ?? null), 'form_end');
        yield "
";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_smarty_cache(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">business_center</i>
        ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Smarty", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 24
        yield from $this->unwrap()->yieldBlock('perfs_form_smarty_cache_form', $context, $blocks);
        // line 27
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_smarty_cache_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["smartyForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_debug_mode(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 47
        yield from $this->unwrap()->yieldBlock('perfs_form_debug_mode_form', $context, $blocks);
        // line 50
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_debug_mode_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["debugModeForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_modules(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "    <div class=\"card form-horizontal\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span
          class=\"help-box\"
          data-container=\"body\"
          data-toggle=\"popover\"
          data-trigger=\"hover\"
          data-placement=\"right\"
          data-content=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This feature allows you to identify modules that might be causing bugs on your store. Disable all non-built-in modules (not listed in composer.json). Then, re-enable each module one by one and check that everything works properly before moving on to the next one.", [], "Admin.Advparameters.Help"), "html_attr");
        yield "\"
          title=\"\"
          data-original-title=\"\"
        ></span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 80
        yield from $this->unwrap()->yieldBlock('perfs_form_modules_form', $context, $blocks);
        // line 100
        yield "        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_modules_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 81
        yield "            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable non built-in modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
              </label>

              <div class=\"col-sm input-container\">
                <a
                  class=\"btn btn-primary pointer\"
                  href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_module_disable_non_builtin");
        yield "\"
                  id=\"disableNonBuiltInModulesBtn\"
                  data-confirm-title=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable all non-built-in modules?", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "\"
                  data-confirm-button-label=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable", [], "Admin.Actions"), "html", null, true);
        yield "\"
                  data-close-button-label=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\"
                >
                  ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable", [], "Admin.Actions"), "html", null, true);
        yield "
                </a>
              </div>
            </div>
          ";
        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_optional_features(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "    <div class=\"card\" id=\"optional_features\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">extension</i>
        ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional features", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Some features can be disabled in order to improve performance.", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 123
        yield from $this->unwrap()->yieldBlock('perfs_form_optional_features_form', $context, $blocks);
        // line 126
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_optional_features_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 124
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["optionalFeaturesForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_ccc(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 139
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">zoom_out_map</i>
        ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC (Combine, Compress and Cache)", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.7+. Otherwise, CCC will cause problems.", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 155
        yield from $this->unwrap()->yieldBlock('perfs_form_ccc_form', $context, $blocks);
        // line 158
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_ccc_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 156
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combineCompressCacheForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_media_servers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 171
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media servers (use only with CCC)", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 187
        yield from $this->unwrap()->yieldBlock('perfs_form_media_servers_form', $context, $blocks);
        // line 190
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 187
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_media_servers_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 188
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["mediaServersForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_caching(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 203
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Caching", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 210
        yield from $this->unwrap()->yieldBlock('perfs_form_caching_form', $context, $blocks);
        // line 213
        yield "
          ";
        // line 214
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", ["form" => ($context["memcacheForm"] ?? null)]);
        yield "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 210
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_caching_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 211
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cachingForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 227
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 228
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/performance_preferences.bundle.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        yield "\"></script>
  <script>
    var configuration = {
      \x27addServerUrl\x27: \x27";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_add"), "js"), "html", null, true);
        yield "\x27,
      \x27removeServerUrl\x27: \x27";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_delete"), "js"), "html", null, true);
        yield "\x27,
      \x27testServerUrl\x27: \x27";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_test"), "js"), "html", null, true);
        yield "\x27
    };
    var app = new PerformancePage(configuration.addServerUrl, configuration.removeServerUrl, configuration.testServerUrl);

    window.addEventListener(\x27load\x27, function () {
      var addServerBtn = document.getElementById(\x27add-server-btn\x27);
      var testServerBtn = document.getElementById(\x27test-server-btn\x27);

      addServerBtn.addEventListener(\x27click\x27, function (event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener(\x27click\x27, function (event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig";
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
        return array (  663 => 255,  640 => 235,  636 => 234,  632 => 233,  626 => 230,  622 => 229,  617 => 228,  610 => 227,  602 => 211,  595 => 210,  585 => 219,  577 => 214,  574 => 213,  572 => 210,  565 => 206,  560 => 203,  553 => 202,  545 => 188,  538 => 187,  528 => 194,  522 => 190,  520 => 187,  511 => 181,  501 => 174,  496 => 171,  489 => 170,  481 => 156,  474 => 155,  464 => 162,  458 => 158,  456 => 155,  447 => 149,  437 => 142,  432 => 139,  425 => 138,  417 => 124,  410 => 123,  400 => 130,  394 => 126,  392 => 123,  383 => 117,  373 => 110,  368 => 107,  361 => 106,  351 => 95,  346 => 93,  342 => 92,  338 => 91,  333 => 89,  324 => 83,  320 => 81,  313 => 80,  305 => 100,  303 => 80,  293 => 73,  282 => 65,  277 => 62,  270 => 61,  262 => 48,  255 => 47,  245 => 54,  239 => 50,  237 => 47,  230 => 43,  225 => 40,  218 => 39,  210 => 25,  203 => 24,  193 => 31,  187 => 27,  185 => 24,  178 => 20,  173 => 17,  166 => 16,  158 => 224,  156 => 202,  152 => 201,  146 => 199,  144 => 170,  140 => 169,  134 => 167,  132 => 138,  128 => 137,  122 => 135,  120 => 106,  116 => 105,  113 => 104,  111 => 61,  105 => 59,  103 => 39,  99 => 38,  93 => 36,  91 => 16,  86 => 15,  79 => 14,  74 => 5,  72 => 12,  70 => 11,  68 => 10,  66 => 9,  64 => 8,  62 => 7,  55 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\performance.html.twig");
    }
}
