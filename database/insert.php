<?php
  $custom_data = file_get_contents("php://input");
  $data = json_decode($custom_data,true);
  // Connection

  require_once("database.php");

  //sql query
  $sql = "INSERT INTO create_account(name,email,password,address,p_number) VALUES(?,?,?,?,?)";

  $result = $conn->prepare($sql);
  if($result){
    $result->bind_param("ssssi",$name,$email,$password,$address,$p_number);
    //values
    $name = $data['name'];
    $email = $data['email'];
    $password = $data['password'];
    $address = $data['address'];
    $p_number = $data['p_number'];

    $result->execute();
    echo json_encode("yes");
  }else{
    echo json_encode("no");
  }

  
?>