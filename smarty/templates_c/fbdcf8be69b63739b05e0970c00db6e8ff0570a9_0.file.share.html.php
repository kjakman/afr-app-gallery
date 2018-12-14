<?php
/* Smarty version 3.1.32, created on 2018-07-11 11:31:11
  from '/web/sites/afr-app-gallery/smarty/templates/share.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45ea7f8a9934_52577987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbdcf8be69b63739b05e0970c00db6e8ff0570a9' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/share.html',
      1 => 1531308671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_mail-form-share.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_mail-preview.html' => 1,
  ),
),false)) {
function content_5b45ea7f8a9934_52577987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12908167755b45ea7f8a4524_85334460', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/stripped.html");
}
/* {block 'content'} */
class Block_12908167755b45ea7f8a4524_85334460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12908167755b45ea7f8a4524_85334460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_assignInScope('vars', $_smarty_tpl->tpl_vars['scope']->value['vars']);
$_smarty_tpl->_assignInScope('url', $_smarty_tpl->tpl_vars['vars']->value['url']);
$_smarty_tpl->_assignInScope('tpl', $_smarty_tpl->tpl_vars['vars']->value['template']);
$_smarty_tpl->_assignInScope('ctrl', $_smarty_tpl->tpl_vars['vars']->value['controller']);
$_smarty_tpl->_assignInScope('data', $_smarty_tpl->tpl_vars['vars']->value['data']);?>
    
<div class="container">
  <div class='gap gap-small'></div>
  
  <?php if ((!$_smarty_tpl->tpl_vars['user']->value)) {?>
    <div class="text-center mt10 mb10">Connect with:</div>
    <?php $_smarty_tpl->_assignInScope('list_class', 'list-inline');?>
    <?php $_smarty_tpl->_assignInScope('list_class', 'list-centered');?>
    
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="gap gap-small clear-float"></div>
      
    <div class="text-center mt10 mb10">OR</div>
  <?php }?>
  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_mail-form-share.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="gap"></div>
  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_mail-preview.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>
  <?php
}
}
/* {/block 'content'} */
}
