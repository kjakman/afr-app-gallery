<?php
/* Smarty version 3.1.32, created on 2018-12-08 09:46:57
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artwork-detail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0b93115550a9_97651551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4ffcac5559b890f2b9c2210b1bf12dc31b886ef' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artwork-detail.html',
      1 => 1544262417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-information.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artwork-information.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-date.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-event.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-curator-information.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-location.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html' => 1,
  ),
),false)) {
function content_5c0b93115550a9_97651551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9700945415c0b9311545d54_17126360', 'image');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15244168005c0b9311547540_47802654', 'aside');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4121292295c0b9311553eb0_30877756', 'below');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-detail-base.html");
}
/* {block 'image'} */
class Block_9700945415c0b9311545d54_17126360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'image' => 
  array (
    0 => 'Block_9700945415c0b9311545d54_17126360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
      <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['title_image'],"big" ));?>
" class=""><br>
<?php
}
}
/* {/block 'image'} */
/* {block 'aside'} */
class Block_15244168005c0b9311547540_47802654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'aside' => 
  array (
    0 => 'Block_15244168005c0b9311547540_47802654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['artist']->value);?>
  <?php $_smarty_tpl->_assignInScope('profile_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_PROFILE') )));?>
  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artwork-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <br>
  
  <?php $_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['collection']);?>
  <?php if ((($_smarty_tpl->tpl_vars['collection']->value['type'] == @constant('MEDIA_COLLECTION_TYPE_EXHIBITION')))) {?>
    <?php $_smarty_tpl->_assignInScope('collection_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_GALLERY'),"media_collection",$_smarty_tpl->tpl_vars['collection']->value['type'] )));?>
  
    <div class='italic'>Featured in exhibtion:</div>
    <h2><a href="<?php echo $_smarty_tpl->tpl_vars['collection_link']->value;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'slugify' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['title'] ));?>
~<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
</a></h2>
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
    
    <hr class="full">
    <br>
  
    <div class='italic'>For more information:</div>
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
    
<?php
}
}
/* {/block 'aside'} */
/* {block 'below'} */
class Block_4121292295c0b9311553eb0_30877756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'below' => 
  array (
    0 => 'Block_4121292295c0b9311553eb0_30877756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        
  <p><?php echo $_smarty_tpl->tpl_vars['artwork']->value['comment'];?>
<br>
   <?php echo $_smarty_tpl->tpl_vars['artwork']->value['short_description'];?>
<br>
  </p>

<?php
}
}
/* {/block 'below'} */
}
