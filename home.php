<?php 
// session_start();
// if(empty($_SESSION['username'])):
//     header('Location:new.php');
// endif; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="pr.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body{
            background-color: black;
           
            background-image: url(6.avif);
            background-size:cover;
            background-repeat: no-repeat;
        }
        .welcome{
            color: rgb(238, 229, 60);
            margin-top: 160px;
            margin-left: 350px;
            font-family: "Brush Script MT",cursive;
            font-size: 40px;
        }
        .btn{
            height: 60px;
            width: 200px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif,cursive;
            background-color: rgb(161, 69, 69);
            border-radius: 20px;
            font-size: 30px;
            border: none;
            color: rgb(245, 245, 245);
            margin-left: 450px;
            position: absolute;
            margin-top: -60px;
            
        }
        .btn1{
            height: 60px;
            width: 200px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif,cursive;
            background-color: rgb(161, 69, 69);
            border-radius: 20px;
            font-size: 30px;
            border: none;
            color: rgb(245, 245, 245);
            margin-left: 130px;
            margin-top: 30px;
            
        }
        .btn:hover{
            color: rgb(255, 255, 255);
            background-color: rgb(0, 0, 0);
            transform: scale(1.2);
            transition: 0.5s;
        }
        .btn1:hover{
            color: rgb(255, 255, 255);
            background-color: rgb(0, 0, 0);
            transform: scale(1.2);
            transition: 0.5s;
        }
        .lgbtn{
          height: 40px;
          width:90px;
          border-radius: 5px;
          border: none; 
          background-color: rgb(255, 255, 255);
          font-family:cursive;
          font-size: medium;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
          
        }
        body{ font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: large;}
        .marq{
            background-color: grey;
            opacity: 0.5;
        }
    </style>
</head>
<body>

    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
<label class="logo">DRIVING SCHOOL</label>
<ul>
    
    <li><a href="#" class="active">Home</a></li>
    <li><a href="course.php">Courses</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="feedback.php">Feedback</a></li>
    <li><a href="order.php">orders</a></li>
</ul>

    </nav>
    <!-- <div class="marq"><MARquee>10% Offer for 6months</MARquee></div> -->
<div class="welcome">
    <h1>Welcome to our Driving School</h1>
  <form action="cars.php">  <button class="btn1">Our Cars</button></form>
    <form action="course.php"><button class="btn" >Register now!   
    </button></form>
  
</div>



</body>
</html>