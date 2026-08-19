<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:32
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82d43b1ac4_66302412',
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
function content_6a7c82d43b1ac4_66302412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "footer_before", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_before')) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15481626046a7c82d43ab0b6_72037609', 'hook_footer_before');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5347618806a7c82d43ac402_70958951', 'footer_main');
?>

<?php }
/* {block 'hook_footer_before'} */
class Block_15481626046a7c82d43ab0b6_72037609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_15481626046a7c82d43ab0b6_72037609',
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
class Block_132677596a7c82d43ad8b1_89202038 extends Smarty_Internal_Block
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
class Block_16186631876a7c82d43b0127_61087866 extends Smarty_Internal_Block
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
class Block_5347618806a7c82d43ac402_70958951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_main' => 
  array (
    0 => 'Block_5347618806a7c82d43ac402_70958951',
  ),
  'hook_footer_main' => 
  array (
    0 => 'Block_132677596a7c82d43ad8b1_89202038',
  ),
  'hook_footer_after' => 
  array (
    0 => 'Block_16186631876a7c82d43b0127_61087866',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132677596a7c82d43ad8b1_89202038', 'hook_footer_main', $this->tplIndex);
?>

      <?php }?>

      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "footer_main_bottom", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
      <?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_bottom') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'footer_main_bottom')) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16186631876a7c82d43b0127_61087866', 'hook_footer_after', $this->tplIndex);
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
