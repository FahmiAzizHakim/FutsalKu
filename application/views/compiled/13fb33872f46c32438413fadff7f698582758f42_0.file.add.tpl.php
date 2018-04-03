<?php
/* Smarty version 3.1.30, created on 2018-04-03 15:28:54
  from "C:\xampp\htdocs\FutsalKu\application\modules\booking\views\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac381968b2fb3_98429278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13fb33872f46c32438413fadff7f698582758f42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\booking\\views\\add.tpl',
      1 => 1522761023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac381968b2fb3_98429278 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Booking</h3>
            <form role="form">
                <div class="form-group">
	                <label>Nomer Lapangan</label>
	                <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Nomer HP</label>
                    <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="field_name"type="text" class="form-control"/>
                </div>                
            </form>
            <br>
            <div>
            <button type="button" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
            <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </div>
        </div>
    </div>
</div><?php }
}
