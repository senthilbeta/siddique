<?php
include 'dbconnection.php';
if(isset($_POST['btn1'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $time = $_POST['time'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

$inlog1 = "INSERT INTO advance(name, gender, time, mobile, email) VALUES('$name','$gender', '$time', '$mobile', '$email')";
$result1 = $connec->query($inlog1);
echo $result;
if($result1 == TRUE)
{
    header('Location:advreply.php');
}
else{
    echo "<script>alert('login failed.username and password are incorrect....')</script>";
    echo "error";
}
}


?>