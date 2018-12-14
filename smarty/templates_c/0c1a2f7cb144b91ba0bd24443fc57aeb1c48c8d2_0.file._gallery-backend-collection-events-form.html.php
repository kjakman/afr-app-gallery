<?php
/* Smarty version 3.1.32, created on 2018-12-11 04:57:14
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-events-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0f43aa579f37_44156969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c1a2f7cb144b91ba0bd24443fc57aeb1c48c8d2' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-events-form.html',
      1 => 1544504234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-event-dialog.html' => 1,
  ),
),false)) {
function content_5c0f43aa579f37_44156969 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php $_smarty_tpl->_assignInScope('events', $_smarty_tpl->tpl_vars['scope']->value['events']);?>
        <?php $_smarty_tpl->_assignInScope('curator', $_smarty_tpl->tpl_vars['scope']->value['curator']);?>
        <?php $_smarty_tpl->_assignInScope('location', $_smarty_tpl->tpl_vars['collection']->value['location']);?>
        <?php $_smarty_tpl->_assignInScope('locations', $_smarty_tpl->tpl_vars['scope']->value['locations']);?>
        
        <div class="row">
          <div class="form-group col-xs-12">
            <label>Associated Event(s)</label>        
            <a data-toggle="tooltip" title="If there is an opening, book signing, performance, or other event connected to the exhibition, add it here so collectors can add it to their diaries."> <i class="fa fa-info-circle"></i></a>
            
            <?php $_smarty_tpl->_assignInScope('rows', array());?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['rows']) ? $_smarty_tpl->tpl_vars['rows']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("Name","Start","End","Location","Action");
$_smarty_tpl->_assignInScope('rows', $_tmp_array);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event', false, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['event']->value) {
?>
              <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['rows']) ? $_smarty_tpl->tpl_vars['rows']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array($_smarty_tpl->tpl_vars['event']->value['title'],$_smarty_tpl->tpl_vars['event']->value['start_time'],$_smarty_tpl->tpl_vars['event']->value['end_time'],((string)$_smarty_tpl->tpl_vars['event']->value['address_street'])." ".((string)$_smarty_tpl->tpl_vars['event']->value['address_number']),"<button id='event_delete' class='btn btn-xs btn-danger delete' data-toggle='confirmation' data-type='DELETE' data-original-title='Sure?' data-value = ".((string)$_smarty_tpl->tpl_vars['event']->value['id'])."> <i class='glyphicon glyphicon-trash'></i></button>");
$_smarty_tpl->_assignInScope('rows', $_tmp_array);?>                   
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                            
    
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'table' ][ 0 ], array( $_smarty_tpl->tpl_vars['rows']->value,array("class"=>"bootstrap-table table table-hover") ));?>

            
          </div>
        </div>

        
        <div class="row">
          <div class="form-group col-xs-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#gbe_event_dialog"><i class="fa fa-plus-circle"></i> Create Event</button>
          </div>
        </div>
        
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-event-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>         
                
        
<?php }
}
