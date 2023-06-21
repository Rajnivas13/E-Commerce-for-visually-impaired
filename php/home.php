<?php
   require "../includes/common.php";
?>
<!DOCTYPE html>
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | home</title>
        <meta name="description" content="INDEX|MOBILE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lobster&family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="../style/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  .size{
    font-size:50px;
  }
   </style>
<style>
.css-selector {
    -webkit-animation: AnimationName 33s ease infinite;
    -moz-animation: AnimationName 33s ease infinite;
    animation: AnimationName 33s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:0% 96%}
    50%{background-position:100% 5%}
    100%{background-position:0% 96%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 96%}
    50%{background-position:100% 5%}
    100%{background-position:0% 96%}
}
@keyframes AnimationName {
    0%{background-position:0% 96%}
    50%{background-position:100% 5%}
    100%{background-position:0% 96%}
}


.row{
  margin-left:5rem;
  margin-right:5rem;
}
  .thumbnail{
    width:80%;
    height:100%;
    margin:auto;
    margin-bottom:30px;
    box-shadow: 1px -1px 7px 0px #03596c;
    border-radius: 15px;
}
  .thumbnail img{
    margin-bottom:2rem;
    margin-top:.5rem;
    height:180px;
  }
  
  .carousel{
    box-shadow: 0 0 5px 5px rgb(0 0 0 / 5%);
    width:90%;
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
.product1{
  margin-top:2rem;
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
} */
.carousel-inner {
    position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;
    box-shadow: 0 0 14px 1px #333;
}
</style>
<link rel="stylesheet" type="text/css" href="../css/navbar.css">
    </head>

    <script>
    var main1=function(){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("products", {}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
  }
    </script>

<script>
  function main(){
    alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("products", {}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
  }
  </script>

    
<body onload="main();">


<?php
            include "../php/checkif-added-to-cart.php";
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
            $emaili = chop($email,"@gmail.com");
        ?>
        <header>
        <a href="home.php" id="main" style="text-decoration:none;">E-store</a>
        <nav>
            <ul class="navlinks">
                <li><a href="cart.php"><button> Cart</button></a></li>
                <li><a class="btn" href="settings.php"><button>Settings</button></a></li>
                <li><a href="signup.php"><button> Logout </button></a></li>

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
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav> -->
<br>
<div class="content">
            <div class="container-fluid">
              
                <!-- <div class="jumbotron">
                    <?php
                        echo "<h3 class='text-center size '>Welcome  <b>$emaili</b> !!!</h3>";
                    ?>
                </div> -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:480px; width:80%; margin:auto; border-radius:20%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="../img/main.gif"alt="Los Angeles" style=" width: 100%;height:480px;border-radius:5px;">
        <div class="carousel-caption  main">
        <i class="fas fa-eye" style="font-size:'36px';"></i>
        <h2 style="font-weight:800; font-size:50px; font-family: 'Lobster', cursive;">E-commerce for Visually Impaired</h2>
        <p styel="font-weight:bold; font-family:'Times new Roman';" >Enables you to shop by using voice commands</p>
      </div>

      </div>

      <!-- <div class="item">
        <img src="../img/ecom2.gif" alt="Chicago" style="width:100%;height:400px;border-radius:5px;">
        <div class="carousel-caption  main">
        <i class="fas fa-eye" style="font-size:'36px';"></i>
        <h2 style="font-weight:800; font-size:50px; font-family: 'Lobster', cursive;">E-commerce for Visually Impaired</h2>
        <p styel="font-weight:bold; font-family:'Times new Roman';" >Enables you to shop by using voice commands</p>
      </div>
      </div>
    
      <div class="item">
        <img src="../img/ecom4.gif" alt="New York" style="width:100%;height:400px;border-radius:5px;">
        <div class="carousel-caption  main">
        <i class="fas fa-eye" style="font-size:'36px';"></i>
        <h2 style="font-weight:800; font-size:50px; font-family: 'Lobster', cursive;">E-commerce for Visually Impaired</h2>
        <p styel="font-weight:bold; font-family:'Times new Roman';" >Enables you to shop by using voice commands</p>
      </div>
      </div> -->
  
    </div>

    <!-- Left and right controls -->
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

<div class="alan-btn"></div>
<div class="body wrapper" > 
   <div class="container-fluid">
       
      <div class="row product1">
      <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/remi10.gif" style="height:180px;">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspRedmi Note 10</b>
                    <b><p>&nbsp&nbsp MRP.Rs:42000/- &nbsp <strike>45,000/-</strike></p></b>
                    <?php
                    if(checkifadded(3)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=3"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/redmi8.gif" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspRedmi Note 8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:8000/- &nbsp <strike>10000/-</strike></p></b>
                    <?php
                    if(checkifadded(1)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=1"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/redmi9.gif" style="Width:200px;">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspRedmi Note 9</b>
                    <b><p>&nbsp&nbsp MRP.Rs:9000/- &nbsp <strike>11000/-</strike></p></b>
                    <?php
                    if(checkifadded(2)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=2"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
     </div>
     <div class="row product" >
           <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone 7.gif" >
                  <div class="caption">
                    <b> &nbsp&nbsp&nbsp iPhone 7</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>55000/-</strike></p></b>
                    <?php
                    if(checkifadded(10)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=10"><button type="button" id="redmi" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                     </div>
               </div> 
         </div>


         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone 8.gif" style="Width:200px;">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbsp iPhone 8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:55000/- &nbsp <strike>65000/-</strike></p></b>
                    <?php
                    if(checkifadded(11)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=11"><button type="button" id="Poco" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>


         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/iphone xr.gif" styel="Width:200px;">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspiPhone XR</b>
                    <b><p>&nbsp&nbsp MRP.Rs:56000/- &nbsp <strike>61000/-</strike></p></b>
                    <?php
                    if(checkifadded(12)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=12"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
      </div> 
       <div class="row product">
       <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/onelpus7.gif" style="Width:200px;">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspOnePlus 8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:23000/- &nbsp <strike>23300/-</strike></p></b>
                    <?php
                    if(checkifadded(5)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=5"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/oneplus7pro.gif" height="220px" width="190px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspOnePlus 7T</b>
                    <b><p>&nbsp&nbsp MRP.Rs:55000/- &nbsp <strike>61000/-</strike></p></b>
                    <?php
                    if(checkifadded(13)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=13"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
        
         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/oneplus8.gif" style="width:200px;">
                  <div class="caption">
                     <b>&nbsp&nbsp&nbspOnePlus Nord</b>
                    <b><p>&nbsp&nbsp MRP.Rs:50000/- &nbsp <strike>52000/-</strike></p></b>
                    <?php
                    if(checkifadded(14)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=14"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
         </div>
         <div class="row product">
       <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/samsung a7.gif" height="220px" width="240px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspSamsung A7</b>
                    <b><p>&nbsp&nbsp MRP.Rs:73000/- &nbsp <strike>81500/-</strike></p></b>
                    <?php
                    if(checkifadded(15)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=15"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/samsung a8.gif" height="220px" width="240px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspSamsung A8</b>
                    <b><p>&nbsp&nbsp MRP.Rs:76000/- &nbsp <strike>84000/-</strike></p></b>
                    <?php
                    if(checkifadded(16)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=16"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
        
         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/samsung a10.gif" height="220px" width="240px">
                  <div class="caption">
                     <b>&nbsp&nbsp&nbspSamsung A10</b>
                    <b><p>&nbsp&nbsp MRP.Rs:84999/- &nbsp <strike>87699/-</strike></p></b>
                    <?php
                    if(checkifadded(17)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=17"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
         </div>
         <div class="row product">
       <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/h1.gif" height="400px" width="300px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspHuawei Mate 40</b>
                    <b><p>&nbsp&nbsp MRP.Rs:56000/- &nbsp <strike>57999/-</strike></p></b>
                    <?php
                    if(checkifadded(18)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=18"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>

         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/h2.gif" height="400px" width="310px">
                  <div class="caption">
                  <b>&nbsp&nbsp&nbspHuawei k-40</b>
                    <b><p>&nbsp&nbsp MRP.Rs:61200/- &nbsp <strike>61900/-</strike></p></b>
                    <?php
                    if(checkifadded(19)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=19"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
        
         <div class="col-xs-4">
               <div class="thumbnail">
                  <img src="../img/h3.gif" height="500px" width="300px">
                  <div class="caption">
                     <b>&nbsp&nbsp&nbspHuawei Blaze 300</b>
                    <b><p>&nbsp&nbsp MRP.Rs:40000/- &nbsp <strike>42000/-</strike></p></b>
                    <?php
                    if(checkifadded(20)){
                    echo '<a href="#"><button type="button" class="btn btn-success btn-block diabled">Added to cart</button></a>';
                      }
                    else{ ?>
                     <a href="cart-add.php?id=20"><button type="button" class="btn btn-primary btn-block">Add to cart</button></a>
                <?php
                    }
                  ?>
                  </div>
               </div> 
         </div>
         </div>
         </div>
         </div>
         </div>
      </div>
<script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
// const search = addEventListener('keyup',searchitems);
// function searchitems(e){
//   var txt = e.target.value.toLowerCase();
  
//   var search = txt.getElementbyId('search');
// }
  function addItemToCart(name1,quantity){
    var name = name1;
    var qty = quantity;
    if(typeof qty === "undefined"){
      var qty = 1;
    }
     if (name ==='redmi Note 8') {
      // var qty = quantity;
    //    var id = 12;
     
    // //  var XmlHttpRequest = require('xmlhttprequest').XmlHttpRequest;
    // // global.XmlHttpRequest = require('xhr2');
    //   var xhr = new XMLHttpRequest();
    //   xhr.open('GET','cart-add.php?id=12',true);
    //   xhr.send();
    //   xhr.onload=function(){
    //     console.log(this.responseText);
    //  document.getElementById('redmi').click();
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=1&qty='+qty,true);
      // xhr.open('GET','cart-add.php?qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      // document.getElementById('redmi').css("Background-color","Pink");
      }
      }
      else if(name ==='redmi Note 9')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=2&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
      }
      else if(name == 'redmi Note 10')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'iphone 7')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=10&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'iphone 8')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=11&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'iphone xr')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=12&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'oneplus 8')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=5&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'oneplus 7T')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=13&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'oneplus Nord')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=14&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'Samsung A7')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=15&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'Samsung A8')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=16&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'Samsung A10')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=17&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'Huawei Mate 40 ')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=18&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'Huawei k40')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=19&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }
   else if(name == 'Huawei Blaze 300')
      {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart-add.php?id=20&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
      }
   }

  }
    // function removeItem(name2){
    //   var namee = name2;
    //   if (namee ==='redmi') {
    //   var xhr = new XMLHttpRequest();
    //   xhr.open('GET','cart_remove.php?id=1',true);
    //   xhr.send();
    //   xhr.onload=function(){
    //     console.log(this.responseText);
    //   }
    // }
    // }
    function gotocart(){
      window.location= "cart.php";
    }
    function gotosettings(){
      window.location= "settings.php";
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
      else if(commandData.command === "go to settings"){
        gotosettings();
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script>
      
    </body>
