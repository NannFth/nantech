<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:57
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0c1b598e0_58025889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dd8d51c6032539b405ffde58b0ae21617fb5550' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\errors\\not-found.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0c1b598e0_58025889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-content--not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_364559006a85f0c1b553c5_81647690', 'page_content');
?>

</section>
<?php }
/* {block 'error_content'} */
class Block_7171905896a85f0c1b55c52_10779047 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['errorContent']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['errorContent']->value;?>


        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">
          <i class="material-icons" aria-hidden="true">&#xE5C4;</i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Home page','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

        </a>
      <?php } else { ?>
        <h1 class="h2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The page you are looking for is no longer available','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>

        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It can not be reached anymore. Can we still attract you into our shop?','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>

        <a class="btn btn-primary" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go shopping','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <i class="material-icons" aria-hidden="true">&#xE5C8;</i>
        </a>
      <?php }?>
    <?php
}
}
/* {/block 'error_content'} */
/* {block 'hook_not_found'} */
class Block_18405589506a85f0c1b59245_18624958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_364559006a85f0c1b553c5_81647690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_364559006a85f0c1b553c5_81647690',
  ),
  'error_content' => 
  array (
    0 => 'Block_7171905896a85f0c1b55c52_10779047',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_18405589506a85f0c1b59245_18624958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7171905896a85f0c1b55c52_10779047', 'error_content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18405589506a85f0c1b59245_18624958', 'hook_not_found', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_content'} */
}
