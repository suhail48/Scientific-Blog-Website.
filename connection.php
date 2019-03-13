<?php
$servername = "localhost";
$username = "root";
$password = "";


$mysql_db="blog";

if(!@mysqli_connect($servername,$username,$password,$mysql_db)) 
    {
		die(mysql_error());
	}
   else 
   {
	   echo "Connected";



$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$message=$_GET['message'];

    if(isset($name)&&isset($email)&&isset($phone)&&isset($message) && !empty($name) && !empty($email) && !empty($phone) && !empty($message))
     {
    
      $query="INSERT into myblogg VALUES('".mysql_real_escape_string($name)."','".mysql_real_escape_string($email)."',".$phone.",'".mysql_real_escape_string($message)."')";
      if($query_run=mysqli_query((mysqli_connect($servername,$username,$password,$mysql_db)),$query))
	   {
		header('Location: register_success.php');
       }
        else
	   {
    echo ".  Record cant be created because you already registered with this email ID.";
	   }
	 }
     else echo 'Required';
   }

?>
