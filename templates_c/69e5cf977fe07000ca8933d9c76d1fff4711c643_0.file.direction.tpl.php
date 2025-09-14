<?php
/* Smarty version 3.1.47, created on 2025-09-13 22:22:56
  from 'C:\xampp\htdocs\Hoodies\templates\direction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_68c5d2a05fe388_96320223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e5cf977fe07000ca8933d9c76d1fff4711c643' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies\\templates\\direction.tpl',
      1 => 1668140180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c5d2a05fe388_96320223 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id='rute'>
            <img id='back' src='images/icons/arrowBack.png'/>
            <a href='#'>Atras</a>
            <a href='home' class='selectionable'>Inicio</a>
            <span>/</span>
            <a href='store/' class='selectionable'>Productos</a>
            <span>/</span>
            

        <?php if ($_smarty_tpl->tpl_vars['dispCat']->value == TRUE) {?>
            
            <a href='store/<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
' class='selectionable'><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</a>
            
            <?php if ($_smarty_tpl->tpl_vars['dispType']->value == TRUE) {?>
                <span>/</span>
                <span><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</span>
            <?php }?>
            
            </div>
        <?php } else { ?>
                <a href='' class='selectionable'>Todos los productos</a>
                </div>
        <?php }
}
}
