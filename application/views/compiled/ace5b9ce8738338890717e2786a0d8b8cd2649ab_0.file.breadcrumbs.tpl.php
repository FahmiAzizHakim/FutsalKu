<?php
/* Smarty version 3.1.30, created on 2018-01-26 09:42:47
  from "D:\www\gitlab\AdminPage\application\views\breadcrumbs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6aea07d4d3f4_89879683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ace5b9ce8738338890717e2786a0d8b8cd2649ab' => 
    array (
      0 => 'D:\\www\\gitlab\\AdminPage\\application\\views\\breadcrumbs.tpl',
      1 => 1507924316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6aea07d4d3f4_89879683 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
'assessment/index">Beranda</a></li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['text'];?>
</a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ol><?php }
}
