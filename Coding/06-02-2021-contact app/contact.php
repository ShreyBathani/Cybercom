<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <?php
	        include "header.php";
          include "db/database.php";

          $contact = new Database;
          $res = $contact->select();
        ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="index.php">Contact App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"><i class="fas fa-id-card-alt"></i> Contact</a>
                </li>   
              </ul>
            </div>  
          </nav>
          <div class="container-outer">
            <h2>Read Contacts</h2>
            <hr>
            <a class="btn btn-success" href="create.php">Create Contact</a><br><br>
            <div id="table"><table class="table table-hover">
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
              
                while($row = mysqli_fetch_array($res)){

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
            </table></div>
        </div>
        <script>
          function deleteContact(id) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("table").innerHTML = this.responseText;
              }
            };
            xhttp.open("GET", "delete.php?contact-id="+id, true);
            xhttp.send();
          }
        </script>
    </body>
</html>