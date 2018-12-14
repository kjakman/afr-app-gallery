<?php
/* Smarty version 3.1.32, created on 2018-12-10 06:26:23
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-vault.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0e070fb05e59_18398189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c21b781960fd885b9e1ba1f5f2f35e8ac9b96ef' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-vault.html',
      1 => 1544423183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e070fb05e59_18398189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('what', 'vault');
$_smarty_tpl->_assignInScope('plural', 'vault');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1775764675c0e070fb04318_59472601', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2972831185c0e070fb04f34_89341298', "fields");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1573094205c0e070fb058b5_79023604', "script");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-base.html");
}
/* {block 'main'} */
class Block_1775764675c0e070fb04318_59472601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1775764675c0e070fb04318_59472601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
              
<?php
}
}
/* {/block 'main'} */
/* {block "fields"} */
class Block_2972831185c0e070fb04f34_89341298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fields' => 
  array (
    0 => 'Block_2972831185c0e070fb04f34_89341298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <th data-field="state" data-checkbox="true">Check</th>
  <!--th data-field="id" data-sortable="true" data-formatter="bstVaultIDFormatter">ID</th-->
  <th data-field="title_image" data-formatter="bstVaultImageFormatter">Image</th>
  <th data-field="title" data-sortable="true" data-formatter="bstTitleFormatter">Title</th>
  <th data-field="created" data-sortable="true" data-formatter="bstDateFormatter">Created</th>
  <th data-field="type" data-sortable="true" data-formatter="bstVaultTypeFormatter">Type</th>
  <th data-field="filename" data-sortable="true">File</th>
  <th data-field="user_id" data-sortable="true" data-formatter="bstArtistFormatter">Owner</th>
<?php
}
}
/* {/block "fields"} */
/* {block "script"} */
class Block_1573094205c0e070fb058b5_79023604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1573094205c0e070fb058b5_79023604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "script"} */
}
