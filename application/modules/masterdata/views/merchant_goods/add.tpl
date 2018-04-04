<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Dagangan</h3>
            <form role="form">
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input name="field_code"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <select name="field_type" class="form-control select">
                    <option></option>
                    <option value="GDTFOD">Makanan</option>
                    <option value="GDTDRK">Minuman</option>
                    <option value="GDTDSCK">Snack/Jajanan</option>
                    <option value="GDTEQP">Peralatan Futsal</option>
                    <option value="GDTOTH">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input name="field_price" type="number" class="form-control"/>
                    </select>
                </div>
                <div class="form-group">
                    <label>Aktif Status</label>
                    <select name="active_status" class="form-control select">
                    <option value="ACTOK">Aktif</option>
                    <option value="ACTNA">Non Aktif</option>
                    </select>
                </div>
                <button type="button" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </form>

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