<?php
/* Smarty version 3.1.32, created on 2018-10-10 10:42:00
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-password.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdd778f05a05_40883400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460f7d2b46567120d76814100568cddbd13c3ca8' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-password.html',
      1 => 1539168120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdd778f05a05_40883400 (Smarty_Internal_Template $_smarty_tpl) {
?>            <form class="ajax-submit password-form" method="post" data-handler="edit-password" data-toggle="validator" >
              <?php if (($_smarty_tpl->tpl_vars['user']->value['auto_password'])) {?>
              <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"/>
              <h4>Set Password</h4>
              <p>This will allow you to login with your username (<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
) and password, in addition to <?php echo $_smarty_tpl->tpl_vars['scope']->value['profile_list'];?>
</p>
              <?php } elseif (($_smarty_tpl->tpl_vars['scope']->value['reset'])) {?>
              <h4>Reset Password</h4>
              <p>Please enter a new password below using at least one UPPERCASE letter, one lowercase letter, and one number. Minimum 8 characters.</p>
              <input type="hidden" name="password_reset_id" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['reset']['id'];?>
"/>
              <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['reset']['user_id'];?>
"/>
              <input type="hidden" name="guid" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['reset']['guid'];?>
"/>
              <?php } else { ?>              
              <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"/>
                            <h4>Change Password</h4>
              <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                <label>Current Password</label>
                <input name="old_password" class="form-control" type="password" required />
              </div>
              <?php }?>
              <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                <label>New Password</label>
                <input name="password1" id="password1" class="form-control" type="password" data-minlength="8" required/>
                <span class="help-block">Minimum 8 characters</span>
              </div>
              <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                <label>Repeat Password</label>
                <input name="password2" class="form-control" type="password" data-minlength="7" data-match="#password1" required
                  data-match-error="Whoops, these don't match" />
                  <div class="help-block with-errors"></div>
              </div>
              <hr />
              <input class="btn btn-primary" type="submit" value="Save" />
            </form>              


<?php }
}
