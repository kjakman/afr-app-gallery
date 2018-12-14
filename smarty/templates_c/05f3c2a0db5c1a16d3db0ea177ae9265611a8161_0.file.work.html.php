<?php
/* Smarty version 3.1.32, created on 2018-12-11 13:40:40
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/work.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0fbe589b3ed1_83204192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f3c2a0db5c1a16d3db0ea177ae9265611a8161' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/work.html',
      1 => 1544535640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0fbe589b3ed1_83204192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


  

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4361883745c0fbe589ae033_25491467', 'title');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1900570535c0fbe589ae983_15528036', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/minisites/index.html");
}
/* {block 'title'} */
class Block_4361883745c0fbe589ae033_25491467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4361883745c0fbe589ae033_25491467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>WORK</h2>      
  <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_1900570535c0fbe589ae983_15528036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1900570535c0fbe589ae983_15528036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php $_smarty_tpl->_assignInScope('artist', $_smarty_tpl->tpl_vars['scope']->value['artist']);?>
  <?php $_smarty_tpl->_assignInScope('collections', $_smarty_tpl->tpl_vars['artist']->value['collections']);?>
  <div class="row">
    <div class="col-md-3 text-left">
    </div>
    
    <div class="col-md-8 col-sm-12 detail-text">
      <div class="row artists-row mobile-row artists-list-row artists-grid">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collections']->value, 'collection');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['collection']->value) {
?>
          <?php $_smarty_tpl->_assignInScope('link', ((string)$_smarty_tpl->tpl_vars['basepath']->value)."/exhibition/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'slugify' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['title'] ))))."~".((string)$_smarty_tpl->tpl_vars['collection']->value['id'])."/images");?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-left artist-grid-col">
          <div class="image-container">  
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
">
              <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value,'ig' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
">
            </a>
          </div>
          <div class="artist-name text-center mt10">
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
</h4></a>
          </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>    
    </div>
  </div>
  

  
  <?php
}
}
/* {/block 'content'} */
}
