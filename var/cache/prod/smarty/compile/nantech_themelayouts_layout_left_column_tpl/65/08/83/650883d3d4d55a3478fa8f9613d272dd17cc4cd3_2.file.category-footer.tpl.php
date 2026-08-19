<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:32
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\catalog\_partials\category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82d42969f8_69276007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650883d3d4d55a3478fa8f9613d272dd17cc4cd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\catalog\\_partials\\category-footer.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c82d42969f8_69276007 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
  <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
    <div class="category__footer">
      <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['additional_description']) && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="category__additional-description rich-text">
          <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

        </div>
      <?php }?>
    </div>
  <?php }?>
</div>
<?php }
}
