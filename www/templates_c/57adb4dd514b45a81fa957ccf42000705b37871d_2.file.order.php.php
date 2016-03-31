<?php
/* Smarty version 3.1.29, created on 2016-03-31 10:54:27
  from "/sites/pokemart.nl/www/View/order.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fce5c3cc8eb0_92231939',
  'file_dependency' => 
  array (
    '57adb4dd514b45a81fa957ccf42000705b37871d' => 
    array (
      0 => '/sites/pokemart.nl/www/View/order.tpl',
      1 => 1459188267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fce5c3cc8eb0_92231939 ($_smarty_tpl) {
?>
<div class="container">
    <div class="col-sm-12">
        <h2>Order</h2>
        <form method="post" action="action=submit">
            <div class="col-sm-12">
                <table class="table table-bordered table-striped table-condensed cartTable bigCart">
                    <tr>
                        <td></td>
                        <td>Name</td>
                        <td>Amount</td>
                        <td>Price</td>
                    </tr>
                    <?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['cart']->value;
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
                    <tr>
                        <td><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Product->ImgUrl, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Product->Name, ENT_QUOTES, 'UTF-8');?>
"/></td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Product->Name, ENT_QUOTES, 'UTF-8');?>
</td>
                        <td>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Quantity, ENT_QUOTES, 'UTF-8');?>

                        </td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Product->Price, ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>

                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['totalPrice']->value)) {?>
                    <tr>
                        <td colspan="3"> Total:</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totalPrice']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                    <?php }?>
                </table>
            </div>
            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Delivery Address</div>
                    <div class="panel-body">
                        <select name="delivery" class="form-control">
                            <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->addresses;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_add_1_saved_item = isset($_smarty_tpl->tpl_vars['add']) ? $_smarty_tpl->tpl_vars['add'] : false;
$_smarty_tpl->tpl_vars['add'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['add']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['add']->value) {
$_smarty_tpl->tpl_vars['add']->_loop = true;
$__foreach_add_1_saved_local_item = $_smarty_tpl->tpl_vars['add'];
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Address'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['City'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Province'], ENT_QUOTES, 'UTF-8');?>
,
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Country'], ENT_QUOTES, 'UTF-8');?>

                            </option>
                            <?php
$_smarty_tpl->tpl_vars['add'] = $__foreach_add_1_saved_local_item;
}
if ($__foreach_add_1_saved_item) {
$_smarty_tpl->tpl_vars['add'] = $__foreach_add_1_saved_item;
}
?>
                        </select>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Payment Address</div>
                    <div class="panel-body">
                        <select name="payment" class="form-control">
                            <?php
$_from = $_smarty_tpl->tpl_vars['user']->value->getAddresses($_smarty_tpl->tpl_vars['user']->value->email);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_add_2_saved_item = isset($_smarty_tpl->tpl_vars['add']) ? $_smarty_tpl->tpl_vars['add'] : false;
$_smarty_tpl->tpl_vars['add'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['add']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['add']->value) {
$_smarty_tpl->tpl_vars['add']->_loop = true;
$__foreach_add_2_saved_local_item = $_smarty_tpl->tpl_vars['add'];
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Address'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['City'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Province'], ENT_QUOTES, 'UTF-8');?>
,
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['add']->value['Country'], ENT_QUOTES, 'UTF-8');?>

                            </option>
                            <?php
$_smarty_tpl->tpl_vars['add'] = $__foreach_add_2_saved_local_item;
}
if ($__foreach_add_2_saved_item) {
$_smarty_tpl->tpl_vars['add'] = $__foreach_add_2_saved_item;
}
?>
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary  toast-bottom-center" value="Order">

        </form>
    </div>
</div>
<?php }
}
