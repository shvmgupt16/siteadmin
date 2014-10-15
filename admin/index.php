
 
                                
<?php
require_once('includes/control.php');
$mess = '';
$class = '';
if(isset($_GET['action']) && ($_GET['action'] == 'logout'))
    {
	unset($_SESSION['admin_user']);
	$mess = "You have successfully logged out";
	$class = "alert-success";
	}
else if(isset($_GET['action']) && ($_GET['action'] == 'sess_exp'))
	{
		$mess = "Please login to access Secure Panel";
		$class = "alert-warning";

	}
else if(isset($_GET['action']) && ($_GET['action'] == 'password-help'))
	{
		admin_pass_email($_SESSION['admin_email']);
		$mess = 'Mail has been sent to admin. Please refer your inbox for further details.';
		$class = 'alert-success';
	}

	else if(isset($_SESSION['admin_user']) && $_SESSION['admin_user'] != '')
{
	header("location:dashboard.php");	
}

if(isset($_POST['action']))
{
	
	if($_POST['action'] != '')
	{
	
		if($_POST['user'] == '' or $_POST['pass'] == '')
		{
			$mess = "Please enter login details";
			$class = "alert-error";

		}
		else
		{
		$q = "select * from admin where username='".$_POST['user']."' and password='".$_POST['pass']."' and account_status = 'Y'";
		$rec = mysql_fetch_array(mysql_query($q));
		$res = mysql_num_rows(mysql_query($q));	
		if($res > 0)
		{
		$_SESSION['admin_user'] = $_POST['user'];
		$_SESSION['type'] = $rec['type'];
		$_SESSION['admin_id'] = $rec['id'];
		$_SESSION['mess'] = 'succesfull-login';
		$_SESSION['last_login_date'] = $rec['last_login_date'];
		mysql_query("update ga_admin set last_login_date = now()");
		header("location:dashboard.php");
		exit();	
		}
		else
		{
			$mess = 'Incorrect Login Details';
			$class = "alert-error";
		}
		}
        }
	else
		{
			$mess = "Invalid Login Details";
			$class = "alert-error";
		}

}

admin_header('none');
//top_menu();
?>
        <div class="row-fluid">
        <div class="logo-wrapper col-md-4 col-sm-2 col-xs-8">
                                    <h1>
                                     <a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_406_flex"></a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
    <div class="dialog">
        <div class="block">
            <p class="block-heading">Sign In</p>
            <div class="block-body">
                <form name="" action="" method="post">
                	<div class="<?php echo $class; ?>"><?php echo $mess; ?></div>
                    <label>Username</label>
                    <input type="text" class="span12" name="user" id="username" autofill="off">
                    <label>Password</label>
                    <input type="password" class="span12" name="pass" id="password">
                    <!--<a href="index.html" class="btn btn-primary pull-right">Sign In</a>-->
                    <input type="submit" name="action" value="Sign In" class="btn btn-primary">
                  <!--  <label class="remember-me"><input type="checkbox"> Remember me</label>-->
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        
        <p><a href="login.php?action=password-help">Forgot your password?</a></p>
    </div>
</div>
    <script src="bootstrap/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>