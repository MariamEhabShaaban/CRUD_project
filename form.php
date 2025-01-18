




<form method="POST" action="">
    <lablel for="name">Name</label><br>
    <input   value="<?php echo !isset($user['id'])?'':$user['name']?>" 
    class="form-control" id="name" name="name" placeholder="Enter Your Name"><br>

    <lablel for="user-name">User Name</label><br>
    <input  value="<?php echo !isset($user['id'])?'':$user['username']?>"
    class="form-control" id="user-name" name="username" placeholder="Enter Your User-Name"><br>

    <lablel for="email">Email</label><br>
    <input value="<?php echo !isset($user['id'])?'':$user['email']?>"
     class="form-control"  type="email" id="email" name="email" placeholder="Enter Your Email"><br>

    <lablel for="phone">Phone</label><br>
    <input value="<?php echo !isset($user['id'])?'':$user['phone']?>"
    class="form-control" id="phone" name="phone" placeholder="Enter Your Phone"><br>

    <lablel  for="website">Website</label><br>
    <input value="<?php echo !isset($user['id'])?'':$user['website']?>" 
    class="form-control" id="website" type="url" name="website" placeholder="Enter Your Website"><br>

    <br>
    <input name ="submit" type="submit"  class="btn btn-success form-control" value="Submit">
</form>