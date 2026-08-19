<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:52
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0bc23bde4_37617157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0862185bc4037a883731c90d3b2b9add018c6c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\layouts\\layout-full-width.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0bc23bde4_37617157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14001499226a85f0bc2369d8_50935393', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'container_class'} */
class Block_5286044176a85f0bc236ee6_51414661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_14952284526a85f0bc237914_02071481 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_5221010046a85f0bc2393d3_19496831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_18594744686a85f0bc237ff8_46360612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="center-column" class="center-column page page--full-width">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5221010046a85f0bc2393d3_19496831', 'content', $this->tplIndex);
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_14080229706a85f0bc23ac49_13014863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_14001499226a85f0bc2369d8_50935393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_14001499226a85f0bc2369d8_50935393',
  ),
  'container_class' => 
  array (
    0 => 'Block_5286044176a85f0bc236ee6_51414661',
  ),
  'left_column' => 
  array (
    0 => 'Block_14952284526a85f0bc237914_02071481',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_18594744686a85f0bc237ff8_46360612',
  ),
  'content' => 
  array (
    0 => 'Block_5221010046a85f0bc2393d3_19496831',
  ),
  'right_column' => 
  array (
    0 => 'Block_14080229706a85f0bc23ac49_13014863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5286044176a85f0bc236ee6_51414661', 'container_class', $this->tplIndex);
?>
">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14952284526a85f0bc237914_02071481', 'left_column', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18594744686a85f0bc237ff8_46360612', 'content_wrapper', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14080229706a85f0bc23ac49_13014863', 'right_column', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_columns'} */
}
