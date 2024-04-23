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

if (isset($_POST["Submit"])) {
    $company_id = $_POST["company_id"];
    $product_name =  $_POST["product_name"];
    $product_description = $_POST["product_description"];
    $product_size = $_POST["size "];
    $environmental_benefits =  $_POST["environmental_benefits"];
    $price = $_POST["price "];
    $price_category = $_POST["price_category"];


    $sql = "INSERT INTO Products_Services (company_id,product_name,product_description,product_size,environmental_benefits,price,gender,area,environmental_interests,price_category ) VALUES('$company_id',' $product_name',' $product_description',' $product_size ','$environmental_benefits', ' $price ', '$price_category')";
    $result = $conn->query($sql);

    if ($result == true) {
        echo '<script>
        alert("Product Successfully Inserted");
        setTimeout(function() {
          window.location.href = "index.php";
        },5000); 
      </script>';
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;;
    }
}
