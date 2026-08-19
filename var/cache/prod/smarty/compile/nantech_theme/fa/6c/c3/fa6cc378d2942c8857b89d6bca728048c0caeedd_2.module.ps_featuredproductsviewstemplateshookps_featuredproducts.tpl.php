<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:32
  from 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0a8dc3f17_66436981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl',
      1 => 1770773896,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:components/section-title.tpl' => 1,
  ),
),false)) {
function content_6a85f0a8dc3f17_66436981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17495842036a85f0a8c4b5e7_71040846', 'module_products_name');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2904888606a85f0a8c4c791_64904715', 'module_products_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16622788886a85f0a8dc2a23_29487882', 'module_products_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "components/module-products.tpl");
}
/* {block 'module_products_name'} */
class Block_17495842036a85f0a8c4b5e7_71040846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_name' => 
  array (
    0 => 'Block_17495842036a85f0a8c4b5e7_71040846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ps-featuredproducts<?php
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_2904888606a85f0a8c4c791_64904715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_title' => 
  array (
    0 => 'Block_2904888606a85f0a8c4c791_64904715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:components/section-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1), 0, false);
}
}
/* {/block 'module_products_title'} */
/* {block 'module_products_footer'} */
class Block_16622788886a85f0a8dc2a23_29487882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products_footer' => 
  array (
    0 => 'Block_16622788886a85f0a8dc2a23_29487882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="btn btn-outline-primary" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['allProductsLink']->value), ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All featured products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

    <i class="material-icons" aria-hidden="true">&#xE315;</i>
  </a>
<?php
}
}
/* {/block 'module_products_footer'} */
}
