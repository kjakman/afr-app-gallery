<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:14:05
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-overview.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13583db4e565_16960640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25713e7a422788ad051c614a862c2720c40609f9' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-overview.html',
      1 => 1544771645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c13583db4e565_16960640 (Smarty_Internal_Template $_smarty_tpl) {
?>
                  <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['profile']);?>
                  
                    <form id="user_overview_form" class="ajax-submit"  data-handler="save" data-toggle="validator">
                      <input type="hidden" name="obj_type" value="user_profile" />
                      <input type="hidden" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['profile_id'];?>
" />
                      <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['user_id'];?>
" />
                      <input type="hidden" name="site_id" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" />

                      <label>Logo Image</label>
                      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_uploader' ][ 0 ], array( "user_profile",$_smarty_tpl->tpl_vars['profile']->value['profile_id'],"photo",array("resize"=>1) ));?>

                      
                      
                      <div class="form-group">
                        <label>About Title</label>
                        <input name="about_title" id="about_title" class="form-control" value="" type="text" style= "width:500px" /> 
                      </div>

                      <div class="form-group">
                        <label>About</label>
                        <textarea name="description" class="summernote form-control" placeholder="Please describe yourself and your interests."><?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['description'];?>
</textarea>
                      </div>

                      <?php if (($_smarty_tpl->tpl_vars['site']->value['golf_site'])) {?>
                      <div class="form-group form-group-icon-left">
                        <i class="fa fa-search input-icon"></i>                      
                        <label>What is your home course?</label>
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_select' ][ 0 ], array( "golf_home_course","golf_club",array("class"=>"form-control","value"=>$_smarty_tpl->tpl_vars['scope']->value['profile']['golf_home_course']) ));?>

                      </div>
                      <div class="form-group">
                        <label>What is your handicap?</label>
                        <input name="golf_handicap" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['golf_handicap'];?>
" type="number" />
                      </div>
                      <div class="form-group form-group-icon-left">
                        <i class="fa fa-search input-icon"></i>                      
                        <label>What is your favorite course?</label>
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_select' ][ 0 ], array( "golf_favorite_course","golf_club",array("class"=>"form-control","value"=>$_smarty_tpl->tpl_vars['scope']->value['profile']['golf_favorite_course']) ));?>

                      </div>
                      <?php }?>
                      
                      <input type="submit" class="btn btn-success" value="Save">
                      <div class="gap gap-small"></div>
                      
                    </form>
                    

                                   
                    <!--div id="map-canvas" style="width:100%; height:400px;"></div-->


<?php }
}
