<?php
// **Require database connection functions:**
// **Establish database connection:**// **Extract company ID from URL parameter:**
// - Check if 'Company_id' exists in the URL using isset().
// - If present, store it in $company_id for further processing.
// **Process company deletion request (if company ID is provided):**
 // **Construct SQL delete query:**
 // **Execute delete query:**
 // **Handle delete result:**
 
require_once('../database.php');
$conn = db_connect();

$area_id = $_GET['Area_id'];

if (isset($_GET['Area_id'])) {

    $delete_query = "delete from Areas where Area_id = '$area_id'";
    $result = $conn->query($delete_query);

    if ($result == true) {
        echo '<script>
        alert("Area successfully deleted");
        setTimeout(function() {
          window.location.href = "manage_area.php";
        },1000); 
      </script>';
    } else {
        echo "Error:" . $delete_query . "<br>" . $conn->error;;
    }
}
