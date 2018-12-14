<?php
/* Smarty version 3.1.32, created on 2018-12-13 23:26:13
  from '/web/sites/afr-app-gallery/smarty/templates/components/_artist-dialog.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c12ea9551b5f6_60273271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7e16cc34476ff876eec6f2432499ac1502a935' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_artist-dialog.html',
      1 => 1544743573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_artist-form.html' => 1,
  ),
),false)) {
function content_5c12ea9551b5f6_60273271 (Smarty_Internal_Template $_smarty_tpl) {
?>            <!-- Add/Edit Form -->
            <div class="modal fade in" id="artist-form-modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'add artist','t' ));?>
</h4>
                  </div>
                  <div class="modal-body">
                    <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_artist-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="close" data-dismiss="modal"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'close','c' ));?>
</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            

<?php }
}
