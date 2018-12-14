<?php
/* Smarty version 3.1.32, created on 2018-12-14 06:11:33
  from '/web/sites/afr-app-gallery/smarty/templates/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c134995c3b875_38088292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3571707f158102362ee606998708b640efc630f0' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/login.html',
      1 => 1544767893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-form.html' => 1,
  ),
),false)) {
function content_5c134995c3b875_38088292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7909308315c134995c356c4_42946541', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'content'} */
class Block_7909308315c134995c356c4_42946541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7909308315c134995c356c4_42946541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  

                  <div class="container">
                    <?php if (($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
                    <h2>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
</h2>   
                    <a href="?act=logout&amp;_aid=0">Log out</a>
                    <br><br>
                    <?php } else { ?>
                      <h3>Login</h3>
                      <?php if (($_smarty_tpl->tpl_vars['scope']->value['provider_keys'])) {?>
                        <?php $_smarty_tpl->_assignInScope('providers', $_smarty_tpl->tpl_vars['scope']->value['provider_keys']);?>
                        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-third-party.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <div class='gap gap-small'></div>                      
                      <?php }?>
                      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-login-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>          
                      <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_REGISTER') ));
echo $_smarty_tpl->tpl_vars['query_string']->value;?>
">New To <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
?</a><br>
                      <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_PASSWORD') ));
echo $_smarty_tpl->tpl_vars['query_string']->value;?>
">Forgot Password?</a>
                    <?php }?>
                  </div>
  <?php
}
}
/* {/block 'content'} */
}
