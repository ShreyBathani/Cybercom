<?php

echo "<center><h1>php inside html</h1><br>";
$firstNnme = 'Shrey';
$lastNnme = 'Bathani';
$dob = '15-12-1999';
$email = 'abc@gmail.com';
?>


<br><br>
<table border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Email</th>
    </tr>
    <tr>
        <td><?php echo $firstNnme ?></td>
        <td><?php echo $lastNnme ?></td>
        <td><?php echo $dob ?></td>
        <td><?php echo $email ?></td>
    </tr>
</table>
