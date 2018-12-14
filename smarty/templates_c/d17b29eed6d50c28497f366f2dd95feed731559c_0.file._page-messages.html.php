<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:49:24
  from '/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c136084d5a519_52211724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd17b29eed6d50c28497f366f2dd95feed731559c' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html',
      1 => 1544773764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c136084d5a519_52211724 (Smarty_Internal_Template $_smarty_tpl) {
?>        <?php if (($_smarty_tpl->tpl_vars['scope']->value['error'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['error'],'error' ));
}?>
        <?php if (($_smarty_tpl->tpl_vars['scope']->value['warning'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['warning'],'warning' ));
}?>
        <?php if (($_smarty_tpl->tpl_vars['scope']->value['message'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['message'],'message' ));
}?>
        <?php if ((!$_smarty_tpl->tpl_vars['app']->value['live'] && $_smarty_tpl->tpl_vars['scope']->value['debug'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['debug'],'info' ));
}?>

<?php }
}
