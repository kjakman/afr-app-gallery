<?php
/* Smarty version 3.1.32, created on 2018-12-10 07:12:30
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-plugin-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0e11dee7c9e9_48562269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60f2bffaab8ec2a71a9b8b4075dd5d407deed43d' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-plugin-form.html',
      1 => 1544425950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e11dee7c9e9_48562269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>        <?php $_smarty_tpl->_assignInScope('all_buttons', json_decode(@constant('POPUP_BUTTONS')));?>
        <?php $_smarty_tpl->_assignInScope('all_tabs', json_decode(@constant('POPUP_TABS')));?>
        <?php $_smarty_tpl->_assignInScope('all_titles', json_decode(@constant('POPUP_TITLES')));?>

        <?php $_smarty_tpl->_assignInScope('defaultsJson', @constant('POPUP_DEFAULTS'));?>
        <?php $_smarty_tpl->_assignInScope('defaults', json_decode($_smarty_tpl->tpl_vars['defaultsJson']->value));?>
      
        <?php $_smarty_tpl->_assignInScope('popupOptionsJson', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['popup_options'],$_smarty_tpl->tpl_vars['defaultsJson']->value )));?>
        <?php $_smarty_tpl->_assignInScope('popupOptions', json_decode($_smarty_tpl->tpl_vars['popupOptionsJson']->value));?>
        
        <?php $_smarty_tpl->_assignInScope('buttons', $_smarty_tpl->tpl_vars['popupOptions']->value->buttons);?>
        <?php $_smarty_tpl->_assignInScope('tabs', $_smarty_tpl->tpl_vars['popupOptions']->value->tabs);?>        
        <?php $_smarty_tpl->_assignInScope('titles', $_smarty_tpl->tpl_vars['popupOptions']->value->title);?>
        <?php $_smarty_tpl->_assignInScope('images', $_smarty_tpl->tpl_vars['scope']->value['images']);?>
        <?php $_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['parent_object']);?>
                
                <?php if ((!$_smarty_tpl->tpl_vars['plugin']->value['size'])) {?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['plugin']) ? $_smarty_tpl->tpl_vars['plugin']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['size'] = 'medium';
$_smarty_tpl->_assignInScope('plugin', $_tmp_array);?>
        <?php }?>
      <form class="ajax-submit" data-handler="save-plugin" data-success_handler="gbe_plugin_handler">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
">      
        <input type="hidden" name="obj_type" value="plugin">      
        <input type="hidden" name="obj_id" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['id'];?>
">      
        <input type="hidden" name="parent_type" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['parent_type'],'media_collection' ));?>
">      
        <input type="hidden" name="parent_id" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['parent_id'],$_smarty_tpl->tpl_vars['collection']->value['id'] ));?>
">      
        <input type="hidden" name="site_id" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['site_id'],$_smarty_tpl->tpl_vars['site']->value['id'] ));?>
">      
        <input type="hidden" name="user_id" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['user_id'],$_smarty_tpl->tpl_vars['user']->value['id'] ));?>
">      
        <input type="hidden" class="form-control" name="popup_options" id="popup_options" value='<?php echo json_encode($_smarty_tpl->tpl_vars['popupOptions']->value);?>
'>     
        <input type="hidden" class="form-control" name="popup_buttons" id="popup_tabs" value='<?php echo json_encode($_smarty_tpl->tpl_vars['tabs']->value);?>
'>     
        <input type="hidden" class="form-control" name="popup_tabs"    id="popup_buttons" value='<?php echo json_encode($_smarty_tpl->tpl_vars['buttons']->value);?>
'>     
        <input type="hidden" class="form-control" name="popup_buttons" id="popup_titles" value='<?php echo json_encode($_smarty_tpl->tpl_vars['titles']->value);?>
'>     

        <br>        
        <div class="form-group">
          <label for="plugin_name">Name (not displayed)</label>
          <a data-toggle="tooltip" title="Choose a distinctive name for your plugin so you can easily distinctively identify it from other plugins you style for the same exhibition"> <i class="fa fa-info-circle"></i></a>
          <input type="text" class="form-control" name="name" id="plugin_name" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['name'],$_smarty_tpl->tpl_vars['collection']->value['title'] ));?>
" maxlength="255">
        </div>

        <br>   
        
        <div class="row">                   
          <div class="col-sm-4">
            <h3>Plugin Options</h3>
                
            <div class="form-group">
              <label for="plugin_title">Screen Title *</label>
              <a data-toggle="tooltip" title="This is the text that the collector will see on the plugin, either on the image when they mouseover it, or on the actual text of the plugin if the plugin is a text link"> <i class="fa fa-info-circle"></i></a>
              <input type="text" class="form-control" name="title" id="plugin_title" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['title'],$_smarty_tpl->tpl_vars['collection']->value['title'] ));?>
" maxlength="255">
            </div>
    
            <div class="form-group">
              <label for="plugin_subtitle">Screen Subtitle *</label>
              <a data-toggle="tooltip" title="This is the smaller title text that the collector will see on the plugin, either on the image when they mouseover it, or on the actual text of the plugin if the plugin is a text link"> <i class="fa fa-info-circle"></i></a>
              <input type="text" class="form-control" name="subtitle" id="plugin_subtitle" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['subtitle'],'' ));?>
" maxlength="128">
            </div>
            
            <div class="form-group">
              <label for="media-name">Plugin Image</label>
              <select name="title_image" class="form-control">
                <option value="">Title Image</option>   
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['image']->value['media_id'];?>
" <?php if (($_smarty_tpl->tpl_vars['plugin']->value['title_image'] == $_smarty_tpl->tpl_vars['image']->value['media_id'])) {?>SELECTED<?php }?>><?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>    

            <?php $_smarty_tpl->_assignInScope('image_sizes', array('tiny'=>'40x40px','thumb'=>'100px wide','square'=>'200px wide','square'=>'200x200px','small'=>'240px wide','medium'=>'640px wide','ig'=>'640x640px','big'=>'1280px wide','full'=>'1920px wide'));?>
            <div class="form-group">
              <label for="media-size">Plugin Image Size</label>
              <select name="image_size" class="form-control" id="media-image_size">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_sizes']->value, 'desc', false, 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value => $_smarty_tpl->tpl_vars['desc']->value) {
?>
              
                <option value="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['plugin']->value['size'] == $_smarty_tpl->tpl_vars['size']->value)) {?>SELECTED<?php }?>><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['size']->value);?>
 (<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
)</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>                

            <?php $_smarty_tpl->_assignInScope('effects', array('zoom','flip','none'));?>
            <div class="form-group">
              <label for="media-size">Hover Effect</label>
              <select name="hover_effect" class="form-control" id="media-size">
                <option value="" <?php if ((!$_smarty_tpl->tpl_vars['plugin']->value['hover_effect'])) {?>SELECTED<?php }?>>Default</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['effects']->value, 'effect');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['effect']->value) {
?>              
                <option value="<?php echo $_smarty_tpl->tpl_vars['effect']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['plugin']->value['hover_effect'] == $_smarty_tpl->tpl_vars['effect']->value)) {?>SELECTED<?php }?>><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['effect']->value);?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>                

            <a href="javascript:void(0);" data-toggle="collapse" data-target="#advanced_options" class="btn btn-primary"><i class="fa fa-caret-down"></i> Show Advanced Options</a>
            <div class="gap gap-small"></div>
            
            <div id="advanced_options" class="collapse">
              <div class="form-group">
                <label for="comment">Link Type</label>
                <a data-toggle="tooltip" title="Choose 'Link' if you want the plugin to look like text and 'Image' if you want to style the plugin as an image"> <i class="fa fa-info-circle"></i></a>
                <select name="type" class="form-control">
                  <option value="0">Select...</option>
                  <option value="image"  <?php if (($_smarty_tpl->tpl_vars['plugin']->value['type'] == "image" || !$_smarty_tpl->tpl_vars['plugin']->value['type'])) {?>SELECTED<?php }?>>Image</option>
                  <option value="link"   <?php if (($_smarty_tpl->tpl_vars['plugin']->value['type'] == "link")) {?>SELECTED<?php }?>>Link</option>
                                  </select>
              </div>
              
              <div class="form-group">
                <label for="media-name">Custom CSS</label>
                <a data-toggle="tooltip" title="For images enter the custom CSS here or simply set the size, for example - 'width: 300px;height:400px'"> <i class="fa fa-info-circle"></i></a>
                <input type="text" class="form-control" name="style" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['style'];?>
" maxlength="255">
              </div>
      
              <div class="form-group">
                <label for="media-name">Object Tag</label>
                <a data-toggle="tooltip" title="Enter a custom html tag for the plugin element"> <i class="fa fa-info-circle"></i></a>
                <input type="text" class="form-control" name="object_tag" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['object_tag'],'figure' ));?>
" maxlength="16">
              </div>
              <div class="form-group">
                <label for="media-name">Object Class</label>
                <a data-toggle="tooltip" title="Enter a custom CSS class for the plugin element"> <i class="fa fa-info-circle"></i></a>
                <input type="text" class="form-control" name="object_class" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['object_class'];?>
" maxlength="255">
              </div>

              <div class="form-group">
                <label for="media-name">Container Tag</label>
                <a data-toggle="tooltip" title="Enter a custom tag to wrap the plugin element in"> <i class="fa fa-info-circle"></i></a>
                <input type="text" class="form-control" name="container_tag" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['container_tag'],'' ));?>
" maxlength="16">
              </div>
              <div class="form-group">
                <label for="media-name">Container Class</label>
                <a data-toggle="tooltip" title="Enter a custom CSS class for the the plugin element's container"> <i class="fa fa-info-circle"></i></a>
                <input type="text" class="form-control" name="container_class" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['container_class'];?>
" maxlength="255">
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <h3>Lightbox Options</h3>
            <div class="row">
              <div class="col-sm-6">
                <label>Which Buttons?</label>
                <div id="popup_options_div">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_buttons']->value, 'button');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
?>
                  <div class="checkbox">
                    <label><input type="checkbox" class="popup-button checkbox2array" name="<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
" id="popup-option-<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
" data-handler="update_popup_options" data-collection=".popup-button" data-target="#popup_buttons" <?php if ((in_array($_smarty_tpl->tpl_vars['button']->value,$_smarty_tpl->tpl_vars['buttons']->value))) {?>checked<?php }?>> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( $_smarty_tpl->tpl_vars['button']->value,'c' ));?>
</label>
                  </div>            
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <div id="lightbox_tabs" class="mt20<?php if ((!in_array('info',$_smarty_tpl->tpl_vars['buttons']->value))) {?> collapse<?php }?>"}>
                    <label>Which Information Tabs?</label>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_tabs']->value, 'tab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
?>
                    <div class="checkbox">
                      <label><input type="checkbox" class="popup-tab checkbox2array" name="<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
" id="popup-tab-<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
" data-handler="update_popup_options" data-collection=".popup-tab" data-target="#popup_tabs" <?php if ((in_array($_smarty_tpl->tpl_vars['tab']->value,$_smarty_tpl->tpl_vars['tabs']->value))) {?>checked<?php }?>> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value,'c' ));?>
</label>
                    </div>            
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>          
              </div>
              <div class="col-sm-6">
                                <div id="lightbox_title" class="<?php if ((!1)) {?> collapse<?php }?>"}>
                  <label>Title under image</label>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_titles']->value, 'title');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['title']->value) {
?>
                  <div class="checkbox">
                    <label><input type="checkbox" class="popup-title checkbox2array" name="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" id="popup-title-<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
" data-handler="update_popup_options" data-collection=".popup-title" data-target="#popup_titles" <?php if ((in_array($_smarty_tpl->tpl_vars['title']->value,$_smarty_tpl->tpl_vars['titles']->value))) {?>checked<?php }?>> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'c' ));?>
</label>
                  </div>            
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>                             
              </div>
            </div>
          </div>
          
        </div>
        
        <br>
        <input type="submit" class="btn btn-success" value="Save">

      </form>


<?php }
}
