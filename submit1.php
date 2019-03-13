<?php
$name1=$_POST['name'];
$email1=$_POST['email'];
$phone1=$_POST['phone'];
$message1=$_POST['message'];

$query="insert into myblog values('name1','email1','phone1','message1')";
$data=mysqli_query($conn,$query);

if ($data)
{
echo "data inserted into database";
}
?>