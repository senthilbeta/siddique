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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
           .lgbtn{
          height: 40px;
          width:90px;
          border-radius: 5px;
          border: none; 
          background-color: rgb(255, 254, 254);
          font-family:cursive;
          font-size: medium;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
          
        }
       body{ font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: large;
    background-color:#9c7b7b;
  }
    .file{
background-color: #9c7b7b;
box-shadow: 0px 4px 8px #857272;
border:5px solid black;
height: 500px;
width: 70%;
margin-left: 200px;
display: grid;
grid-template-columns: 1fr 1fr;
margin-top: 30px;

            }
            .file1{
              background-color: aliceblue;
              width: 80%;
              height: 80%;
              margin-top:50px ;
              margin-left: 30px;
              
              box-shadow: 0px 4px 8px #857272;
              
            }
            .file2{
              
              width: 90%;
              height: 90%;
              margin: 10px;
        
              font-size: 30px;

            }
            .file2 h1{
              margin-top: 50px;
              margin-left: -60px;
              position: absolute;
            }
            .file2_1{
              
              border: 2px solid black;
              border-right: 0px;
              border-bottom: 0px;
              height: 80%;
              width: 105%;
              margin-top: 130px;
              margin-left: 19px;
            }
            .file2_1 input {
              margin-left: 30px;
              margin-top: 20px;
              border: 2px solid black;
              border-top: none;
              border-left: none;
              border-right: none;
              padding: 10px 50px;
              text-align:left;
              color: black;
              font-size: 13px;
              line-break:strict;
              font-family: monospace;
            }
            .file2_1 button{
              text-transform: uppercase;
              margin-left: 120px;
              padding: 8px 30px;
              margin-top: 35px;
              border: 2px solid black;
            }
            .file2_1 button:hover{
              background-color: black;
              color: aliceblue;
              border: 2px solid rgb(255, 255, 255);
              transform: scale(1.3);
            }
            .icon{
              width: 100%;
              height: 100px;
              margin-top: 42px;
              background-color: #262020;
              position: absolute;
            }
    
      
            
    </style>
</head>
<body>
      <form action="">
    <nav>
        
  <label class="logo">DRIVING SCHOOL</label>
  <ul>
   
      <li><a href="home.php" >Home</a></li>
      <li><a href="course.php" >Courses</a></li>
      <li><a href="#"class="active">Contact</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="feedback.php">Feedback</a></li>
      <li><a href="order.php">orders</a></li>
  </ul>
  
      </nav>
  
  <div class="file">

   <div class="file1">
    <img src="81.png" alt="" height="100%" width="100%">

   </div>
   <div class="file2">
    <H1>CONTACT US</H1>
<div class="file2_1">
  
  <input type="text" class="fn" placeholder="Full name"> <br><br>
  <input type="email" class="em" placeholder="E-mail"> <br><br>
  <input type="textarea" class="ms" placeholder="Message"><br>
  <button>ok</button>
  <!-- <button type="reset" style="position: absolute; margin-top: -220px; border-radius: 20px 10px;">X</button> -->

</div>
   </div>
  </div>
  <div class="icon">
    <i style="color: white;">&#169;</i>
    <div class="icon1">
  <a href="#" class="fa fa-facebook" style="margin-left: 900px; font-size: 30px; margin-top: -10px; position: absolute; "></a>
  <i class="fa fa-instagram" id="i1" style="font-size:33px;color:rgb(195, 192, 192); margin-left: 30px;"></i>
</div>
</div></form>
</body>
</html>