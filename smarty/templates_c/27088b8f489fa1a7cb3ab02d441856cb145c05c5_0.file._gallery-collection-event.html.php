<?php
/* Smarty version 3.1.32, created on 2018-12-13 11:53:18
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-event.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c12482ed954c7_43185439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27088b8f489fa1a7cb3ab02d441856cb145c05c5' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-event.html',
      1 => 1544701998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c12482ed954c7_43185439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>  <h4 class="italic"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['event']->value['start_time'] ));?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_time'],"H:i");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_time'],"H:i");?>
 
    &nbsp;
  
    <span class="addtocalendar atc-style-blue">
      <a class="atcb-link" tabindex="1">
        <i class="fa fa-calendar"></i>
      </a>
      <var class="atc_event">
        <var class="atc_date_start"><?php echo $_smarty_tpl->tpl_vars['event']->value['start_time'];?>
</var>
        <var class="atc_date_end"><?php echo $_smarty_tpl->tpl_vars['event']->value['end_time'];?>
</var>
        <var class="atc_timezone"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['event']->value['timezone'],'Europe/London' ));?>
</var>
        <var class="atc_title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['event']->value['title'],"Untitled Event" ));?>
</var>
        <var class="atc_description"><?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
</var>
        <var class="atc_location"><?php echo $_smarty_tpl->tpl_vars['event']->value['start_address'];?>
</var>
        <var class="atc_organizer"><?php echo $_smarty_tpl->tpl_vars['scope']->value['curator']['display_name'];?>
</var>
        <var class="atc_organizer_email"><?php echo $_smarty_tpl->tpl_vars['scope']->value['curator']['email_address'];?>
</var>
      </var>
    </span>       
  </h4>

<?php }
}
