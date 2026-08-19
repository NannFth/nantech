<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:50
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82e680b482_38299372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '203b82e1e52751d32ba6a2b9655a8242405ddb57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c82e680b482_38299372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (!empty($_smarty_tpl->tpl_vars['product']->value['flags'])) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12150967166a7c82e680a4d0_93258375', 'product_flags');
?>

<?php }
}
/* {block 'product_flags'} */
class Block_12150967166a7c82e680a4d0_93258375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_12150967166a7c82e680a4d0_93258375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
        <li class="badge <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['flag']->value['type']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['flag']->value['label']), ENT_QUOTES, 'UTF-8');?>
</li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php
}
}
/* {/block 'product_flags'} */
}
