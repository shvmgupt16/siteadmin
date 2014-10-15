<?php
require_once('includes/control.php');
//initialize
$mess = '';
$class = '';
$page_head = 'Dashboard';


if(isset($_SESSION['mess']))
{
	if($_SESSION['mess'] == 'succesfull-login')
	{
		$mess = 'You have successfully logged in.';
		$class = 'alert-success';
		$_SESSION['mess'] = '';
	}
}
validate_user();
admin_header();
top_menu();
?>

<?php
////////////////////////////////////////
//////////////////////////////////////
//		DISPLAY CONTENT HERE
////////////////////////////////////////
//////////////////////////////////////
?>

<div class="content">
<div class="header">
<h1 class="page-title">Dashboard</h1>
</div>
<ul class="breadcrumb">
<li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
<li class="active">Dashboard</li>
</ul>
<div class="container-fluid">
<div class="row-fluid">
           <?php if($mess != ''){display_message($mess,$class);} ?>

<div class="row-fluid">
<div class="block ">
<p class="block-heading">Welcome</p>
<div class="block-body">
<p>Start using the admin panel from the links provided on the left hand side.</p>
<p>To make the navigation easier, you will find links grouped according to section. You can easily identify</p>
<p><a class="btn btn-primary btn-large" href="#">&laquo; Get Started</a></p>
</div>
</div>
</div>    
<?php
admin_footer('N');
?>