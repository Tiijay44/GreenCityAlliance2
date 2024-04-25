<?php
// **Require database connection functions:**
// **Establish database connection:**
// **Process form submission for creating a new company:**
// **Extract form data:**
// **Construct SQL insert statement:**
// **Execute insert query:**
// **Handle insert result:**
  
require_once('../../database.php');

$conn = db_connect();

if (isset($_POST["Submit"])) {
    $firstName = $_POST["firstName"];
    $lastName =  $_POST["lastName"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password =  password_hash($_POST["password"], PASSWORD_BCRYPT);
    $gender = $_POST["gender"];
    $location = $_POST["area_name"];
    $environmental_interests  = $_POST["environmental_interests"];

    $sql = "INSERT INTO RESIDENT(FirstName, LastName, Email,AGE, Password, Gender, Location, Environmental_interests) VALUES('$firstName','$lastName','$email','$age' ,'$password','$gender','$location','$environmental_interests')";
    $result = $conn->query($sql);

    if ($result == true) {
        echo '<script>
        alert("Resident Successfully Inserted");
        setTimeout(function() {
          window.location.href = "resident_login.html";
        },2000); 
      </script>';
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;;
    }
}




