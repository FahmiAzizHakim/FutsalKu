<?php
/* Smarty version 3.1.30, created on 2018-04-03 14:52:44
  from "C:\xampp\htdocs\FutsalKu\application\modules\masterdata\views\lapangan\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac3791cdee2d3_62856925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a5fbd0723942d3e0d07f85805d1802860356959' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\masterdata\\views\\lapangan\\add.tpl',
      1 => 1522657285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac3791cdee2d3_62856925 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_room']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['code_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['code_name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Lapangan</label>
                    <select name="field_type" class="form-control select">
                    <option></option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_type']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['code_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['code_name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div class="form-group">
                    <label>Disediakan Bola</label>
                    <select name="field_ball" class="form-control select">
                    <option value="OPTYS">Ya</option>
                    <option value="OPTNO">Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Aktif Status</label>
                    <select name="activestatus" class="form-control select">
                    <option value="ATSAC">Aktif</option>
                    <option value="ATSNA">Non Aktif</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga Booking</label>
                    <input name="field_book_price" type="number" class="form-control" placeholder="Harga Booking">
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['day_type']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['code_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['code_name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
            	<div class="form-group">
                    <label class="sr-only">Dari Pukul</label>
                    <select name="price_timefrom"class="form-control select" placeholder="Dari Jam" style="width:200px;">
                    <option>Dari Pukul</option>
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
                    <label class="sr-only">Sampai Pukul</label>
                    <select name="price_timefrom" class="form-control select" placeholder="Sampai Jam" style="width:200px;">
                    <option>Sampai Pukul</option>
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
	                <label class="sr-only">Harga</label>
	                <input class="form-control" type="number" placeholder="Harga" style="width:200px;"/>
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
