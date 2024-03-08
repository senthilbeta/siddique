<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="adpr.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
      
.dropbtn {
 
  padding:  7px 13px;
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
  min-width: 150px;
  box-shadow: 0px 4px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: rgb(0, 0, 0);
  text-align: center;
  margin-top: 20x;
  text-decoration: none;
  display:flexbox;
  width: 130px;
  height: 50px;
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
   
    .dropbtn2 {
 
 padding:  7px 13px;
 font-size: 17px;
 border: none;
   background:#262020;
       color: rgb(253, 253, 253);

       border: none;
       border-radius: 3px;
       text-transform: uppercase;
       font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.dropdown2 {
 position: relative;
 display: inline-block;
}


.dropdown-content2 {
 display: none;
 position: absolute;
 background-color: #fff9f9;
 min-width: 150px;
 box-shadow: 0px 4px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
}

.dropdown-content2 a {
 color: rgb(0, 0, 0);
 text-align: center;
 margin-top: 20x;
 text-decoration: none;
 display:flexbox;
 width: 130px;
 height: 50px;
 font-size: 14px;
 font-weight: bold;
}
.dropdown-content2 a:hover{
   background-color: #7261618e;
   color: black;
}

.dropdown2:hover .dropdown-content2 {
   display: block;}


.dropdown2:hover .dropbtn2 {
   color:#262020;
   background-color: #fff9f9;}
    </style>
</head>
<body>
<nav>
     
<label class="logo">DRIVING SCHOOL</label>
<ul>
    
    <li><a href="adminhome.html" class="active">Dashboard</a></li>
    <li><a href="adminusers.html">Users</a></li>
    <div class="dropdown">
    <li><button class="dropbtn">Bookings</button>
        <div class="dropdown-content">
          <a href="adminnormalcourse.html">NormalCourses</a>
          <a href="adminadvancecourses.html">Advancedcourses</a>
        </div>
      </div></li>
      <div class="dropdown2">
      <li><button class="dropbtn2">Others</button>
        <div class="dropdown-content2">
          <a href="contactad.html">Contact</a>
          <a href="feedbackad.html">Feedback</a>
        </div>
      </div></li>
</ul>
</nav>
</body>
</html>