<?php
/* Smarty version 4.5.5, created on 2026-08-12 21:27:24
  from 'C:\xampp\htdocs\nantech-store\themes\hummingbird\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a7c82ccb36790_16431490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7f7f2589ace2d0cdcba2bdaf9b47bb213eccf99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nantech-store\\themes\\hummingbird\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1770773896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
    'file:components/page-loader.tpl' => 1,
    'file:components/toast-container.tpl' => 1,
    'file:components/password-policy-template.tpl' => 1,
  ),
),false)) {
function content_6a7c82ccb36790_16431490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['language']->value['locale']), ENT_QUOTES, 'UTF-8');?>
">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8820509136a7c82ccb2ced0_35609414', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page']->value['page_name']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] ))), ENT_QUOTES, 'UTF-8');?>
">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1818047786a7c82ccb2dc89_94756836', 'top_content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4504027926a7c82ccb2e024_51191733', 'skip_to_main_content');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2522255626a7c82ccb2e646_71653985', 'hook_after_body_opening_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21026273536a7c82ccb2eb28_84717911', 'product_activation');
?>


    <header id="header" class="header js-sticky-header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18538379736a7c82ccb2efe7_70957926', 'header');
?>

    </header>

    <main id="wrapper" class="wrapper">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperTop'),$_smarty_tpl ) );?>

      
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2673746056a7c82ccb2f658_35913426', 'breadcrumb');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2884959456a7c82ccb2fb12_50388500', 'main_content');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15131429676a7c82ccb2fea3_85360781', 'notifications');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11848011186a7c82ccb30381_36917977', 'content_columns');
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWrapperBottom'),$_smarty_tpl ) );?>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11512501886a7c82ccb32a29_83362773', 'footer');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17814959586a7c82ccb32eb6_60884173', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20278967826a7c82ccb334f2_29244863', 'bottom_elements');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18853554366a7c82ccb33d01_39263037', 'hook_before_body_closing_tag');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12812605006a7c82ccb341b7_30786005', 'modal_container');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13071007476a7c82ccb36152_69719327', 'back_to_top');
?>

  </body>
</html>
<?php }
/* {block 'head'} */
class Block_8820509136a7c82ccb2ced0_35609414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_8820509136a7c82ccb2ced0_35609414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'top_content'} */
class Block_1818047786a7c82ccb2dc89_94756836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_content' => 
  array (
    0 => 'Block_1818047786a7c82ccb2dc89_94756836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="back-to-top"></div>
    <?php
}
}
/* {/block 'top_content'} */
/* {block 'skip_to_main_content'} */
class Block_4504027926a7c82ccb2e024_51191733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'skip_to_main_content' => 
  array (
    0 => 'Block_4504027926a7c82ccb2e024_51191733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a class="visually-hidden-focusable btn btn-primary skip-link" href="#main-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Skip to main content','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php
}
}
/* {/block 'skip_to_main_content'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_2522255626a7c82ccb2e646_71653985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_2522255626a7c82ccb2e646_71653985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_21026273536a7c82ccb2eb28_84717911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_21026273536a7c82ccb2eb28_84717911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_18538379736a7c82ccb2efe7_70957926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_18538379736a7c82ccb2efe7_70957926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_2673746056a7c82ccb2f658_35913426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_2673746056a7c82ccb2f658_35913426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'main_content'} */
class Block_2884959456a7c82ccb2fb12_50388500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_2884959456a7c82ccb2fb12_50388500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="main-content"></div>
      <?php
}
}
/* {/block 'main_content'} */
/* {block 'notifications'} */
class Block_15131429676a7c82ccb2fea3_85360781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_15131429676a7c82ccb2fea3_85360781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'container_class'} */
class Block_11888394006a7c82ccb30525_12251491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
columns-container container<?php
}
}
/* {/block 'container_class'} */
/* {block 'left_column'} */
class Block_4247151436a7c82ccb30822_88104592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="left-column" class="left-column col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] === 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumn'),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_13445451696a7c82ccb316c4_85823544 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_2734475556a7c82ccb313a8_50332454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="center-column" class="center-column page col-md-4 col-lg-6">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperTop'),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13445451696a7c82ccb316c4_85823544', 'content', $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContentWrapperBottom'),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_21357408856a7c82ccb31c73_70099016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="right-column" class="right-column col-md-4 col-lg-3">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] === 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumn'),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_11848011186a7c82ccb30381_36917977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_11848011186a7c82ccb30381_36917977',
  ),
  'container_class' => 
  array (
    0 => 'Block_11888394006a7c82ccb30525_12251491',
  ),
  'left_column' => 
  array (
    0 => 'Block_4247151436a7c82ccb30822_88104592',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_2734475556a7c82ccb313a8_50332454',
  ),
  'content' => 
  array (
    0 => 'Block_13445451696a7c82ccb316c4_85823544',
  ),
  'right_column' => 
  array (
    0 => 'Block_21357408856a7c82ccb31c73_70099016',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11888394006a7c82ccb30525_12251491', 'container_class', $this->tplIndex);
?>
">
          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4247151436a7c82ccb30822_88104592', 'left_column', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2734475556a7c82ccb313a8_50332454', 'content_wrapper', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21357408856a7c82ccb31c73_70099016', 'right_column', $this->tplIndex);
?>

          </div>
        </div>
      <?php
}
}
/* {/block 'content_columns'} */
/* {block 'footer'} */
class Block_11512501886a7c82ccb32a29_83362773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11512501886a7c82ccb32a29_83362773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer id="footer" class="footer">
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </footer>
    <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_17814959586a7c82ccb32eb6_60884173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_17814959586a7c82ccb32eb6_60884173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/javascript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'bottom_elements'} */
class Block_20278967826a7c82ccb334f2_29244863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom_elements' => 
  array (
    0 => 'Block_20278967826a7c82ccb334f2_29244863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:components/page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:components/toast-container.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender('file:components/password-policy-template.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'bottom_elements'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_18853554366a7c82ccb33d01_39263037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_18853554366a7c82ccb33d01_39263037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'modal_container'} */
class Block_12812605006a7c82ccb341b7_30786005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modal_container' => 
  array (
    0 => 'Block_12812605006a7c82ccb341b7_30786005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div data-ps-target="modal-container">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "modal_content", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayModalContent'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'modal_content')) {?>
          <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'modal_content');?>

        <?php }?>
      </div>
    <?php
}
}
/* {/block 'modal_container'} */
/* {block 'back_to_top'} */
class Block_13071007476a7c82ccb36152_69719327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'back_to_top' => 
  array (
    0 => 'Block_13071007476a7c82ccb36152_69719327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a class="visually-hidden-focusable btn btn-primary back-to-top-link" href="#back-to-top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php
}
}
/* {/block 'back_to_top'} */
}
