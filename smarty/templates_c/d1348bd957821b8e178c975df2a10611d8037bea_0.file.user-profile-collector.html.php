<?php
/* Smarty version 3.1.32, created on 2018-12-06 11:31:28
  from '/web/sites/afr-app-gallery/smarty/templates/user-profile-collector.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c090890d4a382_09498570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1348bd957821b8e178c975df2a10611d8037bea' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/user-profile-collector.html',
      1 => 1544095888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-collector.html' => 1,
  ),
),false)) {
function content_5c090890d4a382_09498570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17307645855c090890d49306_16145130', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'content'} */
class Block_17307645855c090890d49306_16145130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17307645855c090890d49306_16145130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-collector.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
