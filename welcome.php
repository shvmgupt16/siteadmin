<?php

 /*$con=mysqli_connect("localhost","root","","flex_project");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/
 
  
	include('config.php');
	
		 
 // define variables and set to empty values
$nameErr = $emailErr= $subjectErr = $messageErr= "";
$name = $email_id = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   
   $name = test_input($_POST["name"]);
    $email_id = test_input($_POST["email_id"]);
	$subject = test_input($_POST["subject"]);
	 $message = test_input($_POST["comments"]);
   

    
     
  //print_r($message);
  // echo $message;
   $count=0;
   if (empty($_POST["name"])) {

     
	 $nameErr = "Name is required";
   	 echo "$nameErr";
	 echo "\n";
	 $count++;
   } 
   else if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
    	 echo "$nameErr";
		  echo "\n";
		$count++;
	}
	else
	$count=$count;
   
   if (empty($_POST["email_id"])) {
     $emailErr = "Email is required";
	  echo "$emailErr";
	  echo "\n";
	   echo "\n";
	 $count++; 
	   } 
   else if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email_id)) {
       $emailErr = "Invalid email format"; 
   		 echo "$emailErr";
		  echo "\n";
		$count++;
   }
   else
   $count=$count;
   
   if($count>0)
   {
	echo "message sending failed";
	 echo "\n";
   }
   else 
   {
  
  $sql="INSERT INTO contact (name, email_id, subject,message)
VALUES ('$name', '$email_id', '$subject','$message')";
echo "message sent successfully" ;
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
  
 
}
   }
  
 


}


   

   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
 
  ?>
  
  
 