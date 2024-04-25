<?php
session_start();
require_once('database.php');


if (isset($_SESSION['name'])) {
    // Session is active, user is logged in
    echo "Welcome back,  " . $_SESSION['name'];
    // You can access other session variables here (if set)
} else {
    // Session is not active, user is not logged in
    echo "You are not logged in.";
    // Redirect to login page or display a login form
}

$conn = db_connect();
$product_name = $_GET['Product_name'];

if (isset($_GET['Product_name'])) {

    $sql_getProductId = "Select Product_id FROM Products_services WHERE Product_name = '$product_name'";
    $productResult = $conn->query($sql_getProductId);

    if ($productResult->num_rows >= 0) {
        $row = $productResult->fetch_assoc();
        $product_id = $row['Product_id'];


        $sql_getCompanyId = "Select Company_id FROM Products_services WHERE Product_name = '$product_name'";
        $companyResult = $conn->query($sql_getCompanyId);

        if ($companyResult->num_rows >= 0) {
            $row = $companyResult->fetch_assoc();
            $company_id = $row['Company_id'];

            $sql = "INSERT INTO Vote(Resident_id,Product_id) VALUES('$product_id', '$company_id')";
            $result = $conn->query($sql);

            if ($result === true) {
                echo '<script>
                alert("Vote Sucessfull!");
                setTimeout(function() {
                  window.location.href = "../GreenCityAlliance/Frontend/mainpages/index.html";
                },500); 
              </script>';
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            } else {
              echo '<script>
      alert("Invalid Company name");
      setTimeout(function() {
        window.location.href = "../GreenCityAlliance/Frontend/Resident/resident_login.php";
      },500); 
    </script>';
            }
        
    }
}
