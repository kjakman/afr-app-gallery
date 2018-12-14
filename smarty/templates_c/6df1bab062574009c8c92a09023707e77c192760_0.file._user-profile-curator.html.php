<?php
/* Smarty version 3.1.32, created on 2018-11-26 01:18:18
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-curator.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfb49da8c2446_63064389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df1bab062574009c8c92a09023707e77c192760' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-curator.html',
      1 => 1543195098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-curator-information.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html' => 1,
  ),
),false)) {
function content_5bfb49da8c2446_63064389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16025810215bfb49da8bff77_18038778', 'profile');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10764559505bfb49da8c18c7_88214240', 'description');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-base.html");
}
/* {block 'profile'} */
class Block_16025810215bfb49da8bff77_18038778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profile' => 
  array (
    0 => 'Block_16025810215bfb49da8bff77_18038778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['profile']);?>
  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-curator-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
<?php
}
}
/* {/block 'profile'} */
/* {block 'description'} */
class Block_10764559505bfb49da8c18c7_88214240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description' => 
  array (
    0 => 'Block_10764559505bfb49da8c18c7_88214240',
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
