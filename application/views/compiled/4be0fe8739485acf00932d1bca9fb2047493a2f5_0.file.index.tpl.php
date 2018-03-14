<?php
/* Smarty version 3.1.30, created on 2018-03-11 18:34:07
  from "D:\www\gitlab\FutsalKu\application\modules\masterdata\views\main_data\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa5688fa83b41_27244977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4be0fe8739485acf00932d1bca9fb2047493a2f5' => 
    array (
      0 => 'D:\\www\\gitlab\\FutsalKu\\application\\modules\\masterdata\\views\\main_data\\index.tpl',
      1 => 1520789645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa5688fa83b41_27244977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Utama</h3>
            <form role="form">
                <div class="form-group">
	                <label>Nama Tempat Futsal</label>
	                <input name="futsal_name"type="text" class="form-control" value="Palad Futsal" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label>Nama Pemilik Lapangan</label>
                    <input name="futsal_owner"type="text" class="form-control" value="John Doe" readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label>Daerah</label>
                    <input name="futsal_place"type="text" class="form-control" value="Pulogadung" readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="futsal_address" class="form-control" value="Pasar Palad, Pulogadung" readonly="readonly">
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="futsal_email" type="text" class="form-control" value="palad@test.com" readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label>No. Telp 1</label>
                    <input name="futsal_phone1" type="number" class="form-control" value="0212213213" readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label>No. Telp 2</label>
                    <input name="futsal_phone2" type="number" class="form-control" value="1231231" readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label>Jam Buka</label>
                    <select name="price_timefrom"class="form-control select" placeholder="Dari Jam" style="width:200px;">
                        <option value="1">01.00</option>
                        <option value="2">02.00</option>
                        <option value="3">03.00</option>
                        <option value="4">04.00</option>
                        <option value="5">05.00</option>
                        <option value="6">06.00</option>
                        <option value="7">07.00</option>
                        <option value="8">08.00</option>
                        <option value="9">09.00</option>
                        <option value="10">10.00</option>
                        <option value="11">11.00</option>
                        <option value="12">12.00</option>
                        <option value="13">13.00</option>
                        <option value="14">14.00</option>
                        <option value="15">15.00</option>
                        <option value="16">16.00</option>
                        <option value="17">17.00</option>
                        <option value="18">18.00</option>
                        <option value="19">19.00</option>
                        <option value="20">20.00</option>
                        <option value="21">21.00</option>
                        <option value="22">22.00</option>
                        <option value="23">23.00</option>
                        <option value="24">24.00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jam Tutup</label>
                    <select name="price_timefrom"class="form-control select" placeholder="Dari Jam" style="width:200px;">
                        <option value="1">01.00</option>
                        <option value="2">02.00</option>
                        <option value="3">03.00</option>
                        <option value="4">04.00</option>
                        <option value="5">05.00</option>
                        <option value="6">06.00</option>
                        <option value="7">07.00</option>
                        <option value="8">08.00</option>
                        <option value="9">09.00</option>
                        <option value="10">10.00</option>
                        <option value="11">11.00</option>
                        <option value="12">12.00</option>
                        <option value="13">13.00</option>
                        <option value="14">14.00</option>
                        <option value="15">15.00</option>
                        <option value="16">16.00</option>
                        <option value="17">17.00</option>
                        <option value="18">18.00</option>
                        <option value="19">19.00</option>
                        <option value="20">20.00</option>
                        <option value="21">21.00</option>
                        <option value="22">22.00</option>
                        <option value="23">23.00</option>
                        <option value="24">24.00</option>
                    </select>
                </div>
                <button type="button" class="btn btn-info active"><span class="fa fa-edit"></span>Edit</button>
            </form>
        </div>
    </div>
</div><?php }
}
