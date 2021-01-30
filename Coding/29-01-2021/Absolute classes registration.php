<html>
<head>
    <title>Absolute classes registration</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>   
<body>
    <h1>Absolute classes registration</h1>
    <P class="error">* Required field</P>

    <?php 
        $nameErr = $emailErr = $genderErr = $termsErr = $subjectErr = "";
        $name = $email = $gender = $class = $time = $subject = "";
        $flag = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $flag = true;
            if(empty($_POST['name'])){
                $nameErr = 'Name is require.';
                $flag = false;
            }
            else{
                $name = test_input($_POST['name']);
            }

            if(empty($_POST['email'])){
                $emailErr = 'Email is require.';
                $flag = false;
            }
            else{
                $email = test_input($_POST['email']);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                    $flag = false;
                }
            }

            if(!empty($_POST['time'])){
                $time = test_input($_POST['time']);
            }

            if(!empty($_POST['class'])){
                $class = test_input($_POST['class']);
            }

            if(empty($_POST['gender'])){
                $genderErr = 'Gender is require.';
                $flag = false;
            }
            else{
                $gender = test_input($_POST['gender']);
            }

            if (empty($_POST["subject"])) {
                $subjectErr = "You must select 1 or more";
                $flag = false;
            }
            else{
                $subject = $_POST["subject"];	
            }

            if(empty($_POST['terms'])){
                $termsErr = 'You must agree to terms';
                $flag = false;
            }

        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id="name" value="<?php echo $name; ?>"><span class="error">*<?php echo $nameErr; ?></span></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"><span class="error">*<?php echo $emailErr; ?></span></td>
            </tr>
            <tr>
                <td>Time:</td>
                <td><input type="text" name="time" id="time" value="<?php echo $time; ?>"></td>
            </tr>
            <tr>
                <td>classes:</td>
                <td><textarea name="class" id="class" rows="6" cols="30"> <?php echo $class; ?></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type = "radio" id="female" name = "gender" value = "female"
                        <?php if($gender == "female") echo 'checked'; ?>
                    >Female
                    <input type = "radio"  id="male" name = "gender" value = "male"
                        <?php if($gender == "male") echo 'checked'; ?>
                    >Male
                    <span class="error">*<?php echo $genderErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>Subject:</td>
               <td>
                  <select name = "subject[]" size = "4" multiple>
                     <option value = "Android">Android</option>
                     <option value = "Java">Java</option>
                     <option value = "C#">C#</option>
                     <option value = "Data Base">Data Base</option>
                     <option value = "Hadoop">Hadoop</option>
                     <option value = "VB script">VB script</option>
                  </select>
                  <span class="error">*<?php echo $subjectErr; ?></span>
               </td>
            </tr>
            <tr>
                <td>Agree:</td>
                <td><input type="checkbox" id="terms" name="terms" value="1" <?php if(isset($_POST['terms'])) echo 'checked'; ?>><span class="error">*<?php echo $termsErr; ?></span></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>

    <?php

        if($flag){
            echo "<h2>Your given values are as :</h2>";
            echo "<p><b>Name:</b> $name</p>";
            echo "<p><b>Email:</b> $email</p>";
            echo "<p><b>Time:</b> $time</p>";
            echo "<p><b>Class:</b> $class </p>";
            echo "<p><b>Gender:</b> $gender</p>";
            echo "<span><b>Subject/s: </b></span>";
            $cnt = 0;
            for($i = 0; $i < count($subject); $i++) {
                echo $subject[$i];
                if($cnt < count($subject) - 1){
                    echo ", ";
                    $cnt++;
                }
            }
        }

    ?>

</body>
</html>