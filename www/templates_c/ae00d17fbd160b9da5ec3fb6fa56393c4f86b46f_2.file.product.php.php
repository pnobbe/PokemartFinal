<?php
/* Smarty version 3.1.29, created on 2016-03-30 20:24:19
  from "/sites/pokemart.nl/www/View/product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc19d3909233_23800048',
  'file_dependency' => 
  array (
    'ae00d17fbd160b9da5ec3fb6fa56393c4f86b46f' => 
    array (
      0 => '/sites/pokemart.nl/www/View/product.tpl',
      1 => 1459180275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fc19d3909233_23800048 ($_smarty_tpl) {
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
        <div class="col-md-9">
            <div class="thumbnail clean">
                <div class="compare">
                    <form action="/catalogue/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
" method="post">
                        <input type="hidden" name="comparisonId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
"/>

                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon"></span>
                            <span class="text">Compare</span>
                        </button>
                    </form>
                    <br>
                </div>
                <img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->ImgUrl, ENT_QUOTES, 'UTF-8');?>
" alt="">
                <div class="caption-full">
                    <h4 class="pull-right">$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Price, ENT_QUOTES, 'UTF-8');?>
</h4>
                    <h4><a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Name, ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php if (!($_smarty_tpl->tpl_vars['stock']->value)) {?>
                        <span class="label label-danger">Not In Stock!</span>
                        <?php } else { ?>
                        <span class="label label-success">In Stock!</span>
                        <?php }?>
                    </h4>

                    <blockquote>
                        <p><i class="fa fa-quote-left"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->DescriptionLong, ENT_QUOTES, 'UTF-8');?>
 <i
                                class="fa fa-quote-right"></i></p>
                    </blockquote>
                    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value, ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();
if ($_tmp1) {?>
                    <form action="/catalogue/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
" method="post">
                        <input type="hidden" name="item" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
"/>
                        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Name, ENT_QUOTES, 'UTF-8');?>
"/>
                        <button type="submit" class="btn btn-default flat-lightblue addbutton">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <span class="text">Add to cart</span>
                        </button>
                    </form>
                    <?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['product']->value->IsPartOfWishlist()) {?>
                    <div class="addToWishlist">
                        <form action="/catalogue/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
" method="post">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
"/>
                            <?php if (!($_smarty_tpl->tpl_vars['stock']->value)) {?>
                            <span>This <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Name, ENT_QUOTES, 'UTF-8');?>
</strong> is currently not in stock. Add it to your wishlist instead!</span>
                            <?php } else { ?>
                            <span>Don't want to buy this <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Name, ENT_QUOTES, 'UTF-8');?>
</strong> yet? Add it to your wishlist!</span>
                            <?php }?>
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-gift"></span>
                                <span class="text">Add to wishlist</span>
                            </button>
                        </form>
                        <br>
                    </div>
                    <?php } else { ?>

                        <div class="addToWishlist">
                            <h5 style="color: green;">Item is already part of your wishlist!</h5>
                        </div>

                    <?php }?>

                </div>
            </div>

        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['added']->value === true) {
echo '<script'; ?>
>
    $(document).ready(function () {
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
