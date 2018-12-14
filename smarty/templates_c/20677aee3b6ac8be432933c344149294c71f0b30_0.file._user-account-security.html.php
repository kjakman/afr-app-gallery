<?php
/* Smarty version 3.1.32, created on 2018-10-10 10:42:04
  from '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-security.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdd77c613a89_79928323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20677aee3b6ac8be432933c344149294c71f0b30' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_user-account-security.html',
      1 => 1539168124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdd77c613a89_79928323 (Smarty_Internal_Template $_smarty_tpl) {
?>                    <h4>Traveled Stats</h4>
                    <ul class="list list-inline user-profile-statictics mb30">
                        <li><i class="fa fa-dashboard user-profile-statictics-icon"></i>
                            <h5>420</h5>
                            <p>Miles</p>
                        </li>
                        <li><i class="fa fa-globe user-profile-statictics-icon"></i>
                            <h5>2%</h5>
                            <p>World</p>
                        </li>
                        <li><i class="fa fa-building-o user-profile-statictics-icon"></i>
                            <h5>15</h5>
                            <p>Cities</p>
                        </li>
                        <li><i class="fa fa-flag-o user-profile-statictics-icon"></i>
                            <h5>3</h5>
                            <p>Countries</p>
                        </li>
                        <li><i class="fa fa-plane user-profile-statictics-icon"></i>
                            <h5>20</h5>
                            <p>Trips</p>
                        </li>
                    </ul>
                    <?php if (($_smarty_tpl->tpl_vars['scope']->value['description'])) {?>
                    <h3>About</h3>
                    <?php echo $_smarty_tpl->tpl_vars['scope']->value['description'];?>

                    <?php }?>
                    <div id="map-canvas" style="width:100%; height:400px;"></div>


<?php }
}
