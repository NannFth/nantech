<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:54
  from 'module:ps_categoryproductsviewstemplateshookps_categoryproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82ea716437_52497706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:ps_categoryproductsviewstemplateshookps_categoryproducts.tpl',
      1 => 1770773896,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:components/section-title.tpl' => 2,
  ),
),false)) {
function content_6a7c82ea716437_52497706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13994465116a7c82ea713dd2_61364979', 'module_products_variables');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11925761466a7c82ea714715_13647173', 'module_products_name');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20625871726a7c82ea714aa8_10872177', 'module_products_title');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "components/module-products.tpl");
}
/* {block 'module_products_variables'} */
class Block_13994465116a7c82ea713dd2_61364979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_variables' => 
  array (
    0 => 'Block_13994465116a7c82ea713dd2_61364979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_assignInScope('need_container', false);
}
}
/* {/block 'module_products_variables'} */
/* {block 'module_products_name'} */
class Block_11925761466a7c82ea714715_13647173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_name' => 
  array (
    0 => 'Block_11925761466a7c82ea714715_13647173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ps-categoryproducts<?php
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_20625871726a7c82ea714aa8_10872177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_title' => 
  array (
    0 => 'Block_20625871726a7c82ea714aa8_10872177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\nantech-store\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value) == 1) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other product in the same category','sprintf'=>array(smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable15 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:components/section-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable15), 0, false);
?>
  <?php } else { ?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other products in the same category','sprintf'=>array(smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable16 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:components/section-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable16), 0, true);
?>
  <?php }
}
}
/* {/block 'module_products_title'} */
}
