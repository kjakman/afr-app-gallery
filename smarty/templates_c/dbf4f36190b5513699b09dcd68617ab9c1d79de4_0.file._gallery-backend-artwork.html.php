<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:20
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1357204b8627_22942140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbf4f36190b5513699b09dcd68617ab9c1d79de4' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork.html',
      1 => 1544771360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-tabs.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artwork-detail.html' => 1,
  ),
),false)) {
function content_5c1357204b8627_22942140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('artwork', $_smarty_tpl->tpl_vars['scope']->value['artwork']);
$_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['artwork']->value);
$_smarty_tpl->_assignInScope('what', 'artwork');
$_smarty_tpl->_assignInScope('plural', 'artworks');?>

<?php $_smarty_tpl->_assignInScope('auth_edit_backend', $_smarty_tpl->tpl_vars['scope']->value['auth_edit_artwork']);?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5840329795c1357204b5863_95054859', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-item-base.html");
}
/* {block 'main'} */
class Block_5840329795c1357204b5863_95054859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5840329795c1357204b5863_95054859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php if (($_smarty_tpl->tpl_vars['add']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } elseif (($_smarty_tpl->tpl_vars['edit']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-tabs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artwork-detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
  
<?php
}
}
/* {/block 'main'} */
}
