<?php
/* Smarty version 3.1.32, created on 2018-07-11 11:31:11
  from '/web/sites/afr-app-gallery/smarty/templates/components/_mail-form-share.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45ea7f8daf02_67805111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b69398255996110fcde9ce3f0157022b4859450' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_mail-form-share.html',
      1 => 1531308671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45ea7f8daf02_67805111 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_assignInScope('mail', $_smarty_tpl->tpl_vars['scope']->value['mail']);?>
    <?php $_smarty_tpl->_assignInScope('sender', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['mail']->value['sender'],$_smarty_tpl->tpl_vars['mail']->value['from'] )));?>
    <?php $_smarty_tpl->_assignInScope('recipient', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['mail']->value['recipient'],$_smarty_tpl->tpl_vars['mail']->value['to'] )));?>
    <?php if ((!$_smarty_tpl->tpl_vars['mail']->value || !$_smarty_tpl->tpl_vars['mail']->value['template'])) {?>
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'error' ][ 0 ], array( 'missing mail template' ));?>

    <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('send_disabled', "disabled");?>
    <?php if (($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['mail']->value['recipient'])) {?>
      <?php $_smarty_tpl->_assignInScope('send_disabled', '');?>
    <?php }?>
    <form method='post' id="mail_form" class="mail-form ajax-submit" data-handler="mail-preview-send" data-success_handler="close">
      <input name='user_id'    type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
      <input name='site_id'    type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
">
      <input name='sender_id' type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" id='sender_id'>

      <input name="obj_id"     id="mail_obj_id"     type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['obj_id'];?>
" />
      <input name="obj_type"   id="mail_obj_type"   type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['obj_type'];?>
" />
      <input name="obj_name"   id="mail_obj_name"   type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['mail']->value['obj_name'],$_smarty_tpl->tpl_vars['scope']->value['obj_type'] ));?>
" />
      <input name='template'   id="mail_template" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['template'];?>
">
      <input name='controller' id="mail_controller" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['controller'];?>
">
      <input name='main_message' id="main_message" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['subject'];?>
">
            
    <?php if (($_smarty_tpl->tpl_vars['user']->value)) {?>
    <input name='sender' type='hidden' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sender']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'remove_query_var' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'add_query_var' ][ 0 ], array( $_smarty_tpl->tpl_vars['this_url']->value,'act','logout' )),'provider' ));?>
" class="btn btn-danger"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'log_out','c' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'display_name' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value ));?>
</a>
    <div class="gap gap-small"></div>
    <?php } else { ?>
      <div class="row">
        <div class="form-group col-xs-6">
          <label for='sender'>From (your e-mail)</label>      
          <input name='sender' type='text' value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['sender'];?>
" class="form-control auto-preview" placeholder="your@email.com">
        </div>
        <div class="form-group col-xs-6">
          <label for='sender_name'>Your Name</label>      
          <input name='sender_name' type='text' value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['sender_name'];?>
" class="form-control auto-preview" placeholder="Alice Smith">
        </div>
      </div>  
    
    <!--div class="row">
      <div class="form-group col-xs-12">
        <label for='sender'>From</label>      
        <input name='sender' type='text' value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['sender'];?>
" class="form-control auto-preview" placeholder="your@email.com">
      </div>
    </div-->
    
    <?php }?>
            
    <?php if (($_smarty_tpl->tpl_vars['mail']->value['recipient'])) {?>       <input name='recipient' id="recipient" type="hidden" readonly class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['recipient'];?>
">
    <?php } else { ?>        
      <div class="row">
        <div class="form-group col-xs-6">
          <label for='recipient'>To (e-mail)</label>      
          <input name='recipient' type='text' value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['recipient'];?>
" class="form-control auto-preview" placeholder="bob@email.com">
        </div>
        <div class="form-group col-xs-6">
          <label for='receiver_name'>Name (helps avoid spam)</label>      
          <input name='receiver_name' type='text' value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['receiver_name'];?>
" class="form-control auto-preview" placeholder="Bob Smith">
        </div>
      </div>  
    <?php }?>
    
      <?php if (($_smarty_tpl->tpl_vars['scope']->value['hide_subject'])) {?>
      <input name='subject' id="subject" type="hidden" readonly class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value['subject'];?>
">
      <?php } else { ?>
      <div class="row">
        <div class="form-group col-xs-12">
          <label for='subject'>Subject</label>      
          <input name='subject' type='text' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail']->value['subject'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control auto-preview">
        </div>
      </div>  
      <?php }?>
      
      <div class="row">
        <div class="form-group col-xs-12">
          <label for='from'>Message</label>      
          <textarea name="personal_message" id="personal_message" class="form-control auto-preview" rows="3" placeholder="Say something about this..."></textarea>
        </div>
      </div>
      
      <div class="row">
        <div class="col-xs-12">
          <input type="submit" id="mail_send" class="btn btn-success set-target-value" <?php echo $_smarty_tpl->tpl_vars['send_disabled']->value;?>
 value="Send Now" >
        </div>
      </div>
      
      
    </form>        
    <?php }
}
}
