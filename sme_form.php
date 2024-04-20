<?php
require_once('database.php');

$conn = db_connect();

if (isset($_POST["Submit"])) {
  $company_name = $_POST["company_name"];
  $email =  $_POST["email"];
  $sme_password = $_POST["password"];
  $phone_number = $_POST["phone_number"];
  $product_services = $_POST["product_services"];

  $sql = "INSERT INTO (company_name,email,sme_password,phone_number, product_services) VALUES('$company_name',' $email','  $sme_password','$phone_number', '$product_services')";
  $result = $conn->query($sql);

  if ($result == true) {
    echo "Company Successfully Inserted";
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;;
  }
}
