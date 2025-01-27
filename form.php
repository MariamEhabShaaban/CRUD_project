
<form method="POST" action="" enctype="multipart/form-data">
    <div class="form-group">
        <lablel for="name">Name</label>
        <input   value="<?php echo !isset($user['id'])?'':$user['name']?>" 
        class="form-control  <?php echo $errors['name']?'is-invalid':''?>" id="name" name="name" placeholder="Enter Your Name">
        <p class="invalid-feedback"><?php echo $errors['name']?></p>
    </div>
        
    <div class="form-group">
        <lablel  for="user-name">User Name</label>
        <input  value="<?php echo !isset($user['id'])?'':$user['username']?>"
        class="form-control <?php echo $errors['username']?'is-invalid':''?>" id="user-name" name="username" placeholder="Enter Your User-Name">
        <p class="invalid-feedback"><?php echo $errors['username']?></p>
    </div>   
    <div class="form-group">
        <lablel for="email">Email</label>
        <input value="<?php echo !isset($user['id'])?'':$user['email']?>"
        class="form-control  <?php echo $errors['email']?'is-invalid':''?>"  id="email" name="email" placeholder="Enter Your Email">
        <p class="invalid-feedback"><?php echo $errors['email']?></p>
    </div>

     <div class="form-group">
        <lablel for="phone">Phone</label>
        <input value="<?php echo !isset($user['id'])?'':$user['phone']?>"
        class="form-control  <?php echo $errors['phone']?'is-invalid':''?>" id="phone" name="phone" placeholder="Enter Your Phone">
        <p class="invalid-feedback"><?php echo $errors['phone']?></p>
    </div>

    <div class="form-group">
        <lablel  for="website">Website</label>
        <input value="<?php echo !isset($user['id'])?'':$user['website']?>" 
        class="form-control" id="website" name="website" placeholder="Enter Your Website">
    </div>

    <div class="form-group">
        <lablel  for="user-image">Image</label>
        <input type="file"  class="form-control-file" name="user-image" id="user-image"> 
    </div>
    <div class="form-group">
         <input name ="submit" type="submit"  class="btn btn-success form-control" value="Submit">
    </div>
</form>