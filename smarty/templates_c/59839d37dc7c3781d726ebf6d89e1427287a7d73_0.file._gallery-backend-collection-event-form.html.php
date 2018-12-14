<?php
/* Smarty version 3.1.32, created on 2018-12-11 04:57:14
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-event-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0f43aa5883c5_20445968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59839d37dc7c3781d726ebf6d89e1427287a7d73' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-event-form.html',
      1 => 1544504234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_geocomplete-fields.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_timezones.html' => 1,
  ),
),false)) {
function content_5c0f43aa5883c5_20445968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

        <div class="row">
          <div class="form-group col-sm-4">
            <label for="location_id">Location</label>
            <select class="form-control auto-select" id="gbe_loc_id" name="location_id" required
                    data-value="<?php echo $_smarty_tpl->tpl_vars['event']->value['location_id'];?>
" data-default="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['location_id'],$_smarty_tpl->tpl_vars['curator']->value['location_id'] ));?>
">
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
        
        <div class="row mb10">
          <div class="col-xs-12 <?php if (($_smarty_tpl->tpl_vars['event']->value['location_id'] || count($_smarty_tpl->tpl_vars['locations']->value) > 1)) {?>collapse<?php }?>" id="gbe_location">
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
        </div>

        <div class="row">
          <div class="form-group col-sm-6">
            <label>Title</label>
            <input name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
" type="text" placeholder="Opening, Book Signing" maxlength="128" required/>
          </div>
          <div class="form-group col-sm-6">
            <label>Date</label>
            <div class="input-group">
              <?php $_smarty_tpl->_assignInScope('date', smarty_modifier_date_format($_smarty_tpl->tpl_vars['collection']->value['start_date'],'d-m-Y'));?>
              <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" class="form-control datepicker" name="event_date" placeholder="Event Date">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
            <!--div class="help-block with-errors">Whole Number</div-->                          
          </div>
        </div>

        <div class="row">

          <div class="form-group col-sm-4">
            <label>Start Time</label>
            <div class="input-group">
              <input type="text" name="event_start_time" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_time'],'H:i');?>
" data-time-format="H:i" data-step="15">
              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div>
          </div>

          <div class="form-group col-sm-4">
            <label>End Time</label>
            <div class="input-group">
              <input type="text" name="event_end_time" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_time'],'H:i');?>
" data-time-format="H:i" data-step="15">
              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div>
          </div>

          <div class="form-group col-sm-4">
            <label>Timezone</label>
            
            <select name="timezone" id="timezone" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['event']->value['timezone'],$_smarty_tpl->tpl_vars['user']->value['timezone'] ));?>
" 
               class="form-control auto-select" autofocus="autofocus" autocorrect="off" autocomplete="off">
              <option value="">Select a timezone...</option>
              <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_timezones.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </select>
          </div>
          
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="description">Description</label>
              <textarea class="summernote form-control special" data-height="50" name="description"><?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
</textarea>
            </div>
          </div>
          
        </div>
<?php }
}
