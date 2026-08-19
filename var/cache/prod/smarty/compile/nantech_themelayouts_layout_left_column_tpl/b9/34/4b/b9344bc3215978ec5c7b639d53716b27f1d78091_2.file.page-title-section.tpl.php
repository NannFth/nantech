<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:29
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\components\page-title-section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82d1294960_47345055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9344bc3215978ec5c7b639d53716b27f1d78091' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\components\\page-title-section.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c82d1294960_47345055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'page-title-section');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18223092666a7c82d12940f6_64953082', 'page_title_section');
?>

<?php }
/* {block 'page_title_section'} */
class Block_18223092666a7c82d12940f6_64953082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title_section' => 
  array (
    0 => 'Block_18223092666a7c82d12940f6_64953082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1 class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['title']->value), ENT_QUOTES, 'UTF-8');?>
</h1>
<?php
}
}
/* {/block 'page_title_section'} */
}
