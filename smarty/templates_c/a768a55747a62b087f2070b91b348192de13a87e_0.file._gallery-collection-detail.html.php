<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:26
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-detail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135726873659_84023896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a768a55747a62b087f2070b91b348192de13a87e' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-detail.html',
      1 => 1544771366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-date.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-event.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-information.html' => 2,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-curator-information.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-location.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html' => 1,
  ),
),false)) {
function content_5c135726873659_84023896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7416782005c135726862159_28731871', 'image');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3012204595c1357268631b3_94182095', 'aside');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15607865235c135726873085_52232338', 'below');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-detail-base.html");
}
/* {block 'image'} */
class Block_7416782005c135726862159_28731871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'image' => 
  array (
    0 => 'Block_7416782005c135726862159_28731871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <img id="collection_title_image" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection_id']->value,'big' ));?>
" class=""><br>
<?php
}
}
/* {/block 'image'} */
/* {block 'aside'} */
class Block_3012204595c1357268631b3_94182095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'aside' => 
  array (
    0 => 'Block_3012204595c1357268631b3_94182095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

  <h2><?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
</h2>
  <?php if (($_smarty_tpl->tpl_vars['collection']->value['start_date'] && $_smarty_tpl->tpl_vars['collection']->value['end_date'])) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-date.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
  
  <?php if (($_smarty_tpl->tpl_vars['collection']->value['event'])) {?>
    <?php $_smarty_tpl->_assignInScope('event', $_smarty_tpl->tpl_vars['collection']->value['event']);?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-event.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
  
  <?php $_smarty_tpl->_assignInScope('profile_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_PROFILE') )));?>
    
  <br>
  
  
  <?php if (($_smarty_tpl->tpl_vars['collection_type']->value == @constant('MEDIA_COLLECTION_TYPE_PROJECT'))) {?>
    <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['artist']->value);?>
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php } elseif ((($_smarty_tpl->tpl_vars['collection_type']->value == @constant('MEDIA_COLLECTION_TYPE_EXHIBITION')))) {?>
    <?php $_smarty_tpl->_assignInScope('artist_ids', json_decode($_smarty_tpl->tpl_vars['collection']->value['artist_ids']));?>
    <?php if ((!$_smarty_tpl->tpl_vars['artist_ids']->value)) {?> 
      <?php $_smarty_tpl->_assignInScope('artist_ids', array($_smarty_tpl->tpl_vars['collection']->value['artist_id']));?>
    <?php }?>
    <?php if ((count($_smarty_tpl->tpl_vars['artist_ids']->value) > 0)) {?>
      <?php if ((count($_smarty_tpl->tpl_vars['artist_ids']->value) == 1)) {?>
      <h2>Artist:</h2>
      <?php } else { ?>
      <h2>Artists:</h2>
      <?php }?>
      
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artist_ids']->value, 'artist_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist_id']->value) {
?>      
        <?php $_smarty_tpl->_assignInScope('profile', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_user' ][ 0 ], array( $_smarty_tpl->tpl_vars['artist_id']->value,1 )));?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <br>
    <?php }?>
  
    <h2>Represented by:</h2>
    <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['curator']->value);?>    
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-curator-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php if (($_smarty_tpl->tpl_vars['collection']->value['location_id'])) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-location.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
      <h3><?php if (($_smarty_tpl->tpl_vars['curator']->value['city'])) {
echo $_smarty_tpl->tpl_vars['curator']->value['city'];?>
, <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['curator']->value['country'],'countries','name' ));?>
</h3>
    <?php }?>
    <br>
    
    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
  <?php } else { ?>
    Error: <?php echo $_smarty_tpl->tpl_vars['collection_type']->value;?>
 is neither project nor exhibition
  <?php }?>

  <?php if (($_smarty_tpl->tpl_vars['collection']->value['description'])) {?>
    <div class="gap gap-small"></div>
    <h3>About <?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
</h3>
    <?php echo $_smarty_tpl->tpl_vars['collection']->value['description'];?>

  <?php }?>
  
<?php
}
}
/* {/block 'aside'} */
/* {block 'below'} */
class Block_15607865235c135726873085_52232338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'below' => 
  array (
    0 => 'Block_15607865235c135726873085_52232338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'below'} */
}
