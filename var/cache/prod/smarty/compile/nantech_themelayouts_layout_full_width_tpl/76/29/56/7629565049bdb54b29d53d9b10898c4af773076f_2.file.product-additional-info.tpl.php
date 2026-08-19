<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:52
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82e8f03ee0_92836390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7629565049bdb54b29d53d9b10898c4af773076f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c82e8f03ee0_92836390 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product__additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
