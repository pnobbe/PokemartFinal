<?php
/* Smarty version 3.1.29, created on 2016-03-31 10:53:14
  from "/sites/pokemart.nl/www/View/orderlist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fce57a33a2f3_50864927',
  'file_dependency' => 
  array (
    'b5665c94612a22d167a97c8b9d45ba587fe91eec' => 
    array (
      0 => '/sites/pokemart.nl/www/View/orderlist.tpl',
      1 => 1459181538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fce57a33a2f3_50864927 ($_smarty_tpl) {
?>
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8');?>

                    </div>
                    <div class="profile-usertitle-job">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8');?>

                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li>
                            <a href="/account">
                                <i class="glyphicon glyphicon-user"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="/account/tab=addresses">
                                <i class="glyphicon glyphicon-tags"></i>
                                Address Management </a>
                        </li>
                        <li class="active">
                            <a href="/account/tab=orders">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                Orders </a>
                        </li>
                        <li>
                            <a href="/account/tab=wishlist">
                                <i class="glyphicon glyphicon-gift"></i>
                                Wishlist </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <div class="panel">
                    <div class="panel-heading flat-lightblue">
                        <h3 class="panel-title">Order Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php if (!empty($_smarty_tpl->tpl_vars['orders']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['orders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_order_0_saved_item = isset($_smarty_tpl->tpl_vars['order']) ? $_smarty_tpl->tpl_vars['order'] : false;
$_smarty_tpl->tpl_vars['order'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['order']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_0_saved_local_item = $_smarty_tpl->tpl_vars['order'];
?>
                            <div class=" col-md-12 col-lg-12 ">
                                <div class="panel-group">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title address">
                                                <a data-toggle="collapse"
                                                   href="#collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['index'], ENT_QUOTES, 'UTF-8');?>
" style="color: white;"><i
                                                        class="glyphicon glyphicon-ok"></i> Order
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['index'], ENT_QUOTES, 'UTF-8');?>
</a>
                                            </h4>
                                        </div>
                                        <div id="collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['index'], ENT_QUOTES, 'UTF-8');?>
" class="panel-collapse collapse">
                                            <table class="table table-user-information cartTable orderinfo">
                                                <tbody>
                                                <tr>
                                                    <th></th>
                                                    <td><strong>Product</strong></td>
                                                    <td><strong>Quantity</strong></td>
                                                    <td><strong>Price</strong></td>
                                                    <td><strong>Total</strong></td>
                                                </tr>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['order']->value[0];
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
                                                <tr>
                                                    <td><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['ImgUrl'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                                                    </td>
                                                    <td>
                                                        <a href="/catalogue/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['count'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                    <td>$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                    <td>$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                </tr>
                                                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_local_item;
}
if ($__foreach_product_1_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_item;
}
?>
                                                </tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong>Total Price:</strong></td>
                                                    <td><strong>$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totalPrice'], ENT_QUOTES, 'UTF-8');?>
</strong></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_0_saved_local_item;
}
if ($__foreach_order_0_saved_item) {
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_0_saved_item;
}
?>
                            <?php } else { ?>
                            <div class=" col-md-12 col-lg-12 ">
                                <h4>No orders found</h4>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
