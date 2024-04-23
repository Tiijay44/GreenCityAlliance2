<?php
// **Require necessary files:**
// **Establish database connection:**
// **Get company ID from URL parameter:**
// **Process form submission:**
// **Extract form data:**
// **Construct SQL update statement:**
// **Execute update query:**
// **Handle update result:**
// **Close database connection:**
// require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();


$product_id = isset($_GET['Product_id']);

if (isset($_POST["Submit"])) {
    $product_name =  $_POST["product_name"];
    $description = $_POST["description"];
    $size = $_POST["size"];
    $price = $_POST["price"];
    $environmental_benefits =  $_POST["environmental_benefits"];


    $sql = "UPDATE Products_services SET Product_name = '$product_name', Description = '$description', Size = '$size', Price = '$price', Environmental_benefits = '$environmental_benefits' WHERE Product_id = '$product_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo '<script>
        alert("Product updated successfully!");
        setTimeout(function() {
          window.location.href = "index.php";
        }, 5000); 
      </script>';
    } else {
        echo "Error updating data: " . $conn->error;
    }
}
db_disconnect($conn);
