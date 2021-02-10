<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php
	        include "header.php";
        ?>
    </head>
    <body>
    <?php
          include "validation.php";
	        include "navbar.php";
        ?>
        <div class="outer container">
          <center>
            <div class="box">
              <h1>Login</h1><br><br>
              <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="login" name="loginuser">
                  <div class="form-group">
                  
                  <label for="email">Email</label> <span id="email_error" class="error"><?php echo @$emailerr; ?></span>
                  <input type="email" name="email" class="form-control" id="email"  value="<?php echo @$email; ?>">
                  <br>
                  
                  <label for="password">Password</label> <span id="password_error" class="error"><?php echo @$passworderr; ?></span>
                  <input type="password" name="password" class="form-control" id="password" value="<?php echo @$password; ?>">
                  <br><br>
                  
                  <input type="submit" name="login" value="Login" class="btn btn-success">
                  <a class="btn btn-success" href="register.php">Register</a>
                   
                </div>
              </form>
            </div>
          </center>
        </div>
        <script type="text/javascript" src="./js/validation.js"></script>
    </body>
</html>