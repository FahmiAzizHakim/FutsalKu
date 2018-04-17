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
                            {foreach from=$get_booking_data item=$row}
                            <tr>
                                <td value='{$row.trx_no}'>{$row.trx_no}</td>
                                <td value='{$row.trx_name}'>{$row.trx_name}</td>
                                <td value='{$row.trx_field_no}'>{$row.trx_field_no}</td>
                                <td value='{$row.trx_of_hours}'>{$row.trx_of_hours}</td>
                                <td value='{$row.trx_grandtotal_price}'>{$row.trx_grandtotal_price}</td>
                                <td value='{$row.trx_booking_price}'>{$row.trx_booking_price}</td>
                                <td value='{$row.trx_grandtotal_price - $row.trx_booking_price}'>{$row.trx_grandtotal_price - $row.trx_booking_price}</td>
                                <td><button id="BtnTrx" type="button" class="btn btn-success active" onclick="AcceptPayment('{$row.trx_no}')"><span class="fa fa-check-square-o"></span></button></td>
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<script >
    
        function AcceptPayment(trx_no){
        var base_url = '{$base_url}';
        {literal}

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
                    {/literal}
                    window.location.replace("{$base_url}pembayaran");
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
                            
                            