<!DOCTYPE html>
<html>
    <head>
        <title>Form Data</title>
        <link rel="stylesheet" href="style 8.css">
    </head>
    <body>
        <br><h1>Form Data</h1>
        <?php 
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $secque = $_POST['secque'];
        $secans = $_POST['secans'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $zip_code1 = $_POST['zip-code1'];
        $zip_code2 = $_POST['zip-code2'];
        $phone = $_POST['phone'];
        $phone_type = $_POST['phone-type'];
        if($zip_code2 != "")
            $zip_code = $zip_code1 . ", " .$zip_code2;
        else{
            $zip_code = $zip_code1;
        }
        ?>  

        <table>
            <tr>
                <td>First Name:</td>
                <td><?php echo $first_name; ?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php echo $last_name; ?></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><?php echo $password; ?></td>
            </tr>
            <tr>
                <td><?php echo $secque; ?></td>
                <td><?php echo $secans; ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <td>State:</td>
                <td><?php echo $state; ?></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><?php echo $city; ?></td>
            </tr>
            <tr>
                <td>Zip-code:</td>
                <td><?php echo $zip_code; ?></td>
            </tr>
            <tr>
                <td><?php echo $phone_type; ?></td>
                <td><?php echo $phone; ?></td>
            </tr>
        </table>
    </body>
</html>