<?php
require_once('database.php');

$conn = db_connect();



if(isset($_POST["Submit"])) {
  $company_name = $_POST["company_name"];
  $email =  $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
  $phone_number = $_POST["phone_number"];
  $product_services = $_POST["product_services"];

  $sql = "INSERT INTO SME(company_name,email,password,phone_number, product_services) VALUES('$company_name', '$email', '$password','$phone_number', '$product_services')";
  $result = $conn->query($sql);

  if ($result == true) {
    echo "Company Successfully Inserted";
    header("Location: index.php");
  } 
  else {
    echo "Error:" . $sql . "<br>" . $conn->error;;
  }
}

