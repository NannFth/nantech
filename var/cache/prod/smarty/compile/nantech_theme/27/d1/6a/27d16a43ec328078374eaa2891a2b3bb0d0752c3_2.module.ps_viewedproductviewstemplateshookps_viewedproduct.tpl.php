<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:56
  from 'module:ps_viewedproductviewstemplateshookps_viewedproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82ecb47464_54501189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d16a43ec328078374eaa2891a2b3bb0d0752c3' => 
    array (
      0 => 'module:ps_viewedproductviewstemplateshookps_viewedproduct.tpl',
      1 => 1770773896,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:components/section-title.tpl' => 1,
  ),
),false)) {
function content_6a7c82ecb47464_54501189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13088467406a7c82ecb46759_35778762', 'module_products_name');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12605718186a7c82ecb46c09_94533543', 'module_products_title');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "components/module-products.tpl");
}
/* {block 'module_products_name'} */
class Block_13088467406a7c82ecb46759_35778762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_name' => 
  array (
    0 => 'Block_13088467406a7c82ecb46759_35778762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ps-viewedproduct<?php
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_12605718186a7c82ecb46c09_94533543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_title' => 
  array (
    0 => 'Block_12605718186a7c82ecb46c09_94533543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:components/section-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable20), 0, false);
}
}
/* {/block 'module_products_title'} */
}
