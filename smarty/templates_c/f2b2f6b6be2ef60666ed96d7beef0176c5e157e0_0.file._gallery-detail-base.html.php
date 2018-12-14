<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:26
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-detail-base.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135726899999_17172494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2b2f6b6be2ef60666ed96d7beef0176c5e157e0' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-detail-base.html',
      1 => 1544771366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-related-images.html' => 1,
  ),
),false)) {
function content_5c135726899999_17172494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <?php $_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['collection']);?>
  <?php $_smarty_tpl->_assignInScope('artwork', $_smarty_tpl->tpl_vars['scope']->value['artwork']);?>
  <?php $_smarty_tpl->_assignInScope('plugin', $_smarty_tpl->tpl_vars['scope']->value['plugin']);?>
  
  <?php if (($_smarty_tpl->tpl_vars['collection']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['collection']->value);?>
    <?php $_smarty_tpl->_assignInScope('what', 'exhibition');?>
  <?php } elseif (($_smarty_tpl->tpl_vars['artwork']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['artwork']->value);?>
    <?php $_smarty_tpl->_assignInScope('what', 'artwork');?>
  <?php } elseif (($_smarty_tpl->tpl_vars['plugin']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['plugin']->value);?>
    <?php $_smarty_tpl->_assignInScope('what', 'plugin');?>
  <?php }?>
  
    
  <?php $_smarty_tpl->_assignInScope('artist_id', $_smarty_tpl->tpl_vars['scope']->value['artist_id']);?>
  <?php $_smarty_tpl->_assignInScope('artist', $_smarty_tpl->tpl_vars['scope']->value['artist']);?>
  <?php $_smarty_tpl->_assignInScope('artist_name', $_smarty_tpl->tpl_vars['artist']->value['display_name']);?>

  <?php $_smarty_tpl->_assignInScope('curator_id', $_smarty_tpl->tpl_vars['scope']->value['curator_id']);?>
  <?php $_smarty_tpl->_assignInScope('curator', $_smarty_tpl->tpl_vars['scope']->value['curator']);?>
  <?php $_smarty_tpl->_assignInScope('curator_name', $_smarty_tpl->tpl_vars['curator']->value['display_name']);?>
  
  <?php $_smarty_tpl->_assignInScope('artworks', $_smarty_tpl->tpl_vars['scope']->value['artworks']);?>

  <?php $_smarty_tpl->_assignInScope('collection_id', $_smarty_tpl->tpl_vars['scope']->value['collection_id']);?>
  <?php $_smarty_tpl->_assignInScope('collection_type', $_smarty_tpl->tpl_vars['collection']->value['type']);?>
  <?php if (($_smarty_tpl->tpl_vars['collection_type']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('collection_type_name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection_type']->value,"media_collection_type","name" )));?> 
  <?php }?>
    
  <?php if (($_smarty_tpl->tpl_vars['collection_id']->value)) {?>  
    <?php $_smarty_tpl->_assignInScope('picture', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection_id']->value,'big' )));?>
    <?php $_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['collection']->value['title'])." by ".((string)$_smarty_tpl->tpl_vars['curator_name']->value));?>
  <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('picture', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['media_id'],"big" )));?>
    <?php $_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['artwork']->value['name'])." by ".((string)$_smarty_tpl->tpl_vars['artist_name']->value));?>
  <?php }?>
  
  <?php $_smarty_tpl->_assignInScope('parent_type', '');?>
  <?php $_smarty_tpl->_assignInScope('parent_id', 0);?>
  <?php $_smarty_tpl->_assignInScope('map_id', 0);?>
  <?php if (($_smarty_tpl->tpl_vars['artwork']->value['media_collection_id'])) {?>
    <?php $_smarty_tpl->_assignInScope('parent_type', "media_collection");?>
    <?php $_smarty_tpl->_assignInScope('parent_id', $_smarty_tpl->tpl_vars['artwork']->value['media_collection_id']);?>
    <?php $_smarty_tpl->_assignInScope('map_id', $_smarty_tpl->tpl_vars['artwork']->value['map_id']);?>
  <?php }?>
  <?php $_smarty_tpl->_assignInScope('item_data', array("user_id"=>$_smarty_tpl->tpl_vars['user']->value['id'],"site_id"=>$_smarty_tpl->tpl_vars['site']->value['id'],"obj_type"=>$_smarty_tpl->tpl_vars['scope']->value['obj_type'],"obj_id"=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],"follow_type"=>$_smarty_tpl->tpl_vars['scope']->value['follow_type'],"follow_id"=>$_smarty_tpl->tpl_vars['scope']->value['follow_id'],"parent_type"=>$_smarty_tpl->tpl_vars['parent_type']->value,"parent_id"=>$_smarty_tpl->tpl_vars['parent_id']->value));?>  

  <?php $_smarty_tpl->_assignInScope('item_data', array("obj_type"=>$_smarty_tpl->tpl_vars['scope']->value['obj_type'],"obj_id"=>$_smarty_tpl->tpl_vars['scope']->value['obj_id']));?>  
  <?php $_smarty_tpl->_assignInScope('item_json', json_encode($_smarty_tpl->tpl_vars['item_data']->value));?>
                          
  <?php $_smarty_tpl->_assignInScope('fav_class', $_smarty_tpl->tpl_vars['scope']->value['collected'] ? "fa-star" : "fa-star-o");?>
  
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_913560815c13572688a485_80921602', 'top');
?>


                    
                    <div class="profileinfo"> 
                      <div class="gallery-artwork-detail">
                        <article class="row mt20">
                          <section class="col-sm-6 mr20">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9882487255c13572688c489_15527279', 'image');
?>


                            <?php $_smarty_tpl->_assignInScope('url', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['url'],$_smarty_tpl->tpl_vars['this_full_url']->value )));?>
                              
                            <?php if ((!$_smarty_tpl->tpl_vars['plugin']->value)) {?>
                            <nav class="actions-buttons mt20 center" data-item='<?php echo $_smarty_tpl->tpl_vars['item_json']->value;?>
'>
                          
                                                            <?php if (($_smarty_tpl->tpl_vars['scope']->value['follow_type'] && $_smarty_tpl->tpl_vars['scope']->value['follow_id'] && $_smarty_tpl->tpl_vars['scope']->value['follow_type'] == 'media')) {?>                                 <?php if (($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
                              <a href="#" title="Follow" data-item='<?php echo $_smarty_tpl->tpl_vars['item_json']->value;?>
' class="favorite-link">
                                <span class="fa fa-stack fa-2x">
                                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                                  <i class="fa <?php echo $_smarty_tpl->tpl_vars['fav_class']->value;?>
 fa-stack-1x"></i>
                                </span>
                              </a>
                                <?php } else { ?>                                 <?php $_smarty_tpl->_assignInScope('login', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_LOGIN') )));?>
                                <?php $_smarty_tpl->_assignInScope('redirect', ((string)$_smarty_tpl->tpl_vars['this_path']->value)."?follow_type=".((string)$_smarty_tpl->tpl_vars['scope']->value['follow_type'])."&amp;follow_id=".((string)$_smarty_tpl->tpl_vars['scope']->value['follow_id'])."&amp;follow=1");?>
                                
                                <a class="popup-text set-target-value rr-link" id="rr-request" href="#login-dialog" 
                                   data-effect="mfp-3d-unfold" data-panel="#login-container" data-mfp-handler="request_login_handler"
                                   data-target=".login-redirect" data-value="<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
">
                                <span class="fa fa-stack fa-2x">
                                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                                  <i class="fa fa-star-o fa-stack-1x"></i>
                                </span>
                              </a>                                
                                <?php }?>
                              <?php }?>
                              <?php if (($_smarty_tpl->tpl_vars['url']->value)) {?>
                                <?php $_smarty_tpl->_assignInScope('aff_id', $_SESSION['aff_id']);?>
                                <?php if (($_smarty_tpl->tpl_vars['aff_id']->value)) {?>
                                  <?php $_smarty_tpl->_assignInScope('url', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'add_query_var' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'_aid',$_smarty_tpl->tpl_vars['aff_id']->value )));?>
                                <?php }?>
                              
                                <?php $_smarty_tpl->_assignInScope('url_encoded', urlencode($_smarty_tpl->tpl_vars['url']->value));?>
                                <a href="#" title="Share on Facebook" class="fb-loader-popup" data-url="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['url_encoded']->value;?>
">
                                  <span class="fa fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x"></i>
                                  </span>
                                </a>
                                <a href="#" title="Share on Twitter" class="fb-loader-popup" data-url="http://twitter.com/share?url=<?php echo $_smarty_tpl->tpl_vars['url_encoded']->value;?>
">
                                  <span class="fa fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x"></i>
                                  </span>
                                </a>
                                <a href="#" title="Share on Google Plus" class="fb-loader-popup" data-url="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['url_encoded']->value;?>
">
                                  <span class="fa fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-google-plus fa-stack-1x"></i>
                                  </span>
                                </a>
                                <a href="#" title="Share on Pinterest" class="fb-loader-popup" data-url='https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['url_encoded']->value;?>
&amp;media=<?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo $_smarty_tpl->tpl_vars['picture']->value;?>
&amp;description=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
'>
                                  <span class="fa fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-pinterest fa-stack-1x"></i>
                                  </span>
                                </a>
                                <a href="#" title="Share on LinkedIn" class="fb-loader-popup" data-url='https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $_smarty_tpl->tpl_vars['url_encoded']->value;?>
&amp;title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
'>
                                  <span class="fa fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x"></i>
                                  </span>
                                </a>
                                <a href="#" title="Share by email" class="fb-loader-popup" data-url="/share/?url=<?php echo $_smarty_tpl->tpl_vars['url_encoded']->value;?>
"                                
                                    data-template="<?php echo $_smarty_tpl->tpl_vars['scope']->value['mail_template'];?>
" data-controller="<?php echo $_smarty_tpl->tpl_vars['scope']->value['mail_controller'];?>
"
                                    data-obj_type="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_type'];?>
" data-obj_id="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_id'];?>
">
                                  <span class="fa fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-envelope fa-stack-1x"></i>
                                  </span>
                                </a>
                              <?php }?>
                              
                            </nav>
                            <?php }?>
                          </section>
                          <aside class="col-sm-5">
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8027286665c135726896d56_79353911', 'aside');
?>

                          </aside>
                        </article>
                        <article class="row mt40">
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16470107575c135726897440_62452413', 'below');
?>

                          
                                                    <div class="gap"></div>
                          <?php if ((!$_smarty_tpl->tpl_vars['scope']->value['hide_related'])) {?>
                            <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-related-images.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                          <?php } else { ?>
                                                      <?php }?>
                        </article>
                      </div>
                    </div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3874442725c135726898d22_32122694', 'script');
?>

                    

<?php }
/* {block 'top'} */
class Block_913560815c13572688a485_80921602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_913560815c13572688a485_80921602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((!$_smarty_tpl->tpl_vars['object']->value['active'])) {?>
                      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( "This ".((string)$_smarty_tpl->tpl_vars['what']->value)." has not been published and is not visible to the public.","warning" ));?>

                    <?php }?>
                    <?php
}
}
/* {/block 'top'} */
/* {block 'image'} */
class Block_9882487255c13572688c489_15527279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'image' => 
  array (
    0 => 'Block_9882487255c13572688c489_15527279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'image'} */
/* {block 'aside'} */
class Block_8027286665c135726896d56_79353911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'aside' => 
  array (
    0 => 'Block_8027286665c135726896d56_79353911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'aside'} */
/* {block 'below'} */
class Block_16470107575c135726897440_62452413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'below' => 
  array (
    0 => 'Block_16470107575c135726897440_62452413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'below'} */
/* {block 'script'} */
class Block_3874442725c135726898d22_32122694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_3874442725c135726898d22_32122694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
}
}
/* {/block 'script'} */
}
