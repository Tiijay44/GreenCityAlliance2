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

$company_id = $_GET['Company_id'];

if (isset($_GET['Company_id'])) {

    $delete_query = "delete from company where Company_id = '$company_id'";
    $result = $conn->query($delete_query);

    if ($result == true) {
        echo '<script>
        alert("Result successfully deleted");
        setTimeout(function() {
          window.location.href = "index.php";
        },2000); 
      </script>';
    } else {
        echo "Error:" . $delete_query . "<br>" . $conn->error;;
    }
}
