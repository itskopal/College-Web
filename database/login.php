<?php
  $custom_data = file_get_contents("php://input");
  $data = json_decode($custom_data,true);
  // Connection

  require_once("database.php");

  //values
  $email = $data['email'];
  $password = $data['password'];

  $sql = "SELECT email,password FROM create_account WHERE email = '" . $email . "' AND password = '" . $password . "' ";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    echo json_encode("yes");
  }else{
    echo json_encode("no");
  }


?>