<?php
/* Smarty version 3.1.29, created on 2016-03-31 10:53:31
  from "/sites/pokemart.nl/www/View/wishlist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fce58b90ccd9_50447398',
  'file_dependency' => 
  array (
    '9f97b71a77fe43a6526b5136ea310c76af510f2b' => 
    array (
      0 => '/sites/pokemart.nl/www/View/wishlist.tpl',
      1 => 1459197471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fce58b90ccd9_50447398 ($_smarty_tpl) {
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
                        <li>
                            <a href="/account/tab=orders">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                Orders </a>
                        </li>
                        <li class="active">
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
                        <h3 class="panel-title">Wishlist</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class=" col-md-12 col-lg-12 ">
                                <table class="table table-user-information cartTable">
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Product</td>
                                        <td>Price</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
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
                                    <tr>
                                        <td><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->ImgUrl, ENT_QUOTES, 'UTF-8');?>
"></td>
                                        <td><a href="/catalogue/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Name, ENT_QUOTES, 'UTF-8');?>
</a></td>
                                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Price, ENT_QUOTES, 'UTF-8');?>
</td>
                                        <td>
                                            <form action="/catalogue/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
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
                                        <td>
                                            <form action="/account/tab=wishlist" name="form" id="form"
                                                  class="form-horizontal"
                                                  enctype="multipart/form-data"
                                                  method="POST"><input type="hidden" name="productId"
                                                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->Id, ENT_QUOTES, 'UTF-8');?>
"/>
                                                <button class="close" type="submit">&times;
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }
}
