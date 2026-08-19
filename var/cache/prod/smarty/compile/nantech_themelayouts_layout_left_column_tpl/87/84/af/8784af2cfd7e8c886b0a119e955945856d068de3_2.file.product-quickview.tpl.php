<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:31
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\catalog\_partials\miniatures\product-quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82d30b87d3_38047086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8784af2cfd7e8c886b0a119e955945856d068de3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\catalog\\_partials\\miniatures\\product-quickview.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c82d30b87d3_38047086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21379982806a7c82d30b4a99_16876560', 'quick_view');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11493388726a7c82d30b6d19_38412999', 'quick_view_touch');
?>

<?php }
/* {block 'quick_view'} */
class Block_21379982806a7c82d30b4a99_16876560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quick_view' => 
  array (
    0 => 'Block_21379982806a7c82d30b4a99_16876560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__quickview-button btn btn-tertiary btn-square-icon outline js-quickview"
    data-ps-action="open-quickview"
    data-ps-ref="quickview-button"
    aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
    <i class="material-icons" aria-hidden="true">&#xE417;</i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </button>
<?php
}
}
/* {/block 'quick_view'} */
/* {block 'quick_view_touch'} */
class Block_11493388726a7c82d30b6d19_38412999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quick_view_touch' => 
  array (
    0 => 'Block_11493388726a7c82d30b6d19_38412999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
__quickview-touch btn btn-tertiary btn-square-icon js-quickview"
    data-ps-action="open-quickview"
    aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
    <i class="material-icons">&#xE417;</i>
  </button>
<?php
}
}
/* {/block 'quick_view_touch'} */
}
