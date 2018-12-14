<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:14:06
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-profile-tabs.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13583ee6de20_63884052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e52174eb27575de6e26677b8501b05d350998cef' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-profile-tabs.html',
      1 => 1544771646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-settings.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-overview.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-artist.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-gallery.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-collector.html' => 1,
  ),
),false)) {
function content_5c13583ee6de20_63884052 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_assignInScope('tab1_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'basic') )));?>
  <?php $_smarty_tpl->_assignInScope('tab2_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'about') )));?>
  <?php $_smarty_tpl->_assignInScope('tab3_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'artist') )));?>
  <?php $_smarty_tpl->_assignInScope('tab4_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'curator') )));?>
  <?php $_smarty_tpl->_assignInScope('tab5_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'collector') )));?>
  
  <?php $_smarty_tpl->_assignInScope('tab', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['tab'],'basic' )));?>
  <ul class="nav nav-tabs">
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'basic')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab1_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_basic_link">Basic</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'about')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab2_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_about_link">About</a></li>
    <?php if ((call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'has_role' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['user'],@constant('USER_ROLE_ARTIST') )))) {?>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'artist')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab3_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_artist_link">CV</a></li>
    <?php }?>
    <?php if ((call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'has_role' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['user'],@constant('smarty') )))) {?>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'curator')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab4_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_curator_link">Curator</a></li>
    <?php }?>
    <?php if ((call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'has_role' ][ 0 ], array( $_smarty_tpl->tpl_vars['scope']->value['user'],@constant('smarty') )))) {?>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'collector')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab5_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_collector_link">Collector</a></li>
    <?php }?>
  </ul>
  
  <div class="tab-content">
    <div id="tab_content" class="tab-pane fade in active pt20">       
    <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'basic')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-settings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'about')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-overview.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'artist')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-artist.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'curator')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-gallery.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'collector')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-collector.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } else { ?>
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( "Unknown tab ".((string)$_smarty_tpl->tpl_vars['tab']->value),"error" ));?>

    <?php }?>    
    </div>
  </div>

<?php }
}
