<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:30:50
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-network.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c2a8d9fd6_73817822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '720e09b447249a3532a5453a9c70871e2acc51f5' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-network.html',
      1 => 1544772650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135c2a8d9fd6_73817822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('what', 'artist');
$_smarty_tpl->_assignInScope('plural', 'artists');?>

<?php $_smarty_tpl->_assignInScope('form', "_gallery-backend-profile-tabs.html");?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14431780575c135c2a8d8483_23998734', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9412196965c135c2a8d8f84_03895694', "fields");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9720773725c135c2a8d9a33_13596160', "script");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-base.html");
}
/* {block 'main'} */
class Block_14431780575c135c2a8d8483_23998734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_14431780575c135c2a8d8483_23998734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<?php
}
}
/* {/block 'main'} */
/* {block "fields"} */
class Block_9412196965c135c2a8d8f84_03895694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fields' => 
  array (
    0 => 'Block_9412196965c135c2a8d8f84_03895694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!--th data-field="id" data-sortable="true" data-formatter="bstIDFormatter">ID</th-->
  <th data-field="photo" data-formatter="bstUserPhotoFormatter">Image</th>
  <th data-field="display_name" data-sortable="true" data-formatter="bstTitleNetworkFormatter">Name</th>
  <th data-field="created" data-sortable="true" data-formatter="bstDateFormatter">Created</th>
  <th data-field="age" data-sortable="true">Age</th>  
  <th data-field="city" data-sortable="true">City</th>
  <th data-field="country" data-sortable="true">Country</th>   <!-- pradeepa -->
  <!-- <th data-field="user_level" data-editable="true" data-editable-type="number" data-sortable="true">Level</th>
  <th data-field="roles" data-sortable="true">Roles</td>
  <th data-field="username" data-sortable="true">Username</th> -->
<?php
}
}
/* {/block "fields"} */
/* {block "script"} */
class Block_9720773725c135c2a8d9a33_13596160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9720773725c135c2a8d9a33_13596160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "script"} */
}
