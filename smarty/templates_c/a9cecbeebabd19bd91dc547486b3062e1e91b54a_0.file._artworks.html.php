<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:16:31
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/_artworks.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1358cfcef2f2_86767392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9cecbeebabd19bd91dc547486b3062e1e91b54a' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/_artworks.html',
      1 => 1544771791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1358cfcef2f2_86767392 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="row photo-grid-row">
    <?php $_smarty_tpl->_assignInScope('count', count($_smarty_tpl->tpl_vars['scope']->value['artworks']));?>
    <ul class="photo-grid gallery-list">
      <?php $_smarty_tpl->_assignInScope('index', 0);?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artworks']->value, 'artwork');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artwork']->value) {
?>
      <li class="photo-grid-container gallery-list-item pdf-thumb-box gallery-artwork-item" data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-media_id="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['media_id'];?>
">
        <?php if ((0)) {?>         <div class="pdf-thumb-box-overlay">
          <div class="pdf-thumb-box-links">
            <?php if (($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
            <a href="#" class="pull-left favorite-link"
               data-parent='<?php echo $_smarty_tpl->tpl_vars['parent_json']->value;?>
' 
               data-search='<?php echo $_smarty_tpl->tpl_vars['item_json']->value;?>
'>
              <i class="fa <?php echo $_smarty_tpl->tpl_vars['fav_class']->value;?>
 fa-2x" title="<?php echo $_smarty_tpl->tpl_vars['fav_title']->value;?>
"></i>
            </a>
            <?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['artwork_link']->value;?>
" class="cms-link gallery-link pull-right" title="Artwork Details" data-data='<?php echo $_smarty_tpl->tpl_vars['json']->value;?>
'>
              <i class="fa fa-info-circle fa-2x"></i>
            </a>
          </div> 
        </div> 
        <?php }?>
        
        <?php if ((0)) {?>
        <a href="#" class="cms-link gallery-link" data-data='<?php echo $_smarty_tpl->tpl_vars['json']->value;?>
'>
          <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['media_id'],'medium' ));?>
" class="">
        </a>
        <br>
        <?php } else { ?>
        
        <?php $_smarty_tpl->_assignInScope('container_id', "artwork_".((string)$_smarty_tpl->tpl_vars['artwork']->value['id']));?>
        <?php $_smarty_tpl->_assignInScope('data', array("obj_type"=>"media_collection","obj_id"=>$_smarty_tpl->tpl_vars['scope']->value['collection_id'],"plugin_id"=>"1355","container_id"=>$_smarty_tpl->tpl_vars['container_id']->value));?>
        <?php $_smarty_tpl->_assignInScope('popup_options', array("buttons"=>array("info","contact","map","zoom","share","fullscreen"),"tabs"=>array("artwork","artist"),"title"=>array("artwork","technique","artist","year")));?>
        
        <figure id="<?php echo $_smarty_tpl->tpl_vars['container_id']->value;?>
" data-data='<?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>
' 
          data-sharer_id="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user_id'];?>
" data-popup_options='<?php echo json_encode($_smarty_tpl->tpl_vars['popup_options']->value);?>
' 
          data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="__vp-plugin-container vp-loader-photoswipe">         
          <div class="__vp-flip-container" ontouchstart="this.classList.toggle('hover');">           
            <div class="__vp-flipper">             
              <div class="__vp-flip-front">               
                <img class="__vp-plugin-image center-cropped" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['media_id'],'medium' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['name'];?>
">             
              </div>             
              <div class="__vp-flip-back __vp-plugin-hover">               
                <img class="__vp-flip-back-image" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['media_id'],'medium' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['name'];?>
">               
                <div class="__vp-flip-back-card">                 
                  <h2><?php echo $_smarty_tpl->tpl_vars['artwork']->value['name'];
if (($_smarty_tpl->tpl_vars['artwork']->value['original_year'])) {?>, <?php echo $_smarty_tpl->tpl_vars['artwork']->value['original_year'];
}?></h2>                 
                  <div><?php echo $_smarty_tpl->tpl_vars['artwork']->value['original_technique'];?>
</div>    <br>                              
                  <a href="#" class="__vp-info __vp-view-button" id="__vp-view-button-1355">View</a>               
                </div>                                                                
              </div>           
            </div>         
          </div>         
        </figure>
        <?php }?>

        <?php if ((0)) {?>         <div class="photo-grid-title artinfo">
          <a href="<?php echo $_smarty_tpl->tpl_vars['profile_link']->value;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'slugify' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['artist_name'] ));?>
~<?php echo $_smarty_tpl->tpl_vars['artwork']->value['artist_id'];?>
" class="cms-link gallery-link" data-data='<?php echo $_smarty_tpl->tpl_vars['json']->value;?>
'><h2 class="black"><?php echo $_smarty_tpl->tpl_vars['artwork']->value['artist_name'];?>
</h2></a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['artwork_link']->value;?>
" class="cms-link gallery-link" data-data='<?php echo $_smarty_tpl->tpl_vars['json']->value;?>
'><h3><?php echo $_smarty_tpl->tpl_vars['artwork']->value['name'];?>
, <span><?php echo $_smarty_tpl->tpl_vars['artwork']->value['original_year'];?>
</span></h3></a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['profile_link']->value;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'slugify' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['curator_name'] ));?>
~<?php echo $_smarty_tpl->tpl_vars['artwork']->value['curator_id'];?>
" class="cms-link gallery-link" data-data='<?php echo $_smarty_tpl->tpl_vars['json']->value;?>
'><h4><?php echo $_smarty_tpl->tpl_vars['artwork']->value['curator_name'];?>
</h4></a>
        </div>
        <?php }?>
      </li>

        <?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
  

<?php }
}
