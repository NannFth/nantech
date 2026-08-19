<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:51
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0bbe440e4_69521342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c26a93b02c395d182d99843b0b7e7226b425fc18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\page.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/page-title-section.tpl' => 1,
  ),
),false)) {
function content_6a85f0bbe440e4_69521342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15649486136a85f0bbe414a7_61749417', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_21148439526a85f0bbe41c94_81819472 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="page-header">
        <?php ob_start();
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:components/page-title-section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable2), 0, false);
?>
      </div>
    <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_10736443026a85f0bbe419f9_97441437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21148439526a85f0bbe41c94_81819472', 'page_title', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_8827160476a85f0bbe43364_26525907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_261492556a85f0bbe43626_90783582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1943123496a85f0bbe43199_49292796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-content page-content--general">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8827160476a85f0bbe43364_26525907', 'page_content_top', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_261492556a85f0bbe43626_90783582', 'page_content', $this->tplIndex);
?>

    </section>
  <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_5425430756a85f0bbe43bb9_52876211 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_10543622636a85f0bbe43a01_04926512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="page-footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5425430756a85f0bbe43bb9_52876211', 'page_footer', $this->tplIndex);
?>

    </footer>
  <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15649486136a85f0bbe414a7_61749417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15649486136a85f0bbe414a7_61749417',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10736443026a85f0bbe419f9_97441437',
  ),
  'page_title' => 
  array (
    0 => 'Block_21148439526a85f0bbe41c94_81819472',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1943123496a85f0bbe43199_49292796',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8827160476a85f0bbe43364_26525907',
  ),
  'page_content' => 
  array (
    0 => 'Block_261492556a85f0bbe43626_90783582',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10543622636a85f0bbe43a01_04926512',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5425430756a85f0bbe43bb9_52876211',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10736443026a85f0bbe419f9_97441437', 'page_header_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1943123496a85f0bbe43199_49292796', 'page_content_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10543622636a85f0bbe43a01_04926512', 'page_footer_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
