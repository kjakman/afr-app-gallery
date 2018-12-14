<?php
/* Smarty version 3.1.32, created on 2018-07-25 12:53:39
  from '/web/sites/afr-app-gallery/smarty/templates/gallery-artists.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5872d323b2d4_78639516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1c3a5cd0d638179afe55a8e06297c84a7672639' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/gallery-artists.html',
      1 => 1532523219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artists.html' => 1,
  ),
),false)) {
function content_5b5872d323b2d4_78639516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17874564915b5872d323a260_70234839', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'content'} */
class Block_17874564915b5872d323a260_70234839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17874564915b5872d323a260_70234839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artists.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'content'} */
}
