<?php
//require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();

$product_id = isset($_GET['Product_id']);

if (isset($_GET['Product_id'])) {

    $sql = "SELECT * FROM Products_services WHERE Product_id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <h2>Update Product</h2>
        <form action="update_product_backend.php?Product_id=<?php echo $row['Company_id']; ?>" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $row['Product_id']; ?>">
            <input type="hidden" name="company_id" value="<?php echo $row['Company_id']; ?>">

            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" value="<?php echo $row['Product_name']; ?>"><br><br>

            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="<?php echo $row['Description']; ?>"><br><br>

            <label for="size">Size:</label>
            <input type="text" name="size" id="size" value="<?php echo $row['Size']; ?>"><br><br>

            <label for="price">Price:</label>
            <input type="text" name="price" id="price" value="<?php echo $row['Price']; ?>"><br><br>
            
            <label for="environmental_benefits">Environmental Benefits:</label>
            <input type="text" name="environmental_benefits" id="environmental_benefits" value="<?php echo $row['Environmental_benefits']; ?>"><br><br>
            
            <button type="submit" name="Submit">Update</button>
        </form>
        <?php
    } else {
        echo "Company not found!";
    }
} else {
    echo "Missing company ID!";
}
