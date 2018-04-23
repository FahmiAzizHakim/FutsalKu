<?php
/* Smarty version 3.1.30, created on 2018-04-17 09:06:32
  from "C:\xampp\htdocs\FutsalKu\application\modules\transaksi\views\pengeluaran\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad59cf8c5ce61_21229615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15dfe126dd6d9fed66a48f92a337a58f6bc667ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\transaksi\\views\\pengeluaran\\lists.tpl',
      1 => 1523872036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad59cf8c5ce61_21229615 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
transaksi/pengeluaran/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="110px">Kode Pengeluaran</th>
                            <th>Keperluan</th>
                            <th>Nominal</th>
                            <th>Jenis Pembayaran</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PK01</td>
                                <td>Pembayaran Bola Futsal</td>
                                <td>1.000.000</td>
                                <td>BANK</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>PK01</td>
                                <td>Pembayaran Rumput Sintetis</td>
                                <td>500.000</td>
                                <td>BANK</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>PK01</td>
                                 <td>Pembayaran Rumput Sintetis</td>
                                <td>500.000</td>
                                <td>CASH</td>
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
