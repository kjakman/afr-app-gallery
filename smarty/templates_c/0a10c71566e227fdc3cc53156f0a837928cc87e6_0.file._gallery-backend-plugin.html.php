<?php
/* Smarty version 3.1.32, created on 2018-12-10 07:12:30
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-plugin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0e11dee25d82_67544628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a10c71566e227fdc3cc53156f0a837928cc87e6' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-plugin.html',
      1 => 1544425950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-plugin-form.html' => 2,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-plugin-detail.html' => 1,
  ),
),false)) {
function content_5c0e11dee25d82_67544628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('plugin', $_smarty_tpl->tpl_vars['scope']->value['plugin']);
$_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['collection']);
$_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['plugin']->value);
$_smarty_tpl->_assignInScope('what', 'plugin');
$_smarty_tpl->_assignInScope('auth_edit_backend', $_smarty_tpl->tpl_vars['scope']->value['auth_edit_plugin']);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6743537415c0e11dee237f1_57131204', 'main');
?>

    
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-item-base.html");
}
/* {block 'main'} */
class Block_6743537415c0e11dee237f1_57131204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_6743537415c0e11dee237f1_57131204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (($_smarty_tpl->tpl_vars['add']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-plugin-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif (($_smarty_tpl->tpl_vars['edit']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-plugin-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-plugin-detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
}
}
/* {/block 'main'} */
}
