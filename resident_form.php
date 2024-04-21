<?php
require_once('database.php');

$conn = db_connect();

if (isset($_POST["Submit"])) {
    $firstname = $_POST["firstname"];
    $lastname =  $_POST["lastname"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password =  password_hash($_POST["password"], PASSWORD_BCRYPT);
    $gender = $_POST["gender"];
    $area = $_POST["area"];
    $environmental_interests  = $_POST["environmental_interests"];

    $sql = "INSERT INTO RESIDENT(firstname,lastname,email,age ,password,gender,area,environmental_interests) VALUES('$firstname','$lastname','$email','$age' ,'$resident_password','$gender','$area','$environmental_interests')";
    $result = $conn->query($sql);

    if ($result == true) {
        echo "Resident Successfully Inserted";
        header("Location: index.php");
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;;
    }
}

