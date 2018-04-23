<?php
/* Smarty version 3.1.30, created on 2018-04-06 12:35:27
  from "C:\xampp\htdocs\FutsalKu\application\modules\masterdata\views\users\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac74d6f5e9149_40615440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3394ede44d27e59bad79c17bcf0c2b03b22734cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\masterdata\\views\\users\\edit.tpl',
      1 => 1523010915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac74d6f5e9149_40615440 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['code_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['code_name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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

<?php echo '<script'; ?>
 type="text/javascript">
var user_id = "<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_id'];?>
";
var user_name = "<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_name'];?>
";
var user_code = "<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_code'];?>
";
var user_role = "<?php echo $_smarty_tpl->tpl_vars['userdata']->value['user_group'];?>
";
var api_url = '<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
';

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
                    
                    window.location.replace("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
masterdata/users");
                    
                }
                else
                {
                    alert("Data Gagal Diproses, Harap Hubungin Call Center");
                }

            }
        });
    });
    

<?php echo '</script'; ?>
><?php }
}
