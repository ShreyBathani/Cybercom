<!DOCTYPE html>
<html>
    <head>
        <title>Update Contact</title>
        <?php
	        include "header.php";
          include "db/database.php";

            $submitval = "Update";
            if(isset($_GET['contact-id'])){
                $id = $_GET['contact-id'];
            }else{
              $id = $_POST['id'];
            }
            $contact = new Database;
            $res = $contact->select('id', $id);
            if(mysqli_num_rows($res)==1){
                $row = mysqli_fetch_array($res);
                $id = $row['0'];
                $name = $row['1'];
                $email = $row['2'];
                $phone = $row['3'];
                $title = $row['4'];
                $created = $row['5'];
                $created = substr_replace($created,"T", strpos($created," "), 1);
            }
            else{
                $alertmsg = "<div id='alert' class='alert alert-danger alert-dismissible col-6'>
                                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                <strong>Error: </strong>Something went wrong!
                            </div>";
            }
            include "validation.php";
            if($GLOBALS['validstatus'] == 1){
                $data = array(mysqli_real_escape_string($contact->conn, $name), mysqli_real_escape_string($contact->conn, $email), mysqli_real_escape_string($contact->conn, $phone), mysqli_real_escape_string($contact->conn, $title));
                if($contact->update($id, $data)){
                    $name = $email = $phone = $title = $created = "";
                    header('Location: contact.php');
                }
                else{
                    $alertmsg = "<div id='alert' class='alert alert-danger alert-dismissible col-6'>
                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                    <strong>Error: </strong>Something went wrong!
                                </div>";
                }
            }

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
        <h2>Update Contact</h2>
        <hr>
          <?php include "contact-form.php"; ?>
        </div>
        <script type="text/javascript" src="./js/validation.js"></script>
    </body>
</html>