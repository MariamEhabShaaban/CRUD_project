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
    $updateUser=[];
    foreach($users as $i => $user){
     if($user['id']==$id){
        $users[$i]=$updateUser=array_merge($user,$data);
     }
    }
    
     putJSON($users);
     return $updateUser;
}



function deleteUser($id){
   $users=getUsers();
   foreach($users as $i => $user){
    if($user['id']==$id){
      if(isset($user['extension']) && $user['extension']){
         remove_image($user['id'],$user['extension']);
      }
      array_splice($users,$i,1);
      
    }
   
   } 
   putJSON($users);  
}

function putJSON($data){
  file_put_contents('Users/user.json',json_encode($data,JSON_PRETTY_PRINT));
}

function UploadImage($files,$user){
   if(!is_dir("images")){
      mkdir("images");
  }
  if(isset($files['tmp_name'])){
      $filename=$files['name'];
      $dotpos=strpos($filename,'.');
      $extension=substr($filename,$dotpos+1);
      move_uploaded_file($files['tmp_name'],"images/${user['id']}.${extension}");
  }
  if($extension!==""){
   if(isset($user['extension']) && $user['extension']){
      remove_image($user['id'],$user['extension']);
   }
   $user['extension']=$extension;
  
  }
  updateUser($user['id'],$user);
}

function remove_image($id,$extension){
  return unlink("images/${id}.${extension}");
}

function Validate_User($user,&$errors){
   $is_valid=true;
   if(!$user['name']){
      $is_valid=false;
      $errors['name']="Name is mandatory";
   }
   if(!$user['username'] || strlen($user['username'])<6 ||  strlen($user['username'])>16 ){
      $is_valid=false;
      $errors['username']="username is required and it must be more than 6 and less than 16 characters";
   }

   if(filter_var($user['email'],FILTER_VALIDATE_EMAIL)===false){
      $is_valid=false;
      $errors['email']="enter valid email";
   }

   if(filter_var($user['phone'],FILTER_VALIDATE_INT)===false){
      $is_valid=false;
      $errors['phone']="enter valid phone";
   }

   return $is_valid;

}