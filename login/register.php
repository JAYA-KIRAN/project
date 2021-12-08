<?php
session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'jaya');
$name=$_POST['name'];
$rpassword=$_POST['rpassword'];
$cpassword=$_POST['cpassword'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$s = "select * from user where name='$name' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    echo "Username already taken";
}
else{
    if($rpassword==$cpassword){
        $reg="insert into user(name,rpassword,cpassword,contact,email,aadhar) values('$name','$rpassword','$cpassword','$contact','$email','$aadhar')";
        mysqli_query($con,$reg);
        echo "Registration Successful";
        #header('location:login.php');
    }
    else{
        echo "Password not matching";
    }
}



?>