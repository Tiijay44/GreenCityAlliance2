<?php
require_once('database.php');

$conn = db_connect();

if (isset($_POST["Submit"])) {
    $company_id = $_POST["company_id"];
    $product_name =  $_POST["product_name"];
    $product_description = $_POST["product_description"];
    $product_size = $_POST["size "];
    $environmental_benefits =  $_POST["environmental_benefits"];
    $price = $_POST["price "];
    $price_category = $_POST["price_category"];


    $sql = "INSERT INTO Products_Services (company_id,product_name,product_description,product_size,environmental_benefits,price,gender,area,environmental_interests,price_category ) VALUES('$company_id',' $product_name',' $product_description',' $product_size ','$environmental_benefits', ' $price ', '$price_category')";
    $result = $conn->query($sql);

    if ($result == true) {
        echo "Resident Successfully Inserted";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;;
    }
}
