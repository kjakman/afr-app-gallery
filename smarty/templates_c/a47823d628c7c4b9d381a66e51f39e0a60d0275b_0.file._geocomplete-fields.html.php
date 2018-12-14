<?php
/* Smarty version 3.1.32, created on 2018-07-10 05:22:49
  from '/var/www/html/test.vpatina.com/smarty/templates/components/_geocomplete-fields.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4442a97977e8_94745959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47823d628c7c4b9d381a66e51f39e0a60d0275b' => 
    array (
      0 => '/var/www/html/test.vpatina.com/smarty/templates/components/_geocomplete-fields.html',
      1 => 1531131215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4442a97977e8_94745959 (Smarty_Internal_Template $_smarty_tpl) {
?>

                          <?php $_smarty_tpl->_assignInScope('debug_loc', 0);?>
                          <div class="geo-details">
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="location_lat"      value="<?php echo $_smarty_tpl->tpl_vars['event']->value['location_lat'];?>
"      data-geo="lat"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="location_long"     value="<?php echo $_smarty_tpl->tpl_vars['event']->value['location_long'];?>
"     data-geo="lng"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="location_bounds"   value="<?php echo $_smarty_tpl->tpl_vars['event']->value['location_bounds'];?>
"   data-geo="bounds" class="location-bounds"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="location_center"   value="<?php echo $_smarty_tpl->tpl_vars['event']->value['location_center'];?>
"   data-geo="center" class="location-center"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="address_street"    value="<?php echo $_smarty_tpl->tpl_vars['event']->value['address_street'];?>
"    data-geo="route"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="address_number"    value="<?php echo $_smarty_tpl->tpl_vars['event']->value['address_number'];?>
"    data-geo="street_number"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="address_city"      value="<?php echo $_smarty_tpl->tpl_vars['event']->value['address_city'];?>
"      data-geo="locality"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="address_postcode"  value="<?php echo $_smarty_tpl->tpl_vars['event']->value['address_postcode'];?>
"  data-geo="postal_code"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="address_state"     value="<?php echo $_smarty_tpl->tpl_vars['event']->value['address_state'];?>
"     data-geo="administrative_area_level_1"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="address_country"   value="<?php echo $_smarty_tpl->tpl_vars['event']->value['address_country'];?>
"   data-geo="country_short"/>
                            <input type="<?php if (($_smarty_tpl->tpl_vars['debug_loc']->value)) {?>text<?php } else { ?>hidden<?php }?>" name="address_formatted" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['address_formatted'];?>
" data-geo="formatted_address"/>
                          </div>                                                     

<?php }
}
