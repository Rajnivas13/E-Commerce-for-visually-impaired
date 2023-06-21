<?php
    include '../includes/common.php';
    if(isset($_SESSION['email'])){
        header("location:home.php");
    }
?>
<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | index</title>
        <meta name="description" content="INDEX|MOBILE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->

        <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lobster&family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" type="text/css" href="../style/style.css"> -->
        <link rel="stylesheet" type="text/css" href="../css/navbar.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel{
    width:80%;
    max-height:50%;
    margin:auto;
    margin-top:5rem;
    margin-bottom:5rem;
    /* margin-left:2rem;
    margin-right:2rem; */

  }
  header,nav,menu{
    display:flex;
  }
  button{
    color:white;
  }
  .mainimage{
    opacity: 0.8;
  }

  .main {
    top:30%;
  }

.row{
  margin-left:5rem;
  margin-right:5rem;
}
  .thumbnail{
    width:80%;
    margin:auto;
    margin-bottom:3rem;
    box-shadow: 1px -1px 7px 0px #03596c;
    border-radius: 15px;
}
  
  
  .carousel-caption{
    margin-bottom:4rem;
  }

  .caption{
    
    border-top:2px solid black;
    margin-left:1.5rem;
    margin-right:.5rem;
  }
  .caption b,p{
    font-family: 'Fredoka One', cursive;
    font-size:11px;
  }
  .image{
    background-color:red;

  }
  button{
    margin-left:2rem;
  }
  .btn-block {
    display: inline-block;
    width: 80%;
    margin-left:2rem;
}
.btn-primary {
    color: #fff;
    background-color: #066e96;
    border-color: #f8f9f9;
    border-radius: 3rem;
    border: 2px solid #73f3f3;
}

h2{
  font-weight:800; font-size:50px; font-family: 'Lobster', cursive;
}
.carousel p{
  font-family: 'Fredoka One', cursive;
  font-size:20px;
}


/* .navbar{
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

.nav>li {
    position: relative;
    display: inline-block;
    /* padding: 0px; 
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
    /* text-shadow: 0 -1px 0 rgb(0 0 0 / 25%); 
    text-shadow:none;
}

.navbar-inverse .navbar-nav>li>a {
    color: black;
}

.carousel-inner {
    position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;
    box-shadow: 0 0 14px 1px #333;
} */
  </style>

  <script>
  function main(){
    alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("index", {}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
  }
  </script>

    
<body onload="main();">
      <header>
        <a href="home.php" id="main" style="text-decoration:none;">E-store</a>
        <nav>
            <ul class="navlinks">
                <li><a class="btn" href="signup.php"><button>SignUp</button></a></li>
                <li><a class="btn" href="login.php"><button>Login</button></a></li>
                <li><a class="btn" href="about.php"> <button>AboutUs</button></a></li>
                <li><a class="btn" href="contact.php"><button>ContactUs</button></a></li>
            </ul>
        </nav>
       </header>
    <!-- <nav class="navbar navbar-default">
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
        <li>
        <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
  
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
      </ul>
    </div>
  </div>
</nav> -->

<div class="body wrapper">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="mainimage" src="../img/lap.jpg" alt="Chania">
      
      <div class="carousel-caption  main">
        <i class="fas fa-eye" style="font-size:'36px';"></i>
        <h2 style="font-weight:800; font-size:50px; font-family: 'Lobster', cursive;">E-commerce for Visually Impaired</h2>
        <p styel="font-weight:bold; font-family:'Times new Roman';" >Enables you to shop by using voice commands</p>
      </div>
    </div>
    

    

    <div class="item">
      <img src="../img/ecom.jpg" claa="mainimage" alt="New York">
      <div class="carousel-caption  main">
        <h2>Furnish your living with Trending gadgets and products</h3>
        <p>Quality matters a lot with our Products</p>
      </div>
    </div>

    <div class="item">
      <img src="../img/womencart.jpg" class="mainimage" alt="Chicago">
      <div class="carousel-caption  main">
        <h2>Have a safe delivery</h3>
        <p>your products would be delivered in a safe track</p>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
   <div class="container-fluid">
       <div class="row product1">
           <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-7.jpg" height="120px" width="100px">
                  <div class="caption">
                    <b> &nbsp&nbsp iphone-7</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block" style="margin-left: 0px;">Order now!!</button></a>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-8.jpg" height="120px" width="100px">
                  <div class="caption">
                  <b>&nbsp&nbsp iphone-8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block" style="margin-left: 0px;">Order now!!</button></a>
                  </div>
               </div> 
         </div>


         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-xr.jpg" height="135px" width="120px">
                  <div class="caption">
                  <b>&nbsp&nbspiphone-xr</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block" style="margin-left: 0px;">Order now!!</button></a>
                  </div>
               </div> 
         </div>
      </div> 
 
      <div class="row product">
      <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone-xs-max.jpg" height="120px" width="100px">
                  <div class="caption">
                  <b>&nbsp&nbspiphone-xs-max</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block" style="margin-left: 0px;">Order now!!</button></a>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/mi-note-8.jpg" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbspredmi-note-8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block" style="margin-left: 0px;">Order now!!</button></a>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/mi-redmi-k20-pro.jpeg" height="100px" width="90px">
                  <div class="caption">
                  <b>&nbsp&nbspredmi-note-8-pro</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block" style="margin-left: 0px;">Order now!!</button></a>
                  </div>
               </div> 
         </div>
     </div>
       <div class="row product">
       <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/one-plus-7T.jpg" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbspone-plus-8T</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block" style="margin-left: 0px;">Order now!!</button></a>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/one-plus-7T-pro.jpg" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbspone-plus-7T-pro</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block" style="margin-left: 0px;">Order now!!</button></a>
                  </div>
               </div> 
         </div>
        
         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/samsung-galaxy-a51.jpeg" height="100px" width="90px">
                  <div class="caption">
                  <b>&nbsp&nbspsamsung-galaxy-a51</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                     <a href="login.php"><button type="button" class="btn btn-primary btn-block" style="margin-left: 0px;">Order now!!</button></a>
                  </div>
               </div> 
         </div>

       </div>
      </div>
   </div>
</div>

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
            <footer>    
              <div id="foot">      
                <center>       
                  <p>Copyright E-Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>  
                </center>  
              </div> 
           </footer>

           <script>
           function login(){
             window.location="../php/login.php";
           }

           function signup(){
             window.location="..php/signup.php";
           }
           </script>
           <script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
  var alanBtnInstance = alanBtn({
    key: "7e25fbd72b647a32609b89507078f07d2e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "go to signup") {
        signup();
        
      }
      else if (commandData.command === "go to login") {
        login();
        
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script>
    </body>
</html>




 


