<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:09:26
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-location.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1357268c4024_20934171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c51014fa740a2bf8fcd837350a2786eea99421f' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-collection-location.html',
      1 => 1544771366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1357268c4024_20934171 (Smarty_Internal_Template $_smarty_tpl) {
?>      <?php $_smarty_tpl->_assignInScope('loc', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['location_id'],"location" )));?>
      <?php $_smarty_tpl->_assignInScope('lat', $_smarty_tpl->tpl_vars['loc']->value['location_lat']);?>
      <?php $_smarty_tpl->_assignInScope('lng', $_smarty_tpl->tpl_vars['loc']->value['location_long']);?>
      <h3><?php if (($_smarty_tpl->tpl_vars['loc']->value['address_city'])) {
echo $_smarty_tpl->tpl_vars['loc']->value['address_city'];?>
, <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['loc']->value['address_country'],'countries','name' ));?>
</h3>
      <h4 class="italic"><?php echo $_smarty_tpl->tpl_vars['loc']->value['address_street'];?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'hide_false' ][ 0 ], array( $_smarty_tpl->tpl_vars['loc']->value['address_number'] ));?>
 &nbsp;
        <?php if (($_smarty_tpl->tpl_vars['lat']->value && $_smarty_tpl->tpl_vars['lng']->value)) {?>
          <a href="#" data-toggle="modal" data-target="#mapModal">
            <i class="fa fa-map-marker"></i> Map
          </a>
      
      <div class="modal fade" tabindex="-1" role="dialog" id="mapModal">
        <div class="modal-dialog-off">
          <div class="modal-content-off">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-5">
                  <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['collection']->value['title'];?>
</h4>
                  
                  <?php echo $_smarty_tpl->tpl_vars['loc']->value['address_street'];?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'hide_false' ][ 0 ], array( $_smarty_tpl->tpl_vars['loc']->value['address_number'] ));?>
<br> 
                  <?php echo $_smarty_tpl->tpl_vars['loc']->value['address_city'];?>
<br>
                  <br>
                  <?php if (($_smarty_tpl->tpl_vars['collection']->value['start_date'] && $_smarty_tpl->tpl_vars['collection']->value['end_date'])) {?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'daterange' ][ 0 ], array( $_smarty_tpl->tpl_vars['collection']->value['start_date'],$_smarty_tpl->tpl_vars['collection']->value['end_date'] ));?>
<br>
                  <?php }?>
                  
                                    
                  <br>
                  <a href="https://maps.google.com/?q=<?php echo urlencode($_smarty_tpl->tpl_vars['collection']->value['address_formatted']);?>
" target="map">View in Google Maps</a>
                </div>
                <div class="col-sm-7">
                  <div id="mapCanvas" class="" style="width: 250px; height: 250px" data-lat="<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
" data-lng="<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
"></div>
                </div>
              </div>
             
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <?php echo '<script'; ?>
>
        
        $("#mapModal").on("shown.bs.modal", function () {
          initModalMap("mapCanvas");
          //google.maps.event.trigger(map, "resize");
        });
        
        function initModalMap(map_id) {
          var lat = $("#" + map_id).data('lat'); 
          var lng = $("#" + map_id).data('lng'); 
          console.log("initModalMap at " + lat + "/" + lng);
          var mapOptions = {
            center: new google.maps.LatLng(lat, lng),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById(map_id),
            mapOptions);
          var marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lng)
          });
          marker.setMap(map);
        }      
        
        
      <?php echo '</script'; ?>
>
        <?php }?>
      
      </h4>

<?php }
}
