<?php
   // require_once('admin_access_control.php');
    require_once('../database.php');
    $conn = db_connect();



    $company_id = $_POST['company_id'];
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $phone_number = $_POST['phone_number'];


    $sql = "UPDATE sme SET name = '$company_name', email = '$email', password = '$password', phone_number = '$phone_number' WHERE company_id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Company data updated successfully!";
    } else {
        echo "Error updating data: " . $conn->error;
    }

    db_disconnect($conn);
?>
