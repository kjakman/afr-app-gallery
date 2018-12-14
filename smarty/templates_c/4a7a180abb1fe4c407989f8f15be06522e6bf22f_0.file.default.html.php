<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:01:40
  from '/web/sites/afr-app-gallery/smarty/templates/base/default.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c13555488d088_04132663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a7a180abb1fe4c407989f8f15be06522e6bf22f' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/base/default.html',
      1 => 1544770900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_page-top.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_site-menu.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html' => 1,
    'file:/web/sites/afr-app-gallery/smarty/templates/components/_page-footer.html' => 1,
  ),
),false)) {
function content_5c13555488d088_04132663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10263140145c135554887fe5_75106503', 'body');
?>

  
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/base/index.html");
}
/* {block 'top'} */
class Block_5887005535c135554888eb1_52958193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!--$top--> <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_page-top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'top'} */
/* {block 'nav'} */
class Block_5964542115c135554889e05_57985536 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!--$nav-->
        <?php if ((1 || $_smarty_tpl->tpl_vars['user']->value['id'])) {?>
          &nbsp;
          <div id="site_menu">
          <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_site-menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        <?php }?>              
        <?php
}
}
/* {/block 'nav'} */
/* {block 'content'} */
class Block_13950454185c13555488bc00_87273038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!--$content--><?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_10063231335c13555488c2d2_33811304 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!--$footer--><?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_page-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
/* {block 'body'} */
class Block_10263140145c135554887fe5_75106503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10263140145c135554887fe5_75106503',
  ),
  'top' => 
  array (
    0 => 'Block_5887005535c135554888eb1_52958193',
  ),
  'nav' => 
  array (
    0 => 'Block_5964542115c135554889e05_57985536',
  ),
  'content' => 
  array (
    0 => 'Block_13950454185c13555488bc00_87273038',
  ),
  'footer' => 
  array (
    0 => 'Block_10063231335c13555488c2d2_33811304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['edit_menu']->value;?>

      <div class="global-wrap">
        <header id="main-header">    
        <?php $_smarty_tpl->_assignInScope('nav_class', 'navbar-fixed-top');?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5887005535c135554888eb1_52958193', 'top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5964542115c135554889e05_57985536', 'nav', $this->tplIndex);
?>

        </header>

        <section id="content_container">        
        <?php $_smarty_tpl->_subTemplateRender("file:/web/sites/afr-app-gallery/smarty/templates/components/_page-messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13950454185c13555488bc00_87273038', 'content', $this->tplIndex);
?>

        </section>
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10063231335c13555488c2d2_33811304', 'footer', $this->tplIndex);
?>

     </div>
  <?php
}
}
/* {/block 'body'} */
}
