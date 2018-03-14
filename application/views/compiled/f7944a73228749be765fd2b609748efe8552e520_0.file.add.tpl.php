<?php
/* Smarty version 3.1.30, created on 2018-03-11 18:30:55
  from "D:\www\gitlab\FutsalKu\application\modules\masterdata\views\lapangan\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa567cfcdada7_12362237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7944a73228749be765fd2b609748efe8552e520' => 
    array (
      0 => 'D:\\www\\gitlab\\FutsalKu\\application\\modules\\masterdata\\views\\lapangan\\add.tpl',
      1 => 1520789454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa567cfcdada7_12362237 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Lapangan</h3>
            <form role="form">
                <div class="form-group">
	                <label>Nama Lapangan</label>
	                <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Ruangan</label>
                    <select name="field_room" class="form-control select">
                    <option></option>
                    <option value="FLRIND">Indoor</option>
                    <option value="FLROUT">Outdoor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Lapangan</label>
                    <select name="field_type" class="form-control select">
                    <option></option>
                    <option value="FLTVNL">Vinyl</option>
                    <option value="FLTSTS">Rumput Sintetis</option>
                    <option value="FLTSMN">Semen</option>
                    <option value="FLTPQT">Parquette</option>
                    <option value="FLTTRX">Taraflex</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Disediakan Bola</label>
                    <select name="field_type" class="form-control select">
                    <option value="OPTYS">Ya</option>
                    <option value="OPTNO">Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Aktif Status</label>
                    <select name="active_status" class="form-control select">
                    <option value="ACTOK">Aktif</option>
                    <option value="ACTNA">Non Aktif</option>
                    </select>
                </div>
                
            </form>

        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        	<h3>Harga</h3>
        	<div class="form-inline" role="form">
                <div class="form-group">
                    <label class="sr-only">Hari</label>
                    <select name="price_timefrom"class="form-control select" placeholder="Dari Jam" style="width:200px;">
                    <option>Hari</option>
                    <option value="FLDWKD">Senin - Jumat</option>
                    <option value="FLDWED">Sabtu, Minggu & Hari Libur</option>
                    </select>
                </div>
            	<div class="form-group">
                    <label class="sr-only">Dari Jam</label>
                    <select name="price_timefrom"class="form-control select" placeholder="Dari Jam" style="width:200px;">
                    <option>Dari Jam</option>
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
                    <label class="sr-only">Sampai Jam</label>
                    <select name="price_timefrom" class="form-control select" placeholder="Sampai Jam" style="width:200px;">
                    <option>Sampai Jam</option>
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
	                <label class="sr-only">Harga</label>
	                <input class="form-control" type="text" placeholder="Harga" style="width:200px;"/>
                </div>                                    
                <button type="submit" class="btn btn-info btn-condensed"><span class="fa fa-plus"></span></button>
            </div>
            <div class="table-responsive">
                <table class="table datatable_simple">
                  	<thead>
                     	<tr>
                        	<th width="20px">No</th>
                            <th>Hari</th>
                        	<th>Dari Jam</th>
                        	<th>Sampai Jam</th>
                        	<th>Harga</th>
                        	<th>Action</th>
                     	</tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Senin - Jumat</td>
                            <td>08.00</td>
                            <td>24.00</td>
                            <td>150000</td>
                            <td><button type="button" class="btn btn-danger active"><span class="fa fa-trash"></span>Hapus</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Senin - Jumat</td>
                            <td>08.00</td>
                            <td>24.00</td>
                            <td>150000</td>
                            <td><button type="button" class="btn btn-danger active"><span class="fa fa-trash"></span>Hapus</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Senin - Jumat</td>
                            <td>08.00</td>
                            <td>24.00</td>
                            <td>150000</td>
                            <td><button type="button" class="btn btn-danger active"><span class="fa fa-trash"></span>Hapus</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
            <button type="button" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
            <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </div>
        </div>
    </div>
</div><?php }
}
