<?php
/* Smarty version 3.1.32, created on 2018-11-26 01:18:18
  from '/web/sites/afr-app-gallery/smarty/templates/user-profile-curator.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfb49da87e2f3_86235157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b0477af64e1934fdde33b46aa5f95d3db4742a1' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/user-profile-curator.html',
      1 => 1543195098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-curator.html' => 1,
  ),
),false)) {
function content_5bfb49da87e2f3_86235157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12907015475bfb49da87d132_06381818', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'content'} */
class Block_12907015475bfb49da87d132_06381818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12907015475bfb49da87d132_06381818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-curator.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
