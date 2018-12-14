<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:26
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-curator-information.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1357268b9594_35855748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00f9e468c86a7436f4f5cba2d2c5d1dbee06394' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-curator-information.html',
      1 => 1544771366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1357268b9594_35855748 (Smarty_Internal_Template $_smarty_tpl) {
?>                            <h1 class='black'>
                            <?php if (($_smarty_tpl->tpl_vars['profile_link']->value)) {?>
                              <?php $_smarty_tpl->_assignInScope('data', array("site_id"=>$_smarty_tpl->tpl_vars['site']->value['id'],"obj_type"=>"user","obj_id"=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],"obj_subtype"=>@constant('USER_ROLE_CURATOR')));?>
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



<?php }
}
