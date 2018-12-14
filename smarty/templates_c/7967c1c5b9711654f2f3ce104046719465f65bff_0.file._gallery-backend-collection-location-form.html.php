<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:06:21
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-location-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13566d6b99e9_62093651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7967c1c5b9711654f2f3ce104046719465f65bff' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-location-form.html',
      1 => 1544771181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_geocomplete-fields.html' => 1,
  ),
),false)) {
function content_5c13566d6b99e9_62093651 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <!--h4>Exhibition dates
          <a data-toggle="tooltip" title="Optionally add an address and dates if this is a physical exhibition."> <i class="fa fa-info-circle"></i></a>
        </h4-->


      <?php $_smarty_tpl->_assignInScope('curator', $_smarty_tpl->tpl_vars['scope']->value['curator']);?>
      <?php $_smarty_tpl->_assignInScope('location', $_smarty_tpl->tpl_vars['collection']->value['location']);?>
      <?php $_smarty_tpl->_assignInScope('locations', $_smarty_tpl->tpl_vars['scope']->value['locations']);?>
        
      <form class="ajax-submit" data-handler="save-collection" data-success_handler="gbe_collection_handler">
        <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
">
        <input hidden="1" name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="media_collection">      
        <input hidden="1" name="next_tab" type="hidden" value="media">      
        <input hidden="1" name="type" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['type'],@constant('COLLECTION_TYPE_EXHIBITION') ));?>
">
                
        <?php if (($_smarty_tpl->tpl_vars['curator']->value['location_id'])) {?>
        <?php } else { ?>
          <?php $_smarty_tpl->_assignInScope('profile_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:edit-profile:id',array('id'=>$_smarty_tpl->tpl_vars['curator']->value['user_id']) )));?>
          <div class="alert alert-warning" role="alert"><a href="#" class="close" data-dismiss="alert">×</a><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> 
            You do not have an address set in your profile. Please add an address <a href="<?php echo $_smarty_tpl->tpl_vars['profile_link']->value;?>
">here</a>.
          </div>          
        <?php }?>

                <div class="row input-daterange">
          <div class="col-sm-4  col-xs-6 relative ">
            <label for="start_date">Start Date</label>
            <div class="input-group">
              <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['start_date'];?>
" class="form-control" name="start_date" placeholder="Start Date">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
          </div>
          <div class="form-group col-sm-4 col-xs-6 relative">
            <label for="end_date">End Date</label>
            <div class="input-group">
              <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['end_date'];?>
" class="form-control" name="end_date" placeholder="End Date">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
          </div>
          <div class="form-group col-sm-4">
            <label for="location_id">Location</label>
            <select class="form-control auto-select" id="gbe_loc_id" name="location_id" required
                    data-value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['location_id'];?>
" data-default="<?php echo $_smarty_tpl->tpl_vars['curator']->value['location_id'];?>
" required>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'loc', false, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['loc']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['loc']->value;?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                            
            </select>
          </div>
        </div>

        <div class="col-xs-12 <?php if (($_smarty_tpl->tpl_vars['collection']->value['location_id'] || count($_smarty_tpl->tpl_vars['locations']->value) > 1)) {?>collapse<?php }?>" id="gbe_location">
          <label for="exhibition-address"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'location','c' ));?>
</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
            <input name="exhibition-address" id="exhibition-address" class="form-control geocomplete" placeholder="123 Main street, New York" 
                   type="text" />
            <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_geocomplete-fields.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>                          
          </div>
        </div>
        
        <!--h4>Exhibition address
          <a data-toggle="tooltip" title="Optionally add an address and dates if this is a physical exhibition."> <i class="fa fa-info-circle"></i></a>
        </h4-->
        
        <div class="row input-daterange">
        </div>
        
        <div class="gap gap-small"></div>


        <div class="row">
          <div class="form-group col-xs-12">
            <input type="submit" id="submit" class="btn btn-success" value="Save">
          </div>
        </div>
      </form>
      <div class="gap gap-small"></div>
            
        
<?php }
}
