<?php
/* Smarty version 3.1.32, created on 2018-11-25 10:53:32
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-password-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa7f2c39ea09_60893016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7af9bd4e09c27fe24639a314f0b313c411a8d21' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-password-form.html',
      1 => 1543143212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa7f2c39ea09_60893016 (Smarty_Internal_Template $_smarty_tpl) {
?>          <form class="ajax-submit password-form" method="post" data-handler="reset-password">
            <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
              <label>Username or email</label>
              <input name="username_or_email" class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" value="<?php echo $_GET['u'];?>
"/>
            </div>
            <input name="site_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" id="site_id">
            <input class="btn btn-primary" type="submit" value="Send" />
            <div class='gap gap-small'></div>                      
          </form>


<?php }
}
