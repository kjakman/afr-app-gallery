<?php
/* Smarty version 3.1.32, created on 2018-12-14 05:10:51
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-register-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c133b5b8fc131_84668399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6654f831c86fb673c2b065124ce134781a585dab' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-register-form.html',
      1 => 1544764251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c133b5b8fc131_84668399 (Smarty_Internal_Template $_smarty_tpl) {
?>          <form class="ajax-submit signup-form" method="get" data-handler="user-register">
            <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
              <label>First Name</label>
              <input name="first_name" class="form-control" placeholder="e.g. John" type="text" />
            </div>
            <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
              <label>Last Name</label>
              <input name="last_name" class="form-control" placeholder="e.g. Doe" type="text" />
            </div>
            <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon"></i>
              <label>Email</label>
              <input name="username" class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
            </div>
            <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
              <label>Password</label>
              <input name="password1" class="form-control" type="password" placeholder="my secret password" />
            </div>
            <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
              <label>Repeat Password</label>
              <input name="password2" class="form-control" type="password" placeholder="my secret password" />
            </div>
            <input class="btn btn-primary" type="submit" value="Sign up for <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
" />
            <div class='gap gap-small'></div>                      
            <input name="redirect" type="hidden" class="form-control login-redirect" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'remove_query_var' ][ 0 ], array( $_smarty_tpl->tpl_vars['get']->value['ref'],'act' ));?>
" />
            <input name="uri" type="hidden" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'remove_query_var' ][ 0 ], array( $_smarty_tpl->tpl_vars['this_url']->value,'act' ));?>
" />
            <input name="user_terms" type="hidden" value="1" />By signing up, I agree to the <a class='fancybox-noscroll fancybox.ajax' href='ajax.php?oper=load-page-content&amp;site_id=<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
&amp;page_type=1005'>Terms &amp; Conditions</a>
            <div class='gap gap-small'></div>                      
            <input name="site_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" />
          </form>

<?php }
}
