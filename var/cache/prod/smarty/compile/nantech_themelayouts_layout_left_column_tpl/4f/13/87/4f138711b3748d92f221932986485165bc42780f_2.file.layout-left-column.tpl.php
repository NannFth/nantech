<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:24
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82cc781b25_97497602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f138711b3748d92f221932986485165bc42780f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\layouts\\layout-left-column.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c82cc781b25_97497602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5679580686a7c82cc77dd44_21960869', "content_columns");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block "container_class"} */
class Block_20118393826a7c82cc77e2d9_00310670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block "container_class"} */
/* {block "left_column"} */
class Block_16145213546a7c82cc77eb09_11677163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="left-column" class="left-column col-md-4 col-lg-3">
          <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumn'),$_smarty_tpl ) );?>

          <?php }?>
        </div>
      <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_13131226836a7c82cc780a08_19013568 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
          <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_7317646016a7c82cc780325_74382761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="center-column" class="center-column page col-md-8 col-lg-9">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13131226836a7c82cc780a08_19013568', "content", $this->tplIndex);
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

        </div>
      <?php
}
}
/* {/block "content_wrapper"} */
/* {block 'right_column'} */
class Block_16229497886a7c82cc781477_83147340 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block "content_columns"} */
class Block_5679580686a7c82cc77dd44_21960869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_5679580686a7c82cc77dd44_21960869',
  ),
  'container_class' => 
  array (
    0 => 'Block_20118393826a7c82cc77e2d9_00310670',
  ),
  'left_column' => 
  array (
    0 => 'Block_16145213546a7c82cc77eb09_11677163',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_7317646016a7c82cc780325_74382761',
  ),
  'content' => 
  array (
    0 => 'Block_13131226836a7c82cc780a08_19013568',
  ),
  'right_column' => 
  array (
    0 => 'Block_16229497886a7c82cc781477_83147340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20118393826a7c82cc77e2d9_00310670', "container_class", $this->tplIndex);
?>
">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16145213546a7c82cc77eb09_11677163', "left_column", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7317646016a7c82cc780325_74382761', "content_wrapper", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16229497886a7c82cc781477_83147340', 'right_column', $this->tplIndex);
?>

    </div>
  </div>
<?php
}
}
/* {/block "content_columns"} */
}
