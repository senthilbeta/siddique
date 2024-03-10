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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        /* background-image: url(23.avif); */
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: large;
        background-image: url(dr.webp) ;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        
    }
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
           
            background-color:rgb(0, 0, 0) ;
            color: rgb(255, 255, 255);
            border: none;
            opacity:0.8;
            border-radius: 20px;
            box-shadow: 0px 4px 8px black;
            align-items: center;
            margin-left: 35%;
            margin-top: 2% ;    
            padding: 80px 30px;
            /* width: 40%;
            height: 40% ; */
            position: absolute;

}
/* .cr{
    background-image: url(20.jpg);
} */
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
    text-transform: capitalize;
    color: rgb(0, 0, 0);
    
}
.class{
    /* box-shadow: 0px 4px 8px black; */
    display: grid;
    grid-template-columns: 1fr 1fr ;
    height: 510px;
    width: 100%;
}
.class1{
    margin-top: 70px;
    background-color:  rgba(255, 255, 255, 0.432);
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    margin-left: 200px;
    /* box-shadow: 0px 4px 8px #7E6363; */
    display: grid;
    grid-template-columns: 1fr 1fr ;
    height: 400px;
    width: 400px;
    border: 3px solid #262020;
    
}
.class2{
    margin-top: 70px;
    background-color: rgba(255, 255, 255, 0.452);
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    margin-left: 150px;
    /* box-shadow: 0px 4px 8px #7E6363; */
    height: 400px;
    width: 400px;
    border: 3px solid black;
}
.heading
{
    /* background-color: #F6FDC3; */
    color: black;
    width: 200px;
    text-align: center;
    text-transform: uppercase;
    font-weight:bold;

    font-size: 20px;
    position: absolute;
    margin-left: 120px;
    font-weight: bold;
    margin-top: 15px;
    font-family:monospace;
   
}
.heading2
{
    /* background-color: #00000085; */
    color: black;
    font-weight:bold;
border-color: blue;
    width: 230px;
    text-align: center;
    position: static;
    text-transform: uppercase;
    font-size: 20px;
    position: absolute;
    margin-left: 100px;
    margin-top:15px ;
    font-weight: bold;
    font-family:monospace;

}
.img{
    margin-top: 50px;
    margin-left: 55px;
    
}
.img img{
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

} 
.book button{
    position: absolute;
    margin-top:-43px;
    border-radius: 5px;
    margin-left: 200px;
    /* height: 50px; */
    padding:10px;
    /* width: 200px; */
    /* border: 2px solid rgb(0, 0, 0); */
    font-family: monospace;
    border:none;
    cursor:pointer;
    background-color: #FF8080;
    color: white;
    font-size: 16px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
}
.book button:hover{
    color: #CDFAD5;
    background-color:black;
    transform:scale(1.1);
    transition: 0.1s;
}

.img2{
    position: absolute;
    margin-top: 50px;
    margin-left: 55px;
}
.img2 img{
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

} 
.book2 button{
    /* height: 50px; */
    /* width: 100px; */
    /* border: 2px solid rgb(0, 0, 0); */
    padding:10px;
    cursor:pointer;

    font-family: monospace;
    border-radius: 5px;
    background-color: #FF8080;
    color: white;
    font-size: 16px;
    position: absolute;
    margin-top: -40px;
    border:none;
    margin-left: 200px;

    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

}
.book2 button:hover{
    color: #CDFAD5;
    background-color:black;
    transform:scale(1.1);
    transition: 0.1s;
}
.inf1 button{
    margin-top: 345px;
    margin-left: -300px;
    /* height: 30px; */
    /* width: 100px; */
    padding:10px;
    /* border: 2px solid rgb(0, 0, 0); */
    border:none;
    font-family: monospace;
    background-color: #FFCF96;
    color: white;
    font-size: 16px;
    cursor:pointer;

    border-radius: 5px;
}
.inf1 button:hover{
    color: #CDFAD5;
    background-color:#262020;
    transform:scale(1.1);
    transition: 0.1s;
}
.inf2 button{
    /* height: 30px; */
    /* width: 100px; */
    padding:10px;
    cursor:pointer;

    /* /* border: 2px solid rgb(0, 0, 0); */
    border:none; 
    font-family: monospace;
    background-color: #FFCF96;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    margin-top:340px;
    margin-left: 56px;
    box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
}
.inf2 button:hover{
    color: #CDFAD5;
    background-color:#262020;
    transform:scale(1.1);
    transition: 0.1s;
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
    }
    .active1:hover{
        background: red;
        color: white;
        transition: .5s;
        box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;

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
/* margin-top:500px; */
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
        
  <label class="logo">DRIVING SCHOOL</label>
  <ul>
   
      <li><a href="home.php" >Home</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="#" class="active">Courses</a></li>
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
     
    <div class="class">
        <div class="class1">
          <div class="heading">
            normal course <br>
           </div>
           <div class="img">
            <img src="normal.jpg" alt="" height="280px" width="300px">
        </div>
        <form action="normdes.php">     <div class="inf1">
            <button id="info1">View Course!</button>
        </div></Form>
        <form action="register.php">    <div class="book">
            <button id="rgn1">Register now!</button>
        </div>
        </div>
    </form>
    
        <div class="class2">
           <div class="class2_1">
            <div class="heading2">
                advanced course <br>
            </div>
            <div class="img2">
                <img src="ad1.avif" alt="" height="275px" width="300px">
            </div>
            <form action="advdes.php">     <div class="inf2">
            <button id="info2">View Course!</button>
        </div></Form>
        <form action="registeradv.php">   <div class="book2">
                <button>Register now!</button>
            </div>
           </div>
        </form>
        </div>
    
    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    
    </script>
    <script>
        $(document).ready(function(){
        $("#rgn1").onclick("register.html");
    });
    </script> -->
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