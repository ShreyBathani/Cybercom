<!DOCTYPE html>
<html>
    <head>
        <title>Manage Category</title>
        <?php
	        include "header.php";
        ?>
    </head>
    <body>
    <?php
            include "login check.php";
	        include "navbar.php";
            $host = 'localhost';
            $user = 'root';
            $pass= '';
            $db = 'blog_app';
            $connect_err = "Couldn't connect to database!!"; 
            $conn = @mysqli_connect($host, $user, $pass, $db);
            $query = "SELECT * FROM category";
            $result = mysqli_query($conn, $query);
            
        ?>
        <div class="container-outer">
            <h2>Blog Category</h2>
            <hr>
            <a class="btn btn-success" href="create category.php">Add Create Category</a><br><br>
            <div id="table">
            <table class="table table-hover">
              <thead class="thead-light">
                <tr>
                  <th>Category Id</th>
                  <th>Category Image</th>
                  <th>Category Name</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              
                <?php
              
                while($row = mysqli_fetch_array($result)){

                  ?>
                    <tr>
                      <td><?php echo $row[1]; ?></td>
                      <?php $path = "uploads/".$row[8]; ?>
                      <td><img src="<?php echo $path; ?>" height="50px" width="50px"></td>
                      <td><?php echo $row[2]; ?></td>
                      <td><?php echo $row[6]; ?></td>
                      <td><a href="update category.php?category-id=<?php echo $row[0]; ?>" title="Update Category" class="edit-icon"><i class="far fa-edit"></i></a><button onclick='deleteCategory(<?php echo $row[0]; ?>)' title="Delete Category" class="del-icon"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                  <?php

                }

                ?>

              </tbody>
            </table></div>
        </div>
        <script type="text/javascript" src="./js/validation.js"></script>
        <script>
            function deleteCategory(id) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("table").innerHTML = this.responseText;
              }
            };
            xhttp.open("GET", "delete category.php?contact-id="+id, true);
            xhttp.send();
          }
        </script>
    </body>
</html>