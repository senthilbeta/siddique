<?php 
session_start();
if(empty($_SESSION['username'])):
    header('Location:new.php');
endif; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-image:url(6.avif) ;
        color: white;
        background-repeat: no-repeat;
        background-size: 130% 90%;
        background-size: 110% 290%;
        /* font-family:monospace; */
    }
     .des {
        background-color: rgba(0, 0, 0, 0.623);
        color: rgb(0, 255, 157);
        box-shadow: 0px 4px 8px ;
        border: 3px solid rgb(68, 250, 235);
        height: 10%;
        font-size: 30px;
        width: 50%;
    
        margin-top: 160px;
        margin-left: 380px;
        line-height: 50px;
    }
    .des p{
        margin-left:10px
    }
    .des button{
margin-left: 550px;
background-color: yellow;
position: absolute;
margin-top: -40px;
border: none;
/* font-family: monospace; */
height: 4.5%;
width: 4.5%;
font-size:20px;}
</style>
</head>
<body>
    <div class="des">
        <p>*If you want to register this course,Pay Rs.3000 on the following Qr code or UPI id provided by admin.<br>*Our admin will be accept your registration within 24hrs if payment recieved.
        <br><span style="color:red">Note: </span>Please provide your payment proof in orders module</p>
      <form action="advpayment.php">  <button>PAY</button></div></form>
</body>
</html>