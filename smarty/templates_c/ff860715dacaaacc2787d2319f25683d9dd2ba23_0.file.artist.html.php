<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:49:24
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/artist.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c136084d1a395_78851779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff860715dacaaacc2787d2319f25683d9dd2ba23' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/artist.html',
      1 => 1544773764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/minisites/_artworks.html' => 1,
  ),
),false)) {
function content_5c136084d1a395_78851779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


  
  
  <?php $_smarty_tpl->_assignInScope('artist', $_smarty_tpl->tpl_vars['scope']->value['artist']);?>
  <?php echo $_smarty_tpl->tpl_vars['artist']->value['page_slug'];?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18467557465c136084d0cdb7_36039503', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/minisites/index.html");
}
/* {block 'content'} */
class Block_18467557465c136084d0cdb7_36039503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18467557465c136084d0cdb7_36039503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
         
  <div class="row detail-page-row">
    <div class="col-md-3 col-sm-12 text-left artist-subnav-container">
      <div class="artist-sub-nav">
        <h1 class="sub-nav-header artist-sub-nav-header"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['artist']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['slug']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['artist']->value['display_name'];?>
</a></h1>
          <ul class="hidden-sm-down sub-nav-ul artist-sub-nav-ul">

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['artist']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['slug']->value;?>
/images"       class="">Images</a></li>
            <?php if (($_smarty_tpl->tpl_vars['scope']->value['show_bio'])) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['artist']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['slug']->value;?>
/biography"    class="">Biography</a></li><?php }?>
            <?php if (($_smarty_tpl->tpl_vars['scope']->value['show_pub'])) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['artist']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['slug']->value;?>
/publications" class="">Publications</a></li><?php }?>
          </ul>
        </p>
        <!-- mobile layout -->
        <div class="hidden-md-up btn-group sub-nav-ul artist-sub-nav-ul mobile-sub-nav-ul">
          <button type="button" class="btn dropdown-toggle btn-sub-nav-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About Artist
          </button>
          <div class="dropdown-menu">
              <li class="sub-nav-li"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/images" class="dropdown-item">Images</a></li>
            <?php if (($_smarty_tpl->tpl_vars['scope']->value['show_bio'])) {?><li class="sub-nav-li"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/biography" class="dropdown-item">Biography</a></li><?php }?>
            <?php if (($_smarty_tpl->tpl_vars['scope']->value['show_pub'])) {?><li class="sub-nav-li"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/publications" class="dropdown-item">Publications</a></li><?php }?>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-8 col-sm-12 detail-text">
    <?php if (($_smarty_tpl->tpl_vars['subview']->value == 'images')) {?>
    
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/minisites/_artworks.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      
    <?php } elseif (($_smarty_tpl->tpl_vars['subview']->value == 'biography')) {?>
      <?php if (($_smarty_tpl->tpl_vars['scope']->value['show_solo'])) {?>
      <div class="row text-left">
        <div class="col-md-12">
          <h4>Solo</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['artist']->value['gallery_solo_shows'];?>
</p>
        </div>
      </div>
      <?php }?>
      <?php if (($_smarty_tpl->tpl_vars['scope']->value['show_group'])) {?>
      <div class="row text-left">
        <div class="col-md-12">
          <h4>Group</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['artist']->value['gallery_group_shows'];?>
</p>
        </div>
      </div>
      <?php }?>
      <?php if (($_smarty_tpl->tpl_vars['scope']->value['show_press'])) {?>
      <div class="row text-left">
        <div class="col-md-12">
          <h4>Press</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['artist']->value['press'];?>
</p>
        </div>
      </div>
      <?php }?>
    
    <?php } elseif (($_smarty_tpl->tpl_vars['subview']->value == 'publications')) {?>
      <div class="row text-left">
        <div class="col-md-12">
          <h4>Publications</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['artist']->value['publications'];?>
</p>
        </div>
      </div>
    
    <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('first', $_smarty_tpl->tpl_vars['artworks']->value[0]);?>
      <?php $_smarty_tpl->_assignInScope('title_artwork', $_smarty_tpl->tpl_vars['first']->value['media_id']);?>
      <div class="image-container-max-height">
        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'userphoto' ][ 0 ], array( $_smarty_tpl->tpl_vars['artist']->value,'medium' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['artist']->value['display_name'];?>
" class="img-responsive"/><br />
      </div>
      <br />
      <div style="text-align: justify;">
       <?php echo $_smarty_tpl->tpl_vars['artist']->value['description'];?>

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
