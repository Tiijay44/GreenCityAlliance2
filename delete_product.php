<?php
// **Require database connection functions:**
// **Establish database connection:**// **Extract company ID from URL parameter:**
// - Check if 'Product_id' exists in the URL using isset().
// - If present, store it in $product_id for further processing.
// **Process company deletion request (if product ID is provided):**
 // **Construct SQL delete query:**
 // **Execute delete query:**
 // **Handle delete result:**
require_once('database.php');

$conn = db_connect();

$product_id = $_GET['Product_id'];

$delete_query = "delete from Products_services where Product_id = $product_id";
$result = $conn->query($delete_query);
if ($result == true) {
    echo '<script>
    alert("Result successfully deleted");
    setTimeout(function() {
      window.location.href = "manage_product.php";
    },1000); 
  </script>';
} else {
    echo "Error:" . $delete_query . "<br>" . $conn->error;;
}
