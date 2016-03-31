<?php
/* Smarty version 3.1.29, created on 2016-03-30 19:38:47
  from "/sites/pokemart.nl/www/View/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc0f279cbbb5_50140482',
  'file_dependency' => 
  array (
    '54102021073aa5c4da78482a19ecda5fb4d79420' => 
    array (
      0 => '/sites/pokemart.nl/www/View/header.tpl',
      1 => 1459189434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fc0f279cbbb5_50140482 ($_smarty_tpl) {
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Color on mobile devices. Example: mariusdv.nl -->
    <meta name="theme-color" content="#2196F3">

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/ui/1.10.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../JS/toastr.min.js"><?php echo '</script'; ?>
>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/CSS/shop-homepage.css">
    <link rel="stylesheet" type="text/css" href="/CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="/CSS/toastr.min.css">
    <link rel="shortcut icon" href="/Resources/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/Resources/favicon.ico" type="image/x-icon">


    <?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?>
    <title>Pokemart - <?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value), ENT_QUOTES, 'UTF-8');?>
</title>
    <?php } else { ?>
    <title>Pokemart</title>
    <?php }?>


</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-toggle navbar-nav smallcart" href="/Order"><span
                    class="glyphicon glyphicon-shopping-cart cart"></span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cartSize']->value, ENT_QUOTES, 'UTF-8');?>
 </a>

            <a class="navbar-brand" href="/"><img src="/Resources/Images/logo.png" alt="logo"></a></div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-left">
                <?php if (!isset($_smarty_tpl->tpl_vars['admin']->value)) {?>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>

                <li class="dropdown">
                    <a id="dLabel" data-toggle="dropdown" data-target="#"
                       href="/page.html">
                        Products<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu multi-level">
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
                        <li class="dropdown-submenu">
                            <a tabindex="-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Category[0], ENT_QUOTES, 'UTF-8');?>
</a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="/catalogue/cat=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Category[1], ENT_QUOTES, 'UTF-8');?>
">All</a></li>
                                <li role="separator" class="divider small"></li>
                                <?php
$_from = $_smarty_tpl->tpl_vars['row']->value->SubCategories;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sub_1_saved_item = isset($_smarty_tpl->tpl_vars['sub']) ? $_smarty_tpl->tpl_vars['sub'] : false;
$_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sub']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
$__foreach_sub_1_saved_local_item = $_smarty_tpl->tpl_vars['sub'];
?>
                                <li><a tabindex="-1" href="/catalogue/subcat=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub']->value[1], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub']->value[0], ENT_QUOTES, 'UTF-8');?>
</a></li>
                                <?php
$_smarty_tpl->tpl_vars['sub'] = $__foreach_sub_1_saved_local_item;
}
if ($__foreach_sub_1_saved_item) {
$_smarty_tpl->tpl_vars['sub'] = $__foreach_sub_1_saved_item;
}
?>
                            </ul>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
                    </ul>

                </li>
                <?php } else { ?>
                <li><a href="/">Home</a></li>
                <li><a href="/Admin/p=cat">Products</a></li>
                <li><a href="/Admin/p=orders">Orders</a></li>
                <li><a href="/Admin/p=category">Categories</a></li>
                <?php }?>
            </ul>

            <?php if (!isset($_smarty_tpl->tpl_vars['admin']->value)) {?>

            <form class="navbar-form navbar-left" role="search" action="/Catalogue" method="get">
                <?php } else { ?>
                <form class="navbar-form navbar-left" role="search" action="/Admin/p=cat" method="get">
                    <?php }?>

                    <div class="form-group">
                        <input name="search" id="search" type="text" class="form-control" placeholder=" Search products">
                    </div>
                    <button type="submit" class="btn btn-default"><span
                            class="glyphicon glyphicon-search search"></span>
                    </button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <?php if (!isset($_smarty_tpl->tpl_vars['admin']->value)) {?>

                    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comparisonLink']->value, ENT_QUOTES, 'UTF-8');?>
">Comparison (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compareCount']->value, ENT_QUOTES, 'UTF-8');?>
)</a></li>

                    <li class="dropdown-cart">
                        <a href="/Order" class="hidden-xs"><span class="glyphicon glyphicon-shopping-cart cart"></span>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cartSize']->value, ENT_QUOTES, 'UTF-8');?>
 </a>
                        <div class="dropdown-cart-content">
                            <table class="table table-bordered table-striped table-condensed cartTable">
                                <tr>
                                    <td></td>
                                    <td>Name</td>
                                    <td>Amount</td>
                                    <td>Price</td>
                                </tr>
                                <?php
$_from = $_smarty_tpl->tpl_vars['cart']->value;
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
                                <tr>
                                    <td><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Product->ImgUrl, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Product->Name, ENT_QUOTES, 'UTF-8');?>
"/></td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Product->Name, ENT_QUOTES, 'UTF-8');?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Quantity, ENT_QUOTES, 'UTF-8');?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Product->Price, ENT_QUOTES, 'UTF-8');?>
</td>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_local_item;
}
if ($__foreach_row_2_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_item;
}
?>
                                <tr>
                                    <td colspan="3"> Total:</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totalPrice']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                                </tr>
                            </table>
                        </div>
                    </li>


                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8');?>
<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/account">Mijn profiel</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/account/tab=wishlist">Wishlist</a></li>
                            <li><a href="/account/tab=orders">Bestellingen</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/account/action=logout">Log uit</a></li>
                        </ul>
                    </li>
                    <?php } else { ?>
                    <li><a href="/account/action=login">Log in</a></li>
                    <?php }?>
                    <?php } else { ?>
                    <!-- ADMIN -->
                    <li><a href="/admin/p=logout">Admin log-out</a></li>
                    <?php }?>

                </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--Breadcrumbs-->
<?php if (isset($_smarty_tpl->tpl_vars['breadcrumbTrial']->value)) {
$_smarty_tpl->tpl_vars["counter"] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['breadcrumbTrial']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "counter", 0);
$_smarty_tpl->tpl_vars["i"] = new Smarty_Variable("0", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "i", 0);?>
<ol class="breadcrumb">
    <?php
$_from = $_smarty_tpl->tpl_vars['breadcrumbTrial']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_breadcrumb_3_saved_item = isset($_smarty_tpl->tpl_vars['breadcrumb']) ? $_smarty_tpl->tpl_vars['breadcrumb'] : false;
$_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
$__foreach_breadcrumb_3_saved_local_item = $_smarty_tpl->tpl_vars['breadcrumb'];
?>
    <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "i", 0);?>
    <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['counter']->value) {?>
    <li class="active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value[0], ENT_QUOTES, 'UTF-8');?>
</li>
    <?php } else { ?>
    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value[1], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value[0], ENT_QUOTES, 'UTF-8');?>
</a></li>
    <?php }?>
    <?php
$_smarty_tpl->tpl_vars['breadcrumb'] = $__foreach_breadcrumb_3_saved_local_item;
}
if ($__foreach_breadcrumb_3_saved_item) {
$_smarty_tpl->tpl_vars['breadcrumb'] = $__foreach_breadcrumb_3_saved_item;
}
?>
</ol>
<?php } else { ?>
<br>
<?php }
}
}
