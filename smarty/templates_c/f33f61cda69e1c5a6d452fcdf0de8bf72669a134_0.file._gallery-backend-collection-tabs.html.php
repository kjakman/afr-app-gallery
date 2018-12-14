<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:26
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-tabs.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135726849111_07212706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f33f61cda69e1c5a6d452fcdf0de8bf72669a134' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-tabs.html',
      1 => 1544771366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-location-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-events-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-media-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-title-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-settings-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-publish-form.html' => 1,
  ),
),false)) {
function content_5c135726849111_07212706 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_assignInScope('tab1_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'basic') )));?>
  <?php $_smarty_tpl->_assignInScope('tab2_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'location') )));?>
  <?php $_smarty_tpl->_assignInScope('tab3_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'media') )));?> <!--pradeepa-->
  <?php $_smarty_tpl->_assignInScope('tab4_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'title') )));?> <!--pradeepa-->

  <?php $_smarty_tpl->_assignInScope('tab5_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'events') )));?>
  
  <?php $_smarty_tpl->_assignInScope('tab6_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'settings') )));?>
  <?php $_smarty_tpl->_assignInScope('tab7_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'publish') )));?>
  <?php $_smarty_tpl->_assignInScope('tab', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['tab'],'basic' )));?>
  <ul class="nav nav-tabs">
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'basic')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab1_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_basic_link">Basic</a></li>
    <?php if (($_smarty_tpl->tpl_vars['collection']->value['subtype'] != 40)) {?>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'location')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab2_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_locations_link">Location</a></li>
    <?php }?>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'media')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab3_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_media_link">Art</a></li> 
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'title')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab4_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_title_link">Title Image</a></li> 
    <?php if (($_smarty_tpl->tpl_vars['collection']->value['subtype'] != 40)) {?>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'events')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab5_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_events_link">Events</a></li>
    <?php }?>
    
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'settings')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab6_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_settings_link">Settings</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'publish')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab7_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_publish_link">Publish</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="tab_content" class="tab-pane fade in active pt20">       
    <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'basic')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'location')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-location-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'events')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-events-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'media')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-media-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'title')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-title-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>      
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'settings')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-settings-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'publish')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-collection-publish-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } else { ?>
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( "Unknown tab ".((string)$_smarty_tpl->tpl_vars['tab']->value),"error" ));?>

    <?php }?>    
    </div>


  </div>
<?php }
}
