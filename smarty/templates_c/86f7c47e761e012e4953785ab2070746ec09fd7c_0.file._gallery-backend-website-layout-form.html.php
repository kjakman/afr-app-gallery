<?php
/* Smarty version 3.1.32, created on 2018-12-14 05:33:28
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-layout-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1340a80bb024_05039055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f7c47e761e012e4953785ab2070746ec09fd7c' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-layout-form.html',
      1 => 1544765608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-profile-dialog.html' => 1,
  ),
),false)) {
function content_5c1340a80bb024_05039055 (Smarty_Internal_Template $_smarty_tpl) {
?>      <form class="ajax-submit" data-handler="save-minisite-basic">
        <input hidden="1" name="id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['id'],$_smarty_tpl->tpl_vars['id']->value ));?>
">
        <input hidden="1" name="obj_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['id'],$_smarty_tpl->tpl_vars['id']->value ));?>
">
        <input hidden="1" name="obj_type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_type'];?>
">  
        <input hidden="1" name="next_tab" type="hidden" value="styling"> 

          <div class="col-sm-12">
            <label for="HEADER">HEADER</label>
            <table cellspacing="2"> 
              <tr style="height: 15px;"/>
              <tr>
                <td style= "width:200px">
                  <label for="Title">Site Title</label>
                </td>
                <td width="20%">
                  <div class="input-group">
                    <input name='show_title' value='0' type='hidden'> 
                    <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['minisite']->value['show_title'])) {?>checked<?php }?> class="bootstrap-toggle" value="1" name="show_title" id="name">
                  </div>
                </td>
                <td >
                  <div class="input-group">
                    <input name="name" id="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['name'];?>
" type="text" /> 
                  </div>
                </td>
              </tr>
              <tr style="height: 15px;"/>
              <tr>
                <td style= "width:200px">
                  <label for="Sub title">Site Sub Title</label>
                </td>
                <td width="20%">
                  <div class="input-group">
                    <input name='show_subtitle' value='0' type='hidden'> 
                    <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['minisite']->value['show_subtitle'])) {?>checked<?php }?> class="bootstrap-toggle" value="1" name="show_subtitle" id="sub_title">
                  </div>
                </td>
                <td>
                  <div class="input-group">
                    <input name="sub_title" id="sub_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['sub_title'];?>
" type="text" />
                  </div>
                </td>
              </tr>
              <tr style="height: 15px;"/>
              <tr style="height: 15px;"/>
            </table>
          </div>

          <div class="col-sm-12">
            <label for="media-name">Icon</label>
            <a data-toggle="tooltip" data-placement="right" title="Select the main image to represent the artwork"> <i class="fa fa-info-circle"></i></a>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_uploader' ][ 0 ], array( "minisite",$_smarty_tpl->tpl_vars['minisite']->value['id'],"logo",array("resize"=>1,"cloud"=>1,"view"=>"list") ));?>

          </div>

          <div class="col-sm-12">
            <label for="FOOTER">FOOTER</label>
            <table cellspacing="2"> 
              <tr style="height: 15px;"/>
              <tr>
                <td style= "width:200px">
                  <label for="footer">Footer Text</label>
                </td>
                <td >
                  <div class="input-group">
                    <input name="footer" id="footer" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['footer'];?>
" type="text" /> 
                  </div>
                </td>
              </tr>
              <tr style="height: 15px;"/>
              <tr>
                <td style= "width:200px">
                  <label for="Social Media">Follow on Social Media</label>
                </td>
                <td width="20%">
                  <div class="input-group">
                    <input name='show_social' value='0' type='hidden'> 
                    <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['minisite']->value['show_social'])) {?>checked<?php }?> class="bootstrap-toggle" value="1" name="show_social" id="">
                  </div>
                </td>
                <td>
                  <div class="input-group">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#gbe_profile_dialog">Edit Details on Profile Page</button>
                  </div>
                </td>
              </tr>
              <tr style="height: 15px;"/>
              <tr>
                <td >
                  <label for="Opening">Opening Times</label>
                </td>
                <td width="20%">
                  <div class="input-group">
                    <input name='show_timing' value='0' type='hidden'> 
                    <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['minisite']->value['show_timing'])) {?>checked<?php }?> class="bootstrap-toggle" value="1" name="show_timing" id="">
                  </div>
                </td>
                <td >
                  <div class="input-group" >
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#gbe_profile_dialog"> Edit Details on Profile Page</button>
                  </div>
                </td>
              </tr>
              <tr style="height: 15px;"/>
              <tr style="height: 15px;"/>
            </table>
          </div>
          <div class="row">
            <div class="form-group col-sm-10">
              <label for="SEARCH">SEARCH ENGINE OPTIMIZATION</label><br>
              <label for="description">Site description</label>
                <textarea class="summernote form-control special" data-height="50" name="description"></textarea>
                Will be visible in search results on Google etc. It will not be displayed on your site. We recommend a text with 140-160 characters.
            </div>
            <div class="form-group col-sm-4">
              <label for="Domain Name">Domain Name</label><br>
              <input name="domain" id="domain" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['domain'];?>
" type="text" /> 
            </div>
            <div class="form-group col-sm-4">
              <label for="Domain Name">URL</label><br>
              <input name="url" id="url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['url'];?>
" type="text" /> 
            </div>
          </div> 
          <input type="submit" class="btn btn-success" value="Save" id="submit">
      </form>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-profile-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php echo '<script'; ?>
 type="text/javascript">
        $("#gbe_artist_link").hide();
        $("#gbe_exhibition_link").hide();
        $("#gbe_home_link").hide();
      <?php echo '</script'; ?>
>

<!-- <?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function() {
    var max_fields = 20; //maximum input boxes allowed
    var wrapper = $("#wrapper"); //Fields wrapper
    var add = $(".add"); //Add button ID
   
     
    var x = 1; //initlal text box count
    $(add).click(function(e){ //on add input button click
      e.preventDefault();
      if(x < max_fields){ //max input box allowed
        x++; //text box increment
        $(wrapper).append('<div id="newadd"><table class= "table table-hover"><td><input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
" maxlength="100"></td><td><input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
" maxlength="100"></td><td><button type="button" class="remove btn btn-danger">x</button></td></table></div>'); //add input box
      }
    });

    //Remove button ID
   
     $('#wrapper').on('click','.remove', function(e){ //user click on remove field
      $('#newadd').remove(); 
       x--; 
    });
  });
<?php echo '</script'; ?>
>  -->    
<?php }
}
