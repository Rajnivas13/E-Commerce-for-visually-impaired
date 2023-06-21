<?php
    require "../includes/common.php";
    $item_id=$_GET['id'];
    $qty = $_GET['qty'];  
    $users_id=$_SESSION['user_id'];
    $select_query="UPDATE users_items SET qty= $qty WHERE item_id=$item_id AND users_id=$users_id AND status='Added to cart'";
    $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    header('location:cart.php');
?>

<!-- UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition; -->