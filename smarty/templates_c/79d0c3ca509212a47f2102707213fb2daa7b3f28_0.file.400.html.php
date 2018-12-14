<?php
/* Smarty version 3.1.32, created on 2018-12-12 10:18:26
  from '/web/sites/afr-app-gallery/smarty/templates/400.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c10e0725d5302_40349547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79d0c3ca509212a47f2102707213fb2daa7b3f28' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/400.html',
      1 => 1544609906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c10e0725d5302_40349547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13574760955c10e0725d2917_88129632', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'content'} */
class Block_13574760955c10e0725d2917_88129632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13574760955c10e0725d2917_88129632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  

  <div class="full-center">
    <div class="container mb50">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <!-- p class="text-hero">Whoops</p-->
          <h2>Something went wrong...</h2>
          <p>We're sorry, but we could not fulfill your request.</p>
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
