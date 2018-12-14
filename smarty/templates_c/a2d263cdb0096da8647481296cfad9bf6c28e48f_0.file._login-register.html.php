<?php
/* Smarty version 3.1.32, created on 2018-12-14 05:10:51
  from '/web/sites/afr-app-gallery/smarty/templates/components/_login-register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c133b5b8eb3f4_11210465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2d263cdb0096da8647481296cfad9bf6c28e48f' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_login-register.html',
      1 => 1544764251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-register-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html' => 1,
  ),
),false)) {
function content_5c133b5b8eb3f4_11210465 (Smarty_Internal_Template $_smarty_tpl) {
?>  
    <div class="container" id="login-register-container">
      <div class="row" data-gutter="60">
        <div class="col-md-4 toggled-div" id="login-container">
          <h3><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'Login',"c" ));?>
</h3>
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_REGISTER') ));
echo $_smarty_tpl->tpl_vars['query_string']->value;?>
" class="toggle-div" data-target="#register-container">New To <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
?</a><br>
          <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_PASSWORD') ));
echo $_smarty_tpl->tpl_vars['query_string']->value;?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'Forgot Password',"t" ));?>
?</a>          
        </div>
        <div class="col-md-4 hidden toggled-div" id="register-container">
          <h3>New To <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
?</h3>
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-register-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>          
          <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_LOGIN') ));
echo $_smarty_tpl->tpl_vars['query_string']->value;?>
" class="toggle-div" data-target="#login-container"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'Already registered',"t" ));?>
?</a>
        </div>
      </div>
      <div class='gap gap-small'></div>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
  

<?php }
}
