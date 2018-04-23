<?php
/* Smarty version 3.1.30, created on 2018-04-20 10:20:47
  from "C:\xampp\htdocs\FutsalKu\application\modules\transaksi\views\pembayaran\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad9a2df4f9d21_09460865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03f0157b36539d381284e1bddc03b61119108854' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\transaksi\\views\\pembayaran\\lists.tpl',
      1 => 1524212278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad9a2df4f9d21_09460865 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <h3>Pelunasan Transaksi</h3>
            <br/>    
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="110px">No. Transaksi</th>
                            <th>Atas Nama</th>
                            <th>Lapangan</th>
                            <th>Durasi</th>
                            <th>Total Biaya</th>
                            <th>Sudah Dibayar</th>
                            <th>Sisa Dibayar</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['get_booking_data']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_no'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['trx_no'];?>
</td>
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_name'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['trx_name'];?>
</td>
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_field_no'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['trx_field_no'];?>
</td>
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_of_hours'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['trx_of_hours'];?>
</td>
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_grandtotal_price'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['trx_grandtotal_price'];?>
</td>
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_booking_price'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['trx_booking_price'];?>
</td>
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_grandtotal_price']-$_smarty_tpl->tpl_vars['row']->value['trx_booking_price'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['trx_grandtotal_price']-$_smarty_tpl->tpl_vars['row']->value['trx_booking_price'];?>
</td>
                                <td><button id="BtnTrx" type="button" class="btn btn-success active" onclick="AcceptPayment('<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_no'];?>
')"><span class="fa fa-check-square-o"></span></button></td>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<?php echo '<script'; ?>
 >
    
        function AcceptPayment(trx_no){
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';
        

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnTrx").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: base_url + "transaksi/pembayaran/acceptment",
            dataType: "json",
            data: { param_no : trx_no,
                    user_name : $("#s_user_name").val() },
            success: function(data) {
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    
                    window.location.replace("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
pembayaran");
                    
                }
                else
                {
                    alert("Data Gagal Diproses, Harap Hubungin Call Center");
                }

            }
        });
        
        }
<?php echo '</script'; ?>
>
                            
                            <?php }
}
