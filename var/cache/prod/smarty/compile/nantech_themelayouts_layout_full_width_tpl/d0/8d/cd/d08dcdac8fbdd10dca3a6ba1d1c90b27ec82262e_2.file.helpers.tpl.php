<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:53
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0bd2db528_55465525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd08dcdac8fbdd10dca3a6ba1d1c90b27ec82262e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\_partials\\helpers.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0bd2db528_55465525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\nantech-store\\var\\cache\\prod\\smarty\\compile\\nantech_themelayouts_layout_full_width_tpl\\d0\\8d\\cd\\d08dcdac8fbdd10dca3a6ba1d1c90b27ec82262e_2.file.helpers.tpl.php',
    'uid' => 'd08dcdac8fbdd10dca3a6ba1d1c90b27ec82262e',
    'call_name' => 'smarty_template_function_renderLogo_3828512316a85f0bd2d7a19_60971729',
  ),
));
?>

<?php }
/* smarty_template_function_renderLogo_3828512316a85f0bd2d7a19_60971729 */
if (!function_exists('smarty_template_function_renderLogo_3828512316a85f0bd2d7a19_60971729')) {
function smarty_template_function_renderLogo_3828512316a85f0bd2d7a19_60971729(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a class="navbar-brand d-block" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src']), ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width']), ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height']), ENT_QUOTES, 'UTF-8');?>
"
    >
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_3828512316a85f0bd2d7a19_60971729 */
}
