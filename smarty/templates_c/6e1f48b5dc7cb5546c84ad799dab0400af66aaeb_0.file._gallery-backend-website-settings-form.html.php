<?php
/* Smarty version 3.1.32, created on 2018-10-24 06:23:24
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-settings-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd00fdc83cc20_92101425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e1f48b5dc7cb5546c84ad799dab0400af66aaeb' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-settings-form.html',
      1 => 1540362204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd00fdc83cc20_92101425 (Smarty_Internal_Template $_smarty_tpl) {
?>      <form class="ajax-submit" data-handler="save-minisite">
        <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_type'];?>
">      
                
        <div class="form-group col-sm-4">
          <label for="media-name">Title *</label>
          <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['name'];?>
" maxlength="255">
        </div>
        <div class="form-group col-sm-4">
          <label for="media-original_technique">Technique *</label>
          <input type="text" class="form-control" name="original_technique" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['original_technique'];?>
" maxlength="255">
        </div>
      </form>
<?php }
}
