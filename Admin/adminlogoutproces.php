<?php 
// session_start();
// if(empty($_SESSION['password'])):
//     header('Location:adminlogin.php');
// endif;
?>
<!-- 
<!DOCTYPE html>
<html>
<body>
    <div style="width:150px;margin:auto;height:500px;margin-top:300px;">

    <?php

    //  include('dbconnection.php');
    //  session_destroy();

    //  echo '<meta http-equiv="refresh" content="2;url=adminlogin.php">';
    //  echo '<progress max=150><strong style="background-color:red;">progress: 60%
    //     done.</strong></progress><br>';
    //  echo '<span class="itext">Logging out please wait!....</span>';

    ?>
</div>
</body>
</html> -->
<?php
session_start();

if (empty($_SESSION['admin_password'])) {
    session_destroy();
    header('Location:adminlogin.php');
    exit; 
}
?>

<!DOCTYPE html>
<html>
<body>
    <div style="width:150px;margin:auto;height:500px;margin-top:300px;">

    <?php

     include('dbconnection.php');
     session_destroy();

     echo '<meta http-equiv="refresh" content="2;url=adminlogin.php">';
     echo '<progress max=150><strong style="background-color:red;">progress: 60%
        done.</strong></progress><br>';
     echo '<span class="itext">Logging out please wait!....</span>';

    ?>
</div>
</body>
</html>
