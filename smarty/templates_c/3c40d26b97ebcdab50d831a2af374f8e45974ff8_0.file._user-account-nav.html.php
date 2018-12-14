<?php
/* Smarty version 3.1.32, created on 2018-12-06 11:31:19
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c090887292e15_43065036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c40d26b97ebcdab50d831a2af374f8e45974ff8' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-nav.html',
      1 => 1544095879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c090887292e15_43065036 (Smarty_Internal_Template $_smarty_tpl) {
?>                                
                        <?php $_smarty_tpl->_assignInScope('p', ((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_ACCOUNT') )))).((string)$_smarty_tpl->tpl_vars['scope']->value['user_id']));?>
                        <ul class="list user-profile-nav">
                          <?php if (($_smarty_tpl->tpl_vars['scope']->value['auth_edit_account'])) {?>
                          <li class="class-filter active"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/notifications" id="account_notifications_link"><i class="fa fa-bell"></i>Notifications</a></li>
                            <?php if (($_smarty_tpl->tpl_vars['site']->value['property_site'] && $_smarty_tpl->tpl_vars['user']->value['user_level'] >= @constant('USER_LEVEL_OWNER'))) {?>
                            <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/payout" id="account_payout_link"><i class="fa fa-bank"></i>Payout Preferences</a></li>
                            <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/transactions" id="account_transactions_link"><i class="fa fa-bank"></i>Transactions Hisotry</a></li-->
                            <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/privacy" id="account_privacy_link"><i class="fa fa-key"></i>Privacy</a></li>
                            -->
                            <?php }?>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/password" id="account_password_link"><i class="fa fa-key"></i>Password</a></li>
                          
                          <?php if (($_smarty_tpl->tpl_vars['user']->value['user_level'] >= @constant('USER_LEVEL_ADMIN'))) {?>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/linking" id="account_linking"><i class="fa fa-chain"></i>Link Account</a></li>
                          <li class="class-filter"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/security" id="account_security_link"><i class="fa fa-lock"></i>Security</a></li>
                          <?php }?>
                          <?php }?>
                        </ul>

<?php }
}
