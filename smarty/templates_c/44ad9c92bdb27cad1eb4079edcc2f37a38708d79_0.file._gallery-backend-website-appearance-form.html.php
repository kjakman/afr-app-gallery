<?php
/* Smarty version 3.1.32, created on 2018-10-15 07:32:25
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-appearance-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bc442893ec0e4_94837342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44ad9c92bdb27cad1eb4079edcc2f37a38708d79' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-appearance-form.html',
      1 => 1539588745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc442893ec0e4_94837342 (Smarty_Internal_Template $_smarty_tpl) {
?>      <form class="ajax-submit" data-handler="save-minisite">
        <input hidden="1" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_id'];?>
">
        <input hidden="1" name="obj_type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_type'];?>
"> 
        <input hidden="1" name="next_tab" type="hidden" value="basic">        
                
        <div class="form-group">
          <label for="Fonts">Fonts</label>
          <div class="row">
            <?php $_smarty_tpl->_assignInScope('titleFont', array('Select Title Font','Helvetica','Arial','sans-serif','Verdana','Comic Sans'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="titleFont" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['titleFont'],'Select Title Font' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['titleFont']->value, 'type');
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
            <?php $_smarty_tpl->_assignInScope('titleFontSize', array('Select Title Font Size','10px','11px','12px','13px','14px','15px','16px','17px','18px','19px','20px'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="titleFontSize" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['titleFontSize'],'Select Title Font Size' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['titleFontSize']->value, 'type');
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
            <?php $_smarty_tpl->_assignInScope('bodyFont', array('Select Body Font','Helvetica','Arial','sans-serif','Verdana','Comic Sans'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="bodyFont" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['bodyFont'],'Select Body Font' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bodyFont']->value, 'type');
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
            <?php $_smarty_tpl->_assignInScope('bodyFontSize', array('Select Body Font Size','10px','11px','12px','13px','14px','15px','16px','17px','18px','19px','20px'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="bodyFontSize" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['bodyFontSize'],'Select Body Font Size' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bodyFontSize']->value, 'type');
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
        </div>

        <div class="form-group">
          <label for="Colours">Colours</label>
          <div class="row">
            <?php $_smarty_tpl->_assignInScope('fontColor', array('Select Font Colour','Blue','Red','Black','White','Grey'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="fontColor" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['fontColor'],'Select Font Colour' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fontColor']->value, 'type');
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
            <?php $_smarty_tpl->_assignInScope('backgroundColor', array('Select Background Colour','Blue','Red','Black','White','Grey'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="backgroundColor" data-value= "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['backgroundColor'],'Select Background Colour' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['backgroundColor']->value, 'type');
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
            <?php $_smarty_tpl->_assignInScope('linkColor', array('Select Link Colour','Blue','Red','Black','White','Grey'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="linkColor" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['linkColor'],'Select Link Colour' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkColor']->value, 'type');
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
            <?php $_smarty_tpl->_assignInScope('hoverColor', array('Select Hover Colour','Blue','Red','Black','White','Grey'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="hoverColor" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['hoverColor'],'Select Hover Colour' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoverColor']->value, 'type');
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
        </div>
        <div class="form-group">
          <label for="Art Viewing Style">Art Viewing Style</label>
          <div class="row">
            <?php $_smarty_tpl->_assignInScope('artStyle', array('Art Mouseover Effects','flip','Zoom'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="artStyle" data-value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['artStyle'],'Art Mouseover Effects' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artStyle']->value, 'type');
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
            <?php $_smarty_tpl->_assignInScope('layout', array('Select Layout','One column','Two column','Three column','Four column'));?>
            <div class="form-group col-sm-2">
              <select class="form-control auto-select" id="layout" data-value= "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['layout'],'Select Layout' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value, 'type');
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
            <div class="form-group col-sm-3">
              <label for="Art Mouseover Main Text">Art Mouseover Main Text</label>
              <table>
                <tr>
                  <td><input type="checkbox" class="form-control" name="title" value="title" style= "width:15px"></td>
                  <td>Title</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="technique" value="technique" style= "width:15px"></td>
                  <td>Technique</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="editions" value="editions" style= "width:15px"></td>
                  <td>Number of editions</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="year" value="year" style= "width:15px"></td>
                  <td>Year</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="artistName" value="artistName" style= "width:15px"></td>
                  <td>Artist Name</td>
                </tr>
              </table>
            </div>
            <div class="form-group col-sm-2">
              <label for="Art Mouseover Secondary Text">Art Mouseover Secondary Text</label>
              <table>
                <tr>
                  <td><input type="checkbox" class="form-control" name="title" value="title" style= "width:15px"></td>
                  <td>Title</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="technique" value="technique" style= "width:15px"></td>
                  <td>Technique</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="editions" value="editions" style= "width:15px"></td>
                  <td>Number of editions</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="year" value="year" style= "width:15px"></td>
                  <td>Year</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="artistName" value="artistName" style= "width:15px"></td>
                  <td>Artist Name</td>
                </tr>
              </table>
            </div>
            <div class="form-group col-sm-2">
              <label for="Text Under Artwork">Art- Text Under Artwork</label>
              <table>
                <tr>
                  <td><input type="checkbox" class="form-control" name="title" value="title" style= "width:15px"></td>
                  <td>Title</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="technique" value="technique" style= "width:15px"></td>
                  <td>Technique</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="editions" value="editions" style= "width:15px"></td>
                  <td>Number of editions</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="year" value="year" style= "width:15px"></td>
                  <td>Year</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="artistName" value="artistName" style= "width:15px"></td>
                  <td>Artist Name</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="Exhibition View Styling">Exhibition View Styling</label>
          <div class="row">
            <?php $_smarty_tpl->_assignInScope('exhibitionStyle', array('Exhibition Shape','Original Shape','Square','Oval','Round'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="exhibitionStyle" data-value= "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['exhibitionStyle'],'Exhibition Shape' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exhibitionStyle']->value, 'type');
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
            <?php $_smarty_tpl->_assignInScope('layout', array('Select Layout','Timeline','One column','Two column','Three column','Four column'));?>
            <div class="form-group col-sm-2">
              <select class="form-control auto-select" id="layout" data-value= "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['layout'],'Select Layout' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value, 'type');
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
             <div class="form-group col-sm-3">
              <label for="Text Under Exhibition">Exhibition- Text Under Exhibition</label>
              <table>
                <tr>
                  <td><input type="checkbox" class="form-control" name="title" value="title" style= "width:15px"></td>
                  <td>Title</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="city" value="city" style= "width:15px"></td>
                  <td>City, Country</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="date" value="date" style= "width:15px"></td>
                  <td>Start - End Date</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="curator" value="curator" style= "width:15px"></td>
                  <td>Curator</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="artist" value="artist" style= "width:15px"></td>
                  <td>Name Artists</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="location" value="location" style= "width:15px"></td>
                  <td>Location</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="Artist View Styling">Artist View Styling</label>
          <div class="row">
            <?php $_smarty_tpl->_assignInScope('artistStyle', array('Artist Photo Shape','Original Shape','Square','Oval'));?>
            <div class="form-group col-sm-3">
              <select class="form-control auto-select" id="artistStyle" data-value= "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['artistStyle'],'Artist Photo Shape' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistStyle']->value, 'type');
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
            <?php $_smarty_tpl->_assignInScope('artistlayout', array('Select Layout','One column','Two column','Three column','Four column'));?>
            <div class="form-group col-sm-2">
              <select class="form-control auto-select" id="artistlayout" data-value= "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['artistlayout'],'Select Layout' ));?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artistlayout']->value, 'type');
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
             <div class="form-group col-sm-3">
              <label for="Text Under Exhibition">Exhibition- Text Under Exhibition</label>
              <table>
                <tr>
                  <td><input type="checkbox" class="form-control" name="Name" value="Name" style= "width:15px"></td>
                  <td>Name</td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="form-control" name="location" value="location" style= "width:15px"></td>
                  <td>City, Country</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </form>
<?php }
}
