<?php
require 'partials/header.php';
require 'users.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
// CREATE USER FUNCTION
    createUser($_POST);
}

?>
<div class="container mt-5" >
    <div class="card ">
        <div class="card-header ">
            <h3> <?php echo 'Add New User'?></h3>
        </div>
        <div class="card-body form-group">
        <?php require 'form.php'?>
        </div>
</div>



<?php require 'partials/footer.php';?>