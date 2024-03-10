<?php 
session_start();
if(empty($_SESSION['username'])):
    header('Location:new.php');
endif; 

?>
<?php
include 'dbconnection.php';
if(isset($_POST['btn1']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $inlog = "INSERT INTO contact(name, email, message) VALUES('$name','$email','$message')";
    $result = $connec->query($inlog);
    if($result == TRUE)
    {
      echo "<script>alert('Message sent successfully.....')</script>";
        
    }
    else{
        echo "<script>alert('login failed.recort insert error....')</script>";
        // echo "error";
    }

  }
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
    /* background-color:#9c7b7b; */
  }
    .file{
background-color: #CDFADB;
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
            a.active,a:hover{
        background: #FF8080;
        color: white;
        transition: .5s;
    }
            .active1{
        background: #CDFADB;
        color: black;
        transition: .5s;
        box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
    }
    .active1:hover{
        background: red;
        color: white;
        transition: .5s;
    }

    .dropbtn {
 
 padding:  7px 10px;
 font-size: 17px;
 border: none;
   background:#262020;
       color: rgb(253, 253, 253);

       border: none;
       border-radius: 3px;
       text-transform: uppercase;
       font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.dropdown {
 position: relative;
 display: inline-block;
}


.dropdown-content {
 display: none;
 position: absolute;
 background-color: #fff9f9;
 min-width: 120px;
 box-shadow: 0px 4px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
 text-align:center;

}

.dropdown-content a {
 color: rgb(0, 0, 0);
 text-align: center;
 margin-top: 20px;
 text-decoration: none;
 display:flexbox;
 width: 140px;
 height: 40px;
 font-size: 14px;
 font-weight: bold;
}
.dropdown-content a:hover{
   background-color: #7261618e;
   color: black;
}

.dropdown:hover .dropdown-content {
   display: block;}


.dropdown:hover .dropbtn {
   color:#262020;
   background-color: #fff9f9;}

   .footer{
background-color:black;
box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
width:100%;
height:90px;
position: relative;
margin-top:60px;
display:grid;
grid-template-columns:1fr 1fr 1fr;

            }
            .copy{
                font-size:35px;
                 margin-top:20px;
                 margin-left:45px;
                 color:white;
                 position:absolute;

            } 
            .f1 p{
                color:white;
                position:absolute;
                margin-top:30px;
                 margin-left:75px;
            }
            .one{
                padding:10px 20px;
                margin-top:25px;
                /* margin:20px; */
                position:absolute;
                color:#F6FDC3;

            }
            .one:hover{
                color:#FF8080;
                background-color:black;
            }
            .tow{
                padding:10px 20px;
                margin-top:25px;
                margin-left:100px;
                /* margin:20px; */
                position:absolute;
                color:#F6FDC3;
                

            }
            .tow:hover{
                color:#FF8080;
                background-color:black;
            }
            .three{
                padding:10px 20px;
                margin-top:25px;
                margin-left:200px;

                /* margin:20px; */
                position:absolute;
                color:#F6FDC3;


            }
            .three:hover{
                color:#FF8080;
                background-color:black;
            }
    
      
            
    </style>
</head>
<body>
      <form action="">
    <nav>
        
  <label class="logo">DRIVING SCHOOL</label>
  <ul>
   
      <li><a href="home.php" >Home</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="course.php" >Courses</a></li>
      <li><a href="contact.php"class="active">Contact</a></li>
      <!-- <li><a href="feedback.php">Feedback</a></li> -->
      <div class="dropdown">
    <li><button class="dropbtn">MY Account</button>
        <div class="dropdown-content">
          <a href="mycourse.php">Courses</a>
          <a href="mypayment.php">Payments</a>
        </div>
      </div>
    <li><a href="logoutprocess.php" class="active1">Logout</a></li>

  </ul>
  
      </nav>
      <?php   $name = $_SESSION['username'];  ?>
  <div class="file">

   <div class="file1">
    <img src="81.png" alt="" height="100%" width="100%">

   </div>
   <div class="file2">
    <H1>CONTACT US</H1>
<div class="file2_1">
  <form method="POST" action="contact.php">
  <input type="text" class="fn" name="name" value="<?php  echo "$name" ?>" placeholder="Full name"> <br><br>
  <input type="email" class="em" name="email"  placeholder="E-mail"> <br><br>
  <input type="textarea" class="ms" name="message" placeholder="Message"><br>
  <input type="submit" value="submit" name="btn1">

  </form>
  <!-- <button type="reset" style="position: absolute; margin-top: -220px; border-radius: 20px 10px;">X</button> -->

</div>
   </div>
  </div>
  <div class="footer">
<div class="f1">
<i class="copy">&#169;</i><p>2024 Siddique Driving School Pvt ltd</p>
</div>
<div class="f2">
    <a class="one" href="about.php">About Us</a>
    <a  class="tow" href="contact.php">Contact</a>
    <a class="three" href="course.php">Courses</a>
    
</div>
<div class="f3">
<a href="#" ><i class="fa fa-facebook" style="margin-left: 90px; font-size: 30px; margin-top:30px;  color:white;"></i></a>
<a href="#" ><i class="fa fa-instagram" style="font-size:30px; color:white; margin-left:30px;"></i></a>
<a href="#"><i class="fa fa-linkedin-square" style="font-size:30px; color:white; margin-left:30px;"></i></a>
<a href="#"><i class="fa fa-youtube-play" style="font-size:34px; color:white; margin-left:30px;"></i></a>
<a href="#" ><i class="fa fa-github" style="font-size:30px; color:white; margin-left:30px;"></i></a>
<a href="#"><i class="fa fa-twitter" style="font-size:30px;color:white;margin-left:30px;"></i></a>
</div>
</div>
</body>
</html>