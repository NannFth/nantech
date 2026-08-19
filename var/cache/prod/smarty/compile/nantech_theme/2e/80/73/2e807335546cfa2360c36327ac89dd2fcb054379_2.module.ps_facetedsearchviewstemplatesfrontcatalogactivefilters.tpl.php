<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:24
  from 'module:ps_facetedsearchviewstemplatesfrontcatalogactivefilters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82cc00cd43_71239927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e807335546cfa2360c36327ac89dd2fcb054379' => 
    array (
      0 => 'module:ps_facetedsearchviewstemplatesfrontcatalogactivefilters.tpl',
      1 => 1770773896,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c82cc00cd43_71239927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\nantech-store\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'active-filters');?>

<div id="js-active-search-filters" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
">
  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__list">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6099192066a7c82cc008613_22618621', 'active_filters_title');
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1919312616a7c82cc00aa51_58181435', 'active_filters_item');
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }?>
</div>
<?php }
/* {block 'active_filters_title'} */
class Block_6099192066a7c82cc008613_22618621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_6099192066a7c82cc008613_22618621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <li class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__item">
          <span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        </li>
      <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_1919312616a7c82cc00aa51_58181435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_1919312616a7c82cc00aa51_58181435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__item">
            <a
              class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__link btn btn-outline-tertiary rounded-pill btn-sm js-search-link"
              href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
              rel="nofollow"
              aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove %1$s filter: %2$s','d'=>'Shop.Theme.Catalog','sprintf'=>array(mb_strtolower((string) $_smarty_tpl->tpl_vars['filter']->value['facetLabel'], 'UTF-8'),$_smarty_tpl->tpl_vars['filter']->value['label'])),$_smarty_tpl ) );?>
"
            >
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s:','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

              <i class="material-icons" aria-hidden="true">&#xE14C;</i>
            </a>
          </li>
        <?php
}
}
/* {/block 'active_filters_item'} */
}
