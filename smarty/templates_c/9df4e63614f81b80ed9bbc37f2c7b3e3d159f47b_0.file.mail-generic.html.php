<?php
/* Smarty version 3.1.32, created on 2018-11-25 10:53:43
  from '/web/sites/afr-app-gallery/smarty/templates/mail/mail-generic.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa7f37d409a2_58238374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df4e63614f81b80ed9bbc37f2c7b3e3d159f47b' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/mail/mail-generic.html',
      1 => 1543143223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa7f37d409a2_58238374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

                                    
                                    
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3432851305bfa7f37d386c4_51588504', 'main_text');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/mail/mail-base.html");
}
/* {block 'main_text'} */
class Block_3432851305bfa7f37d386c4_51588504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_text' => 
  array (
    0 => 'Block_3432851305bfa7f37d386c4_51588504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                      <h1 class="mail-title" style="color: #202020;font-family: Helvetica;font-weight: bold;line-height: 125%;margin: 0;margin-bottom: 5px;font-size: 16px;text-align: left;text-transform: capitalize;display: block;padding: 0;font-style: normal;letter-spacing: normal;">
                                      <?php if (($_smarty_tpl->tpl_vars['scope']->value['mail_title'])) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['scope']->value['mail_title'];?>

                                      <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('default_name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'user','c' )));?>
                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'dear','c' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['receiver_name'],$_smarty_tpl->tpl_vars['default_name']->value ));?>
,                                          
                                      <?php }?>
                                      </h1>
                                      <br>
                                      
                                      <?php if (($_smarty_tpl->tpl_vars['scope']->value['main_message'])) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['scope']->value['main_message'];?>

                                        <hr>
                                      <?php }?>
                                      <?php if (($_smarty_tpl->tpl_vars['scope']->value['personal_message'])) {?>
                                        <p><b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'personal message','c' ));?>
:</b> <?php echo $_smarty_tpl->tpl_vars['scope']->value['personal_message'];?>
</p>
                                        <hr>
                                      <?php }?>
                                      
                                      <?php if (($_smarty_tpl->tpl_vars['scope']->value['main_image'])) {?>
                                        Image: <?php echo $_smarty_tpl->tpl_vars['scope']->value['main_image'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['scope']->value['url'];?>
<br>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['scope']->value['url'];?>
" title="" class="" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                          <img align="center" alt="" src="<?php echo $_smarty_tpl->tpl_vars['scope']->value['main_image'];?>
" width="564" style="max-width: 640px;padding-bottom: 0;display: inline !important;vertical-align: bottom;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" class="mcnImage">
                                        </a>
                                      
                                      <?php }?>
                                      
                                    <?php
}
}
/* {/block 'main_text'} */
}
