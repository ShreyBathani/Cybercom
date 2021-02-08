<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="create-contact" name="create-contact" onsubmit="return setValidationResponse()">
              
    <div class="form-row form-group">
    <div class="col-4">
      <label for="name">Name</label> <span id="name-info" class="invalid-feedback"><?php echo $nameerr; ?></span>
      <input type="text" name="name" class="form-control" id="name"  value="<?php echo @$name; ?>">
    </div>
    <div class="col-4">
      <label for="email">Email</label> <span id="email-info" class="invalid-feedback"><?php echo $emailerr; ?></span>
      <input type="email" name="email" class="form-control" id="email" value="<?php echo @$email; ?>">
    </div> 
  </div>

  <div class="form-row form-group">
    <div class="col-4">
      <label for="phone">Phone</label> <span id="phone-info" class="invalid-feedback"><?php echo $phoneerr; ?></span>
      <input type="phone" name="phone" class="form-control" id="phone" value="<?php echo @$phone; ?>">
    </div>
    <div class="col-4">
      <label for="title">Title</label> <span id="title-info" class="invalid-feedback"><?php echo $titleerr; ?></span>
      <input type="text" name="title" class="form-control" id="title" value="<?php echo @$title; ?>">
    </div> 
  </div>

  <div class="form-row form-group">
    <div class="col-4">
      <label for="created">Created</label> <span id="created-info" class="invalid-feedback"></span>
      <input type="datetime-local" class="form-control" id="created" disabled value="<?php echo @$created; ?>">
    </div> 
  </div>

  <div class="form-row form-group">
    <div class="col-4">
        <input type="hidden" name = "id" value="<?php echo @$id; ?>">
      <input type="submit" class=" btn bg-success" name="submit" value="<?php echo $submitval; ?>">
    </div> 
  </div>
        
  <?php echo @$alertmsg; ?>

</form>