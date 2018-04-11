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
                        {foreach from=$get_field_no item=$row}
                        <option value="{$row.field_id}">{$row.field_no}</option>
                        {/foreach}
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
            </form>
            <br>
            <div>
            <button type="button" id="BtnSubmit" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
            <a href="{$base_url}booking"><button type="button" id="BtnCancel" class="btn btn-danger active"><span class="fa fa-undo"></span>Cancel</button></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var field_no = "{$field_no}";
    var date = "{$date}";

    {literal}
    //set val
    $("#trx_no").val(field_no);
    $("#trx_messages_hour").val(date);
    //set attr
    $("#trx_no").attr('readonly', 'readonly');
    $("#trx_of_hours").attr('type', 'number');
    $("#trx_messages_hour").attr('type', 'time');
    {/literal}

    $("#trx_id_player").focusout(function(){
        alert("id belum terdaftar");
        $("#trx_id_player").val('');
    });

    {literal}

    $("#BtnSubmit").click(function(){
        
    {/literal}
        var api_url = '{$api_url}';
    {literal}
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
                    {/literal}
                    window.location.replace("{$base_url}booking");
                    {literal}
                }
                else
                {
                    alert("Data Gagal Diproses, Harap Hubungin Call Center");
                }

            }
        });
    });
    {/literal}

    $("#trx_field_no").change(function(){
      alert('Lapangan Tersedia');      
    });
</script>