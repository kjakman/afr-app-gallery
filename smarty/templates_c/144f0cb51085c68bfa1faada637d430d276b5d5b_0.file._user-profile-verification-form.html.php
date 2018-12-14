<?php
/* Smarty version 3.1.32, created on 2018-12-06 11:31:12
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-verification-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0908801209e0_09666255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '144f0cb51085c68bfa1faada637d430d276b5d5b' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-verification-form.html',
      1 => 1544095872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0908801209e0_09666255 (Smarty_Internal_Template $_smarty_tpl) {
?>                          <form class="ajax-submit" data-handler="check-verification" data-reload_link="#user-verification-link">
                            <input name="type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                            <input name="site_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
">
                            <input name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                            <input name="profile_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile_id'];?>
">

                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-4">
                                    <input name="code" type="text" class="form-control">
                                </div>
                                <div class="col-sm-4 col-xs-8">
                                  <input type="submit" value="Send" class="btn btn-success"> &nbsp;
                                  <a href="#" class="btn btn-danger verify-cancel">Cancel</a>
                                </div>
                            </div>                            
          
                          </form>


<?php }
}
