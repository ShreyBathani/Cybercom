<!DOCTYPE html>
<html>
    <head>
        <title>Blog Post</title>
        <?php
	        include "header.php";
        ?>
    </head>
    <body>
    <?php
            include "login check.php";
	        include "navbar.php";
        ?>
        <div class="container-outer">
            <h2>Blog Posts</h2>
            <hr>
            <a class="btn btn-success" href="create.php">Add Create Blog</a><br><br>
            <div id="table"><table class="table table-hover">
              <thead class="thead-light">
                <tr>
                  <th>Post Id</th>
                  <th>Category Name</th>
                  <th>Title</th>
                  <th>Published Date</th>
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
                      <td><a href="updateblog.php?blog-id=<?php echo $row[0]; ?>" title="Update Blog" class="edit-icon"><i class="far fa-edit"></i></a><button onclick='deleteBlog(<?php echo $row[0]; ?>)' title="Delete Blog" class="del-icon"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                  <?php

                }

                ?>

              </tbody>
            </table></div>
        </div>
        <script type="text/javascript" src="./js/validation.js"></script>
    </body>
</html>