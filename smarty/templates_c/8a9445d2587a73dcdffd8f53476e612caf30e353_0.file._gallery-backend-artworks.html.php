<?php
/* Smarty version 3.1.32, created on 2018-12-14 07:34:52
  from '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artworks.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c135d1c31a375_44325423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a9445d2587a73dcdffd8f53476e612caf30e353' => 
    array (
      0 => '/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-artworks.html',
      1 => 1544772892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c135d1c31a375_44325423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('what', 'artwork');
$_smarty_tpl->_assignInScope('plural', 'artworks');?>

<?php $_smarty_tpl->_assignInScope('form', "_gallery-backend-artwork-form.html");?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19583461325c135d1c319109_25227809', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14210319855c135d1c319b92_69199788', "fields");
?>






<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "/web/sites/afr-app-gallery/smarty/templates/components/_gallery-backend-list-base.html");
}
/* {block 'main'} */
class Block_19583461325c135d1c319109_25227809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_19583461325c135d1c319109_25227809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
              
<?php
}
}
/* {/block 'main'} */
/* {block "fields"} */
class Block_14210319855c135d1c319b92_69199788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fields' => 
  array (
    0 => 'Block_14210319855c135d1c319b92_69199788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  


  <th data-field="state" data-checkbox="true">Check</th>
  <th data-field="actions" data-formatter="bstCloneActionFormatter">Actions</th>
  <!--th data-field="id" data-sortable="true" data-formatter="bstIDFormatter">ID</th-->
  <th data-field="title_image" data-formatter="bstTitleImageFormatter">Image</th>
  <th data-field="title" data-filter-control="input" data-formatter="bstTitleArtistFormatter">Title</th>
  <th data-field="created" data-filter="input" data-formatter="bstDateFormatter">Created</th>
  <th data-field="artist_id" data-sortable="true" data-formatter="bstArtistFormatter">Artist</th>
  <th data-field="primary_year" data-sortable="true" data-formatter="bstYearFormatter">Year</th>
  <th data-field="technique" data-sortable="true" data-formatter="bstTechniqueFormatter">Technique</th>
  <th data-field="type" data-sortable="true" data-formatter="bstArtworkTypeFormatter">Category</th>
  <th data-field="height" data-sortable="true" data-formatter="bstHeightFormatter">Height</th>
  <th data-field="width" data-sortable="true" data-formatter="bstWidthFormatter">Width</th>
  <th data-field="price" data-filter-control="input" data-formatter= "bstPriceFormatter" >Price</th>
  <th data-field="price_option" data-filter-control="select" data-formatter= "bstPriceOptionFormatter"> Price Option</th> 
  <th data-field="status" data-sortable="true" data-formatter="bstArtworkStatusFormatter">Status</th>       

       
<?php
}
}
/* {/block "fields"} */
}
