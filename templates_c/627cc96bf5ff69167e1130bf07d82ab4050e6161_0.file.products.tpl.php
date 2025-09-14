<?php
/* Smarty version 3.1.47, created on 2022-10-16 05:34:54
  from 'C:\xampp\htdocs\Hoodies\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_634b7bdeded157_86571722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '627cc96bf5ff69167e1130bf07d82ab4050e6161' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies\\templates\\products.tpl',
      1 => 1665891293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b7bdeded157_86571722 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
if(isset(<?php echo $_smarty_tpl->tpl_vars['categ']->value;?>
)){

    if(isset(<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
)){
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            if(($product->id_categoria == $categ->id_categoria) && ($product->tipo == $type)){
                echo "
                    <div class='product'>
                        <img class='product_photo' src='$product->imagen'/>
                        <a href='show/$product->id'> $product->nombre </a>
                        <span>$$product->precio</span>
                    </div>
                ";
            }
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    }else{
        foreach(<?php echo $_smarty_tpl->tpl_vars['products']->value;?>
 as $product){
            if($product->id_categoria == $categ->id_categoria){
                echo "
                    <div class='product'>
                        <img class='product_photo' src='$product->imagen'/>
                        <a href='show/$product->id'> $product->nombre </a>
                        <span>$$product->precio</span>
                    </div>
                ";
            }
        }
    }

}else{
    foreach(<?php echo $_smarty_tpl->tpl_vars['products']->value;?>
 as $product){
        echo "
                    <div class='product'>
                        <img class='product_photo' src='$product->imagen'/>
                        <a href='show/$product->id'> $product->nombre </a>
                        <span>$$product->precio</span>
                    </div>
                ";
    } 
}
<?php echo '?>';
}
}
