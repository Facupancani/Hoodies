<?php
/* Smarty version 3.1.47, created on 2025-09-13 22:22:56
  from 'C:\xampp\htdocs\Hoodies\templates\categorieNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_68c5d2a053abd5_08126203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '761ccd03b9318308e05b1e3a6f6afefa22bfe61b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies\\templates\\categorieNav.tpl',
      1 => 1668140180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c5d2a053abd5_08126203 (Smarty_Internal_Template $_smarty_tpl) {
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
