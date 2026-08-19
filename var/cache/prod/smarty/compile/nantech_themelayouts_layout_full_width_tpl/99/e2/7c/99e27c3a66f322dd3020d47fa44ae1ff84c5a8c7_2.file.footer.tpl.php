<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:57
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0c1ea6a11_32120881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e27c3a66f322dd3020d47fa44ae1ff84c5a8c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\_partials\\footer.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/copyright.tpl' => 1,
  ),
),false)) {
function content_6a85f0c1ea6a11_32120881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "footer_before", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_before')) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21347316226a85f0c1e9ede9_86834538', 'hook_footer_before');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14813370366a85f0c1ea0431_44547786', 'footer_main');
?>

<?php }
/* {block 'hook_footer_before'} */
class Block_21347316226a85f0c1e9ede9_86834538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_21347316226a85f0c1e9ede9_86834538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="footer footer__before">
      <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_before');?>

    </div>
  <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer_main'} */
class Block_7827290416a85f0c1ea1d72_61251380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="footer__main-top row">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_top');?>

          </div>
        <?php
}
}
/* {/block 'hook_footer_main'} */
/* {block 'hook_footer_after'} */
class Block_20279847326a85f0c1ea4c82_17589458 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="footer__main-bottom row">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_bottom');?>

          </div>
        <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'footer_main'} */
class Block_14813370366a85f0c1ea0431_44547786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_main' => 
  array (
    0 => 'Block_14813370366a85f0c1ea0431_44547786',
  ),
  'hook_footer_main' => 
  array (
    0 => 'Block_7827290416a85f0c1ea1d72_61251380',
  ),
  'hook_footer_after' => 
  array (
    0 => 'Block_20279847326a85f0c1ea4c82_17589458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="footer footer__main">
    <div class="container">
      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "footer_main_top", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
      <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_top')) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7827290416a85f0c1ea1d72_61251380', 'hook_footer_main', $this->tplIndex);
?>

      <?php }?>

      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "footer_main_bottom", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
      <?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_bottom') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_bottom')) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20279847326a85f0c1ea4c82_17589458', 'hook_footer_after', $this->tplIndex);
?>

      <?php }?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </div>
<?php
}
}
/* {/block 'footer_main'} */
}
