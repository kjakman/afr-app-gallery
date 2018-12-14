<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:44:32
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-date.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135f60944648_67532122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e060b6009950da3fe2961ed2b462e06f7ad0a9a' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-date.html',
      1 => 1544773472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135f60944648_67532122 (Smarty_Internal_Template $_smarty_tpl) {
?>    <h4><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'daterange' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['start_date'],$_smarty_tpl->tpl_vars['collection']->value['end_date'] ));?>
</h4>

<?php }
}
