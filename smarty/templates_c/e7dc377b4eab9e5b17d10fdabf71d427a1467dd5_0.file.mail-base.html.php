<?php
/* Smarty version 3.1.32, created on 2018-11-25 10:53:43
  from '/web/sites/afr-app-gallery/smarty/templates/mail/mail-base.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa7f37d5e197_80160287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7dc377b4eab9e5b17d10fdabf71d427a1467dd5' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/mail/mail-base.html',
      1 => 1543143223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa7f37d5e197_80160287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/web/code/php/afr-lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?php echo $_smarty_tpl->tpl_vars['scope']->value['subject'];?>
</title>
		<?php $_smarty_tpl->_assignInScope('ver', $_smarty_tpl->tpl_vars['app']->value['live'] ? $_smarty_tpl->tpl_vars['app']->value['version'] : $_smarty_tpl->tpl_vars['time']->value);?>
		<?php $_smarty_tpl->_assignInScope('doc_root', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['app']->value['doc_root'],$_SESSION['doc_root'] )));?>
		<?php $_smarty_tpl->_assignInScope('app_root', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'default' ][ 0 ], array( $_smarty_tpl->tpl_vars['app']->value['app_root'],$_SESSION['app_root'] )));?>
		                            
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['app_root']->value)."/pages/mail/mail-base.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_assignInScope('object', $_smarty_tpl->tpl_vars['scope']->value['object']);?>
    <?php $_smarty_tpl->_assignInScope('site_id', $_smarty_tpl->tpl_vars['scope']->value['site_id']);?>
    <?php if ((!$_smarty_tpl->tpl_vars['site_id']->value && $_smarty_tpl->tpl_vars['object']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('site_id', $_smarty_tpl->tpl_vars['object']->value['site_id']);?>
    <?php }?>
      
    <?php $_smarty_tpl->_assignInScope('url', $_smarty_tpl->tpl_vars['scope']->value['url']);?>
    <?php $_smarty_tpl->_assignInScope('url_encoded', urlencode($_smarty_tpl->tpl_vars['url']->value));?>
    
        <?php $_smarty_tpl->_assignInScope('obj_types', array('booking','rental','invoice','user','payment','chat','artwork','collection'));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj_types']->value, 'obj_type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obj_type']->value) {
?>
      <?php if (($_smarty_tpl->tpl_vars['scope']->value[$_smarty_tpl->tpl_vars['obj_type']->value])) {?>
        <?php $_smarty_tpl->_assignInScope('obj', $_smarty_tpl->tpl_vars['scope']->value[$_smarty_tpl->tpl_vars['obj_type']->value]);?>
        <?php if ((!$_smarty_tpl->tpl_vars['site_id']->value && $_smarty_tpl->tpl_vars['obj']->value)) {?>
          <?php $_smarty_tpl->_assignInScope('site_id', $_smarty_tpl->tpl_vars['obj']->value['site_id']);?>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['site_id']->value && $_smarty_tpl->tpl_vars['site_id']->value != $_smarty_tpl->tpl_vars['obj']->value['site_id'])) {?>
          <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['obj']) ? $_smarty_tpl->tpl_vars['obj']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['site_id'] = $_smarty_tpl->tpl_vars['site_id']->value;
$_smarty_tpl->_assignInScope('obj', $_tmp_array);?>         <?php }?>
        <?php $_smarty_tpl->_assignInScope($_smarty_tpl->tpl_vars['obj_type']->value, $_smarty_tpl->tpl_vars['obj']->value);?>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    <?php if (($_smarty_tpl->tpl_vars['site_id']->value)) {?>
      <?php $_smarty_tpl->_assignInScope('site', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'get' ][ 0 ], array( $_smarty_tpl->tpl_vars['site_id']->value,'site' )));?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('site_url', add_https(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'site_url' ][ 0 ], array( $_smarty_tpl->tpl_vars['site']->value ))));?>
  </head>
  
  
  <body class="" style="background-color: #f6f6f6;font-family: sans-serif;-webkit-font-smoothing: antialiased;font-size: 14px;line-height: 1.4;margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <table border="0" cellpadding="0" cellspacing="0" class="mbody" style="background-color: #f6f6f6;border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;">
      <tr>
        <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;">&nbsp;</td>
        <td class="container" style="background-color: #f6f6f6;font-family: sans-serif;font-size: 14px;vertical-align: top;display: block;max-width: 580px;padding: 10px;width: 580px;margin: 0 auto !important;">
          <div class="content" style="box-sizing: border-box;display: block;margin: 0 auto;max-width: 580px;padding: 10px;">

            <!-- START HEADER -->
            <div class="header" style="clear: both;padding-top: 10px;text-align: center;width: 100%;">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;">
                <tr>
                  <td class="content-block" style="font-family: sans-serif;font-size: 12px;vertical-align: top;color: #999999;text-align: center;">
                  </td>
                </tr>
                <tr>
                  <td class="content-block view-browser" style="font-family: sans-serif;font-size: 12px;vertical-align: top;color: #999999;text-align: center;">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_MAIL') ));?>
?uid=__MAIL_UUID" target="_blank" style="color: #999999;text-decoration: underline;font-size: 12px;text-align: center;">
                      View this email in your browser
                    </a>
                  </td>
                </tr>
              </table>
            </div>
  
            <!-- END HEADER -->
            <br>

            <span class="preheader" style="color: transparent;display: none;height: 0;max-height: 0;max-width: 0;opacity: 0;overflow: hidden;mso-hide: all;visibility: hidden;width: 0;"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10710250265bfa7f37d52e62_66822649', 'preheader_text');
?>
</span>
            <table class="main" style="background: #fff;border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;border-radius: 3px;">
              <tr>
                <td class="wrapper" style="font-family: sans-serif;font-size: 14px;vertical-align: top;box-sizing: border-box;padding: 20px;">
                  <table border="0" cellpadding="10" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;">
                    <?php if ((!$_smarty_tpl->tpl_vars['scope']->value['hide_header'])) {?>
                    <tr style="background-color: #474747">
                      <td style="text-align: center;font-family: sans-serif;font-size: 14px;vertical-align: top;">
                        <?php if (($_smarty_tpl->tpl_vars['site']->value['logo_small'])) {?>
                        <img src="<?php echo add_http($_smarty_tpl->tpl_vars['site']->value['logo_small']);?>
" style="border: none;-ms-interpolation-mode: bicubic;max-width: 100%;">
                        <?php } else { ?>
                        <h1 style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
</h1>
                        <?php }?>
                      </td>
                    </tr>
                    <?php }?>
                    <tr>
                      <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;">
            
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20300842785bfa7f37d55a94_57224884', 'top_text');
?>

                        
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16498907745bfa7f37d560c5_10248319', 'main_text');
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14629287315bfa7f37d56660_32415558', 'row2');
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16185506235bfa7f37d56c07_06881618', 'action');
?>

                        
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16481792845bfa7f37d57188_38711255', 'sub');
?>
                                  
                        
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4997531045bfa7f37d57860_56901282', 'bottom_text');
?>

                        
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            <!-- START FOOTER -->
            <div class="footer" style="clear: both;padding-top: 10px;text-align: center;width: 100%;">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;">
                <tr>
                  <td class="content-block" style="font-family: sans-serif;font-size: 12px;vertical-align: top;color: #999999;text-align: center;">
                    <em>Copyright (c) <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['now']->value,"Y");?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
 and/or our clients.</em><br>
                    <span class="apple-link" style="color: #999999;font-size: 12px;text-align: center;">
                      <?php ob_start();
echo $_smarty_tpl->tpl_vars['scope']->value['company_address'];
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1)) {
echo $_smarty_tpl->tpl_vars['scope']->value['company_address'];?>
<br><?php }?>                    
                      <?php ob_start();
echo $_smarty_tpl->tpl_vars['scope']->value['company_description'];
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable2)) {
echo $_smarty_tpl->tpl_vars['scope']->value['company_description'];?>
<br><?php }?>                    
                    </span>                    
                  </td>
                </tr>
                <tr>
                  <td class="content-block powered-by" style="font-family: sans-serif;font-size: 12px;vertical-align: top;color: #999999;text-align: center;">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'this is an automatically generated mail.','c' ));?>
<br>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'please do not reply.','c' ));?>
 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'link' ][ 0 ], array( @constant('PAGE_CONTACT') ));?>
" style="color: #999999;text-decoration: none;font-size: 12px;text-align: center;"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( 'contact us','c' ));?>
</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->
            
          </div><!-- END CENTERED WHITE CONTAINER -->
        </td>
      </tr>
      <?php if ((1)) {?><tr><td><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/afr/tracking/pixel.php?uid=__MAIL_UUID<?php if (($_smarty_tpl->tpl_vars['scope']->value['campaign'])) {?>&amp;cuid=__MAIL_CAMPAIGN_UUID&amp;cid=__MAIL_CAMPAIGN_ID<?php }?>"></td></tr><?php }?>
    </table>

  </body>
</html>
<?php }
/* {block 'preheader_text'} */
class Block_10710250265bfa7f37d52e62_66822649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preheader_text' => 
  array (
    0 => 'Block_10710250265bfa7f37d52e62_66822649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'preheader_text'} */
/* {block 'top_text'} */
class Block_20300842785bfa7f37d55a94_57224884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_text' => 
  array (
    0 => 'Block_20300842785bfa7f37d55a94_57224884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top_text'} */
/* {block 'main_text'} */
class Block_16498907745bfa7f37d560c5_10248319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_text' => 
  array (
    0 => 'Block_16498907745bfa7f37d560c5_10248319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main_text'} */
/* {block 'row2'} */
class Block_14629287315bfa7f37d56660_32415558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'row2' => 
  array (
    0 => 'Block_14629287315bfa7f37d56660_32415558',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'row2'} */
/* {block 'action'} */
class Block_16185506235bfa7f37d56c07_06881618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_16185506235bfa7f37d56c07_06881618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'sub'} */
class Block_16481792845bfa7f37d57188_38711255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sub' => 
  array (
    0 => 'Block_16481792845bfa7f37d57188_38711255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sub'} */
/* {block 'bottom_text'} */
class Block_4997531045bfa7f37d57860_56901282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom_text' => 
  array (
    0 => 'Block_4997531045bfa7f37d57860_56901282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'bottom_text'} */
}
