<?php
include ('../common/db.php');
if (isset($_POST['signup'])) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $address = $_POST['address'];

  $users=$conn->prepare("Insert into `users`
   (`Id `, `username`,`email`,`password`,`address`)
   values(NULL,'$username','$email','$password','$address');
   ");
   $result= $users->execute();
   if($result){
      echo "New user regsitered";   
   }else{
         echo "User not regsiter";
      }
}
?>