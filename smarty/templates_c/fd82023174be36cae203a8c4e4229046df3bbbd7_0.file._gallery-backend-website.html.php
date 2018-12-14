<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:31:27
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c4f0deba4_91923572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd82023174be36cae203a8c4e4229046df3bbbd7' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website.html',
      1 => 1544772687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-tabs.html' => 1,
  ),
),false)) {
function content_5c135c4f0deba4_91923572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('minisite', $_smarty_tpl->tpl_vars['scope']->value['minisite']);
$_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['minisite']->value);
$_smarty_tpl->_assignInScope('what', 'website');
$_smarty_tpl->_assignInScope('plural', 'websites');?>

<?php $_smarty_tpl->_assignInScope('auth_edit_backend', $_smarty_tpl->tpl_vars['scope']->value['auth_edit_minisite']);?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_860002905c135c4f0db6c3_67530463', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-item-base.html");
}
/* {block 'main'} */
class Block_860002905c135c4f0db6c3_67530463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_860002905c135c4f0db6c3_67530463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  <?php if (($_smarty_tpl->tpl_vars['add']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>      
  <?php } elseif (($_smarty_tpl->tpl_vars['edit']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-tabs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php } else { ?>
     <iframe id="minisite_preview" class="" width="100%" height="1200px" 
        style="overflow:auto;background-color:#fff" scrolling="yes" src="<?php echo $_smarty_tpl->tpl_vars['scope']->value['url'];?>
"></iframe>
              

    Iframe <?php echo $_smarty_tpl->tpl_vars['scope']->value['url'];?>

  <?php }?>
  
<?php
}
}
/* {/block 'main'} */
}
