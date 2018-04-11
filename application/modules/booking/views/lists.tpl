<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="{$base_url}booking/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
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
                            <th>Void</th>
                        </tr>
                        </thead>
                        <tbody>
                            {foreach from=$get_booking_data item=$row}
                            <tr>
                                <td value='{$row.trx_no}'>{$row.trx_no}</td>
                                <td value='{$row.trx_name}'>{$row.trx_name}</td>
                                <td value='{$row.trx_messages_hour}'>{$row.trx_messages_hour}</td>
                                <td value='{$row.trx_of_hours}'>{$row.trx_of_hours}</td>
                                <td value='{$row.activestatus}'>{$row.activestatus}</td>
                                <td><button id="BtnTrx" type="button" class="btn btn-danger active" onclick="VoidBooking('{$row.trx_no}')"><span class="glyphicon glyphicon-remove"></span></button></td>
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<script >
    
        function VoidBooking(trx_no){
        var api_url = '{$api_url}';
        {literal}

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnTrx").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: api_url + "Booking_data/trx_void",
            dataType: "json",
            data: { param_no : trx_no,
                    user_name : $("#s_user_name").val() },
            success: function(data) {
                // $("#BtnSubmit").removeAttr("disabled");
                // $("#BtnCancel").removeAttr("disabled");
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
        {/literal}
        }
</script>
                            
                            