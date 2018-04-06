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
<script type="text/javascript">
    {literal}
    $("#BtnLogin").click(function(){
        {/literal}
        var base_url = '{$base_url}';
        {literal}
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
    {/literal}
</script>
        
    