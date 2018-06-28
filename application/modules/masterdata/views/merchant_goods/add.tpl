<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Dagangan</h3>
            <form role="form">
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input id="goods_code" name="goods_code" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input id="goods_name" name="goods_name" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <select id="goods_type" class="form-control select">
                    <option></option>
                    {foreach from=$goods_type item=row}
                    <option value="{$row.code_code}">{$row.code_name}</option>
                    {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input id="goods_price" type="number" class="form-control"/>
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
                <button id="BtnCancel" type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript">
    var api_url = '{$api_url}';
    var base_url = '{$base_url}';
    {literal}

    $("#BtnCancel").click(function(){
        window.location.replace(base_url + "masterdata/merchant_goods");
    });

    $("#BtnSubmit").click(function(){
        if($("#goods_code").val() == ""){
            alert("Kode Barang Harus Diisi");
            $("#goods_code").focus();
            return false;
        };
        if($("#goods_name").val() == ""){
            alert("Nama Barang Harus Diisi");
            $("#goods_name").focus();
            return false;
        };
        if($("#goods_type").val() == ""){
            alert("Tipe Barang Harus Diisi");
            $("#goods_type").focus();
            return false;
        };
        if($("#goods_price").val() == ""){
            alert("Harga Barang Harus Diisi");
            $("#goods_price").focus();
            return false;
        };
      
        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: api_url + "Master_data/goods_insert",
            dataType: "json",
            data: { goods_code : $("#goods_code").val(),
                    goods_name : $("#goods_name").val(),
                    goods_type : $("#goods_type").val(),
                    goods_price : $("#goods_price").val(),
                    activestatus : $("#activestatus").val(),
                    created_by : $("#s_user_name").val(),
                    company_code : $("#s_company_code").val() },
                success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();
                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    window.location.replace(base_url + "masterdata/merchant_goods");
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