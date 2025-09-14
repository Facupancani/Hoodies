<?php
/* Smarty version 3.1.47, created on 2022-11-07 19:43:39
  from 'C:\xampp\htdocs\Hoodies_API\templates\store.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_636951db65c5e1_82255807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '758533831691562e3f458bdfae197c954e8f35f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies_API\\templates\\store.tpl',
      1 => 1667779676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636951db65c5e1_82255807 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['admin']->value == TRUE) {?>
    <div>
        <a href='categorias'> Editar categorias</a>
    </div>
<?php }?>

<ul id='products_container'>

        <?php if ($_smarty_tpl->tpl_vars['dispCat']->value == TRUE) {?>

            <?php if ($_smarty_tpl->tpl_vars['dispType']->value == TRUE) {?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->id_categoria == $_smarty_tpl->tpl_vars['idCat']->value && $_smarty_tpl->tpl_vars['product']->value->tipo == $_smarty_tpl->tpl_vars['type']->value) {?>
                        <div class='product'>
                            <a href='show/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>
                            <img class='product_photo' src='<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
'/></a>
                            <span> <?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
 </span>
                            <span>$<?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</span>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

            <?php } elseif ($_smarty_tpl->tpl_vars['dispType']->value == FALSE) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->id_categoria == $_smarty_tpl->tpl_vars['idCat']->value) {?>
                        <div class='product'>
                            <img class='product_photo' src='<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
'/>
                            <a href='show/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'> <?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
 </a>
                            <span>$<?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</span>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['dispCat']->value == FALSE) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <div class='product'>
                            <img class='product_photo' src='<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
'/>
                            <a href='show/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'> <?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
 </a>
                            <span>$<?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</span>
                        </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['admin']->value == TRUE) {?>
                <li class='add_product'>
                    <a href='getLoad'>AÑADIR PRODUCTO</a>
                    <p>+</p>
                </li>
        <?php }?>
        
</ul><?php }
}
