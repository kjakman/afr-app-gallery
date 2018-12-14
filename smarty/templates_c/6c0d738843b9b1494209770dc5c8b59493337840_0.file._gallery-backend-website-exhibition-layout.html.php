<?php
/* Smarty version 3.1.32, created on 2018-10-17 10:56:48
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc7157022b240_04017085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c0d738843b9b1494209770dc5c8b59493337840' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-layout.html',
      1 => 1539773808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc7157022b240_04017085 (Smarty_Internal_Template $_smarty_tpl) {
?>	<form class="ajax-submit" data-handler="save-minisite">
		<input hidden="1" name="id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['id'],$_smarty_tpl->tpl_vars['id']->value ));?>
">
    <input hidden="1" name="obj_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['id'],$_smarty_tpl->tpl_vars['id']->value ));?>
">
    <input hidden="1" name="obj_type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_type'];?>
">  
    <input hidden="1" name="next_tab" type="hidden" value="styling">    
                
      <div class="row">
        <div class="form-group col-sm-6 col-xs-12">
          <label for="minisite-layout-structure">Layout</label>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_select' ][ 0 ], array( "layout","minisite_layout",array("class"=>"form-control","value"=>$_smarty_tpl->tpl_vars['minisite']->value['layout']) ));?>

        </div>
      </div>
      <input type="submit" class="btn btn-success" value="Save">
	</form>
<?php }
}
