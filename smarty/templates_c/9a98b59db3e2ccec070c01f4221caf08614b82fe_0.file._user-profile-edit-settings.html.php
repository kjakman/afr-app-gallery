<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:14:04
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-settings.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13583c2126b2_37022959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a98b59db3e2ccec070c01f4221caf08614b82fe' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-profile-edit-settings.html',
      1 => 1544771644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_timezones.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_geocomplete-fields.html' => 1,
  ),
),false)) {
function content_5c13583c2126b2_37022959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
          <?php $_smarty_tpl->_assignInScope('profile', $_smarty_tpl->tpl_vars['scope']->value['profile']);?>
          <?php $_smarty_tpl->_assignInScope('timings', $_smarty_tpl->tpl_vars['scope']->value['timing']);?>

          <form id="user_profile_form" class="ajax-submit" data-handler="save-profile" data-toggle="validator" data-reload_link="#user-verification-link">
            <!-- <input type="hidden" name="obj_type" value="user_profile" /> -->
            <input type="hidden" name="obj_id"  value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['profile_id'];?>
" />
            <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['user_id'];?>
" />
            <input type="hidden" name="site_id" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" />
            <input type="hidden" name="page"  value="profile" />
            <input type="hidden" name="artist" value="1" />
            <input hidden="1" name="next_tab" type="hidden" value="about">  
            
            <div class="row">              
              <div class="col-sm-6">
                <label for="first_name">First Name</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input name="first_name" id="first_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['first_name'];?>
" type="text" required/>
                </div>         
              </div>      
              <div class="col-sm-6">
                <label for="last_name">Last Name</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input name="last_name" id="last_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['last_name'];?>
" type="text" required />
                </div>         
              </div>      
            </div>
            
            <div class="row mt20">
              <div class="col-sm-6">
                <label for="display_name">Display Name</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input name="display_name" id="display_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['display_name'];?>
" type="text" required />
                </div>         
              </div>      
              <div class="col-sm-6">
                <label for="email_address">Email</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input name="email_address" id="email_address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['email_address'];?>
" type="email" required />
                </div>         
              </div>      
            </div>

            <div class="row mt20">
              <div class="col-sm-6">
              <label>Date of birth</label>
              <div class="input-group">
                <input type="text" id="date_of_birth" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['date_of_birth'];?>
" class="form-control datepicker" name="date_of_birth" placeholder="Date of birth" required>
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              </div>
              <!--div class="help-block with-errors">Whole Number</div-->                          
              </div>
              <div class="col-sm-6">
              <label>Gallery Name</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="gallery_name" id="gallery_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['gallery_name'];?>
" type="text" required />
              </div>
              </div>
            </div>
            
            <div class="row mt20">
              <div class="col-sm-6">
                <label for="phone">Phone</label>
                <div class="form-group">
                  <input name="phone" id="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['phone'];?>
" type="tel" required />
                </div>         
              </div>      
              <div class="col-sm-6">
                <label for="languages">Which languages do you speak?</label>
                <div class="form-group">
                  <div id="language-tag-list" class="tag-list" data-langs="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['languages'];?>
"></div>                  
                  <input name="languages" id="languages" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['languages'];?>
" type="hidden" />
                </div>         
              </div>      
            </div>
            
            <div class="row mt20">
              <div class="form-group col-sm-6">
                <label>Timezone</label>                  
                <select name="timezone" id="timezone" data-value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['timezone'];?>
" 
                   class="form-control auto-select" autofocus="autofocus" autocorrect="off" autocomplete="off">
                  <option value="">Select a timezone...</option>
                  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_timezones.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </select>
              </div>

              <?php if (($_smarty_tpl->tpl_vars['site']->value['gallery_site'])) {?>
              <div class="col-sm-6">
                <label for="url_web">Website</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                  <input name="url_web" id="url_web" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['url_web'];?>
" type="url" />
                </div>         
                  <div class="help-block with-errors">Full URL including http:// or https://</div>
              </div>      
              <?php }?>
            </div>                             

            <div class="row mb20">
              <div class="col-xs-12">
                <label for="profile-address"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'address','c' ));?>
</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                  <input name="profile-address" id="profile-address" class="form-control geocomplete" placeholder="123 Main street, New York" 
                         type="text" value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['address_formatted'];?>
"/>
                  <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_geocomplete-fields.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>                          
                </div>
              </div>
            </div> 

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timings']->value, 'timing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['timing']->value) {
?>
              <?php if (($_smarty_tpl->tpl_vars['timing']->value['day'] == 'monday')) {?>
                <?php $_smarty_tpl->_assignInScope('mon_start_time', $_smarty_tpl->tpl_vars['timing']->value['opening_time']);?>
                <?php $_smarty_tpl->_assignInScope('mon_end_time', $_smarty_tpl->tpl_vars['timing']->value['closing_time']);?>
                <?php $_smarty_tpl->_assignInScope('mon_holiday', $_smarty_tpl->tpl_vars['timing']->value['holiday']);?>
              <?php }?>
              <?php if (($_smarty_tpl->tpl_vars['timing']->value['day'] == 'tuesday')) {?>
                <?php $_smarty_tpl->_assignInScope('tue_start_time', $_smarty_tpl->tpl_vars['timing']->value['opening_time']);?>
                <?php $_smarty_tpl->_assignInScope('tue_end_time', $_smarty_tpl->tpl_vars['timing']->value['closing_time']);?>
                <?php $_smarty_tpl->_assignInScope('tue_holiday', $_smarty_tpl->tpl_vars['timing']->value['holiday']);?>
              <?php }?>
              <?php if (($_smarty_tpl->tpl_vars['timing']->value['day'] == 'wednesday')) {?>
                <?php $_smarty_tpl->_assignInScope('wed_start_time', $_smarty_tpl->tpl_vars['timing']->value['opening_time']);?>
                <?php $_smarty_tpl->_assignInScope('wed_end_time', $_smarty_tpl->tpl_vars['timing']->value['closing_time']);?>
                <?php $_smarty_tpl->_assignInScope('wed_holiday', $_smarty_tpl->tpl_vars['timing']->value['holiday']);?>
              <?php }?>
              <?php if (($_smarty_tpl->tpl_vars['timing']->value['day'] == 'thursday')) {?>
                <?php $_smarty_tpl->_assignInScope('thur_start_time', $_smarty_tpl->tpl_vars['timing']->value['opening_time']);?>
                <?php $_smarty_tpl->_assignInScope('thur_end_time', $_smarty_tpl->tpl_vars['timing']->value['closing_time']);?>
                <?php $_smarty_tpl->_assignInScope('thur_holiday', $_smarty_tpl->tpl_vars['timing']->value['holiday']);?>
              <?php }?>
              <?php if (($_smarty_tpl->tpl_vars['timing']->value['day'] == 'friday')) {?>
                <?php $_smarty_tpl->_assignInScope('fri_start_time', $_smarty_tpl->tpl_vars['timing']->value['opening_time']);?>
                <?php $_smarty_tpl->_assignInScope('fri_end_time', $_smarty_tpl->tpl_vars['timing']->value['closing_time']);?>
                <?php $_smarty_tpl->_assignInScope('fri_holiday', $_smarty_tpl->tpl_vars['timing']->value['holiday']);?>
              <?php }?>
              <?php if (($_smarty_tpl->tpl_vars['timing']->value['day'] == 'saturday')) {?>
                <?php $_smarty_tpl->_assignInScope('sat_start_time', $_smarty_tpl->tpl_vars['timing']->value['opening_time']);?>
                <?php $_smarty_tpl->_assignInScope('sat_end_time', $_smarty_tpl->tpl_vars['timing']->value['closing_time']);?>
                <?php $_smarty_tpl->_assignInScope('sat_holiday', $_smarty_tpl->tpl_vars['timing']->value['holiday']);?>
              <?php }?>
              <?php if (($_smarty_tpl->tpl_vars['timing']->value['day'] == 'sunday')) {?>
                <?php $_smarty_tpl->_assignInScope('sun_start_time', $_smarty_tpl->tpl_vars['timing']->value['opening_time']);?>
                <?php $_smarty_tpl->_assignInScope('sun_end_time', $_smarty_tpl->tpl_vars['timing']->value['closing_time']);?>
                <?php $_smarty_tpl->_assignInScope('sun_holiday', $_smarty_tpl->tpl_vars['timing']->value['holiday']);?>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  

            <div class="row mb20">
              <div class="col-sm-12">
                <label for="Time">Opening Times</label>
                <table cellspacing="20">
                  <tr style="height: 15px;"> 
                  <tr>
                    <td style= "width:200px">
                      <label for="Monday">Monday</label>
                    </td>             
                      <td style= "width:200px">
                        <div class="input-group" style= "width:150px">
                          <input type="text" name="opening_time[]" class="form-control input-small timepicker"  value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mon_start_time']->value,'H:i');?>
"  data-time-format="H:i">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>
                      <td >
                        <div class="input-group" style= "width:150px">
                          <input type="text" name="closing_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mon_end_time']->value,'H:i');?>
" data-time-format="H:i" >
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td> 
                      <td>
                        <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['mon_holiday']->value == '1')) {?>checked<?php }?> class="form-control" name="holiday[0]" value="1" style= "width:20px">
                      </td> 
                      <td style= "width:200px">Closed</td>                   
                  </tr>
                  <tr style="height: 15px;"/>
                  <tr>
                    <td style= "width:200px">
                      <label for="Tuesday">Tuesday</label>
                    </td>
                      <td >
                        <div class="input-group" style= "width:150px">
                          <input type="text" name="opening_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tue_start_time']->value,'H:i');?>
" data-time-format="H:i">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>
                      <td style= "width:200px">
                        <div class="input-group" style= "width:150px">
                         <input type="text" name="closing_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tue_end_time']->value,'H:i');?>
" data-time-format="H:i">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>  
                      <td>
                        <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['tue_holiday']->value == '1')) {?>checked<?php }?> class="form-control" name="holiday[1]" value="1" style= "width:20px">
                      </td> 
                      <td style= "width:200px">Closed</td>  
                  </tr>
                  <tr style="height: 15px;"/>
                  <tr>
                    <td style= "width:200px">
                      <label for="Wednesday">Wednesday</label>
                    </td>
                      <td >
                        <div class="input-group" style= "width:150px">
                          <input type="text" name="opening_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['wed_start_time']->value,'H:i');?>
" data-time-format="H:i" >
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>
                      <td style= "width:200px">
                        <div class="input-group" style= "width:150px">
                         <input type="text" name="closing_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['wed_end_time']->value,'H:i');?>
" data-time-format="H:i" >
                         <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>  
                      <td>
                        <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['wed_holiday']->value == '1')) {?>checked<?php }?> class="form-control" name="holiday[2]" value="1" style= "width:20px">
                      </td> 
                      <td style= "width:200px">Closed</td>                     
                  </tr>
                  <tr style="height: 15px;"/>
                  <tr>
                    <td >
                      <label for="Thursday">Thursday</label>
                    </td>                   
                      <td style= "width:200px">
                        <div class="input-group" style= "width:150px">
                          <input type="text" name="opening_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['thur_start_time']->value,'H:i');?>
" data-time-format="H:i" >
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>
                      <td >
                        <div class="input-group" style= "width:150px">
                          <input type="text" name="closing_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['thur_end_time']->value,'H:i');?>
" data-time-format="H:i" >
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td> 
                      <td>
                        <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['thur_holiday']->value == '1')) {?>checked<?php }?> class="form-control" name="holiday[3]" value="1" style= "width:20px">
                      </td> 
                      <td style= "width:200px">Closed</td>                      
                  </tr>
                  <tr style="height: 15px;"/>
                  <tr>
                    <td >
                      <label for="Friday">Friday</label>
                    </td>                      
                      <td style= "width:200px">
                        <div class="input-group" style= "width:150px">
                          <input type="text" name="opening_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['fri_start_time']->value,'H:i');?>
" data-time-format="H:i">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>
                      <td >
                        <div class="input-group" style= "width:150px">
                         <input type="text" name="closing_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['fri_end_time']->value,'H:i');?>
" data-time-format="H:i">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>                        
                      <td>
                        <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['fri_holiday']->value == '1')) {?>checked<?php }?> class="form-control" name="holiday[4]" value="1" style= "width:20px">
                      </td> 
                      <td style= "width:200px">Closed</td> 
                  </tr>
                  <tr style="height: 15px;"/>
                  <tr>
                    <td >
                      <label for="Saturday">Saturday</label>
                    </td>                      
                      <td style= "width:200px">
                        <div class="input-group" style= "width:150px">
                          <input type="text" name="opening_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sat_start_time']->value,'H:i');?>
" data-time-format="H:i">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>
                      <td >
                        <div class="input-group" style= "width:150px">
                         <input type="text" name="closing_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sat_end_time']->value,'H:i');?>
" data-time-format="H:i">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td> 
                      <td>
                        <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['sat_holiday']->value == '1')) {?>checked<?php }?> class="form-control" name="holiday[5]" value="1" style= "width:20px">
                      </td> 
                      <td style= "width:200px">Closed</td>                        
                  </tr>
                  <tr style="height: 15px;"/>
                  <tr>
                    <td >
                      <label for="Sunday">Sunday</label>
                    </td>                      
                      <td style= "width:200px">
                        <div class="input-group" style= "width:150px">
                          <input type="text" name="opening_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sun_start_time']->value,'H:i');?>
" data-time-format="H:i">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td>
                      <td >
                        <div class="input-group" style= "width:150px">
                         <input type="text" name="closing_time[]" class="form-control input-small timepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sun_end_time']->value,'H:i');?>
" data-time-format="H:i">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                      </td> 
                      <td>
                        <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['sun_holiday']->value == '1')) {?>checked<?php }?> class="form-control" name="holiday[6]" value="1" style= "width:20px">
                      </td> 
                      <td style= "width:200px">Closed</td>                        
                  </tr>
                  <tr style="height: 15px;"/>
                  <tr style="height: 15px;"/>
                </table>           
              </div> 
            </div> 

            <div class="row mb20">
              <div class="col-sm-12">
                <label for="title">Social Media Profiles</label>
                <table cellspacing="20"> 
                  <tr style="height: 15px;"/>
                  <tr>
                    <td style= "width:200px">
                      <label for="Instagram">Instagram</label>
                    </td>
                    <td style= "width:500px">
                      <div class="input-group" style= "width:300px">
                        <input name="instagram" id="instagram" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['instagram'];?>
" type="text" /> 
                      </div>
                    </td>
                  </tr>
                  <tr style="height: 15px;"/>
                  <tr>
                    <td style= "width:200px">
                      <label for="Facebook">Facebook</label>
                    </td>
                    <td style= "width:500px">
                      <div class="input-group" style= "width:300px">
                        <input name="facebook" id="facebook" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['facebook'];?>
" type="text" />
                      </div>
                    </td>
                  </tr>
                  <tr style="height: 15px;"/>
                  <tr>
                    <td style= "width:200px">
                      <label for="Twitter">Twitter</label>
                    </td>
                    <td style= "width:500px">
                      <div class="input-group" style= "width:300px">
                        <input name="twitter" id="twitter" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['profile']['twitter'];?>
" type="text" />
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
                                   
            <input type="submit" class="btn btn-success" value="Save">            
          </form>
             
                                



<?php }
}
