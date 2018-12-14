<?php
/* Smarty version 3.1.32, created on 2018-11-25 10:53:32
  from '/web/sites/afr-app-gallery/smarty/templates/forgot-password.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa7f2c33e567_34603892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f20bb6bbce2baece5126c3e054b6914dc31f9b11' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/forgot-password.html',
      1 => 1543143212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-password-form.html' => 1,
  ),
),false)) {
function content_5bfa7f2c33e567_34603892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5845200165bfa7f2c339d54_03383567', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'content'} */
class Block_5845200165bfa7f2c339d54_03383567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5845200165bfa7f2c339d54_03383567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  

                  <div class="container">
                    <div class='gap gap-small'>
                    <?php if (($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
                    <h2>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
</h2>                    
                    <?php } else { ?>
                      <h3>Forgot password</h3>
                      <p>Please enter your username or email to reset your password. You will receive an email with instructions.</p>
                      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-password-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>          
                      <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_LOGIN') ));
echo $_smarty_tpl->tpl_vars['query_string']->value;?>
">Login</a><br>
                      <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_REGISTER') ));
echo $_smarty_tpl->tpl_vars['query_string']->value;?>
">New To <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
?</a>
                    <?php }?>
                  </div>
  <?php
}
}
/* {/block 'content'} */
}
