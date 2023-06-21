<?php
    // $servername ="sql306.epizy.com";
    // $username = "epiz_29197218";
    // $password = "I95dwG4xrcvv";
    // $dbname = "epiz_29197218_ecommercedatabase";

    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "mobile";
    $con = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error($con));
    if(!isset($_SESSION['email'])){
        session_start();
    }
?>
