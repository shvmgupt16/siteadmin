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

      $q = "select * from admin where id=1";
	  $rec = mysql_fetch_array(mysql_query($q));
	   admin_pass_email($rec['admin_email'],$rec['username'],$rec['password']);

		$mess = 'Mail has been sent to admin. Please refer your inbox for further details.';

		$class = 'alert-success';

	}



	else if(isset($_SESSION['admin_user']) && $_SESSION['admin_user'] != '')

{

	header("location:dashboard.php");	

}

function admin_pass_email($admin_email,$username,$password)
{
		$msg = "Hi Admin, <br><br>";	
		$msg .= "Please find your login details as per your request<br><br>";	
		$msg .= "<table style=\"width: 100%; border: 1px solid #5D5D5D;\">";	
		$msg .= "<tr><td width=\"25%\" style=\"padding-left: 10px;\">Username</td><td width=\"75%\">$username</td></tr>";
		$msg .= "<tr><td width=\"25%\" style=\"padding-left: 10px;\">Password</td><td width=\"75%\">$pass</td></tr>";	
		$msg .= "</table>";	
		$msg .= "<br>Regards<br><br><strong>ASK Admin </strong>";	
		
		//echo $msg;
		$from = "Support";
		$subject = "Password Reminder Mail";
		$headers = "From:".$from." <'no-reply@aksinterative.com'>\n" . "MIME-Version: 1.0\n" .  "Content-type: text/html; charset=iso-8859-1";
		mail($email,$subject,$msg,$headers);
}

if(isset($_POST['action']))

{

	

	if($_POST['action'] != '')

	{

	

		if($_POST['username'] == '' or $_POST['password'] == '')

		{

			$mess = "Please enter login details";

			$class = "alert-error";



		}

		else

		{

		$q = "select * from admin where username='".$_POST['username']."' and password='".$_POST['password']."' and account_status = 'Y'";
          
		$rec = mysql_fetch_array(mysql_query($q));

		$res = mysql_num_rows(mysql_query($q));	

		if($res > 0)

		{

		$_SESSION['admin_user'] = $_POST['username'];

		$_SESSION['type'] = $rec['type'];

		$_SESSION['admin_id'] = $rec['id'];

		$_SESSION['mess'] = 'succesfull-login';

		$_SESSION['last_login_date'] = $rec['last_login_date'];

		mysql_query("update admin set last_login_date = now()");

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
  <div class="dialog">
    <div class="block">
      <p class="block-heading">Sign In</p>
      <div class="block-body">
        <form name="" action="" method="post">
          <div class="<?php echo $class; ?>"><?php echo $mess; ?></div>
          <label>Username</label>
          <input type="text" class="span12" name="username" id="username" autofill="off">
          <label>Password</label>
          <input type="password" class="span12" name="password" id="password">
          
          <!--<a href="index.html" class="btn btn-primary pull-right">Sign In</a>-->
          
          <input type="submit" name="action" value="Sign In">
          
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
</body></html>