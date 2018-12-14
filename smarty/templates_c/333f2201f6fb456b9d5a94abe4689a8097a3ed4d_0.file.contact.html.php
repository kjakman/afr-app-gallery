<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:26:17
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/contact.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135b1965a9f3_33717332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333f2201f6fb456b9d5a94abe4689a8097a3ed4d' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/contact.html',
      1 => 1544772377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-map.html' => 1,
  ),
),false)) {
function content_5c135b1965a9f3_33717332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


  
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9502167695c135b19644567_90361107', 'title');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18525198295c135b19644f55_94995031', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/minisites/index.html");
}
/* {block 'title'} */
class Block_9502167695c135b19644567_90361107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9502167695c135b19644567_90361107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Contact</h2>
  <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_18525198295c135b19644f55_94995031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18525198295c135b19644f55_94995031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    <div class="row">
      <div class="col-md-4 col-lg-3 col-sm-12 text-left small-text">

        <?php if (($_smarty_tpl->tpl_vars['scope']->value['custom_content'])) {?>
          <?php echo $_smarty_tpl->tpl_vars['scope']->value['custom_content'];?>

          <div id="opening-hours">
            <?php if (($_smarty_tpl->tpl_vars['mObj']->value['show_timing'] == '1')) {?>
              <strong>Opening hours:</strong><br> 
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timings']->value, 'timing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['timing']->value) {
?>
                <table>
                  <tr>
                    <td style= "width:100px;font-size: 12px;"> <?php echo $_smarty_tpl->tpl_vars['timing']->value['day'];?>
 </td>
                    <td style= "font-size: 12px;"> : </td>
                    <?php if (($_smarty_tpl->tpl_vars['timing']->value['opening_time'] && $_smarty_tpl->tpl_vars['timing']->value['closing_time'] == "00:00:00")) {?>
                      <td style= "font-size: 12px;"> CLOSED </td>
                    <?php } else { ?>
                      <?php $_smarty_tpl->_assignInScope('opening_time', substr($_smarty_tpl->tpl_vars['timing']->value['opening_time'],0,-3));?>
                      <?php $_smarty_tpl->_assignInScope('closing_time', substr($_smarty_tpl->tpl_vars['timing']->value['closing_time'],0,-3));?>
                      <td style= "font-size: 12px;"> <?php echo $_smarty_tpl->tpl_vars['opening_time']->value;?>
 - </td>
                      <td style= "font-size: 12px;"> <?php echo $_smarty_tpl->tpl_vars['closing_time']->value;?>
 </td>
                    <?php }?>                  
                  </tr>
                </table>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
          </div>
        <?php } else { ?>
        <div class="row">
          <div class="col">
            [address]
            <a href="http://www.xxx.com">www.xxx.com</a><br>
            [email]
            [phone]
          </div>
          <div class="col">
            <strong>General enquiries</strong><br><a href="mailto:mail@xxx.com"> mail@xxx.com</a><br><br>
            <div id="opening-hours">
              <strong>Opening hours:</strong><br> 
              Wednesday - Friday <br> 
              11.00 - 18.00 &nbsp;<br> Saturdays<br> 
              13.00 - 18.00&nbsp;<br> and by appointment<br>
            </div>
          </div>
        </div>
        <?php }?>
        
        
      </div>
      <div class="col-md-8 col-lg-9 col-sm-12 detail-text">
      
                        <?php $_smarty_tpl->_assignInScope('loc', $_smarty_tpl->tpl_vars['scope']->value['user']);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['loc']) ? $_smarty_tpl->tpl_vars['loc']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['name'] = $_smarty_tpl->tpl_vars['loc']->value['display_name'];
$_smarty_tpl->_assignInScope('loc', $_tmp_array);?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-map.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <br>
        <h4>Send us a message</h4>
        <form id="send-form" class="ajax-submit" data-handler="mail-preview-send" data-reset="1" method="POST">
          <input name="obj_type" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['mail_obj_type'],'message' ));?>
" />
          <input name="obj_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['mail_obj_id'],'0' ));?>
" />
          <input name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
          <input name="site_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" />
          <input name="remote_ip" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['client_ip']->value;?>
" />
          <input name="action" type="hidden" value="contact_form" />
          <input name="template" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['mail_template'],'mail/mail-message' ));?>
" />
          <input name="controller" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['mail_controller'],'contact' ));?>
" />                
          <input name="replyto_sender" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['replyto_sender'],0 ));?>
" />
          <!-- input name="send" type="text" value="0" id="send_mail" / -->
  
          <input name="main_message" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['main_message'];?>
" />
            
          <input name="recipient" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['receiver_email'],$_smarty_tpl->tpl_vars['site']->value['email_address'] ));?>
" type="hidden" />
          <input name="receiver_name" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['receiver_name'],$_smarty_tpl->tpl_vars['site']->value['name'] ));?>
" type="hidden" />
          <?php $_smarty_tpl->_assignInScope('debug', 0);?>
  

          <div class="row mt10">
            <div class="col-sm-4 col-xs-6">
              <div class="form-group">
                <label><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'name','c' ));?>
 *</label>
                <input required class="form-control auto-preview" name="name" id="contact_name" type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['sender_name'],$_smarty_tpl->tpl_vars['user']->value['display_name'] ));?>
" data-msg-required="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'please enter your name','c' ));?>
." maxlength="100">
              </div>
            </div>
            <div class="col-sm-4 col-xs-6">
              <div class="form-group">
                <label><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'email','c' ));?>
 *</label>
                <input required class="form-control auto-preview" name="sender" id="contact_email" type="email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['sender_email'],$_smarty_tpl->tpl_vars['user']->value['email_address'] ));?>
" data-msg-required="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'please enter your email address','c' ));?>
." data-msg-email="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'please enter a valid email address','c' ));?>
." maxlength="100">
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="form-group">
                <label><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'phone','c' ));?>
</label>
                <input  type="tel" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['sender_phone'],$_smarty_tpl->tpl_vars['user']->value['phone'] ));?>
"  maxlength="16" class="form-control" name="phone" id="phone">
              </div>
            </div>
          </div>
          
          <div class="row mt10">
            <div class="col">
              <div class="form-group">
                <label><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'subject','c' ));?>
 *</label>
                <input required class="form-control auto-preview" name="subject" id="contact_subject" type="text" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['subject'];?>
" data-msg-required="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'please enter the subject','c' ));?>
." maxlength="100">
              </div>
            </div>
          </div>
          
          <div class="row mt10">
            <div class="col">
              <div class="form-group">
                <label><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'message','c' ));?>
 *</label>
                <textarea required maxlength="5000" data-msg-required="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'please enter your message','c' ));?>
." rows="3" class="form-control" name="personal_message" id="contact_comment"></textarea>
              </div>
            </div>
          </div>
          
          <br />
  
          <div class="row">
            <div class="col-sm-12">
              <input class="hidden" type="text" name="captcha" id="captcha" value="" /><!-- keep it hidden -->
              <input type="submit" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'send message','c',0 ));?>
" class="btn btn-primary set-target" data-target="#send_mail" data-value="1"  />              
            </div>
          </div>
  
        </form>
      </div>
    </div>  
      
  <?php
}
}
/* {/block 'content'} */
}
