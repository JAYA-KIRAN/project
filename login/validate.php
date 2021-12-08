<?php
session_start();
header('location:../home/home.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'jaya');
$name=$_POST['name'];
$rpassword=$_POST['rpassword'];
$cpassword=$_POST['cpassword'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$s = "select * from user where email='$email' && rpassword='$rpassword' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
#$_SESSION['email']=$email;
#if($num==1){
    #header('location:help.php');
#}
#else{
 #   header('location:login.php');
#}
?>