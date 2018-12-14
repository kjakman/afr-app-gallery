<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:20
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-image-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1357204fe743_86320818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b6373784996a7bbaa371c222902c6b022508fbe' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artwork-image-form.html',
      1 => 1544771360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1357204fe743_86320818 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php $_smarty_tpl->_assignInScope('artwork', $_smarty_tpl->tpl_vars['scope']->value['artwork']);?>
        
    	<?php $_smarty_tpl->_assignInScope('buttons', 1);?>

  <a href="<?php echo $_smarty_tpl->tpl_vars['list_link']->value;?>
?_pv=1&<?php echo $_SESSION['searchvalue'];?>
" class="btn btn-danger ajax-loader" id="back" data-target="#subview-container">Back
  	
  </a>

        <div class="row form-group">
          <label for="media-name">Title Image</label>
          <a data-toggle="tooltip" data-placement="right" title="Select the main image to represent the artwork"> <i class="fa fa-info-circle"></i></a>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'object_uploader' ][ 0 ], array( "artwork",$_smarty_tpl->tpl_vars['artwork']->value['id'],"title_image",array("resize"=>1,"cloud"=>1,"view"=>"list") ));?>

        </div>
<?php echo '<script'; ?>
 type="text/javascript">

	$(document).on("click", "#back", function() { 
		var val = $(this).attr("href"); 
		var search = val.split("&");
		var searchvalue = search[1];

		setTimeout(function() {
		        $('input[type="text"][placeholder="Search"]')
		            .val(searchvalue)
		            .trigger('keyup');
		            
		    },500);
 		
	});

<?php echo '</script'; ?>
>


<?php }
}
