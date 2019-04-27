<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Area Administrator</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
<script>
function validate()
{
	if (formka.namauser.value == "") 
	{ 
		alert("Username belum diisi"); 
		formka.namauser.focus(); 
		return false; 
	} 
	
	else if (formka.password.value == "")
	{
		alert("Password belum diisi");
		formka.password.focus();
		return false;
	}
	else return true; 
}
</script>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"><br/><center><img src="logo-esandar300x105.png"></center>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>ADMINISTRATION AREA</center></h3>
                    </div>
                    <div class="panel-body">
                        <form action="login_exec.php" method="post" name="formka" onSubmit="return validate()">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="namauser" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="Sign me in" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
