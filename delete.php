<?php
require 'partials/header.php';
require 'Users/users.php';

if(!isset($_POST['id'])){
    include 'partials/not_found.php';
   exit;
   
}
$user=getUserById($_POST['id']);
$user_id=$_POST['id'];
if(!$user){
    include 'partials/not_found.php';
   
    exit;  
}
if($_SERVER['REQUEST_METHOD']==='POST'){
    deleteUser($_POST['id']);
    header("location:index.php");

}
?>