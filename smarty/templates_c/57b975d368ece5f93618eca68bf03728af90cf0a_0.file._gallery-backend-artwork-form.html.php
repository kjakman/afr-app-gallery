<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:08:47
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1356ffadd529_92948128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57b975d368ece5f93618eca68bf03728af90cf0a' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-form.html',
      1 => 1544771327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_artist-dialog.html' => 1,
  ),
),false)) {
function content_5c1356ffadd529_92948128 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <?php $_smarty_tpl->_assignInScope('artwork', $_smarty_tpl->tpl_vars['scope']->value['artwork']);?>
      <?php $_smarty_tpl->_assignInScope('artist_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['artist_id'],$_smarty_tpl->tpl_vars['scope']->value['artist_id'] )));?>
      <?php $_smarty_tpl->_assignInScope('curator_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['curator_id'],$_smarty_tpl->tpl_vars['scope']->value['curator_id'] )));?>
      
      <form class="ajax-submit" data-handler="save-artwork" data-success_handler="gbe_artwork_handler">
        <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['id'];?>
">
        <input hidden="1" name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="artwork">      
        <input hidden="1" name="next_tab" type="hidden" value="image">      
        <?php if ((!$_smarty_tpl->tpl_vars['artwork']->value['id'])) {?>
        <input hidden="1" name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
        <input hidden="1" name="artist_id" type="hidden" value="0">
        <input hidden="1" name="curator_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['curator_id']->value;?>
">
        <input hidden="1" name="site_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['site_id'],$_smarty_tpl->tpl_vars['site']->value['id'] ));?>
">
        <?php }?>
        
        <?php $_smarty_tpl->_assignInScope('artist_ids_json', $_smarty_tpl->tpl_vars['artwork']->value['artist_ids']);?>
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
        </div>



        <div class="form-group col-sm-6">
          <label for="artwork-title">Title *</label>
          <input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['title'];?>
" maxlength="255" required>
        </div>
        <div class="form-group col-sm-6">
          <label for="artwork-technique">Technique *</label>
          <input type="text" class="form-control" name="technique" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['technique'];?>
" maxlength="255" required>
        </div>
        
        
        <div class="row">
          <div class="form-group col-sm-4">
            <label for="artwork-available">Status</label>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_select' ][ 0 ], array( "status","artwork_status",array("class"=>"form-control","value"=>$_smarty_tpl->tpl_vars['artwork']->value['status']) ));?>

          </div>
            
        </div>
                
        <?php if (($_smarty_tpl->tpl_vars['artwork']->value['id'])) {?>
          <?php $_smarty_tpl->_assignInScope('save_text', 'Save');?>
        <?php } else { ?>
          <?php $_smarty_tpl->_assignInScope('save_text', 'Save and Add Image');?>
        <?php }?>
        <input type="submit" class="btn btn-success" value="<?php echo $_smarty_tpl->tpl_vars['save_text']->value;?>
">
            
      </form>
      <div class="gap gap-small"></div>

      <?php if (($_smarty_tpl->tpl_vars['add_artist']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_artist-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>
      
      <?php echo '<script'; ?>
>
      $(function() {
        console.log( "ready!" );
        awb_set_type($("#type").val());
        if($("#artistTags").length) gbe_artists_tagit();          
      });
      $(document).on("change",'#type',function() {
        var val = $(this).val();
        awb_set_type(val);
      });
      function awb_set_type(val) {
        $(".type-10, type-11, .type-20, .type-21, type-22, .type-30, .type-40, .type-50, .type-60").hide();
        console.log("showing type " + val);
        if(val) {
          $(".type-" + val).show();  
        }
      }
      <?php echo '</script'; ?>
>
      
<?php }
}
