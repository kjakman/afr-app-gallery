<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:30:52
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-websites.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c2c380009_34103213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5134520da5b462fdb087b17850f42f50c5671f76' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-websites.html',
      1 => 1544772652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135c2c380009_34103213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('what', 'website');
$_smarty_tpl->_assignInScope('plural', 'websites');?>

<?php $_smarty_tpl->_assignInScope('form', "_gallery-backend-website-form.html");?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3746313465c135c2c37e253_59354259', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95797885c135c2c37ecf6_80207853', "fields");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1562540175c135c2c37f6f1_84814481', "script");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-base.html");
}
/* {block 'main'} */
class Block_3746313465c135c2c37e253_59354259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_3746313465c135c2c37e253_59354259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
              
<?php
}
}
/* {/block 'main'} */
/* {block "fields"} */
class Block_95797885c135c2c37ecf6_80207853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fields' => 
  array (
    0 => 'Block_95797885c135c2c37ecf6_80207853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!--th data-field="state" data-checkbox="true">Check</th>
  <th data-field="id" data-sortable="true" data-formatter="bstIDFormatter">ID</th>
  <th data-field="title_image" data-formatter="bstTitleImageFormatter">Image</th-->
  <th data-field="created" data-sortable="true" data-formatter="bstDateFormatter">Created</th>
  <th data-field="url" data-sortable="true" data-formatter="bstUrlFormatter">URL</th>
  <th data-field="domain" data-sortable="true" data-formatter="bstDomainFormatter">Domain</th>
  <th data-field="type" data-sortable="true">Type</th>
  <th data-field="user_id" data-sortable="true" data-formatter="bstMinisiteArtistFormatter">User</th>
<?php
}
}
/* {/block "fields"} */
/* {block "script"} */
class Block_1562540175c135c2c37f6f1_84814481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1562540175c135c2c37f6f1_84814481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "script"} */
}
