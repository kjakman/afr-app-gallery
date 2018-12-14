<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:06:36
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-media-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13567ce5bce7_03994142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60c39791e14d4bfa42a5c00dd54daf287ab0c559' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-media-form.html',
      1 => 1544771196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c13567ce5bce7_03994142 (Smarty_Internal_Template $_smarty_tpl) {
?>      <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
">
      <input hidden="1" name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
">
      <input hidden="1" name="obj_type" type="hidden" value="media_collection"> 
      <input hidden="1" name="next_tab" type="hidden" value="title">
        <div class="row form-group">
          <label for="media-name">Attach existing art or images</label>
          <div class="col-xs-12">
            <a href="/backend/artworks?add_to=<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
&amp;_pv=1" class="btn btn-success ajax-loader" data-target="#subview-container"><i class="fa fa-plus-square"></i> Attach Artworks</a>
            <a href="/backend/media?add_to=<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
&amp;_pv=1"    class="btn btn-success ajax-loader" data-target="#subview-container"><i class="fa fa-plus-square"></i> Attach Images</a>
          </div>
        </div>

        <div class="gap gap-small"></div>
        
        
        <div class="row form-group">
          <label for="media-name">Upload related images</label>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_uploader' ][ 0 ], array( "media_collection",$_smarty_tpl->tpl_vars['collection']->value['id'],"map",array("resize"=>1,"cloud"=>1,"view"=>'grid') ));?>

        </div>
        
        <div class="gap gap-small"></div>
        
        
<?php }
}
