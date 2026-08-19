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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig */
class __TwigTemplate_1105e63f4685210f738e5dd64e21acf6 extends Template
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
            'category_tags_collection_row' => [$this, 'block_category_tags_collection_row'],
            'product_category_row' => [$this, 'block_product_category_row'],
            'category_tree_selector_row' => [$this, 'block_category_tree_selector_row'],
            'category_tree_entry_row' => [$this, 'block_category_tree_entry_row'],
            'category_tree_collection_row' => [$this, 'block_category_tree_collection_row'],
            'category_filter_row' => [$this, 'block_category_filter_row'],
            'category_filter_widget' => [$this, 'block_category_filter_widget'],
            'category_filter_item_widget' => [$this, 'block_category_filter_item_widget'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tags_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 8), "")) : ("")) . " pstaggerTagsWrapper form-group d-block"))]);
        // line 9
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9)]);
        // line 10
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 11
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield "
  </div>
";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_category_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 16), "")) : ("")) . " pstaggerTag tag-item"))]);
        // line 18
        yield "<span ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "display_name", [], "any", false, false, false, 19), 'widget');
        yield "
    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 20), 'widget');
        yield "
    ";
        // line 21
        $context["isRemovable"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 21), "data", [], "any", false, true, false, 21), "removable", [], "any", true, true, false, 21) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 21), "data", [], "any", false, false, false, 21), "removable", [], "any", false, false, false, 21));
        // line 22
        yield "    <a class=\"pstaggerClosingCross ";
        if ((($tmp =  !($context["isRemovable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "d-none";
        }
        yield "\" href=\"#\">x</a>
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "category-id-input"]]);
        yield "
  </span>
";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tree_selector_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "  <template id=\"categories-modal-template\">
    <div id=\"categories-modal-content\">
      ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "product_categories", [], "any", false, false, false, 30), 'row');
        yield "

      <fieldset class=\"form-group tree-fieldset d-none\">
        <div class=\"ui-widget\">
          <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1 ui-autocomplete-input\" placeholder=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search categories", [], "Admin.Catalog.Help"), "html", null, true);
        yield "\" autocomplete=\"off\">
          </div>

          <label class=\"form-control-label text-uppercase\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated categories", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</label>
          ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "category_tree", [], "any", false, false, false, 39), 'row');
        yield "
        </div>
      </fieldset>

      <div class=\"categories-tree-loader\">
        <div class=\"spinner m-auto d-block\"></div>
      </div>

      <div class=\"category-tree-footer\">
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "cancel_btn", [], "any", false, false, false, 48), 'widget');
        yield "
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "apply_btn", [], "any", false, false, false, 49), 'widget');
        yield "
      </div>
    </div>
  </template>
";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tree_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "  <li class=\"category-tree-element\">
    <div class=\"checkbox category-tree-inputs\">
      ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "
    </div>
    <ul class=\"children-list\"></ul>
  </li>
";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tree_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "<div class=\"category-tree-container\">
  <div class=\"category-tree-overflow js-category-tree-overflow\">";
        // line 67
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67)]);
        // line 68
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 68), "")) : ("")) . " js-category-tree-list category-tree"))]);
        // line 69
        yield "<ul ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 70
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 71
        yield "</ul>
  </div>
</div>
";
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_filter_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "  <div class=\"d-inline-block dropdown dropdown-clickable product_list_category_filter\">
    <button
      class=\"btn btn-outline-secondary dropdown-toggle\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
    >
      ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter by categories", [], "Admin.Actions"), "html", null, true);
        yield "
      ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 88
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 88), "data", [], "any", false, false, false, 88) && (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 88) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 88), "data", [], "any", false, false, false, 88)))) {
                // line 89
                yield "          (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 89), "html", null, true);
                yield ")
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "</button>
    <div class=\"dropdown-menu category-filter-menu\">
      <div class=\"categories-tree-actions\">
        <button type=\"button\" class=\"category_tree_filter_expand btn\">
          <i class=\"material-icons\">expand_more</i>
          ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "
        </button>
        <button type=\"button\" class=\"category_tree_filter_collapse btn\">
          <i class=\"material-icons\">expand_less</i>
          ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        yield "
        </button>
        <button type=\"button\" class=\"category_tree_filter_reset btn\">
          <i class=\"material-icons\">radio_button_unchecked</i>
          ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unselect", [], "Admin.Actions"), "html", null, true);
        yield "
        </button>
      </div>
      ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        yield "
    </div>
  </div>
  ";
        // line 111
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 111), "data", [], "any", false, false, false, 111))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "  <button class=\"btn btn-link category_tree_filter_reset\" type=\"button\">
    <i class=\"material-icons\">clear</i> Clear filter
  </button>
  ";
        }
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <ul class=\"category-tree\">";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["nested_tree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 122
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("category_filter_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "</ul>
  </div>";
        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_filter_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 129
        yield "<li class=\"category-node";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 129) && Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 129)))) {
            yield " more";
        }
        yield "\">
    <div class=\"form-check form-check-radio form-radio radio category-label\">
      ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "name", [], "any", false, false, false, 131), "html", null, true);
        yield "
      <label class=\"form-check-label\">
        <input type=\"radio\" name=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 133), "html", null, true);
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "id_category", [], "any", false, false, false, 133) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 133), "data", [], "any", false, false, false, 133))) {
            yield "checked=\"checked\"";
        }
        yield ">
        <i class=\"form-check-round\"></i>
      </label>
    </div>

    ";
        // line 138
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 138)) {
            // line 139
            yield "      <ul class=\"category-children d-none\">
        ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", false, false, false, 140));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 141
                yield "          ";
                $context["child"] = $context["item"];
                // line 142
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("category_filter_item_widget", $context, $blocks);
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "</ul>
    ";
        }
        // line 146
        yield "  </li>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig";
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
        return array (  438 => 146,  434 => 144,  417 => 142,  414 => 141,  397 => 140,  394 => 139,  392 => 138,  378 => 133,  373 => 131,  365 => 129,  358 => 128,  352 => 124,  335 => 122,  318 => 121,  313 => 119,  306 => 118,  297 => 112,  295 => 111,  289 => 108,  283 => 105,  276 => 101,  269 => 97,  262 => 92,  252 => 89,  250 => 88,  246 => 87,  242 => 85,  232 => 77,  225 => 76,  217 => 71,  215 => 70,  211 => 69,  209 => 68,  207 => 67,  204 => 65,  197 => 64,  187 => 58,  183 => 56,  176 => 55,  166 => 49,  162 => 48,  150 => 39,  146 => 38,  140 => 35,  132 => 30,  128 => 28,  121 => 27,  113 => 23,  106 => 22,  104 => 21,  100 => 20,  96 => 19,  91 => 18,  89 => 16,  82 => 15,  74 => 11,  69 => 10,  67 => 9,  65 => 8,  58 => 7,  47 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig", "C:\\xampp\\htdocs\\nantech-store\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\categories.html.twig");
    }
}
