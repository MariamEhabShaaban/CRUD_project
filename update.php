<?php
require 'partials/header.php';
require 'Users/users.php';

$errors=[
    "id"=>"",
    "name"=> "",
    "username"=>"",
    "email"=> "",
    "phone"=> "",
    "website"=> ""
];
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
    $is_valid=true;
    $user=array_merge($user,$_POST);
    $is_valid=Validate_User($user,$errors);
    if($is_valid){
       
        $user= updateUser($user_id,$_POST);
      
    if(isset($_FILES['user-image'])){
        UploadImage($_FILES['user-image'],$user);
    }
    header("location:index.php");
}
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