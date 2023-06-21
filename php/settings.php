<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-store Contact</title>
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
    <link rel="stylesheet" type="text/css" href="../css/settings.css">
</head>
<body id="contact">
    <header>
        <a href="home.php" id="main"style="text-decoration:none;">E-store</a>
        <nav>
            <ul class="navlinks">
                <li><a href="about.php"><button> AboutUs</button></a></li>
                <li><a class="btn" href="contact.php"><button>ContactUs</button></a></li>
                <li><a href="index.php"><button> Logout </button></a></li>
            </ul>
        </nav>
    </header>
  <div class="container" style="margin-top: 140px;">
      <h2>Settings - Change Password</h2>
      <form class="form-group" action="settings_script.php" method="POST">
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="email" id="email" pattern=".{8,}" title="Eight or more characters" required="true">
                    <span class="text">Email</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="password" name="newpassword" id="newpassword" pattern=".{8,}" title="Eight or more characters" required="true">
                    <span class="text">New Password</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="password" name="retypepassword" id="retypepassword" pattern=".{8,}" title="Eight or more characters" required="true">
                    <span class="text">ReType Password</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <?php
                if(isset($_GET['m1'])){
                  echo $_GET['m1'];
                }
        ?>      
        <div class="row100" style="margin-left: 430px;">
            <div class="col">
                <input type="submit" value="Submit">
            </div>
        </div>
      </form>  
  </div>

    <footer style="margin-top: 120px;">    
        <div id="foot">      
          <center>       
            <p>Copyright E-Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>  
          </center>  
        </div> 
      </footer>
</body>
</html>