<?php
require 'partials/header.php';
require 'Users/users.php';

if(!isset($_GET['id'])){
    include 'partials/not_found.php';
   exit;
   
}
$user=getUserById($_GET['id']);
if(!$user){
    include 'partials/not_found.php';
   
    exit;  
}
?>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3> <?php echo 'Name : '. $user['name']?></h3>
        </div>
        <div class="card-body">
        <a href="update.php?id=<?php echo $user['id']?>" class="btn btn-outline-secondary">Update</a>
        <a href="delete.php?id=<?php echo $user['id']?>" class="btn btn-outline-danger">Delete</a>
        </div>
        <table class='table'>
    <tbody>
        <tr>
            <th>Name</th>
            <td><?php echo $user['name']?></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><?php echo $user['username']?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $user['email']?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?php echo $user['phone']?></td>
        </tr>
        <tr>
            <th>Website</th>
            <td><a href="<?php echo $user['website']?>"  target="_blank"><?php echo $user['website']?></a>
            </td>
        </tr>
    </tbody>
</table>

        
    </div>
</div>


<?php
require 'partials/footer.php';
?>

