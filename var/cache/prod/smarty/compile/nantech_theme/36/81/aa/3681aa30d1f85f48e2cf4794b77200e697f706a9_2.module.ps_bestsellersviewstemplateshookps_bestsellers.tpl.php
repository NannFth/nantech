<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:40
  from 'module:ps_bestsellersviewstemplateshookps_bestsellers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0b0814e45_16088513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3681aa30d1f85f48e2cf4794b77200e697f706a9' => 
    array (
      0 => 'module:ps_bestsellersviewstemplateshookps_bestsellers.tpl',
      1 => 1770773896,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:components/section-title.tpl' => 1,
  ),
),false)) {
function content_6a85f0b0814e45_16088513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12464426466a85f0b0812649_42999171', 'module_products_name');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5259347436a85f0b0812b50_51074421', 'module_products_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13124141486a85f0b0814148_74528786', 'module_products_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "components/module-products.tpl");
}
/* {block 'module_products_name'} */
class Block_12464426466a85f0b0812649_42999171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_name' => 
  array (
    0 => 'Block_12464426466a85f0b0812649_42999171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ps-bestsellers<?php
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_5259347436a85f0b0812b50_51074421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_title' => 
  array (
    0 => 'Block_5259347436a85f0b0812b50_51074421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best sellers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:components/section-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable6), 0, false);
}
}
/* {/block 'module_products_title'} */
/* {block 'module_products_footer'} */
class Block_13124141486a85f0b0814148_74528786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_footer' => 
  array (
    0 => 'Block_13124141486a85f0b0814148_74528786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="btn btn-outline-primary" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['allBestSellers']->value), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All best sellers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

    <i class="material-icons" aria-hidden="true">&#xE315;</i>
  </a>
<?php
}
}
/* {/block 'module_products_footer'} */
}
