<?php
/* Smarty version 3.1.32, created on 2018-11-27 12:41:18
  from '/web/sites/afr-app-gallery/smarty/templates/register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfd3b6e9c1e42_14575537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3fa9e81333fbcff5c707cc99039242160e23a8d' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/register.html',
      1 => 1543322478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-register-managed-account-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-register-form.html' => 1,
  ),
),false)) {
function content_5bfd3b6e9c1e42_14575537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_238577965bfd3b6e9ba5d1_30070113', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'content'} */
class Block_238577965bfd3b6e9ba5d1_30070113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_238577965bfd3b6e9ba5d1_30070113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  

                  <div class="container">
                    <?php if (($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
                    <h2>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
</h2>
                    
                    <?php if (($_smarty_tpl->tpl_vars['user']->value['user_level'] >= @constant('USER_LEVEL_OWNER'))) {?>
                      <?php if (($_GET['l'] == 1)) {?>
                        <h3>Register Managed Account</h3>
                        <p>This is an account linked to yours that you manage.</p> 
                        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-register-managed-account-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>          
                      <?php } else { ?>
                        <a href="?l=1" class="btn btn-success">Register Linked Account</a>
                      <?php }?>
                      
                    
                    <?php }?>
                    
                    <?php } else { ?>
                      <h3>Register</h3>
                      <?php if (($_smarty_tpl->tpl_vars['scope']->value['provider_keys'])) {?>
                        <?php $_smarty_tpl->_assignInScope('providers', $_smarty_tpl->tpl_vars['scope']->value['provider_keys']);?>
                        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <div class='gap gap-small'></div>                      
                      <?php }?>
                      
                      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-register-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>          
                      <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_LOGIN') ));
echo $_smarty_tpl->tpl_vars['query_string']->value;?>
">Already registered?</a>                      <div class='gap gap-small'></div>                      
                      <div class='gap gap-small'></div>                      
                    <?php }?>
                  </div>
  <?php
}
}
/* {/block 'content'} */
}
