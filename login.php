<?php

session_start();
include('connection.php');

?>

<form action="" method="post">
Username:
<input type="text" name="username" value=''/><br><br>
Password:<input type="password"name="password" value=""/><br><br>

<input type="submit" name="submit" value="Login">

</form>
<?php
    
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="SELECT * FROM student WHERE username='$username'&& password='$password'";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);
        if($total==1){
            $_SESSION['user_name']=$username;
            header('location:home.php');
            echo 'Login Ok';
        }else{
            echo 'Login failed';
        }
    }







    ?>