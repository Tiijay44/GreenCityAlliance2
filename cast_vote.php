<?php
// Manage existing companies
//require_once('admin_access_control.php');
session_start();
require_once('vote_access.php');
require_once('database.php');
$conn = db_connect();
?>

<h3>All Products</h3>
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
      
       $product_name = $_SESSION['Product_name'];


        if (isset($_SESSION['name'])) {
            $sql_query = "SELECT p.Product_name, c.Company_name, p.Description, p.Size, p.Price, p.Price_category, p.Environmental_benefits
FROM products_services p
INNER JOIN company c ON p.Company_id = c.Company_id WHERE p.Product_name = '$product_name';";

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
                        <td><a href="vote_login_form.php?Product_name=<?php echo $row['Product_name']; ?>">
                            YES</a></td>
                            <td><a href="view_products.php">
                            NO</a></td>
                    </tr> <?php }
                    }
                } ?>