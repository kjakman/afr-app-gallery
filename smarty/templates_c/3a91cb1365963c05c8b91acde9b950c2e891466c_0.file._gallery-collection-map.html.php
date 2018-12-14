<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:26:17
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-map.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135b196a1115_02449611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a91cb1365963c05c8b91acde9b950c2e891466c' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-map.html',
      1 => 1544772377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135b196a1115_02449611 (Smarty_Internal_Template $_smarty_tpl) {
?>      <?php $_smarty_tpl->_assignInScope('lat', $_smarty_tpl->tpl_vars['loc']->value['location_lat']);?>
      <?php $_smarty_tpl->_assignInScope('lng', $_smarty_tpl->tpl_vars['loc']->value['location_long']);?>
      <?php if (($_smarty_tpl->tpl_vars['loc']->value['address_city'] || $_smarty_tpl->tpl_vars['loc']->value['address_country'])) {?><h3><?php if (($_smarty_tpl->tpl_vars['loc']->value['address_city'])) {
echo $_smarty_tpl->tpl_vars['loc']->value['address_city'];?>
, <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['loc']->value['address_country'],'countries','name' ));?>
</h3><?php }?>
      <?php if (($_smarty_tpl->tpl_vars['loc']->value['address_street'])) {?><h4 class="italic"><?php echo $_smarty_tpl->tpl_vars['loc']->value['address_street'];?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'hide_false' ][ 0 ], array( $_smarty_tpl->tpl_vars['loc']->value['address_number'] ));?>
      </h4><?php }?>
      <?php if (($_smarty_tpl->tpl_vars['lat']->value && $_smarty_tpl->tpl_vars['lng']->value)) {?>
        <br>
        <div id="mapCanvas" class="" style="width: 100%; height: 250px" data-lat="<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
" data-lng="<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['loc']->value['name'];?>
" data-address="<?php echo $_smarty_tpl->tpl_vars['loc']->value['address_formatted'];?>
"></div>
        <?php echo '<script'; ?>
>
          $(function() {
            gmap_init("mapCanvas");
          });
        <?php echo '</script'; ?>
>
      <?php }?>
        
      

<?php }
}
