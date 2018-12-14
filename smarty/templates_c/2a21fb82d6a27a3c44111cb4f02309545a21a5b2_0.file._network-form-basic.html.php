<?php
/* Smarty version 3.1.32, created on 2018-12-08 09:02:57
  from '/web/sites/afr-app-gallery/smarty/templates/components/_network-form-basic.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0b88c186b815_74284596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a21fb82d6a27a3c44111cb4f02309545a21a5b2' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_network-form-basic.html',
      1 => 1544259777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_timezones.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_geocomplete-fields.html' => 1,
  ),
),false)) {
function content_5c0b88c186b815_74284596 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="user_profile_basic_form" class="ajax-submit" data-handler="add-artist" data-toggle="validator" data-reload_link="#user-verification-link" data-success_handler="gbe_network_handler">
            <input type="hidden" name="obj_type" value="user_profile" />
            <input type="hidden" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['profile_id'];?>
" />
            <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['user']['user_id'];?>
" />
            <input type="hidden" name="site_id" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['id'];?>
" />
            <input type="hidden" name="artist" value="1" />
            <div class="row">              
              <div class="col-sm-6">
                <label for="first_name">First Name*</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input name="first_name" id="first_name" class="form-control" type="text" />
                </div>         
              </div>      
              <div class="col-sm-6">
                <label for="last_name">Last Name *</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input name="last_name" id="last_name" class="form-control" type="text" />
                </div>         
              </div>      
            </div>
            
            <div class="row mt20">
              <div class="col-sm-6">
                <label for="display_name">Display Name</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input name="display_name" id="display_name" class="form-control" type="text" />
                </div>         
              </div>      
              <div class="col-sm-6">
                <label for="email_address">Email</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <input name="email_address" id="email_address" class="form-control" type="email" />
                </div>         
              </div>      
            </div>

          <div class="row mt20">
            <div class="col-sm-6">
            <label>Date of birth</label>
              <div class="input-group">
                <input type="text" id="date_of_birth" class="form-control datepicker" name="date_of_birth" placeholder="Date of birth">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              </div>
            <!--div class="help-block with-errors">Whole Number</div-->                          
            </div>
            <div class="col-sm-6">
              <label>Gallery Name</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="gallery_name" id="gallery_name" class="form-control" type="text" />
              </div>
              </div>
          </div>
            
            <div class="row mt20">
              <div class="col-sm-6">
                <label for="phone">Phone</label>
                <div class="form-group">
                  <input name="phone" id="phone" class="form-control" type="tel" />
                </div>         
              </div>  
                  
              <div class="col-sm-6">
                <label for="languages">Which languages do you speak?</label>
                <div class="form-group">
                  <div id="language-tag-list" class="tag-list" data-langs="<?php echo $_smarty_tpl->tpl_vars['profile']->value['languages'];?>
"></div>                  
                  <input name="languages" id="languages" class="form-control"/>
                </div>         
              </div>      
            </div>
            
            <div class="row mt20">
              <div class="form-group col-sm-6">
                <label>Timezone</label>                  
                <select name="timezone" id="timezone" data-value="<?php echo $_smarty_tpl->tpl_vars['profile']->value['timezone'];?>
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
                  <input name="url_web" id="url_web" class="form-control" type="url" />
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

            <div class="row mb20">
              <div class="col-sm-12">
                <label for="Time">Opening Times</label>
                <table cellspacing="20">
                  <tr style="height: 15px;"/> 
                  <tr>
                    <td style= "width:200px">
                      <label for="Monday">Monday</label>
                    </td>
                    <td style= "width:200px">
                      <div class="input-group" style= "width:150px">
                        <input type="text" name="opening_time[]" class="form-control input-small timepicker" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td >
                      <div class="input-group" style= "width:150px">
                        <input type="text" name="closing_time[]" class="form-control input-small timepicker" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td>
                      <input type="checkbox" class="form-control" name="holiday[0]" value="1" style= "width:20px">
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
                        <input type="text" name="opening_time[]" class="form-control input-small timepicker" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td style= "width:200px">
                      <div class="input-group" style= "width:150px">
                       <input type="text" name="closing_time[]" class="form-control input-small timepicker" >
                       <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td>
                      <input type="checkbox" class="form-control" name="holiday[1]" value="1" style= "width:20px">
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
                        <input type="text" name="opening_time[]" class="form-control input-small timepicker" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td style= "width:200px">
                      <div class="input-group" style= "width:150px">
                       <input type="text" name="closing_time[]" class="form-control input-small timepicker"  >
                       <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td>
                      <input type="checkbox" class="form-control" name="holiday[2]" value="1" style= "width:20px">
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
                        <input type="text" name="opening_time[]" class="form-control input-small timepicker" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td >
                      <div class="input-group" style= "width:150px">
                        <input type="text" name="closing_time[]" class="form-control input-small timepicker"  >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td>
                      <input type="checkbox" class="form-control" name="holiday[3]" value="1" style= "width:20px">
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
                        <input type="text" name="opening_time[]" class="form-control input-small timepicker" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td >
                      <div class="input-group" style= "width:150px">
                       <input type="text" name="closing_time[]" class="form-control input-small timepicker" >
                       <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td>
                      <input type="checkbox" class="form-control" name="holiday[4]" value="1" style= "width:20px">
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
                        <input type="text" name="opening_time[]" class="form-control input-small timepicker" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td >
                      <div class="input-group" style= "width:150px">
                       <input type="text" name="closing_time[]" class="form-control input-small timepicker" >
                       <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td>
                      <input type="checkbox" class="form-control" name="holiday[5]" value="1" style= "width:20px">
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
                        <input type="text" name="opening_time[]" class="form-control input-small timepicker" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td >
                      <div class="input-group" style= "width:150px">
                       <input type="text" name="closing_time[]" class="form-control input-small timepicker" >
                       <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                      </div>
                    </td>
                    <td>
                      <input type="checkbox" class="form-control" name="holiday[6]" value="1" style= "width:20px">
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
                        <input name="instagram" id="instagram" class="form-control" type="text" /> 
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
                        <input name="facebook" id="facebook" class="form-control" type="text" />
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
                        <input name="twitter" id="twitter" class="form-control" type="text" />
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </div>                  

            <input type="submit" class="btn btn-success" value="Save" id= "save" onclick="save()">
          </form>
             
                


<?php }
}
