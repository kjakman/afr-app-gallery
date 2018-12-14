<?php
/* Smarty version 3.1.32, created on 2018-12-08 09:39:03
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0b91379fa740_11169503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8d044d1428319683cceb4d0ef09014e520c9818' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-nav.html',
      1 => 1544261943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0b91379fa740_11169503 (Smarty_Internal_Template $_smarty_tpl) {
?>
                        <?php $_smarty_tpl->_assignInScope('p', ((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_EDIT_PROFILE') )))).((string)$_smarty_tpl->tpl_vars['scope']->value['obj_id']));?>
                        <ul class="list user-profile-nav">
                          <li class="class-filter active"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/overview"></i>Overview</a></li>
                        <?php if (($_smarty_tpl->tpl_vars['scope']->value['auth_edit_user'])) {?>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/settings"></i>Basic Info</a></li>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/verification" id="user-verification-link"></i>Verification</a></li>                       

                          <?php if (($_smarty_tpl->tpl_vars['site']->value['property_site'])) {?>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/history"></i>My trips</a></li>
                          <?php if (($_smarty_tpl->tpl_vars['user']->value['user_level'] >= @constant('USER_LEVEL_OWNER'))) {?><li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/bookings"></i>My Bookings</a></li><?php }?>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/wishlist"></i>Wishlist</a></li>                       
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/inbox"></i>Inbox</a></li>
                          <?php }?>
                          
                        <?php if (($_smarty_tpl->tpl_vars['site']->value['gallery_site'])) {?>
                          <?php if ((call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'has_role' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['user'],@constant('USER_ROLE_ARTIST') )))) {?>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/artist"></i>CV</a></li>                       
                          <?php }?>
                          <?php if ((0 && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'has_role' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['user'],@constant('USER_ROLE_CURATOR') )))) {?>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/gallery"></i>Gallery</a></li>                       
                          <?php }?>
                          <?php if ((0 && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'has_role' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['user'],@constant('USER_ROLE_COLLECTOR') )))) {?>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/collector"></i>Collector</a></li>                       
                          <?php }?>
                        <?php }?>
                          <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/photos"></i>My Travel Photos</a>
                          </li-->
                        <?php } else { ?>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/inbox"></i>Send a message</a></li>
                        <?php }?>
                        </ul>

<?php }
}
