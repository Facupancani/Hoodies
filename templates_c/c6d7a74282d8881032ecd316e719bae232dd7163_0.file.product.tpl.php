<?php
/* Smarty version 3.1.47, created on 2022-11-11 18:22:23
  from 'C:\xampp\htdocs\Hoodies_API\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_636e84cfe18967_79867964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6d7a74282d8881032ecd316e719bae232dd7163' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies_API\\templates\\product.tpl',
      1 => 1668028420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e84cfe18967_79867964 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='prodct_solo_container'>

            <img class='product_photo_solo' src='<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
'/>
            
            <div class='product_info'>
            <p> <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 </p>
            <p><?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
 </p>
            <p> Talles: </p>
            <div class='talles'>
                <div class='talle'>XS</div>
                <div class='talle'>S</div>
                <div class='talle'>M</div>
                <div class='talle'>L</div>
                <div class='talle'>XL</div>
            </div>
            <input class='log_button' value="Comprar" type='submit'>
            
            <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
                    <a href='getEdit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'><img class='config' src='images/icons/edit.png'/>Editar</a>
                    <a href='delete/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'><img class='config' src='images/icons/bin.png'/>Eliminar</a>
            <?php }?>
            </div>
</div>
</div>
        <?php }
}
