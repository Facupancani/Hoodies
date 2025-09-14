<?php
/* Smarty version 3.1.47, created on 2022-10-17 02:59:16
  from 'C:\xampp\htdocs\Hoodies\templates\subnav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_634ca8e402f0e0_95478526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53fc94f74bd485014d596bb093d55cc660e1075d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Hoodies\\templates\\subnav.tpl',
      1 => 1665968354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ca8e402f0e0_95478526 (Smarty_Internal_Template $_smarty_tpl) {
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
