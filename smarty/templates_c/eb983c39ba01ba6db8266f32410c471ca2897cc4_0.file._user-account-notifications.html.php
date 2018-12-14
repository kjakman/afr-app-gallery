<?php
/* Smarty version 3.1.32, created on 2018-12-06 11:31:19
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-notifications.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c09088729c802_46873724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb983c39ba01ba6db8266f32410c471ca2897cc4' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-notifications.html',
      1 => 1544095879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c09088729c802_46873724 (Smarty_Internal_Template $_smarty_tpl) {
?>  
    <form id="notification_settings_form" method="post" class="ajax-submit" handler="save">
      <input name="obj_type" type="hidden" value="user_profile" />
      <input name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['profile_id'];?>
" />
      <input name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['id'];?>
" />

      <div class="panel panel-default">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Mobile Notifications / Text Messages</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-4">
                <h5>Mobile Phone</h5>
              </div>
              <div class="col-sm-8">
          
              <?php if ($_smarty_tpl->tpl_vars['scope']->value['user']['phone_verified']) {?>
                <label class="checkbox" for="sms_enabled">
                  <input id="sms_enabled" name="sms_enabled" type="checkbox" value="1" />
                  <strong>Enable Text Message Notifications</strong>
                </label>
                Receive SMS notifications to: <?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['phone_verified'];?>
 <i class="fa fa-check text-success"></i> Verified
                <a href="#">Modify phone numbers</a>                            
              <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value['user']['phone']) {?>
                <p><i class="fa fa-times text-danger"></i> <?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['phone'];?>
 is not verified. <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_EDIT_PROFILE') ));?>
/verification">Verify Phone Number</a></p>
              <?php } else { ?>
                <b>No mobile phone number on file.</b> &nbsp; <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_EDIT_PROFILE') ));?>
/settings">Add a phone number now.</a>            
              <?php }?>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-4">
                <h5>Notify me when:</h5>
              </div>
              <div class="col-sm-8">
                <label class="checkbox" for="user_txtmsg_for_messaging">
                  <input id="user_txtmsg_for_messaging" name="notify_message" type="checkbox" value="1" />
                  I receive a message from another person on <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
.
                </label>

                <label class="checkbox" for="txtmsg_for_account_changes">
                  <input id="user_txtmsg_for_account_changes" name="notify_change" type="checkbox" value="true" />
                  Changes are made to my <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
 account or listing
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-default mt20">
          <div class="panel-heading">
            <h3 class="panel-title">Email settings</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-4">
                <h3>I want to receive:</h3>
                <p>You can disable these at any time.</p>
              </div>
              <div class="col-sm-8">
                <label class="checkbox" for="user_profile_info_receive_promotional_email">
                  <input id="user_profile_info_receive_promotional_email" name="promotion_optin" type="checkbox" value="1" />
                  General promotions, updates, news about <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
 or general promotions for partner campaigns and services, user surveys, inspiration, and love from <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
.
                </label>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <input class="btn btn-primary" id="user_submit" name="commit" type="submit" value="Save" />
          </div>
        </div>
      </div>
    </form> 


<?php }
}
