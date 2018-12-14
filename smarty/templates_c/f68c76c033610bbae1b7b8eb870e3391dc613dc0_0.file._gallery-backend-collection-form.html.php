<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:23
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1357238d7d61_87743525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f68c76c033610bbae1b7b8eb870e3391dc613dc0' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-form.html',
      1 => 1544771363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_artist-dialog.html' => 1,
  ),
),false)) {
function content_5c1357238d7d61_87743525 (Smarty_Internal_Template $_smarty_tpl) {
?>      
          
      <?php $_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['collection']);?>
      <?php $_smarty_tpl->_assignInScope('artist_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['artist_id'],$_smarty_tpl->tpl_vars['scope']->value['artist_id'] )));?>
      <?php $_smarty_tpl->_assignInScope('curator_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['curator_id'],$_smarty_tpl->tpl_vars['scope']->value['curator_id'] )));?>

      <form id="gbe_collection_form" class="ajax-submit" data-handler="save-collection" data-success_handler="gbe_collection_handler">
        <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
">
        <input hidden="1" name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="media_collection">      
        <input hidden="1" name="type" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['type'],@constant('COLLECTION_TYPE_EXHIBITION') ));?>
">
        <?php if ((!$_smarty_tpl->tpl_vars['collection']->value['id'])) {?>
        <input hidden="1" name="active" type="hidden" value="0">
        <input hidden="1" name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
        <input hidden="1" name="artist_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['artist_id']->value;?>
">
        <input hidden="1" name="curator_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['curator_id']->value;?>
">        
        <?php }?>
        
        <input hidden="1" name="next_tab" type="hidden" value="location">      
        
        <div class="row">
          <div class="form-group col-sm-6 col-xs-12">
            <label for="media-name">Title *</label>
            <a data-toggle="tooltip" data-placement="right" title="This is title that will appear when the exhibition is explored, shared or followed"> <i class="fa fa-info-circle"></i></a>
            <input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
" maxlength="100">
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="artwork-available">Type</label>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_select' ][ 0 ], array( "subtype","exhibition_type",array("class"=>"form-control","value"=>$_smarty_tpl->tpl_vars['collection']->value['subtype']) ));?>

          </div>  
        </div>
        
        <?php $_smarty_tpl->_assignInScope('artist_ids_json', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['artist_ids'],'[]' )));?>
        <?php $_smarty_tpl->_assignInScope('artist_ids', json_decode($_smarty_tpl->tpl_vars['artist_ids_json']->value));?>
        <?php if ((!$_smarty_tpl->tpl_vars['artist_ids']->value)) {?>
         <?php $_smarty_tpl->_assignInScope('artist_ids', array($_smarty_tpl->tpl_vars['artist_id']->value));?>
        <?php }?>
        
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="media-name">Artist(s)</label>
            <a data-toggle="tooltip" data-placement="right" title="Type name and select from list using mouse of arrow keys. Or type a new name and press enter to add."> <i class="fa fa-info-circle"></i></a>
            <input type="hidden" readonly class="form-control" name="artist_ids" id="artist_ids" value="<?php echo $_smarty_tpl->tpl_vars['artist_ids_json']->value;?>
"><br>
            <ul id="artistTags">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artist_ids']->value, 'artist_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist_id']->value) {
?>
              <li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'display_name' ][ 0 ], array( $_smarty_tpl->tpl_vars['artist_id']->value ));?>
|<?php echo $_smarty_tpl->tpl_vars['artist_id']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
            </ul>      
            <?php if (($_smarty_tpl->tpl_vars['user']->value['level'] >= USER_LEVEL_STAFF || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'has_role' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value,@constant('USER_ROLE_CURATOR') )))) {?>            
            <button type="button" class="btn btn-primary btn-sm" id="newArtist" data-toggle="modal" data-target="#artist-form-modal">
              <i class="fa fa-plus-circle"></i> Create Artist
            </button>
            <a data-toggle="tooltip" data-placement="right" title="Only create new artist if the artist doesn’t exist on the system. To find en existing artist type their name into the bar above."> <i class="fa fa-info-circle"></i></a>
              <?php $_smarty_tpl->_assignInScope('add_artist', 1);?>
            <?php }?>
          </div>
  
          
          <div class="form-group col-xs-12">
            <label for="comment">Description of collection</label>
            <a data-toggle="tooltip" data-placement="right" title="This is the description of your exhibition that will appear when it is embedded, shared or followed"> <i class="fa fa-info-circle"></i></a>
            <textarea class="summernote form-control special" data-height="200" name="description"><?php echo $_smarty_tpl->tpl_vars['collection']->value['description'];?>
</textarea>
          </div>
        </div>
          
        <div class="row">
          <div class="form-group col-xs-12">
            <input type="submit" id="submit" class="btn btn-success" value="Save">
          </div>
        </div>
            
      </form>
      <div class="gap gap-small"></div>
      <?php if (($_smarty_tpl->tpl_vars['add_artist']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_artist-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>
      
      
      <?php echo '<script'; ?>
 type="text/javascript">        
        $('.modal').on('hidden.bs.modal', function(){
           $(this).find('form')[0].reset();
           $(this).find('.alert').hide();
        });       
        $(document).ready(function() {
          if($("#artistTags").length) gbe_artists_tagit();          
        });
      <?php echo '</script'; ?>
>

<?php }
}
