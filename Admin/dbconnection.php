<?php
$connec = mysqli_connect("localhost", "root", "", "drive");

if(!$connec){
    die("connection error:" . mysqli_connect_error());
}
?>