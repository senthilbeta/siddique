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
    <link rel="stylesheet" href="pr1.css">
</head>
<style>
    body{
        background-color:black;
        background-image: url(91.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        border: 1px solid black;
    
    }
    .head{
        background-color:rgba(248, 248, 248, 0.788) ;
        /* font-family: monospace; */
        border-radius: 0px;
        border: rgb(0, 0, 0);
        border: 2px solid rgb(0, 0, 0);
        font-weight: bold;
        color: #000000;
         margin-left: 250px;
        margin-top:48px;
        font-size: 18px;
        box-shadow: 0px 4px 8px black;
        width: 70%;
        height: 480px;
        line-height: 40px;
    
    }
    .name{
     
        margin-left: 20px;
        margin-top: 20px;
    }
    .logo{
        margin-top: 10px;
    }
    .about
    {
        text-decoration: underline;
        margin-left: 20px;
        margin-top: 20px;
    }
.instruct{
    text-decoration: underline;
    margin-left:500px; 
    margin-top: -255px;
}
.opinion{
    text-decoration: underline;
    margin-top: 9px;
    margin-left:500px;
}
.opinion textarea{
    background-color:#262020e0;
    color: rgb(255, 255, 255);
}
input{
    background-color: #262020e0;
    padding: 10px;
    text-transform:capitalize;
    color: rgb(255, 255, 255);
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}
.smtbtn{
    height: 35px;
    width: 300px;
    margin-top: 30px;
    border: none;
    background-color:#262020e0;
    color: rgb(255, 255, 255);
    text-align:inherit;
    font-family: monospace;

    font-weight: bold;
    font-size: 20px;
    
}
.form1{
    background-color: #262020b2;
    text-align: center;
    width: 200px;
    color: white;
    font-style: italic ;
    font-family: monospace;
     margin-left: 350px; 
     text-decoration: underline;
    
}
.lgbtn{
          height: 40px;
          width:90px;
          border-radius: 5px;
          border: none; 
          background-color: rgb(255, 255, 255);
          font-family:monospace;
          font-size: medium;
        
          
        }
</style>
<body>
    <form action="">
      
    <nav>
        
  <label class="logo">DRIVING SCHOOL</label>
  <ul>
   
      <li><a href="home.php" >Home</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="course.php" >Course</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="#"class="active">Feedback</a></li>
      <li><a href="myaccount.php">MyAccount</a></li>
    <li><a href="logoutprocess.php">Logout</a></li>

  </ul>
   </nav>
   <div class="head">
   
   <div class="name">
    <h2 class="form1">Feedback Form</h2><br>
    <label for="">1.Your name:</label><br>
    <input type="text" placeholder="First">
    <input type="text" placeholder="Last">
   </div>
<div class="about">
    <label for="">2.How did you Find about us?</label><br>
    <input type="radio" value="Socialmedia">Socialmedia <br>
    <input type="radio" value="Friends">Friends <br>
    <input type="radio" value="Recommendation">Recommendation <br>
</div>
<div class="instruct" >
<label for="">3.How would you rate your instructor:</label> <br>
<input type="radio">Excellent  <br>
<input type="radio">Good <br>
 <input type="radio">Average <br>

</div>
<div class="opinion">
  4.Opinion<h1><textarea name="" id="" cols="45" rows="4" placeholder="Your opinion to improve our driving school..." style="text-transform: uppercase;"></textarea> </h1>
   <!-- <input type="textarea" placeholder="Your opinion to improve our driving school" required> -->
</div>

<div> <center> <button class="smtbtn">Submit</button> </center> </div></div>

</form>
</html>