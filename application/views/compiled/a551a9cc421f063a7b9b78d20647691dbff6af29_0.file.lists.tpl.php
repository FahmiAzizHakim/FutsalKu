<?php
/* Smarty version 3.1.30, created on 2018-04-03 12:14:07
  from "C:\xampp\htdocs\FutsalKu\application\modules\masterdata\views\merchant_goods\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac353ef2d1e95_79432237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a551a9cc421f063a7b9b78d20647691dbff6af29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\masterdata\\views\\merchant_goods\\lists.tpl',
      1 => 1522657285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac353ef2d1e95_79432237 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
masterdata/merchant_goods/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="110px">Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barangn</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AQUABSR</td>
                                <td>Aqua Botol Besar</td>
                                <td>Minuman</td>
                                <td>5.000,00</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>PCRSDG</td>
                                <td>Pocari Sweat Sedang</td>
                                <td>Minuman</td>
                                <td>6.000,00</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>MNMMZN</td>
                                <td>Mizone</td>
                                <td>Minuman</td>
                                <td>6.000,00</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
                            
                            <?php }
}
