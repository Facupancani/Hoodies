<?php
/* Smarty version 3.1.47, created on 2022-11-05 18:22:33
  from 'C:\xampp\htdocs\Hoodies\templates\categorieList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63669bd91ae0b5_12407923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f99b15f1b2b1f0121b30830f310c20ebba3bcab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies\\templates\\categorieList.tpl',
      1 => 1667668950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63669bd91ae0b5_12407923 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="categorieList">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
        <div>
            <a href="store/<?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre;?>
</a>
            <a href="editCategorie/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
">editar</a>
            <a href="deleteCategorie/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
">eliminar</a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

   <a href='newCategorie'>Añadir categoria</a>
</div><?php }
}
