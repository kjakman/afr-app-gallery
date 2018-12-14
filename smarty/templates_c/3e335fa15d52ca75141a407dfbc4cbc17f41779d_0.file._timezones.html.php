<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:14:04
  from '/web/sites/afr-app-gallery/smarty/templates/components/_timezones.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13583c21b175_29140298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e335fa15d52ca75141a407dfbc4cbc17f41779d' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_timezones.html',
      1 => 1544771644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c13583c21b175_29140298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/function.json.php','function'=>'smarty_function_json',),));
echo smarty_function_json(array('file'=>"/afr/json/timezones.json",'assign'=>"timezones"),$_smarty_tpl);?>



<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timezones']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
  <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['group']->value['name']);?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['zones'], 'zone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['zone']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['zone']->value['value'];?>
" data-alternative-spellings="<?php echo $_smarty_tpl->tpl_vars['zone']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['zone']->value['value'];?>
</option>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
