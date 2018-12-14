<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:31:10
  from '/web/sites/afr-app-gallery/smarty/templates/gallery-backend.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c3e93e9c3_94550282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff0544e63b4327c57a935fda7c7d5519645da291' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/gallery-backend.html',
      1 => 1544772670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-nav.html' => 1,
  ),
),false)) {
function content_5c135c3e93e9c3_94550282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1902629725c135c3e934c94_89170504', 'subview_top');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9313542955c135c3e935669_99751717', 'subview_title');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9391222295c135c3e936a96_82592255', 'subview_left_top');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12158713795c135c3e9371b5_24636693', 'subview_aside');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3066540005c135c3e9394b1_57183336', 'subview_left_bottom');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6160178445c135c3e939bb4_96708977', 'subview_nav');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10452547275c135c3e93bf01_55897095', 'subview_container');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1215780205c135c3e93e358_35345419', 'subview_bottom');
?>


  
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/sidebar.html");
}
/* {block 'subview_top'} */
class Block_1902629725c135c3e934c94_89170504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_top' => 
  array (
    0 => 'Block_1902629725c135c3e934c94_89170504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'subview_top'} */
/* {block 'subview_title'} */
class Block_9313542955c135c3e935669_99751717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_title' => 
  array (
    0 => 'Block_9313542955c135c3e935669_99751717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'gallery backend','c' ));?>

  <?php
}
}
/* {/block 'subview_title'} */
/* {block 'subview_left_top'} */
class Block_9391222295c135c3e936a96_82592255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_left_top' => 
  array (
    0 => 'Block_9391222295c135c3e936a96_82592255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php
}
}
/* {/block 'subview_left_top'} */
/* {block 'subview_aside'} */
class Block_12158713795c135c3e9371b5_24636693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_aside' => 
  array (
    0 => 'Block_12158713795c135c3e9371b5_24636693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="user-profile-avatar text-center">
        <img id="user_profile_photo" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'userphoto' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'display_name' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value ));?>
" title="AMaze" />
        <h5><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'display_name' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value ));?>
</h5>
        <p>Member Since <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value['created'] ));?>
</p>
    </div>
  <?php
}
}
/* {/block 'subview_aside'} */
/* {block 'subview_left_bottom'} */
class Block_3066540005c135c3e9394b1_57183336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_left_bottom' => 
  array (
    0 => 'Block_3066540005c135c3e9394b1_57183336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'subview_left_bottom'} */
/* {block 'subview_nav'} */
class Block_6160178445c135c3e939bb4_96708977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_nav' => 
  array (
    0 => 'Block_6160178445c135c3e939bb4_96708977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
>
    var g_artists = <?php echo $_smarty_tpl->tpl_vars['scope']->value['artists'];?>
;
    var g_selections = [];
    var g_user_ids = <?php echo $_smarty_tpl->tpl_vars['scope']->value['user_ids'];?>
;
    var g_site_id = "<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
";
    var g_user_id = "<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
";
    
    <?php echo '</script'; ?>
>
  <?php
}
}
/* {/block 'subview_nav'} */
/* {block 'subview_container'} */
class Block_10452547275c135c3e93bf01_55897095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_container' => 
  array (
    0 => 'Block_10452547275c135c3e93bf01_55897095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- 10 Subviews: artworks,artwork,exhibition,exhibitions,plugin,plugins,media,vault,network,website First: _gallery-backend-artworks.html-->
<div id='subview-prefix' class='collapse'>_gallery-backend-</div>
  <?php $_smarty_tpl->_assignInScope('tpl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['app']->value['page']['subtemplate'],"_gallery-backend-artworks.html" )));?>
  <?php $_smarty_tpl->_subTemplateRender("components/".((string)$_smarty_tpl->tpl_vars['tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subviews'=>''), 0, true);
?>

  <?php
}
}
/* {/block 'subview_container'} */
/* {block 'subview_bottom'} */
class Block_1215780205c135c3e93e358_35345419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subview_bottom' => 
  array (
    0 => 'Block_1215780205c135c3e93e358_35345419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'subview_bottom'} */
}
