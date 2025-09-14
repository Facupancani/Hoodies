<?php
/* Smarty version 3.1.47, created on 2022-11-05 18:02:10
  from 'C:\xampp\htdocs\Hoodies\templates\categorieForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_636697122e8181_74717346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9045f971588ab4e878ce2b096975c5b82df4e98b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies\\templates\\categorieForm.tpl',
      1 => 1667667726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636697122e8181_74717346 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="up_wrapper">

<h1>Nueva categoria</h1>

Ingrese los datos del producto
<form action='<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
' id='product_upload' method='POST' enctype='multipart/form-data'>

<div id="prod_wrapper">
    <label class="log_label"  for='name'>Nombre de la categoria</label>
    <input class="product_input" value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' name='name' type='text'>
    
    <input class="product_button" type='submit'>
</div>
</form>
</div><?php }
}
