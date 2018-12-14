<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:31:10
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c3e9740c6_80503608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cb839a47fdfd4f3c9f6d43bd9c3a292a19b33c4' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-nav.html',
      1 => 1544772670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135c3e9740c6_80503608 (Smarty_Internal_Template $_smarty_tpl) {
?>
                        <?php $_smarty_tpl->_assignInScope('p', '/backend');?>
                        <ul class="nav navbar-nav">          
                          <li id="nav_section_artwork" class="class-filter<?php if (($_smarty_tpl->tpl_vars['scope']->value['section'] == 'artwork')) {?> active<?php }?>"><a class="subview-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/artworks" id="gbe_artworks_link"></i>Artworks <i class="pull-right hidden-xs showopacity fa fa-paint-brush"></i></a></li>
                          <li id="nav_section_exhibition" class="class-filter<?php if (($_smarty_tpl->tpl_vars['scope']->value['section'] == 'exhibition')) {?> active<?php }?>"><a class="subview-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/exhibitions"></i>Exhibitions <i class="pull-right hidden-xs showopacity fa fa-asterisk"></i></a></li>
                          <li id="nav_section_plugin" class="class-filter<?php if (($_smarty_tpl->tpl_vars['scope']->value['section'] == 'plugin')) {?> active<?php }?>"><a class="subview-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/plugins"></i>Plugins <i class="pull-right hidden-xs showopacity fa fa-link"></i></a></li>
                          <li id="nav_section_vault" class="class-filter<?php if (($_smarty_tpl->tpl_vars['scope']->value['section'] == 'vault')) {?> active<?php }?>"><a class="subview-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/vault"></i>My Media <i class="pull-right hidden-xs showopacity fa fa-folder-o"></i></a></li>
                          <li id="nav_section_network" class="class-filter<?php if (($_smarty_tpl->tpl_vars['scope']->value['section'] == '')) {?> active<?php }?>"><a class="subview-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/network"></i>My Network <i class="pull-right hidden-xs showopacity fa fa-users"></i></a></li>
                          <!--li id="nav_section_media" class="class-filter<?php if (($_smarty_tpl->tpl_vars['scope']->value['section'] == '')) {?> active<?php }?>"><a class="subview-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/media"></i>Media <i class="pull-right hidden-xs showopacity fa fa-picture-o"></i></a></li-->
                          <li id="nav_section_website" class="class-filter<?php if (($_smarty_tpl->tpl_vars['scope']->value['section'] == 'website')) {?> active<?php }?>"><a class="subview-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/websites"></i>Website <i class="pull-right hidden-xs showopacity fa fa-globe"></i></a></li>
                                                    
                                                  </ul>                                         
                                                                                   
<?php }
}
