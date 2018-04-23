<?php
/* Smarty version 3.1.30, created on 2018-04-17 08:12:57
  from "C:\xampp\htdocs\FutsalKu\application\modules\booking\views\print.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad59069be3e92_88528112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b96fdecd50c3286e2291815e8ac0ccbac350e910' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\booking\\views\\print.tpl',
      1 => 1523945185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad59069be3e92_88528112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div align="center" >
        <div class="panel-body" style="width: 50%;">
        <h3 align="center">Tanda Terima Booking</h3>
        <h4 align="center"><?php echo $_smarty_tpl->tpl_vars['get_company_data']->value['company_name'];?>
</h4>
            <form role="form">
                <div class="form-group">
                    <table align="left">
                        <tr>
                            <th width="110px">Nomor Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_no'];?>
</td>
                        </tr>
                        <tr>
                            <th width="110px">Nama Pemasan</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_name'];?>
</td>
                        </tr>
                        <tr>
                            <th width="110px">Nomor pemesan</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_phone_number'];?>
</td>
                        </tr>
                        <tr>
                            <th width="110px">Email</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_email'];?>
</td>
                        </tr>
                        <tr>
                            <th width="110px">Durasi Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_of_hours'];?>
</td>
                        </tr>
                    </table>

                    <table align="right">
                        <tr>
                            <th width="110px">Tanggal Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_date'];?>
</td>
                        </tr>
                        <tr>
                            <th width="110px">Jam Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_messages_hour'];?>
</td>
                        </tr>
                        <tr>
                            <th width="110px">Nomor Lapangan</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_field_no'];?>
</td>
                        </tr>
                        <tr>
                            <th width="110px">Biaya Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_booking_price'];?>
</td>
                        </tr>
                        <tr>
                            <th width="110px">Total Biaya</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['get_single_data']->value['trx_grandtotal_price'];?>
</td>
                        </tr>
                        <tr>
                            <th width="110px">Admin</th>
                            <th width="10px"> : </th>
                            <td width="110px"><?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
</td>
                        </tr>
                    </table>
                </div>
                </br>
                </br>
                </br>
                </br>
                </br>
                <hr>
                <div class="form-group" align="left">
                    <p align="center">TTD</p></br></br>
                    <p align="center">(..................................)</p>
                </div>              
            </form>
            <br>
            <div>
            <button type="button" id="BtnCetak" class="btn btn-success active"><span class="fa fa-check"></span>Cetak</button>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $("#BtnCetak").click(function(){
     window.print();
    });
<?php echo '</script'; ?>
><?php }
}
