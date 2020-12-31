<?php

session_start();
include("connection.php");
error_reporting(0);
echo 'Welcome'.$_SESSION['user_name'];
$userprofile=$_SESSION['user_name'];
if($userprofile==true){
    
}
else{
    header("location:login.php");
}
$query="SELECT * FROM student WHERE username='$userprofile'";
$data=mysqli_query($conn,$query);
$total=mysqli_fetch_assoc($data);
echo $total['password'];






?>
<p align="justify">
    <img src="image/1.jpg" height="250" width="250" align="left">
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, nesciunt odit alias nemo ipsa a. Iste ducimus perspiciatis fugiat corrupti explicabo debitis esse, modi ad id fuga repellat ab consequatur quo magni minus ipsam temporibus cupiditate, maxime dignissimos? Nemo at odit quaerat sequi sit eaque voluptates, rem quis porro maiores?



</p>
<p align="justify">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, nesciunt odit alias nemo ipsa a. Iste ducimus perspiciatis fugiat corrupti explicabo debitis esse, modi ad id fuga repellat ab consequatur quo magni minus ipsam temporibus cupiditate, maxime dignissimos? Nemo at odit quaerat sequi sit eaque voluptates, rem quis porro maiores?
    
    
    
    </p>
    <br>
    <a href="logout.php">Logout</a>



