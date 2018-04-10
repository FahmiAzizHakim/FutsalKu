<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Dagangan</h3>
            <form role="form">
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input id="field_code" name="field_code" type="text" class="form-control"/>
                    <input id="store_goods_id" type="hidden">
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input id="field_name" name="field_name" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <select id="field_type" class="form-control select">
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
                    <input id="field_price" type="number" class="form-control"/>
                    </select>
                </div>
                <div class="form-group">
                    <label>Aktif Status</label>
                    <select id="activestatus" class="form-control select">
                    <option value="ATSAC">Aktif</option>
                    <option value="ATSNA">Non Aktif</option>
                    </select>
                </div>
                <button id="BtnSubmit" type="button" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript">
var store_goods_id = "{$userdata.store_goods_id}";
var field_code = "{$userdata.store_goods_code}";
var field_name = "{$userdata.store_goods_name}";
var field_type = "{$userdata.atore_goods_type}";
var field_price = "{$userdata.store_goods_price}";
var activestatus = "{$userdata.activestatus}";
var api_url = '{$api_url}';
{literal}
$(function(){
    $("#store_goods_id").val(store_goods_id);
    $("#field_code").val(field_code);
    $("#field_name").val(field_name);
    $("#field_type").val(field_type);
    $("#field_price").val(field_price);
    $("#activestatus").val(activestatus);
});

    $("#BtnSubmit").click(function(){
        if($("#field_code").val() == ""){
            alert("Kode Barang Harus Diisi");
            $("#field_code").focus();
            return false;
        };
        if($("#field_name").val() == ""){
            alert("Nama Barang Harus Diisi");
            $("#field_name").focus();
            return false;
        };
        if($("#field_type").val() == ""){
            alert("Tipe Barang Harus Diisi");
            $("#field_type").focus();
            return false;
        };
        if($("#field_price").val() == ""){
            alert("Harga Barang Harus Diisi");
            $("#field_price").focus();
            return false;
        };

         noty({text: 'Loading', layout: 'topCenter'});
         $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: api_url + "Master_data/field_update_goods",
            processData: false,
            dataType: "json",
            data: { 
                    field_code : $("#field_code").val(),
                    field_name : $("#field_name").val(),
                    field_type : $("#field_type").val(),
                    field_price : $("#field_price").val(),
                    activestatus : $("#activestatus").val(),
                    created_by : $("#s_user_name").val(),
                    company_code : $("#s_company_code").val() },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}masterdata/merchant_goods");
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