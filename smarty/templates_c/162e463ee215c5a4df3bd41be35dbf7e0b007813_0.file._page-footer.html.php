<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:01:40
  from '/web/sites/afr-app-gallery/smarty/templates/components/_page-footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c1355548c4e53_89912058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '162e463ee215c5a4df3bd41be35dbf7e0b007813' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_page-footer.html',
      1 => 1544770900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1355548c4e53_89912058 (Smarty_Internal_Template $_smarty_tpl) {
?>    <footer id="main-footer">
      <div class="container">
        <div class="row row-wrap">
          <div class="col-md-3">
            <a class="logo" href="/">
            <?php if (($_smarty_tpl->tpl_vars['site']->value['logo_small'])) {?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['site']->value['logo_small'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
" title="Image Title" height="55" width="130" />
            <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>

            <?php }?>
            </a>
            <p class="mb20"></p>
            <ul class="list list-horizontal list-space">
              <li>
                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
              </li>
              <li>
                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
              </li>
              <li>
                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
              </li>
              <li>
                <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
              </li>
              <li>
                <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
              </li>
            </ul>
          </div>

          <!--div class="col-md-3">
            <h4>Newsletter</h4>
            <form>
              <label>Enter your E-mail Address</label>
              <input type="text" class="form-control">
              <p class="mt5"><small>*We Never Send Spam</small>
              </p>
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div-->
          <div class="col-md-5">
            <ul class="list list-footer">
              <li><a href="/about-us/mission/">About US</a>
              </li>
              <!--li><a href="#">Press Centre</a>
              </li>
              <li><a href="#">Best Price Guarantee</a>
              </li>
              <li><a href="#">Travel News</a>
              </li>
              <li><a href="#">Feedback</a>
              </li>
              <li><a href="#">Jobs</a>
              </li-->
              <li><a href="/terms-and-conditions/">Terms of Use</a>
              </li>
              <li><a href="/privacy-policy/">Privacy Policy</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>Have Questions?</h4>
            <h4 class="text-color">+31-642200934</h4>
            <h4><a href="#" class="text-color">info@vpatina.com</a></h4>
            <p>Dedicated Customer Support</p>
          </div>

        </div>
      </div>
    </footer>



<?php }
}
