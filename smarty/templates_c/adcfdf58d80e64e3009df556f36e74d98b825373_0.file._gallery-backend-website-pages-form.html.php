<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:30:55
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-pages-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135c2f5c62a6_46420575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adcfdf58d80e64e3009df556f36e74d98b825373' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-pages-form.html',
      1 => 1544772655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-dialog.html' => 1,
  ),
),false)) {
function content_5c135c2f5c62a6_46420575 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <?php $_smarty_tpl->_assignInScope('pagelist', $_smarty_tpl->tpl_vars['scope']->value['pagelist']);?>

      <div class="input-group" >
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#gbe_create_page_dialog"> Create Page</button>
      </div><br>
        
      <div class="row">
        <div class="form-group col-xs-12">
          <table class = "bootstrap-table table table-hover">
            <thead>
              <tr>
                <th>Menu Title</th>
                <th>Page Title</th>
                <th>Page Type</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id= "sortable-row">
          
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagelist']->value, 'pagelists');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pagelists']->value) {
?>              
                <tr id= "<?php echo $_smarty_tpl->tpl_vars['pagelists']->value['id'];?>
">
                  <td><?php echo $_smarty_tpl->tpl_vars['pagelists']->value['menu_title'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['pagelists']->value['page_title'];?>
</td> 
                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['pagelists']->value['type'];
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1 == 10)) {?>
                    <?php $_smarty_tpl->_assignInScope('tab', 'home');?>
                  <?php }?>
                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['pagelists']->value['type'];
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable2 == 20)) {?>
                    <?php $_smarty_tpl->_assignInScope('tab', 'artist');?>
                  <?php }?>
                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['pagelists']->value['type'];
$_prefixVariable3 = ob_get_clean();
if (($_prefixVariable3 == 30)) {?>
                    <?php $_smarty_tpl->_assignInScope('tab', 'exhibition');?>
                  <?php }?>
                  <td><?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['pagelists']->value['created'];?>
</td>
                  <td>                    
                    <a href="/backend/website/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['id'],$_smarty_tpl->tpl_vars['id']->value ));?>
/edit/<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
?_pv=1&amp;page_id=<?php echo $_smarty_tpl->tpl_vars['pagelists']->value['id'];?>
&amp;user_id=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['minisite']->value['user_id'],$_smarty_tpl->tpl_vars['user_id']->value ));?>
" class="btn btn-success ajax-loader" data-target="#subview-container"><button id= 'getpagelist' class='btn btn-xs btn-success' data-value='<?php echo $_smarty_tpl->tpl_vars['minisite']->value['user_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['pagelists']->value['id'];?>
'> <i class='glyphicon glyphicon-pencil'></i></button></a>
                    <?php if (($_smarty_tpl->tpl_vars['tab']->value != 'home')) {?>
                      <button class='btn btn-xs btn-danger delete' id= 'page_delete' data-value='<?php echo $_smarty_tpl->tpl_vars['pagelists']->value['id'];?>
'> <i class='glyphicon glyphicon-trash'></i></button>
                    <?php }?>
                  </td>
                </tr>
                
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </tbody>
          </table>
        </div>
        <input type="submit" class="btn btn-success" id= 'submit_order' value="Save page order" onClick="saveOrder();">
      </div>

<?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-website-createpage-dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready( function() {
    $("#gbe_artist_link").hide();
    $("#gbe_exhibition_link").hide();
    $("#gbe_styling_link").hide();
    $("#gbe_home_link").hide();
  });
  $(function() {
      $( 'tbody' ).sortable();
    });
    
    function saveOrder() {
      var order_id = new Array();
      $('tbody#sortable-row tr').each(function() {
      order_id.push($(this).attr("id"));
      });
      $.ajax({
        url: "/ajax.php?oper=submit-order",
        type: "POST",
        data: {
          oper: "submit-order",
          val: order_id
        },
      });
      //alert(order_id);
    }

  $(document).on("click",'#page_delete',function() {
    $(this).closest("tr").remove();
  });

  $(document).on("click",'#submit_order',function() {
     setTimeout(function() { 
      $("#gbe_page_link").trigger('click');
    }, 1000);
  });
  

<?php echo '</script'; ?>
>



  
      
      
<?php }
}
