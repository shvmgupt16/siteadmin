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


require_once('../classes/testimonials.class_team.php');
$resource = new Testimonial();
$resource->initializePage();

if($resource->_view == 'list')
	$resource->getList();

if($_GET['id'] != '' && $_GET['view'] == 'add')
	$resource->showRecord();
top_menu('Testimonials');
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
            <h1 class="page-title">Manage Team </h1>
        </div>      
                <ul class="breadcrumb">
            <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Team</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">             
        <?php   $resource->displayMessage(); ?>
             
<?php
if($resource->_view == 'list')
{ ?>
<a href="<?php echo $_SERVER['PHP_SELF'].'?view=add';?>" class="btn btn-primary">Add</a>	<br/>
<?php 
if($resource->_recordCount > 0 )
{
?>   

<?php
$resource->showRecords($start,$records);
$total_records = $resource->_recordCount;
$limits = display_paging($total_records);
$limits = explode('~',$limits);
$start = $limits[0];
$records = $limits[1];

$url = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
if(isset($_GET['sort_type']) && $_GET['sort_type'] == 'asc')
{
	$sort_type = 'desc';
	$img = '<img src="images/arrow-up.png">';
}
else
{	
$sort_type = 'asc';	
	$img = '<img src="images/arrow-down.png">';
}

	$param = '';
	$keys = array_keys($_GET);
	$values = array_values($_GET);
	for($i =0;$i<count($keys);$i++)
	{
		if($keys[$i] != 'sort' and $keys[$i] !=  'sort_type')
			$param .= $keys[$i]."=".$values[$i]."&";
	}	

$url = $_SERVER['PHP_SELF'].'?'.$param;

?>
 
<div> <strong style="font-size:11px; font-style:italic;">Total Records: <?php echo $total_records; ?></strong> </div>
<div class="well">
    <table class="table">
      <thead>
        <tr class="header">
          <th>#</th>
          <th>Name</th>
          <th>Designation</th>
         
          <th>Image</th>
          <th style="float:right; text-align:right;font-weight:normal !important"></th>
        </tr>
      </thead>
      <tbody>
<?php
$i = 1;
$print_modals = '';
while($res = mysql_fetch_assoc($resource->_records))
{
	if($i%2 == 1)
		$rowClass = 'odd';
	else
		$rowClass = 'even';	
?>      
        <tr class="<?php echo $rowClass; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $res['name']; ?></td>  
		  <td><?php echo $res['designation']; ?></td>
          
          <td><img width="80" height="60" src="<?php echo '../admin/images/'.$res['image']; ?>" /></td>
          <td style="text-align:right !important">

                <a href="<?php echo $_SERVER['PHP_SELF'].'?view=add&id='.$res['id'];?>" alt="Update" title="Update" rel="tooltip"><i class="icon-pencil"></i></a>
            <?php  if($res['status'] == 'N') { ?>
                <a href="<?php echo $_SERVER['PHP_SELF'].'?action=activate&id='.$res['id'];?>" rel="tooltip" alt="Activate" title="Activate"><i class="icon-ok-circle"></i></a>
            <?php   }  else    {   ?>
                 <a href="<?php echo $_SERVER['PHP_SELF'].'?action=deactivate&id='.$res['id'];?>" rel="tooltip" alt="Deactivate" title="Deactivate"><i class="icon-ok-sign"></i>                  </a>
               
            <?php }  ?>
                <a href="#myModal<?php echo $i; ?>" role="button" data-toggle="modal" title="delete" alt="delete"  rel="tooltip"><i class="icon-remove"></i></a>     
         
     </td>
        </tr>
<?php
$print_modals .= '<div class="modal small hide fade" id="myModal'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">    
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete account of '.$res['name'].'?</p>
    </div>
    <div class="modal-footer">
    <form method="post" action="">
    	<input type="hidden" name="id" value="'.$res['id'].'">
		<input type="hidden" name="action" value="delete">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		<input type="submit" name="submit" value="delete" class="btn btn-danger" >
     </form>   
    </div>
    </div>
';


$i++;
}
?>    
      </tbody>
    </table>
</div>
<?php
display_paging($total_records,'s');
echo $print_modals;
?>
<script type="text/javascript">
function udi(id)
{
	alert(id);
	/*document.getElementById('del_id').value = id;*/
	
}

function delete()
{
		var id = document.getElementById('del_id').value;
		alert(id);
}

function fun()
{
	alert("having fun");
}


</script>
    
    
<?php
}
}else
{
	if($resource->_recordCount > 0)
		$res = mysql_fetch_array($resource->_records);
			 

?>
 <form name="add-news" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<table class="form " >

<tr>
	<td>
    <label>Name </label>
    </td>
    <td>
	<input type="text" name="name" id="name" value="<?php echo $res['name'];?>" style="width:415px;"/>
    <div id="name_error" style="color:red"></div>
    </td>
</tr>
<tr>
	<td>
    <label>Designation </label>
    </td>
    <td>
	<input type="text" name="designation" id="name" value="<?php echo $res['designation'];?>" style="width:415px;"/>
    <div id="designation_error" style="color:red"></div>
    </td>
</tr>
<tr>
	<td>
    <label>Image </label>
    </td>
    <td>
	<input type="file" name="image" id="image" style="width:415px;"/><br />
    <?php if($res['image']!='') { ?><img src="<?php echo '../admin/images/'.$res['image'];?>" width="70" height="60" /> <?php } ?>
    <input type="hidden" name="img" value="<?php echo $res['image'];?>" />
    <div id="image_error" style="color:red"></div>
    </td>
</tr>

<tr>
	<td>&nbsp;
    
    </td>
    <td>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
    <input type="hidden" name="action" value="<?php echo $resource->_action; ?>" /><button class="btn btn-primary" onclick="return validForm();" ><?php echo $resource->_actionName; ?></button>
    </td>
</tr>
</table>
</form>
<script type="text/javascript">
//===================Form Validation=======================

  function validForm() { 
      var cnt=0;
	  var name=document.getElementById("name").value;
	  var designation=document.getElementById("designation").value;
	  //var news=document.getElementById("news").value;

	   if(name == '') {
	     document.getElementById("name_error").innerHTML="Enter your name";
	     document.getElementById("name").style.borderColor='red';
		 cnt++;
	   }
	   else 
	   {
	     document.getElementById("name_error").innerHTML="";
	     document.getElementById("name").style.borderColor='';
	   }
	   if(designation == '') {
	     document.getElementById("designation_error").innerHTML="Enter your designation";
	     document.getElementById("name").style.borderColor='red';
		 cnt++;
	   }
	   else 
	   {
	     document.getElementById("designation_error").innerHTML="";
	     document.getElementById("name").style.borderColor='';
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

 window.onload = function(){
		CKEDITOR.replace( 'news', {
	toolbar: [

        { name: 'basicstyles', items : [ 'Source','Bold','Italic','Strike' ] },
        { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent'] },
        { name: 'tools', items : [ 'Maximize' ] }
		]
     });
	 
	 
}

</script>
<?php } 
if($resource->_recordCount > 0)
	$search = 'N';
else
	$search = 'N';	
admin_footer($search,'Products');
?>