<?php
/* Smarty version 3.1.30, created on 2018-04-17 09:59:19
  from "C:\xampp\htdocs\FutsalKu\application\modules\booking\views\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5a9576e36d0_26935163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13fb33872f46c32438413fadff7f698582758f42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\booking\\views\\add.tpl',
      1 => 1523945185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad5a9576e36d0_26935163 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Booking</h3>
            <form role="form">
                <div class="form-group">
                    <label>Id Player</label>
                    <input id="trx_id_player" name="trx_id_player" type="text" class="form-control"/>
                </div>
                <div class="form-group">
	                <label>Nomor Transaksi</label>
	                <input id="trx_no" name="trx_no" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input id="trx_name" name="trx_name" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Nomer HP</label>
                    <input id="trx_phone_number" name="trx_phone_number" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input id="trx_email" name="trx_email" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Nomor Lapangan</label>
                    <select  id="trx_field_no" name="trx_field_no" class="form-control select" style="width:200px;">
                        <option></option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['get_field_no']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['field_no'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div class="form-group">
                    <label>Jam Booking</label>
                    <input id="trx_messages_hour" name="trx_messages_hour" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Durasi</label>
                    <input id="trx_of_hours" name="trx_of_hours" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Biaya Booking</label>
                    <input id="trx_booking_price" name="trx_booking_price" class="form-control"/>
                </div>     
                <div class="form-group">
                    <label>Total</label>
                    <input id="trx_grandtotal_price" name="trx_grandtotal_price" class="form-control"/>
                </div>                 
            </form>
            <br>
            <div>
            <button type="button" id="BtnSubmit" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
booking"><button type="button" id="BtnCancel" class="btn btn-danger active"><span class="fa fa-undo"></span>Cancel</button></a>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var field_no = "<?php echo $_smarty_tpl->tpl_vars['field_no']->value;?>
";
    var date = "<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
";

    
    //set val
    $("#trx_no").val(field_no);
    $("#trx_messages_hour").val(date);
    //set attr
    $("#trx_no").attr('readonly', 'readonly');
    $("#trx_of_hours").attr('type', 'number');
    $("#trx_booking_price").attr('type', 'number');
    $("#trx_grandtotal_price").attr('type', 'number');
    $("#trx_messages_hour").attr('type', 'time');
    

    $("#trx_id_player").focusout(function(){
        alert("id belum terdaftar");
        $("#trx_id_player").val('');
    });

    

    $("#BtnSubmit").click(function(){
        
    
        var api_url = '<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
';
    
        if($("#trx_name").val() == ""){
            alert("Nama Pelanggan Harus Di Isi");
            $("#trx_name").focus();
            return false;
        };
        if($("#trx_phone_number").val() == ""){
            alert("Nomor HP Harus Di Isi");
            $("#trx_phone_number").focus();
            return false;
        };
        if($("#trx_email").val() == ""){
            alert("Email Harus Diisi");
            $("#trx_email").focus();
            return false;
        };
        if($("#trx_field_no").val() == ""){
            alert("Nomor Lapangan Harus Di Isi");
            $("#trx_field_no").focus();
            return false;
        };
        if($("#trx_of_hours").val() == ""){
            alert("Durasi Main Harus Diisi");
            $("#trx_of_hours").focus();
            return false;
        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnSubmit").attr("disabled", true);
        $("#BtnCancel").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: api_url + "Booking_data/trx_insert",
            dataType: "json",
            data: { trx_no : $("#trx_no").val(),
                    trx_id_player : $("#trx_id_player").val(),
                    trx_name : $("#trx_name").val(),
                    trx_phone_number : $("#trx_phone_number").val(),
                    trx_email : $("#trx_email").val(),
                    trx_field_no : $("#trx_field_no").val(),
                    trx_messages_hour : $("#trx_messages_hour").val(),
                    trx_of_hours : $("#trx_of_hours").val(),
                    trx_booking_price : $("#trx_booking_price").val(),
                    trx_grandtotal_price : $("#trx_grandtotal_price").val(),
                    activestatus : 'ATSAC',
                    created_by : $("#s_user_name").val(),
                    company_code : $("#s_company_code").val() },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#BtnCancel").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();
                // alert(data.status);

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    
                    window.location.replace("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
booking");
                    window.open("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
booking/print_booking/?trx_no="+trx_no);
                    
                }
                else
                {
                    alert("Data Gagal Diproses, Harap Hubungin Call Center");
                }

            }
        });
    });
    

    $("#trx_field_no").change(function(){
      alert('Lapangan Tersedia');      
    });
<?php echo '</script'; ?>
><?php }
}
