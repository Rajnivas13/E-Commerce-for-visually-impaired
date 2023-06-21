<?php
    require "../includes/common.php";
?>

<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | contact us</title>
        <meta name="description" content="INDEX|MOBILE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->



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
        <link rel="stylesheet" type="text/css" href="../css/navbar.css">

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
    <header>
        <a href="home.php" id="main" style="text-decoration:none;">E-store</a>
        <nav>
            <ul class="navlinks">
                <li><a href="about.php"><button> AboutUs</button></a></li>
                <li><a class="btn" href="contact.php"><button>ContactUs</button></a></li>
                <li><a href="index.php"><button> Logout </button></a></li>

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
      <a class="navbar-brand" href="home.php"style="background-color: #92ccea;; font-family: 'Fredoka One', cursive;font-size:22px">E-COMMERCE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav> -->
<div class="container">
    <div class="row">
        <div class="col-xs-8">
            <br>
            <br>
            <h2>LIVE SUPPORT</h2>
            <br>
            <h4>24 hours a day|7 days a week|24 hrs a day|365 days in a year TECHNICAL SUPPORT</h4>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lorem tellus, volutpat at lobortis at, consectetur eu nibh. Maecenas rutrum vestibulum porttitor. Suspendisse et augue id justo pellentesque mattis in non massa. Aenean auctor dolor in porttitor consectetur. Fusce molestie, ipsum sed pellentesque elementum, quam ex pellentesque sapien, id dignissim elit risus et sem. Cras posuere purus turpis, luctus commodo ante cursus non. Pellentesque ut eros eget nulla accumsan consequat et non metus.

Aliquam imperdiet porta mi. Morbi euismod non libero et tincidunt</p>
        </div>
        <div class="col-xs-4">
            <br><br><br>
            <img src="../img/live-support.gif">
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
        <div class="col-xs-8">
            <h3>CONTACT INFO.</h3>
               <form class="form-group" action="contact_script.php" method="POST">
                   <label for="name" >Name</label><br>
                   <input type="text" name="name" id="name" class="form-control" placeholder="Name" size="75" title="your name" required><br><br>
                   <label for="email">E-mail</label><br>
                   <input type="email" name="email" id="email"  class="form-control" placeholder="email" size="75" title="your email" required><br><br>
                   <label for="Message">Feedback</label><br>
                   <textarea name="message" rows="4" cols="77" placeholder="your comments..." class="form-control" title="your valuable comments" required></textarea>
                <?php
                if(isset($_GET['m1'])){
                  echo $_GET['m1'];
                }
                ?>        
                <br> <br>
                 <button type="submit" class="btn btn-primary" value="submit">submit</button>
              
           </div>
           <div class="col-xs-4">
              <h3>COMPANY INFORMATION</h3><br>
              <p>500,Lorem ipsum dolor sit amet,</p></br>
               <p>USA</p>
               <p>phone:+91-0000000000</p>
               <p>email:abc@gmail.com</p>
               <p>fax:(000) 000000000</p>
               <p>follow us on:facebook,twitter,instagram</p>
           </div>
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
</body>
</html>