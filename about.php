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
    <title>Document</title>
    <link rel="stylesheet" href="pr1.css">
    <style>
       body{ font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: large;}
        .ab{
            background-color:#262020;
            height: 331px;
            width:100%;
            color:wheat;
            margin-top: 50px;
            line-height: 25PX;
        }
        /* .ab1{
            margin-left: 500px;
            margin-top: 0px;
        }
        .h3{
            margin-left: 10px;
            
        } */
        .hm{
padding: 17px;
text-align: center;   
  float: inherit;      
  color: rgb(255, 255, 255);
  font-family: monospace;  
  font-size: 19px;
        }
        .lgbtn{
          height: 40px;
          width:90px;
          border-radius: 5px;
          border: none; 
          
          font-family:cursive;
          font-size: medium;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
          
        }
ul li a{
    color: wheat;
}
a:hover{
  background-color: rgb(255, 255, 255);
  color: rgb(0, 0, 0);
}
    </style>
</head>
<body>
      
    <nav>
        
  <label class="logo">DRIVING SCHOOL</label>
  <ul>
   
      <li ><a href="home.php" >Home</a></li>
      <li><a href="course.php" >Courses</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="#"class="active">About us</a></li>
      <li><a href="feedback.php">Feedback</a></li>
      <li><a href="order.php">orders</a></li>
  </ul>
  
      </nav>


  </div>
  <div class="img">
    <img src="93.jpg" alt="" style="margin-left: 60px; margin-top: -0.1px;" height="320px" width="320px" >
    <h4 style="margin-top: -60px; margin-left: 160px; font-size: 22px; font-family: monospace;">Since 2004</h4>
  </div>
  <div class="img2">
    <img src="94.jpg" alt="" height="290px" width="290px" style="margin-left: 590px; margin-top: -350px">
    <h4  style="margin-left: 660px; margin-top: -59px;font-size: 20px; font-family: monospace; " >Experienced and <br> Friendly guides</h4>
  </div>
  <div class="img3">
    <img src="96.png" alt=""height="180px" width="180px" style=" margin-top:-180px;margin-left: 1120px; position: absolute;">
    <h4 style="margin-left: 1145px; font-size: 21px; font-family: monospace; margin-top: -34px;">100% Customer Satisfaction</h4>
  </div>
  <div class="ab">
   
    <div class="ab1">
       <ul class="ql">
      <li class="hm"> <h3 class="h3">Quick Links</h3></li>
      <li class="hm">  <a href="home.html"><h4>Home</h4></a></li>
      <li class="hm"><a href="course.html"><h4>Course</h4></a></li>
      <li class="hm"><a href="contact.html"><h4>Contact</h4></a></li>
      <li class="hm"><a href="feedback.html"><h4>Feedback</h4></a></li>
   </ul>
   </div>
</body>
</html>