<?php
/* Smarty version 3.1.47, created on 2022-10-13 21:20:41
  from 'C:\xampp\htdocs\Web2\Hoodies\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63486509a7ab64_53633155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d3465b367a06126824208d14d7e380ec831e1d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Hoodies\\templates\\productos.tpl',
      1 => 1665688832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63486509a7ab64_53633155 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul id='products_container'>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <li class='product'>
            <p><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</p>
            <img src="data:image/products/jpeg;base64,'.base64_encode($product->imagen).'"/>
            <div class="buttonsContainer">
                <a href='getEdit/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'><img src="images/edit.png"></a>
                <a href='delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'><img src="images/bin.png"></a>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <li class='product'>
        <a href='getLoad'>AÑADIR HOODIE</a>
        <p>+</p>
    </li>
    
</ul>
<?php }
}
