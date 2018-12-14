<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:34:52
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-base.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135d1c328a82_26237782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f901f77ae795d58a0213e385e7f1b41c724abfc' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-base.html',
      1 => 1544772892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135d1c328a82_26237782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_assignInScope('list_view', 1);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10472084725c135d1c31d870_11062237', "table");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-base.html");
}
/* {block "fields"} */
class Block_21280902185c135d1c3205c4_69861517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "fields"} */
/* {block "table"} */
class Block_10472084725c135d1c31d870_11062237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table' => 
  array (
    0 => 'Block_10472084725c135d1c31d870_11062237',
  ),
  'fields' => 
  array (
    0 => 'Block_21280902185c135d1c3205c4_69861517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  

  <div id="toolbar" class="">
    <?php if ((0 && !$_smarty_tpl->tpl_vars['scope']->value['add_to'])) {?>
    <a class="btn btn-primary" href="/backend/artworks/add">
      <i class="fa fa-plus"></i> Add
    </a>
    <?php }?>
    <button id="remove" class="btn btn-danger collapse">
      <i class="glyphicon glyphicon-remove"></i> Delete
    </button>
    <div class="dropdown inline-block">
      <button id="selection" class="btn btn-success dropdown-toggle collapse" type="button" data-toggle="dropdown">
        Selected (<span id="sel_count">0</span>) <i class="fa fa-caret-down"></i>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#" id="sel_add" data-target_id="<?php echo $_smarty_tpl->tpl_vars['add_to']->value;?>
">Add to <?php if (($_smarty_tpl->tpl_vars['add_to']->value)) {?>exhibition<?php } else { ?>...<?php }?></a></li>
        <li><a href="#" id="sel_show">Show</a></li>
        <li><a href="#" id="sel_clear">Clear</a></li>
        <!-- <li><a href="#" id="sel_del">Delete</a></li> -->
        <li><a href="#" id="sel_del" data-toggle="modal" data-target="#del_modals">Delete</a></li> 
      </ul>            
    </div>
  </div> 
  
  <table class="table" id="table"
     data-toggle="table" 
     data-url="<?php echo $_smarty_tpl->tpl_vars['scope']->value['list_url'];?>
" 
     data-cache="false" 
     data-pagination="true"
     data-striped="true"
     data-side-pagination="server"             
     data-page-list="[5, 10, 20, 50, 100, 200, ALL]"
     data-page-size="10"

     data-search="true"
     data-toolbar="#toolbar"     
     data-show-refresh="true"
     data-show-toggle="true"
     
     data-show-columns="true"
     data-show-export="true"
     data-detail-view="false"
     data-detail-formatter="detailFormatter"
     data-show-pagination-switch="true"
     data-filter-control="true" 
  >
     
    <thead>     
      <tr>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21280902185c135d1c3205c4_69861517', "fields", $this->tplIndex);
?>
       
      </tr>
    </thead>

  </table>
  
  <?php echo '<script'; ?>
>
  
  function bstIDFormatter(value, row, index) {
    if(!value) return '';
    var print_val = value;
    var base_link = '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var link_class = pv ? 'ajax-loader' : '';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
/'+ value + '?_pv='+ pv +'" class="' + link_class + '" data-target="#subview-container">' + print_val + '</a>';
  }

  function bstUrlFormatter(value, row, index) {
    if(!value) return '';
    var print_val = value;
    var base_link = '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var link_class = 'ajax-loader';
    return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
/'+ row.id + '?_pv=1" class="' + link_class + '" data-target="#subview-container" id="url" name="url" data-value='+row.id+'>' + print_val + '</a>';
    //return '<span type="hidden" class="url" name="url" data-col="url" data-value='+row.id+' >'+value+'</span>';
  }

  function bstDomainFormatter(value, row, index) {
    if(!value) return '';
    var print_val = value;
    var base_link = '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var link_class = 'ajax-loader';
    return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
/'+ row.id + '?_pv=1&domain=1" class="' + link_class + '" data-target="#subview-container">' + print_val + '</a>';
  }

  function bstMediaFormatter(value, row, index) {
    if(!value) return '';
    var thumb = row.path + 'tiny/' + row.src;
    var print_val = "<img class='table-thumb' src='" + thumb + "'/>";
    return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
/'+ value + '?_pv=1" class="ajax-loader" data-target="#subview-container">' + print_val + '</a>';
  }

  function bstVaultIDFormatter(value, row, index) {
    if(!value) return '';
    var print_val = value;
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    return '<a href="' + base_link + '/' + value + '?_pv=1" class="ajax-loader" data-target="#subview-container">' + print_val + '</a>';
  }

  function bstTitleArtistFormatter(value, row, index) {
    var print_val = value ? value : "[Untitled]";
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
    //return '<a href="' + base_link + '/' + row.id + '?_pv=' + pv + '" class="' + link_class + '" data-target="#subview-container">' + print_val + '</a>';
    return '<span><span type="hidden" class="edit" name="edit" data-col="title" data-value='+row.id+' >'+value+'</span></span>';
  }

  function bstTitleFormatter(value, row, index) {
    var print_val = value ? value : "[Untitled]";
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
    //return '<a href="' + base_link + '/' + row.id + '?_pv=' + pv + '" class="' + link_class + '" data-target="#subview-container">' + print_val + '</a>';
    return '<span><span type="hidden" class="edit_exhibition" name="edit_exhibition" data-col="title" data-value='+row.id+' >'+value+'</span></span>';
  
  }

  function bstTitleNetworkFormatter(value, row, index) {
    var print_val = value ? value : "[Untitled]";
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
    return '<a href="' + base_link + '/' + row.id + '?_pv=' + pv + '" class="' + link_class + '" data-target="#subview-container">' + print_val + '</a>';
    //return '<span type="hidden" class="edit_exhibition" name="edit_exhibition" data-col="title" data-value='+row.id+' >'+value+'</span>';
  
  }

  function bstPriceFormatter(value, row, index) {
    var print_val = value ? value : "[Untitled]";
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
   return '<span><span type="hidden" class="edit" name="edit" data-col="price" data-value='+row.id+' >'+value+'</span></span>';
  }

  function bstYearFormatter(value, row, index) {
    var print_val = value ? value : "[Untitled]";
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
   return '<span><span type="hidden" class="edit" name="edit" data-col="primary_year" data-value='+row.id+' >'+value+'</span></span>';
  }

  function bstHeightFormatter(value, row, index) {
    var print_val = value ? value : "[Untitled]";
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
    if(row.type == '50'){
      var value = 'N/A';
      return '<span><span type="hidden" class="edit" name="edit" data-col="height" data-value='+row.id+' style="cursor: default;" >'+value+'</span></span>';
    }else{
      return '<span><span type="hidden" class="edit" name="edit" data-col="height" data-value='+row.id+' >'+value+'</span></span>';
    }
   
  }

  function bstWidthFormatter(value, row, index) {
    var print_val = value ? value : "[Untitled]";
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
    if(row.type == '50'){
      var value = 'N/A';
      return '<span><span type="hidden" class="edit" name="edit" data-col="width" data-value='+row.id+' style="cursor: default;" >'+value+'</span></span>';
    }else{
      return '<span><span type="hidden" class="edit" name="edit" data-col="width" data-value='+row.id+' >'+value+'</span></span>';
    }
    
  }

  function bstTechniqueFormatter(value, row, index) {
    var print_val = value ? value : "[Untitled]";
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
   return '<span type="hidden" class="edit" name="edit" data-col="technique" data-value='+row.id+' >'+value+'</span>';
  }

  function bstDateFormatter(value, row, index) {
  if(!row.created) return '';
  return '<span class="create" name="create" data-col="create" data-value='+row.id+' style="cursor: default;" >'+sql2human_short(row.created)+'</span>';
}

function bstArtistFormatter(value, row, index) {
  if(!value) return '';
  return '<span class="artist" name="artist" data-col="artist" data-value='+row.id+' style="cursor: default;" >'+g_artists[value]+'</span>';
}

 //pradeepa moved from afr_gallery_backend.js (added feature- to edit dynamically in table) 

function bstPriceOptionFormatter(value, row, index) { 
  var print_val = value ? value : "[Untitled]";
  var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
  var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
  var link_class = pv ? 'ajax-loader' : '';
  console.log("base_link = " + base_link + " pv=" + pv);
    
    if(value==0){
      return '<span type="hidden" class="editdd" name="editdd" id="editdd" data-col="price_option" data-value='+row.id+' ><span id="phide" class="phide'+row.id+'" data-col="price_option" data-value='+row.id+' style="cursor: pointer">Hide Price</span><div class="shows" id="shows'+row.id+'"></div></span>';
    }else if(value==1){
      return '<span type="hidden" class="editdd" name="editdd" id="editdd" data-col="price_option" data-value='+row.id+' ><span id="phide" class="phide'+row.id+'" data-col="price_option" data-value='+row.id+' style="cursor: pointer">Show Price</span><div class="shows"  id="shows'+row.id+'"></div></span>';
    }else{
      return '<span type="hidden" class="editdd" name="editdd" id="editdd" data-col="price_option" data-value='+row.id+' ><span id="phide" class="phide'+row.id+'" data-col="price_option" data-value='+row.id+' style="cursor: pointer">Price on enquiry</span><div class="shows"  id="shows'+row.id+'"></div></span>';
    } 
     
}  

  //pradeepa moved from afr_gallery_backend.js (added feature- change cursor pointer)

function bstArtworkTypeFormatter(value, row, index) {
  switch(parseInt(row.type)) {
    case 10: return '<span style="cursor: default">Photography</span>';
    case 11: return '<span style="cursor: default">Print</span>';
    case 20: return '<span style="cursor: default">Painting</span>';
    case 21: return '<span style="cursor: default">Drawing</span>';
    case 22: return '<span style="cursor: default">Mixed Media on paper/canvas</span>';
    case 30: return '<span style="cursor: default">Sculpture</span>';
    case 40: return '<span style="cursor: default">Cast (Bronze, etc)</span>';
    case 50: return '<span style="cursor: default">Film & Video</span>';
    case 60: return '<span style="cursor: default">Installation</span>';
    case 70: return '<span style="cursor: default">Performance</span>';
    case 99: return '<span style="cursor: default">Other</span>';
    default: return '';
  }      
}

function bstArtworkStatusFormatter(value, row, index) { 

    var print_val = value ? value : "[Untitled]";
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);

    if(value==10){
      return '<span type="hidden" class="editdd" name="editdd" id="editdd" data-col="price_option" data-value='+row.id+' style="cursor: pointer"><span id="status" class="status'+row.id+'" data-col="status" data-value='+row.id+'>Available</span><div class="cstatus" id="cstatus'+row.id+'"></div></span>';
    }else if(value==20){
      return '<span type="hidden" class="editdd" name="editdd" id="editdd" data-col="price_option" data-value='+row.id+' ><span id="status" class="status'+row.id+'" data-col="status" data-value='+row.id+' style="cursor: pointer">Reserved</span><div class="cstatus"  id="cstatus'+row.id+'"></div></span>';
    }else if(value==30){
      return '<span type="hidden" class="editdd" name="editdd" id="editdd" data-col="price_option" data-value='+row.id+' ><span id="status" class="status'+row.id+'" data-col="status" data-value='+row.id+' style="cursor: pointer">Sold</span><div class="cstatus"  id="cstatus'+row.id+'"></div></span>';
    }else if(value==40){
      return '<span type="hidden" class="editdd" name="editdd" id="editdd" data-col="price_option" data-value='+row.id+' ><span id="status" class="status'+row.id+'" data-col="status" data-value='+row.id+' style="cursor: pointer">Inactive</span><div class="cstatus"  id="cstatus'+row.id+'"></div></span>';
    }else if(value==50){
      return '<span type="hidden" class="editdd" name="editdd" id="editdd" data-col="price_option" data-value='+row.id+' ><span id="status" class="status'+row.id+'" data-col="status" data-value='+row.id+' style="cursor: pointer">On loan, etc.</span><div class="cstatus"  id="cstatus'+row.id+'"></div></span>';
    }else{
      return '<span type="hidden" class="editdd" name="editdd" id="editdd" data-col="price_option" data-value='+row.id+' ><span id="status" class="status'+row.id+'" data-col="status" data-value='+row.id+' style="cursor: pointer">-</span><div class="cstatus"  id="cstatus'+row.id+'"></div></span>';
    }  
}  //pradeepa

  function bstActionFormatter(value, row, index) {
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
    var view_button = '<a href="' + base_link + '/' + row.id + '?_pv=' + pv + '" class=" ' + link_class + '" data-target="#subview-container"><i class="fa fa-eye"></i></a>';
    var edit_button = '<a href="' + base_link + '/' + row.id + '/edit?_pv=' + pv + '" class="text-success ' + link_class + '" data-target="#subview-container"><i class="fa fa-pencil-square"></i></a>';
    return view_button + ' ' + edit_button;
  }
//For artwork page with clone icon
  function bstCloneActionFormatter(value, row, index) {
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    var buttons = bstActionFormatter(value, row, index);
    var plugin_button = '<a href="/backend/plugins?_pt=media_collection&amp;_pid=' + row.id + '&amp;_pv=' + pv + '" class=" ' + link_class + '" data-target="#subview-container"><i class="fa fa-link"></i></a>'; 

    var pop_btn = '<a id="'+row.id + '" class="clone_modal_icon" data-toggle="modal" data-target="#clone_modals"><i class="fa fa-clone"></i></a>';

    return buttons + ' ' + plugin_button + ' ' + pop_btn; 
  }

//For exhibition page without clone icon
  function bstCollectionActionFormatter(value, row, index) {
    var base_link = row.obj_type == 'media' ? '/backend/medium' : '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    var buttons = bstActionFormatter(value, row, index);
    var plugin_button = '<a href="/backend/plugins?_pt=media_collection&amp;_pid=' + row.id + '&amp;_pv=' + pv + '" class=" ' + link_class + '" data-target="#subview-container"><i class="fa fa-link"></i></a>'; 

    return buttons + ' ' + plugin_button;  
  }
  
  function bstVaultTypeFormatter(value, row, index) {
    if(row.obj_type == 'media') {
      return row.type;
    } else {
      return 'Folder'; 
    }
  }
  
  function bstVaultImageFormatter(value, row, index) {
    //if(!value) return '';
    if(row.obj_type == 'media') {
      value = row.id;
      var thumb = row.path + 'tiny/' + row.src;
      var print_val = "<img class='table-thumb' src='" + thumb + "'/>";
      return '<a href="/backend/media/'+ value + '?_pv=1" class="ajax-loader" data-target="#subview-container">' + print_val + '</a>';
    } else {
      var print_val = '<i class="fa fa-folder"></i>'; 
      return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
/'+ row.id + '?_pv=1" class="ajax-loader" data-target="#subview-container">' + print_val + '</a>';    
    }
  }

  function bstTitleImageFormatter(value, row, index) {
    return bstMediaJsonFormatter(value, row, index, 'title_image');
  }

  function bstMediaJsonFormatter(value, row, index, field) {
    if(!value) return '';
    var json_field = field + '_json';
    var json = row[json_field];
    //console.log("field=" + field + " json=" + json_field + " json=" + json);
    
    if(!json) return bstIDFormatter(value, row, index);
    var obj = jQuery.parseJSON(json);
    
    if(!obj || !obj.length) return bstIDFormatter(value, row, index);
    var first = obj[0];
    //console.log("first = ", first);
    
    var filename = first.filename;
    //console.log("filename = " + filename);
    if(!filename) return bstIDFormatter(value, row, index);

    var base_link = '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    //var filter_link= urlencode($filter_json);
    //console.log("filter_link = " + filter_link);
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
    
    var thumb = filename.replace('/square', '/tiny');
    var print_val = "<img class='table-thumb' src='" + thumb + "'/>";
    return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
/'+ row.id + '/edit/image?_pv=' + pv +'&ref=/ajax.php?oper=get-rows&obj_type=artwork'+
    '" class="' +link_class + '" data-target="#subview-container">' + print_val + '</a>';
    // return '<a id="image_modal'+row.id + '" class="image_modal" data-toggle="modal" data-target="#image_modal">'+print_val+'</a>';
  }

  function bstTitleImageFormatter1(value, row, index) {
    return bstMediaJsonFormatter1(value, row, index, 'title_image');
  }

  function bstMediaJsonFormatter1(value, row, index, field) {
    if(!value) return '';
    var json_field = field + '_json';
    var json = row[json_field];
    //console.log("row option is" + row.title_image_option);
    //console.log("field=" + field + " json=" + json_field + " json=" + json);
    
    if(!json) return bstIDFormatter(value, row, index);
    var obj = jQuery.parseJSON(json);
    
    if(!obj || !obj.length) return bstIDFormatter(value, row, index);
    var first = obj[0];
    //console.log("first = ", first);
    
    var filename = first.filename;
    //console.log("filename = " + filename);
    if(!filename) return bstIDFormatter(value, row, index);

    var base_link = '<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
';
    //var filter_link= urlencode($filter_json);
    //console.log("filter_link = " + filter_link);
    var pv = base_link.indexOf('/plugin') > -1 ? 0 : 1; // no partial view for view plugin
    var link_class = pv ? 'ajax-loader' : '';
    console.log("base_link = " + base_link + " pv=" + pv);
    
    var thumb = filename.replace('/square', '/tiny');
    var print_val = "<img class='table-thumb' src='" + thumb + "'/>";

    return '<a href="<?php echo $_smarty_tpl->tpl_vars['base_link']->value;?>
/'+ row.id + '/edit/title?_pv=' + pv +
    '" class="' +link_class + '" data-target="#subview-container">'+print_val+'</a>';
  }

  function bstUserPhotoFormatter(value, row, index) {
    return bstMediaJsonFormatter(value, row, index, 'photo');
  }
  
    
  

  function bstMediaContextFormatter(value, row, index) {
    if(!value) return '';
    var parent_type = row.parent_type;
    var parent_id = row.parent_id;
    if(!parent_id) return value;
    switch(parent_type) {
      case 'artwork':
        return '<a href="/backend/artwork/'+ row.parent_id + '?_pv=1" class="ajax-loader" data-target="#subview-container">' + 'Artwork' + '</a>';
      break;
      case 'media_collection':
        return '<a href="/backend/exhibition/'+ row.parent_id + '?_pv=1" class="ajax-loader" data-target="#subview-container">' + 'Exhibition' + '</a>';
      break;
      case 'user_profile':
        return '<a href="/backend/profile/'+ row.parent_id + '?_pv=1&amp;profile_id=1" class="ajax-loader" data-target="#subview-container">' + 'Profile' + '</a>';
      break;
      case 'gallery':
        return '<a href="/backend/vault/'+ row.parent_id + '?_pv=1&amp" class="ajax-loader" data-target="#subview-container">' + 'Vault' + '</a>';
      break;
      default:
        return value;
        break;
    }
  }
  
  var obj_type = '<?php echo $_smarty_tpl->tpl_vars['scope']->value['obj_type'];?>
';
  var add_what = obj_type == 'artwork' ? 'add_art' : 'add_media';
  console.log("Add = " + add_what + " sub=" + obj_type);
  
  if(<?php echo $_smarty_tpl->tpl_vars['add_to']->value;?>
) {
    console.log("Add-to, reseting selection");
    g_selections = []; // reset if we're adding
  }

  var selections = [];


// Search bar id value

$(window).load(function() {
  $('.form-control').attr('id', 'searchbar');
});

$(document).ready(function() {
  $('.form-control').attr('id', 'searchbar');
});

var $table = $('#table');
$table.bootstrapTable().on('load-success.bs.table', function(e, data) {
  $('.form-control').attr('id', 'searchbar');
});

$('load-success.bs.table').load(function() {
  $('.form-control').attr('id', 'searchbar');
});

 
  
    
<?php echo '</script'; ?>
>

<div class="modal modal-admin fade" id="del_modals" data-backdrop="static" data-keyboard="false" 
     tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <b class="overlay-title" style="font-size: 25px;">Are you sure you want to permanently delete this?</b>
      </div>
       
      <form name="delete-form" class="cal-form ajax-submit" data-reload_link="#gbe_artworks_link">
        <div class="modal-body" style="font-size: 20px;">
        <p>This action cannot be undone</p>
        </div>
       <div class="modal-footer">
          <button type="button" id="sel_del_success" class="btn btn-danger" data-dismiss="modal">Delete</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal modal-admin fade" id="clone_modals" data-backdrop="static" data-keyboard="false" 
     tabindex="-1" role="dialog" aria-labelledby="myCloneLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <b class="overlay-title" style="font-size: 25px;">Make a Duplicate of this Art Record with a new name?</b>
      </div>
       
      <form name="clone-form" class="ajax-submit" id="clone_dialog_form"  data-handler="clone-artwork" data-reload_link="#gbe_artworks_link">
        <div class="modal-body">
          <p>This action cannot be undone</p>
          
          <div class="form-group">
            <label for="clone-title">Title of New Art Record</label>
            <input type="text" class="form-control" name="title" value="" id="clone-title">
          </div>
          
          <input type="hidden" class="form-control" name="obj_id" value="">
          <input type="hidden" class="form-control" name="obj_type" value="artwork">
          <input type="submit" class="btn btn-success" value="Duplicate">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>        
      </form>
      <div class="modal-footer">
      </div>
      
    </div>
  </div>
</div>

<?php
}
}
/* {/block "table"} */
}
