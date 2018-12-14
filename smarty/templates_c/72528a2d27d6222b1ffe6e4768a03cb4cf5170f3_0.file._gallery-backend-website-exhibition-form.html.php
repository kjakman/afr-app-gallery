<?php
/* Smarty version 3.1.32, created on 2018-12-14 05:35:53
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c134139c8abf2_94721256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72528a2d27d6222b1ffe6e4768a03cb4cf5170f3' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-exhibition-form.html',
      1 => 1544765753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c134139c8abf2_94721256 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_assignInScope('minisitepage', $_smarty_tpl->tpl_vars['scope']->value['minisitepage']);?>
  <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['scope']->value['page_id']);?>
  <?php $_smarty_tpl->_assignInScope('data', json_decode($_smarty_tpl->tpl_vars['minisitepage']->value['data'],TRUE));?>

      <form class="ajax-submit" data-handler="save-minisite-page">
        <input hidden="1" name="minisite_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['id'],$_smarty_tpl->tpl_vars['id']->value ));?>
">
        <input hidden="1" name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['obj_id']->value;?>
">
        <input hidden="1" name="user_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['minisite']->value['user_id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="minisite_page">  
                
        <div>
          <div class="form-group">
            <div class="row">
            <div class="form-group col-sm-8">
              <label for="menu-title">Menu Title</label>
              <input type="text" class="form-control" maxlength="255" name="menu_title" value="<?php echo $_smarty_tpl->tpl_vars['minisitepage']->value['menu_title'];?>
">
            </div>
            <div class="form-group col-sm-8">
              <label for="page-title">Page Title</label>
              <input type="text" class="form-control" maxlength="255" name="page_title" value="<?php echo $_smarty_tpl->tpl_vars['minisitepage']->value['page_title'];?>
">
            </div>
          </div>  
        </div>
      </div>
      <div class="form-group col-sm-12">
        <label for="Dates">Order of Exhibitions by Start Date</label>
        <div class="row">
          <table>
            <tr>
              <td>
                <input type="radio" <?php if (($_smarty_tpl->tpl_vars['data']->value['show_recent'] == '1')) {?>checked<?php }?> class="form-control" name="data[show_recent]" value="1" style= "width:20px">
              </td>
              <td style= "width:200px">Show Most Recent First</td>
              <td>
                <input type="radio" <?php if (($_smarty_tpl->tpl_vars['data']->value['show_recent'] == '0')) {?>checked<?php }?> class="form-control" name="data[show_recent]" value="0" style= "width:20px">
              </td>
              <td style= "width:200px">Show Most Recent Last</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="form-group col-sm-12">
        <label for="Dates">Filter Exhibitions by Dates</label>
        <div class="row">
          <table>
              <tr>
                <td>
                  <input name='data[show_past]' value='0' type='hidden'>  
                  <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['data']->value['show_past'] == '1')) {?>checked<?php }?> class="form-control" name="data[show_past]" value="1" style= "width:20px">
                </td>
                <td style= "width:200px">Previous Exhibitions</td>
                <td>
                  <input name='data[show_current]' value='0' type='hidden'>  
                  <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['data']->value['show_current'] == '1')) {?>checked<?php }?> class="form-control" name="data[show_current]" value="1" style= "width:20px">
                </td>
                <td style= "width:200px">Current Exhibitions</td>
                <td>
                  <input name='data[show_future]' value='0' type='hidden'>  
                  <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['data']->value['show_future'] == '1')) {?>checked<?php }?> class="form-control" name="data[show_future]" value="1" style= "width:20px">
                </td>
                <td style= "width:200px">Future Exhibitions</td>
                <td>
                  <input name='data[show_latest]' value='0' type='hidden'>  
                  <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['data']->value['show_latest'] == '1')) {?>checked<?php }?> class="form-control" name="data[show_latest]" value="1" style= "width:20px">
                </td>
                <td style= "width:500px">Display Latest Exhibition in cases where page would otherwise be empty</td>
              </tr>
          </table>
        </div>
      </div>

        <div class="form-group col-sm-12">
          <label for="type">Filter Exhibitions by type</label>
          <div class="row">
            <table>
                <tr>
                  <td>
                    <input name='data[show_gallery]' value='0' type='hidden'>  
                    <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['data']->value['show_gallery'] == '1')) {?>checked<?php }?> class="form-control" name="data[show_gallery]" value="1" style= "width:20px">
                  </td>
                  <td style= "width:200px">Gallery Exhibitions</td>
                  <td>
                    <input name='data[show_artfair]' value='0' type='hidden'> 
                    <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['data']->value['show_artfair'] == '1')) {?>checked<?php }?> class="form-control" name="data[show_artfair]" value="1" style= "width:20px" >
                  </td>
                  <td style= "width:200px">Art Fairs</td>
                  <td>
                    <input name='data[show_others]' value='0' type='hidden'> 
                    <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['data']->value['show_others'] == '1')) {?>checked<?php }?> class="form-control" name="data[show_others]" value="1" style= "width:20px" >
                  </td>
                  <td style= "width:200px">Other Events</td>
                </tr>
            </table>

          </div>
        </div>

        <!-- <div class="form-group col-sm-12">
          <label for="Fonts">Add Filters for Page(Optional)</label>
          <div class="row">
            <table>
                <tr>
                  <td style= "width:200px">Previous/ Current/ Future</td>
                  <td style= "width:200px">
                    <input name='date_filter' value='0' type='hidden'> 
                    <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['minisite']->value['date_filter'])) {?>checked<?php }?> class="bootstrap-toggle" value="1" name="date_filter" id="gbe_collection_active">
                  </td>
                  <td style= "width:200px">Gallery/ Fair/ Other</td>
                  <td style= "width:200px">
                    <input name='type_filter' value='0' type='hidden'> 
                    <input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['minisite']->value['type_filter'])) {?>checked<?php }?> class="bootstrap-toggle" value="1" name="type_filter" id="gbe_collection_active">
                  </td>                 
                </tr>
            </table>    
          </div>
        </div> -->

        <input type="submit" class="btn btn-success" value="Save">
      </form>  
      <?php echo '<script'; ?>
 type="text/javascript">
          $("#gbe_home_link").hide();
          $("#gbe_artist_link").hide();
          //$("#gbe_styling_link").hide();
          //$("#gbe_basic_link").hide();
      <?php echo '</script'; ?>
>

<?php }
}
