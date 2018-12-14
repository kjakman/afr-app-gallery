<?php
/* Smarty version 3.1.32, created on 2018-12-06 11:31:19
  from '/web/sites/afr-app-gallery/smarty/templates/user-account.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c09088723bd46_03093049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a0a6858d67a48cffcc5b7d0866eed9d2349e52' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/user-account.html',
      1 => 1544095879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-account-nav.html' => 1,
  ),
),false)) {
function content_5c09088723bd46_03093049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1961139015c0908872312a7_04065220', 'subview_top');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19068843985c090887231de6_72987023', 'subview_title');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12619130705c0908872331c0_07002724', 'subview_left_top');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11642879485c090887233915_25995965', 'subview_aside');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8817213875c090887237af6_50581142', 'subview_left_bottom');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2225025445c0908872382f3_20715862', 'subview_nav');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13848148755c0908872392e1_79837256', 'subview_container');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15345057425c09088723b6e5_69518955', 'subview_bottom');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/subview.html");
}
/* {block 'subview_top'} */
class Block_1961139015c0908872312a7_04065220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_top' => 
  array (
    0 => 'Block_1961139015c0908872312a7_04065220',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'subview_top'} */
/* {block 'subview_title'} */
class Block_19068843985c090887231de6_72987023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_title' => 
  array (
    0 => 'Block_19068843985c090887231de6_72987023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'user profile','c' ));?>

  <?php
}
}
/* {/block 'subview_title'} */
/* {block 'subview_left_top'} */
class Block_12619130705c0908872331c0_07002724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_left_top' => 
  array (
    0 => 'Block_12619130705c0908872331c0_07002724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php
}
}
/* {/block 'subview_left_top'} */
/* {block 'subview_aside'} */
class Block_11642879485c090887233915_25995965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_aside' => 
  array (
    0 => 'Block_11642879485c090887233915_25995965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="user-profile-avatar text-center">
        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'userphoto' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'] ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'username' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'] ));?>
" title="AMaze" />
        <h5><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'username' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'] ));?>
</h5>
        <p>Member Since <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile']['created'] ));?>
</p>
        <div>
          <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_EDIT_PROFILE') ));
echo $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'];?>
/" class="btn btn-success"><i class="fa fa-user"></i> Edit Profile</a>
        </div>
        
    </div>
  <?php
}
}
/* {/block 'subview_aside'} */
/* {block 'subview_left_bottom'} */
class Block_8817213875c090887237af6_50581142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_left_bottom' => 
  array (
    0 => 'Block_8817213875c090887237af6_50581142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'subview_left_bottom'} */
/* {block 'subview_nav'} */
class Block_2225025445c0908872382f3_20715862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_nav' => 
  array (
    0 => 'Block_2225025445c0908872382f3_20715862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-account-nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'subview_nav'} */
/* {block 'subview_container'} */
class Block_13848148755c0908872392e1_79837256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_container' => 
  array (
    0 => 'Block_13848148755c0908872392e1_79837256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- 7 Subviews: notifications,security,privacy,password,linking,payout,transactions First: _user-account-notifications.html-->
<div id='subview-prefix' class='collapse'>_user-account-</div>
  <?php $_smarty_tpl->_assignInScope('tpl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['app']->value['page']['subtemplate'],"_user-account-notifications.html" )));?>
  <?php $_smarty_tpl->_subTemplateRender("components/".((string)$_smarty_tpl->tpl_vars['tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subviews'=>''), 0, true);
?>

  <?php
}
}
/* {/block 'subview_container'} */
/* {block 'subview_bottom'} */
class Block_15345057425c09088723b6e5_69518955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_bottom' => 
  array (
    0 => 'Block_15345057425c09088723b6e5_69518955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'subview_bottom'} */
}
