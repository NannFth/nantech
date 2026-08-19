<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:26:05
  from 'C:\xampp\htdocs\nantech-store\modules\blockreassurance\views\templates\admin\tabs\content\config_elements\cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c827df1b640_86935888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1582234d0a753cd6153ee426e63b9455b1871dda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content\\config_elements\\cms.tpl',
      1 => 1699411992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c827df1b640_86935888 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group psr-cms <?php if (((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value['type_link'] != $_smarty_tpl->tpl_vars['LINK_TYPE_CMS']->value) || !(isset($_smarty_tpl->tpl_vars['block']->value))) {?> inactive<?php }?>">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CMS Page','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
        <div class="input-group col-xs-12 col-sm-12 col-md-7 col-lg-12 psrea-flex">
            <select class="custom-select" name="ID_CMS_<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];
}?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCms']->value, 'cms');
$_smarty_tpl->tpl_vars['cms']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['cms']->value['id_cms'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value['id_cms'] == $_smarty_tpl->tpl_vars['cms']->value['id_cms']) {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cms']->value['meta_title'],'htmlall','UTF-8' ));?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
