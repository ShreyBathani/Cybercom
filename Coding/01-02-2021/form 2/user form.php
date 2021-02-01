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
            <form action="user form.php?load=1" id="userdata" name="userdata" method="POST" onsubmit="return validate()">
                <table>
                    <tr>
                        <td><label for="fname">FIRST NAME</label></td>
                        <td><input type="text" name="fname" id="fname"></td>
                    </tr>
                    <tr>
                        <td><label for="password">PASSWORD</label></td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td><label for="gender">GENDER</label></td>
                        <td><input type="radio" name="gender" value="Male" >Male
                            <input type="radio" name="gender" value="Female">Female</td>
                    </tr>
                    <tr>
                        <td><label for="address">ADDRESS</label></td>
                        <td><textarea name="address" id="address" rows="4"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="dob">D.O.B.</label></td>
                        <td><input type="date" name="dob" id="dob"></td>
                    </tr>
                    <tr>
                        <td><label for="game">SELECT GAMES</label></td>
                        <td><input type="checkbox" id="hockey" name="game[]" value="Hockey">Hockey
                            <input type="checkbox" id="football" name="game[]" value="Football">Football
                            <input type="checkbox" id="cricket" name="game[]" value="Cricket">Cricket
                            <input type="checkbox" id="vollyball" name="game[]" value="Vollyball">Vollyball</td>
                    </tr>
                    <tr>
                        <td><label for="married">MARITAL STATUS</label></td>
                        <td><input type="radio" name="married" value="Married" >Married
                            <input type="radio" name="married" value="Unmarried">Unmarried</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" id="agree" name="agree" value="agree"><label for="agree">I accept this agreement</label></td>
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
        if(isset($_GET['load'])){
            echo "<h2>Your given values are :</h2>";
            echo "<p><b>Name: </b>". @$_POST['fname']."</p>";
            echo "<p><b>Password: </b>". @$_POST['password']."</p>";
            echo "<p><b>Gender: </b>". @$_POST['gender']."</p>";
            echo "<p><b>Address: </b>". @$_POST['address']."</p>";
            echo "<p><b>Date of Birth: </b>". @$_POST['dob']."</p>";
            echo "<span><b>Game/s: </b></span>";
            $cnt = 0;
            if(!empty(@$_POST['game'])){
                for($i = 0; $i < @count(@$_POST['game']); $i++) {
                    echo @$_POST['game'][$i];
                    if($cnt < count(@$_POST['game']) - 1){
                        echo ", ";
                        $cnt++;
                    }
                }
            } 
            echo "<p><b>Marital Status: </b>". @$_POST['married']."</p>";   
        }
        ?>
    </bbody>
</html>