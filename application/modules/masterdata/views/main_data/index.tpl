<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Utama</h3>
            <form role="form">
                <div class="form-group">
	                <label>Nama Tempat Futsal</label>
	                <input name="futsal_name" id="futsal_name" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Nama Pemilik Lapangan</label>
                    <input name="futsal_owner" id="futsal_owner" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Daerah</label>
                    <input name="futsal_place" id="futsal_place" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="futsal_address" id="futsal_address" type="text" class="form-control">
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="futsal_email" id="futsal_email" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label>No. Telp 1</label>
                    <input name="futsal_phone1" id="futsal_phone1" type="number" class="form-control" />
                </div>
                <div class="form-group">
                    <label>No. Telp 2</label>
                    <input name="futsal_phone2" id="futsal_phone2" type="number" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Jam Buka</label>
                    <select  id="company_open_hour" name="company_open_hour" class="form-control select" style="width:200px;">
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
                    <label>Jam Tutup</label>
                    <select id="company_close_hour" name="company_close_hour" class="form-control select" style="width:200px;">
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
                <button id="btnedit" type="button" class="btn btn-info active"><span class="fa fa-edit"></span>Edit</button>
                <button id="btncancel" type="button" class="btn btn-info active"><span class="fa fa-undo"></span>Cancel</button>
                <button id="btnsave" type="button" class="btn btn-info active"><span class="fa fa-save"></span>Save</button>
            </form>
        </div>
    </div>
</div>
<script>

        //set variabel
        var api_url = '{$api_url}';
        var company_id = '{$data_company.company_id}';
        var company_name = '{$data_company.company_name}';
        var company_owner = '{$data_company.company_owner}';
        var company_districtcode = '{$data_company.company_districtcode}';
        var company_address = '{$data_company.company_address}';
        var company_email = '{$data_company.company_email} ';
        var company_phone1 = '{$data_company.company_phone1}';
        var company_phone2 = '{$data_company.company_phone2}';
        var company_open_hour = '{$data_company.company_open_hour}';
        var company_close_hour = '{$data_company.company_close_hour}';
    {literal}
    $(function(){

        //set value
        $('#futsal_name').val(company_name);
        $('#futsal_owner').val(company_owner);
        $('#futsal_place').val(company_districtcode);
        $('#futsal_address').val(company_address);
        $('#futsal_email').val(company_email);
        $('#futsal_phone1').val(company_phone1);     
        $('#futsal_phone2').val(company_phone2);
        $('#company_open_hour option:selected').val(company_open_hour);
        $('#company_close_hour option:selected').val(company_close_hour);

        //set attribut
        $("#futsal_name").attr("readonly", "readonly");
        $("#futsal_owner").attr("readonly", "readonly");
        $("#futsal_place").attr("readonly", "readonly");
        $("#futsal_address").attr("readonly", "readonly");
        $("#futsal_email").attr("readonly", "readonly");
        $("#futsal_phone1").attr("readonly", "readonly");
        $("#futsal_phone2").attr("readonly", "readonly");
        $("#btnsave").attr("disabled", "disabled");
        $("#btncancel").attr("disabled", "disabled");
    });
    
    $( "#btnedit" ).click(function() {
        //remove attribut
        $("#futsal_name").removeAttr("readonly");
        $("#futsal_owner").removeAttr("readonly");  
        $("#futsal_address").removeAttr("readonly"); 
        $("#futsal_email").removeAttr("readonly"); 
        $("#futsal_phone1").removeAttr("readonly"); 
        $("#futsal_phone2").removeAttr("readonly");
        $("#btnsave").removeAttr("disabled");
        $("#btncancel").removeAttr("disabled");
        $("#btnedit").attr("disabled", "disabled");

        $("#futsal_name").focus();

    }); 

    $( "#btncancel" ).click(function() {
         //set value
        $('#futsal_name').val(company_name);
        $('#futsal_owner').val(company_owner);
        $('#futsal_place').val(company_districtcode);
        $('#futsal_address').val(company_address);
        $('#futsal_email').val(company_email);
        $('#futsal_phone1').val(company_phone1);     
        $('#futsal_phone2').val(company_phone2);
        $('#company_open_hour option:selected').val(company_open_hour);
        $('#company_close_hour option:selected').val(company_close_hour);

        //set attribut
        $("#futsal_name").attr("readonly", "readonly");
        $("#futsal_owner").attr("readonly", "readonly");
        $("#futsal_address").attr("readonly", "readonly");
        $("#futsal_email").attr("readonly", "readonly");
        $("#futsal_phone1").attr("readonly", "readonly");
        $("#futsal_phone2").attr("readonly", "readonly");
        $("#btnsave").attr("disabled", "disabled");
        $("#btncancel").attr("disabled", "disabled");
        $("#btnedit").removeAttr("disabled");
    });

    $( "#btnsave" ).click(function() {
        if($("#futsal_name").val() == ""){
            alert("Nama Tempat Futsal Harus Diisi");
            $("#futsal_name").css({"border": "1px solid #ff0000"});
            $("#futsal_name").focus();
            return false;
        };

        if($("#futsal_owner").val() == ""){
            alert("Nama Pemilik Lapangan Harus Diisi");
            $("#futsal_owner").css({"border": "1px solid #ff0000"});
            $("#futsal_owner").focus();
            return false;
        };


        if($("#futsal_address").val() == ""){
            alert("Alamat Harus Diisi");
            $("#futsal_address").css({"border": "1px solid #ff0000"});
            $("#futsal_address").focus();
            return false;
        };

        if($("#futsal_email").val() == ""){
            alert("Email Harus Diisi");
            $("#futsal_email").css({"border": "1px solid #ff0000"});
            $("#futsal_email").focus();
            return false;
        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#btnsave").attr("disabled", true);

        $("#futsal_name").attr("readonly", "readonly");
        $("#futsal_owner").attr("readonly", "readonly");
        $("#futsal_address").attr("readonly", "readonly");
        $("#futsal_email").attr("readonly", "readonly");
        $("#futsal_phone1").attr("readonly", "readonly");
        $("#futsal_phone2").attr("readonly", "readonly");
        $("#btnsave").attr("disabled", "disabled");
        $("#btncancel").attr("disabled", "disabled");
        $("#btnedit").removeAttr("disabled");

        $.ajax({
            type: "POST",
            url: api_url + "Master_data/field_update_maindata",
            dataType: "json",
            data: { futsal_id : company_id,
                    futsal_name : $("#futsal_name").val(),
                    futsal_owner : $("#futsal_owner").val(),
                    futsal_place : $("#futsal_place").val(),
                    futsal_address : $("#futsal_address").val(),
                    futsal_email : $("#futsal_email").val(),
                    futsal_phone1 : $("#futsal_phone1").val(),
                    futsal_phone2 : $("#futsal_phone2").val(),
                    futsal_email : $("#futsal_email").val(),
                    futsal_phone1 : $("#futsal_phone1").val(),
                    company_open_hour : $("#company_open_hour").val(),
                    company_close_hour : $("#company_close_hour").val(),
                    activestatus : $("#activestatus").val(),
                    created_by : 'BERI',
                    company_code : 'RDCNT' },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();
                // alert(data.status);

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}masterdata/main_data");
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