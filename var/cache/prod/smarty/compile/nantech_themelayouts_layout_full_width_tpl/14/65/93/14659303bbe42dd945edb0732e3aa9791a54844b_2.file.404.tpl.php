<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:51
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\errors\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0bbad77d2_87131290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14659303bbe42dd945edb0732e3aa9791a54844b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\errors\\404.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_6a85f0bbad77d2_87131290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20028698306a85f0bbac0e46_30398131', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8608156136a85f0bbac1fa2_88615224', 'container_class');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2386605186a85f0bbac2fb1_91610183', 'page_header_container');
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
  <h1 class="h2"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['title']), ENT_QUOTES, 'UTF-8');?>
</h1>

  <p>
    <?php ob_start();
echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'],'htmlall' ))), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If this is a recurring problem, please [1]contact us[/1].','d'=>'Shop.Theme.Catalog','sprintf'=>array('[1]'=>(('<a href="').($_prefixVariable1)).('">'),'[/1]'=>'</a>')),$_smarty_tpl ) );?>

  </p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9708656236a85f0bbad3e03_49454695', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'breadcrumb'} */
class Block_20028698306a85f0bbac0e46_30398131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_20028698306a85f0bbac0e46_30398131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'container_class'} */
class Block_8608156136a85f0bbac1fa2_88615224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container_class' => 
  array (
    0 => 'Block_8608156136a85f0bbac1fa2_88615224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
container container--limited-md text-center<?php
}
}
/* {/block 'container_class'} */
/* {block 'page_title'} */
class Block_16669221126a85f0bbac35e2_90763585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-header mb-2">
      <p class="display-1 fw-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'404','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
    </div>
  <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2386605186a85f0bbac2fb1_91610183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_2386605186a85f0bbac2fb1_91610183',
  ),
  'page_title' => 
  array (
    0 => 'Block_16669221126a85f0bbac35e2_90763585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16669221126a85f0bbac35e2_90763585', 'page_title', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_container'} */
class Block_9708656236a85f0bbad3e03_49454695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_9708656236a85f0bbad3e03_49454695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
}
}
/* {/block 'page_content_container'} */
}
