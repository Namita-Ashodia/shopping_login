<?php

session_start();


$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection Succesful";
}
else{
    echo"Connection UnSuccesful";
}

mysqli_select_db($con,'product');


$uname = $_POST['email'];
$password = $_POST['pass'];



$q="select * from user where email='$uname' && pwd='$password'";

$result = mysqli_query($con,$q);
$row=mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['email']=$row['email'];
    header('location:index.php');
}
else{
   header('location:login.php');
}

?>
