<?php
/* Smarty version 3.1.32, created on 2018-07-11 04:50:19
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-dialog.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b458c8bdc8004_44883185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9454efbbbe1e8396bc3ffe7131b2f4c7f4a78e95' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-dialog.html',
      1 => 1531284619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-details-form.html' => 1,
  ),
),false)) {
function content_5b458c8bdc8004_44883185 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Gallery Backend Event Dialog -->
<div class="modal modal-admin fade" id="gbe_artwork_dialog" data-backdrop="static" data-keyboard="false" 
     tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        
      </div>
       
      <form name="artwork_details_form" class="cal-form ajax-submit" id="artwork_dialog_form" 
        data-handler="save-event" data-reload_link="#tab3_link" data-success_handler="gbe_artwork_handler">
        <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['id'];?>
">
        <input hidden="1" name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="artwork">      
        <input hidden="1" name="next_tab" type="hidden" value="media"> 
        <div class="modal-body">
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-details-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="modal-footer">
          <div class="row">
            <div class="col-xs-12">
              <button type="button" class="btn btn-danger" id="cd-cancel" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success" id="cd-save">Save</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.modal -->
<?php }
}
