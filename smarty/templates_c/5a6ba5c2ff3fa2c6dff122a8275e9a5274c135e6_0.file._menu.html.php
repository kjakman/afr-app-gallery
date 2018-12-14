<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:49:24
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/_menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c136084d53a90_12110554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a6ba5c2ff3fa2c6dff122a8275e9a5274c135e6' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/_menu.html',
      1 => 1544773764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c136084d53a90_12110554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('menuObj', $_smarty_tpl->tpl_vars['scope']->value['menuObj']);?>

  <ul class="nav navbar-nav">
    <?php if (($_smarty_tpl->tpl_vars['menuObj']->value)) {?>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuObj']->value, 'menuObjs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuObjs']->value) {
?>
            <?php if (($_smarty_tpl->tpl_vars['menuObjs']->value['type'] == '20')) {?>
                <?php $_smarty_tpl->_assignInScope('type', 'artists');?>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['menuObjs']->value['type'] == '30')) {?>
                <?php $_smarty_tpl->_assignInScope('type', 'exhibitions');?>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['menuObjs']->value['type'] != '10') && ($_smarty_tpl->tpl_vars['menuObjs']->value['type'] == '20')) {?>
                <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['menuObjs']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['menuObjs']->value['menu_title'];?>

            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['menuObjs']->value['type'] != '10') && ($_smarty_tpl->tpl_vars['menuObjs']->value['type'] == '30')) {?>
                <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['menuObjs']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['menuObjs']->value['menu_title'];?>

            <?php }?>
           </a></li>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    <?php }?>
    <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/contact">Contact</a></li>
  </ul>

                
      </ul>

<?php }
}
