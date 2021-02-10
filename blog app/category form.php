<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" id="category" name="category">
                <div class="regform" >
                    
                    <br><label for="title">Title</label> 
                    <input type="text" name="title" id="title" class="col-8" value="<?php echo @$title; ?>">
                    <br><span id="title_error" class="error"><?php echo @$titleerr; ?></span>

                    <br><label for="content">Content</label> 
                    <textarea name ="content" class="col-8" rows="2" value="<?php echo @$content; ?>"></textarea>
                    <br><span id="content_error" class="error"><?php echo @$contenterr; ?></span>
                    
                    <br><label for="url">URL</label> 
                    <input type="url" name="url" id="url" class="col-8" value="<?php echo @$url; ?>">
                    <br><span id="url_error" class="error"><?php echo @$urlerr; ?></span>

                    <br><label for="metatitle">MetaTitle</label> 
                    <input type="text" name="metatitle" id="metatitle" class="col-8" value="<?php echo @$metatitle; ?>">
                    <br><span id="metatitle_error" class="error"><?php echo @$metatitleerr; ?></span>

                    <label>Category</label>
                    <select name="category[]" id="category" multiple size="3">
                        <option value="" selected disabled></option>
                    <?php
              
                        while($row = mysqli_fetch_array($result)){
                            echo "<option value=".$row['0'].">".$row['0']."</option>";
                        }

                        ?>
                    </select>
                    <span id="category_error" class="error"><?php echo @$categoryerr; ?></span>

                    <br><label for="image">Image</label> 
                    <input type="file" name="image" id="image" class="col-8" value="<?php echo @$image; ?>">
                    <br><span id="image_error" class="error"><?php echo @$imageerr; ?></span>
                    
                    <input type="hidden" name = "id" value="<?php echo @$id; ?>">
                    <br><center><input type="submit" name="addcategory" class="btn btn-success"></center>

                </div> 
            </form>