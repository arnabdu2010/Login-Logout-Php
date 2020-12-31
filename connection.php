<?php

$servername="localhost";
$username="root";
$password="";
$dbname="login";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo '';
}
else{
    die('connection not ok'.mysqli_connect_error());
}










?>