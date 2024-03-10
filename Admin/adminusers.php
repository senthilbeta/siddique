<?php 
// session_start();
// if(empty($_SESSION['password'])):
//     header('Location:adminlogin.php');
// endif;
?>
<?php
session_start();

if (empty($_SESSION['admin_password'])) {
    session_destroy();
    header('Location:adminlogin.php');
    exit; 
}
?>

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


    table{
        border-collapse: collapse;
        background-color: white;
        margin: 15px;
        border-radius: 20px;

        box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
      }
       th{
        font-weight: bolder;
        background-color: black;
        color: white;
      }
      table td,th{
        border: 1px solid #071952;
        width: 63vw;
        text-align: left;
        padding: 25px 10px;
      }

      .view{
        padding: 8px;
        color: white;
        background-color: #071952;
        font-size: 15px;
        text-decoration: none;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        transition:0.3s;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      }
      .view:hover{
        background-color: #97FEED;
        color: black;
        opacity: 0.8;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
       }
      .edit{
        padding: 8px;
        color: white;
        background-color: #0B666A;
        font-size: 16px;
        text-decoration: none;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        transition:0.3s;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;

      }
      .edit:hover{
        background-color: #97FEED;
        color: black;
        opacity: 0.8;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;

      }
      .delete{
        padding: 8px;
        color: white;
        background-color: red;
        border: none;
        outline: none;
        border-radius: 10px;
        font-size: 15px;
        transition:0.3s;
        text-decoration: none;
        cursor: pointer;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      }
       .delete:hover{
        background-color: #97FEED;
        color: black;
        opacity: 0.8;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
      }
      .insert{
        padding: 8px;
        color: #071952;
        background-color: #97FEED;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        width: 150px; 
        margin-left: 20px;
      }
      .insert:hover{
        background-color: red;
        color: white;
      }
      
    </style>
</head>
<body>
<nav>
     
<label class="logo">DRIVING SCHOOL</label>
<ul>
    
    <li><a href="adminhome.php">Dashboard</a></li>
    <li><a href="#" class="active">Users</a></li>
    <div class="dropdown">
    <li><button class="dropbtn">Bookings</button>
        <div class="dropdown-content">
          <a href="adminnormalcourse.php">NormalCourses</a>
          <a href="adminadvancecourses.php">Advancedcourses</a>
        </div>
      </div></li>
      <div class="dropdown2">
      <li><button class="dropbtn2">Others</button>
        <div class="dropdown-content2">
          <a href="contactad.php">Contact</a>
          <a href="feedbackad.php">Feedback</a>
        </div>
      </div></li>
    <li><a href="adminlogoutproces.php">Logout</a></li>  

</ul>
</nav>
<table id="table">
                            <tr>
                                <th>NAME</th>
				                        <th>GENDER</th>
                                <th>TIMING</th>
                                <th>MOBILE NO</th>
                                <th>EMAIL</th>
                                <th>COURSE TYPE</th>
                                <th style="text-align:center;">DELETE ACCOUNT</th>

                            </tr>
        <?php
			 include 'dbconnection.php';
			 $sql = 'select * FROM normalbooking ORDER BY name ASC';
			 $query = mysqli_query($connec,$sql);
			 $num = mysqli_num_rows($query);
			 if($num>0){
				while($result=mysqli_fetch_assoc($query)){
                           echo '<tr>';
                           echo '<td>'.$result['name'].'</td>';
                           echo '<td>'.$result['gender'].'</td>';
                           echo '<td>'.$result['time'].'</td>';
                           echo '<td>'.$result['mobile'].'</td>';
                           echo '<td>'.$result['email'].'</td>';
                           echo '<td>'.$result['type'].'</td>';
                            //  echo "<td><a href='studentprofile.php?fn=".$result['name']."&ri=".$result['id']."&rn=".$result['rollno']."&em=".$result['email']."&ps=".$result['pass']."&gn=".$result['gender']."&im=".$result['image']."&dep=".$result['department']."'  class='view'>PROFILE</a></td>";
            //  echo "<td><a href='editprocess.php?fn=".$result['name']."&ri=".$result['id']."&rn=".$result['rollno']."&em=".$result['email']."&ps=".$result['pass']."&gn=".$result['gender']."&dep=".$result['department']."'  class='edit'>EDIT</a></td>";

             echo "<td style='text-align:center;'><a href='userdeleteprocess.php?name=".$result['name']."&mobile=".$result['mobile']."'  class='delete'>DELETE</a></td>";
                           echo '</tr>';
				}
			}
      // $sql = 'select * FROM advance ORDER BY name ASC';
			//  $query = mysqli_query($connec,$sql);
			//  $num = mysqli_num_rows($query);
			//  if($num>0){
			// 	while($result=mysqli_fetch_assoc($query)){
      //                      echo '<tr>';
      //                      echo '<td>'.$result['name'].'</td>';
      //                      echo '<td>'.$result['gender'].'</td>';
      //                      echo '<td>'.$result['time'].'</td>';
      //                      echo '<td>'.$result['mobile'].'</td>';
      //                      echo '<td>'.$result['email'].'</td>';
      //                       //  echo "<td><a href='studentprofile.php?fn=".$result['name']."&ri=".$result['id']."&rn=".$result['rollno']."&em=".$result['email']."&ps=".$result['pass']."&gn=".$result['gender']."&im=".$result['image']."&dep=".$result['department']."'  class='view'>PROFILE</a></td>";
      //       //  echo "<td><a href='editprocess.php?fn=".$result['name']."&ri=".$result['id']."&rn=".$result['rollno']."&em=".$result['email']."&ps=".$result['pass']."&gn=".$result['gender']."&dep=".$result['department']."'  class='edit'>EDIT</a></td>";

      //        echo "<td style='text-align:center;'><a href='deleteprocess.php?id=".$result['id']."&dep=".$result['department']."'  class='delete'>DELETE</a></td>";
      //                      echo '</tr>';
			// 	}
			// }
			// ?>

                        </table>
                        <?php 

if($num == 0){

    echo "<h2 style='text-align:center;margin-top:50px; margin-left:500px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;color:#CDFAD5; background-color:black;width:400px;'>No Data Found</h2>";
    

}
?>
</body>
</html>