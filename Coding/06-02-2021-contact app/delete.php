<?php

include "db/database.php";

$contact = new Database;
$id = $_GET['contact-id'];
$res = $contact->delete('id', $id);
$resdata = $contact->select();
if($res){
    ?>
    <div class='alert alert-danger alert-dismissible col-6'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        Contact succesfully <strong>Deleteted!!</strong>
    </div>
    <table class="table table-hover">
    <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Title</th>
          <th>Created</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
              
        <?php
              
            while($row = mysqli_fetch_array($resdata)){

                ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><a href="update.php?contact-id=<?php echo $row[0]; ?>" title="Update Contact" class="edit-icon"><i class="far fa-edit"></i></a><button onclick='deleteContact(<?php echo $row[0]; ?>)' title="Delete Contact" class="del-icon"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <?php

            }

        ?>

    </tbody>
    </table>
<?php

}
else{
?>
    <div id='alert' class='alert alert-danger alert-dismissible col-6'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <strong>Error: </strong>Something went wrong! Refresh the page.
    </div>
<?php
}
?>