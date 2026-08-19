<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:24
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82cc23b726_18239223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '404d314f0bb8c8d37392567e342dff0e184753b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:components/page-title-section.tpl' => 1,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_6a7c82cc23b726_18239223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6918725816a7c82cc2352c1_44897482', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_674057396a7c82cc235b42_61494680', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_microdata_special'} */
class Block_6918725816a7c82cc2352c1_44897482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_6918725816a7c82cc2352c1_44897482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_list_header'} */
class Block_10336470486a7c82cc235d49_17355685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="js-product-list-header">
      <?php $_smarty_tpl->_subTemplateRender('file:components/page-title-section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['listing']->value['label']), 0, false);
?>
    </div>
  <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_5111937246a7c82cc236f70_18368032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
      <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_14257987656a7c82cc237582_56472569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

      <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_4742795736a7c82cc237bf1_58562185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
      <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_1038380776a7c82cc238129_32607679 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
      <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_footer'} */
class Block_727521946a7c82cc23a669_13616772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_674057396a7c82cc235b42_61494680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_674057396a7c82cc235b42_61494680',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_10336470486a7c82cc235d49_17355685',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_5111937246a7c82cc236f70_18368032',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_14257987656a7c82cc237582_56472569',
  ),
  'product_list' => 
  array (
    0 => 'Block_4742795736a7c82cc237bf1_58562185',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_1038380776a7c82cc238129_32607679',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_727521946a7c82cc23a669_13616772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\nantech-store\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10336470486a7c82cc235d49_17355685', 'product_list_header', $this->tplIndex);
?>


  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderCategory'),$_smarty_tpl ) );?>


  <section id="products">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5111937246a7c82cc236f70_18368032', 'product_list_top', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14257987656a7c82cc237582_56472569', 'product_list_active_filters', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4742795736a7c82cc237bf1_58562185', 'product_list', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1038380776a7c82cc238129_32607679', 'product_list_bottom', $this->tplIndex);
?>

    <?php } else { ?>
      <div id="js-product-list-top"></div>

      <div id="js-product-list">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
          <p class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available at the moment','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
?>
      <div>

      <div id="js-product-list-bottom"></div>
    <?php }?>
  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_727521946a7c82cc23a669_13616772', 'product_list_footer', $this->tplIndex);
?>


  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterCategory'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'content'} */
}
