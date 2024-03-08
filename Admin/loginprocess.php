<?php 
// session_start();

// include 'dbconnection.php';
// if(isset($_POST['btn1'])){
//     $name = $_POST['n1'];
//     $pass = $_POST['p1'];
//     // echo $name;
//     // echo $pass;
//     $inlog1 = "select * from adminlogin where username= '$name' and password= '$pass'";
//     echo $inlog1;
//     $res1 = mysqli_query($connec, $inlog1);
//     $row1 = mysqli_fetch_array($res1);

//     $name=$row1['username'];
//     $pass=$row1['password'];

//     $count1 = mysqli_num_rows($res1);
//     echo $count1;
//     if($count1 > 0)
//     {
//         $_SESSION['username'] = $name;
//         $_SESSION['password'] = $pass;
//         header('Location:adminhome.php');

//     }
//     else{
       
//         header('Location:adminlogin.php');
        
//         echo "<script>alert('login failed.username and password are incorrect....')</script>";
        
        
//     }
//     }
    
?>
<?php
// session_start();
// include 'dbconnection.php';

// if (isset($_POST['btn1'])) {
//     $name = $_POST['n1'];
//     $pass = $_POST['p1'];

//     $inlog1 = "SELECT * FROM adminlogin WHERE username= '$name' AND password= '$pass'";
//     echo $inlog1;
    
//     $res1 = mysqli_query($connec, $inlog1);
//     $row1 = mysqli_fetch_array($res1);

//     $count1 = mysqli_num_rows($res1);
//     echo $count1;

//     if ($count1 == 0) {
//         echo "<script>alert('Login failed. Username and password are incorrect.')</script>";
//         header('Location: adminlogin.php');
//         exit; // Add exit to prevent further script execution
//     } else {
//         $_SESSION['username'] = $row1['username'];
//         $_SESSION['password'] = $row1['password'];
//         header('Location: adminhome.php');
//         exit; // Add exit to prevent further script execution
//     }
// }
?>

<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'dbconnection.php';

if (isset($_POST['btn1'])) {
    $name = $_POST['n1'];
    $pass = $_POST['p1'];

    // Consider using prepared statements or sanitize input values

    $inlog1 = "SELECT * FROM adminlogin WHERE username= '$name' AND password= '$pass'";
    echo $inlog1;
    
    $res1 = mysqli_query($connec, $inlog1);
    $row1 = mysqli_fetch_array($res1);

    $count1 = mysqli_num_rows($res1);
    echo $count1;

    if ($count1 > 0) {
        $_SESSION['username'] = $row1['username'];
        $_SESSION['password'] = $row1['password'];
        header('Location: adminhome.php');
        exit; // Add exit to prevent further script execution
    } else {
        // header('Location: adminlogin.php');
        echo "<script>alert('Login failed. Username and password are incorrect.')</script>";
        exit; // Add exit to prevent further script execution
    }
}
?>
