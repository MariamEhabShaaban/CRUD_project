<?php
require 'partials/header.php';
require 'Users/users.php';

$user=[
    "id"=>"",
    "name"=> "",
    "username"=>"",
    "email"=> "",
    "phone"=> "",
    "website"=> ""
];

$errors=[
    "id"=>"",
    "name"=> "",
    "username"=>"",
    "email"=> "",
    "phone"=> "",
    "website"=> ""
];

if($_SERVER['REQUEST_METHOD']==='POST'){

 $is_valid=true;
 $user=array_merge($user,$_POST);
//  echo'<pre>';
//  var_dump($user);
//  echo'</pre>';
//  exit;

 $is_valid=Validate_User($user,$errors);
 if($is_valid){
    createUser($user);
    header("location:index.php");
 }
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