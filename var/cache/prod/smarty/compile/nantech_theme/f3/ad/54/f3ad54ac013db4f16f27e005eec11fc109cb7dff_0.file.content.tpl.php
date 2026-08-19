<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:26:04
  from 'C:\xampp\htdocs\nantech-store\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c827c140ea9_94469412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3ad54ac013db4f16f27e005eec11fc109cb7dff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1699411992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_6a7c827c140ea9_94469412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
