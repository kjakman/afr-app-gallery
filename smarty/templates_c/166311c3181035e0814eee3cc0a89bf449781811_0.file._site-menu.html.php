<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:01:40
  from '/web/sites/afr-app-gallery/smarty/templates/components/_site-menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1355548b1826_49131561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '166311c3181035e0814eee3cc0a89bf449781811' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_site-menu.html',
      1 => 1544770900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_site-menu-items.html' => 1,
  ),
),false)) {
function content_5c1355548b1826_49131561 (Smarty_Internal_Template $_smarty_tpl) {
?>      <div class="nav <?php echo $_smarty_tpl->tpl_vars['scope']->value['class'];?>
">
        <ul class="slimmenu" id="slimmenu">
        <?php $_smarty_tpl->_assignInScope('tree', $_smarty_tpl->tpl_vars['global']->value['page_tree']);?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_site-menu-items.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </ul>
      </div>


<?php }
}
