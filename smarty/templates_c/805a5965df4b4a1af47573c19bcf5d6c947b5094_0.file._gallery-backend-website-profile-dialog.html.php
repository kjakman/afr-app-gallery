<?php
/* Smarty version 3.1.32, created on 2018-12-14 05:33:28
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-profile-dialog.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1340a80c9933_36270360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '805a5965df4b4a1af47573c19bcf5d6c947b5094' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-profile-dialog.html',
      1 => 1544765608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-popup-form.html' => 1,
  ),
),false)) {
function content_5c1340a80c9933_36270360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('baseprofile', $_smarty_tpl->tpl_vars['scope']->value['baseprofile']);
$_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['userprofile']);
$_smarty_tpl->_assignInScope('timings', $_smarty_tpl->tpl_vars['scope']->value['timing']);?>

<!-- Gallery Backend Event Dialog -->
<div class="modal modal-admin fade" id="gbe_profile_dialog" data-backdrop="static" data-keyboard="false" 
     tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <b class="overlay-title">Edit profile</b>
      </div>
       
      <form name="edit-profile" class="cal-form ajax-submit" id="profile_dialog_form" 
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
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-popup-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
