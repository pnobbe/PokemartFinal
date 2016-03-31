<?php
/* Smarty version 3.1.29, created on 2016-03-30 20:24:10
  from "/sites/pokemart.nl/www/View/error_view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fc19ca7a2df3_27049901',
  'file_dependency' => 
  array (
    'fccbddd0630a33c8f744a06b4a5db51d24afe1bf' => 
    array (
      0 => '/sites/pokemart.nl/www/View/error_view.tpl',
      1 => 1458994298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fc19ca7a2df3_27049901 ($_smarty_tpl) {
?>
<div class="container">
    <h1 class="errorHead">
        A Snorlax is blocking the path!
    </h1>
    <p class="error">
        Oops! We unexpectedly encountered a Snorlax on the way. <br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
<br>
        <img src="/Resources/Images/error.gif" alt="snorlax">
    </p>
    <br>
    <br>
    <p class="error">
        <i>Psst, try blowing this flute to see if you can wake him up!</i>
    </p>
    <p class="error">
        <a href="javascript:window.location.href=window.location.href"><img height="30" src="/Resources/Images/flute.png" alt="flute"></a>
    </p>
</div><?php }
}
