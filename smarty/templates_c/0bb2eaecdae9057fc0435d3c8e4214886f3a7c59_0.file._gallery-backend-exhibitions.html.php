<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:34:51
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-exhibitions.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135d1b646724_87896926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bb2eaecdae9057fc0435d3c8e4214886f3a7c59' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-exhibitions.html',
      1 => 1544772891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135d1b646724_87896926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('what', 'exhibition');
$_smarty_tpl->_assignInScope('plural', 'exhibitions');?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1875844775c135d1b644c92_57957347', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19870476435c135d1b645762_48570582', "fields");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15396705575c135d1b646126_92914386', "script");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-base.html");
}
/* {block 'main'} */
class Block_1875844775c135d1b644c92_57957347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1875844775c135d1b644c92_57957347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
              
<?php
}
}
/* {/block 'main'} */
/* {block "fields"} */
class Block_19870476435c135d1b645762_48570582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fields' => 
  array (
    0 => 'Block_19870476435c135d1b645762_48570582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <th data-field="state" data-checkbox="true">Check</th>
  <th data-field="actions" data-formatter="bstCollectionActionFormatter">Actions</th>
  <!--th data-field="id" data-sortable="true" data-formatter="bstIDFormatter">ID</th-->
  <th data-field="title_image" data-formatter="bstTitleImageFormatter1">Image</th>
  <th data-field="title" data-filter-control="input" data-formatter="bstTitleFormatter">Title</th>
  <th data-field="artist_ids" data-sortable="true" data-formatter="bstArtistsFormatter">Artist</th>
  <th data-field="created" data-sortable="true" data-formatter="bstDateFormatter">Created</th>
  <th data-field="subtype" data-sortable="true" data-formatter="bstCollectionSubtypeFormatter">Type</th>
  <th data-field="start_date" data-sortable="true" data-formatter="bstStartDateFormatter">Start</th>
  <th data-field="end_date" data-sortable="true" data-formatter="bstStartDateFormatter">End</th> 
  <th data-field="location" data-sortable="true">Location</th> 
<?php
}
}
/* {/block "fields"} */
/* {block "script"} */
class Block_15396705575c135d1b646126_92914386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15396705575c135d1b646126_92914386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "script"} */
}
