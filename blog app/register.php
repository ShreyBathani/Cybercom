<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <?php
	        include "header.php";
            
        ?>
    </head>
    <body>
        <?php
        include "validation.php";
	        include "navbar.php";
        ?>
        <div class="box1">
            <p><center>Register</center><p>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="register" name="register" onsubmit="return validateregister()">
                <div class="regform" >
                    <label>Prefix</label>
                    <select name="prefix" id="prefix">
                        <option value="" selected disabled></option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                    </select>
                    <br><span id="prefix_error" class="error"><?php echo @$prefixerr; ?></span>

                    <br><label for="fname">First Name</label> 
                    <input type="text" name="fname" id="fname" class="col-8" value="<?php echo @$fname; ?>">
                    <br><span id="fname_error" class="error"><?php echo @$fnameerr; ?></span>

                    <br><label for="lname">Last Name</label> 
                    <input type="text" name="lname" id="lname" class="col-8" value="<?php echo @$lname; ?>">
                    <br><span id="lname_error" class="error"><?php echo @$lnameerr; ?></span>

                    <br><label for="email">Email</label> 
                    <input type="email" name="email" id="email" class="col-8" value="<?php echo @$email; ?>">
                    <br><span id="email_error" class="error"><?php echo @$emailerr; ?></span>

                    <br><label for="phone">Mobile Number</label> 
                    <input type="phone" name="phone" id="phone" class="col-8" value="<?php echo @$phone; ?>">
                    <br><span id="phone_error" class="error"><?php echo @$phoneerr; ?></span>

                    <br><label for="password">Password</label> 
                    <input type="password" name="password" id="password" class="col-8" value="<?php echo @$password; ?>">
                    <br><span id="password_error" class="error"><?php echo @$passworderr; ?></span>

                    <br><label for="conpassword">Confirm Password</label> 
                    <input type="password" name="conpasswordpassword" id="conpasswordpassword" class="col-8" value="<?php echo @$conpasswordpassword; ?>">
                    <br><span id="conpasswordpassword_error" class="error"><?php echo @$conpasswordpassworderr; ?></span>

                    <br><label for="info">Information</label> 
                    <textarea name ="info" class="col-8" rows="3" value="<?php echo @$info; ?>"></textarea>
                    <br><span id="info_error" class="error"><?php echo @$infoerr; ?></span>
                    
                    <br><input type="checkbox" name="agree" value="1">Hereby, I Accept terms & condition
                    <br><span id="agree_error" class="error"><?php echo @$agreeerr; ?></span>
                    <br><br><input type="submit" name="register" class="btn btn-success">

                </div> 
            </form>
        </div>
        <script type="text/javascript" src="js/validation.js"></script>
    </body>
</html>