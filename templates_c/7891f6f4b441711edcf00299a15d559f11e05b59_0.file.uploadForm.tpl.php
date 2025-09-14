<?php
/* Smarty version 3.1.47, created on 2022-10-11 19:39:27
  from 'C:\xampp\htdocs\Web2\Hoodies\templates\uploadForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6345aa4fbdc6e6_34730101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7891f6f4b441711edcf00299a15d559f11e05b59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Hoodies\\templates\\uploadForm.tpl',
      1 => 1665509834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6345aa4fbdc6e6_34730101 (Smarty_Internal_Template $_smarty_tpl) {
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
