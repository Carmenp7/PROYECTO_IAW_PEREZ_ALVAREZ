<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  </head>
  <body class="main">

    <?php
        //FORM SUBMITTED
        if (isset($_POST["user"])) {
          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "root", "123456", "proyecto");
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          //MAKING A SELECT QUERY
          //Password coded with md5 at the database. Look for better options
          $consulta="select * from usuario where
          username='".$_POST["user"]."' and password=md5('".$_POST["password"]."');";
          //Test if the query was correct
          //SQL Injection Possible
          //Check http://php.net/manual/es/mysqli.prepare.php for more security
          if ($result = $connection->query($consulta)) {
              //No rows returned
              if ($result->num_rows===0) {
                echo "LOGIN INVALIDO";
              } else {
                //VALID LOGIN. SETTING SESSION VARS
                $_SESSION["user"]=$_POST["user"];
                $_SESSION["language"]="es";
                header("Location: index.php");
              }
          } else {
            echo "Wrong Query";
          }
      }
    ?>



<div class="login-screen"></div>
    <div class="login-center">
        <div class="container min-height" style="margin-top: 20px;">
        	<div class="row">
                <div class="col-xs-4 col-md-offset-8">
                    <div class="login" id="card">
                    	<div class="front signin_form"> 
                        <p>Login Your Account</p>
                          <form class="login-form">
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="email" class="form-control" placeholder="Type your email">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" class="form-control" placeholder="Type your password">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox">Remember me next time.</label>
                              </div>
                              
                              <div class="form-group sign-btn">
                                  <input type="submit" class="btn" value="Log in">
                                  <p><a href="#" class="forgot">Can't access your account?</a></p>
                                  <p><strong>New to TimeInfo?</strong><br><a href="#" id="flip-btn" class="signup signup_link">Sign up for a new account</a></p>
                              </div>
                          </form>
                        </div>
                        <div class="back signup_form" style="opacity: 0;"> 
                          <p>Sign Up for Your New Account</p>
                          <form class="login-form">
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Username">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group">
                                  <input type="text" class="form-control">
                                  <span class="input-group-btn"><button type="button" class="btn btn-cyan"><span class="fa fa-refresh"></span></button></span>
                                </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" class="form-control" placeholder="Confirm Password">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="email" class="form-control" placeholder="Email">
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-envelope"></i>
                                      </span>
                                  </div>
                              </div>
                              
                              <div class="form-group sign-btn">
                                  <input type="submit" class="btn" value="Sign up">
                                  <br><br>
                                  <p>You have already Account So <a href="#" id="unflip-btn" class="signup">Log in</a></p>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js"></script>
    
    </body>
</html>