<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:06:39
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-title-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13567f10da45_36230297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22653bcf2b300742ff3fe743512ae459babcb1c9' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-title-form.html',
      1 => 1544771199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c13567f10da45_36230297 (Smarty_Internal_Template $_smarty_tpl) {
?>        
      <?php $_smarty_tpl->_assignInScope('collection', $_smarty_tpl->tpl_vars['scope']->value['collection']);?>
      <?php $_smarty_tpl->_assignInScope('curator', $_smarty_tpl->tpl_vars['scope']->value['curator']);?>
      <?php $_smarty_tpl->_assignInScope('location', $_smarty_tpl->tpl_vars['collection']->value['location']);?>
      <?php $_smarty_tpl->_assignInScope('locations', $_smarty_tpl->tpl_vars['scope']->value['locations']);?>

      <?php $_smarty_tpl->_assignInScope('images', $_smarty_tpl->tpl_vars['scope']->value['images']);?>
        
<form id="gbe_collection_title_form" class="ajax-submit" data-handler="save-collection" enctype="multipart/form-data">
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

        <div class="row form-group">
        
          <div class="col-xs-12">
                <div class="form-group">
                    <input type="radio" name="title_image_option" id="radio1" value="0" <?php if (($_smarty_tpl->tpl_vars['collection']->value['title_image_option'] == '0')) {?>CHECKED<?php }?>> Choose an artwork in exhibition as Title Image for exhibition<br>
                    <div class="artwork_image">
                      <select name="title_image" class="form-control">
                        <option value="">Select Title Image</option>   
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['image']->value['media_id'];?>
" <?php if (($_smarty_tpl->tpl_vars['collection']->value['title_image'] == $_smarty_tpl->tpl_vars['image']->value['media_id'])) {?>SELECTED<?php }?>><?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </select>
                    </div>              
                  <br>
                </div>           
                <div class="gap gap-small"></div>
                  <b> OR </b>
                <div class="gap gap-small"></div>
                <div class="row form-group">
                  <input type="radio" name= "title_image_option" id="radio2" value="1" <?php if (($_smarty_tpl->tpl_vars['collection']->value['title_image_option'] == '1')) {?>CHECKED<?php }?> >Upload/attach image to use as Title image for exhibition<br><br>
                  
                  <div class="upload_image">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_uploader' ][ 0 ], array( "media_collection",$_smarty_tpl->tpl_vars['collection']->value['id'],"title_image",array("resize"=>1,"cloud"=>1,"view"=>'list',"handler"=>"gbe_title_image_handler") ));?>

                  </div>                
                </div>
            
            <div class="gap gap-small"></div>
    
            <button class="btn btn-success" id="title_image_upload">Save Changes</button>
          </div>
        </div>
        
</form>

<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function(){
    var val = $('input[name=title_image_option]:checked').val();
    if(val == '0'){
      $(".upload_image").hide();
      $(".artwork_image").show();
    }else{
      $(".artwork_image").hide();
      $(".upload_image").show();
    }
  });

  $(document).on("click", '#radio1', function(){
    $(".artwork_image").show();
    $(".upload_image").hide();
  });

  $(document).on("click", '#radio2', function(){
    $(".artwork_image").hide();
    $(".upload_image").show();
  });
<?php echo '</script'; ?>
>

<?php }
}
