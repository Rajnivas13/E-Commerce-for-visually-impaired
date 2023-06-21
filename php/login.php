<?php
     require "../includes/common.php";
    
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | login</title>
        <meta name="description" content="loginpage">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lobster&family=Open+Sans&display=swap" rel="stylesheet">
        <!--bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
       <!-- navbar -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="70045667387-ueb0315lds5ms3bmihiqhvf16q3bsja4.apps.googleusercontent.com">
        <link rel="stylesheet" href="../style/style.css"> 
        <link rel="stylesheet" type="text/css" href="../css/loginform.css">
        <link rel="stylesheet" href="../css/navbar.css"> 
        

        <!-- <style>
        body{
    background: linear-gradient(230deg, #e4c04e, #f2f3ab, #7eeae1);
    background-size: 600% 600%;

    -webkit-animation: AnimationName 15s ease infinite;
    -moz-animation: AnimationName 15s ease infinite;
    animation: AnimationName 15s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:94% 0%}
    50%{background-position:7% 100%}
    100%{background-position:94% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:94% 0%}
    50%{background-position:7% 100%}
    100%{background-position:94% 0%}
}
@keyframes AnimationName {
    0%{background-position:94% 0%}
    50%{background-position:7% 100%}
    100%{background-position:94% 0%}
}
        </style> -->
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

.navbar-inverse .navbar-brand {
    color: #fafafa;
}

.navbar>.container, .navbar>.container-fluid, .navbar>.container-lg, .navbar>.container-md, .navbar>.container-sm, .navbar>.container-xl, .navbar>.container-xxl {
     display: inline-block;
    /* flex-wrap: inherit; */
    /* align-items: center; */
    /* justify-content: space-between; */
}

.navbar-nav {
    display: inline-block;
    /* flex-direction: column; */
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
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

        </style> -->
    </head>
    <body>
    <script>
    var setInput1=function(){
    var userInput = document.getElementById('email').value;
    email1(userInput);
}
var setInput2=function(){
    var userInput = document.getElementById('password').value;
      password1(userInput);
}
    </script>
    <header>
        <a href="home.php" id="main" style="text-decoration:none;">E-store</a>
        <nav>
            <ul class="navlinks">
                <li><a href="signup.php"><button> SignUp</button></a></li>
                <li><a href="about.php"><button> AboutUs</button></a></li>
                <li><a class="btn" href="contact.php"><button>ContactUs</button></a></li>
            </ul>
        </nav>
    </header>
    <!-- <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="background-color: #92ccea;; font-family: 'Fredoka One', cursive;font-size:22px">E-COMMERCE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
      </ul>
    </div>
  </div>
</nav><br> -->
          <div class="container margin">
              <div class="row content">  
                  <div class="col-md-6 mb-3">
                    <img src="../img/loginimg.png" class="img-fluid" alt="image">
                  </div>      
                 <div class="col-md-6">
                    <h3 class="log-in-text mb-3">Login</h3>
                    <form class=form-group method="POST" action="login.php";>
                      <div class="form-group">
                          <label>E-mail</label>
                          <input type="text" id="email" class="form-control"  name="email1" required="true" autofocus > <br>
                      </div>
                      <div class="form-group">  
                           <label>password</label>             
                           <input type="password" id="password" class="form-control" name="password1" required="true" onfocus="setInput1();" >
                      </div> 
                      <br>
                      <div class="form-group">  
                          <label>validation</label>
                          <input type="text" id="valid" class="form-control" name="Validation" required="true" onfocus="setInput2();" >
                      </div>      
                    <br><?php
                          if(isset($_GET['m1'])){
                                echo $_GET['m1'];
                          }
                          ?>
                          <br><br>
                          <button input type="submit" class="btn btn-class" style="margin-left: 0px;">Submit</a><br></button>
                          <br><br>
                          <div class="g-signin2" data-height="35" datawidth="400" data-theme="dark" data-longtitle="true" data-onsuccess="onSignIn"></div>
                          <br> 
                      <div class="form-group mb-3">
                        <p >don't have an account?<a href="signup.php" style="color: blue;">Register</a></p>
                      </div>  
                        </form>
                 </div>                                           
                 
              </div>
          </div>

           <footer>    
              <div id="foot">      
                <center>       
                  <p>Copyright E-Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>  
                </center>  
              </div> 
           </footer>
    <!-- <div class="container footer-content">
      <footer>
         <div class="row">
           <div class="col-xs-4"><h3>Information</h3></div>
           <div class="col-xs-4"><h3>About us</h3></div>
           <div class="col-xs-4"><h3>Contact us</h3></div>
         </div> 
         <div class="row y">
           <div class="col-xs-4"><a href="about.php"><h5>About us</h5></a></div>
           <div class="col-xs-4"><a href="login.php"><h5>login</h5></a></div>
           <div class="col-xs-4"><span class="red"><h5>contact:+91-123-9000000000</h5></span></div>
         </div> 
         <div class="row y">
           <div class="col-xs-4"><a href="contact.php"><h5>Contact us</h5></a></div>
           <div class="col-xs-4"><a href="signup.php"><h5>signup</h5></a></div>
         </div> 
    </footer>    
</div>
</div> -->
   <script>
     function onSignIn(googleUser) {
  const profile = googleUser.getBasicProfile();
  const id = profile.getId();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  const name = profile.getName();
  console.log('Name: ' + profile.getName());
  const img =  profile.getImageUrl();
  console.log('Image URL: ' + profile.getImageUrl());
  const email = profile.getEmail();
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
function onSignIn(googleUser) {
  var id = googleUser.getAuthResponse().id_token;
  var xhr = new XMLHttpRequest();
xhr.open('POST', 'login.php');
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.onload = function() {
  console.log('Signed in as: ' + xhr.responseText);
};
xhr.send('idtoken=' + id);
}

   </script>
   <!-- js btstrap-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    


   <script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>

function setInput(){
  alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("login", {}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
}
function email1(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("loginemail", {"data":userInput}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }

    function password1(userInput){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("loginpassword", {"data":userInput}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }
    var move=function(){
      window.location="home.php";
    }

    function login(){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("loginwrong", {}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }
    function reload(){
      window.location.reload();
    }
    function gotosignup(){
      window.location= "signup.php";
    }
  var alanBtnInstance = alanBtn({
    key: "7e25fbd72b647a32609b89507078f07d2e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "reload") {
        reload();
      }
      else if(commandData.command === "go to signup") {
        gotosignup();
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script>

<?php
  // require "../includes/common.php";
  // require "alan.php"; 
  

  error_reporting(0);

  $email=$_POST['email1'];
  $email=mysqli_real_escape_string($con,$email);

  $password=$_POST['password1'];
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
    echo '<script type="text/javascript">',
     'move();',
     '</script>'
    ;
  }
  else if (!isset($_POST['email'])) {
    echo '<script type="text/javascript">',
     'setInput();',
     '</script>'
;
}
  else {
    echo '<script type="text/javascript">',
     'login();',
     '</script>'
;

  }
?>
    </body>

</html>
<!-- 70045667387-ueb0315lds5ms3bmihiqhvf16q3bsja4.apps.googleusercontent.com -->
