<?php
/* Smarty version 3.1.32, created on 2018-12-10 10:32:16
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-plugins.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0e40b0e96432_20598898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f541e864673d09787e044bccc8c3a474aa1bcdf' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-plugins.html',
      1 => 1544437936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e40b0e96432_20598898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('what', 'plugin');
$_smarty_tpl->_assignInScope('plural', 'plugins');?>

<?php $_smarty_tpl->_assignInScope('form', "_gallery-backend-plugin-form.html");?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5376762305c0e40b0e948c9_68773438', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4444620855c0e40b0e95479_54324919', "fields");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18086044845c0e40b0e95dc1_96758456', "script");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-base.html");
}
/* {block 'main'} */
class Block_5376762305c0e40b0e948c9_68773438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5376762305c0e40b0e948c9_68773438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
              
<?php
}
}
/* {/block 'main'} */
/* {block "fields"} */
class Block_4444620855c0e40b0e95479_54324919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fields' => 
  array (
    0 => 'Block_4444620855c0e40b0e95479_54324919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <th data-field="state" data-checkbox="true">Check</th>
  <th data-field="actions" data-formatter="bstActionFormatter">Actions</th>
  <!--th data-field="id" data-sortable="true" data-formatter="bstIDFormatter">ID</th-->
  <th data-field="title_image" data-formatter="bstTitleImageFormatter">Image</th>
  <th data-field="name" data-sortable="true">Name</th>
  <th data-field="title" data-sortable="true" data-formatter="bstTitleFormatter">Screen Title</th>
  <th data-field="created" data-sortable="true" data-formatter="bstDateFormatter">Created</th>
  <th data-field="subtitle" data-sortable="true">Subtitle</th>
  <th data-field="full_url" data-sortable="true">URL</th>
  <th data-field="type" data-sortable="true">Type</th>
  <th data-field="count" data-sortable="true">Views</th>
<?php
}
}
/* {/block "fields"} */
/* {block "script"} */
class Block_18086044845c0e40b0e95dc1_96758456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18086044845c0e40b0e95dc1_96758456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "script"} */
}
