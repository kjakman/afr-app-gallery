<?php
/* Smarty version 3.1.32, created on 2018-12-13 05:56:41
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/about.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c11f499335f62_97810389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '937691fe7647d70763053bf02452ee1f06a3047b' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/about.html',
      1 => 1544680601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/minisites/_artworks.html' => 1,
  ),
),false)) {
function content_5c11f499335f62_97810389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153429055c11f49932ae88_12089372', 'title');
?>

    
  <?php $_smarty_tpl->_assignInScope('gallery', $_smarty_tpl->tpl_vars['scope']->value['user']);?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3057681355c11f49932cbe5_48492374', 'content');
?>
  
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/minisites/index.html");
}
/* {block 'title'} */
class Block_153429055c11f49932ae88_12089372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_153429055c11f49932ae88_12089372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h3>About <?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['display_name'];?>
</h3>
  <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_3057681355c11f49932cbe5_48492374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3057681355c11f49932cbe5_48492374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="row detail-page-row">
    <div class="col-md-3 col-sm-12 text-left artist-subnav-container">
      <div class="artist-sub-nav">
        <p class="sub-nav-header artist-sub-nav-header"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['gallery']->value['display_name'];?>
</a></p>
          <ul class="hidden-sm-down sub-nav-ul artist-sub-nav-ul">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/images"    class="">Images</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/press"    class="">Press</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/publications" class="">Publications</a></li>
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
/images"       class="dropdown-item">Images</a></li>
            <li class="sub-nav-li"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/press"    class="dropdown-item">Press</a></li>
            <li class="sub-nav-li"><a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
/publications" class="dropdown-item">Publications</a></li>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-8 col-sm-12 detail-text">
    <?php if (($_smarty_tpl->tpl_vars['subview']->value == 'images')) {?>
    
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/minisites/_artworks.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      
    <?php } elseif (($_smarty_tpl->tpl_vars['subview']->value == 'biography')) {?>    
      <div class="row text-left">
        <div class="col-md-12">
          <h4>Solo</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['gallery']->value['gallery_solo_shows'];?>
</p>
        </div>
      </div>
      <div class="row text-left">
        <div class="col-md-12">
          <h4>Group</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['gallery']->value['gallery_group_shows'];?>
</p>
        </div>
      </div>
      <div class="row text-left">
        <div class="col-md-12">
          <h4>Press</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['gallery']->value['press'];?>
</p>
        </div>
      </div>
    
    <?php } elseif (($_smarty_tpl->tpl_vars['subview']->value == 'publications')) {?>
      <div class="row text-left">
        <div class="col-md-12">
          <h4>Publications</h4>
          <p><?php echo $_smarty_tpl->tpl_vars['gallery']->value['publications'];?>
</p>
        </div>
      </div>
    
    <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('first', $_smarty_tpl->tpl_vars['artworks']->value[0]);?>
      <?php $_smarty_tpl->_assignInScope('title_artwork', $_smarty_tpl->tpl_vars['first']->value['media_id']);?>
      <div class="image-container">
        <img src="<?php echo user_photo($_smarty_tpl->tpl_vars['gallery']->value,'medium');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['display_name'];?>
" class="img-responsive"/><br />
      </div>
      <br />
      <div style="text-align: justify;">
       <?php echo $_smarty_tpl->tpl_vars['gallery']->value['description'];?>

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
