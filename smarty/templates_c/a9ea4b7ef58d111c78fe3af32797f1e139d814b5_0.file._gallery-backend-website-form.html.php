<?php
/* Smarty version 3.1.32, created on 2018-12-14 05:40:09
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c134239210d34_04778365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9ea4b7ef58d111c78fe3af32797f1e139d814b5' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-form.html',
      1 => 1544766009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c134239210d34_04778365 (Smarty_Internal_Template $_smarty_tpl) {
?>      <form class="ajax-submit" data-handler="save-minisite" data-success_handler="gbe_website_handler">
        <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_id'];?>
">
        <input hidden="1" name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_type'];?>
"> 
        <input hidden="1" name="site_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['site_id'],$_smarty_tpl->tpl_vars['site']->value['id'] ));?>
">     
        <input hidden="1" name="next_tab" type="hidden" value="page">      
        <input hidden="1" name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
        <?php if ((!$_smarty_tpl->tpl_vars['scope']->value['obj_id'])) {?>
        <input hidden="1" name="active" type="hidden" value="1">
        <input hidden="1" name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
        <input hidden="1" name="artist_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['artist_id'];?>
">
        <input hidden="1" name="gallery_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['gallery_id'];?>
">
        <?php }?>

        <?php if (($_smarty_tpl->tpl_vars['scope']->value['gallery_id'])) {?>
          <?php $_smarty_tpl->_assignInScope('default_type', 'gallery');?>
        <?php } else { ?>
          <?php $_smarty_tpl->_assignInScope('default_type', 'artist');?>
        <?php }?>
        <div class="row">
          <div class="form-group col-sm-4">
            <label for="website-name">Title *</label>
            <input type="text" class="form-control" id="website-name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['name'];?>
" maxlength="128">
          </div>
          <div class="form-group col-sm-4">
            <label for="website-type">Type *</label>
            <select name="type" id="website-type"  class="form-control auto-select" data-default="<?php echo $_smarty_tpl->tpl_vars['default_type']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['type'];?>
">
              <option value="artist">Single Artist</option>
              <option value="gallery">Gallery</option>
            <select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-4">
            <label for="website-url">URL *</label>
            <input type="text" class="form-control" id="website-url" name="url" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['url'];?>
" maxlength="64">
          </div>
          <div class="form-group col-sm-4">
            <label for="website-domain">Domain</label>
            <input type="text" class="form-control" id="website-domain" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['domain'];?>
" maxlength="128">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-xs-12">
            <input type="submit" class="btn btn-success" value="Save">
          </div>
        </div>
        
      </form>
<?php }
}
