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
    <title></title>
    <link rel="stylesheet" href="pr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body{
            background-color: black;
           
            background-image: url(homeb.avif);
            background-size:cover;
            background-repeat: no-repeat;
        }
        .welcome{
            color: #F6FDC3;
            background-color:black;
            margin-top: 50px;
            margin-left: 60px;
            font-family: "Brush Script MT",cursive;
            font-size: 35px;
            width:860px;
            opacity: 0.5;
        }
        .btn{
            /* height: 0px; */
            /* width: 200px; */
            padding:8px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif,cursive;
            background-color: black;
            border-radius: 10px;
            font-size: 27px;
            border: none;
            color: rgb(245, 245, 245);
            margin-left: 800px;
            margin-top:150px;
            position: absolute;
            /* margin-top: -70px; */
            box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
            
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
            background-color: red;
            transform: scale(1.1);
            transition: 0.3s;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
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
    nav{
        background-color:black;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
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

   .icon{
              width: 100%;
              height: 100px;
              margin-top: 42px;
              background-color: black;
              position: absolute;
            }
            .footer{
background-color:black;
box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
width:100%;
height:90px;
position: relative;
margin-top:500px;
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

    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
<label class="logo">DRIVING SCHOOL</label>

<ul>
    
    <li><a href="#" class="active">Home</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="course.php">Courses</a></li>
    <li><a href="contact.php">Contact</a></li>
    <!-- <li><a href="feedback.php">Feedback</a></li> -->
    <div class="dropdown">
    <li><button class="dropbtn">MY Account</button>
        <div class="dropdown-content">
          <a href="mycourse.php">Courses</a>
          <a href="mypayment.php">Payments</a>
        </div>
      </div>
    <li><a href="logoutprocess.php"class="active1">Logout</a></li>
</ul>

    </nav>
   
        <?php
        
        echo "<h2 style='color:#CDFAD5; background-color:black; width:300px;  margin-left:150px; margin-top:20px; background-color: rgba(0, 0, 0, 0.623); box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;'>Welcome ".$_SESSION['username']."</h2>";
        ?>
  <!-- <form action="cars.php">  <button class="btn1">Our Cars</button></form> -->

    <!-- <div class="marq"><MARquee>10% Offer for 6months</MARquee></div> -->
<div class="welcome">
    <!-- <h1>Senthil Driving School</h1> -->
  
</div>

<a href="course.php" class="btn" >Register now!</a>
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
<?php 
    $sql = "SELECT * FROM user WHERE name = '{$_SESSION['username']}'";
			 $query = mysqli_query($connec,$sql);
			 $num = mysqli_num_rows($query);
			 if($num>0){
				while($result=mysqli_fetch_assoc($query)){
				    $name = $result['name'];
            $gender =$result['gender'];
            $time = $result['time'];
            $email = $result['email'];
            $mobile = $result['mobile']; 
				     }
				   }
        ?>
</body>
</html>