<?php
/* Smarty version 3.1.32, created on 2018-11-26 01:18:15
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-linking.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfb49d75baf21_13344195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfb61c07d5c1ffdcb29ee5cf74bbb105f6134f7a' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-linking.html',
      1 => 1543195095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-register-managed-account-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-account-linking-form.html' => 2,
  ),
),false)) {
function content_5bfb49d75baf21_13344195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
  
      <?php if (($_smarty_tpl->tpl_vars['site']->value['id'] == 247 && $_smarty_tpl->tpl_vars['user']->value['user_level'] >= @constant('USER_LEVEL_OWNER'))) {?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Register Managed Account</h3>
        </div>
        <div class="panel-body">
          <h3></h3>
          <p>This is an account linked to yours that you manage.</p> 
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-register-managed-account-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>          
        </div>
      </div>      
      <?php }?>
  
      
      <?php if (($_smarty_tpl->tpl_vars['scope']->value['link_requests'])) {?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Pending authorization requests</h3>
        </div>
        <div class="panel-body">
          <p class="text-danger"><i class="fa fa-exclamation-triangle"></i> Action required: The following link request(s) have not yet approved.
          <?php $_smarty_tpl->_assignInScope('rows', array());?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['rows']) ? $_smarty_tpl->tpl_vars['rows']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("Beneficiary User","Verifed","Permissions","Actions");
$_smarty_tpl->_assignInScope('rows', $_tmp_array);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scope']->value['link_requests'], 'link_request');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link_request']->value) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-account-linking-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>      
      <?php }?>
      



    <form id="account_linking_form" class="ajax-submit" data-handler="account-linking-request" method="post" data-reload_link="#account_linking">
      <input name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user_id'];?>
" />
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Request Linked Access to another user account</h3>
        </div>
        <div class="panel-body">
          <p>If the other user approves your request, they can grant you permission to perform certain actions relating to their account. 
             They can also upgrade your account if they have the sufficient permissions.</p>
          <div class="form-group">
            <label for="user">Email address or user ID:</label>
            <input name="target_user" type="text" id="user" class="form-control" value="" placeholder=""/>        
          </div>
          <div class="form-group">
            <label for="message">Optional message:</label>
            <textarea name="message" id="message" class="form-control"></textarea>        
          </div>
        </div>
        <div class="panel-footer">
          <input class="btn btn-primary" id="user_submit" name="commit" type="submit" value="Send Request" />
        </div>
      </div>
    </form> 
      
      <?php if (($_smarty_tpl->tpl_vars['scope']->value['linked_users'])) {?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Linked Access granted to you</h3>
        </div>
        <div class="panel-body">
          <p>The following users have given you permission to manage their account (<i class="fa fa-check text-success"></i>) 
             or you have requested permission to manage their account, but it is not yet approved.(<i class="fa fa-times text-danger"></i>).</p>
          <?php $_smarty_tpl->_assignInScope('rows', array());?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['rows']) ? $_smarty_tpl->tpl_vars['rows']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("Host User","Verifed","Permissions","Actions");
$_smarty_tpl->_assignInScope('rows', $_tmp_array);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scope']->value['linked_users'], 'link_request');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link_request']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['link_request']->value['id']);?>
            <?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['link_request']->value['host_user_id']);?>
            <?php $_smarty_tpl->_assignInScope('name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( smarty_modifier_truncate(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'username' ][ 0 ], array( $_smarty_tpl->tpl_vars['uid']->value )),30),$_smarty_tpl->tpl_vars['uid']->value )));?>
            <?php $_smarty_tpl->_assignInScope('link', "<a href='/profile/".((string)$_smarty_tpl->tpl_vars['uid']->value)."'>".((string)$_smarty_tpl->tpl_vars['name']->value)."</a>");?>
            <?php $_smarty_tpl->_assignInScope('actions', '');?>
            <?php if ((!$_smarty_tpl->tpl_vars['link_request']->value['verified'])) {?>
              <?php $_smarty_tpl->_assignInScope('actions', "
                     <a class='btn btn-danger btn-sm' href='#' id='delete-link_request-".((string)$_smarty_tpl->tpl_vars['id']->value)."' 
                       data-toggle='confirmation' data-on-confirm='delete_object' 
                       data-obj_type='user_map' data-id='".((string)$_smarty_tpl->tpl_vars['id']->value)."' data-reload_link='#account_linking' 
                       rel='tooltip' data-placement='top' title='Really?'> <i class='fa fa-times'></i> Delete Request
                     </a>
              ");?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('perms', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'permissions' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_request']->value['permissions'] )));?>
            <?php $_smarty_tpl->_assignInScope('row', array($_smarty_tpl->tpl_vars['link']->value,call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'checkmark' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_request']->value['verified'] )),$_smarty_tpl->tpl_vars['perms']->value,$_smarty_tpl->tpl_vars['actions']->value));?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['rows']) ? $_smarty_tpl->tpl_vars['rows']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['row']->value;
$_smarty_tpl->_assignInScope('rows', $_tmp_array);?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'table' ][ 0 ], array( $_smarty_tpl->tpl_vars['rows']->value,array("class"=>"table table-bordered table-striped table-booking-history") ));?>

        </div>
        <div class="panel-footer">
        </div>
      </div>      
      <?php }?>

      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Grant Linked Access to another user account</h3>
        </div>
        <div class="panel-body">        
          <p>The other user will immediately be able to perform the actions for which you have granted permission.</p>
          <?php $_smarty_tpl->_assignInScope('link_request', 0);?>
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-account-linking-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
      </div>
  
      <?php if (($_smarty_tpl->tpl_vars['scope']->value['auth_users'])) {?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Authorized users</h3>
        </div>
        <div class="panel-body">
          <p>The following have been granted permission to manage your account. (<i class="fa fa-check text-success"></i>)</p>
          <?php $_smarty_tpl->_assignInScope('rows', array());?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['rows']) ? $_smarty_tpl->tpl_vars['rows']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("Beneficiary User","Verifed","Permissions","Actions");
$_smarty_tpl->_assignInScope('rows', $_tmp_array);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scope']->value['auth_users'], 'link_request');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link_request']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['link_request']->value['id']);?>
            <?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['link_request']->value['user_id']);?>
            <?php $_smarty_tpl->_assignInScope('name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( smarty_modifier_truncate(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'username' ][ 0 ], array( $_smarty_tpl->tpl_vars['uid']->value )),30),$_smarty_tpl->tpl_vars['uid']->value )));?>

            <?php $_smarty_tpl->_assignInScope('actions', "
                   <button class='btn btn-success btn-sm' data-toggle='modal' data-target='#editLinking-".((string)$_smarty_tpl->tpl_vars['id']->value)."'><i class='fa fa-pencil-square'></i> Edit</button>            
                   <a class='btn btn-danger btn-sm edit-permissions' href='#' id='delete-link_auth-".((string)$_smarty_tpl->tpl_vars['id']->value)."' 
                     data-toggle='confirmation' data-on-confirm='delete_object' 
                     data-obj_type='user_map' data-id='".((string)$_smarty_tpl->tpl_vars['id']->value)."' data-reload_link='#account_linking' 
                     rel='tooltip' data-placement='top' title='Really?'> <i class='fa fa-times'></i> Delete
                   </a>");?>
            <?php $_smarty_tpl->_assignInScope('link', "<a href='/profile/".((string)$_smarty_tpl->tpl_vars['uid']->value)."'>".((string)$_smarty_tpl->tpl_vars['name']->value)."</a>");?>
            <?php $_smarty_tpl->_assignInScope('perms_view', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'permissions' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_request']->value['permissions'] )));?>
            <?php $_smarty_tpl->_assignInScope('row', array($_smarty_tpl->tpl_vars['link']->value,call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'checkmark' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_request']->value['verified'] )),$_smarty_tpl->tpl_vars['perms_view']->value,$_smarty_tpl->tpl_vars['actions']->value));?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['rows']) ? $_smarty_tpl->tpl_vars['rows']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['row']->value;
$_smarty_tpl->_assignInScope('rows', $_tmp_array);?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'table' ][ 0 ], array( $_smarty_tpl->tpl_vars['rows']->value,array("class"=>"table table-bordered table-striped table-booking-history") ));?>

        </div>
        <div class="panel-footer">
        </div>
      </div>      
      <?php }?>


                    
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scope']->value['auth_users'], 'link_request');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link_request']->value) {
?>            
        <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['link_request']->value['id']);?>
        <?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['link_request']->value['user_id']);?>
        <?php $_smarty_tpl->_assignInScope('name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( smarty_modifier_truncate(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'username' ][ 0 ], array( $_smarty_tpl->tpl_vars['uid']->value )),30),$_smarty_tpl->tpl_vars['uid']->value )));?>
        <?php $_smarty_tpl->_assignInScope('perms', json_decode($_smarty_tpl->tpl_vars['link_request']->value['permissions'],"true"));?>
        <!-- Modal -->
          <div class="modal fade" id="editLinking-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form id="linking_edit_form-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="ajax-submit" data-handler="account-linking-request" method="post" data-reload_link="#account_linking">        
                  <input name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['link_request']->value['id'];?>
" />
                  <input name="host_user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['link_request']->value['host_user_id'];?>
" />
                  <input name="target_user" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" />
                  <input name="verified" type="hidden" value="1" />
              
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Permissions for <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">            
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value['link_permissions'], 'p', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'p1', false, 'k1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k1']->value => $_smarty_tpl->tpl_vars['p1']->value) {
?>
                      <div class="col-xs-12">
                        <div class="form-group">
                          <input name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['k1']->value;?>
" type="checkbox" value="1" <?php if (($_smarty_tpl->tpl_vars['perms']->value[$_smarty_tpl->tpl_vars['k']->value] == $_smarty_tpl->tpl_vars['k1']->value)) {?>checked<?php }?>> &nbsp; <label><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['k1']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
: </label> <?php echo $_smarty_tpl->tpl_vars['p1']->value;?>

                        </div>
                      </div>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>          
                  </div>
                  <div class="modal-footer">
                    <input type="submit" onclick="javascript:$('#linking_edit_form-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').submit();console.log('submitted');" class="btn btn-primary" value="Save changes">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
