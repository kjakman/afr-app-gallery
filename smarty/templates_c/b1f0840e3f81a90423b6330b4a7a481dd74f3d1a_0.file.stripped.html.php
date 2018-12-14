<?php
/* Smarty version 3.1.32, created on 2018-07-11 11:31:11
  from '/web/sites/afr-app-gallery/smarty/templates/base/stripped.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45ea7f8ad634_37086920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1f0840e3f81a90423b6330b4a7a481dd74f3d1a' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/base/stripped.html',
      1 => 1531308671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html' => 1,
  ),
),false)) {
function content_5b45ea7f8ad634_37086920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6998565095b45ea7f8ac324_64128718', 'body');
?>

  
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/index.html");
}
/* {block 'content'} */
class Block_6776504625b45ea7f8acd77_81387126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!--$content--><?php
}
}
/* {/block 'content'} */
/* {block 'body'} */
class Block_6998565095b45ea7f8ac324_64128718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6998565095b45ea7f8ac324_64128718',
  ),
  'content' => 
  array (
    0 => 'Block_6776504625b45ea7f8acd77_81387126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="global-wrap">
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6776504625b45ea7f8acd77_81387126', 'content', $this->tplIndex);
?>
        
     </div>
  <?php
}
}
/* {/block 'body'} */
}
