<?php
require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();

$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;

if ($product_id) {
    $sql = "SELECT * FROM product_services WHERE product_id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <h2>Update Company Data</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
            <input type="hidden" name="company_id" value="<?php echo $row['company_id']; ?>">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" value="<?php echo $row['product_name']; ?>"><br><br>
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="<?php echo $row['description']; ?>"><br><br>
            <label for="size">Size:</label>
            <input type="text" name="size" id="size" value="<?php echo $row['size']; ?>"><br><br>
            <label for="environmental_benefits">Environmental Benefits:</label>
            <input type="text" name="environmental_benefits" id="environmental_benefits" value="<?php echo $row['environmental_benefits']; ?>"><br><br>
            
            <button type="submit">Update</button>
        </form>
        <?php
    } else {
        echo "Company not found!";
    }
} else {
    echo "Missing company ID!";
}
