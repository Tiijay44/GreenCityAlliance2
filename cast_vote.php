<?php
// Manage existing companies
//require_once('admin_access_control.php');
session_start();
require_once('vote_access.php');
require_once('database.php');
$conn = db_connect();

// if (isset($_SESSION['name'])) {
//     // Session is active, user is logged in
//     echo "Welcome back,  " . $_SESSION['name'];
//     // You can access other session variables here (if set)
// } else {
//     // Session is not active, user is not logged in
//     echo "You are not logged in.";
//     // Redirect to login page or display a login form
// }
// ?>

<h3>Vote For This Product</h3>
<table width="402" border="1">
    <tbody>
        <tr>
            <td colspan="8">
            </td>
        </tr>
        <tr>
            <td width="18">Product_name:</td>
            <td width="18">Company_name:</td>
            <td width="380">Description:</td>
            <td width="150">Size: </td>
            <td width="109">Price:</td>
            <td width="91">Price Category: </td>
            <td width="91">Environmental_Benefits: </td>
            <td width="91">Vote: </td>
        </tr>

        <?php

$product_name = $_SESSION['name'];
        //$product_name = $_GET['Product_name'];

        if (isset($_SESSION['name'])) {

         var_dump($product_name);
            $sql_query = "SELECT p.Product_name, c.Company_name, p.Description, p.Size, p.Price, p.Price_category, p.Environmental_benefits
FROM products_services p
INNER JOIN company c ON p.Company_id = c.Company_id WHERE p.Product_name = 'Bamboo Toothbrushes'";

            echo "did it work";
            $result = $conn->query($sql_query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['Product_name']; ?></td>
                        <td><?php echo $row['Company_name']; ?>
                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['Size']; ?></td>
                        <td><?php echo $row['Price']; ?></td>
                        <td><?php echo $row['Price_category']; ?></td>
                        <td><?php echo $row['Environmental_benefits']; ?></td>
                        <td><a href="register_vote.php?Product_name=<?php echo $row['Product_name']; ?>">
                                YES</a></td>
                        <td><a href="../GreenCityAlliance/Frontend/mainpages/index.html">
                                NO</a></td>
                    </tr> <?php }
                    }
                }
                            ?>