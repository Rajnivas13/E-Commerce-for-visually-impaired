<?php
    require "../includes/common.php";
    if(isset($_session['email'])){
      header('location:home.php');
    }
?>
<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | signup</title>
        <meta name="description" content="INDEX|MOBILE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lobster&family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/signup.css">
  <link rel="stylesheet" href="../css/navbar.css"> 

   <!-- <style>
   .navbar{
    border-width: 0px;

    -webkit-box-shadow: 0px 0px;
    box-shadow: 0px 0px;
    background-color: rgb(53 52 52 / 63%);
    background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
    background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
}

.navbar>.container, .navbar>.container-fluid, .navbar>.container-lg, .navbar>.container-md, .navbar>.container-sm, .navbar>.container-xl, .navbar>.container-xxl {
    display: inline-block;
    /* flex-wrap: inherit;
    align-items: center;
    justify-content: space-between; */
}

.navbar-nav {
    /* display: flex; */
    /* flex-direction: column; */
    display:inline-block;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.navbar-inverse .navbar-brand {
    color: #fafafa;
}

.nav>li {
    position: relative;
    display: inline-block;
    /* padding: 0px; */
    background-color: #f3f8f8;
    top: 1rem;
    height: 3rem;
    margin-left: 22px;
    border: 2px solid #cec7c7;
    border-radius: 15px;
    box-shadow: 0px 0px 1px 2px;
}

.nav>li>a {
    position: relative;
    display: inline-block;
    padding: 0px 24px;
    top: .5rem;
}
.navbar-inverse .navbar-brand, .navbar-inverse .navbar-nav>li>a {
    /* text-shadow: 0 -1px 0 rgb(0 0 0 / 25%); */
    text-shadow:none;
}

.navbar-inverse .navbar-nav>li>a {
    color: black;
}

   </style>
    -->
   <script>


$(".username").keyup(function (event) {
    if (event.keyCode == 13) {
        textboxes = $("input.username");
        currentBoxNumber = textboxes.index(this);
        if (textboxes[currentBoxNumber + 1] != null) {
            nextBox = textboxes[currentBoxNumber + 1];
            nextBox.focus();
            nextBox.select();
        }
        event.preventDefault();
        return false;
    }
});

</script>

<script>
var getInput1=function(){
    var userInput = document.getElementById('name').value;
      name(userInput);
}

var getInput2=function(){
    var userInput = document.getElementById('email').value;
      email(userInput);
}

var getInput3=function(){
    var userInput = document.getElementById('password').value;
      password(userInput);
}

// var getInput4=function(){
//     var userInput = document.getElementById('contact').value;
//       contact(userInput);
// }

var getInput5=function(){
    var userInput = document.getElementById('contact').value;
      contact(userInput);
}

var getInput6=function(){
    var userInput = document.getElementById('address').value;
      address(userInput);
}


</script>
   

    </head>
<body onload="signup();">
<div class="alan-btn"></div>
      <header>
        <a href="home.php" id="main" style="text-decoration:none;">E-store</a>
        <nav>
            <ul class="navlinks">
                <li><a class="btn" href="login.php"><button>Login</button></a></li>
                <li><a class="btn" href="about.php"> <button>AboutUs</button></a></li>
                <li><a class="btn" href="contact.php"><button>ContactUs</button></a></li>
            </ul>
        </nav>
      </header>

      <!-- <nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php"style="background-color: #92ccea;; font-family: 'Fredoka One', cursive;font-size:22px">E-COMMERCE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php"><span class="glyphicon glyphicon-log-in"></span> Cart</a></li>
        <li><a href="settings.php"><span class="glyphicon glyphicon-list"></span> Settings</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-phone"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav> -->
    <!-- <nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="background-color: #92ccea; font-family: 'Fredoka One', cursive;font-size:22px;">E-COMMERCE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
       
      </ul>
    </div>
  </div>
</nav>  -->
<div class="container">
 <div class="row content">
    <div class="col-md-6">
      <img src="../img/signuppage.png" class="img-fluid" id="img" alt="image">
    </div>
    <div class="col-md-6">
         <h2 class="sign-in-text mb-3">SIGN UP</h2>
         <form class="form-group"  action="signup_script.php" method="POST"><br>
         <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control" pattern="[a-zA-Z]+" title="your full name" required="true"autofocus ><br>
         </div>
         <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" title="email must contain @ and domain name" required="true" onfocus="getInput1();"  style="text-transform:lowercase" ><br>
         </div>
         <div class="form-group">
            <label>Password</label>
           <input type="password" name="password" id="password" class="form-control" required="true" maxlength="4" pattern="\d{4}" title="Eight or more characters" onfocus="getInput2();"><br> 
         </div>
         <div class="form-group">
           <label>Contact</label>
            <input type="text" name="contact" id="contact" class="form-control" required="true" onfocus="getInput3();"><br>
         </div>
         
         <div class="form-group">
         <label>Address</label>
         <input type="text" name="address" id="address" class="form-control" title="door no."  onfocus="getInput5();"  required="true"><br>
         </div>

         <div class="form-group">
         <label>Validation</label>
         <input type="text" name="Valid" id="valid" class="form-control" onfocus="getInput6();"  required="true"><br>
         </div>
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         <br>
         <!-- <?php
               if(isset($_GET['m1'])){
                   echo $_GET['m1'];
               }
         ?>
         <?php
               if(isset($_GET['m1'])){
                   echo $_GET['m1'];
               }
         ?> -->
         <?php
               if(isset($_GET['m1'])){
                   echo $_GET['m1'];
               }
         ?>
         <br>
         <button type="submit" class="btn btn-class" value="submit" style="margin-left: 0px;" onfocus="getInput6();">submit</button><br>
    </div>
 </div>
</div><br><br><br><br>
          <footer>    
              <div id="foot">      
                <center>       
                  <p>Copyright E-Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>  
                </center>  
              </div> 
           </footer>
<!-- <div class="footer">
    <div class="container footer-content">
      <footer>
         <div class="row">
           <div class="col-xs-4"><h3>Information</h3></div>
           <div class="col-xs-4"><h3>About us</h3></div>
           <div class="col-xs-4"><h3>Contact us</h3></div>
         </div> 
         <div class="row">
           <div class="col-xs-4"><a href="about.php"><h5>About us</h5></a></div>
           <div class="col-xs-4"><a href="login.php"><h5>login</h5></a></div>
           <div class="col-xs-4"><span class="red"><h5>contact:+91-123-9000000000</h5></span></div>
         </div> 
         <div class="row">
           <div class="col-xs-4"><a href="about.php"><h5>Contact us</h5></a></div>
           <div class="col-xs-4"><a href="signup.php"><h5>signup</h5></a></div>
         </div> 
    </footer>    
</div>
</div> -->
<script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
 <script>
function signup(){
    alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("signup", {}, function(error,result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
  }
    
    
    function name(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("name", {"data":userInput}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }

    function email(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("email", {"data":userInput}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }
    function password(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("password", {"data":userInput}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }

    function contact(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("contact", {"data":userInput}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }

    function city(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("city", {"data":userInput}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }
    
    function address(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("Address", {"data":userInput}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }
    function gotologin(){
      window.location= "login.php";
    }
    

    var alanBtnInstance = alanBtn({
      key: "7e25fbd72b647a32609b89507078f07d2e956eca572e1d8b807a3e2338fdd0dc/stage",

    
    onCommand: function (commandData) {
      if (commandData.command === "add_item") {
        addItemToCart(commandData.item,commandData.quantity);
      }
      else if (commandData.command === "remove_item") {
        removeItem(commandData.item);
      }
      else if(commandData.command === "gotocart"){
        gotocart();
      }
      else if(commandData.command === "go to login"){
        gotologin();
      }

    },
    rootEl: document.getElementById("alan-btn"),
  });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
