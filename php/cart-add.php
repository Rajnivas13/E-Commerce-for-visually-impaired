<?php
    require "../includes/common.php";
    // if(isset($_GET['id'])){
    //     $item_id=$_GET['id'];
    // }
    // if(isset($_GET['qty'])){
    //     $qty = $_GET['qty'];
    // }
    $item_id=$_GET['id'];
    $qty = $_GET['qty'];
    // if(isset($_GET['id'],$_GET['qty'])){
        $users_id=$_SESSION['user_id'];
        $select_query="INSERT INTO users_items(users_id,item_id,status,qty)VALUES($users_id,$item_id,'Added to cart',$qty)";
        $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
        header('location:cart.php');
// cc
?>