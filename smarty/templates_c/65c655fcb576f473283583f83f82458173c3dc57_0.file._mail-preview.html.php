<?php
/* Smarty version 3.1.32, created on 2018-07-11 11:31:11
  from '/web/sites/afr-app-gallery/smarty/templates/components/_mail-preview.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45ea7f8dfa35_45831714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65c655fcb576f473283583f83f82458173c3dc57' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_mail-preview.html',
      1 => 1531308671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45ea7f8dfa35_45831714 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div id="mail_headers" class="collapse" style='font-family:"Courier New", Courier, monospace'></div>
    <iframe id="mail_preview" class="collapse" width="100%" height="1200px" style="overflow:auto;background-color:#fff" scrolling="yes" src="https://hackerone.com/browser-not-supported.html"
      srcdoc="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail']->value['body'], ENT_QUOTES, 'UTF-8', true);?>
"></iframe>
                


<?php }
}
