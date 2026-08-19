<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:53
  from 'C:\xampp\htdocs\nantech-store\themes\nantech_theme\templates\_partials\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0bd4a2618_70759891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd7368c02d7be9ba9997136fdef385872de888c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\nantech_theme\\templates\\_partials\\head.tpl',
      1 => 1785981170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0bd4a2618_70759891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20364445576a85f0bd4a1074_88035774', 'stylesheets');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'parent:_partials/head.tpl');
}
/* {block 'stylesheets'} */
class Block_20364445576a85f0bd4a1074_88035774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_20364445576a85f0bd4a1074_88035774',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="stylesheet" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['theme_assets']), ENT_QUOTES, 'UTF-8');?>
css/custom.css" type="text/css">
<?php
}
}
/* {/block 'stylesheets'} */
}
