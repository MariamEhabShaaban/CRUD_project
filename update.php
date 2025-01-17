<?php
require 'partials/header.php';
require 'Users/users.php';

if(!isset($_GET['id'])){
    include 'partials/not_found.php';
   exit;
   
}
$user=getUserById($_GET['id']);
$user_id=$_GET['id'];
if(!$user){
    include 'partials/not_found.php';
   
    exit;  
}
if($_SERVER['REQUEST_METHOD']==='POST'){
    updateUser($user_id,$_POST);
    header("location:index.php");
}

?>
<div class="container mt-5">
    <div class="card mt-10">
        <div class="card-header ">
            <h3> <?php echo 'Update '.$user['name']?></h3>
        </div>
        <div class="card-body form-group">
           <?php require 'form.php'?>
        </div>
</div>



<?php require 'partials/footer.php';?>