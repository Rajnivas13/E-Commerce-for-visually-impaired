<?php
  require "../includes/common.php";
?>

<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | cart</title>
        <meta name="description" content="INDEX|MOBILE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Lobster&family=Open+Sans&display=swap" rel="stylesheet">
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
        <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    </head>
<body onload="tableread();">
<div class="alan-btn"></div>
      <header> 
        <a href="home.php" id="main"style="text-decoration:none;">E-store</a>
        <nav>
            <ul class="navlinks">
            <li><a href="home.php"><button>Home</button></a></li>
            <li><a href="bill.php"> <button>Bill</button></a></li>
            <li><a href="about.php"> <button>AboutUs</button></a></li>
            <li><a href="contact.php"> <button>ContactUs</button></a></li>
            <li><a href="logout.php"><button> logout</button></a><li>
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
      <a class="navbar-brand" href="home.php" style="background-color: #92ccea; font-family: 'Fredoka One', cursive;font-size:22px;">E-COMMERCE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-list"></span> AboutUs</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> ContactUs</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> logout</a><li>
      </ul>
    </div>
  </div>
</nav> -->
<br><br><br><br><br><br><br>
<div class="content">
        <div class="container">        
        
        <form action="discount.php" class="form-inline " method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="code"   placeholder="Enter Discount Code Here">                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <?php
            if(isset($_GET['m1'])){
              echo $_GET['m1'];
            }
            ?>
        </form> 
<br>


<?php
$sum=0;
$qty=0;
if(isset($_GET['m1'])){
 $disc= $_GET['m1'];
}
$user_id=$_SESSION['user_id'];
$query="SELECT items.name AS Name, items.price AS Price, items.id AS pid ,users_items.qty AS qty FROM items,users_items  WHERE users_items.users_id='$user_id' AND status='Added to cart' AND users_items.item_id =items.id  ";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
$num_rows=mysqli_num_rows($query_result);
?>

<div class="table" >
    <div class="container">
    <div class="table style">
            <table class="table table-hover table-striped table-bordered" id="myTable" >
                  <tr class="danger">
                    <th>Item no.</th>
                    <th>Item name</th>
                    <th>Item price</th>
                    <th>Qty</th>
                    <th>Remove</th>
                  </tr>
<?php
$Rs = '<link rel="icon"  class ="fa fa-inr"  href="/favicon.ico" type="image/x-icon">';
   if($num_rows!=0){
     while($row=mysqli_fetch_array($query_result))
     {
      $sum+= $row["Price"] *  $row["qty"]  ;                                    
      $id = $row["pid"];
      $qty += $row["qty"];
      
      echo "<tr class='success'><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>$Rs " . $row["Price"] . "</td><td>" . $row["qty"] ."</td><td><a href='cart_remove.php?id={$row['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
      if(isset($disc)){
          $sum=$sum -$sum * (0.1);
     }
    }
    echo "<tr class='info'><td></td><td>Total</td><td>$Rs" . $sum . "</td><td>". $qty ."</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
  }
   else{
     echo"<span class='danger'>Add items on your cart</span>";
     echo "<tr class='info'><td></td><td>Total</td><td>$Rs " . "--" . "</td><td>" ."</td><td><a href='#' class='btn btn-danger btn-block disabled'>confirm order</a></td></tr>";
   }

?>
     <?php
           $user_id= $_SESSION['user_id'];
           $address =$_SESSION['address'];

$dt = date('Y-m-d');
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

          //  $Invoice_date =  date('Y-m-d H:i:s');
          //  $Invoice_time = time();
          //  $item_query = "SELECT item_id FROM users_items WHERE users_items.users_id='$user_id' AND status='Added to cart'";
          //  $qty_query = "SELECT qty FROM users_items WHERE users_items.users_id='$user_id'";
          //  $address_query = "SELECT address FROM users WHERE users.user_id ='$user_id' ";
          //  $query_resulter=mysqli_query($con,$address_query) or die(mysqli_error($con));
           $query ="INSERT INTO invoice(user_id,address,Invoice_date,Invoice_time) VALUES('$user_id','$address','$dt','$currentTime')";
          //  Invoice_date,Invoice_time
           $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
          //  $num_rows=mysqli_num_rows($query_result);
           ?>

                   <tbody>
                   
                  </tbody>   
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
   function removeItem(name2){
    var namee = name2;
    if (namee ==='redmi Note 8') {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=1',true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
    }
    }
    else if(namee ==='redmi Note 9'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=2',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='redmi Note 10'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=3',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='iphone 7'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=10',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='iphone 8'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=11',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='iphone xr'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=12',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='oneplus 8'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=5',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='oneplus 7T'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=13',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='oneplus Nord'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=14',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='Samsung A7'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=15',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='Samsung A8'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=16',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='Samsung A10'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=17',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
    else if(namee ==='Huawei Mate 40'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=18',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }else if(namee ==='Huawei k40'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=19',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }else if(namee ==='Huawei Blaze 300'){
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_remove.php?id=20',true);
      xhr.send();
      xhr.onload=function(){
      console.log(this.responseText);
    }
    }
window.location.reload();
   }
   function updateItem(name3,quantity){
     var name = name3;
     var qty = quantity;
     if (name === 'redmi Note 8') {
      var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=1&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'redmi Note 9'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=2&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'redmi Note 10'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'iphone 7'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'iphone xr'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'iphone xr'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'oneplus 8'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'oneplus 7T'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'oneplus Nord'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'Samsung A7'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'Samsung A8'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'Samsung A10'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'Huawei Mate 40'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'Huawei k40'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   else if(name === 'Huawei Blaze 300'){
    var xhr = new XMLHttpRequest();
      xhr.open('GET','cart_update.php?id=3&qty='+qty,true);
      xhr.send();
      xhr.onload=function(){
        console.log(this.responseText);
        window.location.reload();
    }
   }
   window.location.reload();
  }

  function tablealan(data){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("cart", {"data":data}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }

  
  
  function gotohome(){
      window.location= "home.php";
    }
    function gotobill(){
      window.location = "bill.php";
    }
    function success(){
      window.location="success.php";
    }
  var alanBtnInstance = alanBtn({
    key: "7e25fbd72b647a32609b89507078f07d2e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "remove_item") {
        removeItem(commandData.item);
      }
      else if(commandData.command === "update_item") {
        updateItem(commandData.item,commandData.quantity);
      }
      else if(commandData.command === "gotohome"){
        gotohome();
      }
      else if(commandData.command === "gotobill"){
        gotobill();
      }
      else if(commandData.command==="go to success"){
        success();
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <footer>    
              <div id="foot">      
                <center>       
                  <p>Copyright E-Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>  
                </center>  
              </div> 
            </footer>

<script>
function tableread(){  
  
var data="The products that you have ordered are as folllows : ";  
          //gets table
var oTable = document.getElementById('myTable');
var arr=[" ","First","Second","Third","Fourth","fivth","Sixth","seventh"];

//gets rows of table
var rowLength = oTable.rows.length;
if(rowLength==1){
  data="Your cart is empty please order some items"
}
else{
//loops through rows    
  for (let i = 1; i < rowLength; i++){

    //gets cells of current row
    var oCells = oTable.rows.item(i).cells;

    //gets amount of cells of current row
    var cellLength = oCells.length;
    if(i==rowLength-1){
      data=data+"The total price of all your items is"+oCells.item(2).textContent;
    }

    //loops through each cell in current row
    else{
      for(let j = 1; j < cellLength-1; j++){
          
          switch(j){
            case 1:data=data+"Your"+arr[i]+"product is,"+oCells.item(j).textContent+".";break;
            case 2:data=data+" The price of each item of this products is rupees ,"+oCells.item(j).textContent+".";break;
            case 3:data=data+" And so,you have ordered "+oCells.item(j).textContent+"Items of this product ."+"The net amount for"+oCells.item(j).textContent+"items for this product is rupees,"+oCells.item(j).textContent*oCells.item(j-1).textContent+".";break;
          }
      }
    }
        
    }
    tablealan(data);
}

}

</script>

</body>
</html>