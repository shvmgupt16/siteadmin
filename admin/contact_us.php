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


require_once('../classes/inquiry.class.php');
$resource = new Inquiry();
$resource->initializePage();

// get list of data from the table
$resource->showRecords();
$total_records = $resource->_recordCount;
top_menu('Manage Contact');
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
            <h1 class="page-title">Manage Contact</h1>
        </div>      
                <ul class="breadcrumb">
            <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Contact</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">             
        <?php   $resource->displayMessage(); ?>
             
<?php
if($resource->_recordCount > 0 )
{
?>   
<?php
$limits = display_paging($total_records);
$limits = explode('~',$limits);
$start = $limits[0];
$records = $limits[1];
$resource->showRecords($start,$records);



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
          <th>Name </th>
          <th>Email</th>
          <th>Subject</th>
          <th>Message</th>
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
          <td><?php echo $res['email_id']; ?> </td>
          <td><?php echo $res['subject']; ?></td>
          <td><?php echo stripslashes($res['message']); ?></td>
          <td style="text-align:right !important">
         
           <!--    <a  href="#" alt="Delete" title="Delete" onclick="udi(5);" ><i class="icon-remove" ></i></a> -->
                         <a href="#myModal<?php echo $i; ?>" role="button" data-toggle="modal" rel="tooltip" alt="Delete" title="Delete"><i class="icon-remove"></i></a>

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

if($resource->_recordCount > 0)
	$search = 'N';
else
	$search = 'N';	
admin_footer($search,'Contact');
?>