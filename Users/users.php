<?php

function getUsers(){
return json_decode(file_get_contents('Users/user.json'),true);
}

function getUserById($id){
   $users=getUsers();
   foreach($users as $user){
    if($user['id']==$id){
        return $user;
    }
   }
   return null;
}

function createUser($data){
    $data['id']=rand(10000,20000);
    $users=getUsers();
    $users[]=$data;
   putJSON($users);

}

function updateUser($id,$data){
    $users=getUsers();
    foreach($users as $i => $user){
     if($user['id']==$id){
        $users[$i]=array_merge($user,$data);
     }
    }
     putJSON($users);
}



function deleteUser($id){
   $users=getUsers();
   foreach($users as $i => $user){
    if($user['id']==$id){
      array_splice($users,$i,1);
    }
   } 
   putJSON($users);  
}

function putJSON($data){
  file_put_contents('Users/user.json',json_encode($data,JSON_PRETTY_PRINT));
}