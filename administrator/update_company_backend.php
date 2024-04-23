<?php
// require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();


$company_id = isset($_GET['Company_id']);

if (isset($_POST["Submit"])) {
    $company_name = $_POST['Company_name'];
    $email = $_POST['Email'];
    $password = password_hash($_POST["Password"], PASSWORD_BCRYPT);
    $phone_number = $_POST['Phone_number'];
    $products_services = $_POST['Product_Services'];

    $sql = "UPDATE Company SET Company_name = '$company_name', Email = '$email', Password = '$password', Phone_number = '$phone_number', Product_Services = '$products_services' WHERE Company_id = '$company_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Company data updated successfully!";
    } 
    else {
        echo "Error updating data: " . $conn->error;
    }
}


db_disconnect($conn);
