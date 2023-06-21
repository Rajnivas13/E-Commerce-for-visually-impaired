<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-store | login</title>
        <meta name="description" content="loginpage">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       
    </head>
    <body>
<div class="container rapid">
              <div class="panel panel-primary rux">
                  <div class="panel-heading">
                      <h3>Login</h3>
                  </div>
                  <div class="panel-body">
                      <p class="text-danger">login to make a purchase</p><br>
                      <form class=form-group method="POST" action="login_script.php">
                          <label for="email" name="email">email</label>
                          <input type="email" id="email" class="form-control" placeholder="email"  name="email" required="true" > <br>
                          <label for="password" name="password">password</label>
                          <input type="password" id="password" class="form-control" placeholder="password" name="password" required="true" >
                    <br><?php
                          if(isset($_GET['m1'])){
                                echo $_GET['m1'];
                          }
                          ?>
                          <br><br>
                          <button input type="submit" class="btn btn-primary">submit</a><br>
                        </form>
                  </div>
                  <div class="panel-footer">
                      <p >don't have an account?<a href="signup.php">register?</a></p>
                  </div>
              </div>
          </div>
          </div>
          </div>
</div>
   
    </body>
</html>