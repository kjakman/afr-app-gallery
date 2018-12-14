<?php
/* Smarty version 3.1.32, created on 2018-10-05 12:33:03
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-pages.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb759ffe117d2_06790746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806288d04fb098f1b782b1aff337fcbff5f2a49c' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-pages.html',
      1 => 1538742783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb759ffe117d2_06790746 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <?php $_smarty_tpl->_assignInScope('artists', $_smarty_tpl->tpl_vars['scope']->value['viewartist']);?>
      <?php $_smarty_tpl->_assignInScope('artwork', $_smarty_tpl->tpl_vars['scope']->value['artwork']);?>
      <?php $_smarty_tpl->_assignInScope('artist_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['artist_id'],$_smarty_tpl->tpl_vars['scope']->value['artist_id'] )));?>
      <form class="ajax-submit" data-handler="save-minisite-page" data-success_handler="gbe_website_handler"> 

        <input hidden="1" name="user_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['user_id'],$_smarty_tpl->tpl_vars['user_id']->value ));?>
">
        <input hidden="1" name="site_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['site_id'],$_smarty_tpl->tpl_vars['site']->value['id'] ));?>
"> <!-- pradeepa -->
        <input hidden="1" name="row_id" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['id'],$_smarty_tpl->tpl_vars['id']->value ));?>
">  <!-- pradeepa -->
        <input hidden="1" name="next_tab" type="hidden" value="exhibition">
        
        <?php $_smarty_tpl->_assignInScope('artist_ids_json', $_smarty_tpl->tpl_vars['artwork']->value['artist_ids']);?>
        <?php $_smarty_tpl->_assignInScope('artist_ids', json_decode($_smarty_tpl->tpl_vars['artist_ids_json']->value));?>
        <?php if ((!$_smarty_tpl->tpl_vars['artist_ids']->value)) {?>  
         <?php $_smarty_tpl->_assignInScope('artist_ids', array($_smarty_tpl->tpl_vars['artist_id']->value));?>
        <?php }?>

        <div class="row">
          <div class="form-group col-xs-6">
            <ul id="artistTags" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artist_ids']->value, 'artist_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist_id']->value) {
?>
              <li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'display_name' ][ 0 ], array( $_smarty_tpl->tpl_vars['artist_id']->value ));?>
|<?php echo $_smarty_tpl->tpl_vars['artist_id']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
            </ul>
          </div>
          <input type="submit" class="btn btn-success ajax-submit" value="Add Artist to page" id= 'show_web'>
        </div>            
      </form>

  
      <div class="row">
        <div class="form-group col-xs-10">
          <?php $_smarty_tpl->_assignInScope('rows', array());?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['rows']) ? $_smarty_tpl->tpl_vars['rows']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("Name","Created","Age","City","Country","Action");
$_smarty_tpl->_assignInScope('rows', $_tmp_array);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artists']->value, 'artist', false, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['artist']->value) {
?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['rows']) ? $_smarty_tpl->tpl_vars['rows']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array($_smarty_tpl->tpl_vars['artist']->value['display_name'],$_smarty_tpl->tpl_vars['artist']->value['created'],$_smarty_tpl->tpl_vars['artist']->value['age'],$_smarty_tpl->tpl_vars['artist']->value['city'],$_smarty_tpl->tpl_vars['artist']->value['country'],"<button id='soft_delete' class='btn btn-xs btn-danger delete' data-value='".((string)$_smarty_tpl->tpl_vars['artist']->value['id'])."'> <i class='glyphicon glyphicon-trash'></i></button>");
$_smarty_tpl->_assignInScope('rows', $_tmp_array);?>                   
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                            
  
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'table' ][ 0 ], array( $_smarty_tpl->tpl_vars['rows']->value,array("class"=>"bootstrap-table table table-hover") ));?>
                                        
          
        </div>
      </div> 
  
      <?php echo '<script'; ?>
>
      $(function() {
        console.log( "ready!" );
        awb_set_type($("#type").val());
        if($("#artistTags").length) gbe_artists_tagit();          
      });
      $(document).on("change",'#type',function() {
        var val = $(this).val();
        awb_set_type(val);
      });
      function awb_set_type(val) {
        $(".type-10, type-11, .type-20, .type-21, type-22, .type-30, .type-40, .type-50, .type-60").hide();
        console.log("showing type " + val);
        if(val) {
          $(".type-" + val).show();  
        }
      }
      $(document).on("click",'#soft_delete',function() {
        $(this).closest("tr").remove();
      });
      <?php echo '</script'; ?>
>
      
<?php }
}
