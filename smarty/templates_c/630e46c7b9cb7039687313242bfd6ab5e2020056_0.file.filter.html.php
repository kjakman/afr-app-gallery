<?php
/* Smarty version 3.1.32, created on 2018-10-10 08:36:09
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/filter.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdb9f9b5b5e1_10190293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '630e46c7b9cb7039687313242bfd6ab5e2020056' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/filter.html',
      1 => 1539160569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdb9f9b5b5e1_10190293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('filter_exhibitions', $_smarty_tpl->tpl_vars['scope']->value['filter_exhibitions']);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7524045495bbdb9f9b540d8_58838131', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13824794895bbdb9f9b54ab5_23254184', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/minisites/index.html");
}
/* {block 'title'} */
class Block_7524045495bbdb9f9b540d8_58838131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7524045495bbdb9f9b540d8_58838131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Filter Page</h2> 
    
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_13824794895bbdb9f9b54ab5_23254184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13824794895bbdb9f9b54ab5_23254184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>


<div class="col-md-8 col-sm-12 detail-text">
    <div class="row">
      <div class="col-md-12 col-sm-12 detail-text comm_padd comm_padd_show">
        <div class="row artists-row mobile-row artists-list-row artists-grid grid_view">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_exhibitions']->value, 'filter_exhibition');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_exhibition']->value) {
?>
          <?php if (($_smarty_tpl->tpl_vars['filter_exhibitions']->value['current'] == "current")) {?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 text-left artist-grid-col comm_padd artist_grid">          
               <div class="artist_grid_cont">
                 <div class="artist-name text-center mt10">         
                  <h4><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'artists' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter_exhibitions']->value ));?>
</h4>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/exhibition/<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['filter_exhibitions']->value['title'];?>
</a>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['filter_exhibitions']->value['start_date'],"%e %B %Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['filter_exhibitions']->value['end_date'],"%e %B %Y");?>
</small></p>      
                  </div>
                <div class="image-container">  
                  <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;?>
/exhibition/<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
" class="img-container">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value,'small' ));?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['name'];?>
 Exhibition">
                  </a>
                </div>         
              </div>         
            </div>
          <?php }?>
          
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>    
      </div>
    </div>
</div>
 <?php
}
}
/* {/block 'content'} */
}
