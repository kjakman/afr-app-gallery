<?php
/* Smarty version 3.1.32, created on 2018-12-13 23:26:13
  from '/web/sites/afr-app-gallery/smarty/templates/components/_artist-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c12ea95523643_39873332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092ad7282fa2b9c3ebdfe0fbfa684b9cedbdfd47' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_artist-form.html',
      1 => 1544743573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c12ea95523643_39873332 (Smarty_Internal_Template $_smarty_tpl) {
?>
              <form id="artist-form" class="ajax-submit" data-handler="add-artist" data-success_handler="gbe_artist_handler">
                <input name="aff_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" />
                <input name="site_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" />
                <input name="artist" type="hidden" value="1" />
                <div class="row">
                  <div class="form-group col-sm-5">
                    <label>First Name (*)</label>
                    <input name="first_name" id="af_first_name" class="form-control" placeholder="Vincent" type="text" value="<?php echo $_smarty_tpl->tpl_vars['artist']->value['first_name'];?>
" maxlength="50"/>
                  </div>  
                  
                  <div class="form-group col-sm-2">
                    <label>Infix</label>
                    <input name="infix" id="af_infix" class="form-control" placeholder="van" type="text" value="<?php echo $_smarty_tpl->tpl_vars['artist']->value['infix'];?>
" maxlength="20"/>
                  </div> 
                  
                  <div class="form-group col-sm-5">
                    <label>Last Name (*)</label>
                    <input name="last_name" id="af_last_name" class="form-control" placeholder="Gogh" type="text" value="<?php echo $_smarty_tpl->tpl_vars['artist']->value['last_name'];?>
" maxlength="50"/>
                  </div>                              
                </div>                              

                <div class="row">
                  <div class="form-group col-sm-6">
                    <label>Email</label>
                    <input name="email_address" class="form-control" placeholder="vincent@gogh.com" type="text" value="<?php echo $_smarty_tpl->tpl_vars['artist']->value['email_address'];?>
" maxlength="128"/>
                  </div>  
                  <div class="form-group col-sm-6">
                    <label>Phone</label>
                    <input name="phone" class="form-control" type="tel" value="<?php echo $_smarty_tpl->tpl_vars['artist']->value['phone'];?>
" maxlength="20"/>
                  </div>
                </div>
                
                <?php if (($_smarty_tpl->tpl_vars['artist']->value['id'])) {?>                
                <div class="form-group">
                  <label>Media</label>
                  <?php if (($_smarty_tpl->tpl_vars['artist']->value['id'])) {?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'uploader' ][ 0 ], array( "user_profile",$_smarty_tpl->tpl_vars['artist']->value['profile_id'],array("field"=>"photo") ));?>

                  <?php } else { ?>
                  <p>You can add media after adding the artist.</p>
                  <?php }?>
                </div>
                <?php }?>
                                
                <div class="row">
                  <div class="form-group col-sm-12">
                    <input class="btn btn-success" type="submit" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'save','c',0 ));?>
" />
                  </div>
                </div>
                   
              </form>

<?php }
}
