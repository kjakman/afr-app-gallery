<?php
/* Smarty version 3.1.32, created on 2018-12-07 09:55:47
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-settings-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0a43a3ec8583_02411962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bcf5480dd681261c52554c02d0faef6ba08ee03' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-settings-form.html',
      1 => 1544176547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-settings-buttons.html' => 1,
  ),
),false)) {
function content_5c0a43a3ec8583_02411962 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php $_smarty_tpl->_assignInScope('gallery_settings_json', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['settings'],$_smarty_tpl->tpl_vars['user_settings_json']->value )));?>
  <?php $_smarty_tpl->_assignInScope('gallery_settings', json_decode($_smarty_tpl->tpl_vars['gallery_settings_json']->value));?>
      <div style="position:relative;top:10px;left:10px">
        <h3>Visibility settings</h3>
        
        <button id="gbe_use_default_settings" class="btn btn-primary">Use default settings</button>
        
        <?php $_smarty_tpl->_assignInScope('settings_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview',array('subview'=>'settings') )));?>  
        &nbsp;(You can set "default settings" <a href="<?php echo $_smarty_tpl->tpl_vars['settings_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container">here</a>)
      </div>
      
      <div class="gap gap-small"></div>

      
      <?php $_smarty_tpl->_assignInScope('settings', $_smarty_tpl->tpl_vars['gallery_settings']->value);?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-settings-buttons.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
      
      <form class="ajax-submit" data-handler="save-collection">
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

        <input type="hidden" class="form-control" name="settings" id="gallery_options" value='<?php echo $_smarty_tpl->tpl_vars['gallery_settings_json']->value;?>
'>
        
        <div class="row">
          <div class="form-group col-xs-12">
            <input type="submit" id="submit" class="btn btn-success" value="Save">
          </div>
        </div>
      
      </form>      

      <input type="hidden" id="gbe_default_settings" value='<?php echo $_smarty_tpl->tpl_vars['user_settings_json']->value;?>
'>
      
      <input type="hidden" class="form-control" name="quick_info" id="quick_info" value='<?php echo json_encode($_smarty_tpl->tpl_vars['quick_info']->value);?>
'>     
      <input type="hidden" class="form-control" name="full_info" id="full_info" value='<?php echo json_encode($_smarty_tpl->tpl_vars['full_info']->value);?>
'>     
      <input type="hidden" class="form-control" name="popup_buttons" id="popup_buttons" value='<?php echo json_encode($_smarty_tpl->tpl_vars['popup_buttons']->value);?>
'>     
      <input type="hidden" class="form-control" name="popup_tabs" id="popup_tabs" value='<?php echo json_encode($_smarty_tpl->tpl_vars['popup_tabs']->value);?>
'>     
      
<?php }
}
