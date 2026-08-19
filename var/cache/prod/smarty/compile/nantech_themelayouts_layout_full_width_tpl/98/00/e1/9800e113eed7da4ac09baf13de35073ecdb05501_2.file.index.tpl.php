<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:41
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0b106df39_64745430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9800e113eed7da4ac09baf13de35073ecdb05501' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\index.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0b106df39_64745430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6935574926a85f0b106b7c8_13483397', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14522938446a85f0b106bcd2_21868901', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'breadcrumb'} */
class Block_6935574926a85f0b106b7c8_13483397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_6935574926a85f0b106b7c8_13483397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'left_column'} */
class Block_13532619066a85f0b106beb9_31871301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'page_content_top'} */
class Block_17896920676a85f0b106c9e2_03147801 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1522152226a85f0b106ce46_40653283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

              <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_4042719476a85f0b106cca8_25178811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1522152226a85f0b106ce46_40653283', 'hook_home', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4744333186a85f0b106c855_57666348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="content" class="page-content page-content--home">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17896920676a85f0b106c9e2_03147801', 'page_content_top', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4042719476a85f0b106cca8_25178811', 'page_content', $this->tplIndex);
?>

          </div>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'content'} */
class Block_5325390856a85f0b106c6a8_53206338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4744333186a85f0b106c855_57666348', 'page_content_container', $this->tplIndex);
?>

      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_18261685086a85f0b106c1a4_73924415 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="center-column" class="center-column page">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5325390856a85f0b106c6a8_53206338', 'content', $this->tplIndex);
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_20716932736a85f0b106daf1_60991765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_14522938446a85f0b106bcd2_21868901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_14522938446a85f0b106bcd2_21868901',
  ),
  'left_column' => 
  array (
    0 => 'Block_13532619066a85f0b106beb9_31871301',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_18261685086a85f0b106c1a4_73924415',
  ),
  'content' => 
  array (
    0 => 'Block_5325390856a85f0b106c6a8_53206338',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4744333186a85f0b106c855_57666348',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17896920676a85f0b106c9e2_03147801',
  ),
  'page_content' => 
  array (
    0 => 'Block_4042719476a85f0b106cca8_25178811',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1522152226a85f0b106ce46_40653283',
  ),
  'right_column' => 
  array (
    0 => 'Block_20716932736a85f0b106daf1_60991765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13532619066a85f0b106beb9_31871301', 'left_column', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18261685086a85f0b106c1a4_73924415', 'content_wrapper', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20716932736a85f0b106daf1_60991765', 'right_column', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content_columns'} */
}
