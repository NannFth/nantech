<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:32
  from 'C:\xampp\htdocs\nantech-store\themes\nantech_theme\templates\_partials\copyright.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82d4ed1663_31790737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd54501bff74293a540bcc4ff93352eb25c8ca143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\nantech_theme\\templates\\_partials\\copyright.tpl',
      1 => 1786539610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c82d4ed1663_31790737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10525388316a7c82d4ed08e2_50909117', 'copyright');
}
/* {block 'copyright_link'} */
class Block_8987896506a7c82d4ed0ca9_94320272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <span>&copy; <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' ))), ENT_QUOTES, 'UTF-8');?>
 - NanTech Store. All Rights Reserved.</span>
    <?php
}
}
/* {/block 'copyright_link'} */
/* {block 'copyright'} */
class Block_10525388316a7c82d4ed08e2_50909117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright' => 
  array (
    0 => 'Block_10525388316a7c82d4ed08e2_50909117',
  ),
  'copyright_link' => 
  array (
    0 => 'Block_8987896506a7c82d4ed0ca9_94320272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="copyright">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8987896506a7c82d4ed0ca9_94320272', 'copyright_link', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'copyright'} */
}
