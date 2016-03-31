<?php
/* Smarty version 3.1.29, created on 2016-03-30 20:24:11
  from "/sites/pokemart.nl/www/View/catalogue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc19cb1ab5f8_95708146',
  'file_dependency' => 
  array (
    '7e01d8edad42a653645bcf7722332bb98401fa06' => 
    array (
      0 => '/sites/pokemart.nl/www/View/catalogue.tpl',
      1 => 1459086870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fc19cb1ab5f8_95708146 ($_smarty_tpl) {
?>
<div class="container">

    <div class="row flat-header">
        <div class="col-sm-3 col-lg-3 ">
            <div class="header">Categories</div>
        </div>
        <div class="col-sm-9 col-lg-9">
            <div class="header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</div>
        </div>
    </div>
    <div class="row flat-lighterblue">
        <br>
        <div class="col-sm-3 col-lg-3">
            <div class="panel-group" id="accordion">
                <?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->FoldId, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Category[0], ENT_QUOTES, 'UTF-8');?>
</a>
                        </h4>
                    </div>
                    <div id="collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->FoldId, ENT_QUOTES, 'UTF-8');?>
" class="panel-collapse collapse">
                        <div class="panel-body category">
                            <a href="/catalogue/cat=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Category[1], ENT_QUOTES, 'UTF-8');?>
">
                                <div class="subcategory all">
                                    All
                                </div>
                            </a>
                            <hr class="small">
                            <?php
$_from = $_smarty_tpl->tpl_vars['row']->value->SubCategories;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_subcat_1_saved_item = isset($_smarty_tpl->tpl_vars['subcat']) ? $_smarty_tpl->tpl_vars['subcat'] : false;
$_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['subcat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->value) {
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
$__foreach_subcat_1_saved_local_item = $_smarty_tpl->tpl_vars['subcat'];
?>
                            <a href="/catalogue/subcat=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcat']->value[1], ENT_QUOTES, 'UTF-8');?>
">
                                <div class="subcategory">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcat']->value[0], ENT_QUOTES, 'UTF-8');?>

                                </div>
                            </a>
                            <?php
$_smarty_tpl->tpl_vars['subcat'] = $__foreach_subcat_1_saved_local_item;
}
if ($__foreach_subcat_1_saved_item) {
$_smarty_tpl->tpl_vars['subcat'] = $__foreach_subcat_1_saved_item;
}
?>
                        </div>
                    </div>
                </div>
                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
            </div>
        </div>

        <div class="col-sm-9 col-lg-9">

            <div class="row">

                <?php if (!isset($_smarty_tpl->tpl_vars['rows']->value)) {?>
                No items found.
                <?php } else { ?>
                <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_2_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_2_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                <div class="col-xs-12 col-sm-12 col-lg-4 col-md-6" id="item<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Id, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="thumbnail">
                        <div class="imageWrapper">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->ImgUrl, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Name, ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                        <div class="info">
                            <div class="caption flat-caption">
                                <h4 class="pull-right">$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Price, ENT_QUOTES, 'UTF-8');?>
</h4>
                                <h4><a href="/catalogue/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Name, ENT_QUOTES, 'UTF-8');?>
</a>
                                </h4>
                                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->DescriptionShort, ENT_QUOTES, 'UTF-8');?>
</p>
                            </div>
                            <form class="addToCartForm" action="#item<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Id, ENT_QUOTES, 'UTF-8');?>
" method="post">
                                <input type="hidden" name="item" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Id, ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Name, ENT_QUOTES, 'UTF-8');?>
"/>
                                <button type="submit" class="btn btn-default addbutton flat-button flat-lightblue">
                                    <span class="glyphicon glyphicon-shopping-cart cart"></span>
                                    <span class="text">Add to cart</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_local_item;
}
if ($__foreach_row_2_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_item;
}
?>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['added']->value)) {
echo '<script'; ?>
>
    $( document ).ready(function() {
        toastr.options = {
            "positionClass": "toast-bottom-right"
        }
        toastr.info("Item has been successfully added to the cart!", "Pokemart");
    });
<?php echo '</script'; ?>
>
<?php }
}
}
