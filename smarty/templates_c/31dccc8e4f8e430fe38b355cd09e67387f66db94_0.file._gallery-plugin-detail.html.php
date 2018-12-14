<?php
/* Smarty version 3.1.32, created on 2018-12-05 07:15:43
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-plugin-detail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c077b1fb50868_27572105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31dccc8e4f8e430fe38b355cd09e67387f66db94' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-plugin-detail.html',
      1 => 1543994143,
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
function content_5c077b1fb50868_27572105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('plugin', $_smarty_tpl->tpl_vars['scope']->value['plugin']);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15371746525c077b1fb40923_95071565', 'image');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9190065255c077b1fb415b8_29569658', 'aside');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11753385455c077b1fb50341_55146697', 'below');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-detail-base.html");
}
/* {block 'image'} */
class Block_15371746525c077b1fb40923_95071565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'image' => 
  array (
    0 => 'Block_15371746525c077b1fb40923_95071565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
  <?php echo $_smarty_tpl->tpl_vars['scope']->value['preview'];?>

  <?php echo '</script'; ?>
>
  <?php
}
}
/* {/block 'image'} */
/* {block 'aside'} */
class Block_9190065255c077b1fb415b8_29569658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'aside' => 
  array (
    0 => 'Block_9190065255c077b1fb415b8_29569658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
  <?php $_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['collection']);?>
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
class Block_11753385455c077b1fb50341_55146697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'below' => 
  array (
    0 => 'Block_11753385455c077b1fb50341_55146697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'below'} */
}
