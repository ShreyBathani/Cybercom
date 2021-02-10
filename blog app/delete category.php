<?php

$host = 'localhost';
$user = 'root';
$pass= '';
$db = 'blog_app';
$id = $_GET['contact-id'];
$conn = @mysqli_connect($host, $user, $pass, $db);
$query = "DELETE FROM category WHERE `id` = '".$id."'";
$result = mysqli_query($conn, $query);
$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);
if($result){
    ?>
    <div class='alert alert-danger alert-dismissible col-6'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        Category succesfully <strong>Deleteted!!</strong>
    </div>
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