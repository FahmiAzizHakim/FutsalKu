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
                            <th align="center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            {foreach from=$get_booking_data item=$row}
                            <tr>
                                <td value='{$row.trx_no}'>{$row.trx_no}</td>
                                <td value='{$row.trx_name}'>{$row.trx_name}</td>
                                <td value='{$row.trx_messages_hour}'>{$row.trx_messages_hour}</td>
                                <td value='{$row.trx_of_hours}'>{$row.trx_of_hours}</td>
                                <td value='{$row.activestatus}'>{$row.activestatus_name}</td>
                                <td><button id="BtnTrx" type="button" class="btn btn-danger active" onclick="VoidBooking('{$row.trx_no}')"><span class="glyphicon glyphicon-remove">Batal</span></button><button id="BtnTrx" type="button" class="btn btn-info active" onclick="EditBooking('{$row.trx_no}')"><span class="fa fa-edit">Edit</span></button></td>
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<script >
api_url = '{$api_url}';
base_url = '{$base_url}';   
        function VoidBooking(trx_no){
        
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
                $("#noty_topCenter_layout_container").remove();

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

        function EditBooking(trx_no){
            window.location = base_url + 'booking/edit?trx_no=' + trx_no;
        }
</script>
                            
                            