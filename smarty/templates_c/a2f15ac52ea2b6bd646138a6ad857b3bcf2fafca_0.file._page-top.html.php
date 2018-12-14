<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:01:40
  from '/web/sites/afr-app-gallery/smarty/templates/components/_page-top.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1355548aab60_23354987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2f15ac52ea2b6bd646138a6ad857b3bcf2fafca' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_page-top.html',
      1 => 1544770900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_login-register.html' => 1,
  ),
),false)) {
function content_5c1355548aab60_23354987 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <div class="header-top navbar navbar-default <?php echo $_smarty_tpl->tpl_vars['nav_class']->value;?>
">
        <div class="container">
          <!--div class="row"-->
            <!--div class="col-xs-12"-->
              
            <!--/div>
            <div class="col-sm-3 col-sm-offset-2">
            </div>
            <div class="col-sm-4"-->

              <div class="top-user-area clearfix">
                <div class='pull-left mr20'>
                  <a class="logo" href="/">
                  <?php if (($_smarty_tpl->tpl_vars['site']->value['logo_small'])) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['logo_small'];?>
" alt="$site.name" title="Image Title" height="48" style="position:relative;top:-5px;"/>
                                      <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>

                  <?php }?>
                  </a>
                </div>
              
                <ul class="top-user-area-list list list-horizontal list-border">
                  <?php if (($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
                  <li class="top-user-area-avatar">
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_PROFILE') ));
echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><img class="origin round" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'userphoto' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value,'small' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['user']->value['full_name'];?>
" /><?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
</a>
                  </li>
                  <li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'remove_query_var' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'replace_query_var' ][ 0 ], array( $_smarty_tpl->tpl_vars['this_url']->value,'act','logout' )),'provider' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'Sign Out' ));?>
</a></li>
                  <?php } else { ?>
                  <li><a class="popup-text" href="#login-dialog" data-effect="mfp-3d-unfold">Log In / Sign Up</a></li>                  
                  <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog">                      
                    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_login-register.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  </div>
                  <?php }?>
                  <?php if ((!$_smarty_tpl->tpl_vars['admin_template']->value)) {?>
                  <li><a href="/inbox/" role="button"><i class="fa fa-envelope-o"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['global']->value['message_count'],"0" ));?>
</a></li>
                  <li><a href="http://www.ta5te.com"  target="_demo" class="btn btn-primary btn-md" role="button">Demo</a></li>
                  <?php }?>
                </ul>
              </div>
            <!--/div-->
          <!--/div-->
        </div>
      </div>


<?php }
}
