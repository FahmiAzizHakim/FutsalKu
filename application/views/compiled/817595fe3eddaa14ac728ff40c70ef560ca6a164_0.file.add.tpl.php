<?php
/* Smarty version 3.1.30, created on 2018-04-03 15:50:15
  from "C:\xampp\htdocs\FutsalKu\application\modules\transaksi\views\toko\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac3869730fc00_99832897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '817595fe3eddaa14ac728ff40c70ef560ca6a164' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\transaksi\\views\\toko\\add.tpl',
      1 => 1522657285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac3869730fc00_99832897 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Dagangan</h3>
            <form role="form">
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <select name="field_type" class="form-control select">
                    <option></option>
                    <option value="GDTFOD">Makanan</option>
                    <option value="GDTDRK">Minuman</option>
                    <option value="GDTDSCK">Snack/Jajanan</option>
                    <option value="GDTEQP">Peralatan Futsal</option>
                    <option value="GDTOTH">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input name="field_name" type="number" class="form-control"/>
                    </select>
                </div>
                <div class="form-group">
                    <label>Aktif Status</label>
                    <select name="active_status" class="form-control select">
                    <option value="ACTOK">Aktif</option>
                    <option value="ACTNA">Non Aktif</option>
                    </select>
                </div>
                <button type="button" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </form>

        </div>
    </div>
</div><?php }
}
