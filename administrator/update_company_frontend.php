<?php
//require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();


$company_id = isset($_GET['Company_id']);


if (isset($_GET['Company_id'])) {

    $sql = "SELECT * FROM Company WHERE Company_id = '$company_id'";
    $result = $conn->query($sql);

    if ($result->num_rows >= 0) {
        $row = $result->fetch_assoc();
?>
        <h2>Update Company Data</h2>
        <form action="update_company_backend.php?Company_id=<?php echo $row['Company_id']; ?>" method="POST">
            <input type="hidden" name="Company_id" value="<?php echo $row['Company_id']; ?>">
            <label for="company_name">Company Name:</label>
            <input type="text" name="Company_name" id="company_name" value="<?php echo $row['Company_name']; ?>"><br><br>

            <label for="email">Email:</label>
            <input type="text" name="Email" id="email" value="<?php echo $row['Email']; ?>"><br><br>

            <label for="password">Password:</label>
            <input type="password" name="Password" id="password" value="<?php echo $row['Password']; ?>"><br><br>

            <label for="phone_number">Phone Number:</label>
            <input type="number" name="Phone_number" id="phone_number" value="<?php echo $row['Phone_number']; ?>"><br><br>

            <label for="product_services">Product/Service:</label>
            <input type="text" name="Product_Services" id="product_services" value="<?php echo $row['Product_Services']; ?>"><br><br>
            <button type="submit" name="Submit">Update</button>
        </form>
<?php
    } else {
        echo "Company not found!";
    }
} else {
    echo "Missing company ID!";
}

