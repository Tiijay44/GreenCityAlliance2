<?php
// **Require database connection functions:**
// **Establish database connection:**
// **Process form submission for creating a new company:**
// **Extract form data:**
// **Construct SQL insert statement:**
// **Execute insert query:**
// **Handle insert result:**

require_once('database.php');
require_once('functions.php');

$conn = db_connect();

if (isset($_POST["Submit"])) {

  $company_name = $_POST["company_name"];
  $product_name =  $_POST["product_name"];
  $description = $_POST["product_description"];
  $size = $_POST["size"];
  $environmental_benefits =  $_POST["environmental_benefits"];
  $price = $_POST["price"];
  $price_category = calculatePriceCategory($_POST["price"]);

  $sql_getId = "Select Company_id FROM Company WHERE Company_name = '$company_name'";
  $result = $conn->query($sql_getId);


  if ($result->num_rows >= 0) {

    $row = $result->fetch_assoc();
    $company_id = $row['Company_id'];

    $sql = "INSERT INTO Products_Services (Company_id, Product_name, Description,Size, Environmental_benefits, Price, Price_category ) VALUES('$company_id',' $product_name',' $description',' $size ','$environmental_benefits', '$price', '$price_category')";
    $result = $conn->query($sql);

    if ($result === true) {
      echo 'Product sucessully added';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "Invalid Company name";
  }
} else {
  echo "not working";
}
