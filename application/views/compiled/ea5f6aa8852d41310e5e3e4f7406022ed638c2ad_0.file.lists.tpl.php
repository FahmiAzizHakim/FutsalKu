<?php
/* Smarty version 3.1.30, created on 2018-04-04 15:27:59
  from "C:\xampp\htdocs\FutsalKu\application\modules\transaksi\views\toko\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac4d2dfca18f4_96288778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea5f6aa8852d41310e5e3e4f7406022ed638c2ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\transaksi\\views\\toko\\lists.tpl',
      1 => 1522848479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac4d2dfca18f4_96288778 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
transaksi/toko/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="110px">Kode Transaksi</th>
                            <th>Jumlah Biaya</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TK1</td>
                                <td>10.000</td>
                                <td>1/4/2018</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>TK2</td>
                                <td>15.000</td>
                                <td>1/4/2018</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>TK3</td>
                                <td>10.000</td>
                                <td>1/4/2018</td>
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
