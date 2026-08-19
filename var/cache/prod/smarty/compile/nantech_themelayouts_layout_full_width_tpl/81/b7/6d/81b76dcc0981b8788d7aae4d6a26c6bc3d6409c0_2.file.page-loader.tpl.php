<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:59
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\components\page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0c3a018a4_74300113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81b76dcc0981b8788d7aae4d6a26c6bc3d6409c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\components\\page-loader.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0c3a018a4_74300113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('componentName', 'page-loader');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9213711936a85f0c3a00452_85590616', 'page_loader');
?>

<?php }
/* {block 'page_loader'} */
class Block_9213711936a85f0c3a00452_85590616 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loader' => 
  array (
    0 => 'Block_9213711936a85f0c3a00452_85590616',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="page-loader js-page-loader d-none">
    <div class="spinner-border text-primary-emphasis" role="status">
      <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    </div>
  </div>
<?php
}
}
/* {/block 'page_loader'} */
}
