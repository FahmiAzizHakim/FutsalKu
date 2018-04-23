<?php
/* Smarty version 3.1.30, created on 2018-04-20 10:22:29
  from "C:\xampp\htdocs\FutsalKu\application\modules\booking\views\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad9a34539f2e9_22762330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a7b58fd667a6214e307f5c4dfff87a42dce883b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\booking\\views\\lists.tpl',
      1 => 1524208573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad9a34539f2e9_22762330 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
booking/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="110px">Nomor Booking</th>
                            <th>Nama Pelanggan</th>
                            <th>Jam Booking</th>
                            <th>Durasi</th>
                            <th>Status</th>
                            <th align="center">Action</th>
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
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_messages_hour'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['trx_messages_hour'];?>
</td>
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_of_hours'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['trx_of_hours'];?>
</td>
                                <td value='<?php echo $_smarty_tpl->tpl_vars['row']->value['activestatus'];?>
'><?php echo $_smarty_tpl->tpl_vars['row']->value['activestatus_name'];?>
</td>
                                <td><button id="BtnTrx" type="button" class="btn btn-danger active" onclick="VoidBooking('<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_no'];?>
')"><span class="glyphicon glyphicon-remove">Batal</span></button><button id="BtnTrx" type="button" class="btn btn-info active" onclick="EditBooking('<?php echo $_smarty_tpl->tpl_vars['row']->value['trx_no'];?>
')"><span class="fa fa-edit">Edit</span></button></td>
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
api_url = '<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
';
base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';   
        function VoidBooking(trx_no){
        
        

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnTrx").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: api_url + "Booking_data/trx_void",
            dataType: "json",
            data: { param_no : trx_no,
                    user_name : $("#s_user_name").val() },
            success: function(data) {
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    
                    window.location.replace("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
booking");
                    
                }
                else
                {
                    alert("Data Gagal Diproses, Harap Hubungin Call Center");
                }

            }
        });
        
        }

        function EditBooking(trx_no){
            window.location = base_url + 'booking/edit?trx_no=' + trx_no;
        }
<?php echo '</script'; ?>
>
                            
                            <?php }
}
