<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data User</h3>
            <form role="form">
                <div class="form-group">

	                <label>Nama User </label>
	                <input id="field_name" type="text" class="form-control" placeholder="Nama User" readonly="readonly">
                    <input id="user_id" type="hidden">
                </div>
           
                <div class="form-group">
                    <label>User Code </label>
                    <input id="field_code" type="text" class="form-control" placeholder="User Code" readonly="readonly">
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input id="field_password" type="password" class="form-control" placeholder="Password" >
                </div>
                
                <div class="form-group">
                    <label>Ulangi Password</label>
                    <input id="field_password2" type="password" name="field_password2" class="form-control" placeholder="Password">

                </div>

                <div class="form-group">
                    <label>Peran</label>
                    <select id="field_role" name="field_role" class="form-control select">
                    <option></option>
                    {foreach from=$role item=row}
                        <option value="{$row.code_code}">{$row.code_name}</option>
                    {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label>Aktif Status</label>
                    <select id="activestatus" class="form-control select">
                    <option value="ATSAC">Aktif</option>
                    <option value="ATSNA">Non Aktif</option>
                    </select>
                </div>
                <div>
                <button type="button" id="BtnSubmit" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
var user_id = "{$userdata.user_id}";
var user_name = "{$userdata.user_name}";
var user_code = "{$userdata.user_code}";
var user_role = "{$userdata.user_group}";
var api_url = '{$api_url}';
{literal}
$(function(){
    $("#user_id").val(user_id);
    $("#field_name").val(user_name);
    $("#field_code").val(user_code);
    $("#field_role").val(user_role);
});

    $("#BtnSubmit").click(function(){
        if($("#field_name").val() == ""){
            alert("Nama Harus Diisi");
            $("#field_name").focus();
            return false;
        };
        if($("#field_code").val() == ""){
            alert("User Code Harus Diisi");
            $("#field_code").focus();
            return false;
        };
        if($("#field_password").val() == ""){
            alert("Password Harus Diisi");
            $("#field_password").focus();
            return false;

        };
        if($("#field_password2").val() != $("#field_password").val()){
            alert("Password Harus Sama");
            $("#field_password").focus();
            return false;
            
        };
        if($("#field_role").val() == ""){
            alert("Peran Harus Diisi");
            $("#field_role").focus();
            return false;
        };

         noty({text: 'Loading', layout: 'topCenter'});
         $("#BtnSubmit").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: api_url + "Master_data/field_update_user",
            processData: false,
            dataType: "json",
            data: { user_id : $("#user_id").val(),
                    field_password : $("#field_password").val(),
                    field_role : $("#field_role").val(),
                    activestatus : $("#activestatus").val(),
                    lastupd_by : $("#s_user_code").val(),
                    company_code : $("#s_company_code").val() },
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    {/literal}
                    window.location.replace("{$base_url}masterdata/users");
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