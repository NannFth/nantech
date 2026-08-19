<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:59
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\components\toast.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0c3c7a863_92570125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43bc9241d1dba539df5109f13acdc0a550b6c054' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\components\\toast.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0c3c7a863_92570125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('componentName', 'toast');?>

<template class="js-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
-template">
  <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
-body"></div>
      <button type="button" class="btn-close me-2 m-auto d-none" data-bs-dismiss="toast"></button>
    </div>
  </div>
</template>
<?php }
}
