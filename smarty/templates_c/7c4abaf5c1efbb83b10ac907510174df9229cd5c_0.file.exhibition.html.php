<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:44:32
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/exhibition.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135f608ff4b4_07751449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c4abaf5c1efbb83b10ac907510174df9229cd5c' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/exhibition.html',
      1 => 1544773472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-date.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-event.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/minisites/_artworks.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-map.html' => 1,
  ),
),false)) {
function content_5c135f608ff4b4_07751449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  
  <?php $_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['collection']);?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5835303705c135f608eb6e6_34259430', 'title');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20809008435c135f608ed288_90114499', 'content');
?>
  
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/minisites/index.html");
}
/* {block 'title'} */
class Block_5835303705c135f608eb6e6_34259430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5835303705c135f608eb6e6_34259430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (($_smarty_tpl->tpl_vars['scope']->value['title'])) {?> <h2><?php echo $_smarty_tpl->tpl_vars['scope']->value['title'];?>
</h2><?php }?>      
  <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_20809008435c135f608ed288_90114499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20809008435c135f608ed288_90114499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_assignInScope('artist_id', $_smarty_tpl->tpl_vars['collection']->value['artist_id']);?>
  <?php $_smarty_tpl->_assignInScope('artist_ids', json_decode($_smarty_tpl->tpl_vars['collection']->value['artist_ids']));?>
  
    <div class="row detail-page-row">
    <div class="col-md-3 col-sm-12 text-left artist-subnav-container">
      <div class="artist-sub-nav">
        <h1 class="sub-nav-header artist-sub-nav-header"> 
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artist_ids']->value, 'artist_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist_id']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('artist_name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'displayname' ][ 0 ], array( $_smarty_tpl->tpl_vars['artist_id']->value )));?>
                        <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['collection']->value['page_slug'];
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'slugify' ][ 0 ], array( $_smarty_tpl->tpl_vars['artist_name']->value ));?>
"><?php echo $_smarty_tpl->tpl_vars['artist_name']->value;?>
</a>  -->
            <?php echo $_smarty_tpl->tpl_vars['artist_name']->value;?>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <br><br>
          <?php if (($_smarty_tpl->tpl_vars['collection']->value['page_slug'])) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['collection']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['slug']->value;?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['title'],"Untitled" ));?>
</a>
        </h1>
          <ul class="hidden-sm-down sub-nav-ul artist-sub-nav-ul">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['collection']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['slug']->value;?>
/images"       class="">Images</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['collection']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['slug']->value;?>
/location"    class="">Location</a></li>
            <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/publications" class="">Publications</a></li-->
          </ul>
          <?php } else { ?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['collection']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['slug']->value;?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['title'],"Untitled" ));?>
</a>
            </h1>
              <ul class="hidden-sm-down sub-nav-ul artist-sub-nav-ul">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/images"       class="">Imagess</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/location"    class="">Location</a></li>
                <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/publications" class="">Publications</a></li-->
              </ul>
          <?php }?>
        </p>
        <!-- mobile layout -->
        <div class="hidden-md-up btn-group sub-nav-ul artist-sub-nav-ul mobile-sub-nav-ul">
          <button type="button" class="btn dropdown-toggle btn-sub-nav-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About Exhibition
          </button>
          <div class="dropdown-menu">
            <li class="sub-nav-li"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/images"       class="dropdown-item">Images</a></li>
            <li class="sub-nav-li"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/location"    class="dropdown-item">Location</a></li>
            <!--li class="sub-nav-li"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/publications" class="dropdown-item">Publications</a></li-->
          </div>
        </div>
      </div>
      <br>
      <div class="small-text">
      <?php if (($_smarty_tpl->tpl_vars['collection']->value['start_date'] && $_smarty_tpl->tpl_vars['collection']->value['end_date'])) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-date.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>
      
      <?php if (($_smarty_tpl->tpl_vars['collection']->value['event'])) {?>
        <?php $_smarty_tpl->_assignInScope('event', $_smarty_tpl->tpl_vars['collection']->value['event']);?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-event.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>
      </div>
    </div>
    
    <div class="col-md-8 col-sm-12 detail-text">
    <?php if (($_smarty_tpl->tpl_vars['subview']->value == 'images')) {?>
    
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/minisites/_artworks.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      
    <?php } elseif (($_smarty_tpl->tpl_vars['subview']->value == 'location')) {?>    
      <div class="row text-left">
        <div class="col-md-12">        
        <?php $_smarty_tpl->_assignInScope('loc', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['location_id'],"location" )));?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-map.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      </div>

    
    <?php } elseif (($_smarty_tpl->tpl_vars['subview']->value == 'publications')) {?>
      <div class="row text-left">
        <div class="col-md-12">
          <h4>Publications</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['collection']->value['publications'];?>
</p>
        </div>
      </div>
    
    <?php } else { ?>
    
      
      <div class="image-container-max-height">
        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['id'],'medium' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
" class="img-responsive" /><br />
      </div>
      <br />
      <div style="text-align: justify;">
       <?php echo $_smarty_tpl->tpl_vars['collection']->value['description'];?>

      </div>
      <p>&nbsp;</p>
    <?php }?>
    </div>
    
  </div>  

  <?php
}
}
/* {/block 'content'} */
}
