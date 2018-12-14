<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:26
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-publish-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135726856000_22644321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af117ba75242ada31b542e1461a70a579370d546' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-publish-form.html',
      1 => 1544771366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-detail.html' => 1,
  ),
),false)) {
function content_5c135726856000_22644321 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <?php $_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['collection']);?>
      <?php $_smarty_tpl->_assignInScope('artist_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['artist_id'],$_smarty_tpl->tpl_vars['scope']->value['artist_id'] )));?>
      <?php $_smarty_tpl->_assignInScope('gallery_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['gallery_id'],$_smarty_tpl->tpl_vars['scope']->value['gallery_id'] )));?>
      
      <?php if (($_smarty_tpl->tpl_vars['collection']->value['active'])) {?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( "This exhibtion has been published",'success' ));?>

      <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('collapse', 'collapse');?>
      <?php }?>
      
      <a href="#preview"> <i class="fa fa-arrow-circle-down"></i> Scroll down for preview.</a>
      <div class="gap gap-small"></div>
      
      
      <form class="ajax-submit" data-handler="save-collection" data-reload_link="#gbe_publish_link">
        <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
">
        <input hidden="1" name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="media_collection">      
        <input hidden="1" name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
        <input hidden="1" name="artist_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['artist_id']->value;?>
">
        <input hidden="1" name="gallery_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['gallery_id'];?>
">
                
        <!-- <div class="row form-group">
          <label for="media-name">Title Image</label>
          <a data-toggle="tooltip" data-placement="right" title="This is main image that will appear when the exhibition is explored, shared or followed. By default, it is the first image of the media attached to the collection, but you can also upload another one here."> <i class="fa fa-info-circle"></i></a>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_uploader' ][ 0 ], array( "media_collection",$_smarty_tpl->tpl_vars['collection']->value['id'],"title_image",array("resize"=>1,"cloud"=>1,"view"=>'grid',"handler"=>"gbe_title_image_handler") ));?>

        </div>      -->  
      
        <div class="gap gap-small"></div>

        <div class="row" id="visibility-settings">
          <div class="form-group col-xs-12">
            <label>Visibility Settings</label>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-sm-3 col-xs-3">
            <div class="checkbox">
              <label>
                <input name='active' value='0' type='hidden'>
                <input name="active" value="1" type="checkbox" <?php if (($_smarty_tpl->tpl_vars['collection']->value['active'])) {?>checked<?php }?> class="bootstrap-toggle" id="gbe_collection_active">
                Published
              </label>
            </div>
          </div>
          <div class="form-group col-sm-9 col-xs-9">
          Hidden exhibitions can only be seen by you, they don't appear on your website, plugins or to your followers, or even to people with a private link online.
          </div>          
        </div>
        
        <div class="row gbe-visibility-row <?php echo $_smarty_tpl->tpl_vars['collapse']->value;?>
">
          <div class="form-group col-sm-3 col-xs-3">
            <div class="checkbox gbe-visibility-checkbox">
              <label>
                <input name='public' value='0' type='hidden'>
                <input name="public" value="1"  type="checkbox" <?php if (($_smarty_tpl->tpl_vars['collection']->value['public'])) {?>checked<?php }?> class="bootstrap-toggle gbe-visibility-checkbox">
                Public
              </label>
            </div>
          </div>
          <div class="form-group col-sm-9 col-xs-9">
          Turn off to disable this Exhibition being shared with a public link, or found through browsing. When off, you can still share using a private link.
          </div>          
        </div>
        
       <div class="row gbe-visibility-row <?php echo $_smarty_tpl->tpl_vars['collapse']->value;?>
">
          <div class="form-group col-sm-3 col-xs-3">
            <div class="checkbox gbe-visibility-checkbox">
              <label>
                <input name='show_plugin' value='0' type='hidden'>
                <input name="show_plugin" value="1"  type="checkbox" <?php if (($_smarty_tpl->tpl_vars['collection']->value['show_plugin'])) {?>checked<?php }?> class="bootstrap-toggle gbe-visibility-checkbox">
                Plugins
              </label>
            </div>
          </div>
          <div class="form-group col-sm-9 col-xs-9">
          Turn off to disable plugins that feature this exhibition.
          </div>          
        </div>
        
        <div class="row gbe-visibility-row <?php echo $_smarty_tpl->tpl_vars['collapse']->value;?>
">
          <div class="form-group col-sm-3 col-xs-3">
            <div class="checkbox gbe-visibility-checkbox">
              <label>
                <input name='show_website' value='0' type='hidden'>
                <input name="show_website" value="1"  type="checkbox" <?php if (($_smarty_tpl->tpl_vars['collection']->value['show_website'])) {?>checked<?php }?> class="bootstrap-toggle gbe-visibility-checkbox">
                Website
              </label>
            </div>
          </div>
          <div class="form-group col-sm-9 col-xs-9">
          Turn off to hide this exhibition in your website built with the vPatina website builder.
          </div>          
        </div>
        
        <div class="row">
          <div class="form-group col-xs-12">
            <input type="submit" id="submit" class="btn btn-success" value="Save">
          </div>
        </div>
                
      </form>      
        
      
        <div class="gap gap-small"></div>
        <div class="row" id="preview">
          <div class="form-group col-xs-12">
            <label>Preview</label>

            <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
          </div>
        </div>      
<?php }
}
