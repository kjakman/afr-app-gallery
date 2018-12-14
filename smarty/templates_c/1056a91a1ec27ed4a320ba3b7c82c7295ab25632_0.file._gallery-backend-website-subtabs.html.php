<?php
/* Smarty version 3.1.32, created on 2018-10-17 08:13:42
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-subtabs.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc6ef369a5038_46230957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1056a91a1ec27ed4a320ba3b7c82c7295ab25632' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-subtabs.html',
      1 => 1539764022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-form.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-layout.html' => 1,
  ),
),false)) {
function content_5bc6ef369a5038_46230957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('subtab1_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'exhibition','subtab'=>'subexhibition') )));?>

<?php $_smarty_tpl->_assignInScope('subtab2_link', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'rroute' ][ 0 ], array( 'backend:subview:id:action:tab',array('subview'=>$_smarty_tpl->tpl_vars['page']->value['itemview'],'id'=>$_smarty_tpl->tpl_vars['scope']->value['obj_id'],'action'=>'edit','tab'=>'exhibition','subtab'=>'sublayout') )));?>

<?php $_smarty_tpl->_assignInScope('subtab', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['subtab'],'subexhibition' )));
echo $_smarty_tpl->tpl_vars['page']->value['tab'];?>

  <ul class="nav nav-tabs">
    <li <?php if (($_smarty_tpl->tpl_vars['subtab']->value == 'subexhibition')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['subtab1_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_subexhibition_link">Basic</a></li>
    <li <?php if (($_smarty_tpl->tpl_vars['subtab']->value == 'sublayout')) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['subtab2_link']->value;?>
?_pv=1" class="ajax-loader" data-target="#subview-container" id="gbe_sublayout_link">Layout</a></li>
  </ul>

  <div class="tab-content">
    <div id="tab_content" class="tab-pane fade in active pt20">       
      <?php if (($_smarty_tpl->tpl_vars['subtab']->value == 'subexhibition')) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
      <?php } elseif (($_smarty_tpl->tpl_vars['subtab']->value == 'sublayout')) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php } else { ?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'alert' ][ 0 ], array( "Unknown Sub tab ".((string)$_smarty_tpl->tpl_vars['tab']->value),"error" ));?>

      <?php }?>
    </div>
  </div>
<?php }
}
