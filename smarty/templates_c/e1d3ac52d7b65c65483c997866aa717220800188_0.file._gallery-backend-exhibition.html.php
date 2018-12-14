<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:26
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-exhibition.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1357267fee07_35827981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d3ac52d7b65c65483c997866aa717220800188' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-exhibition.html',
      1 => 1544771366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-tabs.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-detail.html' => 1,
  ),
),false)) {
function content_5c1357267fee07_35827981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['collection']);
$_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['collection']->value);
$_smarty_tpl->_assignInScope('what', 'exhibition');
$_smarty_tpl->_assignInScope('plural', 'exhibitions');?>

<?php $_smarty_tpl->_assignInScope('auth_edit_backend', $_smarty_tpl->tpl_vars['scope']->value['auth_edit_collection']);?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13404397465c1357267fbed7_86610063', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-item-base.html");
}
/* {block 'main'} */
class Block_13404397465c1357267fbed7_86610063 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_13404397465c1357267fbed7_86610063',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  <?php if (($_smarty_tpl->tpl_vars['add']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>      
  <?php } elseif (($_smarty_tpl->tpl_vars['edit']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-tabs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
  
<?php
}
}
/* {/block 'main'} */
}
