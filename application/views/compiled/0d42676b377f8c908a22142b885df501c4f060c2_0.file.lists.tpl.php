<?php
/* Smarty version 3.1.30, created on 2018-03-09 10:24:39
  from "D:\www\gitlab\FutsalKu\application\modules\masterdata\views\merchant_goods\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa252d7214778_29377005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d42676b377f8c908a22142b885df501c4f060c2' => 
    array (
      0 => 'D:\\www\\gitlab\\FutsalKu\\application\\modules\\masterdata\\views\\merchant_goods\\lists.tpl',
      1 => 1520587477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa252d7214778_29377005 (Smarty_Internal_Template $_smarty_tpl) {
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
