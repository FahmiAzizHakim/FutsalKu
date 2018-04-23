<div class="row">
    <div align="center" >
        <div class="panel-body" style="width: 50%;">
        <h3 align="center">Tanda Terima Booking</h3>
        <h4 align="center">{$get_company_data.company_name}</h4>
            <form role="form">
                <div class="form-group">
                    <table align="left">
                        <tr>
                            <th width="110px">Nomor Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_no}</td>
                        </tr>
                        <tr>
                            <th width="110px">Nama Pemasan</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_name}</td>
                        </tr>
                        <tr>
                            <th width="110px">Nomor pemesan</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_phone_number}</td>
                        </tr>
                        <tr>
                            <th width="110px">Email</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_email}</td>
                        </tr>
                        <tr>
                            <th width="110px">Durasi Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_of_hours}</td>
                        </tr>
                    </table>

                    <table align="right">
                        <tr>
                            <th width="110px">Tanggal Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_date}</td>
                        </tr>
                        <tr>
                            <th width="110px">Jam Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_messages_hour}</td>
                        </tr>
                        <tr>
                            <th width="110px">Nomor Lapangan</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_field_no}</td>
                        </tr>
                        <tr>
                            <th width="110px">Biaya Booking</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_booking_price}</td>
                        </tr>
                        <tr>
                            <th width="110px">Total Biaya</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$get_single_data.trx_grandtotal_price}</td>
                        </tr>
                        <tr>
                            <th width="110px">Admin</th>
                            <th width="10px"> : </th>
                            <td width="110px">{$admin}</td>
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
<script type="text/javascript">
    $("#BtnCetak").click(function(){
     window.print();
    });
</script>