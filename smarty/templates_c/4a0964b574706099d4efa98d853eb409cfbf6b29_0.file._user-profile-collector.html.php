<?php
/* Smarty version 3.1.32, created on 2018-12-06 11:31:28
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-collector.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c090890d8c276_55219397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a0964b574706099d4efa98d853eb409cfbf6b29' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-collector.html',
      1 => 1544095888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collector-information.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html' => 1,
  ),
),false)) {
function content_5c090890d8c276_55219397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1254948565c090890d89307_00059485', 'profile');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18153105315c090890d8b650_70160196', 'description');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-base.html");
}
/* {block 'profile'} */
class Block_1254948565c090890d89307_00059485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profile' => 
  array (
    0 => 'Block_1254948565c090890d89307_00059485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1>(Collector)!</h1>
  <h1 class='black'> <?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['display_name'];?>
</h1>

  <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['profile']);?>
  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collector-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
<?php
}
}
/* {/block 'profile'} */
/* {block 'description'} */
class Block_18153105315c090890d8b650_70160196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description' => 
  array (
    0 => 'Block_18153105315c090890d8b650_70160196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <p><?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['description'];?>
</p>
<?php
}
}
/* {/block 'description'} */
}
