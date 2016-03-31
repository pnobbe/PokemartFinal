<?php
/* Smarty version 3.1.29, created on 2016-03-30 19:38:47
  from "/sites/pokemart.nl/www/View/comparison.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc0f27a4e7e5_59734940',
  'file_dependency' => 
  array (
    '1f7c5ff12b4d0312cd6a94858dd6ce7ea9daae19' => 
    array (
      0 => '/sites/pokemart.nl/www/View/comparison.tpl',
      1 => 1459180969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fc0f27a4e7e5_59734940 ($_smarty_tpl) {
?>
<div class="container">

    <br>
    <div class="col-sm-12 col-lg-12">
        <table class="table table-hover table-bordered comparison cartTable">
            <thead class="flat-lightblue">
            <tr>
                <th class="small"></th>
                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'count', 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_0_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_0_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable($_smarty_tpl->tpl_vars['count']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'count', 0);?>
                <th><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->ImgUrl, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Name, ENT_QUOTES, 'UTF-8');?>
"/></th>
                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="flat-lightblue small"><strong>Name</strong></td>
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_1_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_1_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                <td><a href="/catalogue/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Name, ENT_QUOTES, 'UTF-8');?>
</a></td>
                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_local_item;
}
if ($__foreach_product_1_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_item;
}
?>
            </tr>
            <tr>
                <td class="flat-lightblue small"><strong>Description</strong></td>
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_2_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_2_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->DescriptionShort, ENT_QUOTES, 'UTF-8');?>
</td>
                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_2_saved_local_item;
}
if ($__foreach_product_2_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_2_saved_item;
}
?>
            </tr>
            <tr>
                <td class="flat-lightblue small"><strong>Price</strong></td>
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_3_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_3_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                <td>$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Price, ENT_QUOTES, 'UTF-8');?>
</td>
                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_3_saved_local_item;
}
if ($__foreach_product_3_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_3_saved_item;
}
?>
            </tr>
            <tr>
                <td class="flat-lightblue small"><strong>In Stock</strong></td>
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_4_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_4_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value->IsInStock()) {?>
                <td class="flat-green">Yes</td>
                <?php } else { ?>
                <td class="flat-red">No</td>
                <?php }?>
                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_4_saved_local_item;
}
if ($__foreach_product_4_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_4_saved_item;
}
?>
            </tr>
            <tr>
                <td class="flat-lightblue small"></td>
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_5_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_5_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value->IsInStock()) {?>
                <td>
                    <form class="addToCartForm" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
                        <input type="hidden" name="item" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
"/>
                        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Name, ENT_QUOTES, 'UTF-8');?>
"/>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <span class="text">Add to cart</span>
                        </button>
                    </form>
                </td>
                <?php } else { ?>
                <?php if (!$_smarty_tpl->tpl_vars['product']->value->IsPartOfWishlist()) {?>
                <td>
                    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
                        <input type="hidden" name="itemToAdd" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
"/>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-gift"></span>
                            <span class="text">Add to wishlist</span>
                        </button>
                    </form>
                </td>
                <?php } else { ?>
                <td>
                    <h5 style="color: green;">Item is already part of your wishlist!</h5>
                </td>
                <?php }?>
                <?php }?>
                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_5_saved_local_item;
}
if ($__foreach_product_5_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_5_saved_item;
}
?>
            </tr>
            <tr>
                <td class="flat-lightblue small"></td>
                <?php $_smarty_tpl->tpl_vars['count1'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'count1', 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_6_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_6_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                <td>
                    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" method="POST">
                        <input type="hidden" name="index" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
"/>
                        <button class="close" type="submit">&times;
                        </button>
                    </form>
                </td>
                <?php $_smarty_tpl->tpl_vars['count1'] = new Smarty_Variable($_smarty_tpl->tpl_vars['count1']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'count1', 0);?>
                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_6_saved_local_item;
}
if ($__foreach_product_6_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_6_saved_item;
}
?>
            </tr>
            </tbody>
        </table>
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
