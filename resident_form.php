<?php
require_once('database.php');

$conn = db_connect();

if (isset($_POST["Submit"])) {
    $firstName = $_POST["firstName"];
    $lastName =  $_POST["lastName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password =  password_hash($_POST["password"], PASSWORD_BCRYPT);
    $gender = $_POST["gender"];
    $location = $_POST["location"];
    $environmental_interests  = $_POST["environmental_interests"];

    $sql = "INSERT INTO RESIDENT(firstName,lastName,email,age ,password,gender,location,environmental_interests) VALUES('$firstName','$lastName','$email','$age' ,'$password','$gender','$location','$environmental_interests')";
    $result = $conn->query($sql);

    if ($result == true) {
        echo "Resident Successfully Inserted";
      //  header("Location: index.php");
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;;
    }
}



