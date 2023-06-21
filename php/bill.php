<?php
  require "../includes/common.php";
?>

<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | Bill</title>
        <meta name="description" content="BILL|MOBILE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
    function print(){
       window.print();
      }
  var alanBtnInstance = alanBtn({
    key: "ec91bf43052c538ee05c5cf62e2e20d32e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "printbill") {
       print();
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body onload="bill();">
<div class="alan-btn"></div>
    <div class="content">
      <div class="container"> 
        <div class="row">       
         <br>
           <div class="col-xs-4">
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKufWE-013STrO2E3k9-W9VkLl3ewd-SChYg&usqp=CAU" height = "85px" width = "75px" alt= "Ecommerce" >
           </div>
           <div class="col-xs-4">
           </div>
           <div class="col-xs-2">
           <br>
           <?php
                $user_id=$_SESSION['user_id'];
                $query="SELECT *  FROM invoice WHERE invoice.user_id='$user_id' ";
                $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
                $num_rows=mysqli_num_rows($query_result);
                if($num_rows!=0){
                  while($row=mysqli_fetch_array($query_result))
                  {
                   $invoiceNo = $row["InvoiceNo"] ;                                    
                   $date = $row["Invoice_date"];
                   $address = $row["address"];
                  }
                }
                echo"<b>Invoice ID:</b> ".$invoiceNo."" ;
          ?>
           <br><br>
           <?php
           echo"<b>Date:</b>".$date."";
           ?>
           </div>
           <div class="col-xs-2">
           <img src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAADgCAMAAAAt85rTAAAAeFBMVEX///8AAAA8PDx6enqampr19fX6+vrd3d3X19dJSUmLi4u+vr7p6elxcXFeXl5oaGiioqKpqanR0dGwsLDLy8scHBwuLi40NDTAwMDi4uJbW1va2tpFRUWcnJxWVlaBgYEoKChtbW2SkpIVFRWGhoZHR0dQUFAhISHf/IIbAAAHlUlEQVR4nO2d6XbaMBBGA2ELu4FADGENTd7/DRs000ZTPiQwgkD63X+yxpauOcfGWh8eCCGEEEIIIYQQQgghhBByJ0zLpzBpylnZeJda5f6V2isvcPwiB3uSQiU3JycVPS0oWC6dxKOcVZFU3QiawJYcfJUUKvnxtJLLtyn4REEKUpCCh2pgQYKoBiNUO8maSWJjBI8t+dKC1ajgk2S1DgvWJVGRlApWo0VTMAgFFQr+EXy5ZcFqA4AEh93eF2utQX0XPesbM4nrxgVRydXkgg1092tA0ILOKoHfJyBYQyc37kCwTUEKUpCCiQTHWf+LbKEy2Y6+xLXnu6z54E4Fn8yxprkGOouCFKQgBc8QXN63YGvd+UJr+vG4S6yHEpEPdjQCX2M3LYi+B5WtuXy8Ve3uBJsUpCAFKXhI8KEGeDgsOPNPyM8RDJT8nc2GqPOloGAACgahoELBWxesRmgHBCUifxt/8rGpuVQNCVb9LBVsx0pOI3gsUNDUQDtfUBc27OE9lu8XtN1nSBA2G1KQgv+54CS1YOAhk58jOCko2Hw8ieywYHkw+mRQQYIuazQ0gtlpJTf3635BkKDFChoqV61qMShIwRvnfxHUQelIUAelI8H5VauaVfYZmIi5n6U/jApuXZ4O/Zm0hh59F94f6+/pjulZ3Tko01xeGfpZWUHBcfQWm6yOETTEe5dy9FMb1uYaXT+r6Ise/VXrm4hnPys+Vi0gWI8Kdsw1en5Wyv+iFKTgXQmiGlznIZNecJrXP8mzRfeT95lE1H1aLmuRSeB7VHDkzsrdWdOlnIXuznPbBb7I5VuXEuzJsUxSAxCukwa0n9o8x6GgDuXS+yeJIRKUrIGksjsV7FKQghQMC3aNYAOE2xq8H67BEgj2DguWzOXR/UvS+aJt6/oeXEsqPtJJ0N6LLcozLhVzC2p+3MAEzvyTU/bRq2CnkCBs/UKCqHfJCl5sEAIFKUjBbxKsl58+ee23d1SXr7vURAUnLmtjnQRNuIiytndU/Syt4/OTu8ZcLq/3r+4HquDYBZa10e7p1+6sXgpBJfAetLyDk5UU78EkBATRPxlL97Bgin8ySaBgCAregODkNgTtQyalYKXpMMdG292h7bDlkGM1SVhpI1htebz0gOCvF5dlZxy4spr6+smXruSRKUWvmFBaWUsNzIvetusZQbuWRQkIQszXBETi4KpC5xH/J5NC8NJj1QJQkII3Lrj2q19DgosEgsc+ZM4UXDb30NfEi6Q28ogfbvcj9EVS1XCpT9PFt8xqDUpHLjWVlHlNWDKXt0kiiO7twM/6kIRd7ycHV9KhXPa1Zc7SDyo7lAtVKkmrWlxQus/GSLAOrmQH46HLo7Fqz6hSSdpFKUjB+xU0bT5vkrCtQugho4KBh4w+MTvmIKpUkodMz7Us2QFJG7/RqZy7VF6WhiATKMfsCBYVdC1Qf5FjC2mJ0leHNkuZhqtG2TupPJLw8wQDffTonwwECSK60dpcrtmQghSk4DcJotGGVlAScJItEoQLxwmLcwRTNllkoHJvgXgko+1Ggcb99eGbdGmQYOgGIsETF1CF/2QuBgX/gYL3ILgKxN+0YF7fQ4dTWnoS+Kc31yVm2mAEwhdDGTqpr9k2KMV8DOlwyjao2+w8wRW4+30Qp+9BbbrXhqBA2Vv0s0ax/dTTwz//8cRH/ArxaeaWJrhuHDikmYIU/NGC8ak9RtCOukdtMrcmGJ+cJdQ2YHJWxc25gh3OVtBN1ZrrkxVMzppXjGDDn+AlhQxbqJSLYWcGoIjAvAk4vc4IziVlxoteoIc3QDFBO4/eYF+zOmEvyQdvMShIwX+4NcFNVHALIr5FsNhSD7lbumGgH0NLL6CjQyHrIx8kKEs9dGq+4EQulclZSRbzL7ZYh9IFEXBaARIMrIxn36znCRZbbiUgGFhUg4IUpGBiwR6IWB4uq20EO4cF0STi6y4c1//YLRI3eZODNT9QG6I2LuLtz0inXWK8MoJ61oMvuDarzj2uXClpBGOEFlBF8WjEb8kIGuyLXkk5fzAaR8F/oKDlRwmiL/prCR67iPG89PxFCZwW/gX34/+2afmrF6cXvNimNoEIRP+nC15gmjkFKUjBMwXPXJWrmOBM9j3x90fp6FSDhUv09L90z4/QsTNT2U/lDRTZbLjr6qXkrEBTyOUE0TAfOOreoNPrtAck3ihU0CyFIJo/CIc0I0FtakPdWxSkIAXPFow/ZFTweb/EGxAcuK0SMz1ZdlYcGsFHb7fFvn4gyQaL/Y4RHLotGHVw1ZOmHMNXOahbNl5VMLBde3yr6JIRVOSY/R5c++FFe3jTCR69FzYSvNIHLwUp+JMF7Y4hcUE7GgcJmq6PVQrBo7drt4Jun/bGSLZm1z/g/dnuWN0uOCSJpezrvun5IMHcr0bRYaPpmg3tLGy7zrYRhHN4kWASLiVYbEMNCp4OBZUfL/gQFbTz0/QhYxo1rOAaCBZdPC3AWbv2GI5eZzuwHQNc8kiOfcu2RBSkIAVvSPD1NgWn5VOY6DimbLKfZx/xFT9CmxvylbtGoHWl4SLGdnVKuca0oCAhhBBCCCGEEEIIIYQQQq7Ob0oZus4rTrxDAAAAAElFTkSuQmCC" height="90px" width="90px" alt="barcode">
           </div>
        </div>
           <hr class="bold" style="size:20px"></hr>
         <div class="row">       
           <div class="col-xs-4">
             <b>FROM :</b><br>
             <p>E-commerce Technologies,</p>
             <p>29, Singla Street,</p>
             <p>Email: contact@bbbootstrap.com,</p>
             <p>Phone: +91 9897 989 989.</p>
           </div>
           <div class="col-xs-4">
           </div>
           <div class="col-xs-4">
           <?php
                $user_id=$_SESSION['user_id'];
                $query="SELECT *  FROM users WHERE users.user_id='$user_id' ";
                $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
                $num_rows=mysqli_num_rows($query_result);
                if($num_rows!=0){
                  while($row=mysqli_fetch_array($query_result))
                  {
                   $name = $row["name"] ;                                    
                   $address = $row["address"];
                   $city = $row["city"];
                   $email = $row["email"];
                   $contact = $row["contact"];
                  }
                }
          ?>
           <b>To :</b><br>
           <?php
           echo "".$name."," ."<br>";
           echo "".$address,"," ."<br>";
           echo "".$city,"," ."<br>";
           echo "E-mail:".$email,"," ."<br>";
           echo "Contact:".$contact,"." ."";
             ?>
           </div>
          </div>
           <hr>
           <div class="billdesk">
           <div class="table">
           <div class="table style">
            <table class="table table-hover table-striped table-bordered">
                  <tr class="primary">
                    <th>Item no.</th>
                    <th>Item name</th>
                    <th>Item price</th>
                    <th>Qty</th>
                  </tr>
                 
          <?php
           $sum=0;
           $qty=0;
           $user_id= $_SESSION['user_id'];
           $query="SELECT items.name AS Name, items.price AS Price, items.id AS pid ,users_items.qty AS qty FROM items,users_items  WHERE users_items.users_id='$user_id' AND status='Added to cart' AND users_items.item_id =items.id  ";
           $query_result=mysqli_query($con,$query) or die(mysqli_error($con));
           $num_rows=mysqli_num_rows($query_result);
          ?>
         <?php
            $Rs = '<link rel="icon"  class ="fa fa-inr"  href="/favicon.ico" type="image/x-icon">';
            if($num_rows!=0){
            while($row=mysqli_fetch_array($query_result))
            {
             $sum+= $row["Price"] *  $row["qty"]  ;                                    
             $id = $row["pid"];
             $qty += $row["qty"];
      
             echo "<tr class='primary'><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>$Rs " . $row["Price"] . "</td><td>" . $row["qty"] ."</td></tr>";
              if(isset($disc)){
                $sum=$sum - $sum * (0.1);
              }
            }
             echo "<tr class='primary'><td></td><td>Total</td><td>$Rs" . $sum . "</td><td>". $qty ."</td></tr>";
            }
           else{
             echo "<tr class='primary'><td></td><td>Total</td><td>$Rs " . "--" . "</td><td>" ."</td></tr>";
            }
            $fee =60;
            $nofee= 0;
            $sum1 = $sum +  $fee ;
            $sum2 = $sum + $nofee;

            if($num_rows == 0){
            echo "<tr class='info'><td>Shipping charge</td><td>$Rs".$nofee."</td><td>$Rs". $sum2."</td><td>".$qty."</td></tr>";
            }else {
            echo "<tr class='info'><td>Shipping charge</td><td>$Rs".$fee."</td><td>$Rs". $sum1."</td><td>".$qty."</td></tr>";
            }

            ?>
             </table>
             </div>
             </div>
             </div>
             <div class="row">
             <div class="col-xs-4">
             </div>
             <div class="col-xs-4">
             </div>
             <div class="col-xs-4">
             <?php
             $tot = 0;
             if ($num_rows == 0){
              echo"<b>GRAND TOTAL : $Rs".$tot.".00/- </b><i>(inclusive of all taxes)</i>";
             }
             else{
              echo"<b>GRAND TOTAL : $Rs".$sum1.".00/- </b><i>(inclusive of all taxes)</i>";
             }
             ?>
             </div>
             </div>
            <hr>
            <p><i>*This is a computer generated invoice ,not require any signatures</i></p>
            <p><i>*GST & CSGT are already added with this product</i></p>
            <hr>
            <div class="footerwax" >
            <center>
            <p><b>Thank you for shooing with us!!!</b></p>
             <p><b><i>for any queries | contact us : @ecommrecer@gmail.com | phone: +91 90000 900010</i></b><p>
             </center>
            </div>
            </div>

            <script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>

function bill(data){
      alanBtnInstance.activate();
      alanBtnInstance.callProjectApi("bill", {}, function(error, result) {
    if (error) {
      console.error(error);
      return;
    }
    console.log(result);
  });
    }
    function logout(){
      window.location= "logout.php";
    }
  var alanBtnInstance = alanBtn({
    key: "ec91bf43052c538ee05c5cf62e2e20d32e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "go:back") {
        //call client code that will react on the received command
      }
      else if(commandData.command === "logout"){
        logout();
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script>

</body>
</html>
