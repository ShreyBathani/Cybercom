<?php
    include 'servervalidation.php';
    include '../database entry.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <title>User Form</title>
        <script src="script.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <bbody>
        <br><br><br><div class="container">
        <fieldset>
            <legend>USER FORM</legend>
            <form action="user form.php" id="userdata" name="userdata" method="POST" onsubmit="return validate()">
                <table>
                    <tr>
                        <td><label for="fname">FIRST NAME</label></td>
                        <td><input type="text" name="fname" id="fname"><span class="error">*</span> <span class="error" id="fnameerr"><?php echo $fnameerr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="password">PASSWORD</label></td>
                        <td><input type="password" name="password" id="password"><span class="error">*</span> <span class="error" id="passworderr"><?php echo $passworderr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="gender">GENDER</label></td>
                        <td><input type="radio" name="gender" value="Male" >Male
                            <input type="radio" name="gender" value="Female">Female<span class="error">*</span> <span class="error" id="gendererr"><?php echo $gendererr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="address">ADDRESS</label></td>
                        <td><textarea name="address" id="address" rows="4"></textarea><span class="error">*</span> <span class="error" id="addresserr"><?php echo $addresserr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="dob">D.O.B.</label></td>
                        <td><input type="date" name="dob" id="dob"><span class="error">*</span> <span class="error" id="doberr"><?php echo $doberr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="game">SELECT GAMES</label></td>
                        <td><input type="checkbox" id="hockey" name="game[]" value="Hockey">Hockey
                            <input type="checkbox" id="football" name="game[]" value="Football">Football
                            <input type="checkbox" id="cricket" name="game[]" value="Cricket">Cricket
                            <input type="checkbox" id="vollyball" name="game[]" value="Vollyball">Vollyball
                            <span class="error">*</span> <br><span class="error" id="gameerr"><?php echo $gameerr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="married">MARITAL STATUS</label></td>
                        <td><input type="radio" name="married" value="Married" >Married
                            <input type="radio" name="married" value="Unmarried">Unmarried<span class="error">*</span> <span class="error" id="marriederr"><?php echo $marriederr; ?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" id="agree" name="agree" value="agree"><label for="agree">I accept this agreement</label><span class="error">*</span> <span class="error" id="agreeerr"><?php echo $agreeerr; ?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br><input type="submit" name="submit"  value="Submit"> <input type="reset" name="reset" value="Reset"><br><br></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
    <?php
        if($flag == 1){
            @$games = implode(', ',$game);
            echo "<h2>Your given values are :</h2>";
            echo "<p><b>Name: </b>". $fname."</p>";
            echo "<p><b>Password: </b>". $password."</p>";
            echo "<p><b>Gender: </b>". $gender."</p>";
            echo "<p><b>Address: </b>". $address."</p>";
            echo "<p><b>Date of Birth: </b>". $dob."</p>";
            echo "<span><b>Game/s: </b>". $games ."</span>";
            echo "<p><b>Marital Status: </b>". $married."</p>";  
            form2($conn, $fname, $password, $gender, addslashes($address), $dob, $games, $married); 
        }
        ?>
    </bbody>
</html>