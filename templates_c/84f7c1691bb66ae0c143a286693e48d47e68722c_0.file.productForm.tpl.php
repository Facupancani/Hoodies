<?php
/* Smarty version 3.1.47, created on 2022-10-31 19:05:27
  from 'C:\xampp\htdocs\Hoodies\templates\productForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63600e676274c6_34549941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84f7c1691bb66ae0c143a286693e48d47e68722c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies\\templates\\productForm.tpl',
      1 => 1667238022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63600e676274c6_34549941 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="up_wrapper">

<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

Ingrese los datos del producto
<form action='<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
' id='product_upload' method='POST' enctype='multipart/form-data'>

<div id="prod_wrapper">
    <label class="log_label" for='name'>Nombre</label>
    <input class="product_input" name='name' type='text' value='<?php echo $_smarty_tpl->tpl_vars['valName']->value;?>
'>
    
    <label class="log_label" for='price'>Precio</label>
    <input class="product_input" name='price' type='text' value='<?php echo $_smarty_tpl->tpl_vars['valPrice']->value;?>
'>
    
    <label class="log_label" for='categorie'>Categorias</label>
    <input class="product_input" name='categorie' type='text' value='<?php echo $_smarty_tpl->tpl_vars['valCat']->value;?>
'>

    <div>
    <label for="Hombre">Hombre</label>
    <input type="radio" id="Hombre" name="Type" value="hombre">
    
    <label for="Mujer">Mujer</label>
    <input type="radio" id="Mujer" name="Type" value="mujer">

    <label for="Niño">Niño</label>
    <input type="radio" id="Niño" name="Type" value="niño">
    </div>

    <label class="log_label" for='input_name' style='cursor: pointer;'>Upload Image</label>
    <input class="" type="file" name="input_name" id="imageToUpload" value='<?php echo $_smarty_tpl->tpl_vars['valImg']->value;?>
'>

    <input class="product_button" type='submit'>
</div>
</form>
</div><?php }
}
