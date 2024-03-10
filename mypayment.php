<?php 
session_start();
if(empty($_SESSION['username'])):
    header('Location:new.php');
endif; 

?>

<?php
include 'dbconnection.php';
    $sql = "SELECT * FROM normalbooking WHERE name = '{$_SESSION['username']}'";
    $query = mysqli_query($connec, $sql);
    $num = mysqli_num_rows($query);
          
           ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
 <style>   *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }
    body{
        background-image:url('p.jpg');
        background-repeat:no-repeat;
        background-size:cover;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    nav{
        background:#262020;
        height: 80px;
        width: 100%;
        }
        label.logo{
            color: white;
            font-size: 35px;
            line-height: 80px;
            padding: 0 100px;
            font-weight: bold;
        }
        nav ul{
            float: right;
            margin-right: 20px;
        }
        nav ul li{
            display: inline-block;
            line-height: 80px;
            margin: 0 6px;
        }
        nav ul li a{
            color: white;
            font-size: 17px;
            padding: 7px 13px;
            border-radius: 3px;
            text-transform: uppercase;
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
            .mypayment{
                width:100%;
                background-color:#FF8080;
            }
            .mypayment h2{
             /* text-align:center; */
                color:white;
                 margin-left:100px;
            }
    </style>
</head>
<body>
    <nav>
        
        <label class="logo">DRIVING SCHOOL</label>
        <ul>
         
            <li><a href="home.php" >Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="course.php" >Course</a></li>
            <li><a href="contact.php">Contact</a></li>
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
         <div class="mypayment">
            <h2>Payment Paid</h2>
           
        </div>
        

         <?php
             if ($num > 0) {
                while ($result = mysqli_fetch_assoc($query)) {
                    $name = $result['name'];
                    $gender = $result['gender'];
                    $time = $result['time'];
                    $email = $result['email'];
                    $mobile = $result['mobile'];
                    $type = $result['type'];
                    $date = $result['date'];
                    if($type == 'Normal'){
                    $paid = '2,000 INR (INR Two Thousand only.)-including taxes*';

                        echo "<div style='width:500px; margin:30px 60px; height:300px;background-color:black; color:#CDFAD5;box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;'>";
                        //     echo "<h1 style='color:red;'>$name</h1>";
                        echo "<h1 style='text-align:center;'>Normal Course</h1><br>";
                        echo "<h2 style='margin-left:50px; color:#FF8080;'>Payment Paid</h2>";


                                echo "<br>";
                                // echo "<h4 style='margin-left:50px;'>Name: $name<br><br></h4>";
                                echo "<h4 style='margin-left:50px;'>Course Type: $type<br><br></h4>";
            
                                // echo "<h4 style='margin-left:50px;'>Gender: $gender<br><br></h4>";
                                echo "<h4 style='margin-left:50px;'>Amount Paid: $paid<br><br></h4>";
                                // echo "<h4 style='margin-left:50px;'>Email: $email<br><br></h4>";
                                echo "<h4 style='margin-left:50px;'>Payment Date: $date<br><br></h4>";
                        echo "</div>";
            
               
                            }
                            if($type == 'Advance'){
                    $paid = '4,000 INR (INR four Thousand only.)-including taxes*';

                                echo "<div style='width:500px; margin:20px 60px; height:300px; background-color:black; color:#CDFAD5;float:right; position:absolute; margin-top:-323px; margin-left:700px;box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;'>";
                                //     echo "<h1 style='color:red;'>$name</h1>";
                                        echo "<h1 style='text-align:center;'>Advance Course</h1><br>";
                                        echo "<h2 style='margin-left:50px; color:#FF8080;'>Payment Paid</h2>";

                                        echo "<br>";
                                // echo "<h4 style='margin-left:50px;'>Name: $name<br><br></h4>";
                                echo "<h4 style='margin-left:50px;'>Course Type: $type<br><br></h4>";
            
                                echo "<h4 style='margin-left:50px;'>Amount Paid: $paid<br><br></h4>";
                                // echo "<h4 style='margin-left:50px;'>Time: $time<br><br></h4>";
                                echo "<h4 style='margin-left:50px;'>Payment Date: $date<br><br></h4>";
                                // echo "<h4 style='margin-left:50px;'>Mobile: $mobile<br><br></h4>";
                                echo "</div>";
                    
                       
                                    }
                        } 
                    }else {
                            echo "<h2 style='text-align:center;margin-top:50px; margin-left:500px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;color:#CDFAD5; background-color:black;width:400px;'>No Fees found </h2>";
                        }
         
            
        // echo "<div style='display:grid;grid-template-columns:1fr 1fr;'>";
            
            // echo "<div style='width:500px; margin:20px 60px; height:400px; background-color:black;'>";


            // echo "</div>";
        // echo "</div>";

            ?>
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