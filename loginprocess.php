<?php session_start();
include 'dbconnection.php';
if(isset($_POST['btn1'])){
    $name = $_POST['n1'];
    $pass = $_POST['p1'];
    
    $inlog = "select * from user where username='$name' and password = '$pass'";
    $res = mysqli_query($connec, $inlog);
    $row = mysqli_fetch_array($res);

    $name=$row['username'];
    $count = mysqli_num_rows($res);
    $pass=$row['password'];
    if($count == 0)
    {
        echo "<script>alert('login failed.username and password are incorrect....')</script>";

        header('Location:new.php');

    }
    else{
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $pass;
        header('Location:home.php');
        
    }
    }
    
?>