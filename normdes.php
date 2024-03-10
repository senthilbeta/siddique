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
            background-image:url(88.jpeg) ;
            color: white;
            background-repeat: no-repeat;
            background-size: 130% 90%;
            background-size: 110% 290%;
   
        }
         .des {
            background-color: rgba(0, 0, 0, 0.623);
            color: #FF8080;
            /* box-shadow: 0px 4px 8px ; */
            border: 3px solid #CDFAD5;
            height: 100%;
            font-size: 30px;
            width: 36%;
        
            margin-top: 20px;
            margin-left: 450px;
            line-height: 50px;
        }
        .des p{
            margin-left:10px
        }
        .des button{
margin-left: 380px;
background-color: #CDFAD5;
position: absolute;
margin-top: -45px;
border: none;
font-family: monospace;
/* height: 4.5%; */
/* width: 4.5%;} */
padding:10px;
        }
        .des button:hover{
            background-color:#F6FDC3;
            color:black;
        }
        .back{
            padding:4px 12px;
            text-decoration:none;
            background-color:#FF8080;
            color:black;
            font-size:22px;
            margin-left:290px;
font-family: monospace;

            /* position:absolute; */
            /* margin-top:-30px; */
            /* color:red; */
        }
    </style>
</head>
<body>
    <div class="des">
    <p>*By applying this normal course we can add you in a group class,you can learn with some members.<br>*If you want to learn separately you can apply Advanced course.</p>
    <p>Course Price (Starting Course Fees) ₹ 2 000*</p> 
    <a href="course.php" class="back">Back</a>
    <form action="register.php">  <button>Register</button></div></form>
</body>
</html>