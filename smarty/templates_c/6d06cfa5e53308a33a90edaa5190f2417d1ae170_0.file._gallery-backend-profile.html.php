<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:14:06
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-profile.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13583ee26dc9_74241333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d06cfa5e53308a33a90edaa5190f2417d1ae170' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-profile.html',
      1 => 1544771646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_network-form-basic.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-profile-tabs.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-artist.html' => 1,
  ),
),false)) {
function content_5c13583ee26dc9_74241333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['profile']);
$_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['profile']->value);
$_smarty_tpl->_assignInScope('what', 'profile');?>

<?php $_smarty_tpl->_assignInScope('auth_edit_backend', $_smarty_tpl->tpl_vars['scope']->value['auth_edit_profile']);?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11435916685c13583ee24211_08216020', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-item-base.html");
}
/* {block 'main'} */
class Block_11435916685c13583ee24211_08216020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_11435916685c13583ee24211_08216020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php if (($_smarty_tpl->tpl_vars['add']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_network-form-basic.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
  <?php } elseif (($_smarty_tpl->tpl_vars['edit']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-profile-tabs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-artist.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
  
<?php
}
}
/* {/block 'main'} */
}
