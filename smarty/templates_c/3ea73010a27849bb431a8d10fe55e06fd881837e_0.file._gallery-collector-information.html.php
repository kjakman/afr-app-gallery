<?php
/* Smarty version 3.1.32, created on 2018-12-06 11:31:28
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collector-information.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c090890da1a04_93625249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ea73010a27849bb431a8d10fe55e06fd881837e' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collector-information.html',
      1 => 1544095888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c090890da1a04_93625249 (Smarty_Internal_Template $_smarty_tpl) {
?>                            <h1 class='black'>
                            <?php if (($_smarty_tpl->tpl_vars['profile_link']->value)) {?>
                              <?php $_smarty_tpl->_assignInScope('data', array("site_id"=>$_smarty_tpl->tpl_vars['site']->value['id'],"obj_type"=>"user","obj_id"=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],"obj_subtype"=>@constant('USER_ROLE_USER')));?>
                              <?php $_smarty_tpl->_assignInScope('json', json_encode($_smarty_tpl->tpl_vars['data']->value));?>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['profile_link']->value;
echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" class="cms-link gallery-link" data-data='<?php echo $_smarty_tpl->tpl_vars['json']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['profile']->value['display_name'];?>
</a><br>
                            <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['profile']->value['display_name'];?>

                            <?php }?>
                            </h1> 
                            <h4><?php if (($_smarty_tpl->tpl_vars['profile']->value['city'])) {
echo $_smarty_tpl->tpl_vars['profile']->value['city'];?>
, <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['country'],'countries','name' ));?>
</h4>


<?php }
}
