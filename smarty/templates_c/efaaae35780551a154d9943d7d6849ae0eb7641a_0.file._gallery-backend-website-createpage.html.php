<?php
/* Smarty version 3.1.32, created on 2018-11-08 05:45:37
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be3cd8119c703_87410391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efaaae35780551a154d9943d7d6849ae0eb7641a' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage.html',
      1 => 1541655937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-dialog.html' => 1,
  ),
),false)) {
function content_5be3cd8119c703_87410391 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Gallery Backend Event Dialog -->
<div class="modal modal-admin fade" id="gbe_create_page_dialog" data-backdrop="static" data-keyboard="false" 
     tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <b class="overlay-title">Create Page</b>
      </div>
       
      <form name="create-page" class="cal-form ajax-submit" id="profile_createpage_form" 
        data-handler="save-profile" data-reload_link="#gbe_pages_link">

        <input type="hidden" name="obj_id"  value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
" />
        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" />
        <input type="hidden" name="site_id" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['site_id'];?>
" />
        <input hidden="1"    name="next_tab" type="hidden" value="basic">  
        <input type="hidden" name="page"  value="popup" />
        <div class="modal-body">
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
