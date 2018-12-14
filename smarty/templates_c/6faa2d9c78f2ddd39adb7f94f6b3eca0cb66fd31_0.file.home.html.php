<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:01:51
  from '/web/sites/afr-app-gallery/smarty/templates/minisites/home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13555fadbd11_71433129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6faa2d9c78f2ddd39adb7f94f6b3eca0cb66fd31' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/minisites/home.html',
      1 => 1544770911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c13555fadbd11_71433129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_942599785c13555faa0925_67999664', 'content');
?>
                              
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/minisites/index.html");
}
/* {block 'content'} */
class Block_942599785c13555faa0925_67999664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_942599785c13555faa0925_67999664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

  <?php $_smarty_tpl->_assignInScope('data', json_decode($_smarty_tpl->tpl_vars['minisite_pageObj']->value['data'],TRUE));?>
  
	   <div class="row">
	     <div class="col-md-3 text-left">
	     </div>
	     <div class="col-md-9 exhibition_home"> 
	     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_exhibitions']->value, 'exhibition');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exhibition']->value) {
?>
	       <?php if (($_smarty_tpl->tpl_vars['exhibition']->value['current'] == "current")) {?>
	         <?php $_smarty_tpl->_assignInScope('current_exists', 1);?>
	       <?php } elseif (($_smarty_tpl->tpl_vars['exhibition']->value['current'] == "past")) {?>
	         <?php $_smarty_tpl->_assignInScope('past_exists', 1);?>
	       <?php } elseif (($_smarty_tpl->tpl_vars['exhibition']->value['current'] == "future")) {?>
	         <?php $_smarty_tpl->_assignInScope('future_exists', 1);?>
	       <?php }?>
	     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	     
	     
	     	<?php if (($_smarty_tpl->tpl_vars['data']->value['show_recent'] == 1)) {?>
			     <?php $_smarty_tpl->_assignInScope('i', 0);?>   
			     <?php if (($_smarty_tpl->tpl_vars['data']->value['show_future'] == 1) && ($_smarty_tpl->tpl_vars['future_exists']->value == 1)) {?>
			       <?php $_smarty_tpl->_assignInScope('future', 1);?>
			       <h5>Future Exhibition</h5>
			       <ul class="timeline">
			       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_exhibitions']->value, 'exhibition');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exhibition']->value) {
?>
			         <?php if (($_smarty_tpl->tpl_vars['exhibition']->value['current'] == "future")) {?>
			             <li <?php if (($_smarty_tpl->tpl_vars['i']->value%2)) {?>class="timeline-inverted"<?php }?>>
			               <div class="timeline-badge timeline-badge-small info"><i class="glyphicon glyphicon-check"></i></div>
			               <div class="timeline-panel">
			                 <div class="timeline-heading">
			                   <h6 class="timeline-title"><div class="bold mb10"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'artists' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value ));?>
</div> 
			                     <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['exhibition']->value['title'];?>
</a>
			                   </h6>
			                   <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['start_date'],"%e %B %Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['end_date'],"%e %B %Y");?>
</small></p>
			                 </div>
			                 <div class="timeline-body">
			                   <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
" class="img-container">
			                     <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value,'small' ));?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['name'];?>
 Exhibition">
			                   </a>
			                 </div>
			               </div>
			             </li> 
			             <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?> 
			         <?php }?>  
			       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			       </ul>
			     <?php }?>
			     
			  
			     <?php if (($_smarty_tpl->tpl_vars['data']->value['show_current'] == 1) && ($_smarty_tpl->tpl_vars['current_exists']->value == 1)) {?>      
			       <?php $_smarty_tpl->_assignInScope('current', 1);?>
			       <h5>Current Exhibition</h5>
			       <ul class="timeline">
			       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_exhibitions']->value, 'exhibition');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exhibition']->value) {
?>
			         <?php if (($_smarty_tpl->tpl_vars['exhibition']->value['current'] == "current")) {?>
			             <li <?php if (($_smarty_tpl->tpl_vars['i']->value%2)) {?>class="timeline-inverted"<?php }?>>
			               <div class="timeline-badge timeline-badge-small success"><i class="glyphicon glyphicon-check"></i></div>
			               <div class="timeline-panel">
			                 <div class="timeline-heading">
			                   <h6 class="timeline-title"><div class="bold mb10"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'artists' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value ));?>
</div> 
			                     <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['exhibition']->value['title'];?>
</a>
			                   </h6>
			                   <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['start_date'],"%e %B %Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['end_date'],"%e %B %Y");?>
</small></p>
			                 </div>
			                 <div class="timeline-body">
			                   <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
" class="img-container">
			                     <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value,'small' ));?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['name'];?>
 Exhibition">
			                   </a>
			                 </div>
			               </div>
			             </li> 
			             <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?> 
			         <?php }?>       
			       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			       </ul>
			     <?php }?>


			     <?php if (($_smarty_tpl->tpl_vars['data']->value['show_past'] == 1) && ($_smarty_tpl->tpl_vars['past_exists']->value == 1)) {?>      
			       <?php $_smarty_tpl->_assignInScope('past', 1);?>  
			       <h5>Past Exhibition</h5>
			       <ul class="timeline">
			       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_exhibitions']->value, 'exhibition');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exhibition']->value) {
?>
			         <?php if (($_smarty_tpl->tpl_vars['exhibition']->value['current'] == "past")) {?>
			             <li <?php if (($_smarty_tpl->tpl_vars['i']->value%2)) {?>class="timeline-inverted"<?php }?>>
			               <div class="timeline-badge timeline-badge-small danger"><i class="glyphicon glyphicon-check"></i></div>
			               <div class="timeline-panel">
			                 <div class="timeline-heading">
			                   <h6 class="timeline-title"><div class="bold mb10"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'artists' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value ));?>
</div> 
			                     <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['exhibition']->value['title'];?>
</a>
			                   </h6>
			                   <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['start_date'],"%e %B %Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['end_date'],"%e %B %Y");?>
</small></p>
			                 </div>
			                 <div class="timeline-body">
			                   <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
" class="img-container">
			                     <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value,'small' ));?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['name'];?>
 Exhibition">
			                   </a>
			                 </div>
			               </div>
			             </li>
			             <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
			         <?php }?>      
			       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			       </ul>
			     <?php }?>

			 <?php } else { ?>
	     		<?php $_smarty_tpl->_assignInScope('i', 0);?> 

	     		<?php if (($_smarty_tpl->tpl_vars['data']->value['show_past'] == 1) && ($_smarty_tpl->tpl_vars['past_exists']->value == 1)) {?>      
	     		  <?php $_smarty_tpl->_assignInScope('past', 1);?>  
	     		  <h5>Past Exhibition</h5>
	     		  <ul class="timeline">
	     		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_exhibitions']->value, 'exhibition');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exhibition']->value) {
?>
	     		    <?php if (($_smarty_tpl->tpl_vars['exhibition']->value['current'] == "past")) {?>
	     		        <li <?php if (($_smarty_tpl->tpl_vars['i']->value%2)) {?>class="timeline-inverted"<?php }?>>
	     		          <div class="timeline-badge timeline-badge-small danger"><i class="glyphicon glyphicon-check"></i></div>
	     		          <div class="timeline-panel">
	     		            <div class="timeline-heading">
	     		              <h6 class="timeline-title"><div class="bold mb10"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'artists' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value ));?>
</div> 
	     		                <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['exhibition']->value['title'];?>
</a>
	     		              </h6>
	     		              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['start_date'],"%e %B %Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['end_date'],"%e %B %Y");?>
</small></p>
	     		            </div>
	     		            <div class="timeline-body">
	     		              <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
" class="img-container">
	     		                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value,'small' ));?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['name'];?>
 Exhibition">
	     		              </a>
	     		            </div>
	     		          </div>
	     		        </li>
	     		        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
	     		    <?php }?>      
	     		  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	     		  </ul>
	     		<?php }?>

	     		<?php if (($_smarty_tpl->tpl_vars['data']->value['show_current'] == 1) && ($_smarty_tpl->tpl_vars['current_exists']->value == 1)) {?>      
	     		  <?php $_smarty_tpl->_assignInScope('current', 1);?>
	     		  <h5>Current Exhibition</h5>
	     		  <ul class="timeline">
	     		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_exhibitions']->value, 'exhibition');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exhibition']->value) {
?>
	     		    <?php if (($_smarty_tpl->tpl_vars['exhibition']->value['current'] == "current")) {?>
	     		        <li <?php if (($_smarty_tpl->tpl_vars['i']->value%2)) {?>class="timeline-inverted"<?php }?>>
	     		          <div class="timeline-badge timeline-badge-small success"><i class="glyphicon glyphicon-check"></i></div>
	     		          <div class="timeline-panel">
	     		            <div class="timeline-heading">
	     		              <h6 class="timeline-title"><div class="bold mb10"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'artists' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value ));?>
</div> 
	     		                <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['exhibition']->value['title'];?>
</a>
	     		              </h6>
	     		              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['start_date'],"%e %B %Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['end_date'],"%e %B %Y");?>
</small></p>
	     		            </div>
	     		            <div class="timeline-body">
	     		              <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
" class="img-container">
	     		                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value,'small' ));?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['name'];?>
 Exhibition">
	     		              </a>
	     		            </div>
	     		          </div>
	     		        </li> 
	     		        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?> 
	     		    <?php }?>       
	     		  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	     		  </ul>
	     		<?php }?>

	     		<?php if (($_smarty_tpl->tpl_vars['data']->value['show_future'] == 1) && ($_smarty_tpl->tpl_vars['future_exists']->value == 1)) {?>
	     		  <?php $_smarty_tpl->_assignInScope('future', 1);?>
	     		  <h5>Future Exhibition</h5>
	     		  <ul class="timeline">
	     		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_exhibitions']->value, 'exhibition');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exhibition']->value) {
?>
	     		    <?php if (($_smarty_tpl->tpl_vars['exhibition']->value['current'] == "future")) {?>
	     		        <li <?php if (($_smarty_tpl->tpl_vars['i']->value%2)) {?>class="timeline-inverted"<?php }?>>
	     		          <div class="timeline-badge timeline-badge-small info"><i class="glyphicon glyphicon-check"></i></div>
	     		          <div class="timeline-panel">
	     		            <div class="timeline-heading">
	     		              <h6 class="timeline-title"><div class="bold mb10"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'artists' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value ));?>
</div> 
	     		                <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['exhibition']->value['title'];?>
</a>
	     		              </h6>
	     		              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['start_date'],"%e %B %Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['end_date'],"%e %B %Y");?>
</small></p>
	     		            </div>
	     		            <div class="timeline-body">
	     		              <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
" class="img-container">
	     		                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value,'small' ));?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['name'];?>
 Exhibition">
	     		              </a>
	     		            </div>
	     		          </div>
	     		        </li> 
	     		        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?> 
	     		    <?php }?>  
	     		  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	     		  </ul>
	     		<?php }?>		     		
			<?php }?>

	     <?php if (($_smarty_tpl->tpl_vars['future']->value != 1) && ($_smarty_tpl->tpl_vars['current']->value != 1) && ($_smarty_tpl->tpl_vars['past']->value != 1)) {?>
	       <?php $_smarty_tpl->_assignInScope('i', 0);?>
	       <?php if (($_smarty_tpl->tpl_vars['data']->value['show_latest'] == 1)) {?>
	           <h5>Latest Exhibition</h5>
	           <ul class="timeline">
	             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_exhibitions']->value, 'exhibition');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exhibition']->value) {
?>
	               <li <?php if (($_smarty_tpl->tpl_vars['i']->value%2)) {?>class="timeline-inverted"<?php }?>>
	                 <div class="timeline-badge timeline-badge-small info"><i class="glyphicon glyphicon-check"></i></div>
	                 <div class="timeline-panel">
	                   <div class="timeline-heading">
	                     <h6 class="timeline-title"><div class="bold mb10"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'artists' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value ));?>
</div> 
	                       <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];
echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['exhibition']->value['title'];?>
</a>
	                     </h6>
	                     <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['start_date'],"%e %B %Y");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['exhibition']->value['end_date'],"%e %B %Y");?>
</small></p>
	                   </div>
	                   <div class="timeline-body">
	                     <a href="<?php echo $_smarty_tpl->tpl_vars['basepath']->value;
echo $_smarty_tpl->tpl_vars['exhibition']->value['page_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['slug'];?>
" class="img-container">
	                       <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'collection_photo' ][ 0 ], array( $_smarty_tpl->tpl_vars['exhibition']->value,'small' ));?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['exhibition']->value['name'];?>
 Exhibition">
	                     </a>
	                   </div>
	                 </div>
	               </li>
	               <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
	             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	           </ul>
	       <?php }?>
	     <?php }?>
	   </div> 
	 </div>

  <?php
}
}
/* {/block 'content'} */
}
