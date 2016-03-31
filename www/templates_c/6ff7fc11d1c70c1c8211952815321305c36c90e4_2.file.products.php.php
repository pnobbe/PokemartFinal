<?php
/* Smarty version 3.1.29, created on 2016-03-31 11:12:32
  from "/sites/pokemart.nl/www/View/admin/products.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fcea00e74352_91206008',
  'file_dependency' => 
  array (
    '6ff7fc11d1c70c1c8211952815321305c36c90e4' => 
    array (
      0 => '/sites/pokemart.nl/www/View/admin/products.tpl',
      1 => 1458994298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fcea00e74352_91206008 ($_smarty_tpl) {
?>
<div class="container">

    <div class="row flat-header">
        <div class="col-sm-3 col-lg-3 ">
            <div class="header">Categories</div>
        </div>
        <div class="col-sm-9 col-lg-9">
            <div class="header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

                <span class="titanic-1911"><a class="btn btn-default" href="/admin/p=newp">New product</a>&nbsp;</span></div>

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
                            <a href="/admin/p=cat/cat=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Category[1], ENT_QUOTES, 'UTF-8');?>
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
                            <a href="/admin/p=cat/subcat=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcat']->value[1], ENT_QUOTES, 'UTF-8');?>
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
                                <h4><a href="/admin/p=cat/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Name, ENT_QUOTES, 'UTF-8');?>
</a>
                                </h4>
                                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->DescriptionShort, ENT_QUOTES, 'UTF-8');?>
</p>
                            </div>
                            <a href="/admin/p=cat/product=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value->Id, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default addbutton flat-button flat-lightblue">Edit</a>
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

<?php }
}
