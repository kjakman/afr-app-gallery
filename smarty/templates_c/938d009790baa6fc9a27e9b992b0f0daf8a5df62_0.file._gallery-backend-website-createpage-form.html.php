<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:30:55
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c2f5ce9e2_89050567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '938d009790baa6fc9a27e9b992b0f0daf8a5df62' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-form.html',
      1 => 1544772655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135c2f5ce9e2_89050567 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div>
    <div class="row">              
      <div class="col-sm-6">
        <label for="menu_title">Menu Title</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input name="menu_title" id="menu_title" class="form-control" type="text" required/>
        </div>         
      </div>   

      <div class="row">
        <div class="form-group col-sm-6">
          <label for="page_title">Page Title</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input name="page_title" id="page_title" class="form-control" type="text" required/>
          </div>          
        </div>
      </div>   
    </div>
    
    <div class="row mt20">
      <div class="form-group col-sm-8">
        <label for="first_name">Page type</label>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_select' ][ 0 ], array( "type","minisite_page_type",array("class"=>"form-control") ));?>

      </div>     
    </div>
  </div>      
    
        
<?php }
}
