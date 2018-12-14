<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:14:02
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13583a4fc717_63003907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b43fcc1c3c43df1f16826da3a9914e1e6bcb7e1c' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-contact-information.html',
      1 => 1544771642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c13583a4fc717_63003907 (Smarty_Internal_Template $_smarty_tpl) {
?>                            <p class='italic'>
                              <?php if (($_smarty_tpl->tpl_vars['profile']->value['phone'])) {?>Tel: <?php echo $_smarty_tpl->tpl_vars['profile']->value['phone'];?>
 <br><?php }?>
                              <?php if (($_smarty_tpl->tpl_vars['profile']->value['email_address'])) {?>e-mail: <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['profile']->value['email_address'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['email_address'];?>
</a> <br><?php }?>
                              <?php if (($_smarty_tpl->tpl_vars['profile']->value['url_web'])) {?>website: <a href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['url_web'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['url_web'];?>
</a><?php }?>
                            </p> 

<?php }
}
