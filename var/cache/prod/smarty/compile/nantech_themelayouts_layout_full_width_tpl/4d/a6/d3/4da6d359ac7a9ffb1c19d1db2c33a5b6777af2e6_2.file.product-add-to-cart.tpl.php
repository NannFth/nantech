<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:52
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\catalog\_partials\product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82e824a0a2_39673694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da6d359ac7a9ffb1c19d1db2c33a5b6777af2e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/qty-input.tpl' => 1,
  ),
),false)) {
function content_6a7c82e824a0a2_39673694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
  <div class="product__add-to-cart-container product-add-to-cart js-product-add-to-cart">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8839697456a7c82e823f041_40131926', 'product_availability');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4503422966a7c82e8245c14_61821313', 'product_quantity');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8461640256a7c82e8248cd4_15824837', 'product_minimal_quantity');
?>

  </div>
<?php }
}
/* {block 'product_delivery_times'} */
class Block_5347379436a7c82e8244cf0_48211925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['delivery_information'])) {?>
            <div class="product__delivery-infos"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['delivery_information']), ENT_QUOTES, 'UTF-8');?>
</div>
          <?php }?>
        <?php
}
}
/* {/block 'product_delivery_times'} */
/* {block 'product_availability'} */
class Block_8839697456a7c82e823f041_40131926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_8839697456a7c82e823f041_40131926',
  ),
  'product_delivery_times' => 
  array (
    0 => 'Block_5347379436a7c82e8244cf0_48211925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div
        id="product-availability"
        class="product__availability js-product-availability"
        <?php if (empty($_smarty_tpl->tpl_vars['product']->value['availability_message']) && empty($_smarty_tpl->tpl_vars['product']->value['delivery_information'])) {?>
          hidden
        <?php }?>
      >
        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['availability_message'])) {?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'in_stock') {?>
            <?php $_smarty_tpl->_assignInScope('availability_icon', 'E5CA');?>
            <?php $_smarty_tpl->_assignInScope('availability_class', 'text-success');?>
          <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
            <?php $_smarty_tpl->_assignInScope('availability_icon', 'E002');?>
            <?php $_smarty_tpl->_assignInScope('availability_class', 'text-warning');?>
          <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
            <?php $_smarty_tpl->_assignInScope('availability_icon', 'E002');?>
            <?php $_smarty_tpl->_assignInScope('availability_class', 'text-warning');?>
          <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('availability_icon', 'E14B');?>
            <?php $_smarty_tpl->_assignInScope('availability_class', 'text-danger');?>
          <?php }?>

                    <div class="product__availability-status <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['availability_class']->value), ENT_QUOTES, 'UTF-8');?>
" aria-live="off" data-ps-ref="product-availability">
            <i class="product__availability-icon material-icons rtl-no-flip">&#x<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['availability_icon']->value), ENT_QUOTES, 'UTF-8');?>
;</i>

            <div class="product__availability-messages">
              <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product availability:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
              <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['availability_message']), ENT_QUOTES, 'UTF-8');?>
</span>

              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['availability_submessage'])) {?>
                <small class="d-block"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['availability_submessage']), ENT_QUOTES, 'UTF-8');?>
</small>
              <?php }?>
            </div>
          </div>
        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5347379436a7c82e8244cf0_48211925', 'product_delivery_times', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_quantity'} */
class Block_4503422966a7c82e8245c14_61821313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_4503422966a7c82e8245c14_61821313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product__actions-qty-add product-quantity">
        <div class="product-actions__quantity product__quantity quantity-button js-quantity-button">
          <?php $_smarty_tpl->_subTemplateRender('file:components/qty-input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attributes'=>array("id"=>"quantity_wanted","class"=>"form-control js-quantity-wanted","value"=>((string)$_smarty_tpl->tpl_vars['product']->value['quantity_wanted']),"min"=>((string)$_smarty_tpl->tpl_vars['product']->value['quantity_required']))), 0, false);
?>
        </div>

        <div class="product__add-to-cart add">
          <button
            class="product__add-to-cart-button btn btn-primary"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              aria-disabled="true"
              disabled
            <?php }?>
            data-ps-ref="add-to-cart"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart %product_name%','sprintf'=>array('%product_name%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
          >
            <i class="material-icons" aria-hidden="true">&#xE547;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'product_actions', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_actions')) {?>
          <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_actions');?>

        <?php }?>
      </div>
    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_minimal_quantity'} */
class Block_8461640256a7c82e8248cd4_15824837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_8461640256a7c82e8248cd4_15824837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div
        class="product__minimal-quantity product-minimal-quantity js-product-minimal-quantity"
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] <= 1) {?>
          hidden
        <?php }?>
      >
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
          <i class="material-icons" aria-hidden="true">&#xE88F;</i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

        <?php }?>
      </div>
    <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
