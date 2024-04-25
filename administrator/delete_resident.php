<?php
// **Require database connection functions:**
// **Establish database connection:**// **Extract resident ID from URL parameter:**
// - Check if 'Resident_id' exists in the URL using isset().
// - If present, store it in $product_id for further processing.
// **Process company deletion request (if resident ID is provided):**
 // **Construct SQL delete query:**
 // **Execute delete query:**
 // **Handle delete result:**
require_once('../database.php');

$conn = db_connect();

$resident_id = $_GET['Resident_id'];

$delete_query = "delete from Resident where Resident_id= $resident_id";
$result = $conn->query($delete_query);
if ($result == true) {
    echo '<script>
    alert("Result successfully deleted");
    setTimeout(function() {
      window.location.href = "manage_resident.php";
    },1000); 
  </script>';
} else {
    echo "Error:" . $delete_query . "<br>" . $conn->error;;
}
