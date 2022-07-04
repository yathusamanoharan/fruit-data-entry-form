<?php
include "db.php";
$name=$_POST["name"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phonenumber=$_POST["phonenumber"];

$password=$_POST["password"];

$sql="INSERT INTO `fruit`(`name`, `gender`, `email`,  `phonenumber`,  `password`) VALUES ('$name','$gender','$email','$phonenumber', '$password')";

$result=mysqli_query($con,$sql);
if($result){
    header("location: login.php");
}
else{
    echo "error";
}
?>

