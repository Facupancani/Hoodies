<?php
/* Smarty version 3.1.47, created on 2022-10-11 23:40:34
  from 'C:\xampp\htdocs\Web2\Hoodies\templates\productForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6345e2d2db2d34_56695375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b68f02cd151fac0f6f2653335c1a45055107410e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Hoodies\\templates\\productForm.tpl',
      1 => 1665509834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6345e2d2db2d34_56695375 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

Ingrese los datos del producto
<form action='<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
' id='product_upload' method='POST' enctype='multipart/form-data'>
    <label for='name'>Nombre</label>
    <input name='name' type='text'>
    
    <label for='price'>Precio</label>
    <input name='price' type='text'>
    
    <label for='categorie'>Categorias</label>
    <input name='categorie' type='text'>

    <label for='input_name' style='cursor: pointer;'>Upload Image</label>
    <input type="file" name="input_name" id="imageToUpload">

    <input type='submit'>
</form><?php }
}
