<?php
/* Smarty version 3.1.47, created on 2022-11-07 19:43:39
  from 'C:\xampp\htdocs\Hoodies_API\templates\categorieNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_636951db58f9f5_17577435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e0a4a311abd715f44cfab53fc902e6ad69aa0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies_API\\templates\\categorieNav.tpl',
      1 => 1667776261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636951db58f9f5_17577435 (Smarty_Internal_Template $_smarty_tpl) {
?><subnav id="subnav">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
        <a href="store/<?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre;?>
</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</subnav><?php }
}
