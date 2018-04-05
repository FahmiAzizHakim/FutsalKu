<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Utama</h3>
            <form role="form">
                <div class="form-group">
	                <label>Nama Tempat Futsal</label>
	                <input name="futsal_name" id="futsal_name" type="text" class="form-control" readonly="readonly" />
                </div>
                <div class="form-group">
                    <label>Nama Pemilik Lapangan</label>
                    <input name="futsal_owner" id="futsal_owner" type="text" class="form-control" readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label>Daerah</label>
                    <input name="futsal_place" id="futsal_place" type="text" class="form-control" readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="futsal_address" id="futsal_address" type="text" class="form-control" readonly="readonly">
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="futsal_email" id="futsal_email" type="text" class="form-control" readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label>No. Telp 1</label>
                    <input name="futsal_phone1" id="futsal_phone1" type="number" class="form-control" readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label>No. Telp 2</label>
                    <input name="futsal_phone2" id="futsal_phone2" type="number" class="form-control" readonly="readonly"/>
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
                <button type="button" class="btn btn-info active"><span class="fa fa-edit"></span>Edit</button>
            </form>
        </div>
    </div>
</div>
<script>
    {literal}
    $(function(){
        {/literal}
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
        $('#futsal_name').val(company_name);
        $('#futsal_owner').val(company_owner);
        $('#futsal_place').val(company_districtcode);
        $('#futsal_address').val(company_address);
        $('#futsal_email').val(company_email);
        $('#futsal_phone1').val(company_phone1);     
        $('#futsal_phone2').val(company_phone2);
        $('#company_open_hour option:selected').val(company_open_hour);
        $('#company_close_hour option:selected').val(company_close_hour);

    });
    {/literal}
    
</script>