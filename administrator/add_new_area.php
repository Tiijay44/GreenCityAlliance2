<?php
require_once('admin_access_control');
require_once('database.php');

$conn = db_connect();


// Create a new area
if (isset($_POST["Submit"])) {
    $area_name = $_POST["area_name"];
    $council_id =  $_POST["council_id"];
    
    $sql = "INSERT INTO Areas (area_name, council_id) VALUES ('$area_name', '$council_id')";
    $result = $conn->query($sql);

    if ($result == true) {
        echo "Area Successfully Inserted";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;;
    }
}
?>