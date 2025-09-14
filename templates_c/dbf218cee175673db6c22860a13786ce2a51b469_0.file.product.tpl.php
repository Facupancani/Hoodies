<?php
/* Smarty version 3.1.47, created on 2025-09-14 18:45:53
  from 'C:\xampp\htdocs\Hoodies\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_68c6f141f37c93_11893823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbf218cee175673db6c22860a13786ce2a51b469' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies\\templates\\product.tpl',
      1 => 1668358484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c6f141f37c93_11893823 (Smarty_Internal_Template $_smarty_tpl) {
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
