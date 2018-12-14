<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:31:10
  from '/web/sites/afr-app-gallery/smarty/templates/base/admin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c3e94bc55_91054341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8701344dfcc7031d3d10a4a793527f895281d1c6' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/base/admin.html',
      1 => 1544772670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html' => 1,
  ),
),false)) {
function content_5c135c3e94bc55_91054341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3365683425c135c3e94a8a2_40901634', 'body');
?>

  
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/index.html");
}
/* {block 'content'} */
class Block_14403056495c135c3e94b3e7_91140403 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!--$content--><?php
}
}
/* {/block 'content'} */
/* {block 'body'} */
class Block_3365683425c135c3e94a8a2_40901634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3365683425c135c3e94a8a2_40901634',
  ),
  'content' => 
  array (
    0 => 'Block_14403056495c135c3e94b3e7_91140403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="global-wrap">
        <section id="content_container" style="margin-top: 0px !important">        
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14403056495c135c3e94b3e7_91140403', 'content', $this->tplIndex);
?>

        </section>
        
     </div>
  <?php
}
}
/* {/block 'body'} */
}
