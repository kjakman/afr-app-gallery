<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:14:02
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-artist.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13583a4dd4c1_60540699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '428d1ffba5e4bb960e65d0921d78ab0c3436d569' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-artist.html',
      1 => 1544771642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-information.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html' => 2,
  ),
),false)) {
function content_5c13583a4dd4c1_60540699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12402361655c13583a4d09e2_70220538', 'profile');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9006739005c13583a4dc843_63907558', 'description');
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-base.html");
}
/* {block 'profile'} */
class Block_12402361655c13583a4d09e2_70220538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profile' => 
  array (
    0 => 'Block_12402361655c13583a4d09e2_70220538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['profile']);?>
  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <?php $_smarty_tpl->_assignInScope('curator_ids', $_smarty_tpl->tpl_vars['scope']->value['curator_ids']);?>
  <?php if ((count($_smarty_tpl->tpl_vars['curator_ids']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('profile_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_PROFILE') )));?>
  <h3><?php if ((count($_smarty_tpl->tpl_vars['curator_ids']->value) == 1)) {?>Represented by:<?php } else { ?>Represented by:<?php }?></h3>
    <div class="profileinfo">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['curator_ids']->value, 'curator_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curator_id']->value) {
?>
      <?php $_smarty_tpl->_assignInScope('profile', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'obj2array' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get_user' ][ 0 ], array( $_smarty_tpl->tpl_vars['curator_id']->value )) )));?>
      <?php $_smarty_tpl->_assignInScope('data', array("site_id"=>$_smarty_tpl->tpl_vars['site']->value['id'],"obj_type"=>"user","obj_id"=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],"obj_subtype"=>@constant('USER_ROLE_CURATOR')));?>
      <?php $_smarty_tpl->_assignInScope('json', json_encode($_smarty_tpl->tpl_vars['data']->value));?>
      <h1><a href="<?php echo $_smarty_tpl->tpl_vars['profile_link']->value;
echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" class="cms-link gallery-link" data-data='<?php echo $_smarty_tpl->tpl_vars['json']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['profile']->value['display_name'];?>
</a></h1>
      <h4><?php ob_start();
echo $_smarty_tpl->tpl_vars['profile']->value['city'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['country'],'countries','name' ));
$_prefixVariable2 = ob_get_clean();
echo join(array_filter(array($_prefixVariable1,$_prefixVariable2)),', ');?>
</h4>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['profile']);?>     
  <?php }?>
  
<?php
}
}
/* {/block 'profile'} */
/* {block 'description'} */
class Block_9006739005c13583a4dc843_63907558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description' => 
  array (
    0 => 'Block_9006739005c13583a4dc843_63907558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <p><?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['description'];?>
</p>
<?php
}
}
/* {/block 'description'} */
}
