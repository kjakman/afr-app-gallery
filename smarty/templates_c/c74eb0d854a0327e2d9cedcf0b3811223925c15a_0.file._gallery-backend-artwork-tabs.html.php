<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:20
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-tabs.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1357204f8d79_25495655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c74eb0d854a0327e2d9cedcf0b3811223925c15a' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-tabs.html',
      1 => 1544771360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-image-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-details-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-media-form.html' => 1,
  ),
),false)) {
function content_5c1357204f8d79_25495655 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_assignInScope('tab1_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'basic') )));?>
  <?php $_smarty_tpl->_assignInScope('tab2_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'image') )));?>
  <?php $_smarty_tpl->_assignInScope('tab3_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'details') )));?>
  <?php $_smarty_tpl->_assignInScope('tab4_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'media') )));?>
    <?php $_smarty_tpl->_assignInScope('tab', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['tab'],'basic' )));?>
  <ul class="nav nav-tabs">
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'basic')) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab1_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="#tab1_link">Basic</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'image')) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab2_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="#tab2_link">Image</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'details')) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab3_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="#tab3_link">Details</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'media')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab4_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="#tab4_link">Related Media</a></li>
      </ul>
  
  <div class="tab-content">
    <div id="tab_content" class="tab-pane fade in active pt20">       
    <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'basic')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'image')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-image-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'details')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-details-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'media')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-media-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>      
              
    <?php } else { ?>
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( "Unknown tab","error" ));?>

    <?php }?>    
    </div>
  </div>
<?php }
}
