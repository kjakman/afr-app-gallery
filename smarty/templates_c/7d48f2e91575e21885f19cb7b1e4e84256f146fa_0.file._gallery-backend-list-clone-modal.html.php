<?php
/* Smarty version 3.1.32, created on 2018-07-18 09:59:06
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-clone-modal.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4f0f6a7225d2_63519842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d48f2e91575e21885f19cb7b1e4e84256f146fa' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-clone-modal.html',
      1 => 1531907946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-event-form.html' => 1,
  ),
),false)) {
function content_5b4f0f6a7225d2_63519842 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Clone Dialog Modal -->
<div class="modal modal-admin fade" id="#clone_modal" data-backdrop="static" data-keyboard="false" 
     tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <b class="overlay-title">Clone</b>
      </div>
       
      <form name="booking-form" class="cal-form ajax-submit" id="event_dialog_form" 
        data-handler="save-event" data-reload_link="#gbe_events_link">
        <input type="hidden" name="parent_type" value="media_collection">
        <input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['collection']->value['id'];?>
">
        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['curator']->value['user_id'];?>
">
        <div class="modal-body">
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-event-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
