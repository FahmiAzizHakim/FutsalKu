<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Lapangan</h3>
            <form role="form">
                <div class="form-group">
	                <label>Nama Lapangan</label>
	                <input id="field_name" name="field_name" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>No Lapangan</label>
                    <input id="field_no" name="field_no" type="text" class="form-control" value="{$field_no}" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label>Ruangan</label>
                    <select id="field_room" name="field_room" class="form-control select">
                    <option></option>
                    {foreach from=$field_room item=row}
                        <option value="{$row.code_code}">{$row.code_name}</option>
                    {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Lapangan</label>
                    <select id="field_type" name="field_type" class="form-control select">
                    <option></option>
                    {foreach from=$field_type item=row}
                        <option value="{$row.code_code}">{$row.code_name}</option>
                    {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label>Disediakan Bola</label>
                    <select id="field_ball" name="field_ball" class="form-control select">
                    <option value="OPTYS">Ya</option>
                    <option value="OPTNO">Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Aktif Status</label>
                    <select id="activestatus" name="activestatus" class="form-control select">
                    <option value="ATSAC">Aktif</option>
                    <option value="ATSNA">Non Aktif</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga Booking</label>
                    <input id="field_book_price" name="field_book_price" type="number" class="form-control" placeholder="Harga Booking">
                </div>
                
            </form>

        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        	<h3>Harga</h3>
        	<div class="form-inline" role="form">
                <div class="form-group">
                    <label class="sr-only">Hari</label>
                    <select name="price_timefrom"class="form-control select" placeholder="Dari Jam" style="width:200px;">
                    <option>Hari</option>
                    {foreach from=$day_type item=row}
                        <option value="{$row.code_code}">{$row.code_name}</option>
                    {/foreach}
                    </select>
                </div>
            	<div class="form-group">
                    <label class="sr-only">Dari Pukul</label>
                    <select name="price_timefrom"class="form-control select" placeholder="Dari Jam" style="width:200px;">
                    <option>Dari Pukul</option>
                    <option value="1">01.00</option>
                    <option value="2">02.00</option>
                    <option value="3">03.00</option>
                    <option value="4">04.00</option>
                    <option value="5">05.00</option>
                    <option value="6">06.00</option>
                    <option value="7">07.00</option>
                    <option value="8">08.00</option>
                    <option value="9">09.00</option>
                    <option value="10">10.00</option>
                    <option value="11">11.00</option>
                    <option value="12">12.00</option>
                    <option value="13">13.00</option>
                    <option value="14">14.00</option>
                    <option value="15">15.00</option>
                    <option value="16">16.00</option>
                    <option value="17">17.00</option>
                    <option value="18">18.00</option>
                    <option value="19">19.00</option>
                    <option value="20">20.00</option>
                    <option value="21">21.00</option>
                    <option value="22">22.00</option>
                    <option value="23">23.00</option>
                    <option value="24">24.00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="sr-only">Sampai Pukul</label>
                    <select name="price_timefrom" class="form-control select" placeholder="Sampai Jam" style="width:200px;">
                    <option>Sampai Pukul</option>
                    <option value="1">01.00</option>
                    <option value="2">02.00</option>
                    <option value="3">03.00</option>
                    <option value="4">04.00</option>
                    <option value="5">05.00</option>
                    <option value="6">06.00</option>
                    <option value="7">07.00</option>
                    <option value="8">08.00</option>
                    <option value="9">09.00</option>
                    <option value="10">10.00</option>
                    <option value="11">11.00</option>
                    <option value="12">12.00</option>
                    <option value="13">13.00</option>
                    <option value="14">14.00</option>
                    <option value="15">15.00</option>
                    <option value="16">16.00</option>
                    <option value="17">17.00</option>
                    <option value="18">18.00</option>
                    <option value="19">19.00</option>
                    <option value="20">20.00</option>
                    <option value="21">21.00</option>
                    <option value="22">22.00</option>
                    <option value="23">23.00</option>
                    <option value="24">24.00</option>
                    </select>
                </div>
                <div class="form-group">
	                <label class="sr-only">Harga</label>
	                <input class="form-control" type="number" placeholder="Harga" style="width:200px;"/>
                </div>                                    
                <button type="submit" class="btn btn-info btn-condensed"><span class="fa fa-plus"></span></button>
            </div>
            <div class="table-responsive">
                <table class="table datatable_simple">
                  	<thead>
                     	<tr>
                        	<th width="20px">No</th>
                            <th>Hari</th>
                        	<th>Dari Jam</th>
                        	<th>Sampai Jam</th>
                        	<th>Harga</th>
                        	<th>Action</th>
                     	</tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Senin - Jumat</td>
                            <td>08.00</td>
                            <td>24.00</td>
                            <td>150000</td>
                            <td><button type="button" class="btn btn-danger active"><span class="fa fa-trash"></span>Hapus</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Senin - Jumat</td>
                            <td>08.00</td>
                            <td>24.00</td>
                            <td>150000</td>
                            <td><button type="button" class="btn btn-danger active"><span class="fa fa-trash"></span>Hapus</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Senin - Jumat</td>
                            <td>08.00</td>
                            <td>24.00</td>
                            <td>150000</td>
                            <td><button type="button" class="btn btn-danger active"><span class="fa fa-trash"></span>Hapus</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
            <button type="button" id="BtnSubmit" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
            <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    {literal}
    $("#BtnSubmit").click(function(){
    {/literal}
        var api_url = '{$api_url}';
    {literal}
        if($("#field_name").val() == ""){
            alert("Nama Lapangan Harus Diisi");
            $("#field_name").focus();
            return false;
        };
        if($("#field_room").val() == ""){
            alert("Ruangan Lapangan Harus Diisi");
            $("#field_room").focus();
            return false;
        };
        if($("#field_type").val() == ""){
            alert("Tipe Lapangan Harus Diisi");
            $("#field_type").focus();
            return false;
        };
        if($("#field_ball").val() == ""){
            alert("Bola Harus Diisi");
            $("#field_ball").focus();
            return false;
        };
        if($("#field_book_price").val() == ""){
            alert("Harga Lapangan Harus Diisi");
            $("#field_book_price").focus();
            return false;
        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: api_url + "Master_data/field_insert",
            dataType: "json",
            data: { field_name : $("#field_name").val(),
                    field_no : $("#field_no").val(),
                    field_room : $("#field_room").val(),
                    field_type : $("#field_type").val(),
                    field_ball : $("#field_ball").val(),
                    field_book_price : $("#field_book_price").val(),
                    activestatus : $("#activestatus").val(),
                    created_by : 'Fahmi',
                    company_code : 'RDCNT' },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();
                alert(data.status);

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}masterdata/lapangan");
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

</script>