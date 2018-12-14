<?php
/* Smarty version 3.1.32, created on 2018-11-26 01:18:15
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-linking-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfb49d761adf4_64377487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '690c0a697c2c48e58f857ab4d241ee45116f2378' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-linking-form.html',
      1 => 1543195095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfb49d761adf4_64377487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>          
          <form class="ajax-submit" data-handler="account-linking-request" method="post" data-reload_link="#account_linking">
            <?php if (($_smarty_tpl->tpl_vars['link_request']->value)) {?>
              <?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['link_request']->value['user_id']);?>
              <?php $_smarty_tpl->_assignInScope('name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( smarty_modifier_truncate(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'username' ][ 0 ], array( $_smarty_tpl->tpl_vars['uid']->value )),30),$_smarty_tpl->tpl_vars['uid']->value )));?>
              <?php $_smarty_tpl->_assignInScope('link', "<a href='/profile/".((string)$_smarty_tpl->tpl_vars['uid']->value)."'>".((string)$_smarty_tpl->tpl_vars['name']->value)."</a>");?>
              <h3>Request from <?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</h3>
              <input name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['link_request']->value['id'];?>
" />
              <input name="host_user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['link_request']->value['host_user_id'];?>
" />
              <input name="target_user" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" />
              <input name="verified" type="hidden" value="1" />
            <?php } else { ?>
            <input name="host_user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user_id'];?>
" />
            <div class="form-group">
              <label for="target_user">Email address or user ID:</label>
              <input name="target_user" type="text" class="form-control" value="" placeholder=""/>        
            </div>
            <div class="form-group">
              <label for="message">Optional message:</label>
              <textarea name="message" class="form-control"></textarea>        
            </div>
            <?php }?>
            
            <?php if (($_smarty_tpl->tpl_vars['config']->value['link_permissions'])) {?>
            
              <h4>Permissions</h4>
              
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
" type="checkbox" value="1"> &nbsp; <label><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['k1']->value);?>
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
            <?php }?>
            
            <?php if (($_smarty_tpl->tpl_vars['link_request']->value)) {?>
              <button type="submit" class="btn btn-success" name="accept"><i class="fa fa-check"></i> Approve Link Request</button>
              <a class="btn btn-danger btn-sm" href="#" id="delete-<?php echo $_smarty_tpl->tpl_vars['source']->value['id'];?>
" 
                data-toggle="confirmation" data-on-confirm="delete_object" 
                data-obj_type="user_map" data-id="<?php echo $_smarty_tpl->tpl_vars['link_request']->value['id'];?>
" data-reload_link="#account_linking" 
                rel="tooltip" data-placement="top" title="Really?"> <i class="fa fa-times"></i> Deny Request
              </a>
            <?php } else { ?>
              <button type="submit" class="btn btn-success" name="accept"><i class="fa fa-check"></i> Link Account Now</button>
            <?php }?>
  
          </form> 
          

<?php }
}
