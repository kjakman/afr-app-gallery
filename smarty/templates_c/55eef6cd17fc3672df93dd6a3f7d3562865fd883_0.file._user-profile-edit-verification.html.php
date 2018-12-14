<?php
/* Smarty version 3.1.32, created on 2018-12-06 11:31:12
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-verification.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c09088011bf34_22631939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55eef6cd17fc3672df93dd6a3f7d3562865fd883' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-verification.html',
      1 => 1544095872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-verification-form.html' => 2,
  ),
),false)) {
function content_5c09088011bf34_22631939 (Smarty_Internal_Template $_smarty_tpl) {
?>                      <h4>Verification</h4>
                      <div class="form-group">
                        <label>Email: <?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['email_address'];?>
</label>
                        <?php if ($_smarty_tpl->tpl_vars['scope']->value['profile']['email_address']) {?>
                          <?php $_smarty_tpl->_assignInScope('type', 'email');?>
                          <?php if ($_smarty_tpl->tpl_vars['scope']->value['profile']['email_address'] == $_smarty_tpl->tpl_vars['scope']->value['profile']['email_verified']) {?>
                          <i class="fa fa-check fa-2x text-success"></i> Verified
                          <?php } else { ?>                          
                          <a href="#" class="btn btn-success verify-link" data-site_id="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" data-user_id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" data-profile_id="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile_id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" data-target="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['email_address'];?>
">
                            <i class="fa fa-envelope-o"></i> Verify <?php echo $_smarty_tpl->tpl_vars['type']->value;?>

                          </a>
                          <div class="user-verification-form hide">
                          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-verification-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                          </div>
                          <?php }?>
                        <?php } else { ?>
                          No email address entered. Click <a href="#email_address">here</a>.
                        <?php }?>
                      </div>
                      <div class="form-group">
                        <label>Phone Number: <?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['phone'];?>
</label>
                        <?php if ($_smarty_tpl->tpl_vars['scope']->value['profile']['phone']) {?>
                          <?php $_smarty_tpl->_assignInScope('type', 'phone');?>
                          <?php if ($_smarty_tpl->tpl_vars['scope']->value['profile']['phone'] == $_smarty_tpl->tpl_vars['scope']->value['profile']['phone_verified']) {?>
                          <i class="fa fa-check fa-2x text-success"></i> Verified
                          <?php } else { ?>
                          <a href="" class="btn btn-success verify-link" data-site_id="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" data-user_id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" data-profile_id="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile_id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" data-target="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['phone'];?>
">
                            <i class="fa fa-phone"></i> Verify <?php echo $_smarty_tpl->tpl_vars['type']->value;?>

                          </a>
                          <div class="user-verification-form hide">
                          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-verification-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                          </div>
                          
                          <?php }?>
                        <?php } else { ?>
                          No phone number entered. Click <a href="#phone">here</a>.
                        <?php }?>
                      </div>

                                            
                      <?php $_smarty_tpl->_assignInScope('providers', $_smarty_tpl->tpl_vars['scope']->value['provider_keys']);?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers']->value, 'provider_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['provider_id']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('provider_name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['provider_id']->value,"provider","name" )));?>
                        <?php $_smarty_tpl->_assignInScope('provider_key', mb_strtolower($_smarty_tpl->tpl_vars['provider_name']->value, 'UTF-8'));?>
                        <?php $_smarty_tpl->_assignInScope('social_key', $_smarty_tpl->tpl_vars['provider_key']->value == 'google' ? "google-plus" : $_smarty_tpl->tpl_vars['provider_key']->value);?>
                      <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
</label>
                        <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['provider_profiles'][$_smarty_tpl->tpl_vars['provider_id']->value]);?>
                        <?php if (($_smarty_tpl->tpl_vars['profile']->value)) {?> 
                        <i class="fa fa-check fa-2x text-success"></i> Verified
                          <?php if (($_smarty_tpl->tpl_vars['profile']->value['url_profile'])) {?>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['url_profile'];?>
" target="social">View Profile</a>
                          <?php }?>
                        <?php } else { ?>
                        <a href="?provider_id=<?php echo $_smarty_tpl->tpl_vars['provider_id']->value;?>
" class="btn btn-social btn-<?php echo $_smarty_tpl->tpl_vars['social_key']->value;?>
" data-site_id="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" data-user_id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" data-profile_id="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile_id'];?>
" data-type="social" data-target="<?php echo $_smarty_tpl->tpl_vars['provider_key']->value;?>
">
                          <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['provider_key']->value;?>
"></i> Verify
                        </a>                        
                        <?php }?>
                      </div> 
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      
                      <div class="gap gap-small"></div>
                      <h4>Passport or ID</h4>
                      <?php echo $_smarty_tpl->tpl_vars['scope']->value['passport_uploader'];?>

                


<?php }
}
