<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:31:10
  from '/web/sites/afr-app-gallery/smarty/templates/base/sidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c3e947e16_16610488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '172ccd9166b1b45a81ec0ddcfaf996c11aa2930d' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/base/sidebar.html',
      1 => 1544772670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135c3e947e16_16610488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19864744235c135c3e942069_49779229', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10936553925c135c3e9468d1_34396751', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/admin.html");
}
/* {block 'top'} */
class Block_19864744235c135c3e942069_49779229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_19864744235c135c3e942069_49779229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (($_smarty_tpl->tpl_vars['user']->value)) {?>
  <div class="dropdown abs_top_right user-avatar ztop">
    <a href="#" class="btn btn-default dropdown-toggle" id="dropdownMenu1" 
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img class="origin round" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'userphoto' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value,'tiny' ));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
">
    </a>
    
    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
      <li><span class="ml10"><b><?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
</b></span></li>
      <li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_PROFILE') ));
echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">View Profile</a></li>
      <li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_EDIT_PROFILE') ));
echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Edit Profile</a></li>
      <li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_ACCOUNT') ));
echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Account</a></li>
      <li><a href="?act=logout">Logout</a></li>
    </ul>
    
  </div>
    

  <?php }
}
}
/* {/block 'top'} */
/* {block 'subview_nav'} */
class Block_3649511515c135c3e946dd7_45729728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subview_nav'} */
/* {block 'subview_container'} */
class Block_10785983675c135c3e9473c6_54104961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subview_container'} */
/* {block 'content'} */
class Block_10936553925c135c3e9468d1_34396751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10936553925c135c3e9468d1_34396751',
  ),
  'subview_nav' => 
  array (
    0 => 'Block_3649511515c135c3e946dd7_45729728',
  ),
  'subview_container' => 
  array (
    0 => 'Block_10785983675c135c3e9473c6_54104961',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  <nav class="navbar navbar-inverse sidebar subview-nav fixed" 
       role="navigation" data-target="#subview-container" style="z-index:999"> 
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/" data-breakout="1"></i>Home <i class="pull-right hidden-xs showopacity fa fa-home"></i></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3649511515c135c3e946dd7_45729728', 'subview_nav', $this->tplIndex);
?>

      </div>
    </div>
  </nav>

  <div class="main container" id="subview-container">    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10785983675c135c3e9473c6_54104961', 'subview_container', $this->tplIndex);
?>
               
  </div>


  
	<?php echo '<script'; ?>
 type="text/javascript">
	function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});
	<?php echo '</script'; ?>
>
  
<?php
}
}
/* {/block 'content'} */
}
