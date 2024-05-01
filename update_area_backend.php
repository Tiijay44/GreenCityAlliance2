<?php
// require_once('admin_access_control.php');
require_once('database.php');
$conn = db_connect();


$area_id = isset($_GET['Area_id']);


if (isset($_POST["Submit"])) {
    $area_name = $_POST['area_name'];

    $sql = "UPDATE Areas SET Area_name = '$area_name' WHERE Area_id = '$area_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo '<script>
        alert("Area data updated successfully!!");
        setTimeout(function() {
          window.location.href = "manage_company.php";
        },500); 
      </script>';
    } 
    else {
        echo "Error updating data: " . $conn->error;
    }
}


db_disconnect($conn);
