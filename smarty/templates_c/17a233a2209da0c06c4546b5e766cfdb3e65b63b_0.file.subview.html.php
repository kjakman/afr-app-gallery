<?php
/* Smarty version 3.1.32, created on 2018-12-08 09:39:03
  from '/web/sites/afr-app-gallery/smarty/templates/base/subview.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0b91379a67e3_05754255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a233a2209da0c06c4546b5e766cfdb3e65b63b' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/base/subview.html',
      1 => 1544261943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0b91379a67e3_05754255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4045288345c0b91379a1149_01779729', 'content');
?>

  
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/default.html");
}
/* {block 'subview_top'} */
class Block_12825094305c0b91379a15f7_16288873 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'subview_top'} */
/* {block 'subview_title'} */
class Block_159291035c0b91379a1d34_94749506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subview_title'} */
/* {block 'subview_left_top'} */
class Block_5573197405c0b91379a23a3_23221118 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subview_left_top'} */
/* {block 'subview_aside'} */
class Block_11192964135c0b91379a29f3_97606935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subview_aside'} */
/* {block 'subview_nav'} */
class Block_20588314945c0b91379a4ca3_97375931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subview_nav'} */
/* {block 'subview_left_bottom'} */
class Block_17753295595c0b91379a5349_91542909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subview_left_bottom'} */
/* {block 'subview_container'} */
class Block_3330935745c0b91379a5963_48244077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subview_container'} */
/* {block 'subview_bottom'} */
class Block_11777691335c0b91379a5f57_09699176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subview_bottom'} */
/* {block 'content'} */
class Block_4045288345c0b91379a1149_01779729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4045288345c0b91379a1149_01779729',
  ),
  'subview_top' => 
  array (
    0 => 'Block_12825094305c0b91379a15f7_16288873',
  ),
  'subview_title' => 
  array (
    0 => 'Block_159291035c0b91379a1d34_94749506',
  ),
  'subview_left_top' => 
  array (
    0 => 'Block_5573197405c0b91379a23a3_23221118',
  ),
  'subview_aside' => 
  array (
    0 => 'Block_11192964135c0b91379a29f3_97606935',
  ),
  'subview_nav' => 
  array (
    0 => 'Block_20588314945c0b91379a4ca3_97375931',
  ),
  'subview_left_bottom' => 
  array (
    0 => 'Block_17753295595c0b91379a5349_91542909',
  ),
  'subview_container' => 
  array (
    0 => 'Block_3330935745c0b91379a5963_48244077',
  ),
  'subview_bottom' => 
  array (
    0 => 'Block_11777691335c0b91379a5f57_09699176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12825094305c0b91379a15f7_16288873', 'subview_top', $this->tplIndex);
?>

     
    <div class="container">
      <h2>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159291035c0b91379a1d34_94749506', 'subview_title', $this->tplIndex);
?>

      </h2>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5573197405c0b91379a23a3_23221118', 'subview_left_top', $this->tplIndex);
?>
        
          <aside class="user-profile-sidebar">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11192964135c0b91379a29f3_97606935', 'subview_aside', $this->tplIndex);
?>

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#side-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="side-nav" style="max-height: 420px !important">          
              <nav data-target="#subview-container" class="subview-nav" data-pin_code="<?php echo $_smarty_tpl->tpl_vars['scope']->value['pin_code'];?>
" data-success_handler="traveler_ready">
              <?php if (($_smarty_tpl->tpl_vars['scope']->value['pin_code'])) {?>
                <?php $_smarty_tpl->_assignInScope('pin', "?pin=".((string)$_smarty_tpl->tpl_vars['scope']->value['pin_code']));?>              
              <?php }?>              
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20588314945c0b91379a4ca3_97375931', 'subview_nav', $this->tplIndex);
?>
               
              </nav>
            </div>
          </aside>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17753295595c0b91379a5349_91542909', 'subview_left_bottom', $this->tplIndex);
?>
          
        </div>
        <div class="col-md-9" id="subview-container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3330935745c0b91379a5963_48244077', 'subview_container', $this->tplIndex);
?>
               
        </div>
      </div>
    </div>
    <div class="gap"></div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11777691335c0b91379a5f57_09699176', 'subview_bottom', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'content'} */
}
