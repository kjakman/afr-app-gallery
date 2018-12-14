<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:30:55
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-dialog.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c2f5cb650_85023493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52b958928439289f84d5a6fe02f844fddd43825a' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-dialog.html',
      1 => 1544772655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-form.html' => 1,
  ),
),false)) {
function content_5c135c2f5cb650_85023493 (Smarty_Internal_Template $_smarty_tpl) {
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
        data-handler="save-minisite-page" data-reload_link="#gbe_pages_link">
        <input hidden="1" name="minisite_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['id'],$_smarty_tpl->tpl_vars['id']->value ));?>
">  
        <input hidden="1" name="user_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['user_id'],$_smarty_tpl->tpl_vars['user_id']->value ));?>
">
        <input hidden="1" name="site_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['site_id'],$_smarty_tpl->tpl_vars['site']->value['id'] ));?>
"> 
        <input hidden="1" name="next_tab" type="hidden" value="pages">  
        
        <div class="modal-body">
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div class="modal-footer">
          <div class="row">
            <div class="col-xs-12">
              <button type="button" class="btn btn-danger" id="cd-cancel" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success created" id="cd-save" >Save</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.modal -->
<?php echo '<script'; ?>
 type="text/javascript">
  $(document).on("click",'.created',function() {
     setTimeout(function() { 
      $("#gbe_page_link").trigger('click');
    }, 1000);
  });
<?php echo '</script'; ?>
>


     

<?php }
}
