 <!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Alan Example</title>
</head>
<body>
<div class="alan-btn"></div>
<script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>

var login= function(){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("loginwrong", {}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
  move();
    }

    var move=function(){
      window.location="login.php";
    }
  var alanBtnInstance = alanBtn({
    key: "7e25fbd72b647a32609b89507078f07d2e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "go:back") {
        //call client code that will react to the received command
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script> -->



<?php
  // require "../includes/common.php";
  // require "alan.php"; 
  

  
  $email=$_POST['email'];
  $email=mysqli_real_escape_string($con,$email);

  $password=$_POST['password'];
  $password=mysqli_real_escape_string($con,$password);
  $password=MD5($password);

  $regex_email="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?";

  $select_query="SELECT * FROM users WHERE email='$email' AND password='$password'" ;
  $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
  $num_rows=mysqli_num_rows($select_query_result);
  $row=mysqli_fetch_array($select_query_result);


//  if(!preg_match($regex_email==$email)){
//  $m1=echo"<span class='red'>incorrect email</span>";
//  header('location:login.php?m1='.$m1);
//  }

  if($num_rows!=0){
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['address']=$row['address'];
    header('location:home.php');
  }
  else{
    echo '<script type="text/javascript">',
     'login();',
     '</script>';

  }
?>

<!-- </body>
</html> -->