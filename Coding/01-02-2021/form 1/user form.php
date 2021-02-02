<?php
    include 'servervalidation.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Form</title>
        <script src="script.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <bbody>
        <br>
        <form action="user form.php" id="userdata" name="userdata" method="POST" onsubmit="return validate()" enctype="multipart/form-data">
            <table border="3" cellspacing="5">
                <tr>
                    <th colspan="2"><h2>User Form</h2></th>
                </tr>
                <tr>
                    <td><label for="name">Enter Name</label><span class="error">*</span></td>
                    <td><input type="text" name="name" id="name"><br><span class="error" id="nameerr"><?php echo $nameerr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="password">Enter Password</label><span class="error">*</span></td>
                    <td><input type="password" name="password" id="password"><br><span class="error" id="passworderr"><?php echo $passworderr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="address">Enter Address</label><span class="error">*</span></td>
                    <td><textarea name="address" id="address" rows="3"></textarea><br><span class="error" id="addresserr"><?php echo $addresserr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="game">Select Game</label><span class="error">*</span></td>
                    <td><input type="checkbox" id="hockey" name="game[]" value="Hockey">Hockey<br>
                        <input type="checkbox" id="football" name="game[]" value="Football">Football<br>
                        <input type="checkbox" id="badminton" name="game[]" value="Badminton">Badminton<br>
                        <input type="checkbox" id="cricket" name="game[]" value="Cricket">Cricket<br>
                        <input type="checkbox" id="vollyball" name="game[]" value="Vollyball">Vollyball
                        <br><span class="error" id="gameerr"><?php echo $gameerr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label><span class="error">*</span></td>
                    <td><input type="radio" name="gender" value="Male" >Male
                        <input type="radio" name="gender" value="Female">Female
                        <br><span class="error" id="gendererr"><?php echo $gendererr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="age">Select Age</label><span class="error">*</span></td>
                    <td><select name="age" id="age">
                        <option value="" selected disabled>Select</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                    </select>
                    <br><span class="error" id="ageerr"><?php echo $ageerr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="file">Select File</label><span class="error">*</span></td>
                    <td><input type="file" name="file" id=file><br><span class="error" id="fileerr"><?php echo $fileerr; ?></span></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="reset" name="reset" value="Reset"> <input type="submit" name="submit"  value="Submit Form"></center></td>
                </tr>
            </table>
        </form><br><br>
        <?php
                if($flag == 1){
                    echo "<h2>Your given values are :</h2>";
                    echo "<p><b>Name: </b>". @$_POST['name']."</p>";
                    echo "<p><b>Password: </b>". @$_POST['password']."</p>";
                    echo "<p><b>Address: </b>". @$_POST['address']."</p>";
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
                    echo "<p><b>Gender: </b>". @$_POST['gender']."</p>";
                    echo "<p><b>Age: </b>". @$_POST['age']."</p>";
                    echo "<p><b>File: </b>". @$_FILES['file']['name']."</p>";  
                }
        ?>
    </bbody>
</html>