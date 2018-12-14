<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:34:52
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-base.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135d1c3560b9_00003560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6116bfbb79c4491fa247445fb87d41d3cd81fa9f' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-base.html',
      1 => 1544772892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135d1c3560b9_00003560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('backend', 1);?>    
<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['scope']->value['obj_id']);?> 
<?php $_smarty_tpl->_assignInScope('obj_type', $_smarty_tpl->tpl_vars['scope']->value['obj_type']);?> 
<?php $_smarty_tpl->_assignInScope('parent_type', $_smarty_tpl->tpl_vars['scope']->value['parent_type']);
$_smarty_tpl->_assignInScope('parent_id', $_smarty_tpl->tpl_vars['scope']->value['parent_id']);?>

<?php if ((isset($_GET['add']) || $_smarty_tpl->tpl_vars['page']->value['action'] == "add") && !$_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->_assignInScope('add', 1);
$_smarty_tpl->_assignInScope('action', "Create");
}?> 
<?php if ((isset($_GET['edit']) || $_smarty_tpl->tpl_vars['page']->value['action'] == "edit") && $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->_assignInScope('edit', 1);
$_smarty_tpl->_assignInScope('action', "Edit");
}
$_smarty_tpl->_assignInScope('form', $_smarty_tpl->tpl_vars['add']->value || $_smarty_tpl->tpl_vars['edit']->value);
$_smarty_tpl->_assignInScope('list', $_smarty_tpl->tpl_vars['page']->value['subview'] == $_smarty_tpl->tpl_vars['page']->value['listview'] ? 1 : 0);
$_smarty_tpl->_assignInScope('add_to', $_smarty_tpl->tpl_vars['scope']->value['add_to']);?>

<?php $_smarty_tpl->_assignInScope('edit_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit') )));
$_smarty_tpl->_assignInScope('list_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['listview']) )));
$_smarty_tpl->_assignInScope('add_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:action',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'action'=>'add') )));
$_smarty_tpl->_assignInScope('view_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id']) )));
$_smarty_tpl->_assignInScope('base_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview']) )));?>

<?php if (($_smarty_tpl->tpl_vars['parent_type']->value && $_smarty_tpl->tpl_vars['parent_id']->value)) {?>
  <?php $_smarty_tpl->_assignInScope('tail', "&amp;_pt=".((string)$_smarty_tpl->tpl_vars['parent_type']->value)."&amp;_pid=".((string)$_smarty_tpl->tpl_vars['parent_id']->value));
}?>      




<?php $_smarty_tpl->_assignInScope('data', json_decode($_smarty_tpl->tpl_vars['user']->value['data']));
$_smarty_tpl->_assignInScope('default_options_json', @constant('POPUP_DEFAULTS'));?>

<?php if (($_smarty_tpl->tpl_vars['data']->value && $_smarty_tpl->tpl_vars['data']->value->gallery)) {?>
  <?php $_smarty_tpl->_assignInScope('user_settings', $_smarty_tpl->tpl_vars['data']->value->gallery);?>
  <?php $_smarty_tpl->_assignInScope('user_settings_json', json_encode($_smarty_tpl->tpl_vars['user_settings']->value));
}
if ((!$_smarty_tpl->tpl_vars['user_settings_json']->value)) {?>
  <?php $_smarty_tpl->_assignInScope('user_settings_json', $_smarty_tpl->tpl_vars['default_options_json']->value);?>
  <?php $_smarty_tpl->_assignInScope('user_settings', json_decode($_smarty_tpl->tpl_vars['user_settings_json']->value));?> 
<?php }?>

<?php $_smarty_tpl->_assignInScope('settings_quick', array('dot'=>'Availability','gallery'=>'Gallery/Curator','artwork'=>"Title",'technique'=>'Technique','artist'=>'Artist','year'=>'Primary Year','secondary'=>'Secondary Year','size'=>'Dimensions','series'=>'Number of Editions','price'=>'Price','price_option'=>'Price Option'));
$_smarty_tpl->_assignInScope('settings_full', $_smarty_tpl->tpl_vars['settings_quick']->value);
$_tmp_array = isset($_smarty_tpl->tpl_vars['settings_full']) ? $_smarty_tpl->tpl_vars['settings_full']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['description'] = 'Description';
$_smarty_tpl->_assignInScope('settings_full', $_tmp_array);?>
           
<?php $_smarty_tpl->_assignInScope('settings_buttons', array('info'=>'Information','calendar'=>'Calendar','contact'=>'Chat','map'=>'Map','zoom'=>'Zoom','share'=>'Share','fullscreen'=>"Full screen",'follow'=>'Follow','download'=>'Download'));
$_smarty_tpl->_assignInScope('settings_tabs', array('artwork'=>'Artwork','artist'=>'Artist','exhibition'=>'Exhibition','gallery'=>'Gallery'));?>


<!-- spacer -->
<div class="hidden-sm hidden-md hidden-lg" style="height:48px">
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12181513365c135d1c343b56_87086648', "buttons");
?>


<?php if (($_smarty_tpl->tpl_vars['buttons']->value)) {?>
<div class="gap gap-small border-bottom-light"></div>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11926451195c135d1c354254_35534786', "main");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4694332455c135d1c354af6_15603854', "table");
?>


<?php echo '<script'; ?>
>
  if(typeof g_section == "undefined") {
    var g_section = '<?php echo $_smarty_tpl->tpl_vars['scope']->value['section'];?>
';
    console.log("Weird, no g_section in base... val=" + g_section);
  } else {
    g_section = '<?php echo $_smarty_tpl->tpl_vars['scope']->value['section'];?>
';
    console.log("\n\n\n backend-base: ok, g_ready_scripts is defined... val=" + g_section);
    $(".navbar-nav li").removeClass('active');    
    $("#nav_section_" + g_section).addClass('active');    
  }
    
<?php echo '</script'; ?>
>
<?php }
/* {block "buttons"} */
class Block_12181513365c135d1c343b56_87086648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'buttons' => 
  array (
    0 => 'Block_12181513365c135d1c343b56_87086648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

<?php $_smarty_tpl->_assignInScope('buttons', 0);
if (($_smarty_tpl->tpl_vars['list_view']->value || $_smarty_tpl->tpl_vars['item_view']->value)) {?>

  <ul class="list inline-list">
  <?php if (($_smarty_tpl->tpl_vars['add_to']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('ex_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action',array('subview'=>'exhibition','id'=>$_smarty_tpl->tpl_vars['add_to']->value,'action'=>'edit') )));?>  
    <?php $_smarty_tpl->_assignInScope('buttons', 1);?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ex_link']->value;?>
/media?_pv=1" class="btn btn-danger ajax-loader" data-target="#subview-container"><i class="fa fa-arrow-left"></i>Cancel - Back to exhibition</a></li>  
  <?php } else { ?>
    <?php if ((!$_smarty_tpl->tpl_vars['list']->value && !$_smarty_tpl->tpl_vars['form']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('buttons', 1);?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['list_link']->value;?>
?_pv=1<?php echo $_smarty_tpl->tpl_vars['tail']->value;?>
" class="btn btn-primary ajax-loader" data-target="#subview-container"><i class="fa fa-arrow-left"></i> List</a></li>
    <?php }?>
    
    <?php if (($_smarty_tpl->tpl_vars['add']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('buttons', 1);?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['list_link']->value;?>
?_pv=1<?php echo $_smarty_tpl->tpl_vars['tail']->value;?>
" class="btn btn-danger ajax-loader" data-target="#subview-container"><i class="fa fa-arrow-left"></i>Cancel</a></li>
    <?php }?>
  
    <?php if (($_smarty_tpl->tpl_vars['edit']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('buttons', 1);?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['view_link']->value;
if (($_smarty_tpl->tpl_vars['obj_type']->value != 'plugin')) {?>?_pv=1<?php }?>" class="btn btn-primary ajax-loader" <?php if (($_smarty_tpl->tpl_vars['obj_type']->value == 'plugin')) {?>data-breakout=1<?php }?> data-target="#subview-container"><i class="fa fa-eye"></i> Preview</a></li>
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['list']->value && in_array($_smarty_tpl->tpl_vars['obj_type']->value,array('artwork','media_collection','minisite','artist')))) {?> <!--pradeepa-->
      <?php $_smarty_tpl->_assignInScope('buttons', 1);?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['add_link']->value;?>
?_pv=1" class="btn btn-success ajax-loader" data-target="#subview-container"><i class="fa fa-plus-circle"></i> Create <?php echo $_smarty_tpl->tpl_vars['what']->value;?>
</a></li>
    <?php }?>

    <?php if (($_smarty_tpl->tpl_vars['list']->value && $_smarty_tpl->tpl_vars['obj_type']->value == 'plugin' && $_smarty_tpl->tpl_vars['parent_type']->value && $_smarty_tpl->tpl_vars['parent_id']->value)) {?>
      <li><a href="/backend/plugin/add?_pv=1&amp;_pt=<?php echo $_smarty_tpl->tpl_vars['parent_type']->value;?>
&amp;_pid=<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
" class="btn btn-success ajax-loader" data-target="#subview-container"><i class="fa fa-plus-circle"></i> Create Plugin</a></li>    
    <?php }?>
    
    <?php if ((!$_smarty_tpl->tpl_vars['list']->value && $_smarty_tpl->tpl_vars['obj_type']->value == 'media_collection')) {?>
      <?php $_smarty_tpl->_assignInScope('buttons', 1);?>
      <li><a href="/backend/plugin/add?_pv=1&amp;_pt=media_collection&amp;_pid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-success ajax-loader" data-target="#subview-container"><i class="fa fa-plus-circle"></i> Create Plugin</a></li>
    <?php }?>
    
    <?php if (($_smarty_tpl->tpl_vars['object']->value && !$_smarty_tpl->tpl_vars['form']->value && $_smarty_tpl->tpl_vars['auth_edit_backend']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('buttons', 1);?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['edit_link']->value;?>
?_pv=1" class="btn btn-success ajax-loader" data-target="#subview-container"><i class="fa fa-pencil-square"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'edit','c' ));?>
</a></li>
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['page']->value['action'])) {?>
      <?php $_smarty_tpl->_assignInScope('title', ((string)(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['page']->value['action'])))." ".((string)$_smarty_tpl->tpl_vars['what']->value));?>
    <?php } elseif (($_smarty_tpl->tpl_vars['add_to']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('title', "Select ".((string)$_smarty_tpl->tpl_vars['what']->value)." to attach to exhibition");?>
    <?php } elseif (($_smarty_tpl->tpl_vars['scope']->value['title'])) {?>
      <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['scope']->value['title']);?>
    <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('title', smarty_modifier_capitalize($_smarty_tpl->tpl_vars['plural']->value));?>
    <?php }?>
    <li>
      <h3 class="inline" style="position:relative;top:10px;left:10px"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
    </li>
    
    
  <?php }?>
  </ul>
<?php }
}
}
/* {/block "buttons"} */
/* {block "main"} */
class Block_11926451195c135d1c354254_35534786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_11926451195c135d1c354254_35534786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "main"} */
/* {block "table"} */
class Block_4694332455c135d1c354af6_15603854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table' => 
  array (
    0 => 'Block_4694332455c135d1c354af6_15603854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "table"} */
}
