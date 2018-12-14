<?php
/* Smarty version 3.1.32, created on 2018-10-23 05:52:25
  from '/web/sites/afr-app-gallery/smarty/templates/403.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bceb719486146_51408968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d0a48a5555d1b43e2ecffa1ca8411b2f33be52f' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/403.html',
      1 => 1540273945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bceb719486146_51408968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2093206425bceb7194839a5_41443537', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'content'} */
class Block_2093206425bceb7194839a5_41443537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2093206425bceb7194839a5_41443537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  

  <div class="full-center">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <!--p class="text-hero">Forbidden</p-->
          <h1>Page not allowed</h1>
          <p>We're sorry, but this page could be displayed due to invalid credentials</p>
          <?php if (($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
          <p>Perhaps you're not logged in as the owner of this content?</p>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['error'],'error' ));?>

          <?php } else { ?>
          <p>You are not currently log in.</p>
          <?php }?>
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
