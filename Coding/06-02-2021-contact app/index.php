<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <?php
	        include "header.php";
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
            <h2>Home</h2>
            <hr>
            <p>Welcome to home page!!</p>
        </div>
        
    </body>
</html>