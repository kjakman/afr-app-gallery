<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:14:06
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-artist.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13583ee73de9_95000027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fa02a8d291fc9f438e26d856f941c10003b2b90' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-artist.html',
      1 => 1544771646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c13583ee73de9_95000027 (Smarty_Internal_Template $_smarty_tpl) {
?>                  <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['profile']);?>
                    <form id="user_overview_form" class="ajax-submit autosave"  data-handler="save" data-toggle="validator">
                      <input type="hidden" name="obj_type" value="user_profile" />
                      <input type="hidden" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['profile_id'];?>
" />
                      <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['user_id'];?>
" />
                      <input type="hidden" name="site_id" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" />
                      <input type="hidden" name="description" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['description'];?>
" />
                                  
                    <div class="form-group form-group-icon-left">
                      <label>Solo Shows</label>
                      <textarea name="gallery_solo_shows" class="summernote form-control" placeholder="List of solo shows"><?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['gallery_solo_shows'];?>
</textarea>
                    </div>

                    <div class="form-group form-group-icon-left">
                      <label>Group Shows</label>
                      <textarea name="gallery_group_shows" class="summernote form-control" placeholder="List of group shows"><?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['gallery_group_shows'];?>
</textarea>
                    </div>

                    <div class="form-group form-group-icon-left">
                      <label>Press</label>
                      <textarea name="press" class="summernote form-control" placeholder="List of press mentions"><?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['press'];?>
</textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Save">
                    <div class="gap gap-small"></div>

<?php }
}
