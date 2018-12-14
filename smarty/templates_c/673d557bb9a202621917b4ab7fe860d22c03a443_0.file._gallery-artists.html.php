<?php
/* Smarty version 3.1.32, created on 2018-07-25 12:53:39
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artists.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5872d327cb52_25172765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '673d557bb9a202621917b4ab7fe860d22c03a443' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artists.html',
      1 => 1532523219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-detail.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-item.html' => 1,
  ),
),false)) {
function content_5b5872d327cb52_25172765 (Smarty_Internal_Template $_smarty_tpl) {
?>                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['scope']->value['obj_id']);?>
                    <?php if (($_smarty_tpl->tpl_vars['id']->value)) {?>
                      <?php $_smarty_tpl->_assignInScope('projects', $_smarty_tpl->tpl_vars['scope']->value['projects']);?>
                      <div class="container">
                      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>                      
                      </div>
                    <?php } else { ?>
                    
                      <?php $_smarty_tpl->_assignInScope('count', count($_smarty_tpl->tpl_vars['scope']->value['items']));?>
                      <ul class="photo-grid-5 list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scope']->value['items'], 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artist-item.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </ul>
                    <?php }?>


<?php }
}
