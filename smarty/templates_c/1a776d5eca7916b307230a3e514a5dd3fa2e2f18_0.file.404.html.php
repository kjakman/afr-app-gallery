<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:01:40
  from '/web/sites/afr-app-gallery/smarty/templates/404.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135554885145_14478532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a776d5eca7916b307230a3e514a5dd3fa2e2f18' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/404.html',
      1 => 1544770900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135554885145_14478532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4017904075c135554881450_98824879', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'content'} */
class Block_4017904075c135554881450_98824879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4017904075c135554881450_98824879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  

  <div class="full-center">
    <div class="container mb50">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <p class="text-hero"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['http_code'],"404" ));?>
</p>
          <h1><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['http_status_name'],"Not found" ));?>
</h1>
          <p>We're sorry, but this page could not be found</p>
          <?php if (($_smarty_tpl->tpl_vars['scope']->value['error'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['error'],"error" ));
}?>
          <a class="btn btn-success btn-ghost btn-lg mt5" href="/"><i class="fa fa-long-arrow-left"></i>Back to Homepage</a>
        </div>
      </div>
    </div>
  </div>

<?php
}
}
/* {/block 'content'} */
}
