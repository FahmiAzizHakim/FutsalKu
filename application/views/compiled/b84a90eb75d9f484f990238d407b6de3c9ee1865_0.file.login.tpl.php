<?php
/* Smarty version 3.1.30, created on 2018-04-06 11:00:44
  from "C:\xampp\htdocs\FutsalKu\application\modules\Login\views\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac7373c90fc10_96337678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b84a90eb75d9f484f990238d407b6de3c9ee1865' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\Login\\views\\login.tpl',
      1 => 1523005233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac7373c90fc10_96337678 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login-container">
    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
            <div class="login-body">
                <div class="login-title"><strong>Welcome</strong>, Please login</div>
                <form action="index.html" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="username" type="text" class="form-control" placeholder="Username"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" placeholder="Password"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                    </div>
                    <div class="col-md-6">
                        <button id="BtnLogin" class="btn btn-info btn-block">Log In</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="pull-left">
                    &copy; 2018 RCS
                </div>
                <div class="pull-right">
                    <a href="#">About</a> |
                    <a href="#">Privacy</a> |
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>
            
    </div>
<?php echo '<script'; ?>
 type="text/javascript">
    
    $("#BtnLogin").click(function(){
        
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';
        
        if($("#username").val() == ""){
            alert("Username / Email Harus Diisi");
            $("#username").focus();
            return false;
        };
        if($("#password").val() == ""){
            alert("Password Harus Diisi");
            $("#password").focus();
            return false;
        };

        noty({text: 'Loading', layout: 'topCenter'});
        $("#BtnLogin").attr("disabled", true);

        $.ajax({
            type: "POST",
            url: base_url + "Login/check_user",
            dataType: "json",
            data: { username : $("#username").val(),
                    password : $("#password").val()},
            success: function(data) {
                $("#BtnLogin").removeAttr("disabled");
                $("#noty_topCenter_layout_container").remove();

                if(data.status == "success")
                {
                    window.location.href = base_url;
                }
                else
                {
                    alert(data.error);
                }

            }
        });
    });
    
<?php echo '</script'; ?>
>
        
    <?php }
}
