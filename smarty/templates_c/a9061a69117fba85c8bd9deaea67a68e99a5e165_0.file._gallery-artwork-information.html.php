<?php
/* Smarty version 3.1.32, created on 2018-12-08 09:46:57
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artwork-information.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0b9311593ae4_78183116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9061a69117fba85c8bd9deaea67a68e99a5e165' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-artwork-information.html',
      1 => 1544262417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0b9311593ae4_78183116 (Smarty_Internal_Template $_smarty_tpl) {
?>                            
                            <h3 class="relative">
                              <?php if (($_smarty_tpl->tpl_vars['artwork']->value['available'])) {?>                            
                              <span class="dot_outside mt6 <?php if (($_smarty_tpl->tpl_vars['artwork']->value['available'] == 1)) {?>green<?php } else { ?>red<?php }?>">&#x25cf;</span>
                              <?php }?>
                              <?php echo $_smarty_tpl->tpl_vars['artwork']->value['title'];?>
, <span><?php echo $_smarty_tpl->tpl_vars['artwork']->value['primary_year'];?>
</span>                            
                            </h3> 
                            
                            <p class='italic'>
                              <?php echo $_smarty_tpl->tpl_vars['artwork']->value['technique'];?>
<br>
                              <?php if (($_smarty_tpl->tpl_vars['artwork']->value['height'] > 0 && $_smarty_tpl->tpl_vars['artwork']->value['width'] > 0)) {?>
                              <?php echo $_smarty_tpl->tpl_vars['artwork']->value['height'];?>
 x <?php echo $_smarty_tpl->tpl_vars['artwork']->value['width'];?>
 cm <br>
                              <?php }?>
  
                              <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['artwork']->value['count']);?>
                              <?php if (($_smarty_tpl->tpl_vars['count']->value == 1)) {?>
                              Unique
                              <?php } elseif (($_smarty_tpl->tpl_vars['count']->value > 0)) {?>
                              Edition of <?php echo $_smarty_tpl->tpl_vars['count']->value;?>

                              <?php }?>
                            </p>                             
                            <h4>
                              <?php if (($_smarty_tpl->tpl_vars['artwork']->value['available'])) {?>
                                <?php if (($_smarty_tpl->tpl_vars['artwork']->value['price'] > 0)) {?>
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'currency' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['currency'] ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'price' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['price'] ));?>
   
                                <?php } elseif (($_smarty_tpl->tpl_vars['artwork']->value['available'] > 0)) {?>
                                Price on inquiry
                                <?php }?>
                              <?php }?>
                            </h4>


<?php }
}
