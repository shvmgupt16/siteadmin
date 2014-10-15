<?php
require_once('includes/control.php');
validate_user();

if(isset($_SESSION['mess']))
{
	if($_SESSION['mess'] == 'succesfull-login')
	{
		$mess = 'You have successfully logged in.';
		$class = 'alert-success';
		$_SESSION['mess'] = '';
	}
}


require_once('../classes/setting.class.php');
$resource = new Setting();
$resource->initializePage();

if($resource->_view == 'list')
	$resource->getList();

if($_GET['id'] != '' && $_GET['view'] == 'add')
	$res= $resource->showRecord();
top_menu('News');
?>

<!--
<div class="grid_12">
<div class="box first round fullpage mh500">
           <h2><?php echo $page_head; ?></h2>
           <?php if($mess != ''){display_message($mess,$class);} ?>
-->
<?php
////////////////////////////////////////
//////////////////////////////////////
//		DISPLAY CONTENT HERE
////////////////////////////////////////
//////////////////////////////////////
?>

    <div class="content">     
        <div class="header">
            <h1 class="page-title">Manage Account</h1>
        </div>      
                <ul class="breadcrumb">
            <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Account Setting</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">             
        <?php   $resource->displayMessage(); ?>
             
    
    
<?php
{
	if($resource->_recordCount > 0)
		$res = mysql_fetch_array($resource->_records);
			 

?>
 <form name="update-admin" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<table class="form " >

<tr>
	<td>
    <label>Username </label>
    </td>
    <td>
	<input type="text" name="username" id="username" value="<?php echo $res['username'];?>" style="width:415px;"/>
    <div id="name_error" style="color:red"></div>
    </td>
</tr>
<tr>
	<td>
    <label>Password </label>
    </td>
    <td>
	<input type="password" name="password" id="password" value="<?php echo $res['password'];?>" style="width:415px;"/>
    <div id="pass_error" style="color:red"></div>
    </td>
</tr>
<tr>
	<td>
    <label>Email Id </label>
    </td>
    <td>
	<input type="text" name="admin_email" id="admin_email" value="<?php echo $res['admin_email'];?>" style="width:415px;"/>
    <div id="email_error" style="color:red"></div>
    </td>
</tr>

<tr>
	<td>&nbsp;
    
    </td>
    <td>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
    <input type="hidden" name="action" value="update" /><button class="btn btn-primary" onclick="return validForm();" >Update</button>
    </td>
</tr>
</table>
</form>
<script type="text/javascript">
//===================Form Validation=======================

  function validForm() { 
      var cnt=0;
	  var username=document.getElementById("username").value;
	  var password=document.getElementById("password").value;
	  var admin_email=document.getElementById("admin_email").value;
	 // var news = CKEDITOR.instances['news'].getData();


	   if(username == '') {
	     document.getElementById("name_error").innerHTML="Enter your name";
	     document.getElementById("name").style.borderColor='red';
		 cnt++;
	   }
	   else 
	   {
	     document.getElementById("name_error").innerHTML="";
	     document.getElementById("name").style.borderColor='';
	   }
	   if(password == '') {
	     document.getElementById("password_error").innerHTML="Enter your password";
	     document.getElementById("password").style.borderColor='red';
		 cnt++;
	   }
	   else 
	   {
	     document.getElementById("password_error").innerHTML="";
	     document.getElementById("password").style.borderColor='';
	   }
	    if(admin_email == '') {
	     document.getElementById("email_error").innerHTML="Enter email_id";
	     document.getElementById("admin_email").style.borderColor='red';
		 cnt++;
	   }
	   else 
	   {
	     document.getElementById("email_error").innerHTML="";
	     document.getElementById("admin_email").style.borderColor='';
	   }
	 
	   if(cnt > 0)
	   {
		   return false;
	   }
	   else
	   {
		   return true;
	   }
	  }
//===================Custom Editor=========================

 //window.onload = function(){
	//	CKEDITOR.replace( 'news', {
	//toolbar: [

       // { name: 'basicstyles', items : [ 'Bold','Italic','Strike' ] },
       // { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent'] },
        //{ name: 'tools', items : [ 'Maximize' ] }
		//]
    // });
	 
	 
//}

</script>
<?php } 
if($resource->_recordCount > 0)
	$search = 'N';
else
	$search = 'N';	
admin_footer($search,'Products');
?>