<?php
/* Smarty version 3.1.32, created on 2018-11-26 01:18:15
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-register-managed-account-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfb49d75c0aa0_14590232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352cdda3a657fd570e050aca287eed19ff7f07f6' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-register-managed-account-form.html',
      1 => 1543195095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfb49d75c0aa0_14590232 (Smarty_Internal_Template $_smarty_tpl) {
?>          <form class="ajax-submit signup-form" method="get" data-handler="user-register">

            <div class="row">          
              <div class="form-group form-group-icon-left col-sm-6"><i class="fa fa-user input-icon"></i>
                <label>First Name</label>
                <input name="first_name" class="form-control" placeholder="e.g. John" type="text" />
              </div>
              <div class="form-group form-group-icon-left col-sm-6"><i class="fa fa-user input-icon"></i>
                <label>Last Name</label>
                <input name="last_name" class="form-control" placeholder="e.g. Doe" type="text" />
              </div>
            </div>
            <div class="row">                        
              <div class="form-group form-group-icon-left col-sm-6"><i class="fa fa-envelope input-icon"></i>
                <label>Username or Login Email</label>
                <input name="username" class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
              </div>
              <div class="form-group form-group-icon-left col-sm-6"><i class="fa fa-envelope input-icon"></i>
                <label>Correspondence Email (if different)</label>
                <input name="email_address" class="form-control" placeholder="e.g. peter@gmail.com" type="text" />
              </div>
            </div>
            <div class="row">                        
              <div class="form-group form-group-icon-left col-sm-6"><i class="fa fa-lock input-icon"></i>
                <label>Password</label>
                <input name="password1" class="form-control" type="password" placeholder="my secret password" />
              </div>
              <div class="form-group form-group-icon-left col-sm-6"><i class="fa fa-lock input-icon"></i>
                <label>Repeat Password</label>
                <input name="password2" class="form-control" type="password" placeholder="my secret password" />
              </div>
            </div>
              
            <input class="btn btn-primary" type="submit" value="Create Account" />
            <div class='gap gap-small'></div>                      
            <input name="site_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" />
            <input name="parent_user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
          </form>

<?php }
}
