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
if($_SERVER['REQUEST_METHOD']==='GET'){
    deleteUser($_GET['id']);
    header("location:index.php");

}
?>