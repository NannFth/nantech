<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:50
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\catalog\_partials\product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82e6b92363_01006890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03d8e0db6598be1cae65c8e332fa666757a2534e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\catalog\\_partials\\product-prices.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c82e6b92363_01006890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product__prices js-product-prices">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17740217946a7c82e6b88547_92703083', 'product_price');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>

  </div>
<?php }
}
/* {block 'product_unit_price'} */
class Block_8989765616a7c82e6b8b448_84504971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
              <span class="product__unit-price">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

              </span>
            <?php }?>
          <?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_pack_price'} */
class Block_20302375436a7c82e6b8bee7_99825495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
            <span class="product__pack-price">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>

            </span>
          <?php }?>
        <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_19014682196a7c82e6b8ede3_41048282 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
              <span class="product__ecotax-price">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                <?php }?>
              </span>
            <?php }?>
          <?php
}
}
/* {/block 'product_ecotax'} */
/* {block 'product_without_taxes'} */
class Block_9596606556a7c82e6b90bd2_08368617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
            <span class="product__taxless-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</span>
          <?php }?>
        <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_price'} */
class Block_17740217946a7c82e6b88547_92703083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_17740217946a7c82e6b88547_92703083',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_8989765616a7c82e6b8b448_84504971',
  ),
  'product_pack_price' => 
  array (
    0 => 'Block_20302375436a7c82e6b8bee7_99825495',
  ),
  'product_ecotax' => 
  array (
    0 => 'Block_19014682196a7c82e6b8ede3_41048282',
  ),
  'product_without_taxes' => 
  array (
    0 => 'Block_9596606556a7c82e6b90bd2_08368617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product__prices-block">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
          <div class="product__discount-price product__prices-inline product__prices-inline--small-gap">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


            <span class="product__regular-price">
              <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price: ','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['regular_price']), ENT_QUOTES, 'UTF-8');?>

            </span>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="product__discount-percentage text-primary-emphasis">
                (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
)
              </span>
            <?php } else { ?>
              <span class="product__discount-amount text-primary-emphasis">
                (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>
)
              </span>
            <?php }?>
          </div>
        <?php }?>
        
        <div class="product__prices-inline product__prices-inline--small-gap">
          <div class="product__price">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'product_sheet'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if (!empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price'))) {?>
              <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

            <?php } else { ?>
              <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price: ','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8');?>

            <?php }?>
          </div>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8989765616a7c82e6b8b448_84504971', 'product_unit_price', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20302375436a7c82e6b8bee7_99825495', 'product_pack_price', $this->tplIndex);
?>


        <div class="product__tax-infos">
          <span class="product__tax-label">
            <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tax','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

            <?php } elseif ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['labels']['tax_long']), ENT_QUOTES, 'UTF-8');?>

            <?php }?>
            
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

          </span>

                    <?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label'] && $_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?><span class="product__price-separator"> - </span><?php }?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19014682196a7c82e6b8ede3_41048282', 'product_ecotax', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9596606556a7c82e6b90bd2_08368617', 'product_without_taxes', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'product_price'} */
}
