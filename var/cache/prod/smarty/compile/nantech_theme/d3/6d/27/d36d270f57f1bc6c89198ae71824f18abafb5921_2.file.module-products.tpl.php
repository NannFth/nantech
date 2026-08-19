<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:40
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\components\module-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0b0a4db35_12094895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd36d270f57f1bc6c89198ae71824f18abafb5921' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\components\\module-products.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_6a85f0b0a4db35_12094895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3066294646a85f0b0a4a229_50171536', 'module_products');
?>

<?php }
/* {block 'module_products_variables'} */
class Block_20173336536a85f0b0a4a690_61884389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('need_container', "true");?>
  <?php
}
}
/* {/block 'module_products_variables'} */
/* {block 'module_products_name'} */
class Block_18807711656a85f0b0a4b350_84771683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'module_products_name'} */
/* {block 'module_products_title'} */
class Block_14396359506a85f0b0a4c001_71784646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'module_products_title'} */
/* {block 'module_products_list'} */
class Block_3361137756a85f0b0a4c480_85112423 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
          <div class="module-products__list">
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/productlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0, false);
?>
          </div>
        <?php }?>
      <?php
}
}
/* {/block 'module_products_list'} */
/* {block 'module_products_footer'} */
class Block_18609608236a85f0b0a4d211_21968664 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="module-products__buttons">
          <?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>

        </div>
      <?php
}
}
/* {/block 'module_products_footer'} */
/* {block 'module_products'} */
class Block_3066294646a85f0b0a4a229_50171536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'module_products' => 
  array (
    0 => 'Block_3066294646a85f0b0a4a229_50171536',
  ),
  'module_products_variables' => 
  array (
    0 => 'Block_20173336536a85f0b0a4a690_61884389',
  ),
  'module_products_name' => 
  array (
    0 => 'Block_18807711656a85f0b0a4b350_84771683',
  ),
  'module_products_title' => 
  array (
    0 => 'Block_14396359506a85f0b0a4c001_71784646',
  ),
  'module_products_list' => 
  array (
    0 => 'Block_3361137756a85f0b0a4c480_85112423',
  ),
  'module_products_footer' => 
  array (
    0 => 'Block_18609608236a85f0b0a4d211_21968664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20173336536a85f0b0a4a690_61884389', 'module_products_variables', $this->tplIndex);
?>


  <section class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18807711656a85f0b0a4b350_84771683', 'module_products_name', $this->tplIndex);
?>
">
    <div class="module-products <?php if ((isset($_smarty_tpl->tpl_vars['need_container']->value)) && $_smarty_tpl->tpl_vars['need_container']->value) {?>container<?php }?>">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14396359506a85f0b0a4c001_71784646', 'module_products_title', $this->tplIndex);
?>

      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3361137756a85f0b0a4c480_85112423', 'module_products_list', $this->tplIndex);
?>

        
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18609608236a85f0b0a4d211_21968664', 'module_products_footer', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'module_products'} */
}
