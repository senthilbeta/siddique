<?php
include 'dbconnection.php';
if(isset($_POST['btn1'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $time = $_POST['time'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

$inlog = "INSERT INTO normal(name, gender, time, mobile, email) VALUES('$name','$gender', '$time', '$mobile', '$email')";
$result = $connec->query($inlog);
echo $result;
if($result == TRUE)
{
    header('Location:normreply.php');
}
else{
    echo "<script>alert('login failed.username and password are incorrect....')</script>";
    echo "error";
}
}


?>