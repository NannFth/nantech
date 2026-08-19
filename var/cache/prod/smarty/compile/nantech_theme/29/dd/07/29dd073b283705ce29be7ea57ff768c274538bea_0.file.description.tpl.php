<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:26:05
  from 'C:\xampp\htdocs\nantech-store\modules\blockreassurance\views\templates\admin\tabs\content\config_elements\description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c827d9be405_18566907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29dd073b283705ce29be7ea57ff768c274538bea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content\\config_elements\\description.tpl',
      1 => 1699411992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7c827d9be405_18566907 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group content_by_lang lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>inactive<?php }?>"
     data-type="description" data-lang="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description (optional)','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
        <div class="input-group col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-12">
                <textarea
                        name="description-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
"
                        max="100"
                        class="form-control"
                        value="<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable4 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['allblock']->value[$_smarty_tpl->tpl_vars['block']->value['id_psreassurance']]['description'][$_prefixVariable4];
}?>"
                ><?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable5 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['allblock']->value[$_smarty_tpl->tpl_vars['block']->value['id_psreassurance']]['description'][$_prefixVariable5];
}?></textarea>
            </div>
        </div>
        <div class="col-xs-12 help-block">
            <span class="limit_description">0</span>/100 characters
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
