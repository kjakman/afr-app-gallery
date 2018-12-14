<?php
/* Smarty version 3.1.32, created on 2018-12-07 09:55:47
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-settings-buttons.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0a43a3ed4536_48390202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a25f4cef3374728890cbd47f65c5af1384e129df' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-settings-buttons.html',
      1 => 1544176547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0a43a3ed4536_48390202 (Smarty_Internal_Template $_smarty_tpl) {
?>      <div class="row">
        <div class="form-group col-sm-4 col-xs-12 gbe-settings" id="gbe_settings_quick" data-key="title" data-settings='<?php echo json_encode($_smarty_tpl->tpl_vars['settings_quick']->value);?>
' data-target="#quick_info">
          <label>Quick Glance Info</label>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings_quick']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
          <div class="checkbox">
            <label>
              <input name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="1" type="checkbox" <?php if ((!$_smarty_tpl->tpl_vars['settings']->value || in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['settings']->value->title))) {?>checked<?php }?> class="bootstrap-toggle" id="gbe_collection_active">
              <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

            </label>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <div class="form-group col-sm-4 col-xs-12 gbe-settings" id="gbe_settings_full" data-key="full" data-settings='<?php echo json_encode($_smarty_tpl->tpl_vars['settings_full']->value);?>
' data-target="#full_info">          
          <label>Full Info</label>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings_full']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
          <div class="checkbox">
            <label>
              <input name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="1" type="checkbox" <?php if ((!$_smarty_tpl->tpl_vars['settings']->value || in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['settings']->value->full))) {?>checked<?php }?> class="bootstrap-toggle" id="gbe_collection_active">
              <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

            </label>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>          

        <div class="form-group col-sm-4 col-xs-12">
          <label>Popup Buttons</label>
          <div class="gbe-settings" id="gbe_settings_buttons" data-key="buttons" data-settings='<?php echo json_encode($_smarty_tpl->tpl_vars['settings_buttons']->value);?>
' data-target="#popup_buttons">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings_buttons']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="checkbox">
              <label>
                <input name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="1" type="checkbox" <?php if ((!$_smarty_tpl->tpl_vars['settings']->value || in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['settings']->value->buttons))) {?>checked<?php }?> class="bootstrap-toggle" id="gbe_collection_active">
                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

              </label>
            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
          
          <div class="gap gap-small"></div>

          <label>Popup Tabs</label>            
          <div class="gbe-settings" id="gbe_settings_tabs" data-key="tabs" data-settings='<?php echo json_encode($_smarty_tpl->tpl_vars['settings_tabs']->value);?>
' data-target="#popup_tabs">            
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings_tabs']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="checkbox">
              <label>
                <input name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="1" type="checkbox" <?php if ((!$_smarty_tpl->tpl_vars['settings']->value || in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['settings']->value->tabs))) {?>checked<?php }?> class="bootstrap-toggle" id="gbe_collection_active">
                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

              </label>
            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>          
          </div>
        </div>          
      </div>

<?php }
}
