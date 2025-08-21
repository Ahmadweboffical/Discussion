<?php
$host="localhost";
$username="root";
$password=null;
$database="discussion";
$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo "database connected";
?>