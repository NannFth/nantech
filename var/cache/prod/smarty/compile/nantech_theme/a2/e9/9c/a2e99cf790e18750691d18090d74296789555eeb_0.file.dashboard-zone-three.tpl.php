<?php
/* Smarty version 4.5.5, created on 2026-08-13 00:43:02
  from 'C:\xampp\htdocs\nantech-store\modules\ps_mbo\views\templates\hook\dashboard-zone-three.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7cb0a6a55397_96356677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e99cf790e18750691d18090d74296789555eeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-three.tpl',
      1 => 1780559324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a7cb0a6a55397_96356677 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  window.$(document).ready(function () {
    if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
      if (typeof renderCdcError === 'function') {
        renderCdcError($('#cdc-dashboard-news'));
      }
    } else {
      const renderNews = window.mboCdc.renderDashboardNews
      if (!window.mboDashboardContext) {
        setTimeout(() => {
            if (window.mboDashboardContext) {
              renderNews(window.mboDashboardContext, '#cdc-dashboard-news')
            }
          },
          1000)
      } else {
        renderNews(window.mboDashboardContext, '#cdc-dashboard-news')
      }
    }
  });
<?php echo '</script'; ?>
>

<section id="cdc-dashboard-news" class="dash_news cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
