<?php
/* Smarty version 4.5.5, created on 2026-08-20 01:06:39
  from 'module:ps_bannerps_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a85f0af43b4c3_48665186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_bannerps_banner.tpl',
      1 => 1770773896,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a85f0af43b4c3_48665186 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['banner_img']->value))) {?>
  <section class="ps-banner">
    <div class="container">
      <a class="banner d-block text-center" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_link']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
">
        <img 
          src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_img']->value), ENT_QUOTES, 'UTF-8');?>
"
          alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
"
          title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
"
          class="img-fluid"
          loading="lazy"
          <?php if (!empty($_smarty_tpl->tpl_vars['banner_width']->value)) {?>
            width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_width']->value), ENT_QUOTES, 'UTF-8');?>
"
          <?php }?>
          <?php if (!empty($_smarty_tpl->tpl_vars['banner_height']->value)) {?>
            height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_height']->value), ENT_QUOTES, 'UTF-8');?>
"
          <?php }?>
        >
      </a>
    </div>
  </section>
<?php }
}
}
