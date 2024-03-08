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
        background-image: url(88.jpeg) ;
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
    box-shadow: 0px 4px 8px black;
    display: grid;
    grid-template-columns: 1fr 1fr ;
    height: 693px;
    width: 100%;
}
.class1{
    margin-top: 70px;
    background-color:  rgba(255, 255, 255, 0.432);
    margin-left: 200px;
    box-shadow: 0px 4px 8px #7E6363;
    display: grid;
    grid-template-columns: 1fr 1fr ;
    height: 400px;
    width: 400px;
    border: 3px solid #262020;
    
}
.class2{
    margin-top: 70px;
    background-color: rgba(255, 255, 255, 0.452);
    margin-left: 150px;
    box-shadow: 0px 4px 8px #7E6363;
    height: 400px;
    width: 400px;
    border: 3px solid black;
}
.heading
{
    background-color: #00000085;
    color: white;
    width: 200px;
    text-align: center;
    text-transform: uppercase;
    font-size: 20px;
    position: absolute;
    margin-left: 120px;
    font-weight: bold;
    margin-top: 15px;
    font-family:monospace;
   
}
.heading2
{
    background-color: #00000085;
    color: white;
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
.book button{
    position: absolute;
    margin-top:-49px;
    border-radius: 5px;
    margin-left: 230px;
    height: 50px;
    width: 100px;
    border: 2px solid rgb(0, 0, 0);
    font-family: monospace;
    background-color: #2620209d;
    color: white;
    font-size: 16px;
}
.book button:hover{
    color: rgb(10, 255, 43);
    background-color:#262020;
    transform:scale(1.1);
    transition: 0.1s;
}

.img2{
    position: absolute;
    margin-top: 50px;
    margin-left: 55px;
}
.book2 button{
    height: 50px;
    width: 100px;
    border: 2px solid rgb(0, 0, 0);
    font-family: monospace;
    border-radius: 5px;
    background-color:#2620209d;
    color: white;
    font-size: 16px;
    position: absolute;
    margin-top: -43px;
    margin-left: 230px;
}
.book2 button:hover{
    color: rgb(10, 255, 43);
    background-color:#262020;
    transform:scale(1.1);
    transition: 0.1s;
}
.inf1 button{
    margin-top: 350px;
    margin-left: -250px;
    height: 30px;
    width: 100px;
    border: 2px solid rgb(0, 0, 0);
    font-family: monospace;
    background-color: #2620209d;
    color: white;
    font-size: 16px;
    border-radius: 5px;
}
.inf1 button:hover{
    color: rgb(10, 255, 43);
    background-color:#262020;
    transform:scale(1.1);
    transition: 0.1s;
}
.inf2 button{
    height: 30px;
    width: 100px;
    border: 2px solid rgb(0, 0, 0);
    font-family: monospace;
    background-color: #2620209d;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    margin-top:350px;
    margin-left: 100px;
}
        </style>
</head>
<body>
    
    <nav>
        
  <label class="logo">DRIVING SCHOOL</label>
  <ul>
   
      <li><a href="home.php" >Home</a></li>
      <li><a href="#" class="active">Courses</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="feedback.php">Feedback</a></li>
      <li><a href="order.php">orders</a></li>
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
            <button id="info1">Info!</button>
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
            <button id="info2">Info!</button>
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
</body>
</html>