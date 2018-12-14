<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:31:27
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-tabs.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c4f129014_01862842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b4e00c6fd552117e0b0443de2b4ecb1ff47da16' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-tabs.html',
      1 => 1544772687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-pages-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-home-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-artist-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-layout-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-appearance-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-settings-form.html' => 1,
  ),
),false)) {
function content_5c135c4f129014_01862842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('page_id', $_smarty_tpl->tpl_vars['scope']->value['page_id']);
$_smarty_tpl->_assignInScope('userid', $_smarty_tpl->tpl_vars['scope']->value['userid']);?>

  <?php $_smarty_tpl->_assignInScope('tab1_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'page') )));?>
  <?php $_smarty_tpl->_assignInScope('tab2_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'home') )));?>
  <?php $_smarty_tpl->_assignInScope('tab3_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'artist') )));?>
  <?php $_smarty_tpl->_assignInScope('tab4_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'exhibition') )));?>
  <?php $_smarty_tpl->_assignInScope('tab5_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'basic') )));?>
  <?php $_smarty_tpl->_assignInScope('tab6_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'styling') )));?>
  
  <?php $_smarty_tpl->_assignInScope('tab6_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'settings') )));?>
  
  <?php $_smarty_tpl->_assignInScope('tab', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['tab'],'page' )));?>

  <ul class="nav nav-tabs">
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'page')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab1_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_page_link">Pages</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'home')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab2_link']->value;?>
?_pv=1&page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&user_id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" class="ajax-loader" data-target="#subview-container" id="gbe_home_link">Home</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'artist')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab3_link']->value;?>
?_pv=1&page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&user_id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" class="ajax-loader" data-target="#subview-container" id="gbe_artist_link">Artist</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'exhibition')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab4_link']->value;?>
?_pv=1&page_id=<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
&user_id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" class="ajax-loader" data-target="#subview-container" id="gbe_exhibition_link">Exhibition</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'basic')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab5_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_basic_link">Basic</a></li>
    <!--<li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'styling')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab5_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_styling_link">styling</a></li>
    
    <li <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'settings')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tab4_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_settings_link">Settings</a></li> -->
  </ul>
  
  <div class="tab-content">
    <div id="tab_content" class="tab-pane fade in active pt20">       
    <?php if (($_smarty_tpl->tpl_vars['tab']->value == 'page')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-pages-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'home')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-home-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'artist')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-artist-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'exhibition')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'basic')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-layout-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'styling')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-appearance-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>            
    <?php } elseif (($_smarty_tpl->tpl_vars['tab']->value == 'settings')) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-settings-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php } else { ?>
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( "Unknown tab ".((string)$_smarty_tpl->tpl_vars['tab']->value),"error" ));?>

    <?php }?>    
    </div>


  </div>                                                        
<?php }
}
