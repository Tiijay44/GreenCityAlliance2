<?php
// **Require database connection functions:**
// **Establish database connection:**
// **Process form submission for creating a new company:**
// **Extract form data:**
// **Construct SQL insert statement:**
// **Execute insert query:**
// **Handle insert result:**

require_once('database.php');

$conn = db_connect();


if(isset($_POST["Submit"])) {
  $company_name = $_POST["company_name"];
  $email =  $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
  $phone_number = $_POST["phone_number"];
  $product_services = $_POST["product_services"];

  $sql = "INSERT INTO Company(Company_name,Email,Password,Phone_number, Product_services) VALUES('$company_name', '$email', '$password','$phone_number', '$product_services')";
  $result = $conn->query($sql);

  if ($result == true) {
    echo '<script>
    alert("Company Successfully Inserted");
    setTimeout(function() {
      window.location.href = "index.php";
    },500); 
  </script>';
  } 
  else {
    echo "Error:" . $sql . "<br>" . $conn->error;;
  }
}

