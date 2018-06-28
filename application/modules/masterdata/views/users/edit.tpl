<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data User</h3>
            <form role="form">
                <div class="form-group">

	                <label>Nama User </label>
	                <input id="user_name" type="text" class="form-control" placeholder="Nama User" readonly="readonly">
                </div>
           
                <div class="form-group">
                    <label>User Code </label>
                    <input id="user_code" type="text" class="form-control" placeholder="User Code" readonly="readonly">
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input id="user_password" name="user_password" type="password" class="form-control" placeholder="Password" >
                </div>
                
                <div class="form-group">
                    <label>Ulangi Password</label>
                    <input id="user_password2" name="user_password2" type="password" name="user_password2" class="form-control" placeholder="Password">

                </div>

                <div class="form-group">
                    <label>Peran</label>
                    <select id="user_role" name="user_role" class="form-control select">
                    <option></option>
                     <!-- <option value="ADM">ADMIN</option> -->
                    {foreach from=$role item=row}
                        <option value="{$row.code_code}">{$row.code_name}</option>
                    {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label>Aktif Status</label>
                    <select id="activestatus" name="activestatus" class="form-control select">
                    <option></option>    
                    <option value="ATSAC">Aktif</option>
                    <option value="ATSNA">Non Aktif</option>
                    </select>
                </div>
                <div>
                <button type="button" id="BtnSubmit" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" id="BtnCancel" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    
var api_url = '{$api_url}';
var base_url = '{$base_url}';
var user_id = "{$userdata.user_id}";
var user_name = "{$userdata.user_name}";
var user_code = "{$userdata.user_code}";
var user_role = "{$userdata.user_group}";
var activestatus = "{$userdata.activestatus}";
{literal}
$(function(){
    $("#user_name").val(user_name);
    $("#user_code").val(user_code);
    $("#user_role").val(user_role);
    $("#activestatus").val(activestatus);
    $('.form-control').selectpicker('refresh');

    $("#BtnCancel").click(function(){
        window.location.replace(base_url + "masterdata/users");
    });

    $("#BtnSubmit").click(function(){
        if($("#user_name").val() == ""){
            alert("Nama Harus Diisi");
            $("#user_name").focus();
            return false;
        };
        if($("#user_code").val() == ""){
            alert("User Code Harus Diisi");
            $("#user_code").focus();
            return false;
        };
        if($("#user_password").val() == ""){
            alert("Password Harus Diisi");
            $("#user_password").focus();
            return false;

        };
        if($("#user_password2").val() != $("#user_password").val()){
            alert("Password Harus Sama");
            $("#user_password").focus();
            return false;
            
        };
        if($("#user_role").val() == ""){
            alert("Peran Harus Diisi");
            $("#user_role").focus();
            return false;
        };

         noty({text: 'Loading', layout: 'topCenter'});
         $("#BtnSubmit").attr("disabled", true);
        $.ajax({
            type: "POST",
            url: api_url + "Master_data/user_update",
            dataType: "json",
            data: { user_id : user_id,
                    user_password : $("#user_password").val(),
                    user_role : $("#user_role").val(),
                    company_code : $("#s_company_code").val(),
                    activestatus : $("#activestatus").val(),
                    lastupd_by : $("#s_user_code").val()},
            success: function(data) {
                $("#BtnSubmit").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();
                // alert(data.status);

                if(data.status == "success")
                {
                    alert("Data Berhasil Diproses");
                    window.location.replace(base_url + "masterdata/users");
                }
                else
                {
                    alert("Data Gagal Diproses, Harap Hubungin Call Center");
                }

            }
        });
    });

});

    
{/literal}
    

    

</script>