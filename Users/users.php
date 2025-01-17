<?php

function getUsers(){
return json_decode(file_get_contents('users.json'),true);
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
    $data['id']=rand(1,1000);
    $json_data = json_encode($data);
    file_put_contents('users.json',$json_data,FILE_APPEND);

}

function updateUser($id){
    
}


function deleteUser($id){
    
}

