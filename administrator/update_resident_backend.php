<?php
// require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();


$resident_id = isset($_GET['Resident_id']);

if (isset($_POST["Submit"])) {
    $firstName = $_POST["firstname"];
    $lastName =  $_POST["lastname"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password =  password_hash($_POST["password"], PASSWORD_BCRYPT);
    $gender = $_POST["gender"];
    $location = $_POST["location"];
    $environmental_interests  = $_POST["environmental_interest"];


    $sql = "UPDATE Resident SET FirstName = '$firstName', LastName = '$lastName', Email = '$email', AGE = '$age', Password = '$password', Environmental_interests = '$environmental_interests' WHERE Resident_id = '$resident_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Resident updated successfully!";
    } 
    else {
        echo "Error updating data: " . $conn->error;
    }
}



