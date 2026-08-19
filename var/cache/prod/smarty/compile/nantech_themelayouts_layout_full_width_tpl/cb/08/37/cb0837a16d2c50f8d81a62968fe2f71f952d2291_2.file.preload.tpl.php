<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:54
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\_partials\preload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0be00e932_90895303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb0837a16d2c50f8d81a62968fe2f71f952d2291' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\_partials\\preload.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0be00e932_90895303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\nantech-store\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('themeDir', _PS_THEME_DIR_);
$_smarty_tpl->_assignInScope('preloadFilePath', ((string)$_smarty_tpl->tpl_vars['themeDir']->value)."assets/preload.html");
$_smarty_tpl->_assignInScope('assetsUrl', $_smarty_tpl->tpl_vars['urls']->value['theme_assets']);?>

<?php if (file_exists($_smarty_tpl->tpl_vars['preloadFilePath']->value)) {?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "preloadBlock", null, null);
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['preloadFilePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'preloadBlock'),'href="../',"href=\"".((string)$_smarty_tpl->tpl_vars['assetsUrl']->value));?>

<?php }
}
}
