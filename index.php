<?php
require 'Users/users.php';
$users=getUsers();
require 'partials/header.php';
?>
<div class="container">
    <div>
    <a href="create.php" class="btn btn-outline-info mt-5 w-100">Add User</a>
    </div>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>
            <?php
            foreach($users as $user):?>
            <tr>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['username']?></td>
                <td><?php echo $user['email']?></td>
                <td><?php echo $user['phone']?></td>
                <td><a href="<?php echo $user['website']?>"  target="_blank"><?php echo $user['website']?></a></td>
                <td>
                    <a href="view.php?id=<?php echo $user['id']?>" class="btn btn-outline-info">View</a>
                    <a href="update.php?id=<?php echo $user['id']?>" class="btn btn-outline-secondary">Update</a>
                    <a href="delete.php?id=<?php echo $user['id']?>" class="btn btn-outline-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    
        
</div>


<?php require 'partials/footer.php';?>
