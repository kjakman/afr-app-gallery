<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:31:10
  from '/web/sites/afr-app-gallery/smarty/templates/base/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c3e95e059_86409833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ffb457b6d3e63d500d42f13ca22dced993f3ac' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/base/index.html',
      1 => 1544772670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135c3e95e059_86409833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--meta name="viewport" content="width=device-width, initial-scale=.5, maximum-scale=12.0, minimum-scale=.25, user-scalable=yes"/-->
  
  <title><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['se_title'],$_smarty_tpl->tpl_vars['page']->value['name'] ));?>
</title>
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['se_description'];?>
">
  <meta name="keywords" lang="en" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['se_keywords'];?>
">
  <meta name="author" lang="en" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['author'],'Syspensa' ));?>
">  
  <meta name="robots" content="noindex, nofollow">
  
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['app']->value['header']['meta'], 'meta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['meta']->value) {
?>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'meta_tag' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta']->value ));?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['app']->value['header']['link'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'header_link' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value ));?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php $_smarty_tpl->_assignInScope('version', $_smarty_tpl->tpl_vars['app']->value['version']);?>
  <link rel="StyleSheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="screen"/>
  <!--link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"-->
  <link rel="StyleSheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" media="screen"/>
  
  <link rel="StyleSheet" href="/afr/css/afr_base.css?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/css/afr_rental.css?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/css/afr_tooltip.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/css/afr_cms.css?ver=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="//fonts.googleapis.com/css?family=Roboto:400,300,100,500,700" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600" type="text/css" media="screen"/>
  
  <link rel="StyleSheet" href="/font/afr/styles.css?v=2" type="text/css" media="screen"/>
  
  <link rel="StyleSheet" href="/traveler/css/icomoon.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/traveler/css/styles.css?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/traveler/css/mystyles.css?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/css/site.css?ver=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" type="text/css" media="screen"/>

  <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['full_path']->value;?>
" />
  
  <?php $_smarty_tpl->_assignInScope('styles', array_unique($_smarty_tpl->tpl_vars['app']->value['header']['styles']));?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles']->value, 'style');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
?>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'style_tag' ][ 0 ], array( $_smarty_tpl->tpl_vars['style']->value ));?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
  <!-- Todo: get rid of those not used, and move includes to controllers -->
  <link rel="StyleSheet" href="/afr/bower/fancybox/dist/jquery.fancybox.min.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/summernote/dist/summernote.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/bootstrap-star-rating/css/star-rating.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/ion.rangeSlider/css/ion.rangeSlider.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/css/google_pac.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/select2/dist/css/select2.min.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/flag-icon-css/css/flag-icon.min.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/bootstrap-social/bootstrap-social.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/intl-tel-input/build/css/intlTelInput.css?v=11.0.4" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/magnific-popup/dist/magnific-popup.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/addtocalendar/addtocalendar-styles/atc-style-blue/atc-style-blue.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/codemirror/lib/codemirror.css" type="text/css" media="screen"/>
  <link rel="StyleSheet" href="/afr/bower/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css" type="text/css" media="screen"/>

  <!-- link rel="stylesheet" href="/afr/css/print.css" type="text/css" media="print"-->

  <?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqzndmgSgkwaD6AEATZOkeEWUo4foizEo&amp;libraries=places&amp;language=en"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"><?php echo '</script'; ?>
>  
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>    
  
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/moment/moment.js"><?php echo '</script'; ?>
>
  
  <!-- Bower version of moment-range is ES6 and causes errors -->
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-range/4.0.1/moment-range.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>  
  
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/js/afr.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/js/afr_cms.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/js/afr_rental.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/google-markerwithlabel/src/markerwithlabel.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/js/google_pac.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/fancybox/dist/jquery.fancybox.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/summernote/dist/summernote.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
-->
  
    
  <?php $_smarty_tpl->_assignInScope('scripts', array_unique($_smarty_tpl->tpl_vars['app']->value['header']['base_scripts']));?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scripts']->value, 'script');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
?>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'script_tag' ][ 0 ], array( $_smarty_tpl->tpl_vars['script']->value ));?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php echo '<script'; ?>
>
    window['moment-range'].extendMoment(moment)
  <?php echo '</script'; ?>
>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['app']->value['header']['code'], 'code');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['code']->value;?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
</head>

<body id="page_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'slugify' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['name'] ));?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
">
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5049803155c135c3e959348_98170099', 'top');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14353756195c135c3e959a74_82368974', 'body');
?>

  
  <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/slimmenu.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/nicescroll.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/typeahead.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/dropit.js"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/icheck.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/fotorama.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/card-payment.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/owl-carousel.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/fitvids.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/tweet.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/gridrotator.js"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/geocomplete/jquery.geocomplete.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/magnific-popup/dist/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/select-to-autocomplete/jquery.select-to-autocomplete.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/bootstrap-validator/dist/validator.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/bootstrap-confirmation2/bootstrap-confirmation.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/ion.rangeSlider/js/ion.rangeSlider.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/bootstrap-star-rating/js/star-rating.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/select2/dist/js/select2.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/jquery.countdown/dist/jquery.countdown.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/intl-tel-input/build/js/intlTelInput.min.js?v=11.0.14"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/parallax/deploy/jquery.parallax.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/accounting.js/accounting.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/character-countdown/build/characterCountdown.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/addtocalendar/atc.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/handlebars/handlebars.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/jquery-truncate-html/jquery.truncate.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/codemirror/mode/smarty/smarty.js"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 type="text/javascript" src="/traveler/js/custom.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>

  <!--script type="text/javascript" src="/afr/bower/bootstrap-toggle/js/bootstrap-toggle.min.js"><?php echo '</script'; ?>
-->
  <!--script type="text/javascript" src="/afr/bower/bootstrap-modal/js/bootstrap-modalmanager.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/bootstrap-modal/js/bootstrap-modal.js"><?php echo '</script'; ?>
-->
  
  <?php $_smarty_tpl->_assignInScope('scripts', array_unique($_smarty_tpl->tpl_vars['app']->value['header']['scripts']));?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scripts']->value, 'script');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
?>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'script_tag' ][ 0 ], array( $_smarty_tpl->tpl_vars['script']->value ));?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php if ((count($_smarty_tpl->tpl_vars['app']->value['header']['onload']))) {?>
  <?php echo '<script'; ?>
>
    $(document).ready(function() {
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['app']->value['header']['onload'], 'script');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
?>
   <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    });    
  <?php echo '</script'; ?>
>
  <?php }?>
</body>

</html>

<?php }
/* {block 'top'} */
class Block_5049803155c135c3e959348_98170099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_5049803155c135c3e959348_98170099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top'} */
/* {block 'body'} */
class Block_14353756195c135c3e959a74_82368974 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14353756195c135c3e959a74_82368974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
