<?php
/* Smarty version 3.1.32, created on 2018-12-14 05:10:51
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c133b5b9093b8_67357055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '260c0c5b5455315395e8ae8451b8838b6a26e8eb' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html',
      1 => 1544764251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c133b5b9093b8_67357055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('providers', $_smarty_tpl->tpl_vars['global']->value['provider_keys']);
if (($_smarty_tpl->tpl_vars['providers']->value && count($_smarty_tpl->tpl_vars['providers']->value))) {?>
  <ul class="third-party-list <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['list_class']->value,'list-inline' ));?>
">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers']->value, 'provider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['provider']->value) {
?>
    <?php $_smarty_tpl->_assignInScope('name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['provider']->value,"provider","name" )));?>
    <?php $_smarty_tpl->_assignInScope('key', mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8'));?>
    <?php $_smarty_tpl->_assignInScope('social_key', $_smarty_tpl->tpl_vars['key']->value == 'google' ? "google-plus" : $_smarty_tpl->tpl_vars['key']->value);?>
    <?php $_smarty_tpl->_assignInScope('query', array('provider'=>$_smarty_tpl->tpl_vars['key']->value));?>
    <?php $_smarty_tpl->_assignInScope('path', $_GET['ref'] ? $_GET['ref'] : $_smarty_tpl->tpl_vars['this_path']->value);?>
    <li>
      <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_query' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value ));?>
?<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'query' ][ 0 ], array( $_smarty_tpl->tpl_vars['query']->value,$_GET['ref'] ));?>
" class="btn btn-social btn-<?php echo $_smarty_tpl->tpl_vars['social_key']->value;?>
 tpl-link">
        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

      </a>
    </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php }?>



<?php }
}
