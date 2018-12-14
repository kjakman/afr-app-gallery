<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:14:02
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-base.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13583a4eb693_07140786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56ca23e1b557503e1e0565698cbb6706b706e2f4' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-base.html',
      1 => 1544771642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-related-images.html' => 1,
  ),
),false)) {
function content_5c13583a4eb693_07140786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_assignInScope('url', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['url'],$_smarty_tpl->tpl_vars['this_url']->value )));?>

<?php if (($_smarty_tpl->tpl_vars['user']->value['user_level'] >= @constant('USER_LEVEL_ADMIN'))) {?>
          <?php if (($_smarty_tpl->tpl_vars['user']->value['id'] != $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'] && $_smarty_tpl->tpl_vars['scope']->value['auth_login'])) {?>
          <div class="mb20">
            <form class="ajax-submit" data-handler="backdoor-login">
              <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'];?>
">
              <button type="submit" class="btn btn-success"><i class="fa fa-key"></i> Log in as <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'username' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'] ));?>
</button>
            </form>
          </div>
          <?php }?>
          
          <?php if (($_smarty_tpl->tpl_vars['scope']->value['auth_edit_user'] && !$_smarty_tpl->tpl_vars['scope']->value['backend'])) {?>
          <div class="mb20">
            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_EDIT_PROFILE') ));
echo $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'];?>
/" class="btn btn-success"><i class="fa fa-pencil-square"></i> Edit</a>
          </div>

          <?php }?>

<?php }?>


<div class="container">
  <div class="row">
    <div class="col-lg-5 col-md-4 col-sm-3">
      <div id="user" class="mb20">
        <div>
          <div class="mb10" id="user-media-container">
            <div id="slideshow" class="slideshow">
              <div class="slideshow-preload"></div>
              <ul class="slideshow-images list">
                <li class="media-photo media-photo-block active profilephoto">               
                  <img class="img-responsive" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'userphoto' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile'],'big' ));?>
" alt="" width="" height="">
                </li>
              </ul>
            </div>
          </div>
                    
          <?php if (($_smarty_tpl->tpl_vars['url']->value)) {?>
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
            <a href="#" title="Share on Digg" class="fb-loader-popup" data-url="http://www.digg.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['url_encoded']->value;?>
">
              <span class="fa fa-stack fa-2x">
                <i class="fa fa-circle-thin fa-stack-2x"></i>
                <i class="fa fa-digg fa-stack-1x"></i>
              </span>
            </a>
            <a href="#" title="Share by email" class="fb-loader-popup" data-url="/share/?url=<?php echo $_smarty_tpl->tpl_vars['url_encoded']->value;?>
">
              <span class="fa fa-stack fa-2x">
                <i class="fa fa-circle-thin fa-stack-2x"></i>
                <i class="fa fa-envelope fa-stack-1x"></i>
              </span>
            </a>
          <?php }?>
            
        </div>
      </div>   
    </div>

    <div class="col-lg-7 col-md-8 col-sm-9">
      <div class="row mb20">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12263619285c13583a4e77d0_35172058', 'profile');
?>

      </div>
    </div>
    <div class="gap gap-small"></div>
   <div>    
    <div class="mt10 row container profileinfo">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13641625235c13583a4e7f23_75250733', 'description');
?>
    
    </div>

  
    <?php $_smarty_tpl->_assignInScope('artist_id', $_smarty_tpl->tpl_vars['scope']->value['artist_id']);?>    
    <?php $_smarty_tpl->_assignInScope('curator_id', $_smarty_tpl->tpl_vars['scope']->value['curator_id']);?>
    <?php if (($_smarty_tpl->tpl_vars['curator_id']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('curator_name', $_smarty_tpl->tpl_vars['profile']->value['display_name']);?>
    <?php } elseif (($_smarty_tpl->tpl_vars['artist_id']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('artist_name', $_smarty_tpl->tpl_vars['profile']->value['display_name']);?>
    <?php }?>
    
    <?php if (($_smarty_tpl->tpl_vars['show_related']->value)) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-related-images.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
   </div> 
  </div>
</div>

<?php }
/* {block 'profile'} */
class Block_12263619285c13583a4e77d0_35172058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profile' => 
  array (
    0 => 'Block_12263619285c13583a4e77d0_35172058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'profile'} */
/* {block 'description'} */
class Block_13641625235c13583a4e7f23_75250733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description' => 
  array (
    0 => 'Block_13641625235c13583a4e7f23_75250733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'description'} */
}
