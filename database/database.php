<?php 
  $conn = new mysqli("localhost", "root", "","php_project1");
  if($conn->connect_error){
    die("Sorry Connection Failed");
  }
?>