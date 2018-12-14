<?php
/* Smarty version 3.1.32, created on 2018-12-11 04:55:27
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-media-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0f433f5f17f8_87922302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40e013fe39186f0ebf5bb1fb430e11c96bb38d6c' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-media-form.html',
      1 => 1544504127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0f433f5f17f8_87922302 (Smarty_Internal_Template $_smarty_tpl) {
?>        
        <div class="row form-group">
          <label for="media-name">Upload related images</label>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_uploader' ][ 0 ], array( "artwork",$_smarty_tpl->tpl_vars['artwork']->value['id'],"media",array("resize"=>1,"cloud"=>1,"view"=>'grid') ));?>

        </div>

<?php }
}
