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
    <style>   .lgbtn{
        height: 40px;
        width:90px;
        border-radius: 5px;
        border: none; 
        background-color: rgb(255, 255, 255);
        font-family:cursive;
        font-size: medium;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      body{
        background-image: url(23.avif);
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: large;
        background-color: rgba(217, 215, 215, 0.13);}
        /* .cl1{
            box-shadow: 0px 4px 8px black;
            text-align: center;
            
            height: 350px;
            width: 350px;
            margin-top:170px;
            margin-left: 60px;
            background-color: rgb(0, 0, 0);
        } */
        .ncourse{
            background-color:rgba(66, 130, 150, 0.24) ;
            color: rgb(255, 255, 255);
            border: none;

border-radius: 20px;
box-shadow: 0px 2px 2px 5px rgb(118, 162, 165);
align-items: center;
margin-left: 33%;
margin-top: 6%;
padding: 80px 30px;
 width: 40%;
 height: 76%;
 position: absolute;
}
.cr{
    background-image: url(20.jpg);
}
.jm
{
font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
line-height: 60px;

}
label{
    text-transform: uppercase;
}
input{
    font-family: cursive;
    color: rgb(0, 0, 0);
    
}
.back button{
    position: absolute;
    margin-top: 0%;
    margin-left: 0%;
height: 40px;
width: 90px;
font-weight: bold;


}
.back:hover{
    transition: 1s;
    color: rgb(81, 81, 180);
    background-color: rgba(181, 181, 194, 0.521);
      
}
        </style>
</head>
<body>
    <div class="back"><form action="course.php">
        <button style="color: rgb(0, 0, 0);" >Back</button></form></div>
    <!-- <nav>
        
  <label class="logo">DRIVING SCHOOL</label>
  <ul>
   
      <li><a href="home.html" >Home</a></li>
      <li><a href="#" class="active">Registration</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="about.html">About us</a></li>
      <li><a href="feedback.html">Feedback</a></li>
      <li><a href=""><button class="lgbtn">Logout</button></a></li>
  </ul>
  
      </nav> -->
     <!-- <div class="cl1">
        <h3>Normal Course</h3>
        <h4>(Group Class)</h4>
        <img src="81.png" alt="" width="280px" height="280px">
     </div> -->
     
    
     <div class="cr">
     <div class="ncourse">
    <div class="head" style="margin-top: -50px;position: absolute; margin-left: 50px; font-size: 30px; color: rgb(0, 0, 0);width: 400px;align-items: center; justify-content: center; text-align: center; background-color: #ffffff;">Advance Course</div>
    <form action="registerprocess1.php" method="POST">
    <label for="" class="jm">Name :</label>
    <input type="text" name="name" placeholder="Enter your name" required style="margin-left: 23px;padding: 5px 3px;"><br>
    <label for="" class="jm">Gender:</label>
       <select name="gender" id=""style="margin-left: 14px; padding: 6px 40px;">
       <option value="male" >Male</option>
       <option value="female">Female</option>
       </select><br>
   
    <label for="" class="jm" >Timing:</label>
    <select name="time" id="" aria-placeholder="Select" required style="margin-left: 5%; padding: 6px 40px;">
       <option value="7:00am-9:00am">7:00am-9:00am</option>
       <option value="2:00pm-4:00pm">2:00pm-4:00pm</option>
       <option value="5:00pm-7:00pm">5:00pm-7:00pm</option>

    </select> <br>
    <br>
    <label for="">Mobile:</label> 
    <input type="number" name="mobile" placeholder="Enter mobile number" required style="margin-left: 10px;padding: 5px 1px;"><br><br> <br>
    <!-- <label for="">Class:</label><select name="" id="" required style="margin-left: 6%; padding: 7px 53px;"><option value="">Single class</option><br><option value="">Group class</option></select><br><br><br> -->
    <label for="">Email:</label>
    <input type="email" name="email" placeholder="Enter your email" required style="margin-left: 25px;padding: 5px 5px;"><br><br>
    <input type="submit" name="btn1" value="Register" style="margin-left: 20%; margin-top: 2%;font-size: medium; font-family: monospace; height: 35px; width: 20%; border-radius: 8px; font-size: 14px; font-family: cursive;font-weight: bold;border: none;">
    <input type="reset"  style="margin-left: 50%; margin-top: -35px; font-size: medium; font-family: monospace; height: 35px; width: 20%; border-radius: 8px; font-size: 14px; font-family: cursive;font-weight: bold;border: none; position: absolute;">     
</form>
 </div>

     </div>

</body>
</html>