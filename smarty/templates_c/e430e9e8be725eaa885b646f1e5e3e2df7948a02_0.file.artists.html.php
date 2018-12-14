<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:44:26
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/artists.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135f5ac05a71_58588621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e430e9e8be725eaa885b646f1e5e3e2df7948a02' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/artists.html',
      1 => 1544773466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135f5ac05a71_58588621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


  

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5425530265c135f5abff989_35526336', 'title');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2655160435c135f5ac00e25_14435371', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/minisites/index.html");
}
/* {block 'title'} */
class Block_5425530265c135f5abff989_35526336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5425530265c135f5abff989_35526336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2><?php echo $_smarty_tpl->tpl_vars['minisite_pageObj']->value['page_title'];?>
</h2>    
  <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_2655160435c135f5ac00e25_14435371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2655160435c135f5ac00e25_14435371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php $_smarty_tpl->_assignInScope('artists', $_smarty_tpl->tpl_vars['scope']->value['artists']);?>
  <div class="row">
    <div class="col-md-3 text-left">
    </div>
    
    <div class="col-md-8 col-sm-12 detail-text">
      <div class="row artists-row mobile-row artists-list-row artists-grid">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artists']->value, 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value) {
?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-left artist-grid-col">
          <div class="image-container">  
            <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['artist']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['artist']->value['slug'];?>
">
              <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['artist']->value['title_image'],'ig' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['artist']->value['display_name'];?>
 Thumbnail">
            </a>
          </div>
          <div class="artist-name text-center mt10">
            <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['artist']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['artist']->value['slug'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['artist']->value['display_name'];?>
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
