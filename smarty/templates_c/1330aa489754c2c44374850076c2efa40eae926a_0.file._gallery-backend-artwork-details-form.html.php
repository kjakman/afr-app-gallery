<?php
/* Smarty version 3.1.32, created on 2018-12-11 04:54:54
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-details-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0f431e1e7731_45508684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1330aa489754c2c44374850076c2efa40eae926a' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-details-form.html',
      1 => 1544504094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0f431e1e7731_45508684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
      <?php $_smarty_tpl->_assignInScope('artwork', $_smarty_tpl->tpl_vars['scope']->value['artwork']);?>

      <form class="ajax-submit" data-handler="save-artwork" data-success_handler="gbe_artwork_handler" id="artwork">
        <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['id'];?>
">
        <input hidden="1" name="obj_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="artwork">      
        <input hidden="1" name="next_tab" type="hidden" value="media">      

        <div class="row">
          <div class="form-group col-sm-6">
            <label for="artwork-artwork_type">Category</label>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_select' ][ 0 ], array( "type","artwork_type",array("class"=>"form-control","value"=>$_smarty_tpl->tpl_vars['artwork']->value['type']) ));?>

          </div>
        </div>
                    
        <div class="row">        
          <div class="form-group col-sm-3 col-xs-6">
            <label for="artwork-primary_year">Primary Year</label>
            <input type="text" class="form-control" name="primary_year" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['primary_year'];?>
" maxlength="4">
          </div>
  
          <?php $_smarty_tpl->_assignInScope('year_types', array('','Created','Circa','Painted','Printed','Photographed','Negative','Filmed','Sculpted','Published','1st Edition','Started'));?>
          <div class="form-group col-sm-3 col-xs-6">
            <label for="artwork-primary_year_type">Description of Year</label>
            <select class="form-control auto-select" id="artwork-primary_year_type" name="primary_year_type" data-default="Created" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['primary_year_type'],'Created' ));?>
">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                            
            </select>
          </div>
          
          <?php $_smarty_tpl->_assignInScope('year_types', array('','Printed','Cast','Restored','Current Edition','Finished'));?>
          <div class="form-group col-sm-3 col-xs-6">
            <label for="artwork-secondary_year">Secondary Year</label>
            <input type="text" class="form-control" name="secondary_year" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['secondary_year'];?>
" maxlength="4">
          </div>
  
          <div class="form-group col-sm-3 col-xs-6">
            <label for="artwork-secondary_year_type">Description of Year</label>
            <select class="form-control auto-select" id="artwork-secondary_year_type" name="secondary_year_type"  data-default="" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['secondary_year_type'],'' ));?>
">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                            
            </select>
          </div>
        </div>
        
             
        <div class="row type-10 type-11 type-20 type-21 type-22 type-30 type-40">        
          <div class="form-group col-sm-2 col-xs-6">
            <label for="artwork-height">Height</label>
            <input type="text" class="form-control" name="height" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['height'];?>
" maxlength="4">
          </div>
          <div class="form-group col-sm-2 col-xs-6">
            <label for="artwork-width">Width</label>
            <input type="text" class="form-control" name="width" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['width'];?>
" maxlength="4">
          </div>
          <div class="form-group col-sm-2 col-xs-6 type-30 type-40">
            <label for="artwork-depth">Depth</label>
            <input type="text" class="form-control" name="depth" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['depth'];?>
" maxlength="4">
          </div>
          <div class="form-group col-sm-2 col-xs-6">
            <label for="artwork-unit">Unit</label>
            <select class="form-control auto-select" id="artwork-unit" name="unit" data-default="cm" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['unit'],'cm' ));?>
">
              <?php $_smarty_tpl->_assignInScope('units', array('','cm','meter','inches','feet'));?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['units']->value, 'unit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['unit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['unit']->value;?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                            
            </select>
          </div>
        </div>
        
        <?php $_smarty_tpl->_assignInScope('yes_no', array(0=>'',-1=>"No",1=>"Yes"));?>
        <div class="row type-10 type-11 type-20 type-21 type-22">
          <div class="form-group col-sm-4 col-xs-6">
            <label for="media-frame">Frame</label>
            <?php $_smarty_tpl->_assignInScope('yes_no', array(0=>'',-1=>"Unframed",1=>"Framed"));?>
            <?php echo smarty_function_html_options(array('name'=>"frame",'class'=>"form-control",'options'=>$_smarty_tpl->tpl_vars['yes_no']->value,'selected'=>$_smarty_tpl->tpl_vars['artwork']->value['frame']),$_smarty_tpl);?>
                                            
          </div>
          <div class="form-group col-sm-4 col-xs-6">
            <label for="media-passepartout">Passe-Partout</label>
            <?php $_smarty_tpl->_assignInScope('yes_no', array(0=>'',-1=>"No Passe-partout",1=>"Passe-partout"));?>
            <?php echo smarty_function_html_options(array('name'=>"passepartout",'class'=>"form-control",'options'=>$_smarty_tpl->tpl_vars['yes_no']->value,'selected'=>$_smarty_tpl->tpl_vars['artwork']->value['passepartout']),$_smarty_tpl);?>
                                            
          </div>          
        </div>          
        
        
                <div class="row type-50">
          <div class="form-group col-sm-4 col-xs-6">
            <label for="artwork-video_time">Time</label>
            <input type="text" class="form-control" name="video_time" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['video_time'];?>
" maxlength="128">
          </div>  
          <div class="form-group col-sm-4 col-xs-6">
            <label for="artwork-video_producer">Producer</label>
            <input type="text" class="form-control" name="video_producer" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['video_producer'];?>
" maxlength="128">
          </div>  
          <div class="form-group col-sm-4 col-xs-6">
            <label for="artwork-video_narrator">Narrator</label>
            <input type="text" class="form-control" name="video_narrator" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['video_narrator'];?>
" maxlength="128">
          </div>  
          <div class="form-group col-sm-4 col-xs-6">
            <label for="artwork-video_sound">Sound</label>
            <input type="text" class="form-control" name="video_sound" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['video_sound'];?>
" maxlength="128">
          </div>  
          <div class="form-group col-sm-4 col-xs-6">
            <label for="artwork-video_editor">Editor</label>
            <input type="text" class="form-control" name="video_editor" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['video_editor'];?>
" maxlength="128">
          </div>  
          <div class="form-group col-sm-4 col-xs-6">
            <label for="artwork-video_cast">Cast</label>
            <input type="text" class="form-control" name="video_cast" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['video_cast'];?>
" maxlength="128">
          </div>  
        </div>
        
        <div class="row type-10 type-11 type-30 type-40 type-50">
          <div class="form-group col-sm-4 col-xs-6">
            <label for="artwork-editions">Editions</label>
             <a data-toggle="tooltip" title="Set the number in series to 1 if there in only one original, and to 0 if there is no limit on prints/ copies"> <i class="fa fa-info-circle"></i></a>
            <input type="text" class="form-control" name="editions" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['artwork']->value['editions'],'1' ));?>
" maxlength="4">
          </div>
  
          <div class="form-group col-sm-4 col-xs-6">
            <label for="artwork-count">Edition No.</label>
            <input type="text" class="form-control" name="edition" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['edition'];?>
" maxlength="4">
          </div>
        </div>
        
        <div class="form-group col-sm-4 col-xs-6">
          <label for="artwork-price">Currency</label>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_select' ][ 0 ], array( "currency","currency",array("class"=>"form-control","value"=>$_smarty_tpl->tpl_vars['artwork']->value['currency'],"search"=>array("accepted"=>1)) ));?>
                
        </div>
        <div class="form-group col-sm-4 col-xs-6">
          <label for="artwork-price">Price</label>
                    <input type="text" class="form-control" name="price" value="<?php echo $_smarty_tpl->tpl_vars['artwork']->value['price'];?>
" maxlength="10">
        </div>
        
        <div class="form-group col-sm-4">
          <label for="artwork-price_option">Price Options</label>
          <a data-toggle="tooltip" title="'No' will show red dot, 'Yes' shows green dot, 'Hide' hides the dot and the price."> <i class="fa fa-info-circle"></i></a>
          <?php $_smarty_tpl->_assignInScope('options', array(1=>"Display Price",0=>"Hide Price",-1=>"Price on inquiry"));?>
          <?php echo smarty_function_html_options(array('name'=>"price_option",'class'=>"form-control",'options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['artwork']->value['price_option']),$_smarty_tpl);?>
                                            
          <!--input name="available" value="1" class="form-control" type="checkbox" checked="<?php if (($_smarty_tpl->tpl_vars['artwork']->value['available'])) {?>checked<?php }?>"-->
        </div>
        
        <div class="row">
          <div class="form-group col-sm-12">
            <label for="description">Description of artwork</label>
            <textarea class="summernote form-control special" data-height="50" name="description"><?php echo $_smarty_tpl->tpl_vars['artwork']->value['description'];?>
</textarea>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-12">
            <label for="comment">Comments</label>
            <textarea class="summernote form-control special" data-height="50" name="comment"><?php echo $_smarty_tpl->tpl_vars['artwork']->value['comment'];?>
</textarea>
          </div>
        </div>
        <input type="submit" class="btn btn-success" value="Save" id="submit">
            
      </form>
      <div class="gap gap-small"></div>

      <?php echo '<script'; ?>
>
      var type = '<?php echo $_smarty_tpl->tpl_vars['artwork']->value['type'];?>
';
      console.log("artwork type = " + type);
      
      $(function() {
        console.log( "ready!" );
        awb_set_type(type);
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
      <?php echo '</script'; ?>
>
      
      
<?php }
}
