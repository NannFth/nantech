<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:39
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\components\section-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0afc9d3a5_35541329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed1115fa46ef5b85e84b9b6f197e88e2cbc3d4da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\components\\section-title.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0afc9d3a5_35541329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'section-title');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3548782546a85f0afc9cbf3_52317507', 'section_title');
?>

<?php }
/* {block 'section_title'} */
class Block_3548782546a85f0afc9cbf3_52317507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'section_title' => 
  array (
    0 => 'Block_3548782546a85f0afc9cbf3_52317507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2 class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['componentName']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['title']->value), ENT_QUOTES, 'UTF-8');?>
</h2>
<?php
}
}
/* {/block 'section_title'} */
}
