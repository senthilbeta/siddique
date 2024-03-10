<?php 
// session_start();
// if(empty($_SESSION['password'])):
//     header('Location:adminlogin.php');
// endif;
?>

<?php
session_start();

if (empty($_SESSION['admin_password'])) {
    session_destroy();
    header('Location:adminlogin.php');
    exit; 
}
?>

<?php
 error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'dbconnection.php';
if(isset($_POST['d1'])){
    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $time = $_GET['time'];
    $mobile = $_GET['mobile'];
    $email = $_GET['email'];
    $type = "Normal";
    $date = date("Y-m-d");


$inlog = "INSERT INTO normalbooking(name, gender, time, mobile, email, type, date) VALUES('$name','$gender', '$time', '$mobile', '$email', '$type', '$date')";
$result = $connec->query($inlog);

if($result == TRUE)
{
    $delete = mysqli_query($connec,"DELETE FROM `normal` WHERE `name`= '$name' and `mobile`= '$mobile'");
    header('Location:adminusers.php');
}
else{
    echo "<script>alert('login failed.username and password are incorrect....')</script>";
    echo "error";
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-Dashboard</title>

    <style>
	/*------------------------------attendance delete button------------------------------*/
.delete:hover {
  opacity:1;
}
#id01{
 background-color: white;
 margin:20px 40px;
 width:95%;
 background-size:cover;   
 height:85vh;
  }
body{


}

.cancelbtn, .deletebtn {
 background-color: #04AA6D;
  color: black;
  padding: 18px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  float: left;
  width: 50%;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.cancelbtn {
  background-color: #97FEED;
  color: black;
  border-radius: 5px;
  width:250px;
  height:18px;
  margin:10px;
  text-decoration:none;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.cancelbtn:hover,.cancelbtn:focus{
    opacity: 1;
}

.deletebtn {
  background-color: #f44336;
  border-radius: 5px;
}
/* .deletebtn:hover,.deletebtn:focus{
    background-color: #071952;
    color: black;
} */

.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
 .modal {
  //display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  //z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  //overflow: auto; /* Enable scroll if needed */
  background-color: #071952;
  padding-top: 50px;
} 

.modal-content {
  /* background-color: white; */
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  border-radius: 8px;
  width: 52%; /* Could be more or less, depending on screen size */
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 25px;
  /* background-color:white;
  width:100px; */
 text-align: center;
  font-weight: bold;
  color: #071952;
  border-radius:10px;
}
#cimg{
        width:47px;
        height:47px;
        border-radius:25px;
        margin-left:1px;
        margin-top:-30px;
        position: absolute;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

/* .close:hover,
.close:focus {
  color: white;
  cursor: pointer;
  background-color: red;
} */

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}

</style>
</head>
<body>
<div id="id01" class="modal">
     <a href="adminnormalcourse.php"> <span class="close" title="Close Modal">BACK</span></a>
          <div class="modal-content">
            <div class="container">
            <h1 >Accept Normal Courses</h1>
            <p >Are you sure you want to Accept Normal Courses?</p><br> 
              <div class="clearfix">
              <form  method="post" onsubmit="submitForm()">
	       <a href="adminnormalcourse.php" type="button"  class="cancelbtn" name="cancle">Cancel</a>
               <button class="deletebtn" type="submit" name="d1">Accepted</button>
              </form>

              </div>
           </div>
	</div>
</div>


  <script>
    function submitForm() {
      // Perform form submission logic here

      // Set a success flag in local storage
      localStorage.setItem('formSubmitted', 'true');
    }
  </script>


</body>
</html>
