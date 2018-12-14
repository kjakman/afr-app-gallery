<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:49:24
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c136084d47657_20052626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf5de18f395927ec1bec9f8234f27ca5b5f7a6bb' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/index.html',
      1 => 1544773764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/minisites/_debug.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/minisites/_menu-artist.html' => 2,
    'file:/web/sites/afr-app-gallery/smarty/templates/minisites/_menu.html' => 2,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html' => 1,
  ),
),false)) {
function content_5c136084d47657_20052626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('ms', $_smarty_tpl->tpl_vars['scope']->value['msObj']);
$_smarty_tpl->_assignInScope('minisite', $_smarty_tpl->tpl_vars['ms']->value['url']);
$_smarty_tpl->_assignInScope('basepath', $_smarty_tpl->tpl_vars['scope']->value['basepath']);
$_smarty_tpl->_assignInScope('minisite_name', $_smarty_tpl->tpl_vars['ms']->value['name']);
$_smarty_tpl->_assignInScope('version', $_smarty_tpl->tpl_vars['app']->value['version']);
$_smarty_tpl->_assignInScope('page', $_smarty_tpl->tpl_vars['scope']->value['page']);
$_smarty_tpl->_assignInScope('ms_page', $_smarty_tpl->tpl_vars['scope']->value['minisite_page']);
$_smarty_tpl->_assignInScope('type', $_smarty_tpl->tpl_vars['scope']->value['minisite_type']);?>

<?php $_smarty_tpl->_assignInScope('slug', $_smarty_tpl->tpl_vars['scope']->value['slug']);
$_smarty_tpl->_assignInScope('subview', $_smarty_tpl->tpl_vars['scope']->value['subview']);
$_smarty_tpl->_assignInScope('debug', $_smarty_tpl->tpl_vars['scope']->value['debug']);?>

<?php $_smarty_tpl->_assignInScope('artworks', $_smarty_tpl->tpl_vars['scope']->value['artworks']);
$_smarty_tpl->_assignInScope('exhibitions', $_smarty_tpl->tpl_vars['scope']->value['exhibitions']);
$_smarty_tpl->_assignInScope('filter_exhibitions', $_smarty_tpl->tpl_vars['scope']->value['filter_exhibitions']);
$_smarty_tpl->_assignInScope('latest_exhibitions', $_smarty_tpl->tpl_vars['scope']->value['latest_exhibitions']);
$_smarty_tpl->_assignInScope('mObj', $_smarty_tpl->tpl_vars['scope']->value['mObj']);
$_smarty_tpl->_assignInScope('timings', $_smarty_tpl->tpl_vars['scope']->value['timings']);
$_smarty_tpl->_assignInScope('profileobj', $_smarty_tpl->tpl_vars['scope']->value['profileobj']);
$_smarty_tpl->_assignInScope('userdetail', $_smarty_tpl->tpl_vars['scope']->value['userdetail']);?>

<?php $_smarty_tpl->_assignInScope('minisite_pageObj', $_smarty_tpl->tpl_vars['scope']->value['minisite_pageObj']);
$_smarty_tpl->_assignInScope('page_slug', $_smarty_tpl->tpl_vars['scope']->value['page_slug']);
$_smarty_tpl->_assignInScope('sub_slug', $_smarty_tpl->tpl_vars['scope']->value['sub_slug']);?>

<?php $_smarty_tpl->_assignInScope('vp', '//test.vpatina.com');
$_smarty_tpl->_assignInScope('cachebust', "?ts".((string)time()));
$_smarty_tpl->_assignInScope('title', "STIGTER<br>VAN DOESBURG");
if (($_smarty_tpl->tpl_vars['ms']->value['logo'])) {?>
  <!-- <?php $_smarty_tpl->_assignInScope('logo', ((string)$_smarty_tpl->tpl_vars['vp']->value)."/img/minisites/".((string)$_smarty_tpl->tpl_vars['minisite']->value)."/".((string)$_smarty_tpl->tpl_vars['ms']->value['logo']));?> -->
  <?php $_smarty_tpl->_assignInScope('logo', "/img/minisites/".((string)$_smarty_tpl->tpl_vars['minisite']->value)."/".((string)$_smarty_tpl->tpl_vars['ms']->value['logo']));
}?>

<?php $_smarty_tpl->_assignInScope('user_id', $_smarty_tpl->tpl_vars['scope']->value['user_id']);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['app']->value['page']['se_title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['minisite_name']->value;?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="application-name" content="<?php echo $_smarty_tpl->tpl_vars['minisite_name']->value;?>
" />
    <meta name="msapplication-TileColor" content="#fafafa" />
    <meta name="msapplication-TileImage" content="/styles/img/windows8_tile.png" />
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['page']['se_keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['page']['se_description'];?>
" />
  
    <!-- vpatina/pages/minisite -->
    

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
    
    <!-- link -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/favicon/favicon.ico" />
    <link rel="shortcut icon" sizes="192x192" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/favicon/favicon-96x96.png">
    <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/favicon/apple-touch-icon.png">
    <link rel="mask-icon" href="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/favicon/apple-touch-icon.svg" color="black">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" media="all" href="/css/minisites/minisite.css<?php echo $_smarty_tpl->tpl_vars['cachebust']->value;?>
" />
    <link rel="stylesheet" type="text/css" media="all" href="/afr/css/afr_base.css<?php echo $_smarty_tpl->tpl_vars['cachebust']->value;?>
" />
    <link rel="stylesheet" type="text/css" media="all" href="/afr/css/gallery/afr_gallery.css<?php echo $_smarty_tpl->tpl_vars['cachebust']->value;?>
" />
    
    <link rel="stylesheet" type="text/css" media="all" href="/afr/js/vp/photoswipe.css?v=4.1.1-1.0.5" / >
    <link rel="stylesheet" type="text/css" media="all" href="/afr/js/vp/default-skin/default-skin.css<?php echo $_smarty_tpl->tpl_vars['cachebust']->value;?>
" / >
    <link rel="stylesheet" type="text/css" media="all" href="/afr/js/vp/vp.min.css<?php echo $_smarty_tpl->tpl_vars['cachebust']->value;?>
" / >
    <!--link rel="StyleSheet" href="/css/site.css?ver=0223141201" type="text/css" media="screen"/-->
    <?php if (($_smarty_tpl->tpl_vars['user']->value)) {?>
    <link rel="stylesheet" type="text/css" media="all" href="/afr/css/afr_cms.css<?php echo $_smarty_tpl->tpl_vars['cachebust']->value;?>
" />
    <link rel="StyleSheet" href="/afr/bower/fancybox/source/jquery.fancybox.css" type="text/css" media="screen"/>
    <link rel="StyleSheet" href="/afr/bower/summernote/dist/summernote.css" type="text/css" media="screen"/>    
    <?php }?>
    <link rel="StyleSheet" href="/afr/bower/intl-tel-input/build/css/intlTelInput.css?v=11.0.14" type="text/css" media="screen"/>
    
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
    
    
    <?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqzndmgSgkwaD6AEATZOkeEWUo4foizEo&amp;libraries=places&amp;language=en"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
  
    <?php if (($_smarty_tpl->tpl_vars['ms_page']->value['css'])) {?>
    <style>
      <?php echo $_smarty_tpl->tpl_vars['ms_page']->value['css'];?>

    </style>
    <?php }?>
    
  </head>
  <body id="" class="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
  

    <?php if (($_smarty_tpl->tpl_vars['app']->value['test'] || $_smarty_tpl->tpl_vars['app']->value['dev'])) {?>
    <div class="abs_top_left">
      <span class="hidden-sm-up visible">XS</span>
      <span class="hidden-xs-down hidden-md-up visible">SM</span>
      <span class="hidden-sm-down hidden-lg-up visible">MD</span>
      <span class="hidden-md-down hidden-xl-up visible">LG</span>
      <span class="hidden-lg-down visible">XL</span>
    </div>
    <?php }?>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['edit_menu']->value;?>

    <?php if ((0)) {
$_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/minisites/_debug.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

    <div class="container">
      <div class="row header" id="header">
        <div class="col-md-3 col-sm-2 col-xs-2 text-left">
          <nav class="navbar navbar-light navbar-site navbar-desktop hidden-sm-down" id="navbarSite">
              <?php if (($_smarty_tpl->tpl_vars['type']->value == "artist")) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/minisites/_menu-artist.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/minisites/_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php }?>
          </nav>
          <nav class="hidden-md-up navbar navbar-fixed-top-off navbar-site navbar-mobile navbar-mobile-site" role="navigation">
            <div class="navbar-header">
              <button class="navbar-toggler pull-left" id="mobileSiteNavBtn" type="button" data-toggle="collapse" data-target="#mobileSiteCollapsingNav">
                &#9776;
              </button>
              <!--a class="navbar-brand nav-logo site-logo hidden-sm-up" href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
1</a-->
            </div>
            <div class="collapse navbar-toggleable-sm nav-links text-left" id="mobileSiteCollapsingNav">
              <?php if (($_smarty_tpl->tpl_vars['type']->value == "artist")) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/minisites/_menu-artist.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
              <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/minisites/_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
              <?php }?>
            </div>
          </nav>          
        </div>
        <div class="col-md-8 col-sm-10 col-xs-10 text-center pt20">
          <a class="minisite-logo" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['basepath']->value,'/' ));?>
">
          <?php if (($_smarty_tpl->tpl_vars['logo']->value)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"><?php } else { ?><h1><?php echo $_smarty_tpl->tpl_vars['minisite_name']->value;?>
</h1><?php }?>
          </a>
        </div>        
      </div>
      
      <div class="row" id="title">
        <div class="col-md-3 col-sm-2 col-xs-2 text-left">  
        </div>
      
        <div class="col-md-8 col-sm-10 col-xs-10 text-center pt20">
          <div>
            <?php if (($_smarty_tpl->tpl_vars['mObj']->value['show_subtitle'] == '1')) {?>
              <h2><?php echo $_smarty_tpl->tpl_vars['mObj']->value['sub_title'];?>
</h2>
            <?php }?>
          </div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14503698485c136084d39093_35156916', 'title');
?>

          <?php if (($_smarty_tpl->tpl_vars['scope']->value['header_text'])) {?>
          <div><?php echo $_smarty_tpl->tpl_vars['scope']->value['header_text'];?>
</div>
          <?php }?>
          
        </div>
      </div>
      <hr>

      
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      
      <!-- content -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7464805715c136084d3ab10_66575089', 'content');
?>
    
  
      <br />
  
      <div class="row footer" id="footer">
        <div class="col-md-3 col-sm-6 col-xs-6">
          
          <!--a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/about">About The Gallery</a><br /-->
          <?php if (($_smarty_tpl->tpl_vars['mObj']->value['show_timing'] == '1')) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/contact#opening-hours">Opening hours</a> <br />
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timings']->value, 'timing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['timing']->value) {
?>
              <table>
                <tr>
                  <td style= "width:100px"> <?php echo $_smarty_tpl->tpl_vars['timing']->value['day'];?>
 </td>
                  <td> : </td>
                  <?php if (($_smarty_tpl->tpl_vars['timing']->value['opening_time'] && $_smarty_tpl->tpl_vars['timing']->value['closing_time'] == "00:00:00")) {?>
                    <td> CLOSED </td>
                  <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('opening_time', substr($_smarty_tpl->tpl_vars['timing']->value['opening_time'],0,-3));?>
                    <?php $_smarty_tpl->_assignInScope('closing_time', substr($_smarty_tpl->tpl_vars['timing']->value['closing_time'],0,-3));?>
                    <td> <?php echo $_smarty_tpl->tpl_vars['opening_time']->value;?>
 - </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['closing_time']->value;?>
 </td>
                  <?php }?>                  
                </tr>
              </table>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
          <p></p>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <!--a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/submissions">Submissions</a><br />
          <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/legal">Terms &amp; Conditions</a><br /-->
          <p></p>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 footer-follow-col" style="padding-right:0px;">
          <?php if (($_smarty_tpl->tpl_vars['mObj']->value['show_social'] == '1')) {?>
            <strong>FOLLOW US</strong><br />
            <?php if (($_smarty_tpl->tpl_vars['profileobj']->value['twitter'])) {?>
              <!-- <a class="footer-social-icon" href="<?php echo $_smarty_tpl->tpl_vars['profileobj']->value['twitter'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/footer/footer-tw@2x.png" /></a> -->
              <a class="footer-social-icon" href="<?php echo $_smarty_tpl->tpl_vars['profileobj']->value['twitter'];?>
"><img src="/img/footer/footer-tw@2x.png" /></a>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['profileobj']->value['facebook'])) {?>
              <a class="footer-social-icon" href="<?php echo $_smarty_tpl->tpl_vars['profileobj']->value['facebook'];?>
"><img src="/img/footer/footer-fb@2x.png" /></a>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['profileobj']->value['instagram'])) {?>
              <a class="footer-social-icon" href="<?php echo $_smarty_tpl->tpl_vars['profileobj']->value['instagram'];?>
" target="_blank"><img src="/img/footer/footer-in@2x.png" /></a>
            <?php }?>
          <?php }?>
          <!--a class="footer-social-icon" href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/footer/footer-mail@2x.png" /></a>   
          <a class="footer-social-icon" href="http://pinterest.com/source/thisurl.com/"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/footer/footer-pin@2x.png" /></a>
          <a class="footer-social-icon" href="https://www.artsy.net/galleryname-gallery/"><img src="<?php echo $_smarty_tpl->tpl_vars['vp']->value;?>
/img/footer/footer-ar@2x.png" /></a-->
          <br />
          <p></p>
        </div>
      
        <div class="col-md-3 col-sm-6 col-xs-12 footer-share-col">
          <span class="footer-header-share"><strong>SHARE</strong></span>
          <div class="addthis_inline_share_toolbox"></div>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12 text-left copyright">
          <?php echo $_smarty_tpl->tpl_vars['mObj']->value['footer'];?>

        </div>
        <div class="col-md-3 col-sm-12 col-xs-12 text-left caravan">
          <a href="https://www.vpatina.com" target="_blank">fueled by <span class="interactive">vPatina</span></a>
        </div>      
      </div><!-- footer -->

    </div><!-- container -->       
    
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>                                 
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--like vp__favorite-link pswp__element--disabled" title="Like" id="likeBtn"></button>
            <button class="pswp__button pswp__button--user pswp__element--disabled" title="User" id="userBtn"></button>
            <button class="pswp__button pswp__button--chat pswp__element--disabled" title="Chat" id="chatBtn"></button>
            <button class="pswp__button pswp__button--contact pswp__element--disabled" title="Contact" id="contactBtn"></button>
            <button class="pswp__button pswp__button--calendar pswp__element--disabled" title="Calendar" id="calendarBtn"></button>
            <button class="pswp__button pswp__button--map" title="Map" id="mapBtn"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <button class="pswp__button pswp__button--info" title="Info" id="vp__infoBtn"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap" id="vp__share-modal">
            <div id="vp__share-modal-content" class="vp__share-modal-content arrow-box"></div> 
          </div>    
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>    
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>    
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>    
        </div>    
      </div>    
    </div>  
    <div id="vp__my_modal" class="w3-modal my-modal-off" style="position:absolute;width:100%;height:100%;left:0;top:0;background:rgba(0,0,0,0.6);display:none">
      <div class="w3-modal-content vp__my-modal-content w3-animate-opacity" style="background-color: #fff;color:#000">
        <span onclick="document.getElementById('vp__my_modal').style.display='none'" style="padding-top: 0px !important;padding-bottom: 6px !important" class="w3-button w3-xlarge w3-display-topright">&times;</span>
        <div id="vp__my-modal-content" class="w3-container-off">
        </div>
      </div>
    </div>
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://use.fontawesome.com/a22cbf3bb2.js"><?php echo '</script'; ?>
>
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7369239465c136084d445f3_38117238', 'scripts');
?>
    

    <?php echo '<script'; ?>
 type="text/javascript" src="/afr/js/afr_gmap.js?v=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
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
 type="text/javascript" src="/afr/bower/fancybox/source/jquery.fancybox.pack.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/summernote/dist/summernote.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/afr/bower/intl-tel-input/build/js/intlTelInput.min.js?v=11.0.14"><?php echo '</script'; ?>
>

<!-- Enable bootstrap 4 theme -->
    <?php echo '<script'; ?>
>window.__theme = 'bs4';<?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="//assets.pinterest.com/js/pinit.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578fa1a85551d382"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/minisite.js<?php echo $_smarty_tpl->tpl_vars['cachebust']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/afr/js/vp/vp.js<?php echo $_smarty_tpl->tpl_vars['cachebust']->value;?>
"><?php echo '</script'; ?>
>
           
    <?php echo '<script'; ?>
 type="text/javascript">         
      $(document).ready(function(){   
        var artists = [];            
        var data = '<?php echo smarty_modifier_replace(json_encode($_smarty_tpl->tpl_vars['scope']->value['data']),"'","&quot;");?>
';
        g_local_data = JSON.parse(data);
        vp_search();
		 $(".export.btn-group").append(" <span class='export_datan'><b>Download Records</b></span>");
 $(".keep-open.btn-group").append(" <span class='export_datan'><b>Select Columns</b></span>");
      });
    <?php echo '</script'; ?>
>   
  </body>                    

<?php }
/* {block 'title'} */
class Block_14503698485c136084d39093_35156916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14503698485c136084d39093_35156916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_7464805715c136084d3ab10_66575089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7464805715c136084d3ab10_66575089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'scripts'} */
class Block_7369239465c136084d445f3_38117238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_7369239465c136084d445f3_38117238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
