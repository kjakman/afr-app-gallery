<?php
/* Smarty version 3.1.32, created on 2018-12-08 09:39:03
  from '/web/sites/afr-app-gallery/smarty/templates/user-profile-edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0b913799d7f8_14815928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf817faee090773e31b9ea1c99c184c098c8ffbd' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/user-profile-edit.html',
      1 => 1544261943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-nav.html' => 1,
  ),
),false)) {
function content_5c0b913799d7f8_14815928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16707003425c0b9137992f85_88702585', 'subview_top');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18841313215c0b9137993997_15920933', 'subview_title');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16531286395c0b9137994e76_29422855', 'subview_left_top');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12708609565c0b91379955c8_78426036', 'subview_aside');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6297990535c0b9137999498_90057845', 'subview_left_bottom');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2969974575c0b9137999bd3_50961636', 'subview_nav');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10320060335c0b913799aed0_53231286', 'subview_container');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122284965c0b913799d137_88892819', 'subview_bottom');
?>


  
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/subview.html");
}
/* {block 'subview_top'} */
class Block_16707003425c0b9137992f85_88702585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_top' => 
  array (
    0 => 'Block_16707003425c0b9137992f85_88702585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'subview_top'} */
/* {block 'subview_title'} */
class Block_18841313215c0b9137993997_15920933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_title' => 
  array (
    0 => 'Block_18841313215c0b9137993997_15920933',
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
class Block_16531286395c0b9137994e76_29422855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_left_top' => 
  array (
    0 => 'Block_16531286395c0b9137994e76_29422855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php
}
}
/* {/block 'subview_left_top'} */
/* {block 'subview_aside'} */
class Block_12708609565c0b91379955c8_78426036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_aside' => 
  array (
    0 => 'Block_12708609565c0b91379955c8_78426036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="user-profile-avatar text-center">
        <img id="user_profile_photo" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'userphoto' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'] ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'username' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'] ));?>
" title="AMaze" />
        <h5><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'username' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'] ));?>
</h5>
        <p>Member Since <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['profile']['created'] ));?>
</p>
        <div>
          <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_ACCOUNT') ));
echo $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'];?>
" class="btn btn-success"><i class="fa fa-key"></i> Account</a>
        </div>
        
    </div>
  <?php
}
}
/* {/block 'subview_aside'} */
/* {block 'subview_left_bottom'} */
class Block_6297990535c0b9137999498_90057845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_left_bottom' => 
  array (
    0 => 'Block_6297990535c0b9137999498_90057845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'subview_left_bottom'} */
/* {block 'subview_nav'} */
class Block_2969974575c0b9137999bd3_50961636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_nav' => 
  array (
    0 => 'Block_2969974575c0b9137999bd3_50961636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'subview_nav'} */
/* {block 'subview_container'} */
class Block_10320060335c0b913799aed0_53231286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_container' => 
  array (
    0 => 'Block_10320060335c0b913799aed0_53231286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- 11 Subviews: overview,settings,message,history,bookings,wishlist,inbox,verification,artist,gallery,collector First: _user-profile-edit-overview.html-->
<div id='subview-prefix' class='collapse'>_user-profile-edit-</div>
  <?php $_smarty_tpl->_assignInScope('tpl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['app']->value['page']['subtemplate'],"_user-profile-edit-overview.html" )));?>
  <?php $_smarty_tpl->_subTemplateRender("components/".((string)$_smarty_tpl->tpl_vars['tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subviews'=>''), 0, true);
?>

  <?php
}
}
/* {/block 'subview_container'} */
/* {block 'subview_bottom'} */
class Block_122284965c0b913799d137_88892819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_bottom' => 
  array (
    0 => 'Block_122284965c0b913799d137_88892819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'subview_bottom'} */
}
