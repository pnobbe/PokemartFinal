<?php
/* Smarty version 3.1.29, created on 2016-03-31 10:53:06
  from "/sites/pokemart.nl/www/View/addressmanagement.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fce57244e2d0_75712081',
  'file_dependency' => 
  array (
    '85f9e415ae6863c1c1cf930e8b824cdcb37ed768' => 
    array (
      0 => '/sites/pokemart.nl/www/View/addressmanagement.tpl',
      1 => 1459201141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fce57244e2d0_75712081 ($_smarty_tpl) {
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
                        <li class="active">
                            <a href="/account/tab=addresses">
                                <i class="glyphicon glyphicon-tags"></i>
                                Address Management </a>
                        </li>
                        <li>
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
                        <h3 class="panel-title">Address Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-12 col-lg-12">
                                <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                                <div class="alert alert-danger" role="alert"><strong>Error!</strong> <?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['error']->value), ENT_QUOTES, 'UTF-8');?>

                                </div>
                                <?php }?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->getAddresses($_smarty_tpl->tpl_vars['user']->value->email);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_add_0_saved_item = isset($_smarty_tpl->tpl_vars['add']) ? $_smarty_tpl->tpl_vars['add'] : false;
$_smarty_tpl->tpl_vars['add'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['add']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['add']->value) {
$_smarty_tpl->tpl_vars['add']->_loop = true;
$__foreach_add_0_saved_local_item = $_smarty_tpl->tpl_vars['add'];
?>
                                <div class="panel-group">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse"
                                                   href="#collapse<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Zipcode'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Address'], ENT_QUOTES, 'UTF-8');?>
,
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['City'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Province'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Country'], ENT_QUOTES, 'UTF-8');?>
</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <?php
$_smarty_tpl->tpl_vars['add'] = $__foreach_add_0_saved_local_item;
}
if ($__foreach_add_0_saved_item) {
$_smarty_tpl->tpl_vars['add'] = $__foreach_add_0_saved_item;
}
?>
                                <div class="panel-group">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h4 class="panel-title address">
                                                <a data-toggle="collapse"
                                                   href="#collapseNew" style="color: white;"><i
                                                        class="glyphicon glyphicon-plus"></i> Add new address</a>
                                            </h4>
                                        </div>
                                        <div id="collapseNew" class="panel-collapse collapse">
                                            <form action="/account" name="form" id="form" class="form-horizontal"
                                                  enctype="multipart/form-data"
                                                  method="POST">
                                                <ul class="list-group">

                                                    <li class="list-group-item address"><input id="zipcode" type="text"
                                                                                               class="form-control"
                                                                                               name="zipcode"
                                                                                               placeholder="Zipcode">
                                                    </li>
                                                    <li class="list-group-item address"><input id="address" type="text"
                                                                                               class="form-control"
                                                                                               name="address"
                                                                                               placeholder="Address">
                                                    </li>
                                                    <li class="list-group-item address"><input id="city" type="text"
                                                                                               class="form-control"
                                                                                               name="city"
                                                                                               placeholder="City"></li>
                                                    <li class="list-group-item address"><input id="state" type="text"
                                                                                               class="form-control"
                                                                                               name="state"
                                                                                               placeholder="State"></li>
                                                    <li class="list-group-item address"><input id="country" type="text"
                                                                                               class="form-control"
                                                                                               name="country"
                                                                                               placeholder="Country">
                                                    </li>
                                                    <li class="list-group-item address">
                                                        <button class="btn btn-success" type="submit">Submit</button>
                                                    </li>
                                                </ul>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
