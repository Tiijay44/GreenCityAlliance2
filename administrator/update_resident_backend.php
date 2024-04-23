<?php
// **Require necessary files:**
// **Establish database connection:**
// **Get company ID from URL parameter:**
// **Process form submission:**
// **Extract form data:**
// **Construct SQL update statement:**
// **Execute update query:**
// **Handle update result:**
// **Close database connection:**
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
        echo '<script>
        alert("Resident updated successfully!");
        setTimeout(function() {
          window.location.href = "index.php";
        }, 5000); 
      </script>';
    } 
    else {
        echo "Error updating data: " . $conn->error;
    }
}



