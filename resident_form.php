<?php
require_once('database.php');

$conn = db_connect();

if (isset($_POST["Submit"])) {
    $firstName = $_POST["firstname"];
    $lastName =  $_POST["lastname"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $resident_password =  $_POST["resident_password"];
    $gender = $_POST["gender"];
    $area = $_POST["area"];
    $environmental_interests  = $_POST["environmental_interests"];

    $sql = "INSERT INTO RESIDENT(firstName,lastName,email,age ,resident_password,gender,area,environmental_interests) VALUES('$company_name',' $email',' $password','$password_hash','$phone_number', '$product_services')";
    $result = $conn->query($sql);

    if ($result == true) {
        echo "Resident Successfully Inserted";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;;
    }
}

