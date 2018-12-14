<?php
/* Smarty version 3.1.32, created on 2018-12-14 05:10:51
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-login-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c133b5b8f0c73_58866773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1816163f8ee319ffb338ad8934f34dbb4a7c47f' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-login-form.html',
      1 => 1544764251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c133b5b8f0c73_58866773 (Smarty_Internal_Template $_smarty_tpl) {
?>

          <form class="ajax-submit signin-form enter-to-submit" method="get" data-handler="user-login">
            <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
              <label><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'username or email','c' ));?>
</label>
              <input name="username" class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
            </div>
            <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
              <label><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'password','c' ));?>
</label>
              <input name="password" class="form-control" type="password" placeholder="my secret password" />
            </div>
            <input name="redirect" type="hidden" class="form-control login-redirect" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'remove_query_var' ][ 0 ], array( $_smarty_tpl->tpl_vars['get']->value['ref'],'act' ));?>
" />
            <input name="uri" type="hidden" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'remove_query_var' ][ 0 ], array( $_smarty_tpl->tpl_vars['this_url']->value,'act' ));?>
" />
            <input class="btn btn-primary" type="submit" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'log in','c',0 ));?>
" />
            <div class='gap gap-small'></div>                      
          </form>


<?php }
}
