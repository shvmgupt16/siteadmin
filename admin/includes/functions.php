<?php

function admin_header($options = 'all')

{

?>

<!DOCTYPE html>

<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Garagevideo Admin</title>
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/theme.css">
	<link rel="stylesheet" href="bootstrap/font-awesome.css">
	<script src="bootstrap/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
	<script src="ckfinder/ckfinder.js" type="text/javascript"></script>

	<!-- Demo page code -->

	<style type="text/css">
#line-chart {
	height:300px;
	width:800px;
	margin: 0px auto;
	margin-top: 1em;
}
.brand {
	font-family: georgia, serif;
}
.brand .first {
	color: #fff;
	font-style: italic;
	font-weight: bold;
}
.brand .second {
	color: #ccc;
}
</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

	<!--[if lt IE 9]>

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

	<!-- Le fav and touch icons -->

	<link rel="shortcut icon" href="../assets/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" type="text/css" href="bootstrap/style.css">
	<script type="text/javascript">

	$(document).ready(function(){

		jQuery(".pull_feedback").toggle(function(){

				jQuery("#feedback").animate({right:"0px"});

				return false;

			},

			function(){

				jQuery("#feedback").animate({right:"-478px"});	

				return false;

			}

		); //toggle

	}); //document.ready

	</script>
	</head>

	<!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->

	<!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->

	<!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->

	<!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->

	<!--[if (gt IE 9)|!(IE)]><!-->

	<body class="">

<!--<![endif]-->

<div class="navbar">
      <div class="navbar-inner">
    <?php

if($options != 'none')

{

?>
    <ul class="nav pull-right">
          
          <!--<li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>-->
          
          <li id="fat-menu" class="dropdown"> <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Admin <i class="icon-caret-down"></i> </a>
        <ul class="dropdown-menu">
              
              <!--<li><a tabindex="-1" href="#">My Account</a></li>

<li class="divider"></li>--> 
              
              <!--<li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>-->
              
              <li class="divider visible-phone"></li>
              <li><a tabindex="-1" href="login.php?action=logout">Logout</a></li>
            </ul>
      </li>
        </ul>
    <?php

}

?>
    <a class="brand" href="dashboard.php"><span class="first"><img width="60" src='../images/logo.png'></span></a> </div>
    </div>
<?php	

}



function top_menu($link = '')

{



	//<a href="setting.php" class="nav-header"><i class="icon-dashboard"></i>Account Setting</a>

?>
<div class="sidebar-nav">
<a href="dashboard.php" class="nav-header"><i class="icon-dashboard"></i>Dashboard</a> 
<a href="setting.php" class="nav-header"><i class="icon-dashboard"></i>Account Setting</a>
<a href="home.php" class="nav-header"><i class="icon-dashboard"></i>Homepage</a>
<a href="service.php" class="nav-header"><i class="icon-dashboard"></i>Services</a>
<a href="skill_description.php" class="nav-header"><i class="icon-dashboard"></i>Description</a>
<a href="portfolio.php" class="nav-header"><i class="icon-dashboard"></i>Portfolio</a> 
<a href="team.php" class="nav-header"><i class="icon-dashboard"></i>Team</a> 
<a href="contact_us.php" class="nav-header"><i class="icon-dashboard"></i>Contact </a> 

 </div>
<?php

}



function admin_footer($search = 'Y',$section='')

{

?>
<footer>
      <hr>
      
      <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes --> 
      
      <!-- <p class="pull-right">Design &amp; Developed By :<a href="http://www.ecreatorindia.com/" target="_blank"> ECreatorIndia</a> </p>-->
      
      <p>&copy; 2013-14 <a href="<?php echo SITE_ROOT; ?>" target="_blank">Garagevideo</a></p>
    </footer>
</div>
</div>
</div>
<script src="bootstrap/bootstrap.js"></script> 
<script type="text/javascript">

        $("[rel=tooltip]").tooltip();

        $(function() {

            $('.demo-cancel-click').click(function(){return false;});

        });

    </script>
<?php    



  ?>
</body>
</html>
<?php

}



function display_message($m,$c)

{

?>
<div class="alert <?=$c;?>"><Strong><?php echo $m; ?></strong></div>
<?php

}

function validate_user()

{

	if(!isset($_SESSION['admin_user']))

	{

		header("location:index.php?action=sess_exp");

		exit();	

	}


}








function display_paging($total_records,$type='a',$section = '')

{

	$allowed_page_size = array('10','20','50','100');

	(isset($_GET['records']) && in_array($_GET['records'],$allowed_page_size))?($page_size = $_GET['records']):($page_size = 10);

	(isset($_GET['page']) && $_GET['page'] > 0)?($current_page = $_GET['page']):($current_page = 1);

	

	$total_pages = $total_records/$page_size;

	$total_pages = ceil($total_pages);

	

	$start = ($current_page-1)*$page_size;

	

		($current_page-3 > 0) ? ($loop_start = $current_page -3) : ($loop_start =1);

		($current_page+3 < $total_pages) ? ($loop_end = $current_page+3):($loop_end = $total_pages);

	

	

	

	$param = '';

	$keys = array_keys($_GET);

	$values = array_values($_GET);

	for($i =0;$i<count($keys);$i++)

	{

		if($keys[$i] != 'page')

			$param1 .= $keys[$i]."=".$values[$i]."&";

		if($keys[$i] != 'page' and $keys[$i] != 'records' )

			$param2 .= $keys[$i]."=".$values[$i]."&";

	}	



$page_url = $_SERVER['PHP_SELF'].'?'.$param1;

$dropdown_url = $_SERVER['PHP_SELF'].'?'.$param2;	

?>
<?php

if($type != 's')

{

	?>
<div class="btn-toolbar" style="float:left">
  <?php if($section != '') {echo $section; } ?>
  <select class="btn-select btn" name="records" id="records" onChange="fun();">
    <option selected value=""># per page</option>
    <?php 

	for($i=0;$i<count($allowed_page_size);$i++)

	{

		if($allowed_page_size[$i] == $page_size && isset($_GET['records']))

			echo '<option value="'.$allowed_page_size[$i].'" selected="selected">'.$allowed_page_size[$i].'</option>';	
	else

			echo '<option value="'.$allowed_page_size[$i].'">'.$allowed_page_size[$i].'</option>';

				}

	  ?>
  </select>
</div>
<script type="text/javascript">

$("#records").change(function() {

	var page_size = $(this).val();

	//alert(page_size);

	if(page_size>0)

		window.location.replace("<?php echo $dropdown_url; ?>records="+page_size);

});

</script>
<?php } ?>
<div class="pagination" style="float:right;margin-right:5px;">
  <ul>
    <?php

    		if($current_page > 1)

    		{

    	?>
    <li><a href="<?php echo $page_url.'&page=1' ;?>">First</a></li>
    <?php

		    }

		for($j=$loop_start;$j<=$loop_end;$j++)

			{

				if($j == $current_page)

					echo '<li><a href="'.$page_url.'&page='.$j.'"><strong style="color:#000;">'.$j.'</strong></a></li>';

				else

					echo '<li><a href="'.$page_url.'&page='.$j.'">'.$j.'</a></li>';

					

			}

		if($current_page != $total_pages)

		{	

		?>
    <li><a href="<?php echo $page_url.'&page='.$total_pages; ?>">Last</a></li>
    <?php } ?>
  </ul>
</div>
<div class="clear"></div>
<?php

 return $start.'~'.$page_size;

}

 



	
//========================================


function getUserName($id)
		{
		$q = "select * from ga_user where id=".$id;
	    $res = mysql_fetch_array(mysql_query($q));
		$re= ucwords($res['first_name'] .' '.$res['last_name']);	
		return $re;
		}
function getUserEmail($id)
		{
		$q = "select * from ga_user where id=".$id;
	    $res = mysql_fetch_array(mysql_query($q));
		$re= $res['email'] ;	
		return $re;
		}



?>